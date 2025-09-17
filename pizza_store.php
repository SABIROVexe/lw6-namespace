<?php

class PizzaStore{

}

class Pizza{
    public $name, $sauce;
    public $toppings = [];

    public function prepare(){
        echo("Началась готовка пиццы:" . $name) ;
        echo("Добавлен соус:" . $sauce);
        echo("Добавлены топики:") ;
    }

    public function cut(){
        echo ("Данную пиццу нарезают по диагонали");
    } 
}