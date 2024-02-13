<?php
namespace any;
class A{
    public $name="omar";
    public function setName(string $name) {
        $this->name=$name;
    }
    public function getName() {
    return $this->name;
    }
    public function __construct()
    {
        echo __CLASS__;
    }
}