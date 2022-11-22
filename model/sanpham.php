<?php
    function insert_sp($tensp,$gia,$mota,$img,$iddm){
        $sql="insert into product(name_product,price,description,img,id_dmuc) VALUES('$tensp','$gia','$mota','$img','$iddm')";
        pdo_execute($sql);
    }
    function delete_sp($id){
        $sql ="DELETE FROM `product` WHERE id_product=".$id;
        pdo_execute($sql);
    }
    function load_sp_top10(){
        $sql="SELECT * FROM `product` WHERE 1 order by view desc limit 0,10";
        $listsp = pdo_query($sql);
        return  $listsp;
    }
    function load_sp_home(){
        $sql="SELECT * FROM `product` WHERE 1 order by id_product desc limit 10";
        $listsp = pdo_query($sql);
        return  $listsp;
    }
    function load_sp($kyw,$iddm){
        $sql="SELECT * FROM `product` WHERE 1";
        if($kyw!=""){
            $sql.=" and name_product like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and id_dmuc ='".$iddm."'";
        }
        $sql.=" ORDER BY id_product desc";
        $listsp = pdo_query($sql);
        return  $listsp;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
        $sql="SELECT * FROM `danhmuc` WHERE id_product=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name_dm;
    }
    else{
        return "";
    }
}
    function load_1st_sp($id){
        $sql="SELECT * FROM `product` WHERE id_product=".$id;
        $listsp=pdo_query_one($sql);
        return $listsp;
    }
    function load_sp_cungloai($id){
        $sql="SELECT * FROM `product` WHERE id_product <>".$id;
        $listsp = pdo_query($sql);
        return  $listsp;
    }
    function  update_sp($id,$iddm,$tensp,$gia,$mota,$img){
        if($img!=""){
            $sql="UPDATE `product` SET  id_dmuc='".$iddm."',name_product='".$tensp."',price='".$gia."',description='".$mota."',img='".$img."'  where id=".$id;
        }
        else{
            $sql="UPDATE `product` SET id_dmuc='".$iddm."',name_product='".$tensp."',price='".$gia."',description='".$mota."'  where id=".$id;
        }
        pdo_execute($sql); 
    }
?>