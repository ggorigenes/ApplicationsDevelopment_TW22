<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dog_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dog_info (d_name, d_breed, d_age, d_add, d_color, d_height, d_weight) 
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record saved successfully!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="form-title">Dog Information</div>
    
    <form method="POST" action="DogRegister.php">
        <label>Name</label>
        <input type="text" name="name" placeholder="e.g., Browny" required>

        <label>Breed</label>
        <input type="text" name="breed" placeholder="e.g., Pug" required>

        <label>Age</label>
        <input type="text" name="age" placeholder="e.g., 2yrs old" required>

        <label>Address</label>
        <input type="text" name="address" placeholder="e.g., Quezon City" required>

        <label>Color</label>
        <input type="text" name="color" placeholder="e.g., white" required>

        <label>Height</label>
        <input type="text" name="height" placeholder="e.g., 2 ft" required>

        <label>Weight</label>
        <input type="text" name="weight" placeholder="e.g., 2.5 kilos" required>

        <input type="submit" name="save" value="Save">
    </form>
    <a href="DogView.php">View All Dogs</a>
</div>

</body>
</html>