
<h3>Hitung Volume dan Luas Balok</h3>

<form action="Praktikum.php" method="POST">
    Panjang: <input type="text" name="panjang"><br><br>
    Lebar: <input type="text" name="lebar"><br><br>
    Tinggi: <input type="text" name="tinggi"><br><br>
    <input type="submit" name="submit" value="HITUNG">
</form>

<?php
    if(isset($_POST['submit'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $tinggi = $_POST['tinggi'];

        $volume = $panjang * $lebar * $tinggi; //MENGHITUNG VOLUME
        $luas = 2 * (($panjang * $lebar)+($panjang * $tinggi)+($lebar * $tinggi)); //MENGHITUNG LAUS

        echo "Balok yang memiliki panjang: $panjang, lebar: $lebar, tinggi: $tinggi <br>";
        echo "Maka memiliki volume: $volume<br>";
    
        echo "Balok yang memiliki panjang: $panjang, lebar: $lebar, tinggi: $tinggi <br>";
        echo "Maka memiliki luas: $luas";
    }
?>