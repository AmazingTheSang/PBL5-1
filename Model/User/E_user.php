<?php

    class e_user
    {
        public $Id_User;
        public $Teb;
        public $Ngaysinh;
        public $Diachi;
        public $Email;
        public $Matkhau;
        public $Gioitinh;
        public $Id_Quyen;

        public function __construct($_Id_User,$_Ten,$_Ngaysinh,$_Diachi,$_Email,$_Matkhau,$_Gioitinh,$_Id_Quyen)
        {
            $this->Id_User =$_Id_User;
            $this->Ten=$_Ten;
            $this ->Ngaysinh=$_Ngaysinh;
            $this->Diachi=$_Diachi;
            $this->Email=$_Email;
            $this->Matkhau=$_Matkhau;
            $this->Gioitinh=$_Gioitinh;
            $this->Id_Quyen=$_Id_Quyen;

        }
        
    }

?>