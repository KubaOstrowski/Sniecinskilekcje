<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["kolory"]))
    {
        $kolor = $_POST["kolory"];
        echo $kolor;
    }
    if(isset($_POST["imie"]))
    {
        $imie = $_POST["imie"];
        echo $imie;
    }
    if(isset($_POST["klasa"]))
    {
        $klasa = $_POST["klasa"];
        echo $klasa;
    }
    if(isset($_POST["owoce"]))
    {
        echo "Wybrałeś następujące owoce:<br />";
        $ile = count($_POST["owoce"]);
        for($i=0;$i<$ile;$i++)
        {
            echo $_POST["owoce"]["$i"]
        }
    }
    ?>
</body>
</html>