<?php

function loadall_taikhoan(){
    $sql="SELECT * FROM taikhoan ORDER BY id DESC ";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($email,$user,$pass){
    $sql="INSERT INTO taikhoan(email,user,pass) VALUES('$email','$user','$pass')";
    pdo_execute($sql);
}
function check_user($user)
{
    $sql = "SELECT * FROM taikhoan WHERE user ='" . $user . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function check_pass($pass)
{
    $sql = "SELECT * FROM taikhoan WHERE pass ='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function check_email($email){
    $sql="SELECT * FROM taikhoan WHERE  email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function  update_taikhoan($id,$user,$pass, $email, $address, $tell){
     $sql="UPDATE taikhoan SET user='".$user."', pass='".$pass."', email='".$email."',address='".$address."', tell='".$tell."'WHERE id=".$id;  
    pdo_execute($sql);
}

function delete_taikhoan($id){
    $sql="DELETE FROM taikhoan WHERE id=".$id ;
    pdo_execute($sql);
}


?>
