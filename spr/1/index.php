<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    
  </head>
  <body>
    <form action="odbierz.php" method="post">
      
        <legend>Dane personalne</legend>
        
        email:&nbsp;<input type="email" name="email" value="" placeholder="email" required="required" /><br />
        
      Jaka płeć?<br />
      <input type="radio" name="plec" value="k" />kobieta<br /><br />
      <input type="radio" name="plec" value="m" />mężczyzna<br /><br />
      <select name="sport[]" multiple>
            <option>biegi</option>
            <option>rower</option>
            <option>tenis</option>
            <option>narty</option>
            <option>snowboard</option>
        </select>    
        <input type="submit" value="Wyślij"/>                  
      
    </form>
  </body>
</html>
