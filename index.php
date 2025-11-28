<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        Text: <input type="text" name="text1"><br>
        <?php
            if (isset($_POST["hiddenet"])) {
                if (isset($_POST["text1"])) {
                $textfinal = $_POST["hiddenet"].$_POST["text1"];
                } else {
                    $textfinal = $_POST["hiddenet"];
                }
            } else {
                if (isset($_POST["text1"])) {
                $textfinal = $_POST["text1"];
                } else {
                    $textfinal = "";
                }
            }
        ?>
        <input type="text" name="hiddenet" value="<?php echo $textfinal;?>">
        <input type="submit">
    </form>
</body>
</html>