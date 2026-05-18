<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FA3 - Act 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>USER DEFINED FUNCTION LAB</h1>
        </header>

        <?php
        function calculate($param1, $param2, $param3)
        {
            $add = $param1 + $param2 + $param3;
            $sub = $param1 - $param2 - $param3;
            $mul = $param1 * $param2 * $param3;
            $div = $param1 / $param2 / $param3;

            $results = array($add, $sub, $mul, $div);
            return $results;
        }

        $p1 = 25;
        $p2 = 13;
        $p3 = 6;

        $calcResults = calculate($p1, $p2, $p3);
        ?>

        <div class="list-box">
            <strong>My Parameter Values:</strong>
            <?php echo $p1 . ", " . $p2 . ", " . $p3; ?>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Operation</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Addition</strong></td>
                    <td><?= $calcResults[0] ?></td>
                </tr>
                <tr>
                    <td><strong>Subtraction</strong></td>
                    <td><?= $calcResults[1] ?></td>
                </tr>
                <tr>
                    <td><strong>Multiplication</strong></td>
                    <td><?= $calcResults[2] ?></td>
                </tr>
                <tr>
                    <td><strong>Division</strong></td>
                    <td><?= $calcResults[3] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>