<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
// Function greetings
tofunction greetings($name) {
    echo "Halo $name, Selamat Datang di Sanbercode!<br>";
}

// greetings("Bagas");
// greetings("Wahyu");
// greetings("nama peserta");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
// Function reverseString
function reverseString($str) {
    $reversed = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    echo "$reversed<br>";
}

// reverseString("nama peserta");
// reverseString("Sanbercode");
// reverseString("We Are Sanbers Developers");

echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";
// Function palindrome
function palindrome($str) {
    $reversed = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    echo ($str === $reversed) ? "true<br>" : "false<br>";
}

// palindrome("civic");
// palindrome("nababan");
// palindrome("jambaban");
// palindrome("racecar");

echo "<h3>Soal No 4 Tentukan Nilai </h3>";
// Function tentukan_nilai
function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik<br>";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik<br>";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup<br>";
    } else {
        return "Kurang<br>";
    }
}

// echo tentukan_nilai(98);
// echo tentukan_nilai(76);
// echo tentukan_nilai(67);
// echo tentukan_nilai(43);

?>

</body>

</html>s