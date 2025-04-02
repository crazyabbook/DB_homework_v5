<?php
include "functionsDB.php";
$classes=getClassByID($_GET['id']);
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="design.css">
        <title>Редактирование</title>
    </head>
    <body>
        <div>
            <form action="updateController.php" method="POST" role='form'>
                <div>
                    <input id="class_id" type="hidden" name="class_id" value="<?php echo $classes['class_id'];?>"/>
                    <div>
                        <label for="class_number">Номер класса</label>
                        <div>
                            <input id="class_number" type="number" name="class_number" value="<?php echo $classes['class_number'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="class_leter">Буква класса</label>
                        <div>
                            <input id="class_leter" type="text" name="class_leter" value="<?php echo $classes['class_leter'];?>"/>
                        </div>
                    </div>
                    <button type="submit" name="add">Обновить</button>
                </div>
            </form>
        </div>
    </body>
</html>