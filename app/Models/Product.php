<?php
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Toy.php';
class Product
{
    public function __construct(public string $name, public string $description, public int $price, public string $category, public string $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }
}
