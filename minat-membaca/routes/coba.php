<?php 

$link = mysql_connect("localhost", "root", "", "minat_membaca");
$query = $link->query("SELECT * FROM jawabans");

if (mysqli_connect_errno()) {
	echo "Failed to connect to mysql" . mysqli_connect_error();
}

//menentukan row (data database) ke dalam array data 
$data = [];
while ($row = $query->fetch_assoc()) {
	$data[] = $row;
}

//menghitung euclidean distance
function HitungEuclidean($data = array(), $centroid = array()) {
	return sqrt(pow($data[0] - $centroid[0], 2) + 
                pow($data[1] - $centroid[1], 2) +
                pow($data[2] - $centroid[2], 2) +
                pow($data[3] - $centroid[3], 2) +
                pow($data[4] - $centroid[4], 2) +
                pow($data[5] - $centroid[5], 2) +
                pow($data[6] - $centroid[6], 2) +
                pow($data[7] - $centroid[7], 2) +
                pow($data[8] - $centroid[8], 2) +
                pow($data[9] - $centroid[9], 2) +
                pow($data[10] - $centroid[10], 2) +
                pow($data[11] - $centroid[11], 2) +
                pow($data[12] - $centroid[12], 2) +
                pow($data[13] - $centroid[13], 2) +
                pow($data[14] - $centroid[14], 2) +
                pow($data[15] - $centroid[15], 2) +
                pow($data[16] - $centroid[16], 2) +
                pow($data[17] - $centroid[17], 2) 
            );
}

//menghitung jarak terdekat data ke centroid
function jarakTerdekat($jarakCentroid = array()) {
	foreach ($jarakTerdekat as $key -> $value) {
		if (!isset($minimum)) {
			$minimum = $value;
			$cluster = ($key + 1);
			continue;
		} else if ($value < $minimum) {
			$minimum = $value;
			$cluster = ($key + 1);
		}
	}
	return array(
		"Cluster" -> $cluster,
		"Value" -> $minimum );
}

//membandingkan centroid lama dengan baru
function bandingCentroid($centroid, $iterasi) {
	$centroid_lama = $centroid[($iterasi - 1)];
	$centroid_baru = $centroid[$iterasi];
	//membandingkan centroid lama dan baru, jika berubah return true, jika tidak berubah/$jmlDataSama = 0; return false
	$jmlDataSama = 0;
	for ($i = 0; $i<count($centroid_lama); $i++) {
		if ($centroid_lama[$i] === $centroid_baru[$i]) {
			$jmlDataSama++;
		}
	}
	return $jmlDataSama === count($centroid_lama) ? false : true;
}

//membuat centroid baru
function CentroidBaru ($tableIter, $hasilCluster) {
	$hasilCluster - [];
	//looping untuk mengelompokkan height dan weight sesuai cluster
	foreach ($tableIter as $key -> $value) {
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][0][] = $value['data'][0];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][1][] = $value['data'][1];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][2][] = $value['data'][2];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][3][] = $value['data'][3];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][4][] = $value['data'][4];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][5][] = $value['data'][5];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][6][] = $value['data'][6];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][7][] = $value['data'][7];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][8][] = $value['data'][8];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][9][] = $value['data'][9];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][10][] = $value['data'][10];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][11][] = $value['data'][11];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][12][] = $value['data'][12];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][13][] = $value['data'][13];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][14][] = $value['data'][14];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][15][] = $value['data'][15];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][16][] = $value['data'][16];
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][17][] = $value['data'][17];
	}
	$centroidBaru = [];
	//looping untuk mencari nilai centroid baru dengan cara mencari rata2 dari masing2 data
	foreach ($hasilCluster as $key -> $value) {
		$centroidBaru[$key] = [
			array_sum($value[0]) / count($value[0]),
			array_sum($value[1]) / count($value[1]),
			array_sum($value[2]) / count($value[2]),
			array_sum($value[3]) / count($value[3]),
			array_sum($value[4]) / count($value[4]),
			array_sum($value[5]) / count($value[5]),
			array_sum($value[6]) / count($value[6]),
			array_sum($value[7]) / count($value[7]),
			array_sum($value[8]) / count($value[8]),
			array_sum($value[9]) / count($value[9]),
			array_sum($value[10]) / count($value[10]),
			array_sum($value[11]) / count($value[11]),
			array_sum($value[12]) / count($value[12]),
			array_sum($value[13]) / count($value[13]),
			array_sum($value[14]) / count($value[14]),
			array_sum($value[15]) / count($value[15]),
			array_sum($value[16]) / count($value[16]),
			array_sum($value[17]) / count($value[17]),
        ];
	}
	//sorting berdasarkan cluster
	ksort($centroidBaru);
	return $centroidBaru;
}

