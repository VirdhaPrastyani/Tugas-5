<!DOCTYPE html>
<html>
    <head>
<title>Deret Fibonacci</title>
</head>
<body>
<h3>Aplikasi Deret Fibonacci</h3>
<form action="" method="post">
Angka Deret 1: <input type="text" name="deret1"> <br><br>
Angka Deret 2: <input type="text" name="deret2"> <br><br>
Jumlah Deret Yang Akan Ditampilkan: <input type="text" name="jumlahderet"> <br><br>
<input type="submit" name="submit" value="Hasil">
</body>
</form>
</html>


<?php
if (isset($_POST['submit'])){
    $angka1 = $_POST['deret1'];
    $angka2 = $_POST['deret2'];
    $n = $_POST['jumlahderet'];  

    echo " <br> ";
    echo " Suku Selanjutnya Deret Fibonacci yaitu  ";
    echo "$angka1 $angka2";
   
    for($i =0; $i < $n; $i++){
        $hasil = $angka1 + $angka2;
        echo " ";
        echo $hasil ;

        $angka1 = $angka2;
        $angka2 = $hasil;
    }
}
?>