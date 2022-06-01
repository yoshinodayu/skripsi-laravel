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
                Minat Membaca Berita yang akan dibutuhkan. Kuisioner ini telah disebarkan mulai dari tanggal 29 
                April 2020 sampai dengan 15 Mei 2022, didapatkan responden sebanyak 438 orang.
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

<?php
//Connect Database
$mysqli = new mysqli("localhost", "root", "", "minat_membaca");

//Cek Koneksi
if (mysqli_connect_errno()){
	echo "Tidak terhubung";
	exit;
}

//Naive Bayes
function TotalDataTraining() {
    return (int) mysqli_fetch_row(mysqli_query($mysqli, "select count(*) from jawabans"))[0];
}

//hitung jumlah data kelas
function JumlahDataKelas() {
    $query = "select count(*) from jawabans where kelas=";

    $JumlahDataKelas['C1'] = (int) mysql_fetch_row(mysqli_query($mysqli, $query . "'C1'"))[0];
    $JumlahDataKelas['C2'] = (int) mysql_fetch_row(mysqli_query($mysqli, $query . "'C2'"))[0];
    $JumlahDataKelas['C3'] = (int) mysql_fetch_row(mysqli_query($mysqli, $query . "'C3'"))[0];
    return $JumlahDataKelas;
}

//hitung nilai prior probability
function PriorProbability(){
    //prior probability = jumlah data kelas(ya|tidak) / total data training
    $kelas['C1'] = JumlahDataKelas()['C1'] / TotalDataTraining();
    $kelas['C2'] = JumlahDataKelas()['C2'] / TotalDataTraining();
    $kelas['C3'] = JumlahDataKelas()['C3'] / TotalDataTraining();
    return $kelas;
}

//hitung conditional probability 
function ConditionalProbability($nama_kolom, $nilai) {
    $query = "select count($nama_kolom) from jawabans where $nama_kolom = '$nilai' and kelas=";
    //conditional probability kelas = C1
    $ConditionalProbability['C1'] = (int) mysqli_fetch_row(mysqli_query($mysqli, $query . "'C1'"))[0] / JumlahDataKelas()['C1'];
    //conditional probability kelas = C2
    $ConditionalProbability['C2'] = (int) mysqli_fetch_row(mysqli_query($mysqli, $query . "'C2'"))[0] / JumlahDataKelas()['C2'];
    //conditional probability kelas = C3
    $ConditionalProbability['C3'] = (int) mysqli_fetch_row(mysqli_query($mysqli, $query . "'C3'"))[0] / JumlahDataKelas()['C3'];

    return $ConditionalProbability;
}

//hitung posterior probability
function PosteriorProbability($data) {
    //menghitung nilai conditional probability tiap atribut
    $atribut['p1'] = ConditionalProbability('p1', $data['p1']);
    $atribut['p2'] = ConditionalProbability('p2', $data['p2']);
    $atribut['p3'] = ConditionalProbability('p3', $data['p3']);
    $atribut['p4'] = ConditionalProbability('p4', $data['p4']);
    $atribut['p5'] = ConditionalProbability('p5', $data['p5']);
    $atribut['p6'] = ConditionalProbability('p6', $data['p6']);
    $atribut['p7'] = ConditionalProbability('p7', $data['p7']);
    $atribut['p8'] = ConditionalProbability('p8', $data['p8']);
    $atribut['p9'] = ConditionalProbability('p9', $data['p9']);
    $atribut['p10'] = ConditionalProbability('p10', $data['p10']);
    $atribut['p11'] = ConditionalProbability('p11', $data['p11']);
    $atribut['p12'] = ConditionalProbability('p12', $data['p12']);
    $atribut['p13'] = ConditionalProbability('p13', $data['p13']);
    $atribut['p14'] = ConditionalProbability('p14', $data['p14']);
    $atribut['p15'] = ConditionalProbability('p15', $data['p15']);
    $atribut['p16'] = ConditionalProbability('p16', $data['p16']);
    $atribut['p17'] = ConditionalProbability('p17', $data['p17']);
    $atribut['p18'] = ConditionalProbability('p18', $data['p18']);

    //posterior probability C1
    $probabilitas['C1'] = $atribut['p1']['C1'] *
                           $atribut['p2']['C1'] *
                           $atribut['p3']['C1'] *
                           $atribut['p4']['C1'] *
                           $atribut['p5']['C1'] *
                           $atribut['p6']['C1'] *
                           $atribut['p7']['C1'] *
                           $atribut['p8']['C1'] *
                           $atribut['p9']['C1'] *
                           $atribut['p10']['C1'] *
                           $atribut['p11']['C1'] *
                           $atribut['p12']['C1'] *
                           $atribut['p13']['C1'] *
                           $atribut['p14']['C1'] *
                           $atribut['p15']['C1'] *
                           $atribut['p16']['C1'] *
                           $atribut['p17']['C1'] *
                           $atribut['p18']['C1'] *
                           PriorProbability()['C1'];
                                      
    //posterior probability C2
    $probabilitas['C2'] = $atribut['p1']['C2'] *
                            $atribut['p2']['C2'] *
                            $atribut['p3']['C2'] *
                            $atribut['p4']['C2'] *
                            $atribut['p5']['C2'] *
                            $atribut['p6']['C2'] *
                            $atribut['p7']['C2'] *
                            $atribut['p8']['C2'] *
                            $atribut['p9']['C2'] *
                            $atribut['p10']['C2'] *
                            $atribut['p11']['C2'] *
                            $atribut['p12']['C2'] *
                            $atribut['p13']['C2'] *
                            $atribut['p14']['C2'] *
                            $atribut['p15']['C2'] *
                            $atribut['p16']['C2'] *
                            $atribut['p17']['C2'] *
                            $atribut['p18']['C2'] *
                            PriorProbability()['C2'];
                                                       
    //posterior probability C3
    $probabilitas['C3'] = $atribut['p1']['C3'] *
                            $atribut['p2']['C3'] *
                            $atribut['p3']['C3'] *
                            $atribut['p4']['C3'] *
                            $atribut['p5']['C3'] *
                            $atribut['p6']['C3'] *
                            $atribut['p7']['C3'] *
                            $atribut['p8']['C3'] *
                            $atribut['p9']['C3'] *
                            $atribut['p10']['C3'] *
                            $atribut['p11']['C3'] *
                            $atribut['p12']['C3'] *
                            $atribut['p13']['C3'] *
                            $atribut['p14']['C3'] *
                            $atribut['p15']['C3'] *
                            $atribut['p16']['C3'] *
                            $atribut['p17']['C3'] *
                            $atribut['p18']['C3'] *
                            PriorProbability()['C3'];
    //penentuan kelas
    if ($probabilitas['C1'] > $probabilitas['C2'] && $probabilitas['C1'] > $probabilitas['C3']) {
        return 'C1';
    } else if ($probabilitas['C2'] > $probabilitas['C1'] && $probabilitas['C2'] > $probabilitas['C3']) {
        return 'C2';
    } else {
        return 'C3';
    }
}

?>

@endsection