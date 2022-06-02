<?php
 if(isset($_GET['action'])){
          $action  = $_GET['action'];
}
else{
          $action = " ";
}
switch($action){
          case 'add':{
                    if(isset($_SESSION['id_currentUser'])){
                        if(isset($_POST['dangtruyen']) ){
                                $tentruyen = $_POST['tentruyen'];
                                $loaitruyen = (int)$_POST['loaitruyen'];
                                $tacgia = $_POST['tacgia'];
                                $gioithieu = $_POST['gioithieu'];
                                $anhdaidien = $_POST['hinhdaidien'];
                                $ngaydang = date('Y-m-d');     
                                  if( $db->insertTruyen($loaitruyen,$_SESSION['id_currentUser'],$tentruyen,$tacgia,$gioithieu,$ngaydang,$anhdaidien)){
                                          echo '<script>alert("Đăng kí truyện thành công")</script>';
                                }
                    }
                    require_once('View/Truyen/themtruyen.php');
                    break;
               }else{
                echo '<script>alert("Bạn cần phải đăng nhập");  window.location="index.php?controller=user&action=login "</script>';
               }
        }
          case 'edit':{
                    require_once('View/Truyen/suatruyen.php');
                    break;
          }
          case 'delete':{
                    require_once('View/Truyen/xoatruyen.php');
                    break;
          }
          case 'list':{
                    $danhsachtruyen = array();
                    $danhsachtruyen = $db->getTruyenchuaduyet('0');
                    if(isset($_POST['duyettruyen'])){
                              if(isset($_POST['checklist'])){
                              $truyenduocduyet = $_POST['checklist'];
                              for($i=0;$i<count($truyenduocduyet);$i++){
                                        $db->duyetTruyen($truyenduocduyet[$i]);
                              }
                    }
                    }
                    require_once('View/Truyen/listtruyen.php');
                    break;
          }
          case 'detail':{
              
                    if(isset($_GET['idtruyen'])){
                            $idtruyen=$_GET['idtruyen'];   
                            $idcurrentUser =  $_SESSION['id_currentUser'];
                              $truyen = $db->getTruyen($idtruyen);
                              $theloai = $db->getTheLoai($truyen->Id_Loai);
                              $luottheodoi = $db->getLuotTheoDoiByIDTruyen($idtruyen);
                              if ($truyen->Tinhtrang == 1 ){
                                      $tinhtrang = "Hoàn thành";
                              }else{
                                      $tinhtrang = "Chưa hoàn thành";
                              }
                              $danhsachchuong = array();
                              $danhsachchuong = $db->getChuong($idtruyen);
                              if(isset($_GET['theodoi'])){
                                      $db->theodoi($idcurrentUser, $idtruyen);
                            
                              }
                    }
                    require_once('View/Truyen/detailtruyen.php');
                    break;
          }
          default:{
                    $danhsachtruyen = array();
                    $danhsachtruyen = $db->getTruyenchuaduyet('1');
                    require_once('View/Truyen/Trangchu.php');
                    break;
          }
}
?>