<?php
class PizzaStore {
    public function orderPizza(string $type) {
        $pizza = $this->createPizza($type);
        if ($pizza) {
            $pizza->prepare();
            $pizza->cut();
            return $pizza;
        } else {
            echo "Пицца типа {$type} не найдена.\n";
            return null;
        }
    }

    protected function createPizza(string $type) {

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
        echo ("Данную пиццу нарезают по диагонали \n");
    } 
}