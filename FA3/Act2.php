<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FA3 - Act 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>ARRAY MATH OPERATIONS</h1>
        </header>

        <?php
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        $sum = 0;
        $difference = $numbers[0];
        $product = 1;
        $quotient = $numbers[0];

        for ($i = 0; $i < count($numbers); $i++) {
            $sum = $sum + $numbers[$i];
            if ($i > 0) {
                $difference = $difference - $numbers[$i];
                $quotient = $quotient / $numbers[$i];
            }
            $product = $product * $numbers[$i];
        }
        ?>

        <div class="list-box">
            <strong>Array list:</strong>
            <?php
            for ($i = 0; $i < count($numbers); $i++) {
                echo $numbers[$i];
                if ($i < count($numbers) - 1) {
                    echo ", ";
                }
            }
            ?>
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
                    <td><?php echo $sum; ?></td>
                </tr>
                <tr>
                    <td><strong>Subtraction</strong></td>
                    <td><?php echo $difference; ?></td>
                </tr>
                <tr>
                    <td><strong>Multiplication</strong></td>
                    <td><?php echo $product; ?></td>
                </tr>
                <tr>
                    <td><strong>Division</strong></td>
                    <td><?php echo $quotient; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>