<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SA2 - Activity 3: Volume of Shapes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        function volumeCube($side) {
            return pow($side, 3);
        }

        function volumeRectPrism($length, $width, $height) {
            return $length * $width * $height;
        }

        function volumeCylinder($radius, $height) {
            return pi() * pow($radius, 2) * $height;
        }

        function volumePyramid($baseLength, $baseWidth, $height) {
            return ($baseLength * $baseWidth * $height) / 3;
        }

        function volumeSphere($radius) {
            return (4 / 3) * pi() * pow($radius, 3);
        }

        $s = 5;
        $l = 6; $w = 4; $h_prism = 8;
        $r_cyl = 3; $h_cyl = 10;
        $bl = 5; $bw = 4; $h_pyr = 9;
        $r_sph = 4;
        ?>

        <table class="volume-table">
            <thead>
                <tr>
                    <th colspan="4" class="table-title">Volume of Shapes</th>
                </tr>
                <tr>
                    <th>Shape Name</th>
                    <th>Values Used</th>
                    <th>Formula</th>
                    <th>Calculated Answer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Cube</strong></td>
                    <td>s = <?= $s ?></td>
                    <td>V = s³</td>
                    <td><?= number_format(volumeCube($s), 2) ?></td>
                </tr>
                <tr>
                    <td><strong>Right Rectangular Prism</strong></td>
                    <td>l = <?= $l ?>, w = <?= $w ?>, h = <?= $h_prism ?></td>
                    <td>V = l × w × h</td>
                    <td><?= number_format(volumeRectPrism($l, $w, $h_prism), 2) ?></td>
                </tr>
                <tr>
                    <td><strong>Cylinder</strong></td>
                    <td>r = <?= $r_cyl ?>, h = <?= $h_cyl ?></td>
                    <td>V = π × r² × h</td>
                    <td><?= number_format(volumeCylinder($r_cyl, $h_cyl), 2) ?></td>
                </tr>
                <tr>
                    <td><strong>Pyramid</strong></td>
                    <td>l = <?= $bl ?>, w = <?= $bw ?>, h = <?= $h_pyr ?></td>
                    <td>V = (l × w × h) / 3</td>
                    <td><?= number_format(volumePyramid($bl, $bw, $h_pyr), 2) ?></td>
                </tr>
                <tr>
                    <td><strong>Sphere</strong></td>
                    <td>r = <?= $r_sph ?></td>
                    <td>V = (4/3) × π × r³</td>
                    <td><?= number_format(volumeSphere($r_sph), 2) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>