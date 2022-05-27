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
            <h1 class="text-dark">Perhitungan</h1>
        </div>
    </div>
</div>

<!--Metode Yang Digunakan-->
<div class="container-fluid m-0 p-5 row">
    <div class="col-sm-12 float-left">
        <div class="pt-4">
            <h2 class="text-dark">Apa Metode yang Digunakan ?</h2>
        </div>
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Metode yang digunakan adalah metode K-Means Clustering dan Naive Bayes. Metode
                K-Means Clustering adalah metode clustering yang paling umum dan sederhana, hal
                ini disebabkan K-Means mempunyai kemampuan mengelompokkan dan memetakan data
                dalam jumlah yang cukup besar dengan waktu komputasi yang relatif efisien dan
                cepat. Sedangkan Metode Naive Bayes adalah pengklasifikasian statistik yang dapat
                digunakan untuk memprediksi probabilitas keanggotaan suatu kelas. Pada penelitian
                ini, Metode K-Means Clustering akan digunakan untuk melakukan penentuan kelas dan
                metode Naive Bayes akan digunakan untuk melakukan klasifikasi terhadap data
                testing. Setelah hasil klasifikasi di dapatkan maka selanjutnya kita dapat
                menghitung seberapa besar Minat Anak Muda dalam Membaca Berita. Dalam penelitian
                ini terdapat 3 kelas yang digunakan yaitu Berminat, Cukup Berminat, dan Tidak
                Berminat. Untuk memperjelas bagaimana proses perhitungan yang dilakukan pada sistem 
                ini, maka di bawah ini adalah contoh perhitungannya. 
            </p>
        </div>
    </div>
</div>

