<?php
 function insert_binhluan($content,$id_user,$id_pro,$date){
    $sql="INSERT INTO `comment` (`comment`,`id_user`,`id_pro`,`date`) VALUES('$comment','$id_user','$id_pro','$date')";
    pdo_execute($sql);
}
function load_binhluan($id_pro){
    $sql="SELECT * FROM comment WHERE 1";
    if($id_pro>0) $sql.=" AND id_pro='".$id_pro."'";
    $sql.=" ORDER BY id_cmt desc";
    $listbinhluan = pdo_query($sql);
    return  $listbinhluan;
}
function delete_bl($id){
    $sql ="DELETE FROM `comment` WHERE id=".$id;
    pdo_execute($sql);
}
?>