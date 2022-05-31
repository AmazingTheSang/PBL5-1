<?php
 class e_binhluan
 {
     public $Id_Comment;
     public $Id_User;
     public $Id_Truyen;
     public $Noidung;


     public function __construct($_Id_Comment,$_Id_User,$_Id_Truyen,$_Noidung)
     {
         $this->Id_Comment=$_Id_Comment;
         $this->Id_User=$_Id_User;
         $this->Id_Truyen=$_Id_Truyen;
         $this->Noidung=$_Noidung;
         
     }
 }

?>