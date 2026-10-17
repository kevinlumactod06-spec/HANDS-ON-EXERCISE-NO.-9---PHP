<?php include 'layout/header.php'; ?>

<main class="auth-container">

    <div class="auth-box">

        <div class="auth-header">
            <h2>Create Account</h2>
            <p>Join JanTech and start shopping today.</p>
        </div>

        <form action="" method="POST">

            <div class="input-group">
                <label for="fullname">Full Name</label>
                <input
                    type="text"
                    id="fullname"
                    name="fullname"
                    placeholder="Enter your full name"
                    required
                >
            </div>

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

            <div class="input-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Create a password"
                    required
                >
            </div>

            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input
                    type="password"
                    id="confirm-password"
                    name="confirm_password"
                    placeholder="Confirm your password"
                    required
                >
            </div>

            <button type="submit" name="register" class="auth-button">
                Create Account
            </button>

            <p class="auth-link">
                Already have an account?
                <a href="login.php">Login</a>
            </p>

        </form>

    </div>

</main>

<?php include 'layout/footer.php'; ?>