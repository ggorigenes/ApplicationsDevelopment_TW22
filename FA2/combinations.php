<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSA2 - Two-Digit Combinations</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>TWO-DIGIT COMBINATIONS</h1>
            <p>Student: <strong>Geraldine G. Origenes</strong></p>
        </header>

        <div class="loop-container">
            <?php
            for ($i = 0; $i <= 9; $i++) {
                for ($j = 0; $j <= 9; $j++) {
                    echo $i . $j;
                    
                    if (!($i == 9 && $j == 9)) {
                        echo ", ";
                    }
                }
            }
            ?>
        </div>
        
    </div>
</body>
</html>