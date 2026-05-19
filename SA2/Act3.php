<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SA2 - Activity 4: Student Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="resume-container">
        
        <div class="profile-header">
            <div class="avatar-box">
                <img src="profile.jpg" alt="Student Profile Picture">
            </div>
            <div class="header-info">
                <?php require("personal.php"); ?>
            </div>
        </div>

        <div class="resume-body">
            <?php include("objective.php"); ?>
            <?php include("education.php"); ?>
            <?php include("skills.php"); ?>
            <?php include("affiliation.php"); ?>
            <?php include("experience.php"); ?>
        </div>

    </div>
</body>
</html>