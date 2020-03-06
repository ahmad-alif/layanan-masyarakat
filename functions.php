<?php

function pesan(){
    if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "Username atau Password Salah!";
            }
        }
}

function tanggapan(){
    if (isset($_GET['tanggapan'])) {
        if ($_GET['tanggapan'] == "error") {
            echo "Pengaduan sudah ditanggapi!";
        }
    }
}

function must_login(){
    if(!isset($_SESSION['username'])){
        header('location:../login.php');
}
}

function access_management($feature){
    $permission = [
        'admin' => [
            'atur_pengaduan',
            'atur_datauser',
            'tambah_user',
            'cetak_laporan'
        ],
        'petugas' => [
            'validasi',
            'tanggapan'
        ],
        'masyarakat' => [
            'buat_pengaduan'
        ]
    ];
    return in_array($feature, $permission[$_SESSION['level']], true);
}