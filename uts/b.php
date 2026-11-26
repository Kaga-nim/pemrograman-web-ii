<?php
$data = [];

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $gelombang = $_POST['gelombang'];
    $bulan = $_POST['bulan'];

    $mat = (float)$_POST['mat'];
    $inggris = (float)$_POST['inggris'];
    $umum = (float)$_POST['umum'];

    $kodeTempat = [
        'A' => 'Gedung A',
        'B' => 'Gedung B',
        'V' => 'Viktor'
    ];

    $kode = $tempat . $gelombang . "-101-" . $bulan;
    $rata = ($mat + $inggris + $umum) / 3;

    if ($rata >= 70)
        $ket = "Lulus";
    elseif ($rata >= 60)
        $ket = "Cadangan";
    else
        $ket = "Tidak Lulus";
}
?>

<form method="post">
    Nama: <input name="nama" required><br>

    Tempat Tes:
    <select name="tempat">
        <option value="A">Gedung A</option>
        <option value="B">Gedung B</option>
        <option value="V">Viktor</option>
    </select><br>

    Gelombang:
    <select name="gelombang">
        <option value="1">1</option>
        <option value="2">2</option>
    </select><br>

    Bulan Tes (1-12):
    <input type="number" name="bulan" min="1" max="12" required><br>

    Matematika: <input type="number" name="mat" required><br>
    Bahasa Inggris: <input type="number" name="inggris" required><br>
    Umum: <input type="number" name="umum" required><br>

    <button name="daftar">Daftar</button>
</form>

<?php
if (isset($_POST['daftar'])) {
    echo "Kode Pendaftaran: $kode<br>";
    echo "Nama: $nama<br>";
    echo "Tempat Tes: " . $kodeTempat[$tempat] . "<br>";
    echo "Rata-rata: $rata<br>";
    echo "Keterangan: $ket";
}
?>