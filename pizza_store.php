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
         switch ($type) {
            case 'pepperoni':
                return new Pepperoni();
            case 'cheese':
                return new Cheese();
            case 'meat':
                return new Meat();
            default:
                return null;
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
        echo ("Данную пиццу нарезают по диагонали \n");
    } 
}

class Pepperoni extends Pizza {
    public function __construct() {
        parent::__construct("Пепперони", "Томатный соус", ["Моцарелла", "Пепперони"]);
    }
}

class Cheese extends Pizza {
    public function __construct(){
        parent::__construct("Сырная", "Сливочный соус", ["Моцарелла", "Чеддер", "Гауду", "Бри"]);
    }
}

class Meat extends Pizza{
    public function __construct(){
        parent::__construct("Мясная", "Барбекю соус", ["Моцарелла", "Ветчина", "Бекон", "Пепперони"]);
    }
}

$pizzaStore = new PizzaStore();
$pizzaStore->orderPizza('pepperoni');
$pizzaStore->orderPizza('cheese');
$pizzaStore->orderPizza('meat');