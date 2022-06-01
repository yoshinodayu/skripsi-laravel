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


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form method="POST" action="/kuisioner">
    @csrf
    <!--Identitas-->
    <div id="identitas" class="container-fluid m-0 p-5">
            <div class="form-group mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" required>
                @error('nama_lengkap')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="number" class="form-control @error('nama_lengkap') is-invalid @enderror" id="usia" name="usia" placeholder="Contoh: 23" required>
                @error('usia')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="status" class="form-label">Status</label>
                <div class="col-sm-12">
                    <fieldset class="col-sm-12 m-1">
                        <div class="form-group form-check col-12">
                            <input class="form-check-input" type="radio" id="status1" name="status" value="Siswa (SMP - SMA)" {{ old('status') == 'Siswa (SMP - SMA)' ? 'checked' : '' }}  required/>
                            <label class="form-check-label" for="status1">Siswa (SMP - SMA)</label>
                        </div>
                        <div class="form-group form-check col-12">
                            <input class="form-check-input" type="radio" id="status2" name="status" value="Mahasiswa (Perguruan Tinggi)" {{ old('status') == 'Mahasiswa (Perguruan Tinggi)' ? 'checked' : '' }}/>
                            <label class="form-check-label" for="status2">Mahasiswa (Perguruan Tinggi)</label>
                        </div>
                        <div class="form-group form-check col-12">
                            <input class="form-check-input" type="radio" id="status3" name="status" value="Karyawan" {{ old('status') == 'Karyawan' ? 'checked' : '' }}/>
                            <label class="form-check-label" for="status3">Karyawan</label>
                        </div>
                        <div class="form-group form-check col-12">
                            <input class="form-check-input" type="radio" id="other" name="status" {{ old('status') == '' ? 'checked' : '' }}/>
                            <label class="form-check-label" for="other">Other</label>
                            <input class="form-control col-sm-12" name="status" value=""/>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="instansi" class="form-label">Nama Sekolah/Institusi/Instansi/Perusahaan</label>
                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="instansi" name="instansi" placeholder="Contoh: PT XYZ" required>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
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
    <div id="pernyataan" class="container-fluid m-0 pt-5 ps-5 pe-5 pb-3">
        <!--Pernyataan 1-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p1">Saya senang membaca berita di mana pun saya berada<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p1" id="p1a" value="1" {{ old('status') == '1' ? 'checked' : '' }}  required/>
                        <label class="form-check-label" for="p1a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p1" id="p1b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p1b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p1" id="p1c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p1c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p1" id="p1d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p1d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p1" id="p1e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p1e">5</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <!--Pernyataan 2-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p2">Saya malas membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p2" id="p2a" value="1" {{ old('status') == '1' ? 'checked' : '' }}  required/>
                        <label class="form-check-label" for="p2a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p2" id="p2b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p2b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p2" id="p2c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p2c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p2" id="p2d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p2d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p2" id="p2e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p2e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>

        <!--Pernyataan 3-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p3">Saya cepat bosan ketika membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p3" id="p3a" value="1" {{ old('status') == '1' ? 'checked' : '' }}  required/>
                        <label class="form-check-label" for="p3a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p3" id="p3b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p3b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p3" id="p3c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p3c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p3" id="p3d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p3d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p3" id="p3e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p3e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>

        <!--Pernyataan 4-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p4">Saya selalu bersemangat dalam membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p4" id="p4a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p4a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p4" id="p4b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p4b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p4" id="p4c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p4c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p4" id="p4d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p4d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p4" id="p4e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p4e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>

        <!--Pernyataan 5-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p5">Saya perlu membaca berita untuk mengetahui peristiwa penting<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p5" id="p5a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p5a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p5" id="p5b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p5b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p5" id="p5c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p5c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p5" id="p5d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p5d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p5" id="p5e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p5e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>

        <!--Pernyataan 6-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p6">Sebagai anak muda, saya tidak harus membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p6" id="p6a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p6a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p6" id="p6b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p6b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p6" id="p6c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p6c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p6" id="p6d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p6d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p6" id="p6e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p6e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>

        <!--Pernyataan 7-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p7">
                Saya harus membaca berita agar membuat saya lebih berhati-hati terhadap peristiwa yang 
                sedang terjadi (dengan maksud agar dapat menghindarinya, misal peristiwa kerusuhan, 
                perang, dan lain sebagainya)
                <span style="color:red">*</span>
            </label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p7" id="p7a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p7a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p7" id="p7b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p7b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p7" id="p7c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p7c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p7" id="p7d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p7d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p7" id="p7e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p7e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>

        <!--Pernyataan 8-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p8">
                Saya masih muda tapi saja juga perlu membaca berita
                <span style="color:red">*</span>
            </label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p8" id="p8a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p8a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p8" id="p8b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p8b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p8" id="p8c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p8c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p8" id="p8d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p8d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p8" id="p8e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p8e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>

        <!--Pernyataan 9-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p9">Membaca berita hanya untuk orang dewasa saja<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p9" id="p9a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p9a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p9" id="p9b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p9b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p9" id="p9c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p9c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p9" id="p9d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p9d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p9" id="p9e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p9e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>
        
        <!--Pernyataan 10-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p10">
                Saya lebih suka membaca berita (koran/majalah/perangkat elektronik) daripada melakukan aktivitas 
                lainnya (seperti menonton film, tidur, chatting, hobi dan sejenisnya)
                <span style="color:red">*</span>
            </label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p10" id="p10a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p10a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p10" id="p10b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p10b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p10" id="p10c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p10c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p10" id="p10d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p10d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p10" id="p10e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p10e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>
        
        <!--Pernyataan 11-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p11">Lebih baik membaca berita daripada melakukan aktivitas lainnya<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p11" id="p11a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p11a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p11" id="p11b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p11b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p11" id="p11c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p11c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p11" id="p11d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p11d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p11" id="p11e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p11e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>
        
        <!--Pernyataan 12-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p12">
                Pada saat santai di rumah, saya lebih suka membaca berita dari pada melakukan aktivitas lainnya
                <span style="color:red">*</span>
            </label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p12" id="p12a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p12a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p12" id="p12b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p12b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p12" id="p12c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p12c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p12" id="p12d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p12d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p12" id="p12e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p12e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>
        
        <!--Pernyataan 13-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p13">
                Lebih baik mengisi waktu luang dengan melakukan aktivitas lain dari pada membaca berita
                <span style="color:red">*</span>
            </label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p13" id="p13a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p13a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p13" id="p13b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p13b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p13" id="p13c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p13c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p13" id="p13d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p13d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p13" id="p13e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p13e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>
        
        <!--Pernyataan 14-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p14">Setiap ada waktu luang saya perlu membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p14" id="p14a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p14a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p14" id="p14b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p14b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p14" id="p14c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p14c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p14" id="p14d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p14d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p14" id="p14e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p14e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>
        
        <!--Pernyataan 15-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p15">Pada akhir pekan dan hari libur  saya tidak ingin membaca berita<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p15" id="p15a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p15a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p15" id="p15b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p15b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p15" id="p15c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p15c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p15" id="p15d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p15d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p15" id="p15e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p15e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>
        
        <!--Pernyataan 16-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p16">Mencari berita yang ingin dibaca hanya buang waktu saja<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p16" id="p16a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p16a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p16" id="p16b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p16b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p16" id="p16c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p16c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p16" id="p16d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p16d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p16" id="p16e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p16e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>
        
        <!--Pernyataan 17-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p17">Saya selalu membaca semua berita (tidak memilih topik berita)<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p17" id="p17a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p17a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p17" id="p17b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p17b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p17" id="p17c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p17c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p17" id="p17d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p17d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio" name="p17" id="p17e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p17e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>
        
        <!--Pernyataan 18-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="p18">Membaca berita yang tidak menarik untuk saya, membuat saya mengantuk<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio"  name="p18" id="p18a" value="1" {{ old('status') == '1' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p18a">1</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio"  name="p18" id="p18b" value="2" {{ old('status') == '2' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p18b">2</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio"  name="p18" id="p18c" value="3" {{ old('status') == '3' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p18c">3</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio"  name="p18" id="p18d" value="4" {{ old('status') == '4' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p18d">4</label>
                    </div>
                    <div class="form-group form-check col-2">
                        <input class="form-check-input" type="radio"  name="p18" id="p18e" value="5" {{ old('status') == '5' ? 'checked' : '' }}/>
                        <label class="form-check-label" for="p18e">5</label>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>
        
        <!--Topik Berita-->
        <div class="form-group col-sm-12 mb-3">
            <label class="control-label" for="topik_berita">Topik berita yang disukai (boleh pilih lebih dari satu)<span style="color:red">*</span></label>
            <div class="col-sm-12 row">
                <fieldset class="col-sm-12 row m-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Perang" id="Perang" name="topik_berita[]">
                        <label class="form-check-label" for="Perang">Perang</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Pemerintah" id="Pemerintah" name="topik_berita[]">
                        <label class="form-check-label" for="Pemerintah">Pemerintah</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Politik" id="Politik" name="topik_berita[]">
                        <label class="form-check-label" for="Politik">Politik</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Pendidikan" id="Pendidikan" name="topik_berita[]">
                        <label class="form-check-label" for="Pendidikan">Pendidikan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Kesehatan" id="Kesehatan" name="topik_berita[]">
                        <label class="form-check-label" for="Kesehatan">Kesehatan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Lingkungan" id="Lingkungan" name="topik_berita[]">
                        <label class="form-check-label" for="Lingkungan">Lingkungan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Ekonomi" id="Ekonomi" name="topik_berita[]">
                        <label class="form-check-label" for="Ekonomi">Ekonomi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Olahraga" id="Olahraga" name="topik_berita[]">
                        <label class="form-check-label" for="Olahraga">Olahraga</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Acara unik atau tidak biasa" id="Acara unik atau tidak biasa" name="topik_berita[]">
                        <label class="form-check-label" for="Acara unik atau tidak biasa">Acara unik atau tidak biasa</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Ilmu Pengetahuan" id="Ilmu Pengetahuan" name="topik_berita[]">
                        <label class="form-check-label" for="Ilmu Pengetahuan">Ilmu Pengetahuan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Teknologi" id="Teknologi" name="topik_berita[]">
                        <label class="form-check-label" for="Teknologi">Teknologi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Flora" id="Flora" name="topik_berita[]">
                        <label class="form-check-label" for="Flora">Flora</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Fauna" id="Fauna" name="topik_berita[]">
                        <label class="form-check-label" for="Fauna">Fauna</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" onclick="var input = document.getElementById('other'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
                        <label class="form-check-label" for="other">Other</label><br/>
                        <input class="form-control col-sm-12" id="other" value="" name="topik_berita[]" disabled="disabled"/>
                    </div>
                </fieldset>
                @error('instansi')
                    <div class="invalid-feedback">
                        <p class="text-danger">This field is required.</p>
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="container-fluid m-0 pb-5 ps-5 pe-5 d-grid gap-2">
        <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
    </div>
</form>

@endsection