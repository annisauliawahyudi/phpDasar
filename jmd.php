<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nilai terbesar</title>
</head>
<body>
    <form action="" method="post">
        <label>Menentukan waktu (jam menit detik):</label><br><br>
        detik <br><input type="number" name="d"><br>
        <br><input type="submit" value="submit" name="submit" >
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $d = $_POST["d"];


        $j = $d / 3600;
        $sh = $d - $j * 3600;
        $m = $sh / 60;
        $d = $sh - $m * 60;

        echo "$j jam";
        echo "$m menit";
        echo "$d detik";
    }