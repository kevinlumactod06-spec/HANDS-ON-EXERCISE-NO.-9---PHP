<?php
$page_title = "Forgot Password";
include "header.php";
?>

<div class="page-container">

    <h1>Forgot Password</h1>

    <p>Enter your email address to reset your password.</p>

    <form action="#" method="POST">

        <label for="email">Email:</label>

        <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
        >

        <button type="submit">Reset Password</button>

    </form>

    <div class="form-links">
        <a href="login.php">Back to Login</a>
        <a href="register.php">Create an Account</a>
    </div>

</div>

<?php
include "footer.php";
?>