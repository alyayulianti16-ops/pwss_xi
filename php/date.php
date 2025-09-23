<?php
date_default_timezone_set('Asia/Jakarta');
$bulan = [
    "January"=>"Januari",
];
// $tanggal = date("d-m-Y H:i:s");
$str_tanggal = "12-01-2025";
$tanggal =date('F',strtotime($str_tanggal));
echo $bulan[$tanggal];