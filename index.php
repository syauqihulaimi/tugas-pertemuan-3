<!DOCTYPE html>
<html>
    <head>
        <title>Data Kendaraan</title>
        <link rel="stylesheet" href="style.css"
    </head>
    <body>
        <?php
        include 'Kendaraan.php'
        Kendaraan1 = new KendaraanKU("kendaraanmotor", "kecil", 70000, 10000);
        Kendaraan2 = new KendaraanKU("kendaraanmobil", "besar", 40000 , 10000);

        echo "<h2>Data harga Kendaraan</h2>";
        echo "<table>";
        echo "<tr><th>Jenis</th><th>Bentuk</th><th>Harga</th></tr>";
        echo "<tr><td>".Kendaraan1->getJenis()."</td><td>".Kendaraan1->getBentuk()."</td><td>".Kendaraan1->getHarga()."</td></tr>";
        echo "<tr><td>".Kendaraan2->getJenis()."</td><td>".Kendaraan2->getBentuk()."</td><td>".Kendaraan2->getHarga()."</td></tr>";
        echo "</table>";

        if ($Kendaraan2 instanceof Kendaraan) {
            echo "<h2>Data Kendaraan</h2>";
            echo "<table>";
            echo "<tr><th>Jenis</th><th>Bentuk</th><th>Harga</th><th>Promo</th></tr>";
            echo "<tr><td>".Kendaraan2->getJenis()."</td><td>".Kendaraan2->getBentuk()."</td><td>".Kendaraan2->getHarga()."</td><td>"Kendaraan2->getPromo()."</td></tr>";
            echo "</table>";
        }
    ?>
       
    </body>
</html>