<div class="row mb">
        <div class="boxtrai mr ">
                <div class="row mb">
                    <?php
                        extract($onesp);
                    ?>
                    <div class="tieude"><?=$name_product?></div>
                <div class="row content">
                    <?php
                        extract($onesp);
                        $img=$img_path.$img;
                        echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                        echo $mota;
                    ?>
                </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                $(document).ready(function(){
                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id_product?>});
                });
                </script>
                <div class="row mb" id="binhluan">

                </div>
                <div class="row mb">
                    <div class="tieude">Sản phầm cũng loại</div>
                <div class="row content">
                    <?php
                        foreach($sp_cungloai as $sp_cungloai){
                            extract($sp_cungloai);
                            $linksp="index.php?act=chitietsp&idsp=".$id_product;
                            echo '<li><a herf="'.$linksp.'">'.$name_product.'</a></li>';
                        }
                    ?>
                </div>
        </div>
        </div>