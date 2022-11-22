<div class="row">
            <div class="row header">
                <h1>Danh sách loại hàng</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 dsachhang">
                    <table style="width:100%">
                        <tr>
                            <th></th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listdmuc as $danhmuc){
                                extract($danhmuc);
                                $suadmuc="index.php?act=suadmuc&id=".$id_category;
                                $xoadmuc="index.php?act=xoadmuc&id=".$id_category;
                                echo '<tr>
                                <td><input type="checkbox" name=""></td>
                                <td>'.$id_category.'</td>
                                <td>'.$name_category.'</td>
                                <td><a href="'.$suadmuc.'"><input type="button" value="Sửa"></a>  <a href="'.$xoadmuc.'"><input type="button" value="Xóa"></a></td>
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