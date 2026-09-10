<?php
$barang1="Buku";
$barang2="Mouse";
$barang3="FlashDisk";
$barang4="Pulpen";

$harga1=17500;
$harga2=30000;
$harga3=70000;
$harga4=22300;

$jumlah1=2;
$jumlah2=5;
$jumlah3=1;
$jumlah4=3;

$totalharga1=$jumlah1*$harga1;
$totalharga2=$jumlah2*$harga2;
$totalharga3=$jumlah3*$harga3;
$totalharga4=$jumlah4*$harga4;

$totalpembelian=$totalharga1+$totalharga2+$totalharga3+$totalharga4;

$diskon=5;

$hasildiskon=($diskon*$totalpembelian)/100;

$biayaakhir=$totalpembelian-$hasildiskon;
?>

<html>
    <head>
        <title>Daftar Peralatan yang Dibeli</title>
    </head>
    <style type="text/css">
        body{
            font-size:14pt;
        }
        table{
            font-size:25pt;
        }
    </style>
    <body>
        <center>
        <font face="comic sans serif" size=5 color=blue>Contoh Perhitungan dengan PHP</font>
        <table border="1" cellspacing="0" cellpadding="3">
            <tr>
                <td colspan="4" align="center" valign="middle">
                    <b>Daftar Pemesanan Peralatan Kantor</b>
                </td>
            </tr>
            <tr>
                <td><b>Nama Peralatan</b></td>
                <td><b>Jumlah</b></td>
                <td><b>Harga Satuan</b></td>
                <td><b>Jumlah Barang</b></td>
            </tr>

            <?php
            ?>

            <tr>
                <td align="left"><?php echo $barang1;?></td>
                <td align="right"><?php echo $jumlah1;?></td>
                <td align="right"><?php echo $harga1;?></td>
                <td align="right"><?php echo $totalharga1;?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $barang2;?></td>
                <td align="right"><?php echo $jumlah2;?></td>
                <td align="right"><?php echo $harga2;?></td>
                <td align="right"><?php echo $totalharga2;?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $barang3;?></td>
                <td align="right"><?php echo $jumlah3;?></td>
                <td align="right"><?php echo $harga3;?></td>
                <td align="right"><?php echo $totalharga3;?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $barang4;?></td>
                <td align="right"><?php echo $jumlah4;?></td>
                <td align="right"><?php echo $harga4;?></td>
                <td align="right"><?php echo $totalharga4;?></td>
            </tr>
            <tr>
                <td>
        </table>
    </body>
</html>

