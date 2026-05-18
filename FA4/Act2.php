<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FA4 - Activity 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Activity 2</h1>

        <?php
        $names = array(
            "maraiah queen arceta",
            "ma. nicolette vergara",
            "mary loi yves ricalde",
            "gweneth apuli",
            "stacey aubrey sevilleja",
            "mikhaela janna lim",
            "jhoanna christine robles",
            "sheena mae catacutan",
            "kim minjeong",
            "yu jimin",
            "aeri uchinaga",
            "ning yizhuo",
            "shin ryujin",
            "hwang yeji",
            "kim chaewon",
            "cassie carballo",
            "camila lamina",
            "regina jurado",
            "bella belen",
            "jeon somi"
        );
        ?>

        <table class="string-table">
            <thead>
                <tr>
                    <th>Original Name</th>
                    <th>Number of Characters</th>
                    <th>First Character Uppercase</th>
                    <th>Vowels Replaced with @</th>
                    <th>Position of Letter 'a'</th>
                    <th>Reverse Format</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($names); $i++) { 
                    $currentName = $names[$i];
                    
                    $length = strlen($currentName);
                    
                    $uppercaseFirst = ucfirst($currentName);
                    
                    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
                    $replacedVowels = str_replace($vowels, "@", $currentName);
                    
                    $posA = strpos(strtolower($currentName), "a");
                    if ($posA === false) {
                        $displayPos = "Not found";
                    } else {
                        $displayPos = $posA;
                    }
                    
                    $reversed = strrev($currentName);
                ?>
                <tr>
                    <td><strong><?= $currentName ?></strong></td>
                    <td><?= $length ?></td>
                    <td><?= $uppercaseFirst ?></td>
                    <td><?= $replacedVowels ?></td>
                    <td><?= $displayPos ?></td>
                    <td><?= $reversed ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>