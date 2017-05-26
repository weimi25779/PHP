<?php
class Bike{
    protected $speed=0;
    function __construct()
    {
        echo 'construct';
        //建構式沒有在Return
    }

    function  upSpeed($gear=1){
        $this->speed=
            ($this->speed<1)?1:$this->speed*1.2;
    }
    function  downSpeed(){
        $this->speed=
            ($this->speed<1)?0:$this->speed*0.7;
    }
    function getSpeed(){
        return $this->speed;
    }
}
class Scootor extends Bike{
    function __construct()
    {
        parent::__construct();
        echo '<br>';
        echo 'construct.V2';
    }

    function upSpeed($gear=1){
        parent::upSpeed($gear);  //引用父親的upSpeed()
        $this->speed*2;
    }

}



