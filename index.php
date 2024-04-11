<?php
ob_start();
date_default_timezone_set("America/Sao_Paulo");
require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */

use CoffeeCode\Router\Router;
use Source\Core\Session;

$session = new Session();
$route = new Router(url(), ":");
$route->namespace("Source\App");

/**
 * WEB ROUTES
 */
$route->group(null);
$route->get("/", "Web:forget");
$route->post("/", "Web:forget");
$route->get("/cadastrar", "Web:register");
$route->post("/cadastrar", "Web:register");
$route->get("/recuperar/{code}", "Web:reset");
$route->post("/recuperar/resetar", "Web:reset");

//optin
$route->group(null);
$route->get("/confirma", "Web:confirm");
$route->get("/obrigado/{email}", "Web:success");
$route->post("/obrigado", "Web:success");

//services
$route->group(null);
$route->get("/termos", "Web:terms");

/**
 * APP
 */
$route->group("/app");
$route->get("/", "App:home");
$route->get("/assinatura", "App:signature");
$route->get("/perfil", "App:profile");
$route->post("/perfil/{type}", "App:profile");
$route->get("/images", "App:images");
$route->post("/images", "App:images");
$route->post("/media/{id}", "App:media");
$route->get("/videos", "App:videos");
$route->post("/videos", "App:videos");
$route->get("/views", "App:views");
$route->get("/views/{page}", "App:views");
$route->get("/sair", "App:logout");
/**
 * ADMIN ROUTES
 */
$route->namespace("Source\App\Admin");
$route->group("/admin");
$route->get("/logoff", "Dash:logoff");

//login
$route->get("/", "Login:root");
$route->get("/login", "Login:login");
$route->post("/login", "Login:login");

//dash
$route->get("/dash", "Dash:dash");
$route->get("/dash/home", "Dash:home");
$route->post("/dash/home", "Dash:home");

//control
$route->get("/control/home", "Control:home");
$route->get("/control/subscriptions", "Control:subscriptions");
$route->post("/control/subscriptions", "Control:subscriptions");
$route->get("/control/subscriptions/{search}/{page}", "Control:subscriptions");
$route->get("/control/subscription/{id}", "Control:subscription");
$route->post("/control/subscription/{id}", "Control:subscription");
$route->get("/control/subscription/{id}/{order_id}", "Control:subscription");
$route->post("/control/subscription/{id}/{order_id}", "Control:subscription");

$route->get("/control/orders", "Control:orders");
$route->get("/control/orders/{search}/{page}", "Control:orders");
$route->get("/control/order/{id}", "Control:order");
$route->post("/control/order/{id}", "Control:order");

$route->get("/control/plans", "Control:plans");
$route->get("/control/plans/{page}", "Control:plans");
$route->get("/control/plan", "Control:plan");
$route->post("/control/plan", "Control:plan");
$route->get("/control/plan/{plan_id}", "Control:plan");
$route->post("/control/plan/{plan_id}", "Control:plan");

//blog
$route->get("/blog/home", "Blog:home");
$route->post("/blog/home", "Blog:home");
$route->get("/blog/home/{search}/{page}", "Blog:home");
$route->get("/blog/post", "Blog:post");
$route->post("/blog/post", "Blog:post");
$route->get("/blog/post/{post_id}", "Blog:post");
$route->post("/blog/post/{post_id}", "Blog:post");
$route->get("/blog/categories", "Blog:categories");
$route->get("/blog/categories/{page}", "Blog:categories");
$route->get("/blog/category", "Blog:category");
$route->post("/blog/category", "Blog:category");
$route->get("/blog/category/{category_id}", "Blog:category");
$route->post("/blog/category/{category_id}", "Blog:category");

//config
$route->get("/config/home", "Config:config");
$route->post("/config/home", "Config:config");

//banner
$route->get("/banner/home", "Banners:home");
$route->post("/banner/home", "Banners:home");
$route->get("/banner/banner", "Banners:banner");
$route->post("/banner/banner", "Banners:banner");
$route->get("/banner/banner/{banner_id}", "Banners:banner");
$route->post("/banner/banner/{banner_id}", "Banners:banner");

//local
$route->get("/local/home", "Local:home");
$route->get("/local/home/{page}", "Local:home");
$route->get("/local/estado", "Local:state");
$route->post("/local/estado", "Local:state");
$route->get("/local/estado/{state_id}", "Local:state");
$route->post("/local/estado/{state_id}", "Local:state");
$route->get("/local/cidade/{state_id}", "Local:city");
$route->post("/local/cidade/{state_id}", "Local:city");
$route->get("/local/cidade/{state_id}/{city_id}", "Local:city");
$route->post("/local/cidade/{state_id}/{city_id}", "Local:city");

//faqs
$route->get("/faq/home", "Faq:home");
$route->get("/faq/home/{page}", "Faq:home");
$route->get("/faq/channel", "Faq:channel");
$route->post("/faq/channel", "Faq:channel");
$route->get("/faq/channel/{channel_id}", "Faq:channel");
$route->post("/faq/channel/{channel_id}", "Faq:channel");
$route->get("/faq/question/{channel_id}", "Faq:question");
$route->post("/faq/question/{channel_id}", "Faq:question");
$route->get("/faq/question/{channel_id}/{question_id}", "Faq:question");
$route->post("/faq/question/{channel_id}/{question_id}", "Faq:question");

//users
$route->get("/users/home", "Users:home");
$route->post("/users/home", "Users:home");
$route->get("/users/home/{search}/{page}", "Users:home");
$route->get("/users/user", "Users:user");
$route->post("/users/user", "Users:user");
$route->get("/users/user/{user_id}", "Users:user");
$route->post("/users/user/{user_id}", "Users:user");

//denounce
$route->get("/denounce/home", "Denounce:home");
$route->post("/denounce/home", "Denounce:home");
$route->get("/denounce/home/{page}", "Denounce:home");
$route->get("/denounce/denunciation", "Denounce:denunciation");
$route->post("/denounce/denunciation", "Denounce:denunciation");
$route->get("/denounce/denunciation/{id}", "Denounce:denunciation");
$route->post("/denounce/denunciation/{id}", "Denounce:denunciation");

//pix
$route->get("/pix/home", "Pix:home");
$route->post("/pix/home", "Pix:home");
$route->get("/pix/home/{search}/{page}", "Pix:home");
$route->get("/pix/pix", "Pix:user");
$route->post("/pix/pix", "Pix:user");
$route->get("/pix/pix/{order_id}", "Pix:user");
$route->post("/pix/pix/{order_id}", "Pix:user");

//message
$route->get("/messages/home", "Messages:home");
$route->get("/messages/message", "Messages:message");
$route->post("/messages/message", "Messages:message");
$route->get("/messages/message/{search}/{page}", "Messages:message");
$route->get("/messages/message/{id}", "Messages:message");
$route->post("/messages/message/{id}", "Messages:message");

//notification center
$route->post("/notifications/count", "Notifications:count");
$route->post("/notifications/list", "Notifications:list");

//END ADMIN
$route->namespace("Source\App");

/**
 * PAY ROUTES
 */
$route->group("/pay");
$route->post("/create", "Pay:create");
$route->post("/pix", "Pay:pix");
$route->post("/update", "Pay:update");

/**
 * ERROR ROUTES
 */
$route->group("/ops");
$route->get("/{errcode}", "Web:error");

/**
 * ROUTE
 */
$route->dispatch();

/**
 * ERROR REDIRECT
 */
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();