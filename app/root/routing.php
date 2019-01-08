<?php

function routeExecute($route){
    include FNSPATH."view_fns.php";
    include FNSPATH."guess_fns.php";
    $route = explode("@",$route);
    $controller_filename = CONTROLLERPATH."controller_{$route[0]}.php";
    $action_name = "action_{$route[1]}";
    include $controller_filename;
    return call_user_func($action_name);
}



function navigate(){
    $routes = include ROOTPATH."routing_config.php";

    $url = $_SERVER["REQUEST_URI"];
    $url=trim(explode("?",$url)[0],"/");
    foreach ($routes as $key=>$value){
        if($url===trim($key,"/"))
            return routeExecute($value);
    }

    return routeExecute("error@404");

}