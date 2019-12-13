<?php

use mysql_xdevapi\Collection;

class Basket
{
    protected $basketItems;

    public function __construct()
    {
        $this->basketItems = new Collection;
    }

    public function addItemToBasket($item)
    {
        $this->basketItems->add($item);
    }

    public function countItemsInBasket()
    {
        return count($this->basketItems);
    }
}