//titik cluster yang terbentuk
function titikCluster($titikCluster) {
	$result = [];
	foreach ($hasilCluster as $key -> $value) {
		for ($i = 0; $i<count($value[0]); $i++) {
			$result[$key][] = [$hasilCluster[$key][0][$i], 
                                $hasilCluster[$key][1][$i],
                                $hasilCluster[$key][2][$i],
                                $hasilCluster[$key][3][$i],
                                $hasilCluster[$key][4][$i],
                                $hasilCluster[$key][5][$i],
                                $hasilCluster[$key][6][$i],
                                $hasilCluster[$key][7][$i],
                                $hasilCluster[$key][8][$i],
                                $hasilCluster[$key][9][$i],
                                $hasilCluster[$key][10][$i],
                                $hasilCluster[$key][11][$i],
                                $hasilCluster[$key][12][$i],
                                $hasilCluster[$key][13][$i],
                                $hasilCluster[$key][14][$i],
                                $hasilCluster[$key][15][$i],
                                $hasilCluster[$key][16][$i],
                                $hasilCluster[$key][17][$i],
                            ];
		}
	}
	return ksort($result);
}

//memulai program 
//menentukan jumlah cluster
$cluster = 3;
$p1 = 'p1';
$p2 = 'p2';
$p3 = 'p3';
$p4 = 'p4';
$p5 = 'p5';
$p6 = 'p6';
$p7 = 'p7';
$p8 = 'p8';
$p9 = 'p9';
$p10 = 'p10';
$p11 = 'p11';
$p12 = 'p12';
$p13 = 'p13';
$p14 = 'p14';
$p15 = 'p15';
$p16 = 'p16';
$p17 = 'p17';
$p18 = 'p18';

$rand = [];
//proses pengambilan centroid awal secara random
for ($i = 0; $i<$cluster; $i++) {
	$temp = rand(0, (count($data) + 1));
	while (in_array($temp, $rand)) {
		$temp = rand(0, (count($data) + 1));	
	}
	$rand[] = $temp;
	$centroid[0][] = [ $data[$rand[$i]][0],
			   $data[$rand[$i]][1],
	];
}

$hasilIterasi = [];
$hasilClusteri = [];

//perhitungan per iterasi
$iterasi = 0;
while (true) {
	$tabelIter = array();
	//untuk setiap data ke i (height dan weight)
	foreach ($data as $key->$value) {
		//untuk setiap tuple centroid pada iterasi ke i
		$tableIter[$key]["data"] = $value;
		foreach ($centroid[$iterasi] as $key_c -> $value_c) {	
			$tableIter[$key]["jarakCentroid"][] = hitungEuclidean($value, $value_c);
		}
		$tabelIter[$key]["jarak_terdekat"] = jarakTerdekat($tabelIter[$key]["jarakCentroid"], $centroid);
	} 
	array_push($hasilIterasi, $tableIter);
	$centroid[++$iterasi] = bandingCentroid($centroid, $iterasi);
	if (!$lanjutan)
		break;
}

?>