<?php

$received_name = $_POST["nama"];
$received_nilai = $_POST["nilai"];

//fungsi untuk konversi nilai ke huruf
$received_huruf = "";
if ($received_nilai >= 80 and $received_nilai <= 100) {
    $received_huruf = 'A';
} elseif ($received_nilai >= 70 and $received_nilai <= 79) {
    $received_huruf = 'B';
} elseif ($received_nilai >= 60 and $received_nilai <= 69) {
    $received_huruf = 'C';
} elseif ($received_nilai >= 40 and $received_nilai <= 59) {
    $received_huruf = 'D';
} elseif ($received_nilai <= 40) {
    $received_huruf = 'E';
} else {
    echo "Nilai kamu diluar jangkauan!";
}

//menampilkan teks
echo "Hai " . $received_name . ". Kamu mendapatkan nilai " . $received_huruf;

?>

<br>

<button>
    <a href="forminput.php">Kembali ke Home</a>
</button>