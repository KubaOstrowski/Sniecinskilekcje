<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="odbierz.php" method="post">
        login: <input type="text" name="login" value=""/><br /><br />
        hasło: <input type="password" name="haslo" value=""/><br /><br />
        wybierz preferowany gatunek muzyki:<br />
        <select name="gatunek[]" multiple>
            <option>rock</option>
            <option>metal</option>
            <option>pop</option>
            <option>disco polo</option>
        </select>                                          
        <input type="submit" value="Wyślij"/>
    </form>
</body>
</html>