<!DOCTYPE html>
<html lang="en">
          <head>
                    <meta charset="UTF-8">
                    <title>Đăng truyện</title>
          </head>
          <body>
                    <div class = "themtruyen">
                               <h3>Đăng truyện của bạn</h3>
                              <form action=" " method="POST" enctype="multipart/form-data">
                                        <table>
                                                  <tr>
                                                            <td>Tên truyện</td>
                                                            <td><input type="text" name="tentruyen" placeholder="Tên truyện"/></td>
                                                  </tr>
                                                  <tr>
                                                            <td>Loại truyện</td>
                                                            <td>
                                                                      <select name="loaitruyen">
                                                                                <option value="1">Thiếu nhi</option>
                                                                                <option value="2">Trinh thám</option>
                                                                                <option value="3">Tiểu thuyết</option>
                                                                                <option value="4">Kinh dị</option>
                                                                                <option value="5">Viễn tưởng</option>
                                                                                <option value="6">Tình cảm</option>
                                                                                <option value="7">Học đường</option>
                                                                                <option value="8">Hành động</option>
                                                                                <option value="9">Kiếm hiệp</option>
                                                                      </select>
                                                            </td>
                                                  </tr>
                                                  <tr>
                                                            <td>Tác giả</td>
                                                            <td><input type="text" name="tacgia" placeholder="Tác giả"/></td>
                                                  </tr>
                                                  <tr>
                                                            <td>Giới thiệu</td>
                                                            <td><textarea name="gioithieu" placeholder="Mô tả truyện" cols="50" rows="10"></textarea></td>
                                                  </tr>
                                                  <tr>
                                                            <td>Ảnh đại diện</td>
                                                            <td><input name="hinhdaidien" id="hinhdaidien" type="text" placeholder="Paste link ảnh trong gg drive của bạn"/></td>
                                                  </tr>
                                                  <tr>
                                                            <td></td>
                                                            
                                                            <td><input type="submit" name="dangtruyen" value="Đăng truyện"></td>
                                                  </tr>
                                        </table>
                              </form>
                    
                    </div>
          </body>
</html>