<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["email"])) $email = $_POST["email"];
    else $email = "";

    

    echo "Kontakt do ciebie: ".$email."<br />";

    

    if($_POST["plec"] == "k"){
        echo "kobieta";
    }
    elseif($_POST["plec"] == "m"){
        echo "mężczyzna";
    }
    else "Nie masz płci";
    
    
   
    

    if(isset($_POST["sport"]))
    {
        echo "Twoje ulubione sporty  to:<br />";
        $dlugosc = count($_POST["sport"]);
        for($i=0;$i<$dlugosc;$i++)
        {
            echo $_POST["sport"][$i];
            echo ", ";
        }
    }
    else echo "Nic nie wybrałeś";
    ?>
</body>
</html>