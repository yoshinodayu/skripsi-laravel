<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Responden;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index() {
        return view('hasil', [
            "title" => "Hasil",
            "respondens" => Responden::all(),
            "jawabans" => Jawaban::all(),
        ]);
    }

}

function SearchData($where = '') {
    return $this->db->query("select * from $where;");
}

//Inisialisasi Cluster Awal
$JumlahResponden = SearchData("select count(*) from jawabans");
for ($i=0; $i < $JumlahResponden; $i++) { 
    $ClusterAwal[$i] = "1";
}

//Set Nilai Centroid
$Centroid1[0] = array('4','3','4','4','5','2','4','5','2','4','5','4','4','5','2','1','4','3');
$Centroid2[0] = array('2','4','4','3','2','4','3','3','4','4','4','4','1','4','4','4','2','4');
$Centroid3[0] = array('3','5','5','2','3','2','4','3','2','2','2','1','2','1','4','2','1','3');


$status = 'false';
$loop = '0';
$x = 0;

while ($status == 'false') {
    //K-Means
    $query = "select * from jawabans";
    $result = query($query);

    while ($data = $result) {
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
            update($jawaban->responden->id , 'C1');
        } else if ($ResultC2 < $ResultC1 && $ResultC2 < $ResultC3) {
            $ClusterAkhir[$x] = 'C2';
            update($id , 'C2');
        } else {
            $ClusterAkhir[$x] = 'C3';
            update($id , 'C3');
        }

        //Penambahan Counter Index
        $x+=1;
    }
    $loop+=1;

    //Proses Mencari Pusat Centroid Baru 1
    $Centroid1[$loop][0] = SearchData("select avg(p1) from jawabans where kelas='C1' ");
    $Centroid1[$loop][1] = SearchData("select avg(p2) from jawabans where kelas='C1' ");
    $Centroid1[$loop][2] = SearchData("select avg(p3) from jawabans where kelas='C1' ");
    $Centroid1[$loop][3] = SearchData("select avg(p4) from jawabans where kelas='C1' ");
    $Centroid1[$loop][4] = SearchData("select avg(p5) from jawabans where kelas='C1' ");
    $Centroid1[$loop][5] = SearchData("select avg(p6) from jawabans where kelas='C1' ");
    $Centroid1[$loop][6] = SearchData("select avg(p7) from jawabans where kelas='C1' ");
    $Centroid1[$loop][7] = SearchData("select avg(p8) from jawabans where kelas='C1' ");
    $Centroid1[$loop][8] = SearchData("select avg(p9) from jawabans where kelas='C1' ");
    $Centroid1[$loop][9] = SearchData("select avg(p10) from jawabans where kelas='C1' ");
    $Centroid1[$loop][10] = SearchData("select avg(p11) from jawabans where kelas='C1' ");
    $Centroid1[$loop][11] = SearchData("select avg(p12) from jawabans where kelas='C1' ");
    $Centroid1[$loop][12] = SearchData("select avg(p13) from jawabans where kelas='C1' ");
    $Centroid1[$loop][13] = SearchData("select avg(p14) from jawabans where kelas='C1' ");
    $Centroid1[$loop][14] = SearchData("select avg(p15) from jawabans where kelas='C1' ");
    $Centroid1[$loop][15] = SearchData("select avg(p16) from jawabans where kelas='C1' ");
    $Centroid1[$loop][16] = SearchData("select avg(p17) from jawabans where kelas='C1' ");
    $Centroid1[$loop][17] = SearchData("select avg(p18) from jawabans where kelas='C1' ");

    //Proses Mencari Pusat Centroid Baru 2
    $Centroid2[$loop][0] = SearchData("select avg(p1) from jawabans where kelas='C2' ");
    $Centroid2[$loop][1] = SearchData("select avg(p2) from jawabans where kelas='C2' ");
    $Centroid2[$loop][2] = SearchData("select avg(p3) from jawabans where kelas='C2' ");
    $Centroid2[$loop][3] = SearchData("select avg(p4) from jawabans where kelas='C2' ");
    $Centroid2[$loop][4] = SearchData("select avg(p5) from jawabans where kelas='C2' ");
    $Centroid2[$loop][5] = SearchData("select avg(p6) from jawabans where kelas='C2' ");
    $Centroid2[$loop][6] = SearchData("select avg(p7) from jawabans where kelas='C2' ");
    $Centroid2[$loop][7] = SearchData("select avg(p8) from jawabans where kelas='C2' ");
    $Centroid2[$loop][8] = SearchData("select avg(p9) from jawabans where kelas='C2' ");
    $Centroid2[$loop][9] = SearchData("select avg(p10) from jawabans where kelas='C2' ");
    $Centroid2[$loop][10] = SearchData("select avg(p11) from jawabans where kelas='C2' ");
    $Centroid2[$loop][11] = SearchData("select avg(p12) from jawabans where kelas='C2' ");
    $Centroid2[$loop][12] = SearchData("select avg(p13) from jawabans where kelas='C2' ");
    $Centroid2[$loop][13] = SearchData("select avg(p14) from jawabans where kelas='C2' ");
    $Centroid2[$loop][14] = SearchData("select avg(p15) from jawabans where kelas='C2' ");
    $Centroid2[$loop][15] = SearchData("select avg(p16) from jawabans where kelas='C2' ");
    $Centroid2[$loop][16] = SearchData("select avg(p17) from jawabans where kelas='C2' ");
    $Centroid2[$loop][17] = SearchData("select avg(p18) from jawabans where kelas='C2' ");

    //Proses Mencari Pusat Centroid Baru 3
    $Centroid3[$loop][0] = SearchData("select avg(p1) from jawabans where kelas='C3' ");
    $Centroid3[$loop][1] = SearchData("select avg(p2) from jawabans where kelas='C3' ");
    $Centroid3[$loop][2] = SearchData("select avg(p3) from jawabans where kelas='C3' ");
    $Centroid3[$loop][3] = SearchData("select avg(p4) from jawabans where kelas='C3' ");
    $Centroid3[$loop][4] = SearchData("select avg(p5) from jawabans where kelas='C3' ");
    $Centroid3[$loop][5] = SearchData("select avg(p6) from jawabans where kelas='C3' ");
    $Centroid3[$loop][6] = SearchData("select avg(p7) from jawabans where kelas='C3' ");
    $Centroid3[$loop][7] = SearchData("select avg(p8) from jawabans where kelas='C3' ");
    $Centroid3[$loop][8] = SearchData("select avg(p9) from jawabans where kelas='C3' ");
    $Centroid3[$loop][9] = SearchData("select avg(p10) from jawabans where kelas='C3' ");
    $Centroid3[$loop][10] = SearchData("select avg(p11) from jawabans where kelas='C3' ");
    $Centroid3[$loop][11] = SearchData("select avg(p12) from jawabans where kelas='C3' ");
    $Centroid3[$loop][12] = SearchData("select avg(p13) from jawabans where kelas='C3' ");
    $Centroid3[$loop][13] = SearchData("select avg(p14) from jawabans where kelas='C3' ");
    $Centroid3[$loop][14] = SearchData("select avg(p15) from jawabans where kelas='C3' ");
    $Centroid3[$loop][15] = SearchData("select avg(p16) from jawabans where kelas='C3' ");
    $Centroid3[$loop][16] = SearchData("select avg(p17) from jawabans where kelas='C3' ");
    $Centroid3[$loop][17] = SearchData("select avg(p18) from jawabans where kelas='C3' ");

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

function update($id, $nilai) {
    $statement = prepare("update jawabans set kelas=? where id=?");
    $statement -> bind_param("ss", real_escape_string($nilai), real_escape_string($id));
    $statement -> execute();
}