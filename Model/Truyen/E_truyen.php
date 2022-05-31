<?php
class e_truyen
{
    public $Id_Truyen;
    public $Id_Loai;
    public $Id_User;
    public $Tentruyen;
    public $Tinhtrang;
    public $Tacgia;
    public $Gioithieu;
    public $Ngaydang;
    public $Hinhdaidien;
    public $Luotxem;
    public $duyet;
    public function __construct($_Id_Truyen,$_Id_Loai,$_Id_User,$_Tentruyen,$_Tinhtrang,$_Tacgia,$_Gioithieu,$_Ngaydang,$_Hinhdaidien,$_Luotxem,$_duyet)
    {
        $this->Id_Truyen=$_Id_Truyen;
        $this->Id_Loai=$_Id_Loai;
        $this->Id_User=$_Id_User;
        $this->Tentruyen=$_Tentruyen;
        $this->Tinhtrang=$_Tinhtrang;
        $this->Tacgia=$_Tacgia;
        $this->Gioithieu=$_Gioithieu;
        $this->Ngaydang=$_Ngaydang;
        $this->Hinhdaidien=$_Hinhdaidien;
        $this->Luotxem=$_Luotxem;
        $this->duyet=$_duyet;

    }
   
}
?>