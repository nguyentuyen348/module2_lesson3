<?php


class Customer
{
public $name;
public $age;
public $address;
public $img;


    public function __construct($name, $age, $address,$img)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->img=$img;

    }
    public function add(){
        $array=[];
        $customer=new Customer();
        array_push($array,$customer);
        return $array;
    }

}

?>