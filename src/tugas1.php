<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tugas 1</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="apalah.css">
</head>
<body>
    <?php
        $dataproduk = array(
            array("Galaxy S21", "Samsul", 19000000, true),
            array("Galaxy A71", "Samsul", 6999000, false),
            array("uPhone 20 mini", "Pear", 20000000, true),
            array("uPhome 14 Pro Max", "Pear", 200000000, false),
        );
        
    ?>
    <section class="flex justify-center items-center font-medium text-xl">
        <h1>Toko Ikan Mas</h1>
    </section>
    <section class="flex flex-row ">
        <?php foreach ($dataproduk as $key => $value) {
            echo "<div class='card m-2 border border-yellow-400 w-32'>";
            echo "<div class='font-bold'> ";
            echo "<h1 class='text-center justify-center items-center text-l'>.$value[0].</h1>";
            echo "<p class='text-left text-sm'>$value[1]</p>";
            echo "<p class='text-left text-sm'>$value[2]</p>";
            if($value[3]===true) {
                echo "<Button href='#' class='bg-slate-400 rounded-xl w-24 h-6 items-end '>Order</Button>";
            } else {
                echo "";
            }
            echo "</div>";
            echo "</div>";
        }?>
    </section>
</body>
</html>