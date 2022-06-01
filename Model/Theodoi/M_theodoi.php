<?php
//include_once("E_chuong.php");
include_once("E_theodoi.php");
class M_Theodoi
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
    public function listtheodoi()
    {
        $sql="SELECT * FROM theodoi ";
        $this->execute($sql);
        // if($this->result)
        // {
            $i=1;
            while($data=mysqli_fetch_array($this->result))
            {
                $idtheodoi = $data['Id_Theodoi'];
                $iduser = $data['Id_User'];
                $idtruyen = $data['Id_Truyen'];
                $theodois[$i]= new E_theodoi($idtheodoi,$iduser,$idtruyen);
                $i++;
            }
        return $theodois;
    }
    public function theodoi($iduser, $idtruyen){
              $sql = "SELECT * FROM theodoi WHERE Id_User = '$iduser' AND Id_Truyen= '$idtruyen' ";
              $this->execute($sql);
              if($this->result)
                    {
                              $sql = "DELETE FROM theodoi WHERE Id_User = '$iduser' AND Id_Truyen= '$idtruyen' ";
                     }
            else{
                              $sql = "INSERT INTO  theodoi VALUES('$idtruyen','$idtruyen') ";
                     }
              $this->execute($sql);
    }
}

?>