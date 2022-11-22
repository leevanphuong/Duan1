<div class="row">
            <div class="row header mb">
                <h1>Danh sách loại hàng</h1>
            </div>
            <form action="#" method="post">
                        <input type="text" name="kyw">
                        <select name="iddm" >
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach($listdmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id_category.'">'.$name_category.'</option>';
                                }
                            ?>  
                        </select>
                        <input type="submit" name="listok" value="GO">
                    </form>
            <div class="row formcontent">
                <div class="row mb10 dsachhang">
                    <table >
                        <tr>
                            <th></th>
                            <th>Mã loại</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình</th>
                            <th>Giá</th>
                            <th>Lượt xem</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listsp as $sanpham){
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$id_product;
                                $xoasp="index.php?act=xoasp&id=".$id_product;
                                $hinh="../upload/".$img;
                                if(is_file($hinh)){
                                    $hinh="<img src='".$hinh."'height='100'>";
                                }
                                else{
                                    $hinh="Không có hình ảnh";
                                }
                                echo '<tr>
                                <td><input type="checkbox" name=""></td>
                                <td>'.$id_product.'</td>
                                <td>'.$name_product.'</td>
                                <td style="text-align:center">'.$hinh.'</td>
                                <td>'.$price.'</td>
                                <td>'.$view.'</td>
                                <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>  <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                            }
                        ?>

                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả" >
                    <input type="button" value="Bỏ chọn tất cả" >
                    <input type="button" value="Xóa các mục đã chọn" >
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>

                </div>
            </div>
        </div>