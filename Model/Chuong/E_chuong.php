<?php
          class e_chuong{
                    public $Id_Chuong;
                    public $Id_Truyen;
                    public $Chuongso;
                    public $Chuongten;
                    public $Noidung;
                    public function __construct($idchuong, $idtruyen, $chuongso, $chuongten, $noidung)
                    {
                              $this->Id_Chuong = $idchuong;
                              $this->Id_Truyen = $idtruyen;
                              $this->Chuongso = $chuongso;
                              $this->Chuongten = $chuongten;
                              $this->Noidung = $noidung;
                    }
          }
?>