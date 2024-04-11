# Send Email

1) Baixe os arquivos para a sua maquina
2) ative a extenção do gd e o zip no php.ini

~~~php
extension=gd
extension=zip
~~~

2) execute o comando abaixo para baixar as dependências do projeto
    
~~~php
php composer.phar update
~~~

3) troque o arquivo htaccess.txt para .htaccess

4) entre dentro do diretório source > Boot > Config.php e adicione as credênciais para se conectar ao servidor de email
~~~php
define("CONF_MAIL_HOST", "smtp.zoho.com"); #servidor smtp
define("CONF_MAIL_PORT", "587");  #porta do servidor
define("CONF_MAIL_USER", ""); # usuario ou e-mail para autenticação
define("CONF_MAIL_PASS", ""); # senha de autentucação
define("CONF_MAIL_SENDER", ["name" => CONF_SITE_NAME, "address" => ""]); # usuario ou e-mail para autenticação
define("CONF_MAIL_SUPPORT", ""); # email de supoer (opcional)
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");
~~~

caso não tenha um servidor de email recomendo utilizar o zoho. é gratuito

<https://www.zoho.com/pt-br/mail/>

5) importe o arquivo **send_email.sql** em seu banco de dados 
