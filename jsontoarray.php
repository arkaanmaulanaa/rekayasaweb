<?php
// Membuat variabel JSON
$jsonData = '{"nama":"Arkaan Maulana","usia":20,"pekerjaan":"IT Education","hobi":["Billiard","healing","Coding"]}';

// Decode JSON ke Objek
$jsonObject = json_decode($jsonData);

// Mengakses Objek JSON
echo "Mengakses nilai dari PHP Objek:" . "<br>";
echo "Nama: " . $jsonObject->nama . "<br>";
echo "Usia: " . $jsonObject->usia . "<br>";
echo "Pekerjaan: " . $jsonObject->pekerjaan . "<br><br>";

// Mengakses Array Hobi
echo "Mengakses Nilai dari PHP Array:" . "<br>";
echo "Hobi:" . "<br>";
echo "<ul>";
foreach ($jsonObject->hobi as $key => $hobi) {
    echo "<li>". $hobi ."</li>";
};
echo "</ul>";