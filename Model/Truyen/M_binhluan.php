<?php
include_once("E_binhluan.php");
class m_binhluan
{
    private $hostname='localhost';
    private $username='root';
    private $pass='';
    private $dbname='pbl5_1'; 
    private $conn=null;
    private $result=null;

    public function connect()
    {
        $this->conn=new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
        if(!$this->conn)
        {
            echo "Ket noi that bai";
            exit();
        }
        else {
            mysqli_set_charset($this->conn,'utf8');
        }
        return $this->conn;
    }
    
    public function execute($sql)
    {   
        $this->connect();
        $this->result=$this->conn->query($sql);
        return $this->result;
    }
    public function addcmt($Id_User,$Id_Truyen,$Noidung)
    {
        $cmt=new e_binhluan(0,$Id_User,$Id_Truyen,$Noidung);
        $this->add($cmt);
        return true;
        

    }
    public function add(e_binhluan $cmt)
    {
        $sql="INSERT INTO `comment` (Id_User,Id_Truyen,Noidung) VALUES ('$cmt->Id_User','$cmt->Id_Truyen','$cmt->Noidung')";
        $this->execute($sql);
    }
}


?>