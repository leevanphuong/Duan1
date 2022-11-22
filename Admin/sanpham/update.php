<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinh="../upload/".$img;
if(is_file($hinh)){
    $hinh="<img src='".$hinh."'height='100'>";
}
else{
    $hinh="Không có hình ảnh";
}

?>
<div class="row">
            <div class="row header">
                <h1>Cập nhập loại hàng</h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    <select name="iddm" >
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach($listdmuc as $danhmuc){
                                    extract($danhmuc);
                                    if($iddm==$id) $s="selected"; else $s="";
                                        echo '<option value="'.$id.'" '.$s.'>'.$name_dm.'</option>';
                                    
                
                                }
                            ?>  
                        </select>
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm
                        <input type="text" name="tensp" value="<?=$name_sp?>">
                    </div>
                    <div class="row mb10">
                        Giá
                        <input type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row mb10">
                        Hình ảnh
                        <input type="file" name="hinh">
                        <?=$hinh?>
                    </div>
                    <div class="row mb10">
                        Mô tả
                        <br>
                        <textarea name="mota" id="" cols="30" rows="10" <?=$mota?>></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id_dm?>">
                        <input type="submit" name="capnhap" value="Cập nhập" >
                        <input type="reset" value="Nhập lại" >
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>

                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>