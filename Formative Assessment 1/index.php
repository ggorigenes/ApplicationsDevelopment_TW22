<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title> Activity 1 </title>
</head>

<body>
    <?php
    $name = "Geraldine G. Origenes";
    $phoneNum = "+63-912-345-6789";
    $email = "ggorigenes@fit.edu.ph";
    $university = "Far Eastern University Institute of Technology";
    $course = "Bachelor of Science in Information Technology specializing in Web and Mobile Application Development";
    $collegeYear = "2024 - Present";
    $SHS = "STI Caloocan";
    $strand = "Senior High School - Information Communication Technology (ICT) Mobile App and Web Development (MAWD)";
    $shsYear = "2022 - 2024";
    $school = "Higher Ground Baptist Academy Foundation Inc.";
    $jhs = "Junior High School";
    $jhsYear = "2018 - 2022";
    $location = "Caloocan City, Philippines";
    $proj1 = "PharmaSync: Pharmacy POS & Inventory Management System";
    $infoProj1 = "Academic Project | 2026";
    $text1Proj1 = "Developed full-stack inventory system using Python and MySql.";
    $proj2 = "CitySync: A Smart City Platform";
    $infoProj2 = "Academic Project | 2026";
    $text1Proj2 = "Designed a centralized platform for Pasig City community reporting.";
    $proj3 = "EggLog: Desktop Arcade Game";
    $infoProj3 = "Grade 12 Capstone Project | 2024";
    $text1Proj3 = "Developed a reflex-based game focusing on object sorting and collision logic using Java.";
    $programmingLanguage = ["Python", "CSS", "HTML", "Java", "C++"];
    $certification = ["Information Technology Specialist - JavaScript (2031)", "Information Technology Specialist - Python (2031)", "Information Technology Specialist - Java (2030)", "Information Technology Specialist - Databases (2030)"];
    $interests = ["Gaming (Genshin Impact, Valorant, GTA)", "UAAP Volleyball Enthusiast", "K-Pop Fan"];
    $intro = "Motivated and detail-oriented IT student with a strong foundation in programming, mobile app development, and problem solving. Eager to apply technical skills and creativity to real-world projects in a collaborative environment. Looking for an internship or entry-level role where I can grow and contribute to innovate tech solutions."
    ?>

    <div class="container">
        <div class="header">
            <h1><?php echo $name; ?></h1>
            <p>Email: <?= $email; ?> | Phone: <?= $phoneNum; ?> | Location: <?= $location; ?></p>
        </div>

        <div class="content">
            <div class="column-1">
                <h2>Profile</h2>
                <p><?php echo $intro; ?></p>

                <h2>Technical Skills</h2>
                <h3>Programming Languages</h3>
                <p class="skills-list"><?php
                                        foreach ($programmingLanguage as $language) {
                                            echo "<li>$language</li>";
                                        }
                                        ?></p>

                <h3>Certifications</h3>
                <p class="skills-list"><?php
                                        foreach ($certification as $cert) {
                                            echo "<li>$cert</li>";
                                        }
                                        ?></p>

                <h2>Interests & Activities</h2>
                <p class="skills-list"><?php
                                        foreach ($interests as $interest) {
                                            echo "<li>$interest</li>";
                                        }
                                        ?></p>
            </div>

            <div class="column-2">
                <h2>Education</h2>

                <div class="edu-item">
                    <strong><?php echo $university; ?></strong>
                    <p><?php echo $course; ?></p>
                    <p class="date-text"><?php echo $collegeYear; ?></p>
                </div>

                <div class="edu-item">
                    <strong><?php echo $SHS; ?></strong>
                    <p><?php echo $strand; ?></p>
                    <p class="date-text"><?php echo $shsYear; ?></p>
                </div>

                <div class="edu-item">
                    <strong><?php echo $school; ?></strong>
                    <p><?php echo $jhs; ?></p>
                    <p class="date-text"><?php echo $jhsYear; ?></p>
                </div>

                <h2>Projects</h2>
                <div class="project-item">
                    <strong><?php echo $proj1; ?></strong>
                    <p class="date-text"><?php echo $infoProj1; ?></p>
                    <p><?php echo $text1Proj1; ?></p>
                </div>
                <div class="project-item">
                    <strong><?php echo $proj2; ?></strong>
                    <p class="date-text"><?php echo $infoProj2; ?></p>
                    <p><?php echo $text1Proj2; ?></p>

                </div>
                <div class="project-item">
                    <strong><?php echo $proj3; ?></strong>
                    <p class="date-text"><?php echo $infoProj3; ?></p>
                    <p><?php echo $text1Proj3; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>