<?php
// Release 1
// Buatlah class Frog dan class Ape yang merupakan inheritance dari class Animal.
// Masing-masing class dibuat ke dalam satu file (Frog.php & Ape.php).
// Perhatikan bahwa Frog (katak) merupakan hewan berkaki 4, hingga dia tidak menurunkan sifat jumlah kaki 2.
// class Ape memiliki function yell() yang mengeprint “Auooo” dan class Frog memiliki function jump() yang akan mengeprint “hop hop”.


class Ape extends Animal {

    public function yell(){
        echo "Auooo";
    }
}

// index.php
// $sungokong = new Ape("kera sakti");
// $sungokong->yell(); // "Auooo"

// $kodok = new Frog("buduk");
// $kodok->jump() ; // "hop hop"

?>