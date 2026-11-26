<html>
    <head>
        <title>Contoh Penggunaan UDF</title>
    </head>
    <body>
        <! Menentukan Form Input>
        <form method="post">
            Masukkan Bilangan Pertama  :  <br>
            <input type="text" name="A" size=10 value="<?php echo isset($_POST['A']) ? htmlspecialchars($_POST['A']) : ''; ?>"> <br>
            Masukkan Bilangan Kedua :  <br>
            <input type="text" name="B" size=10 value="<?php echo isset($_POST['B']) ? htmlspecialchars($_POST['B']) : ''; ?>"> <br>
            <input type="submit" value="hitung">
        </form>
        <!membandingkan 2 buah bilangan yang diinput>
        
        <?php
        $a = isset($_POST["A"]) && $_POST["A"] !== "" ? (float)$_POST["A"] : 0;
        $b = isset($_POST["B"]) && $_POST["B"] !== "" ? (float)$_POST["B"] : 0;
        
        function jumlah($A, $B){
            $jumlahbil = $A + $B;
            return $jumlahbil;
        }

        function kurang($A, $B){
            $kurangbil = $A - $B;
            return $kurangbil;
        }
        
        function kali($A, $B){
            $kalibil = $A * $B;
            return $kalibil;
        }
        
        function bagi($A, $B){
            if ($B == 0) {
                return "Tidak dapat dibagi dengan 0";
            }
            return $A / $B;
        }
            
        echo "<br>";
        echo "Bilangan Pertama : ";
        echo $a;
        echo "<br>";
        echo "Bilangan Kedua : ";
        echo $b;
        echo "<br> <br>";

        echo "Hasil Penjumlahan 2 buah bilangan ";
        echo "<br>";
        $jumlahbil = jumlah($a, $b);
        printf("Penjumlahan antara :  %d  +  %d  =  %d", $a, $b, $jumlahbil);
        echo "<br><br>";

        echo "Hasil Pengurangan 2 buah bilangan ";
        echo "<br>";
        $kurangbil = kurang($a, $b);
        printf("Pengurangan antara :  %d  -  %d  =  %d ", $a, $b, $kurangbil);
        echo "<br><br>";

        echo "Hasil Perkalian 2 buah bilangan ";
        echo "<br>";
        $kalibil = kali($a, $b);
        printf("Perkalian antara :  %d  *  %d  =  %d ", $a, $b, $kalibil);
        echo "<br><br>";

        echo "Hasil Pembagian 2 buah bilangan ";
        echo "<br>";            
        $bagibil = bagi($a, $b);
        printf("Pembagian antara :  %d  / %d  =  %d ", $a, $b, $bagibil);
        echo "<br><br>";
        ?>

    </body>
</html>


