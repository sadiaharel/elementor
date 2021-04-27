<?php 

abstract class BoxClass {
    abstract public function getBoxText($boxId);
}
class Box extends BoxClass {
    private $texts = [
        1 => 'A beautiful bird fling on the sky',
        2 =>'A diligent rabbit hides on the forest',
        3 =>'A fast dolphin swims in water'
    ]; 
    public function getBoxText($boxId){
        return $this->texts[$boxId];
    }  
}
