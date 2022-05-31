<?php
    include_once("E_chuong.php");
    class m_chuong{
        private $hostname = 'localhost';
        private $username = 'root';
        private $pass = '';
        private $dbname = 'pbl5_1';

        private $conn = NULL;
        private $result = NULL;

        public function connect(){
            $this->conn=new mysqli($this->hostname,$this->username,$this->pass,$this->dbname);
            
            if (!$this -> conn){
                echo "connection failed";
                exit();
            }
            else{
                mysqli_set_charset($this->conn,'utf8');
            }
            return $this->conn;
        }

        //thuc thi cau lenh truy van
        // public function execute($sql){
        //     $this->result = $this->conn->query($sql);
        //     return $this->result;
        // }
        public function execute($sql){   
            $this->connect();
            $this->result=$this->conn->query($sql);
            return $this->result;
        }

        //them chuong
        public function InsertData($id_truyen,$Chuongso,$Chuongten,$Noidung){
            $sql = "INSERT INTO chuong(Id_Truyen,Chuongten, Noidung, Chuongso) VALUES ('$id_truyen','$Chuongten', '$Noidung', '$Chuongso')" ;
            // $sql = "INSERT INTO chuong_(Chuongten, Noidung) VALUES ('$Chuongten', '$Noidung')";
            return $this->execute($sql);
        }

        public function getData(){
            // $sql = "SELECT * FROM $table";
            // $this->execute($sql);
            if($this->result){
                $data=mysqli_fetch_array($this->result);
            }
            else{
                $data=0;
            }
            return $data;
        }

        //danh sach chuong
        public function getAllData($table,$id_truyen){
            $sql="SELECT * FROM $table where Id_Truyen=$id_truyen";
            $this->execute($sql);
            if($this->num_rows()==0){
                $data = 0;
            }
            else{
                while($data1 = $this->getData())
                {
                    $data[] = $data1;
                }
            }
            return $data;
        }

        public function num_rows(){
            if($this->result)
            {
                $num=mysqli_num_rows($this->result);
            }
            else {
                $num=0;
            }
            return $num;
        }
        public function editchuong($id_chuong,$id_truyen,$chuongso,$tenchuong,$noidung)
        {
            $sql="UPDATE chuong  SET Id_Truyen='$id_truyen',Chuongso='$id_chuong' ,Chuongten='$tenchuong',Noidung='$noidung' WHERE Id_Chuong=$id_chuong ";
            return $this->execute($sql);
        }
        public function getchuongtheoid($id)
         {
            $sql="SELECT * FROM chuong WHERE Id_Chuong='$id'";
            $this->execute($sql);
            if($this->num_rows()!=0)
            {
                $data=mysqli_fetch_array($this->result);
    
            }
            else
            {
                $data=0;
            }
            return $data;
        }
        public function delete($id,$table)
        {
            $sql="DELETE FROM $table WHERE Id_Chuong=$id ";
            return $this->execute($sql);
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