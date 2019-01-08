<?php

function sessionAutostart(){
    if(session_status()!=PHP_SESSION_ACTIVE) {
        session_start();
        makeNumber();

    }
}
function makeNumber(){
    if (empty($_COOKIE['RandNumber'])) {
        $randNumber = rand(1, 10);
        setcookie('RandNumber', $randNumber, time() + 3600, "/");
    }
    else return;
}

function compare_numbers($number){
    if (!empty($_COOKIE['RandNumber'])) {
        $randNumb = $_COOKIE['RandNumber'];

        if ($number < $randNumb) {
            return redirect_back_with_errors("Мало");
        } elseif ($number > $randNumb) {
            return redirect_back_with_errors("Много");
        } elseif ($number == $randNumb) {
            setcookie('RandNumber', "", time() - 3600, "/");
            session_destroy();
            sessionAutostart();
            redirect_back_with_errors("Угадал,загадано новое число");

        }
    }



}

function redirect_back_with_errors($errors)
{
    setcookie('error', $errors, time() + 3600, "/");


}