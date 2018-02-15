<form action="#" method="POST">
	<fieldset>
		<legend>Hello Jim</legend>
		Userinfo:<input type="text" name="userinfo" value="<?php if(isset($_POST['userinfo'])){ echo $_POST['userinfo']; }?>" ><br/><br/>
	UserLogin info:	<input type=text" name="userLogin info" value="<?php if(isset($_POST['userlogin info'])){ echo $_POST['userlogin info']; }?>" >
		</hr>
	</fieldset>
</form>