@extends('layouts.main')

@section('container')
<!--Content-->
<!--Introduction-->
<div class="container-fluid m-0 p-5 row" style="background-color: #EFEEF4;">
    <div class="col-sm-4" style="align-self:center;">
        <img src="images/Newspaper.svg" class="w-100" />
    </div>
    <div class="col-sm-8 float-left">
        <div>
            <h2 class="text-dark">Minat Anak Muda Dalam Membaca Berita</h2>
        </div>
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Berdasarkan studi dari “Most Littered Nation In The World” yang dilakukan oleh Central Connecticut State University pada tahun 2016,
                Indonesia menempati peringkat ke-60 dari 61 negara mengenai minat membaca. Padahal setiap harinya, berita bisa ditemukan di televisi, di
                koran atau majalah, di radio bahkan di media online dan berita disajikan dalam bentuk tulisan, gambar, suara, atau pun video dan suara.
                Juga menurut hasil riset “Studi konsumsi Media Online” yang dilakukan oleh Asosiasi Digital Indonesia (IDA) bersama Baidu dan Badan Ekonomi
                Kreatif (Bekraf) mengatakan bahwa pembaca berita online didominasi kelompok usia 33 sampai 42 tahun. Dari hal ini dapat dilihat bahwa minat
                anak muda dalam membaca berita kurang. Dari hal ini perlu diketahui seberapa besar minat anak muda dalam membaca berita dan berita seperti
                apa yang lebih disukai.
            </p>
            <a href="/kuisioner" style="font-size:1.5vw; text-decoration:none;">Isi Kuisioner</a>
        </div>
    </div>
</div>

<!--Berita-->
<div class="container-fluid m-0 p-5 row">
    <div class="col-sm-8 float-left">
        <div>
            <h2 class="text-dark">Apa itu Berita ?</h2>
        </div>
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                Sebelum kita masuk ke dalam penjelasan mengenai penelitian ini, perlu kita ketahui terlebih dahulu apa itu berita. Menurut Mickhel V Charniey,
                “berita adalah laporan tercepat dari suatu peristiwa atau kejadian yang faktual, penting, dan menarik bagi sebagian pembaca serta menyangkut
                kepentingan mereka”. Berdasarkan cara penyampaiannya, berita dibagi menjadi dua jenis, yakni berita disampaikan secara lisan dan secara
                tertulis. Biasanya berita yang disampaikan secara lisan dapat dilihat di televisi atau di internet, dan berita yang disampaikan secara
                tertulis biasanya dapat dilihat melalui media cetak seperti koran dan dapat juga dilihat di internet. Topik umum untuk laporan berita
                meliputi perang, pemerintah, politik, pendidikan, kesehatan, lingkungan, ekonomi, bisnis, mode, hiburan, olahraga, dan acara unik atau tidak
                biasa.
            </p>
        </div>
    </div>
    <div class="col-sm-4 mt-3 text-center" style="align-self:center;">
        <img src="images/Announcer.svg" class="w-100" />
    </div>
</div>

