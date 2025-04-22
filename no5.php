<!DOCTYPE html>
<html>
<head>
    <title>List Perkalian 1 sampai 5</title>
</head>
<body>
    <h2>5. List Perkalian 1 sampai 5</h2>

    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<strong>Perkalian $i:</strong><br>";
        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;
            echo "$i x $j = $hasil<br>";
        }
        echo "<br>";
    }
    ?>
</body>
</html>