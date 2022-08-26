<?php
session_start();
require_once __DIR__.'/library/RequirePage.php';
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/library/Twig.php';
require_once __DIR__.'/library/CheckSession.php';

$user = $_SESSION ? $_SESSION['user_id'] : 'Visitor';
$ipaddress = $_SERVER['REMOTE_ADDR'];
$date = date('d-m-y h:i:s');

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';
$controllerLogbook = __DIR__.'/controller/ControllerLogbook.php';

if($url == '/'){
  $controllerHome = __DIR__.'/controller/ControllerHome.php';
  require_once $controllerHome;
  $controller = new ControllerHome;

  require_once $controllerLogbook;
  $page = 'home';
  $controllerLogbook = new ControllerLogbook;
  $controllerLogbook->create($ipaddress, $date, $user, $page);

  echo $controller->index();
}else{
  $requestURL=$url[0];
  $requestURL = ucfirst($requestURL);
  $controllerPath = __DIR__.'/controller/Controller'.$requestURL.'.php';
  
  require_once $controllerLogbook;
  $page = $url[0];
  $controllerLogbook = new ControllerLogbook;
  $controllerLogbook->create($ipaddress, $date, $user, $page);

  if(file_exists($controllerPath)){
    require_once $controllerPath;
    $controllerName = 'Controller'.$requestURL;
    $controller = new $controllerName;

    if(isset($url[1])){
      $method = $url[1];

      $page = $url[0].'/'.$url[1];
      $controllerLogbook = new ControllerLogbook;
      $controllerLogbook->create($ipaddress, $date, $user, $page);

      if(isset($url[2])) {
        $value = $url[2];

        $page = $url[0].'/'.$url[1].'/'.$url[2];
        $controllerLogbook = new ControllerLogbook;
        $controllerLogbook->create($ipaddress, $date, $user, $page);

        echo $controller->$method($value);

      } else {
        echo $controller->$method();
      }

    }else{
      echo $controller->index();
    }
  }
  else{
    $controllerHome = __DIR__.'/controller/ControllerHome.php';
    require_once $controllerHome;
    $controller = new ControllerHome;

    echo $controller->error();
  }
}


?>