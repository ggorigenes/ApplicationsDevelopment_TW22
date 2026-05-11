<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SA1 - Multiplication Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="table-container">
        <h1 class="table-title">Multiplication Table</h1>
        
        <table class="multi-table">
            <?php
            for ($i = 0; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 0; $j <= 10; $j++) {
                    
                    $product = $i * $j;
                    
                    if (($i + $j) % 2 == 0) {
                        $cellClass = "yellow-cell";
                    } else {
                        $cellClass = "red-cell";
                    }

                    echo "<td class='$cellClass'>$product</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>