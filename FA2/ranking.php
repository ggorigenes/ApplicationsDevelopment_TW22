<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSA2 - Grade Ranking</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        
        <?php
        $name = "Geraldine G. Origenes";
        $grade = 90; 
        $rank = "";

        if ($grade >= 93 && $grade <= 100) {
            $rank = "A";
        } elseif ($grade >= 90 && $grade <= 92) {
            $rank = "A-";
        } elseif ($grade >= 87 && $grade <= 89) {
            $rank = "B+";
        } elseif ($grade >= 83 && $grade <= 86) {
            $rank = "B";
        } elseif ($grade >= 80 && $grade <= 82) {
            $rank = "B-";
        } elseif ($grade >= 77 && $grade <= 79) {
            $rank = "C+";
        } elseif ($grade >= 73 && $grade <= 76) {
            $rank = "C";
        } elseif ($grade >= 70 && $grade <= 72) {
            $rank = "C-";
        } elseif ($grade >= 67 && $grade <= 69) {
            $rank = "D+";
        } elseif ($grade >= 63 && $grade <= 66) {
            $rank = "D";
        } elseif ($grade >= 60 && $grade <= 62) {
            $rank = "D-";
        } else {
            $rank = "F"; 
        }
        ?>

        <div class="name-header">
            Name: <?= $name ?>
        </div>

        <div class="grade-card-container">
            <div class="box rank-box">
                <p>Rank:</p>
                <h2><?= $rank ?></h2>
            </div>
            
            <div class="box grade-box">
                <p>Grade:</p>
                <h2><?= $grade ?></h2>
            </div>
            
            <div class="box picture-box">
                <img src="profile.jpg" class="profile-img">
            </div>
        </div>

    </div>
</body>
</html>