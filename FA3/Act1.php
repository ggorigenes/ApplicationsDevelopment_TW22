<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FA3 - Act 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>STUDENT PROFILES</h1>
        </header>

        <?php
        $students = array(
            array(
                "name" => "Kim Minjeong",
                "profile" => "profile1.jpg",
                "age" => "25",
                "birthday" => "January 01, 2001",
                "contact" => "09123456789"
            ),
            array(
                "name" => "Yu Jimin",
                "profile" => "profile2.jpg",
                "age" => "26",
                "birthday" => "April 11, 2000",
                "contact" => "09234567890"
            ),
            array(
                "name" => "Aeri Uchinaga",
                "profile" => "profile3.webp",
                "age" => "25",
                "birthday" => "October 30, 2000",
                "contact" => "09345678901"
            ),
            array(
                "name" => "Ning Yizhuo",
                "profile" => "profile4.jpg",
                "age" => "23",
                "birthday" => "October 23, 2002",
                "contact" => "09456789012"
            ),
            array(
                "name" => "Shin Ryujin",
                "profile" => "profile5.jpg",
                "age" => "25",
                "birthday" => "April 17, 2001",
                "contact" => "09567890123"
            ),
            array(
                "name" => "Hwang Yeji",
                "profile" => "profile6.webp",
                "age" => "26",
                "birthday" => "May 26, 2000",
                "contact" => "09678901234"
            ),
            array(
                "name" => "Choi Jisu",
                "profile" => "profile7.jpg",
                "age" => "26",
                "birthday" => "July 21, 2000",
                "contact" => "09789012345"
            ),
            array(
                "name" => "Lee Chaeryeong",
                "profile" => "profile8.webp",
                "age" => "24",
                "birthday" => "June 05, 2001",
                "contact" => "09890123456"
            ),
            array(
                "name" => "Shin Yuna",
                "profile" => "profile9.jpg",
                "age" => "22",
                "birthday" => "December 09, 2003",
                "contact" => "09901234567"
            ),
            array(
                "name" => "Kim Chaewon",
                "profile" => "profile10.jpg",
                "age" => "25",
                "birthday" => "August 01, 2000",
                "contact" => "09012345678"
            )
        );

        for ($i = 0; $i < count($students); $i++) {
            for ($j = $i + 1; $j < count($students); $j++) {
                if ($students[$i]["name"] > $students[$j]["name"]) {
                    $temp = $students[$i];
                    $students[$i] = $students[$j];
                    $students[$j] = $temp;
                }
            }
        }
        ?>

        <table>
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>NAME</th>
                    <th>IMAGE</th>
                    <th>AGE</th>
                    <th>BIRTHDAY</th>
                    <th>CONTACT NUMBER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count ($students); $i++) {
                    ?>
                    <tr>
                        <td><?php echo $i + 1; ?></td>
                        <td class = "student-name"><?php echo $students[$i]["name"]; ?></td>
                        <td>
                            <div class = "table-img-container">
                                <img src = "<?php echo $students[$i]["profile"]; ?>" alt = "Profile">
                            </div>
                        </td>
                        <td><?php echo $students[$i]["age"]; ?></td>
                        <td><?php echo $students[$i]["birthday"]; ?></td>
                        <td class = "contact-number"><?php echo $students[$i]["contact"]; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
