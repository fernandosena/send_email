<?php

namespace Source\Models;

use Source\Core\Model;
use Source\Models\Address;
use Source\Models\InfoUser;
use Source\Models\App\AppCity;

class User extends Model
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("users", ["id"], ["first_name", "last_name", "email", "password"]);
    }

    /**
     * @param string $fullName
     * @param string $email
     * @param string $password
     * @return User
     */
    public function bootstrap(
        string $first_name,
        string $last_name,
        string $email,
        string $password
    ): User {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        return $this;
    }

    /**
     * @param string $email
     * @param string $columns
     * @return null|User
     */
    public function findByEmail(string $email, string $columns = "*"): ?User
    {
        $find = $this->find("email = :email", "email={$email}", $columns);
        return $find->fetch();
    }

    /**
     * @return string|null
     */
    public function photo(): ?string
    {
        if ($this->photo && file_exists(__DIR__ . "/../../" . CONF_UPLOAD_DIR . "/{$this->photo}")) {
            return $this->photo;
        }

        return null;
    }

    public function address()
    {
        return (new Address())->findByUserId($this->id);
    }

    public function infoUser()
    {
        return (new InfoUser())->findByUserId($this->id);
    }
    public function city(int $id)
    {
        return (new AppCity())->findById($id);
    }

    public function findAdvertisement(?string $terms = null, ?string $params = null, string $columns = "*"): ?User
    {
        if((!empty($terms)) || (!empty($params))){
            return $this->find("{$terms} AND advertisement = :ad", "$params&ad=S", $columns)->fetch();
        }
        
        return $this->find($terms, $params, $columns)->fetch();
    }


    /**
     * @return bool
     */
    public function save(): bool
    {
        if (!$this->required()) {
            $this->message->warning("Nome, sobrenome, email e senha são obrigatórios");
            return false;
        }

        if (!is_email($this->email)) {
            $this->message->warning("O e-mail informado não tem um formato válido");
            return false;
        }
        
        if (!is_passwd($this->password)) {
            $min = CONF_PASSWD_MIN_LEN;
            $max = CONF_PASSWD_MAX_LEN;
            $this->message->warning("A senha deve ter entre {$min} e {$max} caracteres");
            return false;
        } else {
            $this->password = passwd($this->password);
        }

        /** User Update */
        if (!empty($this->id)) {
            $userId = $this->id;

            if ($this->find("username = :u AND id != :i", "u={$this->username}&i={$userId}", "id")->fetch()) {
                $this->message->warning("O usuário informado já está cadastrado");
                return false;
            }

            if ($this->find("document = :d AND id != :i", "d={$this->document}&i={$userId}", "id")->fetch()) {
                $this->message->warning("O CPF informado já está cadastrado");
                return false;
            }

            if ($this->find("email = :e AND id != :i", "e={$this->email}&i={$userId}", "id")->fetch()) {
                $this->message->warning("O e-mail informado já está cadastrado");
                return false;
            }

            if(!empty($this->fantasy_name)){
                $username = str_slug($this->fantasy_name)."-".time();
                $this->username = $username;
            }
            
            $this->update($this->safe(), "id = :id", "id={$userId}");
            if ($this->fail()) {
                $this->message->error("Erro ao atualizar, verifique os dados");
                return false;
            }
        }

        /** User Create */
        if (empty($this->id)) {

            if ($this->findByEmail($this->email, "id")) {
                $this->message->warning("O e-mail informado já está cadastrado");
                return false;
            }

            $userId = $this->create($this->safe());
            if ($this->fail()) {
                $this->message->error("Erro ao cadastrar, verifique os dados");
                return false;
            }
        }

        $this->data = ($this->findById($userId))->data();
        return true;
    }
}