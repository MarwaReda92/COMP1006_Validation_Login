<?php require_once('header.php'); ?>
<main>
    <h1>Sign Up</h1>
    <p>Please fill this form to create an account.</p>
    <form action="save-registration.php" method="post">
        <div class="form-group">
            <label>(Required) Username</label>
            <input type="text" name="username" class="form-control" required minlength="2" maxlength="20">
            <small class="form-text">Username must be 2-20 characters long.</small>
        </div>
        <div class="form-group">
            <label>(Required) Password</label>
            <input type="password" name="password" class="form-control" required minlength="8" maxlength="20">
            <small class="form-text">Password must be 8-20 characters long.</small>
        </div>
        <div class="form-group">
            <label>(Required) Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control">
        </div>

        <!-- Add the recaptcha field -->
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-default" value="Reset">
        </div>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </form>
</main>
<?php require_once('footer.php'); ?>

<script src="https://www.google.com/recaptcha/api.js?render=<?= SITEKEY ?>"></script>
<script>
    grecaptcha.ready(() => {
        grecaptcha.execute("<?= SITEKEY ?>", {action: "register"})
            .then(token => document.querySelector("#recaptchaResponse").value = token)
            .catch(error => console.error(error));
    });
</script>
