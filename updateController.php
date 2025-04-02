<?php
include "functionsDB.php";
updateClass($_POST['class_id'], $_POST['class_number'], $_POST['class_leter']);
header("Location: website.php");
?>