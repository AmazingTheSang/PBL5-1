<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link href="View\style.css" rel="stylesheet">
    <title>Duyệt truyện</title>

    <style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}



table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>

<body>

    <form class="danhsachtruyen" method="POST">
        <h3>Danh sách truyện chờ duyệt</h3>
        <table>
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Hình đại diện</th>
                    <th>Tên truyện</th>
                    <th>Thể loại</th>
                    <th>Tác giả</th>
                    <th>Người đăng</th>
                    <th>Giới thiệu</th>
                    <th>Ngày đăng</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $stt = 1;
                    for($i=0;$i<sizeof($danhsachtruyen);$i++){
                        //  $nguoidang = $db->getNguoiDang($danhsachtruyen[$i]->Id_User);
                        //  $loaitruyen = $db->getTheLoai($danhsachtruyen[$i]->Id_Loai);
                    ?>
                <tr>
                    <td><?= $stt ?></td>
                    <td><img width="30" height="50" src="<?=$danhsachtruyen[$i]->Hinhdaidien?>"></td>
                    <td><?= $danhsachtruyen[$i]->Tentruyen ?></td>
                    <td><?=$danhsachtruyen[$i]->Id_Loai?></td>
                    <td><?=$danhsachtruyen[$i]->Tacgia ?></td>
                    <td><?=$danhsachtruyen[$i]->Id_User   ?></td>
                    <td><?=$danhsachtruyen[$i]->Gioithieu  ?></td>
                    <td><?=$danhsachtruyen[$i]->Ngaydang  ?></td>
                    <td><input type="checkbox" value="<?=$danhsachtruyen[$i]->Id_Truyen ?>" name="checklist[ ]"></td>
                </tr>
                <?php $stt++; } ?>
            </tbody>
        </table>

        <input type="submit" value="Duyệt" name="duyettruyen" onsubmit="window.location.reload();">
    </form>
</body>

</html>