<!--Contoh Perhitungan-->
<div class="container-fluid m-0 p-5 row" style="background-color: #EFEEF4;">
    <!--Part 1-->
    <div class="col-sm-12 float-left">
        <div>
            <h2 class="text-dark">Contoh Perhitungan</h2>
        </div>
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Data yang akan digunakan pada perhitungan akan di bagi menjadi 2, yaitu 5 data training dan 2 data testing. Sebelum kita masuk ke dalam contoh perhitungannya, tabel di bawah ini adalah keterangan 
                dataset pada kuisioner berdasarkan indikator yang digunakan. 
                <a class="text-decoration-none" data-bs-toggle="collapse" href="#collapseKeterangan" role="button" aria-expanded="false" aria-controls="collapseKeterangan">
                    Klik untuk melihat tabel indikator.
                </a>
            <!--tabel keterangan dataset-->
            <div class="table-responsive collapse" id="collapseKeterangan">
                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Indikator</th>
                            <th>Pernyataan</th>
                            <th>Kode</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($keterangans as $keterangan)
                        <tr>
                            <td>{{ $keterangan->no }}</td>
                            <td>{{ $keterangan->indikator }}</td>
                            <td>{{ $keterangan->pernyataan }}</td>
                            <td>{{ $keterangan->kode }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--Part 2-->
    <div class="col-sm-12 float-left">
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Data di bawah ini adalah contoh dataset kuisioner yang akan digunakan sebagai data testing 
                pada contoh perhitungan ini. P1 sampai P18 merupakan pernyataan pada tabel di atas ini, 
                sedangkan R1 sampai R5 merupakan seluruh responden pada kuisioner pada data testing ini. 
            </p>
        </div>
        <!--tabel dataset1 (data training)-->
        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark table-bordered">
                    <tr>
                        <th>Responden</th>
                        <th>P1</th>
                        <th>P2</th>
                        <th>P3</th>
                        <th>P4</th>
                        <th>P5</th>
                        <th>P6</th>
                        <th>P7</th>
                        <th>P8</th>
                        <th>P9</th>
                        <th>P10</th>
                        <th>P11</th>
                        <th>P12</th>
                        <th>P13</th>
                        <th>P14</th>
                        <th>P15</th>
                        <th>P16</th>
                        <th>P17</th>
                        <th>P18</th>
                    </tr>
                </thead>
                    <tbody class="table-light">
                        @foreach ($contoh1s as $contoh1)
                        <tr>
                            <td>{{ $contoh1->responden }}</td>
                            <td>{{ $contoh1->p1 }}</td>
                            <td>{{ $contoh1->p2 }}</td>
                            <td>{{ $contoh1->p3 }}</td>
                            <td>{{ $contoh1->p4 }}</td>
                            <td>{{ $contoh1->p5 }}</td>
                            <td>{{ $contoh1->p6 }}</td>
                            <td>{{ $contoh1->p7 }}</td>
                            <td>{{ $contoh1->p8 }}</td>
                            <td>{{ $contoh1->p9 }}</td>
                            <td>{{ $contoh1->p10 }}</td>
                            <td>{{ $contoh1->p11 }}</td>
                            <td>{{ $contoh1->p12 }}</td>
                            <td>{{ $contoh1->p13 }}</td>
                            <td>{{ $contoh1->p14 }}</td>
                            <td>{{ $contoh1->p15 }}</td>
                            <td>{{ $contoh1->p16 }}</td>
                            <td>{{ $contoh1->p17 }}</td>
                            <td>{{ $contoh1->p18 }}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>

<!--Metode K-Means Clustering-->
<div class="container-fluid m-0 p-5 row">
    <div class="col-sm-12 float-left">
        <div class="pt-4">
            <h2 class="text-dark">K-Means Clustering</h2>
        </div>
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Proses pertama yang dilakukan pada penelitian ini adalah melakukan penentuan 
                kelas dengan menggunakan K-Means Clustering. Kemudian setelah di dapatkan 
                kelas pada responden data training maka selanjutnya dapat dilakukan klasifikasi 
                dengan menggunakan metode Naive Bayes untuk menentukan apakah responden pada dataset 
                testing masuk ke dalam kelas mana. Setelah didapatkan hasil kelas pada keseluruhan 
                responden maka dapat dihitung seberapa besar Minat Anak Muda dalam Membaca Berita.   
            </p>
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Berikut adalah tahapan pada metode K-Means Clustering :  
                <ol style="font-size:1.5vw">
                    <!--Step 1-->
                    <li class="pb-3">
                        Memasukkan data yang akan dikelompokkan <i>(clustering)</i>
                    </li>

                    <!--Step 2-->
                    <li>
                        <a>Menentukan nilai K sebagai jumlah <i>cluster</i> yang akan dibentuk</a>
                        <p>
                            Pada tahap ini, nilai K sebagai jumlah <i>cluster</i> yang akan dibentuk adalah 3. 
                            C1 adalah Berminat, C2 adalah Cukup Berminat, C3 adalah Tidak Berminat. 
                        </p>
                    </li>

                    <!--Step 3-->
                    <li>
                        Inisialisasi K dari data sebanyak jumlah <i>cluster</i> secara acak sebagai pusat 
                        <i>cluster (Centroid)</i>. Tabel di bawah ini merupakan pusat <i>Centroid</i> acaknya.
                        <!--tabel pusat centroid acak-->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-dark table-bordered">
                                    <tr>
                                        <th>Centroid</th>
                                        <th>P1</th>
                                        <th>P2</th>
                                        <th>P3</th>
                                        <th>P4</th>
                                        <th>P5</th>
                                        <th>P6</th>
                                        <th>P7</th>
                                        <th>P8</th>
                                        <th>P9</th>
                                        <th>P10</th>
                                        <th>P11</th>
                                        <th>P12</th>
                                        <th>P13</th>
                                        <th>P14</th>
                                        <th>P15</th>
                                        <th>P16</th>
                                        <th>P17</th>
                                        <th>P18</th>
                                    </tr>
                                </thead>
                                    <tbody class="table-light">
                                        @foreach ($centroid_acaks as $cas)
                                        <tr>
                                            <td>{{ $cas->centroid }}</td>
                                            <td>{{ $cas->p1 }}</td>
                                            <td>{{ $cas->p2 }}</td>
                                            <td>{{ $cas->p3 }}</td>
                                            <td>{{ $cas->p4 }}</td>
                                            <td>{{ $cas->p5 }}</td>
                                            <td>{{ $cas->p6 }}</td>
                                            <td>{{ $cas->p7 }}</td>
                                            <td>{{ $cas->p8 }}</td>
                                            <td>{{ $cas->p9 }}</td>
                                            <td>{{ $cas->p10 }}</td>
                                            <td>{{ $cas->p11 }}</td>
                                            <td>{{ $cas->p12 }}</td>
                                            <td>{{ $cas->p13 }}</td>
                                            <td>{{ $cas->p14 }}</td>
                                            <td>{{ $cas->p15 }}</td>
                                            <td>{{ $cas->p16 }}</td>
                                            <td>{{ $cas->p17 }}</td>
                                            <td>{{ $cas->p18 }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </li>

                    <!--Step 4-->
                    <li>
                        <a>
                            Menghitung jarak antara masing-masing data dengan pusat <i>cluster (Centroid)</i>, 
                            dengan menggunakan persamaan <i>Euclidean Distance</i>
                        </a>
                        <img src="images/perhitungan/4 kmeans.PNG" class="w-10" />
                        <p>
                            Dan seterusnya sampai d(R5,C1), kemudian d(R1, C2) sampai d(R5,C2), dan d(R1,C3) sampai d(R5,C3).
                            Tabel di bawah ini merukan hasil perhitungannya. 
                        </p>
                        <!--tabel iterasi pertama-->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-dark table-bordered">
                                    <tr>
                                        <th>Responden</th>
                                        <th>P1</th>
                                        <th>P2</th>
                                        <th>P3</th>
                                        <th>P4</th>
                                        <th>P5</th>
                                        <th>P6</th>
                                        <th>P7</th>
                                        <th>P8</th>
                                        <th>P9</th>
                                        <th>P10</th>
                                        <th>P11</th>
                                        <th>P12</th>
                                        <th>P13</th>
                                        <th>P14</th>
                                        <th>P15</th>
                                        <th>P16</th>
                                        <th>P17</th>
                                        <th>P18</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                    <tbody class="table-light">
                                        @foreach ($iterasi1s as $iterasi1)
                                        <tr>
                                            <td>{{ $iterasi1->responden }}</td>
                                            <td>{{ $iterasi1->p1 }}</td>
                                            <td>{{ $iterasi1->p2 }}</td>
                                            <td>{{ $iterasi1->p3 }}</td>
                                            <td>{{ $iterasi1->p4 }}</td>
                                            <td>{{ $iterasi1->p5 }}</td>
                                            <td>{{ $iterasi1->p6 }}</td>
                                            <td>{{ $iterasi1->p7 }}</td>
                                            <td>{{ $iterasi1->p8 }}</td>
                                            <td>{{ $iterasi1->p9 }}</td>
                                            <td>{{ $iterasi1->p10 }}</td>
                                            <td>{{ $iterasi1->p11 }}</td>
                                            <td>{{ $iterasi1->p12 }}</td>
                                            <td>{{ $iterasi1->p13 }}</td>
                                            <td>{{ $iterasi1->p14 }}</td>
                                            <td>{{ $iterasi1->p15 }}</td>
                                            <td>{{ $iterasi1->p16 }}</td>
                                            <td>{{ $iterasi1->p17 }}</td>
                                            <td>{{ $iterasi1->p18 }}</td>
                                            <td>{{ $iterasi1->C1 }}</td>
                                            <td>{{ $iterasi1->C2 }}</td>
                                            <td>{{ $iterasi1->C3 }}</td>
                                            <td>{{ $iterasi1->kelas }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </li>

                    <!--Step 5-->
                    <li>
                        <a>Kelompokan setiap data berdasarkan jarak terdekat antara data dengan <i>centroid</i>nya</a>
                        <p>
                            Pada tahap ini, dilakukan perbandingan antara C1, C2, dan C3. Dari semua perhitungan 
                            manakah yang memiliki angka lebih kecl itulah jarak terdekatnya. bandingkan hal ini 
                            pada semua responden yang telah dihitung sebelumnya. Jika dilihat pada data di atas, 
                            di dapatkan kelompok data yaitu C1 (R1), C2 (R2, R3), dan C3 (R4, R5).
                        </p>
                    </li>

                    <!--Step 6-->
                    <li>
                        <a>
                            Tentukan posisi pusat <i>cluster (Centroid)</i> baru (k), jika pusat <i>cluster</i> 
                            tidak berubah, maka proses <i>cluster</i> telah selesai. Jika belum, maka ulang langkah 
                            keempat sampai pusat <i>cluster (Centroid)</i> tidak berubah lagi. 
                        </a>
                        <!--tabel pusat centroid baru-->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-dark table-bordered">
                                    <tr>
                                        <th>Centroid</th>
                                        <th>P1</th>
                                        <th>P2</th>
                                        <th>P3</th>
                                        <th>P4</th>
                                        <th>P5</th>
                                        <th>P6</th>
                                        <th>P7</th>
                                        <th>P8</th>
                                        <th>P9</th>
                                        <th>P10</th>
                                        <th>P11</th>
                                        <th>P12</th>
                                        <th>P13</th>
                                        <th>P14</th>
                                        <th>P15</th>
                                        <th>P16</th>
                                        <th>P17</th>
                                        <th>P18</th>
                                    </tr>
                                </thead>
                                    <tbody class="table-light">
                                        @foreach ($centroid_barus as $cbs)
                                        <tr>
                                            <td>{{ $cbs->centroid }}</td>
                                            <td>{{ $cbs->p1 }}</td>
                                            <td>{{ $cbs->p2 }}</td>
                                            <td>{{ $cbs->p3 }}</td>
                                            <td>{{ $cbs->p4 }}</td>
                                            <td>{{ $cbs->p5 }}</td>
                                            <td>{{ $cbs->p6 }}</td>
                                            <td>{{ $cbs->p7 }}</td>
                                            <td>{{ $cbs->p8 }}</td>
                                            <td>{{ $cbs->p9 }}</td>
                                            <td>{{ $cbs->p10 }}</td>
                                            <td>{{ $cbs->p11 }}</td>
                                            <td>{{ $cbs->p12 }}</td>
                                            <td>{{ $cbs->p13 }}</td>
                                            <td>{{ $cbs->p14 }}</td>
                                            <td>{{ $cbs->p15 }}</td>
                                            <td>{{ $cbs->p16 }}</td>
                                            <td>{{ $cbs->p17 }}</td>
                                            <td>{{ $cbs->p18 }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                        <p>
                            Dari tabel di bawah ini, dapat dilihat bahwa iterasi pertama dan kedua memiliki kelompok 
                            data yang sama, maka dari itu proses dinyatakan selesai. Berdasarkan 5 responden di 
                            dapatkan hasil yaitu pada kategori C1 (Berminat) terdapat 1 responden, kategori C2 
                            (Cukup Berminat) terdapat 2 responden, dan kategori C3 (Tidak Berminat) terdapat 2 
                            responden. 
                        </p>
                        <!--tabel iterasi kedua-->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-dark table-bordered">
                                    <tr>
                                        <th>Responden</th>
                                        <th>P1</th>
                                        <th>P2</th>
                                        <th>P3</th>
                                        <th>P4</th>
                                        <th>P5</th>
                                        <th>P6</th>
                                        <th>P7</th>
                                        <th>P8</th>
                                        <th>P9</th>
                                        <th>P10</th>
                                        <th>P11</th>
                                        <th>P12</th>
                                        <th>P13</th>
                                        <th>P14</th>
                                        <th>P15</th>
                                        <th>P16</th>
                                        <th>P17</th>
                                        <th>P18</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>Kelas</th>
                                    </tr>
                                </thead>
                                    <tbody class="table-light">
                                        @foreach ($iterasi2s as $iterasi2)
                                        <tr>
                                            <td>{{ $iterasi2->responden }}</td>
                                            <td>{{ $iterasi2->p1 }}</td>
                                            <td>{{ $iterasi2->p2 }}</td>
                                            <td>{{ $iterasi2->p3 }}</td>
                                            <td>{{ $iterasi2->p4 }}</td>
                                            <td>{{ $iterasi2->p5 }}</td>
                                            <td>{{ $iterasi2->p6 }}</td>
                                            <td>{{ $iterasi2->p7 }}</td>
                                            <td>{{ $iterasi2->p8 }}</td>
                                            <td>{{ $iterasi2->p9 }}</td>
                                            <td>{{ $iterasi2->p10 }}</td>
                                            <td>{{ $iterasi2->p11 }}</td>
                                            <td>{{ $iterasi2->p12 }}</td>
                                            <td>{{ $iterasi2->p13 }}</td>
                                            <td>{{ $iterasi2->p14 }}</td>
                                            <td>{{ $iterasi2->p15 }}</td>
                                            <td>{{ $iterasi2->p16 }}</td>
                                            <td>{{ $iterasi2->p17 }}</td>
                                            <td>{{ $iterasi2->p18 }}</td>
                                            <td>{{ $iterasi2->C1 }}</td>
                                            <td>{{ $iterasi2->C2 }}</td>
                                            <td>{{ $iterasi2->C3 }}</td>
                                            <td>{{ $iterasi2->kelas }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </li>
                </ol>
            </p>
        </div>
    </div>
</div>

<!--Metode Naive Bayes-->
<div class="container-fluid m-0 p-5 row" style="background-color: #EFEEF4;">
    <div class="col-sm-12 float-left">
        <div>
            <h2 class="text-dark">Naive Bayes</h2>
        </div>
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Setelah didapatkan hasil penentuan kelas dengan menggunakan metode K-Means Clustering, 
                maka tahap selanjutnya adalah melakukan klasifikasi dengan menggunakan metode Naive 
                Bayes pada data testing. Terdaoat data testing yang berisi 2 orang responden yang dapat 
                dilihat pada tabel di bawah ini. 
            </p>
            <!--tabel dataset2 (data testing)-->
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark table-bordered">
                        <tr>
                            <th>Responden</th>
                            <th>P1</th>
                            <th>P2</th>
                            <th>P3</th>
                            <th>P4</th>
                            <th>P5</th>
                            <th>P6</th>
                            <th>P7</th>
                            <th>P8</th>
                            <th>P9</th>
                            <th>P10</th>
                            <th>P11</th>
                            <th>P12</th>
                            <th>P13</th>
                            <th>P14</th>
                            <th>P15</th>
                            <th>P16</th>
                            <th>P17</th>
                            <th>P18</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($contoh2s as $contoh2)
                        <tr>
                            <td>{{ $contoh2->responden }}</td>
                            <td>{{ $contoh2->p1 }}</td>
                            <td>{{ $contoh2->p2 }}</td>
                            <td>{{ $contoh2->p3 }}</td>
                            <td>{{ $contoh2->p4 }}</td>
                            <td>{{ $contoh2->p5 }}</td>
                            <td>{{ $contoh2->p6 }}</td>
                            <td>{{ $contoh2->p7 }}</td>
                            <td>{{ $contoh2->p8 }}</td>
                            <td>{{ $contoh2->p9 }}</td>
                            <td>{{ $contoh2->p10 }}</td>
                            <td>{{ $contoh2->p11 }}</td>
                            <td>{{ $contoh2->p12 }}</td>
                            <td>{{ $contoh2->p13 }}</td>
                            <td>{{ $contoh2->p14 }}</td>
                            <td>{{ $contoh2->p15 }}</td>
                            <td>{{ $contoh2->p16 }}</td>
                            <td>{{ $contoh2->p17 }}</td>
                            <td>{{ $contoh2->p18 }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Berdasarkan data testing di atas, perlu ditentukan apakah kedua orang tersebut masuk ke 
                dalam kategori Berminat, Cukup Berminat atau Tidak Berminat dalam membaca berita dengan 
                menggunakan metode Naive Bayes. berikut adalah tahap perhitungan menggunakan metode 
                Naive Bayes:
            </p>
            <ol style="font-size:1.5vw">
                <!--Step 1-->
                <li>
                    <a>Menghitung jumlah kelas pada data training</a>
                    <p>
                        Hitung jumlah sampel atau kelas yang muncul ditambah 1, kemudian dibagi 
                        dengan jumlah seluruh sampe atau kelas yang ditambah jumlah kategori atau 
                        kelas. Hal ini dilakukan sehingga bisa menghidari kasus nilai probabilitas 0 (nol). <br/>
                        <img src="images/perhitungan/1 naive bayes.PNG" class="w-10" />
                    </p>
                </li>

                <!--Step 2-->
                <li>
                    <a>Menghitung jumlah kasus yang sama dengan kelas yang sama pada data testing</a>
                    <p>
                        Hitung jumlah sampel atau kelas yang sama ditambah 1, kemudian dibagi dengan jumlah seluruh 
                        sampel atau kelas c yang muncul yang ditambah jumlah atribut yang ada. <br/>
                        <img src="images/perhitungan/2.1 naive bayes.PNG" style="width:33%" />
                        <img src="images/perhitungan/2.2 naive bayes.PNG" style="width:33%" />
                        <img src="images/perhitungan/2.3 naive bayes.PNG" style="width:33%" /> 
                        <p></p>
                        <img src="images/perhitungan/2.4 naive bayes.PNG" style="width:33%" />
                        <img src="images/perhitungan/2.5 naive bayes.PNG" style="width:33%" />
                        <img src="images/perhitungan/2.6 naive bayes.PNG" style="width:33%" />
                        <p></p>
                        <img src="images/perhitungan/2.7 naive bayes.PNG" style="width:33%" />
                    </p>
                </li>

                <!--Step 3-->
                <li>
                    <a>Mengalikan semua hasil sesuai dengan data testing</a>
                    <p>
                        Pada tahap ini, diperlukan untuk mengalikan semua hasil dari tahap 2 sesuai dengan kelasnya 
                        masing-masing. <br/> 
                        <img src="images/perhitungan/3.2 naive bayes.PNG" class="w-10" />
                    </p>
                    <p>
                        Setelah mengalikan semua hasil pada tahap 2 sesuai dengan kelasnya, selanjutnya mengalikan 
                        dengan hasil pada tahap 1. <br/> 
                        <img src="images/perhitungan/3.2 naive bayes.PNG" class="w-10" />
                    </p>
                </li>

                <!--Step 4-->
                <li>
                    <a>Membandingkan hasil per kelas</a>
                    <p>
                        Setelah dilakukan perhitungan pada tahap 1 sampai 3, pada tahap ini yang perlu dilakukan 
                        adalah membandingkan hasil pada tahap 3. Maka dapat disimpulkan bahwa probabilitas 
                        Minat Membaca Berita pada responden pertama adalah <b>Berminat</b>. 
                    </p>
                </li>
            </ol>
            <p class="pt-3" style="font-size:1.5vw">
                Dan dilakukan kembali tahap 1 sampai dengan tahap 4 untuk responden kedua pada data 
                testing dan hasilnya adalah <b>Tidak Berminat</b>. <br/>  
                <img src="images/perhitungan/3.2 responden 2 naive bayes.PNG" class="w-10" />
            </p>
        </div>
    </div>
</div>

<!--Hasil Akhir-->
<div class="container-fluid m-0 p-5 row">
    <div class="col-sm-12 float-left">
        <div class="pt-4">
            <h2 class="text-dark">Hasil Akhir</h2>
        </div>
        <div class="pt-3">
            <p style="font-size:1.5vw">
                Berdasarkan hasil perhitungan dengan metode K-Means Clustering dan Naive Bayes, maka 
                dapat dihitung besaran Minat Membaca Berita. <br/>  
                <img src="images/perhitungan/Persentase akhir.PNG" class="w-10" />
            </p>
        </div>
    </div>
</div>

@endsection