<?php

class AuthView{
    
    //LOGIN
    function showLoginForm(){
        include_once "templates/header.tpl";
        include_once "templates/loginForm.tpl";
        include_once "templates/footer.tpl";
        return;
    }
    
}