<?php
class PetKennel extends Product
{

    public function __construct(public string $name, public string $description, public int $price, public string $category, public string $image, public string $material, public string $size)
    {
        parent::__construct($name, $description, $price, $category, $image);
        $this->material = $material;
        $this->size = $size;
    }
}
