<form method="post" action="signup.php">
    <input type='email' name='email' />
    <input type='password' name='password' />
    <input type='text' name='login' />
    <input type='submit' value='Me connecter' />
</form>

<h2>Inscription</h2>
<form method="post" action="php/signup.php">
    pseudo<input type='text' name='pseudo' />
    email <input type='email' name='email' />
    country<input type='text' name='country' />
    password <input type='password' name='password' />
    <input type='submit' value='Me connecter' />
</form>
<?php
  require_once "php/config.php"; 
  var_dump($_SESSION);
  foreach ($_SESSION as $row){
    echo('<table>');
    foreach ($row as $value){
        echo "<tr><td>'$value'</td></tr>";
        
    }
    echo('</table>');
   
    
}
?>

