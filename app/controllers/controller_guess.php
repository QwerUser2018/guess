<?php
include_once FNSPATH."guess_fns.php";
//sessionAutostart();

function action_check(){
    $number = $_GET["number"];
    compare_numbers($number);
    header("Location:/");

}
function action_start(){
    if (!empty($_GET["yes"])) sessionAutostart();
    header("Location:/");


}