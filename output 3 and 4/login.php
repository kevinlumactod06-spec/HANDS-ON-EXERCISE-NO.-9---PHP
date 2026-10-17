<?php
$page_title = "Login";
include "header.php";
?>

<div class="page-container">

    <h1>Login</h1>

    <form action="#" method="POST">

        <label for="email">Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
        >

        <label for="password">Password:</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            required
        >

        <button type="submit">Login</button>

    </form>

    <div class="form-links">
        <a href="forgot_password.php">Forgot Password?</a>
        <a href="register.php">Create an Account</a>
    </div>

</div>

<?php
include "footer.php";
?>