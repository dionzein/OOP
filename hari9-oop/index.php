<?php
// Hari 4 – OOP PHP
// Sebelum mengerjakan challenge ini, buatlah sebuah folder dengan nama “oop” di dalam direktori htdocs kalian.
// Di dalam folder oop tersebut buatlah sebuah file index.php sebagai entry dari program yang akan dibuat.

// Class Animal {
//     public $name;
//     public $legs = 2;
//     public $legs = false;

//     public function _construct($name){
//         $this->$name;
//     }
// }
// Terdapat sebuah class Animal yang memiliki sebuah constructor name, default property legs = 2 dan cold_blooded = false.

// Release 0
// Buatlah class Animal tersebut di dalam file animal.php.Lakukan instance terhadap class Animal tersebut di file index.php.
// Lakukan import class Animal dari animal.php di dalam index.php menggunakan require atau require once
// (mengenai require bisa baca dari artikel berikut).

// Tampilkan nama dari Animal yang baru dibuat tersebut.
require('animal.php');
require('frog.php');
require('ape.php');

$sheep = new Animal("Shaun");
// var_dump($sheep); 
echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
var_dump ($sheep->cold_blooded); // false
echo "<br>";

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
// Release 1
// Buatlah class Frog dan class Ape yang merupakan inheritance dari class Animal.
// Masing-masing class dibuat ke dalam satu file (Frog.php & Ape.php).
// Perhatikan bahwa Frog (katak) merupakan hewan berkaki 4, hingga dia tidak menurunkan sifat jumlah kaki 2.
// class Ape memiliki function yell() yang mengeprint “Auooo” dan class Frog memiliki function jump() yang akan mengeprint “hop hop”.

// index.php
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";
$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"

?>