<?
  include "File.php";
  include "Log.php";
  include "Router.php";
  include "controller/page.php";
  include "controller/news.php";
  


  $router = new Router;
  $router->get("/", "\Controller\Page::index");
  $router->get("/news/", "\Controller\News::index");
  $router->get("/news/:id", "\Controller\News::index");
  
  $router->run();
  
//  call_user_func($arUserFunc);
  
?>

