<?php 
require('header.php');
?>
<main>
    <h1> Log In! </h1> 
    <form action="validate.php" method="post">
        <fieldset class="form-group">
			<label for="username" class="col-sm-2">(Required) User Name:</label>
			<input name="username" type="text" class="form-control" id="username" required minlength="2" maxlength="20">
		</fieldset>
		<fieldset class="form-group">
			<label for="password" class="col-sm-2">(Required) Password:</label>
			<input name="password" type="password" class="form-control" required minlength="8" maxlength="20">
		</fieldset>
        <input type="submit" value="Log In!" name="submit" class="btn btn-success">
    </form>
    <a href="register.php"> Not a Member Yet? Sign Up Now </a>
</main>
<?php require("footer.php") ?>




