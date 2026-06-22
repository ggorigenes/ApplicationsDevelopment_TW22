<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dog_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM dog_info";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog View</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Registered Dogs</h2>
<a href="DogRegister.php">Register Another Dog</a><br><br>

<?php
echo "<div class='dogs-container'>";

if (mysqli_num_rows($result) > 0) {
    
    $counter = 1;
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='record-box'>";
        echo "<p>Dog " . $counter . "</p>";
        echo "<p>Name: " . $row["d_name"] . "</p>";
        echo "<p>Breed: " . $row["d_breed"] . "</p>";
        echo "<p>Age: " . $row["d_age"] . "</p>";
        echo "<p>Address: " . $row["d_add"] . "</p>";
        echo "<p>Color: " . $row["d_color"] . "</p>";
        echo "<p>Height: " . $row["d_height"] . "</p>";
        echo "<p>Weight: " . $row["d_weight"] . "</p>";
        echo "</div>";
        
        $counter++; 
    }
} else {
    echo "<p>0 results</p>";
}

echo "</div>";

mysqli_close($conn);
?>

</body>
</html>