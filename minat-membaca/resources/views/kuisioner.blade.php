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
            <h1 class="text-dark">Kuisioner</h1>
        </div>
    </div>
</div>


    <!--Identitas-->
    <div id="identitas" class="container-fluid m-0 p-5">
        <div class="form-group mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="email" class="form-control" id="nama_lengkap">
        </div>
        <div class="form-group mb-3">
            <label for="usia" class="form-label">Usia</label>
            <input type="email" class="form-control" id="usia" placeholder="Contoh: 23">
        </div>
        <div class="form-group mb-3">
            <label for="status" class="form-label">Status</label>
            <div class="col-sm-12">
                <fieldset id="group1" class="col-sm-12 m-1">
                    <div class="form-group form-check col-12">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">Siswa (SMP - SMA)</label>
                    </div>
                    <div class="form-group form-check col-12">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">Mahasiswa (Perguruan Tinggi)</label>
                    </div>
                    <div class="form-group form-check col-12">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">Karyawan</label>
                    </div>
                    <div class="form-group form-check col-12">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">Other</label>
                        <input type="email" class="form-control" id="usia">
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="instansi" class="form-label">Nama Sekolah/Institusi/Instansi/Perusahaan</label>
            <input type="email" class="form-control" id="instansi" placeholder="Contoh: PT XYZ">
        </div>
        <div class="form-group mb-3">
            <label for="no_hp" class="form-label">No. HP</label>
            <input type="email" class="form-control" id="no_hp" placeholder="Contoh: 0896xxxxxxxx">
        </div>
    </div>

    <!--Penjelasan-->
    <div class="container-fluid m-0 p-5 row" style="background-color: #EFEEF4;">
        <div class="col-sm-8 float-left mt-2 pt-5">
            <div>
                <h3 class="text-dark">Keterangan untuk pengisian jawaban pada pernyataan di bawah ini adalah sebagai berikut : </h2>
            </div>
            <div class="pt-3">
                <p class="text-dark" style="text-align:justify; font-size:1.5vw">
                    Sangat Tidak Setuju = 1 <br/>
                    Tidak Setuju = 2 <br/>
                    Netral = 3 <br/>
                    Setuju = 4 <br/>
                    Sangat Setuju = 5 <br/>
                </p>
            </div>
        </div>
        <div class="col-sm-4" style="align-self:center;">
            <img src="images/Kuisioner.svg" class="w-100" />
        </div>
    </div>

    <!--Pernyataan-->
    <div id="pernyataan" class="container-fluid m-0 p-5">
        <!--Pernyataan 1-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Saya senang membaca berita di mana pun saya berada<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <!--Pernyataan 2-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Saya malas membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <!--Pernyataan 3-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Saya cepat bosan ketika membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <!--Pernyataan 4-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Saya selalu bersemangat dalam membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <!--Pernyataan 5-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Saya perlu membaca berita untuk mengetahui peristiwa penting<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <!--Pernyataan 12-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Sebagai anak muda, saya tidak harus membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <!--Pernyataan 7-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">
                Saya harus membaca berita agar membuat saya lebih berhati-hati terhadap peristiwa yang 
                sedang terjadi (dengan maksud agar dapat menghindarinya, misal peristiwa kerusuhan, 
                perang, dan lain sebagainya)
                <span style="color:red">*</span>
            </label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <!--Pernyataan 8-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">
                Saya masih muda tapi saja juga perlu membaca berita
                <span style="color:red">*</span>
            </label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <!--Pernyataan 9-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Membaca berita hanya untuk orang dewasa saja<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>
        
        <!--Pernyataan 10-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">
                Saya lebih suka membaca berita (koran/majalah/perangkat elektronik) daripada melakukan aktivitas 
                lainnya (seperti menonton film, tidur, chatting, hobi dan sejenisnya)
                <span style="color:red">*</span>
            </label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>
        
        <!--Pernyataan 11-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Lebih baik membaca berita daripada melakukan aktivitas lainnya<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>
        
        <!--Pernyataan 12-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">
                Pada saat santai di rumah, saya lebih suka membaca berita dari pada melakukan aktivitas lainnya
                <span style="color:red">*</span>
            </label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>
        
        <!--Pernyataan 13-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">
                Lebih baik mengisi waktu luang dengan melakukan aktivitas lain dari pada membaca berita
                <span style="color:red">*</span>
            </label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>
        
        <!--Pernyataan 14-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Setiap ada waktu luang saya perlu membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>
        
        <!--Pernyataan 15-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Pada akhir pekan dan hari libur  saya tidak ingin membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>
        
        <!--Pernyataan 112-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Mencari berita yang ingin dibaca hanya buang waktu saja<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>
        
        <!--Pernyataan 17-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Saya selalu membaca semua berita (tidak memilih topik berita)<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>
        
        <!--Pernyataan 18-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Membaca berita yang tidak menarik untuk saya, membuat saya mengantuk<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa1" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios1">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" id="Bahasa2" name="Bahasa1"/>
                        <label class="form-check-label" for="Radios2">5</label>
                    </div>
                </fieldset>
            </div>
        </div>
        
        <!--Pernyataan 19-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="Berbahasa">Topik berita yang disukai (boleh pilih lebih dari satu)<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset id="group1" class="col-sm-12 row m-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Perang</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Pemerintah</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Politik</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Pendidikan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Kesehatan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Lingkungan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Ekonomi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Olahraga</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Acara unik atau tidak biasa</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Ilmu Pengetahuan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Teknologi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Flora</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Fauna</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Perang</label>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

@endsection