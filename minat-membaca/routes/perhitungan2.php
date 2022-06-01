<?php 

$link = mysql_connect("localhost", "root", "kelompok 6");
$query = $link->query("SELECT * FROM socr");

if (mysqli_connect_errno()) {
	echo "Failed to connect to mysql" . mysqli_connect_error();
}

//mennetukan row (data database) ke dalam array data 
$data = [];
while ($row = $query->fetch_assoc()) {
	$data[] = $row;
}

//menghitung euclidean distance
function HitungEuclidean($data = array(), $centroid = array()) {
	return sqrt(pow($data[0] - $centroid[0], 2) + pow($data[1] - $centroid[1], 2));
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
	//membandingkan centroid lama dan baru, jika berubah return tru, jika tidak berubah return false
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
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][0][] = $value['data'][0]; //data height
		$hasilCluster[($value['jarak_terdekat']['Cluster'] - 1)][1][] = $value['data'][1]; //data weight
	}
	$centroidBaru = [];
	//looping untuk mencari nilai centroid baru dengan cara mencari rata2 dari masing2 data
	foreach ($hasilCluster as $key -> $value) {
		$centroidBaru[$key] = [
			array_sum($value[0]) / count($value[0]),
			array_sum($value[1]) / count($value[1]),
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
			$result[$key][] = [$hasilCluster[$key][0][$i], $hasilCluster[$key][1][$i]];
		}
	}
	return ksort($result);
}

//memulai program 
// get data dari database
$link = mysqli_connect("localhost", "root", "", "kelompok6");
//cek koneksi
if (mysqli_conect_errno()) {
	echo "Failed to connect to mysql: " . mysql_connect_error();	
	exit;
}

$query = $link->query("SELECT * FROM SOCR");
$data = [];
//masukan data height dan weight ke array data 
while ($row = $query->fetch_assoc()) {
	$data[] = [$row["height"], $row["weight"]];
}

//menentukan jumlah cluster
$cluster = 3;
$height = 'height';
$weight = 'weight';

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

//perhitung per iterasi
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