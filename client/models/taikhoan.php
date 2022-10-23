<?php
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function insert_taikhoan($user, $pass, $email)
{
    $sql = "insert into taikhoan(user,pass,email) values('$user','$pass','$email')";
    pdo_execute($sql);
}

function check_email($email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $kq = pdo_query_one($sql);
    return $kq;
}

function check_user($user, $pass)
{
    $sql = "select * from taikhoan where user='" . $user . "' AND pass='" . $pass . "'";
    $kq = pdo_query_one($sql);
    return $kq;
}

function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "update taikhoan set user='" . $user . "', pass='" . $pass . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "'where id=" . $id;
    pdo_execute($sql);
}
