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

echo "Proses berhasil dilakukan sebanyak $loop kali";

function update_responden($mysqli, $id, $nilai) {
    $stmt = $mysqli->prepare("update jawabans set kelas=? where id=?");
    $stmt -> bind_param("ss", $nilai, $id);
    $stmt -> execute();
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