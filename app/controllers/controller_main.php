<?php
function action_index(){
    return renderViewWithTemplate("main","default",[
        "title"=>"Главная",
        "errors"=>@$_COOKIE['error'],

            ]);
}
function action_contacts(){
    $data=[];
    $data["title"]="Контакты";


    return renderViewWithTemplate("contacts","default",$data);
}