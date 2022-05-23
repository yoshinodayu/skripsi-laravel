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
            <p class="text-dark" style="text-align:justify">
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
            <p class="text-dark" style="text-align:justify">
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
            <p class="text-dark" style="text-align:justify">
                Berdasarkan penelitian yang sudah dilakukan, persentase topik yang lebih disukai dapat dilihat 
                pada Chart Pie di bawah ini. 
            </p>
            <!--Chart Pie-->
        </div>
    </div>
</div>

@endsection