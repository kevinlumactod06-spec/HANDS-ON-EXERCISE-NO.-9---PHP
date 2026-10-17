
<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Registration Form</h1>

    <form action="save.php" method="POST">

        <label for="age">Age:</label>
        <input
            type="number"
            id="age"
            name="age"
            min="1"
            max="120"
            required
        >

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="email">Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="example@email.com"
            required
        >

        <label for="address">Address:</label>
        <input
            type="text"
            id="address"
            name="address"
            placeholder="Enter your address"
            required
        >

        <label for="contact_number">Contact Number:</label>
        <input
            type="tel"
            id="contact_number"
            name="contact_number"
            placeholder="09XXXXXXXXX"
            pattern="09[0-9]{9}"
            required
        >

        <button type="submit">Submit</button>

    </form>

</div>


<!-- REGISTERED PERSONS -->

<div class="table-container">

    <h2>List of Registered Person</h2>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

        <?php

        $sql = "SELECT * FROM registered_person ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                echo "<tr>";

                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['age']) . "</td>";
                echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                echo "<td>" . htmlspecialchars($row['contact_number']) . "</td>";

                // Actions
                echo "<td>";
                echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a> | ";
                echo "<a href='delete.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>";
                echo "</td>";

                echo "</tr>";
            }

        } else {

            echo "<tr>";
            echo "<td colspan='7'>No registered person yet.</td>";
            echo "</tr>";

        }

        ?>

        </tbody>

    </table>

</div>


</body>
</html>

<?php
$conn->close();
?>
