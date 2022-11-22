<?php
    function insert_taikhoan($email,$user,$pass){
        $sql="insert into taikhoan(email,user,pass) VALUES('$email','$user','$pass')";
        pdo_execute($sql);
    }
    function check_user($user,$pass){
        $sql="SELECT * FROM `taikhoan` WHERE user='".$user."' AND pass='".$pass."'";
        $listsp=pdo_query_one($sql);
        return $listsp;
    }
    function check_email($email){
        $sql="SELECT * FROM `taikhoan` WHERE email='".$email."'";
        $listsp=pdo_query_one($sql);
        return $listsp;
    }
    function update_tk($id,$user,$email,$pass,$address,$tel){
        $sql="UPDATE `taikhoan` SET id='".$id."', pass='".$pass."', user='".$user."', email='".$email."', address='".$address."', tel='".$tel."'  where id=".$id;
        pdo_execute($sql); 
    }
    function loadall_taikhoan(){
        $sql="SELECT * FROM taikhoan ORDER BY id desc";
        $listtaikhoan = pdo_query($sql);
        return  $listtaikhoan;
    }
    function delete_tk($id){
        $sql ="DELETE FROM `taikhoan` WHERE id=".$id;
        pdo_execute($sql);
    }
?>