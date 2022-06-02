<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
.btndoctruyen:link, .btndoctruyen:visited {
  background-color: orange;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 8px;
}

.btndoctruyen:hover, .btndoctruyen:active {
  background-color: orange;
}
.btntheodoi:link, .btntheodoi:visited {
  background-color: green;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 8px;
  margin-bottom: 10px;
 
}

.btntheodoi:hover, .btntheodoi:active {
  background-color: green;
}
.detail{
    display: flex;
    justify-content: left;
}
.prop{
    width: 300px ;
    margin-left: 30px;
 
}
p{
    font-family:'Times New Roman', Times, serif;
    font-size:large;
}
tr{
    height: fit-content;
}
td{
    height: fit-content;
    padding-left: 30px;
}
#tablechuong{
    border-collapse: collapse;
  width: 100%;
}
#tablechuong th,td{
    padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}
#tablechuong tr:hover {background-color: #D6EEEE;}
</style>
</head>

<body>
    <div class="truyen">
        <h2><?= $truyen->Tentruyen ?></h2>
        <div class="detail">
            <img style="height: 300px;width:185px" alt="Anh dai dien" src="<?= $truyen->Hinhdaidien?>"/>
            <div class="prop">
                <table>
                    <tr>
                        <td><p>Tác giả: </p></td>
                        <td><p style="color:dimgray"><?=$truyen->Tacgia?></p></td>
                    </tr>
                    <tr>
                        <td><p>Tình trạng:</p></td>
                        <td><p style="color:dimgray"><?=$tinhtrang?></p></td>
                    </tr>
                    <tr>
                        <td><p>Thể loại:</p></td>
                        <td><p style="color:dimgray"><?=$theloai?></p></td>
                    </tr>
                    <tr>
                        <td><p>Lượt xem:</p></td>
                        <td><p style="color:dimgray"><?=$truyen->Luotxem?></p></td>
                    </tr>
                </table>
                <div style="display:flex; " >
                <a  class ="btntheodoi" href="index.php?controller=truyen&action=detail&idtruyen=<?= $truyen->Id_Truyen?>&theodoi=">Theo dõi</a>
                <p style="font-size: medium; color:dimgray"> &nbsp;&nbsp;<?=$luottheodoi?> người đã theo dõi </p>
                </div>
                <div>
                <a class ="btndoctruyen" href="index.php?controller=chuong&action=doc_truyen&idtruyen=<?= $truyen->Id_Truyen?>&idchuong=1">Đọc từ đầu</a>
                <a  class ="btndoctruyen" href="index.php?controller=chuong&action=doc_truyen&idtruyen=<?= $truyen->Id_Truyen?>&idchuong=<?= sizeof($danhsachchuong)?>">Đọc mới nhất</a>
               </div>
            </div>
        </div>
        

        
    </div>
    <div class="danhsachchuong">
        <h3>Danh sách chương</h3>
        <table id="tablechuong">
            <thead>
                <tr>
                    <th>Chương số</th>
                    <th>Tên</th>
                    <th> Ngày cập nhật</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($danhsachchuong) || is_object($danhsachchuong))
                    {
                        foreach ($danhsachchuong as $value){ ?>
                <tr >
                    <td><a style="text-decoration: none;color:black;"  href="index.php?controller=chuong&action=doc_truyen&idtruyen=<?= $value->Id_Truyen?>&idchuong=<?= $value->Id_Chuong?>">Chapter
                    <?=$value->Chuongso ?></a></td>
                    <td><?=$value->Chuongten ?></td>
                    <td>NA</td>
                </tr>
                <?php
                        }
                    }
            ?>
            </tbody>
        </table>
    </div>
</body>

</html>