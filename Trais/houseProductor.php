<?php 
trait HauseProductor{

protected $productor;

public function setProductor ($productor){

    $this-> productor = $productor;
}
public function getProductor(){
    return $this-> productor;
}

}