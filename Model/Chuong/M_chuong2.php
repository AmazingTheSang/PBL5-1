<?php
include_once("E_chuong.php");

class m_chuong2
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
    public function getChuong($idchuong)
        {
            $sql = "SELECT * from Chuong WHERE Id_Chuong='$idchuong'  ";
         
            $rs = mysqli_query($this->conn, $sql);
            $obj = $rs->fetch_object();
            $idchuong =$obj->Id_Chuong;
            $idtruyen =  $obj->Id_Truyen;
            $chuongso = $obj->Chuongso;
            $chuongten =  $obj->Chuongten;
            $noidung =  $obj->Noidung;
            $chuong = new e_chuong($idchuong,$idtruyen,$chuongso,$chuongten,$noidung);
         return $chuong;
        }
}

?>