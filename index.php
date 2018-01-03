<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <container>
    <header></header>
    <menu> 
        <ul>
        <li><a href="">Strona główna</a></li>
        <li><a href="">Menu</a></li>
        <li><a href="">Kontakt</a> </div></li>
        </ul>
    </menu>
    <content>
        <form action="odbierz_dane.php" method="post">
            <label>imie:<input type="text" name="imie" value=""></label><br />
            <label>wiek:<input type="number" name="wiek" value=""></label><br />
            <label><textarea name="opis" rows="5" cols="45"></textarea></label><br />
            <label>
                <select name="kolory">
                    <option>czerwony</option>
                    <option>zielony</option>
                    <option>niebieski</option>
                </select><br />
            </label>
            <label><input type="radio" name="klasa" value="pierwsza">KL 1</label>
            <label><input type="radio" name="klasa" value="druga">KL 2</label>
            <label><input type="radio" name="klasa" value="trzecia">KL 3</label><br />
            <label>Wybierz drużynę:<select name="team[]" multiple>
                <option>Legia</option>
                <option>Radomiak</option>
                <option>Olimpia</option>
                <option>Zagłębie</option>
                <option>Den Haag</option>
                </select><br />
                </label> Ulubione owoce:
                <label><input type="checkbox" name="owoce[]" value="jabłko">jabłko</label>
                <label><input type="checkbox" name="owoce[]" value="banan">banan</label>
                <label><input type="checkbox" name="owoce[]" value="winogrono">winogrono</label>
                <label><input type="checkbox" name="owoce[]" value="arbuz">arbuz</label>
                <label><input type="checkbox" name="owoce[]" value="mandarynka">mandarynka</label><br />
            <input type="hidden" name="czy_cos" value="tak">
            <input type="submit" value="Wyślij">
    </form> 

    </content>
    <footer></footer>
</container>
</body>
</html>