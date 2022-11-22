<div class="row">
            <div class="row header">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                       Danh mục <br>
                        <select name="iddm" >
                            <?php
                                foreach($listdmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id_category.'">'.$name_category.'</option>';
                                }
                            ?>  
                        </select>
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        Giá
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                        Hình ảnh
                        <input type="file" name="hinh">
                    </div>
                    <div class="row mb10">
                        Mô tả
                        <br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới" >
                        <input type="reset" value="Nhập lại" >
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>

                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>