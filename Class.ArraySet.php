<?php

class ArraySet{

    public $len = 20;
    public $array;

    public function __construct()
    {
        $this->array = new SplFixedArray($this->len);
    }

    public function setArray($index, $value){
        $this->array[$index] = $value;
    }
    
    public function getArray($index){
        if($index < $this->len){
            return $this->array[$index];
        }else{
            return -1;
        }
    }
    
    public function sortArray(){
        $array = (array) $this->array;
        $sortedArray = sort($array);
        return $array;
    }

}