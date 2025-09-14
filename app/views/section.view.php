<?php

class SectionView{

    function showHome() {
        include_once "templates/header.tpl";
        include_once "templates/home.tpl";
        include_once "templates/footer.tpl";
    }

    function showMen(){
        include_once "templates/header.tpl";
        include_once "templates/men.tpl";
        include_once "templates/footer.tpl";
    }
    
    function showWomen(){
        include_once "templates/header.tpl";
        include_once "templates/women.tpl";
        include_once "templates/footer.tpl";
    }

}
    