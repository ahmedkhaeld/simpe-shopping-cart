<?php

class Cart{
    private array $items=[];

    //setter and getter of items 
    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }


}








?>