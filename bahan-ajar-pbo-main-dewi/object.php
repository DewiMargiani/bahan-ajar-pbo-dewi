<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person = new Person("Dewi", "Musi Rawas");

// manipulasi properti nama, alamat, negara
$person->nama = "Dewi";
$person->alamat = "Musi Rawas";
$person->negara = "Indonesia";

// menampilkan hasil
echo "Nama = {$person->nama}" . PHP_EOL;
echo "Alamat = {$person->alamat}" . PHP_EOL;
echo "Negara = {$person->negara}" . PHP_EOL;
