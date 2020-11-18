<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>EzQuiz</title>
</head>
<body>
    <?php
        $data = json_decode(file_get_contents("https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json"));
    ?>
    <div class="container">
        <div class="row m-3">
            <?php
                foreach($data->tracks->items as $songs){
                    echo "<div class='col-4 p-2'>
                            <div class='card'>
                                <img src='";
                                echo $songs->album->images[0]->url;
                                echo "'>
                                <p class='p-3 s-20'><b>";
                                    echo $songs->album->name;
                                    echo "</b><br><p>&nbsp; Artist :";
                                    echo $songs->album->artists[0]->name;
                                    echo "</p>";
                                    echo "<br><p>&nbsp; Release Date : ";
                                    echo $songs->album->release_date;
                                    echo "</p>";
                                    echo "<br><p>&nbsp; Available : ";
                                    $count = 0;
                                    foreach($songs->available_markets as $a){
                                        $count++;
                                    }
                                    echo $count;
                                    echo "</p>";
                                echo "</p>";
                    echo " </div>
                         </div>";
                }
            ?>
        </div>
    </div>
</body>
</html>