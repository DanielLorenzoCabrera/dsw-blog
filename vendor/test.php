<?php



// Firebase Token can be found in the Firebase Console:
// Settings -> Project Settings -> Service accounts -> Database secrets

require "./autoload.php"; // Importamos todas las clases guardadas en vendor


const URL = 'https://blog-4f80e-default-rtdb.europe-west1.firebasedatabase.app/'; // nuestra url de la base de datos firebase
const TOKEN = 'KDfxnNMv4JpK0HuzHUI54mrU5lrfrryyfcLaH8mt';
const PATH = '/firebase/example';

use Firebase\FirebaseLib;

$firebase = new FirebaseLib(URL, TOKEN);

// Storing an array

$test = [
    'foo' => 'bar',
    'i_love' => 'lamp',
    'id' => 42
];

$dateTime = new DateTime();
$firebase->set(PATH . '/' . $dateTime->format('c'), $test);

// Storing a string
$firebase->set(PATH . '/name/contact001', 'John Doe');

// Reading the stored string
$name = $firebase->get(PATH . '/name/contact001');








?>