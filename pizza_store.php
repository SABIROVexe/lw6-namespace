<?php

class PizzaStore{

     function orderPizza(string $type){
        function createPizza(string $type){
            echo("Тип пиццы: " . $type);
        }
     }


}

class Pizza{
    public $name, $sauce;
    public $toppings = [];

    public function __construct($name, $sauce, $toppings) {
        $this->name = $name;
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }

    public function prepare() {
        echo ("Началась готовка пиццы: " . $this->name . "\n");
        echo ("Добавлен соус: " . $this->sauce . "\n");
        echo ("Добавлены топики: " . implode(", ", $this->toppings) . "\n");
    }

    public function cut(){
        echo ("Данную пиццу нарезают по диагонали");
    } 
}