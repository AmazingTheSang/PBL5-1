<?php
session_start();

    if(isset($_GET['action']))
    {
        $action=$_GET['action'];

    }
    else
    {
        $action='';
    }

    $thanhcong=array();

    switch($action)
    {
        case 'login':
            {
                if(isset($_POST['signin']))
                {
                    $ten =trim($_POST['username']);
                    $matkhau = trim($_POST['password']);
               
                if(!$ten||!$matkhau)
                {
                    echo '<script language="javascript">alert("Mời nhập đủ thông tin !!!"); window.location="index.php?controller=user&action=dangnhap";</script>';
                }
                else{
                   
                    $ktra=$db->ktrauserpass($ten,$matkhau);
                    if($ktra==1)
                    {
                        $quyen=$db->getusertheoten($ten);
                       
                        
                        $_SESSION["id_quyen"] =$quyen['Id_Quyen'];
                        echo '<script language="javascript">alert("Đăng nhập thành công !!!"); window.location="index.php?controller=user&action=trangchu";</script>';
                        

                    }
                    else
                    {
                        echo '<script language="javascript">alert("Đăng nhập thất bại !!! Vui lòng nhập lại !!"); window.location="index.php?controller=user&action=dangnhap";</script>';
                    }
                }
            }
                require_once('View/User/Dangnhap.php');
                break;
            }

        case 'add':
            {
                      
                if (isset($_POST['signup'])){

                    $ten =trim($_POST['username']);
                    $ngaysinh = trim($_POST['date']);
                    $diachi = trim($_POST['diachi']);
                    $email =trim($_POST['email']);
                    $matkhau = trim($_POST['password']);
                    $gioitinh =$_POST['gioitinh'];
                    $quyen =$_POST['quyen'];
                    $ktra=$db->ktraemailuser($ten,$email);
                 
                  
                    if(!$ten||!$ngaysinh||!$diachi||!$email||!$matkhau)
                    {
                        echo '<script language="javascript">alert("Mời nhập đủ thông tin !!!"); window.location="index.php?controller=user&action=add";</script>';
                    }
                    else
                    {
                  
                        if($ktra==0)
                         {
                            if($db->adduser($ten,$ngaysinh,$diachi,$email,$matkhau,$gioitinh,$quyen))
                            {
                                echo '<script language="javascript">alert("Dang ky thanh cong "); window.location="index.php?controller=user&action=dangnhap";</script>';
                            }
                         }
                        else 
                        {
                            echo '<script language="javascript">alert("Trùng tên user hoặc email !!!"); window.location="index.php?controller=user&action=add";</script>';
                        }
                    }

                   
                    
                    
                }
               
              
              
                require_once('View/User/Dangky.php');
                break;
            }
        case 'edit':
            {
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                }
        //        $id=1000;
                $table="user";
                $dataedit=$db->getusertheoid($table,$id);
               

                if(isset($_POST['edituser']))
                {
                    $Ten=$_POST['Username'];
                    $Ngaysinh=$_POST['Ngaysinh'];
                    $Diachi=$_POST['Diachi'];
                    $Email=$_POST['Email'];
                    $Pass=$_POST['psw'];
                    $Gioitinh=$_POST['Gioitinh'];
                    $Quyen=$_POST['Quyen'];
                    
                    if($db->edituser($id,$Ten,$Ngaysinh,$Diachi,$Email,$Pass,$Gioitinh,$Quyen))
                    {   
                        echo '<script language="javascript">alert("Chinh sua thanh cong user"); window.location="index.php?controller=user&action=list";</script>';
                        // header('location: index.php?action=list');
                    }
                   

                }
                require_once('View/User/Edit_user.php');
                break;
            }
     
        case 'delete':
            {   
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                }
                $table="user";
                if($db->delete($id,$table))
                    {   
                        echo '<script language="javascript">alert("Xoa thanh cong user"); window.location="index.php?controller=user&action=list";</script>';
                        // header('location: index.php?action=list');
                    }

                require_once('');
                break;
            }
        case 'test':
            {
               
            }
        default:
            {
              
                $users=$db->travelistuser();
                require_once('View/User/List_user.php');
                break;
            }
        
    }
?>