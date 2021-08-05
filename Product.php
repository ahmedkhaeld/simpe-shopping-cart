<?php
class Product {

    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;



    public function __construct($id,$title,$price,$availableQuantity) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    // id setter and getter
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    // title setter and getter
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    // price setter and getter
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    // availableQuantity setter and getter
    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
    }

    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    

   
















}







?>