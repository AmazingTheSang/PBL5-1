<?php
 class E_theodoi
 {
     public $idtheodoi;
     public $iduser;
     public $idtruyen;
     public function __construct($idtheodoi,$iduser,$idtruyen)
     {
          $this->idtheodoi = $idtheodoi;
          $this->iduser = $iduser;
          $this->idtruyen = $idtruyen;
     }
 }

?>