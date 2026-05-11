<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSA2 - Length Conversion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>MEASURE CONVERSION CHART - LENGTHS (UK)</h1>
            <p>Student: <strong>Geraldine G. Origenes</strong></p>
        </header>

        <?php
        // METRIC
        $cm_to_mm = 1 * 10;
        $dm_to_cm = 1 * 10;
        $m_to_cm  = 1 * 100;
        $km_to_m  = 1 * 1000;

        // IMPERIAL
        $ft_to_in  = 1 * 12;
        $yd_to_ft  = 1 * 3;
        $ch_to_yd  = 1 * 22;
        $fur_to_yd = 1 * 220;
        $mi_to_yd  = 1 * 1760;

        // METRIC -> IMPERIAL
        $mm_to_in   = 1 * 0.03937;
        $cm_to_in   = 1 * 0.39370;
        $m_to_in    = 1 * 39.37008;
        $m_to_ft    = 1 * 3.28084;
        $m_to_yd    = 1 * 1.09361;
        $km_to_yd   = 1 * 1093.6133;
        $km_to_mi   = 1 * 0.62137;

        // IMPERIAL -> METRIC
        $in_to_cm  = 1 * 2.54;
        $ft_to_cm  = 1 * 30.48;
        $yd_to_cm  = 1 * 91.44;
        $yd_to_m   = 1 * 0.9144;
        $mi_to_m   = 1 * 1609.344;
        $mi_to_km  = 1 * 1.609344;
        ?>

        <table>
            <thead>
                <tr><th colspan="6">METRIC CONVERSIONS</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td>1 centimetre</td><td class="eq">=</td><td><?= $cm_to_mm ?> millimetres</td>
                    <td class="abbr">1 cm</td><td class="eq">=</td><td><?= $cm_to_mm ?> mm</td>
                </tr>
                <tr>
                    <td>1 decimetre</td><td class="eq">=</td><td><?= $dm_to_cm ?> centimetres</td>
                    <td class="abbr">1 dm</td><td class="eq">=</td><td><?= $dm_to_cm ?> cm</td>
                </tr>
                <tr>
                    <td>1 metre</td><td class="eq">=</td><td><?= $m_to_cm ?> centimetres</td>
                    <td class="abbr">1 m</td><td class="eq">=</td><td><?= $m_to_cm ?> cm</td>
                </tr>
                <tr>
                    <td>1 kilometre</td><td class="eq">=</td><td><?= $km_to_m ?> metres</td>
                    <td class="abbr">1 km</td><td class="eq">=</td><td><?= $km_to_m ?> m</td>
                </tr>
            </tbody>
        </table>

        <table>
            <thead>
                <tr><th colspan="6">IMPERIAL CONVERSIONS</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td>1 foot</td><td class="eq">=</td><td><?= $ft_to_in ?> inches</td>
                    <td class="abbr">1 ft</td><td class="eq">=</td><td><?= $ft_to_in ?> in</td>
                </tr>
                <tr>
                    <td>1 yard</td><td class="eq">=</td><td><?= $yd_to_ft ?> feet</td>
                    <td class="abbr">1 yd</td><td class="eq">=</td><td><?= $yd_to_ft ?> ft</td>
                </tr>
                <tr>
                    <td>1 chain</td><td class="eq">=</td><td><?= $ch_to_yd ?> yards</td>
                    <td class="abbr">1 ch</td><td class="eq">=</td><td><?= $ch_to_yd ?> yd</td>
                </tr>
                <tr>
                    <td>1 furlong</td><td class="eq">=</td><td><?= $fur_to_yd ?> yards (or 10 chains)</td>
                    <td class="abbr">1 fur</td><td class="eq">=</td><td><?= $fur_to_yd ?> yd (or 10 ch)</td>
                </tr>
                <tr>
                    <td>1 mile</td><td class="eq">=</td><td><?= $mi_to_yd ?> yards (or 8 furlongs)</td>
                    <td class="abbr">1 mi</td><td class="eq">=</td><td><?= $mi_to_yd ?> yd (or 8 fur)</td>
                </tr>
            </tbody>
        </table>

        <table>
            <thead>
                <tr><th colspan="6">METRIC -> IMPERIAL CONVERSIONS</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td>1 millimetre</td><td class="eq">=</td><td><?= $mm_to_in ?> inches</td>
                    <td class="abbr">1 mm</td><td class="eq">=</td><td><?= $mm_to_in ?> in</td>
                </tr>
                <tr>
                    <td>1 centimetre</td><td class="eq">=</td><td><?= $cm_to_in ?> inches</td>
                    <td class="abbr">1 cm</td><td class="eq">=</td><td><?= $cm_to_in ?> in</td>
                </tr>
                <tr>
                    <td>1 metre</td><td class="eq">=</td><td><?= $m_to_in ?> inches</td>
                    <td class="abbr">1 m</td><td class="eq">=</td><td><?= $m_to_in ?> in</td>
                </tr>
                <tr>
                    <td>1 metre</td><td class="eq">=</td><td><?= $m_to_ft ?> feet</td>
                    <td class="abbr">1 m</td><td class="eq">=</td><td><?= $m_to_ft ?> ft</td>
                </tr>
                <tr>
                    <td>1 metre</td><td class="eq">=</td><td><?= $m_to_yd ?> yards</td>
                    <td class="abbr">1 m</td><td class="eq">=</td><td><?= $m_to_yd ?> yd</td>
                </tr>
                <tr>
                    <td>1 kilometre</td><td class="eq">=</td><td><?= $km_to_yd ?> yards</td>
                    <td class="abbr">1 km</td><td class="eq">=</td><td><?= $km_to_yd ?> yd</td>
                </tr>
                <tr>
                    <td>1 kilometre</td><td class="eq">=</td><td><?= $km_to_mi ?> miles</td>
                    <td class="abbr">1 km</td><td class="eq">=</td><td><?= $km_to_mi ?> mi</td>
                </tr>
            </tbody>
        </table>

        <table>
            <thead>
                <tr><th colspan="6">IMPERIAL -> METRIC CONVERSIONS</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td>1 inch</td><td class="eq">=</td><td><?= $in_to_cm ?> centimetres</td>
                    <td class="abbr">1 in</td><td class="eq">=</td><td><?= $in_to_cm ?> cm</td>
                </tr>
                <tr>
                    <td>1 foot</td><td class="eq">=</td><td><?= $ft_to_cm ?> centimetres</td>
                    <td class="abbr">1 ft</td><td class="eq">=</td><td><?= $ft_to_cm ?> cm</td>
                </tr>
                <tr>
                    <td>1 yard</td><td class="eq">=</td><td><?= $yd_to_cm ?> centimetres</td>
                    <td class="abbr">1 yd</td><td class="eq">=</td><td><?= $yd_to_cm ?> cm</td>
                </tr>
                <tr>
                    <td>1 yard</td><td class="eq">=</td><td><?= $yd_to_m ?> metres</td>
                    <td class="abbr">1 yd</td><td class="eq">=</td><td><?= $yd_to_m ?> m</td>
                </tr>
                <tr>
                    <td>1 mile</td><td class="eq">=</td><td><?= $mi_to_m ?> metres</td>
                    <td class="abbr">1 mi</td><td class="eq">=</td><td><?= $mi_to_m ?> m</td>
                </tr>
                <tr>
                    <td>1 mile</td><td class="eq">=</td><td><?= $mi_to_km ?> kilometres</td>
                    <td class="abbr">1 mi</td><td class="eq">=</td><td><?= $mi_to_km ?> km</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>