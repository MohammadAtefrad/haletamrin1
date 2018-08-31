<?php

class ArraySet{

    public $len = 20;
    public $array = new SplFixedArray($len);

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
        return sort($this->array);
    }

}