<?php
//connect to db
$pdo = new PDO("mysql:localhost","root","");
?>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
What's up <?php echo htmlspecialchars($_POST["username"]);?>

<?php else: ?>
<form id="login" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    <label for="username">Username</label>
    <input type="name" name="username" id="username" required/>
    <br>
    <label for="password" name="password">Password</label>
    <input type="password" id="password" required/>
    <input type="submit" value="submit"/>
</form>
<?php endif; ?>
