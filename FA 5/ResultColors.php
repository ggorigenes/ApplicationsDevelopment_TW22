<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['color1'] = htmlspecialchars($_POST['color1'] ?? '');
    $_SESSION['color2'] = htmlspecialchars($_POST['color2'] ?? '');
    $_SESSION['color3'] = htmlspecialchars($_POST['color3'] ?? '');
    $_SESSION['color4'] = htmlspecialchars($_POST['color4'] ?? '');
    $_SESSION['color5'] = htmlspecialchars($_POST['color5'] ?? '');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FA5 - Result Colors</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="glass-container justify-content-center">
        
        <div class="glass-panel" style="max-width: 500px;">
            <h3 class="mb-4 text-center fw-light">Saved Session Colors</h3>
            
            <?php
            if (isset($_SESSION['color1'])) {
                for ($i = 1; $i <= 5; $i++) {
                    $colorValue = $_SESSION["color$i"];
                    
                    echo "<div class='status-pill status-active'>";
                    echo "<div>";
                    echo "<div class='cookie-name'>Color $i</div>";
                    echo "<div class='cookie-val text-capitalize' style='color: " . $colorValue . "; text-shadow: 0 0 5px rgba(255,255,255,0.3);'>" . $colorValue . "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<div class='status-pill status-expired'>";
                echo "<div class='cookie-name'>No Data Found</div>";
                echo "</div>";
            }
            ?>
            
            <div class="mt-4 text-center">
                <a href="FavoriteColor.php" class="btn btn-glass" style="width: auto;">← Go Back</a>
            </div>
        </div>

    </div>
</body>
</html>