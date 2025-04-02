<?php
include "functionsDB.php";
$info=getInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Домашнее задание</title>
    </head>
    <body>
        <div>
            <table>
                <thead><th>Код</th><th>Номер класса</th><th>Буква класса</th><th>Редактировать</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["class_id"];
                    $number=$info[$i]["class_number"];
                    $leter=$info[$i]["class_leter"];
                    echo "<tr><td>$id</td><td>$number</td><td>$leter</td><td><a href='updateForm.php?id=", $id, "'>...</a></td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>