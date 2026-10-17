<?php
$page_title = "Register";
include "header.php";
?>

<div class="page-container">

    <h1>Create an Account</h1>

    <form action="index.php" method="GET">

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" max="120" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"
               placeholder="example@email.com" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"
               placeholder="Enter your address" required>

        <label for="contact_number">Contact Number:</label>
        <input type="tel" id="contact_number" name="contact_number"
               placeholder="09XXXXXXXXX"
               pattern="09[0-9]{9}" required>

        <button type="submit">Register</button>

    </form>

</div>

<?php
include "footer.php";
?>