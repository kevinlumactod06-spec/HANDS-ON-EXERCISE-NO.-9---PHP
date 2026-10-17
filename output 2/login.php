<?php include 'layout/header.php'; ?>

<main class="auth-page">

    <div class="auth-card">

        <div class="auth-header">
            <h1>Welcome Back</h1>
            <p>Login to your KevinWeb account</p>
        </div>

        <form method="POST" class="auth-form">

            <label for="email">Email Address</label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your email"
                required
            >

            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                required
            >

            <div class="forgot-link">
                <a href="forgotPass.php">Forgot Password?</a>
            </div>

            <button type="submit" class="auth-button">
                Login
            </button>

        </form>

        <p class="register-text">
            Don't have an account?
            <a href="register.php">Register</a>
        </p>

    </div>

</main>

<?php include 'layout/footer.php'; ?>