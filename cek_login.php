<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:../login.php');
}

include('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$loginpetugas = mysqli_query($mysqli, "SELECT * FROM `petugas` WHERE `username`='$username' AND `password`='$password'");
$loginuser = mysqli_query($mysqli, "SELECT * FROM `masyarakat` WHERE `username`='$username' AND `password`='$password'");

$cek = mysqli_num_rows($loginpetugas);
$cekuser = mysqli_num_rows($loginuser);

if($cek > 0){

    $data = mysqli_fetch_assoc($loginpetugas);
    
    if($data['level']=="admin"){

        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        $_SESSION['is_login'] = true;
        
        header('location:admin/index.php');

    }else if($data['level']=="petugas"){
        
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = "petugas";
        $_SESSION['is_login'] = true;

        header('location:petugas/index.php');

    }else if(!password_verify($password)){
        header('location:login.php?pesan=gagal');
    }
}else if($cekuser > 0){
    $datauser = mysqli_fetch_assoc($loginuser);
    if($datauser){

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = "masyarakat";
        $_SESSION['is_login'] = true;

        header('location:masyarakat/index.php');

    }else if(!password_verify($password)){
        header('location:login.php?pesan=gagal');
    }

}else{
    header('location:login.php?pesan=gagal');
}
?>