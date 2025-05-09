    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styl2.css">
        <title>Klub wędkowania</title>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "wedkowanie1";

            $connection = mysqli_connect(hostname: $servername, username: $username, password: $password = "",database: $dbname);
        ?>
    <div class="header">
        <h1>Wędkuj z nami!</h1>

    </div>
    <div class="lewyprawy">
        <div class="lewy">
                <img src=" ryba2.jpg" alt="Szczupak">

        </div>
        <div class="prawy">
            <h3>Ryby spokojnego żeru (białe)</h3>
            <br>
                <h4>
                    <?php
                        $result = mysqli_query(mysql: $connection, query:"SELECT id, nazwa,wystepowanie FROM `ryby` WHERE styl_zycia = 2;");
                        while ($item = mysqli_fetch_array(result: $result)){
                            echo "<h4>", $item[0], ".",$item[1], " występuje w: ", $item[2], "</h4>";
                        }
                    ?>
                </h4>
                    <br>
                    <ol style="margin:0 0 0 50px ;">
                        <li><a href="https://wedkuje.pl/">Odwiedź także</a></li>
                        <li><a href="http://www.pzw.org.pl/">Polski Związek Wędkarski</a></li>
                    </ol>
        </div>
    </div>
    <div class="footer">
        <p>Stronę wykonał: 000000000000</p>
    </div>
</body>
</html>
<?php
    $connection->close();
?>