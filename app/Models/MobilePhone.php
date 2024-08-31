<?php

namespace App\Models;

class mobilePhone{
    private $name;
    private $price;
    private $brand;
    private $quantity;

    //Encapsulation
    function get_Name(){
        return $this->name;
    }
    function set_Name($name){
        $this->name = $name;
    }
    function get_Price(){
        return $this->price;
    }
    function set_Price($price){
        $this->price = $price;
    }
    function get_Brand(){
        return $this->brand;
    }
    function set_Brand($brand){
        $this->brand = $brand;
    }
    function get_Quantity(){
        return $this->quantity;
    }
    function set_Quantity($quantity){
        $this->quantity = $quantity;
    }

}