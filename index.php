<html>
<body>
<legend>Login</legend>
<form action="register.php"method="post">
User:<input type="text" name="user"value="<?php if(isset($_POST['user'])){ echo $_POST['user']; }?>" ><br>
Password:<input type="text" name="password"value="<?php if(isset($_POST['password'])){ echo $_POST['password']; }?>" ><br>
<input type="submit">

</form>
</body>
</html>