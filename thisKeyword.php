<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$alzah = new Person("Dewi", "Musi Rawas");

// tambahkan value nama di object
$alzah->nama = "Dewi";

// panggil function sayHelloNull dengan parameter
$alzah->sayHelloNull("Guys");

// buat object dari kelas person
$fariski = new Person("Margiani", "Sumatera Selatan");

// tambahkan value nama di object
$fariski->nama = "fariski";

// panggil function sayHelloNull dengan parameter null
$fariski->sayHelloNull(null);
