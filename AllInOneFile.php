<?php


class Basket
{
    protected $basketItems;
    protected $mostExpensiveItem;

    public function __construct()
    {
        $this->basketItems = array();
    }

    public function addItemToBasket($item)
    {
        array_push($this->basketItems, $item);
    }

    public function countItemsInBasket()
    {
        return count($this->basketItems);
    }

    public function getMostExpensiveItemInTheBasket()
    {
        if (!$this->mostExpensiveItem) {
            $this->setMostExpensiveItemInTheBasket();
        }

        return $this->mostExpensiveItem;
    }


    public function setMostExpensiveItemInTheBasket()
    {
        foreach ($this->basketItems as $key => $item) {

            $this->mostExpensiveItem = !$this->mostExpensiveItem ? $item : $this->mostExpensiveItem;
            $this->mostExpensiveItem = $this->mostExpensiveItem->getItemPrice() < $item->getItemPrice() ? $item : $this->mostExpensiveItem;
        }
    }

}

class Item
{
    protected $id;
    protected $name;
    protected $price;

    public function __construct(string $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function setItemId($id)
    {
        $this->id = $id;
    }

    public function getItemId()
    {
        return $this->id;
    }

    public function setItemName($name)
    {
        $this->name = $name;
    }

    public function getItemName()
    {
        return $this->name;
    }

    public function setItemPrice($price)
    {
        $this->price = $price;
    }

    public function getItemPrice()
    {
        return $this->price;
    }
}

try {
    $basket = new Basket();

    $basketItem = new Item('01', 'banana', 3.00);
    $basket->addItemToBasket($basketItem);

    $basketItem = new Item('02', 'detergent', 10.00);
    $basket->addItemToBasket($basketItem);

    $basketItem = new Item('03', 'pasta', 1.00);
    $basket->addItemToBasket($basketItem);

    $mostExpensiveItem = $basket->getMostExpensiveItemInTheBasket();

    echo "The count of all items is " . $basket->countItemsInBasket() . " \n and the ";
    echo "most expensive item in the basket is " .
        strtoupper($mostExpensiveItem->getItemName()) . " with value of $" . number_format($mostExpensiveItem->getItemPrice(),2) .
        "\n";

} catch (Exception $exception) {
    die($exception->getMessage());
}