<?php


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
