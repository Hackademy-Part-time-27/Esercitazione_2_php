<?php

//TRACCIA NUMERO 1
$users = [
    ['name' => 'Alberto', 'surname' => 'Cuteri', 'gender' => 'uomo'],
    ['name' => 'Gabriele', 'surname' => 'Maggio', 'gender' => 'uomo'],
    ['name' => 'Antonio', 'surname' => 'Schiazzano', 'gender' => 'nb'],
    ['name' => 'Giulia', 'surname' => 'Carlino', 'gender' => 'donna'],
    ['name' => 'Giovanni', 'surname' => 'Ferraro', 'gender' => 'nb'],
    ['name' => 'Riccardo', 'surname' => 'Cardia', 'gender' => 'uomo'],
    ['name' => 'Marco', 'surname' => 'Motolese', 'gender' => 'nb'],
    ['name' => 'Agostino', 'surname' => 'Di Bartolomeo', 'gender' => 'uomo'],
    ['name' => 'Martina', 'surname' => 'Delfino', 'gender' => 'donna'],
    ['name' => 'Giulia', 'surname' => 'Tennini', 'gender' => 'donna'],
    ['name' => 'Romeo', 'surname' => 'Iordachescu', 'gender' => 'nb'],
    ['name' => 'Mattia', 'surname' => 'Iacona', 'gender' => 'uomo'],
    ['name' => 'Giuseppe', 'surname' => 'Barraco', 'gender' => 'uomo'],
    ['name' => 'Ivan', 'surname' => 'Marmugi', 'gender' => 'uomo'],
];

foreach ($users as $user) {
    if ($user['gender'] == 'uomo') {
        echo 'Salve signor ' . $user['name'] . ' ' . $user['surname'] . "\n";
    } else if ($user['gender'] == 'donna') {
        echo 'Salve signora ' . $user['name'] . ' ' . $user['surname'] . "\n";
    } else {
        echo 'Buongiorno ' . $user['name'] . ' ' . $user['surname'] . "\n";
    }
}

//TRACCIA NUMERO 2
$x = 0;

$y = 0;

$numbers = [11, 22, 33, 44, 55, 66, 77, 88, 99, 100];

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        $x += $numbers[$i];
        $y++;
    }
}


$result = $x / $y;

echo $result . "\n";



//TRACCIA NUMERO 3

for ($index = 1; $index <= 100; $index++) {
    if ($index % 3 == 0 && $index % 5 == 0) {
        echo 'HACKADEMY' . "\n";
    } else if ($index % 5 == 0) {
        echo 'JAVASCRIPT' . "\n";
    } elseif ($index % 3 == 0) {
        echo 'PHP' . "\n";
    } else {
        echo $index . "\n";
    }
}