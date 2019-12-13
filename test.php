<?php

try {
# create a basket object
    $basket = new Basket();

# add a banana 'basket item' to the basket, worth $3
    $basketItem = new Item('01', 'banana', 3.00);
    $basket->addItemToBasket($basketItem);

# add a detergent 'basket item' to the basket, worth $10
    $basketItem = new Item('02', 'detergent', 10.00);
    $basket->addItemToBasket($basketItem);

# add a pasta 'basket item' to the basket, worth $1
    $basketItem = new Item('03', 'pasta', 1.00);
    $basket->addItemToBasket($basketItem);

# print the total contents of the basket
    echo $basket->countItemsInBasket();

# print the most expensive item in the basket
    $mostExpensiveItem = new Item('00', 'default', 0.01);
    foreach ($basket as $key => $item) {
        $mostExpensiveItem = !$mostExpensiveItem ? $item :
            $mostExpensiveItem->getItemPrice() < $item->price ? $item : $mostExpensiveItem;
    }
} catch (\Exception $exception) {
    die($exception->getMessage());
}