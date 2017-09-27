<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="form.css" />
</head>
<body>
 <form action="odbierz.php" method="post">
    <fieldset>
    <legend>Dane personalne:</legend>
    <label for="login">login:</label>
    <input type="text" name="login" value="" placeholder="twój login" autofocus="" /><br />
    <label>haslo:&nbsp;<input type="password" name="haslo" value="" placeholder="haslo" /></label><br />
    email:&nbsp;<input type="email" name="email" value="" placeholder="email" require="requiere" /><br />
    data_urodzenia:&nbsp;<input type="date" name="data_ur" value="" placeholder="data ur." /><br />
    url:&nbsp;<input type="url" name="url" value="" placeholder="url" /><br />
    foto:&nbsp;<input type="file" name="foto" value="" /><br />
    <input type="hidden" name="topsecret" value="xyz" />
    </fieldset>
    opis: <textarea name="opis" rows="5" cols="50"></textarea><br />
    kolor:<select name="kolory" >
    <option>czerwony</option>
    <option>niebieski</option>
    <option>zielony</option>
    <option>czarny</option>
    <option>biały</option>
    </select>

    Owoce:<select name="owoce[]" multiple>
    <option>banan</option>
    <option>jabłko</option>
    <option>arbuz</option>
    <option>gruszka</option>
    <option>winogrono</option>
    </select>
    <br />
    Która klasa?<br />
    <input type="radio" name="klasa" value="1" />pierwsza<br />
    <input type="radio" name="klasa" value="2" />druga<br />
    <input type="radio" name="klasa" value="3" />trzecia<br />
    <input type="radio" name="klasa" value="4" />czwarta<br />
    <input type="radio" name="klasa" value="5" />piąta<br />

    Ulubione jedzenie:<br />
    <input type="checkbox" name="papu[]" value="pizza" />pizza<br />
    <input type="checkbox" name="papu[]" value="schabowy" />schabowy<br />
    <input type="checkbox" name="papu[]" value="kebab" />kebab<br />
    <input type="checkbox" name="papu[]" value="pierogi" />pierogi<br />
    <input type="checkbox" name="papu[]" value="lazania" />lazania<br />
        <br />
    <input type="submit" value="Wyślij" />&nbsp;
    <input type="image" src="go.png" />&nbsp;
    <button><img src="rec.png" alt="" width="20" height="20" /> Nagraj </button>
 </form>
</html>