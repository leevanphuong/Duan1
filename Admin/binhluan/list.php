<div class="rownew">
            <div class="row header">
                <h1>Danh sách bình luận</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 dsachhang">
                    <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>ID user</th>
                            <th>Id pro</th>
                            <th>Ngày binh luận</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listbinhluan as $binhluan){
                                extract($binhluan);
                                $suabl="index.php?act=suabl&id=".$id;
                                $xoabl="index.php?act=xoabl&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name=""></td>
                                <td>'.$id.'</td>
                                <td>'.$content.'</td>
                                <td>'.$id_user.'</td>
                                <td>'.$id_pro.'</td>
                                <td>'.$date.'</td>
                                <td><a href="'.$suabl.'"><input type="button" value="Sửa"></a>  <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                            }
                        ?>

                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả" >
                    <input type="button" value="Bỏ chọn tất cả" >
                    <input type="button" value="Xóa các mục đã chọn" >
                    <a href="index.php?act=adddmuc"><input type="button" value="Nhập thêm"></a>

                </div>
            </div>
        </div>