<!--Manfaat Berita-->
<div class="container-fluid m-0 p-5 row" style="background-color: #EFEEF4;">
    <div class="col-sm-4" style="align-self:center;">
        <img src="images/Advantages.svg" class="w-100" />
    </div>
    <div class="col-sm-8 float-left">
        <div class="pr-5">
            <h2 class="text-dark">Apa Manfaat Membaca Berita ?</h2>
        </div>
        <div class="pr-5 pt-3">
            <ul class="accordion" id="accordionExample">
                <li class="accordion-item" style="background-color:#EFEEF4; border:none;">
                    <a class="font-weight-bold text-dark" aria-expanded="true" style="text-align:justify; font-size:1.5vw; text-decoration:none;" data-toggle="collapse" data-target="#manfaat1">Menambah Wawasan</a>
                    <p class="text-dark accordion-collapse collapse show" style="text-align:justify; font-size:1.5vw" id="manfaat1" class="collapse">
                        Salah satu manfaat membaca berita adalah menambah wawasan dalam berbagai
                        bidang, tergantung berita apa yang dipelajari. Dengan membaca berita juga
                        akan mendapatkan informasi terbaru seperti perkembangan di dunia bisnis,
                        kebijakan-kebijakan baru yang diterapkan atau informasi mengenai berbagai
                        pertandingan olahraga, atau pun yang lainnya. Semakin banyak informasi dan
                        pengetahuan yang didapat, maka akan semakin membuat wawasanmu semakin
                        bertambah kaya.
                    </p>
                </li>
                <li class="accordion-item" style="background-color:#EFEEF4; border:none;">
                    <a class="font-weight-bold text-dark" aria-expanded="false" style="text-align:justify; font-size:1.5vw; text-decoration:none;" data-toggle="collapse" data-target="#manfaat2">Penangkal Informasi Bohong</a>
                    <p class="text-dark accordion-collapse collapse" style="text-align:justify; font-size:1.5vw" id="manfaat2" class="collapse">
                        Penelitian menemukan bahwa orang yang membaca berita adalah pembicara
                        yang lebih baik begitu pun dengan pendengar yang baik. Informasi bohong
                        atau biasa disebut <i>hoax</i> banyak terjadi di mana-mana, sehingga kita
                        perlu menyaring hal tersebut. Dengan membaca berita dari berbagai macam
                        sumber dapat kita manfaatkan untuk mengklarifikasi apakah berita tersebut
                        termasuk berita palsu ataupun berita benar. Sehingga dengan demikian kita
                        tidak akan mudah tertipu oleh berita-berita palsu.
                    </p>
                </li>
                <li class="accordion-item" style="background-color:#EFEEF4; border:none;">
                    <a class="font-weight-bold text-dark" aria-expanded="false" style="text-align:justify; font-size:1.5vw; text-decoration:none;" data-toggle="collapse" data-target="#manfaat3">Sumber Inspirasi</a>
                    <p class="text-dark accordion-collapse collapse" style="text-align:justify; font-size:1.5vw" id="manfaat3" class="collapse">
                        Berita sangatlah baik sebagai sumber informasi dan bisa untuk sumber inspirasi
                        yang baik. Informasi berita yang menampilkan tokoh-tokoh hebat secara tidak
                        langsung bisa memotivasi hidup menjadi lebih baik.
                    </p>
                </li>
                <li class="accordion-item" style="background-color:#EFEEF4; border:none;">
                    <a class="font-weight-bold text-dark" aria-expanded="false" style="text-align:justify; font-size:1.5vw; text-decoration:none;" data-toggle="collapse" data-target="#manfaat4">Berita Memperlambat Penuaan</a>
                    <p class="text-dark accordion-collapse collapse" style="text-align:justify; font-size:1.5vw" id="manfaat4" class="collapse">
                        Penelitian menunjukan bahwa lansia yang membaca berita memiliki peluang 17% lebih 
                        rendah dalam proses penuaan. Saat membaca berita, sering kali memicu beberapa 
                        respons, termasuk ingatan dan emosi yang kuat dari otak. Stimulasi mental apa pun 
                        dapat memperlambat otak yang menua. Setiap kali mempelajari sesuati yang baru, 
                        itu membantu otak manusia agar tetap fit. 
                    </p>
                </li>
                <li class="accordion-item" style="background-color:#EFEEF4; border:none;">
                    <a class="font-weight-bold text-dark" aria-expanded="false" style="text-align:justify; font-size:1.5vw; text-decoration:none;" data-toggle="collapse" data-target="#manfaat5">Meningkatkan Kreativitas</a>
                    <p class="text-dark accordion-collapse collapse" style="text-align:justify; font-size:1.5vw" id="manfaat5" class="collapse">
                        Seiring dengan berkembangnya teknologi, isi berita bukan hanya mengenai informasi 
                        yang bersifat pemerintahan, bencana, atau pun peristiwa yang terjadi pada sebuah 
                        daerah. Berita-berita sekarang ini juga banyak memberikan informasi yang sangat 
                        membantu dalam mengembangkan kreativitas baik dalam hal usaha, gaya hidup, dan 
                        beberapa tips yang bisa membantu hidup kita saat ada masalah. 
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection