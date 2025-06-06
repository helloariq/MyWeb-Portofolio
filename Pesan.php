<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama   = htmlspecialchars($_POST['nama']);
    $email  = htmlspecialchars($_POST['email']);
    $judul  = htmlspecialchars($_POST['judul']);
    $pesan  = htmlspecialchars($_POST['pesan']);

    $kepada = "ariqfauzan75@gmail.com";
    $subjek = "Pesan dari Form WEB Portofolio";
    $isi    = "Judul: $judul\nNama: $nama\nEmail: $email\n\nPesan:\n$pesan";

    $header = "From: $email";

    if (mail($kepada, $subjek, $isi, $header)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Pesan gagal dikirim.";
    }
}
?>