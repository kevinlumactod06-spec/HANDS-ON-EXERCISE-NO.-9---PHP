<?php include 'layout/header.php'; ?>

<main class="auth-container">

    <div class="auth-box forgot-box">

        <div class="auth-header">
            <h2>Forgot Password?</h2>
            <p>
                Enter your email address and we'll help you reset your password.
            </p>
        </div>

        <form action="" method="POST">

            <div class="input-group">
                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                >
            </div>

            <button type="submit" name="forgot_password" class="auth-button">
                Send Reset Link
            </button>

            <p class="auth-link">
                Remember your password?
                <a href="login.php">Back to Login</a>
            </p>

        </form>

    </div>

</main>

<?php include 'layout/footer.php'; ?>