<?php

include "connection.php";

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM registered_person WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$person = $result->fetch_assoc();

if (!$person) {
    die("Person not found.");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Registered Person</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Edit Registered Person</h1>

    <form action="update.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $person['id']; ?>">

        <label for="age">Age:</label>
        <input type="number"
               id="age"
               name="age"
               min="1"
               max="120"
               value="<?php echo htmlspecialchars($person['age']); ?>"
               required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>

            <option value="Male"
                <?php if ($person['gender'] == "Male") echo "selected"; ?>>
                Male
            </option>

            <option value="Female"
                <?php if ($person['gender'] == "Female") echo "selected"; ?>>
                Female
            </option>
        </select>

        <label for="email">Email:</label>
        <input type="email"
               id="email"
               name="email"
               value="<?php echo htmlspecialchars($person['email']); ?>"
               required>

        <label for="address">Address:</label>
        <input type="text"
               id="address"
               name="address"
               value="<?php echo htmlspecialchars($person['address']); ?>"
               required>

        <label for="contact_number">Contact Number:</label>
        <input type="tel"
               id="contact_number"
               name="contact_number"
               value="<?php echo htmlspecialchars($person['contact_number']); ?>"
               pattern="09[0-9]{9}"
               required>

        <button type="submit">Update</button>

    </form>

    <br>

    <a href="index.php" class="button">Back</a>

</div>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>