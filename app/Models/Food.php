<?php
class Food extends Product
{

    public function __construct(public string $name, public string $description, public int $price, public string $category, public string $image, public int $expiration, public string $taste, public string $type)
    {
        parent::__construct($name, $description, $price, $category, $image);
        $this->expiration = $expiration;
        $this->taste = $taste;
        $this->type = $type;
    }
}
