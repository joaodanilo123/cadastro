<?php

function evalid($mail){
    
    if(strpos($mail, '@gmail.com')){
        return true;
    } elseif (strpos($mail, '@hotmail.com')) {
        return true;
    } elseif (strpos($mail, '@hotmail.com')) {
        return true;
    } elseif (strpos($mail, '@iffarroupilha.edu.br')) {
        return true;
    } else {
        return false;
    }
}