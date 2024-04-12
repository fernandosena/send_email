<?php
//ini_set('display_errors',1);
/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", '');
define("CONF_DB_NAME", "send_email");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "http://localhost/send_email");
define("CONF_URL_TEST", "http://localhost/send_email");

/**
 * SITE
 */
define("CONF_SITE_NAME", "Send Email");
define("CONF_SITE_TITLE", "exemplo");
define("CONF_SITE_DESC",
    "A ".CONF_SITE_NAME." exemplo ");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "exemplo.com");
define("CONF_SITE_ADDR_STREET", "");
define("CONF_SITE_ADDR_NUMBER", "");
define("CONF_SITE_ADDR_COMPLEMENT", "");
define("CONF_SITE_ADDR_CITY", "");
define("CONF_SITE_ADDR_STATE", "");
define("CONF_SITE_ADDR_ZIPCODE", "");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "web");
define("CONF_VIEW_APP", "app");
define("CONF_VIEW_ADMIN", "adm");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.zoho.com");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "sistema@companhiavip.com");
define("CONF_MAIL_PASS", "Rede2050kl@");
define("CONF_MAIL_SENDER", ["name" => CONF_SITE_NAME, "address" => "sistema@companhiavip.com"]);
define("CONF_MAIL_SUPPORT", "contato@companhiavip.com");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");
define("CONF_PHONE_SUPPORT", "(99) 9 9999-9999");
