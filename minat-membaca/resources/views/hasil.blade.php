@extends('layouts.main')

@section('container')

<style>
    .bgg {
        background-image: linear-gradient(90deg, #cfecd0, #ffc5ca);
    }
</style>

<!--Content-->
<!--Introduction-->
<div class="bgg container-fluid m-0 p-5 row" style="background-color: #EFEEF4; height:400px;">
    <div class="col-sm-12 mt-5" style="display:flex; justify-content:center; align-items:center;">
        <div class="pb-5">
            <h1 class="text-dark">Hasil</h1>
        </div>
    </div>
</div>

<?php

//Connect Database
$mysqli = new mysqli("localhost", "root", "", "minat_membaca");

//Cek Koneksi
if (mysqli_connect_errno()){
	echo "Tidak terhubung";
	exit;
}
//Mencari Query Single Data
function SearchData($mysqli, $query) {
    $row = $mysqli->query($query)->fetch_array();
	return $row[0];
}

//Inisialisasi Cluster Awal
$JumlahResponden = SearchData($mysqli, "select count(*) from jawabans");
for ($i=0; $i < $JumlahResponden; $i++) { 
    $ClusterAwal[$i] = "1";
}

//Set Nilai Centroid
$Centroid1[0] = array('4','3','4','4','5','2','4','5','2','4','5','4','4','5','2','1','4','3');
$Centroid2[0] = array('2','4','4','3','2','4','3','3','4','4','4','4','1','4','4','4','2','4');
$Centroid3[0] = array('3','3','3','3','4','2','4','4','2','3','3','3','3','3','3','3','4','3');


$status = 'false';
$loop = '0';
$x = 0;

while ($status == 'false') {
    //K-Means
    $query = "select * from jawabans";
    $result = $mysqli->query($query);

    while ($data = mysqli_fetch_assoc($result)) {
        extract($data);
        $ResultC1 = 0;
        $ResultC2 = 0;
        $ResultC3 = 0;

        //Mencari Nilai Centroid 1
        $ResultC1 = sqrt(pow($p1-$Centroid1[$loop][0],2) + 
        pow($p2-$Centroid1[$loop][1],2) +
        pow($p3-$Centroid1[$loop][2],2) +
        pow($p4-$Centroid1[$loop][3],2) +
        pow($p5-$Centroid1[$loop][4],2) +
        pow($p6-$Centroid1[$loop][5],2) +
        pow($p7-$Centroid1[$loop][6],2) +
        pow($p8-$Centroid1[$loop][7],2) +
        pow($p9-$Centroid1[$loop][8],2) +
        pow($p10-$Centroid1[$loop][9],2) +
        pow($p11-$Centroid1[$loop][10],2) +
        pow($p12-$Centroid1[$loop][11],2) +
        pow($p13-$Centroid1[$loop][12],2) +
        pow($p14-$Centroid1[$loop][13],2) +
        pow($p15-$Centroid1[$loop][14],2) +
        pow($p16-$Centroid1[$loop][15],2) +
        pow($p17-$Centroid1[$loop][16],2) +
        pow($p18-$Centroid1[$loop][17],2) );

        //Mencari Nilai Centroid 2
        $ResultC2 = sqrt(pow($p1-$Centroid2[$loop][0],2) + 
        pow($p2-$Centroid2[$loop][1],2) +
        pow($p3-$Centroid2[$loop][2],2) +
        pow($p4-$Centroid2[$loop][3],2) +
        pow($p5-$Centroid2[$loop][4],2) +
        pow($p6-$Centroid2[$loop][5],2) +
        pow($p7-$Centroid2[$loop][6],2) +
        pow($p8-$Centroid2[$loop][7],2) +
        pow($p9-$Centroid2[$loop][8],2) +
        pow($p10-$Centroid2[$loop][9],2) +
        pow($p11-$Centroid2[$loop][10],2) +
        pow($p12-$Centroid2[$loop][11],2) +
        pow($p13-$Centroid2[$loop][12],2) +
        pow($p14-$Centroid2[$loop][13],2) +
        pow($p15-$Centroid2[$loop][14],2) +
        pow($p16-$Centroid2[$loop][15],2) +
        pow($p17-$Centroid2[$loop][16],2) +
        pow($p18-$Centroid2[$loop][17],2) );

        //Mencari Nilai Centroid 3
        $ResultC3 = sqrt(pow($p1-$Centroid3[$loop][0],2) + 
        pow($p2-$Centroid3[$loop][1],2) +
        pow($p3-$Centroid3[$loop][2],2) +
        pow($p4-$Centroid3[$loop][3],2) +
        pow($p5-$Centroid3[$loop][4],2) +
        pow($p6-$Centroid3[$loop][5],2) +
        pow($p7-$Centroid3[$loop][6],2) +
        pow($p8-$Centroid3[$loop][7],2) +
        pow($p9-$Centroid3[$loop][8],2) +
        pow($p10-$Centroid3[$loop][9],2) +
        pow($p11-$Centroid3[$loop][10],2) +
        pow($p12-$Centroid3[$loop][11],2) +
        pow($p13-$Centroid3[$loop][12],2) +
        pow($p14-$Centroid3[$loop][13],2) +
        pow($p15-$Centroid3[$loop][14],2) +
        pow($p16-$Centroid3[$loop][15],2) +
        pow($p17-$Centroid3[$loop][16],2) +
        pow($p18-$Centroid3[$loop][17],2) );

        //Mencari Nilai Terkecil
        if ($ResultC1 < $ResultC2 && $ResultC1 < $ResultC3) {
            $ClusterAkhir[$x] = 'C1';
            update_responden($mysqli, $id , 'C1');
        } else if ($ResultC2 < $ResultC1 && $ResultC2 < $ResultC3) {
            $ClusterAkhir[$x] = 'C2';
            update_responden($mysqli, $id , 'C2');
        } else {
            $ClusterAkhir[$x] = 'C3';
            update_responden($mysqli, $id , 'C3');
        }

        //Penambahan Counter Index
        $x+=1;
    }
    $loop+=1;

    //Proses Mencari Pusat Centroid Baru 1
    $Centroid1[$loop][0] = SearchData($mysqli, "select avg(p1) from jawabans where kelas='C1' ");
    $Centroid1[$loop][1] = SearchData($mysqli, "select avg(p2) from jawabans where kelas='C1' ");
    $Centroid1[$loop][2] = SearchData($mysqli, "select avg(p3) from jawabans where kelas='C1' ");
    $Centroid1[$loop][3] = SearchData($mysqli, "select avg(p4) from jawabans where kelas='C1' ");
    $Centroid1[$loop][4] = SearchData($mysqli, "select avg(p5) from jawabans where kelas='C1' ");
    $Centroid1[$loop][5] = SearchData($mysqli, "select avg(p6) from jawabans where kelas='C1' ");
    $Centroid1[$loop][6] = SearchData($mysqli, "select avg(p7) from jawabans where kelas='C1' ");
    $Centroid1[$loop][7] = SearchData($mysqli, "select avg(p8) from jawabans where kelas='C1' ");
    $Centroid1[$loop][8] = SearchData($mysqli, "select avg(p9) from jawabans where kelas='C1' ");
    $Centroid1[$loop][9] = SearchData($mysqli, "select avg(p10) from jawabans where kelas='C1' ");
    $Centroid1[$loop][10] = SearchData($mysqli, "select avg(p11) from jawabans where kelas='C1' ");
    $Centroid1[$loop][11] = SearchData($mysqli, "select avg(p12) from jawabans where kelas='C1' ");
    $Centroid1[$loop][12] = SearchData($mysqli, "select avg(p13) from jawabans where kelas='C1' ");
    $Centroid1[$loop][13] = SearchData($mysqli, "select avg(p14) from jawabans where kelas='C1' ");
    $Centroid1[$loop][14] = SearchData($mysqli, "select avg(p15) from jawabans where kelas='C1' ");
    $Centroid1[$loop][15] = SearchData($mysqli, "select avg(p16) from jawabans where kelas='C1' ");
    $Centroid1[$loop][16] = SearchData($mysqli, "select avg(p17) from jawabans where kelas='C1' ");
    $Centroid1[$loop][17] = SearchData($mysqli, "select avg(p18) from jawabans where kelas='C1' ");

    //Proses Mencari Pusat Centroid Baru 2
    $Centroid2[$loop][0] = SearchData($mysqli, "select avg(p1) from jawabans where kelas='C2' ");
    $Centroid2[$loop][1] = SearchData($mysqli, "select avg(p2) from jawabans where kelas='C2' ");
    $Centroid2[$loop][2] = SearchData($mysqli, "select avg(p3) from jawabans where kelas='C2' ");
    $Centroid2[$loop][3] = SearchData($mysqli, "select avg(p4) from jawabans where kelas='C2' ");
    $Centroid2[$loop][4] = SearchData($mysqli, "select avg(p5) from jawabans where kelas='C2' ");
    $Centroid2[$loop][5] = SearchData($mysqli, "select avg(p6) from jawabans where kelas='C2' ");
    $Centroid2[$loop][6] = SearchData($mysqli, "select avg(p7) from jawabans where kelas='C2' ");
    $Centroid2[$loop][7] = SearchData($mysqli, "select avg(p8) from jawabans where kelas='C2' ");
    $Centroid2[$loop][8] = SearchData($mysqli, "select avg(p9) from jawabans where kelas='C2' ");
    $Centroid2[$loop][9] = SearchData($mysqli, "select avg(p10) from jawabans where kelas='C2' ");
    $Centroid2[$loop][10] = SearchData($mysqli, "select avg(p11) from jawabans where kelas='C2' ");
    $Centroid2[$loop][11] = SearchData($mysqli, "select avg(p12) from jawabans where kelas='C2' ");
    $Centroid2[$loop][12] = SearchData($mysqli, "select avg(p13) from jawabans where kelas='C2' ");
    $Centroid2[$loop][13] = SearchData($mysqli, "select avg(p14) from jawabans where kelas='C2' ");
    $Centroid2[$loop][14] = SearchData($mysqli, "select avg(p15) from jawabans where kelas='C2' ");
    $Centroid2[$loop][15] = SearchData($mysqli, "select avg(p16) from jawabans where kelas='C2' ");
    $Centroid2[$loop][16] = SearchData($mysqli, "select avg(p17) from jawabans where kelas='C2' ");
    $Centroid2[$loop][17] = SearchData($mysqli, "select avg(p18) from jawabans where kelas='C2' ");

    //Proses Mencari Pusat Centroid Baru 3
    $Centroid3[$loop][0] = SearchData($mysqli, "select avg(p1) from jawabans where kelas='C3' ");
    $Centroid3[$loop][1] = SearchData($mysqli, "select avg(p2) from jawabans where kelas='C3' ");
    $Centroid3[$loop][2] = SearchData($mysqli, "select avg(p3) from jawabans where kelas='C3' ");
    $Centroid3[$loop][3] = SearchData($mysqli, "select avg(p4) from jawabans where kelas='C3' ");
    $Centroid3[$loop][4] = SearchData($mysqli, "select avg(p5) from jawabans where kelas='C3' ");
    $Centroid3[$loop][5] = SearchData($mysqli, "select avg(p6) from jawabans where kelas='C3' ");
    $Centroid3[$loop][6] = SearchData($mysqli, "select avg(p7) from jawabans where kelas='C3' ");
    $Centroid3[$loop][7] = SearchData($mysqli, "select avg(p8) from jawabans where kelas='C3' ");
    $Centroid3[$loop][8] = SearchData($mysqli, "select avg(p9) from jawabans where kelas='C3' ");
    $Centroid3[$loop][9] = SearchData($mysqli, "select avg(p10) from jawabans where kelas='C3' ");
    $Centroid3[$loop][10] = SearchData($mysqli, "select avg(p11) from jawabans where kelas='C3' ");
    $Centroid3[$loop][11] = SearchData($mysqli, "select avg(p12) from jawabans where kelas='C3' ");
    $Centroid3[$loop][12] = SearchData($mysqli, "select avg(p13) from jawabans where kelas='C3' ");
    $Centroid3[$loop][13] = SearchData($mysqli, "select avg(p14) from jawabans where kelas='C3' ");
    $Centroid3[$loop][14] = SearchData($mysqli, "select avg(p15) from jawabans where kelas='C3' ");
    $Centroid3[$loop][15] = SearchData($mysqli, "select avg(p16) from jawabans where kelas='C3' ");
    $Centroid3[$loop][16] = SearchData($mysqli, "select avg(p17) from jawabans where kelas='C3' ");
    $Centroid3[$loop][17] = SearchData($mysqli, "select avg(p18) from jawabans where kelas='C3' ");

    $status = 'true';

    for ($i=0; $i < $JumlahResponden; $i++) { 
        if ($ClusterAwal[$i] != $ClusterAkhir[$i]) {
            $status = 'false';
        }
    }

    if ($status = 'false') {
        $ClusterAwal = $ClusterAkhir;
    }
}

function update_responden($mysqli, $id, $nilai) {
    $statement = $mysqli->prepare("update jawabans set kelas=? where id=?");
    $statement -> bind_param("ss", $nilai, $id);
    $statement -> execute();
}
?>

<!--Data-->
<div class="container-fluid m-0 p-5 row">
    <div class="col-sm-12 float-left">
        <div class="pt-4">
            <h2 class="text-dark">Bagaimana Proses Pengumpulan Data ?</h2>
        </div>
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Proses pengumpulan data yang didapatkan melalui kuisioner yang disebarkan secara online kepada 
                anak muda dengan rentang usia 15 sampai 24 tahun. Kuisioner ini berisi pertanyaan seputar dengan 
                Minat Membaca Berita yang akan dibutuhkan dan dapat dilihat pada halaman perhitungan. Kuisioner 
                ini telah disebarkan mulai dari tanggal 29 April 2020 sampai dengan 15 Mei 2022, didapatkan 
                responden sebanyak 438 orang.
            </p>
        </div>
    </div>
</div>
<!--mau bikin hasil perhitungan juga tapi yang berdasarkan statusnya apakah dia sekolah, kuliah atau kerja-->
<!--Hasil Perhitungan-->
<div class="container-fluid m-0 p-5 row" style="background-color: #EFEEF4;">
    <div class="col-sm-12 float-left">
        <div class="pt-4">
            <h2 class="text-dark">Bagaimana Hasil Perhitungan ?</h2>
        </div>
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Berdasarkan proses perhitungan yang sudah dilakukan dengan menggunakan metode K-Means Clustering 
                dan Naive Bayes, didapatkan presentase yang dapat dilihat pada Chart Pie di bawah ini. 
            </p>
            <!--Chart Pie-->
        </div>
    </div>
</div>

<!--Topik Berita-->
<div class="container-fluid m-0 p-5 row">
    <div class="col-sm-12 float-left">
        <div class="pt-4">
            <h2 class="text-dark">Apa Topik Berita yang Lebih Disukai ?</h2>
        </div>
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Berdasarkan penelitian yang sudah dilakukan, persentase topik yang lebih disukai dapat dilihat 
                pada Chart Pie di bawah ini. 
            </p>
            <!--Chart Pie-->
        </div>
    </div>
</div>

@endsection