<?php
class Toy extends Product
{

    public function __construct(public string $name, public string $description, public int $price, public string $category, public string $image, public string $hardness, public bool $bounces)
    {
        parent::__construct($name, $description, $price, $category, $image);
        $this->hardness = $hardness;
        $this->bounces = $bounces;
    }
}
