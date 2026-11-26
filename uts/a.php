
<?php
session_start();

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
}

if (isset($_POST['daftar'])) {
    $nama = trim($_POST['nama']);
    $tempatLahir = trim($_POST['tempat_lahir']);
    $jk = $_POST['jk'];
    $tglLahir = $_POST['tgl_lahir'];
    $ortu = trim($_POST['ortu']);
    $tempatTes = $_POST['tempat_tes'];
    $gelombang = $_POST['gelombang'];
    $bulan = $_POST['bulan'];
    $mat = (float) $_POST['mat'];
    $inggris = (float) $_POST['inggris'];
    $umum = (float) $_POST['umum'];

    // Kode tempat tes: A, B, atau V
    $kodeTempat = [
        'Gedung A' => 'A',
        'Gedung B' => 'B',
        'Viktor'   => 'V'
    ];

    $nomor = 101 + count($_SESSION['data']);
    $kode = $kodeTempat[$tempatTes] . $gelombang
          . '-' . $nomor . '-' . $bulan;

    // Menghitung rata-rata nilai
    $rata = ($mat + $inggris + $umum) / 3;

    // Menentukan kelulusan
    if ($rata >= 70) {
        $ket = "Lulus";
    } elseif ($rata >= 60) {
        $ket = "Cadangan";
    } else {
        $ket = "Tidak Lulus";
    }

    $_SESSION['data'][] = [
        'kode' => $kode,
        'nama' => $nama,
        'tempat_lahir' => $tempatLahir,
        'jk' => $jk,
        'tgl_lahir' => $tglLahir,
        'ortu' => $ortu,
        'tempat_tes' => $tempatTes,
        'bulan' => $bulan,
        'mat' => $mat,
        'inggris' => $inggris,
        'umum' => $umum,
        'rata' => $rata,
        'ket' => $ket
    ];
}

function h($nilai) {
    return htmlspecialchars((string)$nilai, ENT_QUOTES, 'UTF-8');
}

$jumlah = count($_SESSION['data']);
$lulus = 0;
$tidakLulus = 0;

foreach ($_SESSION['data'] as $d) {
    if ($d['ket'] == 'Lulus') {
        $lulus++;
    } elseif ($d['ket'] == 'Tidak Lulus') {
        $tidakLulus++;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Mahasiswa Baru</title>
</head>
<body>

<h2>FORM PENDAFTARAN MAHASISWA BARU</h2>

<form method="post">
    Nama Pendaftar:<br>
    <input type="text" name="nama" required><br>

    Tempat Lahir:<br>
    <input type="text" name="tempat_lahir" required><br>

    Jenis Kelamin:<br>
    <select name="jk" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>

    Tanggal Lahir:<br>
    <input type="date" name="tgl_lahir" required><br>

    Pekerjaan Orang Tua:<br>
    <input type="text" name="ortu" required><br>

    Tempat Tes:<br>
    <select name="tempat_tes">
        <option value="Gedung A">Gedung A</option>
        <option value="Gedung B">Gedung B</option>
        <option value="Viktor">Viktor</option>
    </select><br>

    Gelombang:<br>
    <select name="gelombang">
        <option value="1">Gelombang 1</option>
        <option value="2">Gelombang 2</option>
    </select><br>

    Bulan Tes:<br>
    <select name="bulan">
        <?php
        $bulanList = [
            1 => 'Januari', 2 => 'Februari',
            3 => 'Maret', 4 => 'April',
            5 => 'Mei', 6 => 'Juni',
            7 => 'Juli', 8 => 'Agustus',
            9 => 'September', 10 => 'Oktober',
            11 => 'November', 12 => 'Desember'
        ];

        foreach ($bulanList as $no => $namaBulan) {
            echo "<option value='$no'>$namaBulan</option>";
        }
        ?>
    </select><br>

    Nilai Matematika:<br>
    <input type="number" name="mat" min="0" max="100"
           step="any" required><br>

    Nilai Bahasa Inggris:<br>
    <input type="number" name="inggris" min="0" max="100"
           step="any" required><br>

    Nilai Umum:<br>
    <input type="number" name="umum" min="0" max="100"
           step="any" required><br><br>

    <button type="submit" name="daftar">
        Daftar
    </button>
</form>

<hr>

<h2>TABEL DATA PENDAFTAR</h2>

<table border="1" cellpadding="5" cellspacing="0">
<tr>
    <th>Kode</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>JK</th>
    <th>Tgl Lahir</th>
    <th>Pek. Ortu</th>
    <th>Tempat Tes</th>
    <th>Bulan Tes</th>
    <th>Mat</th>
    <th>Inggris</th>
    <th>Umum</th>
    <th>Rata-rata</th>
    <th>Keterangan</th>
</tr>

<?php foreach ($_SESSION['data'] as $d): ?>
<tr>
    <td><?= h($d['kode']) ?></td>
    <td><?= h($d['nama']) ?></td>
    <td><?= h($d['tempat_lahir']) ?></td>
    <td><?= h($d['jk']) ?></td>
    <td><?= h($d['tgl_lahir']) ?></td>
    <td><?= h($d['ortu']) ?></td>
    <td><?= h($d['tempat_tes']) ?></td>
    <td><?= h($bulanList[$d['bulan']]) ?></td>
    <td><?= h($d['mat']) ?></td>
    <td><?= h($d['inggris']) ?></td>
    <td><?= h($d['umum']) ?></td>
    <td><?= number_format($d['rata'], 2) ?></td>
    <td><?= h($d['ket']) ?></td>
</tr>
<?php endforeach; ?>
</table>

<h3>REKAPITULASI</h3>
Jumlah Pendaftar: <?= $jumlah ?><br>
Jumlah Peserta Lulus: <?= $lulus ?><br>
Jumlah Peserta Tidak Lulus: <?= $tidakLulus ?><br>

</body>
</html>
