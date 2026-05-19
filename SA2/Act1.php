<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SA2 - Activity 2: Fruit Directory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <table class="fruit-table">
            <thead>
                <tr>
                    <th colspan="4" class="table-title">Fruits</th>
                </tr>
                <tr>
                    <th style="width: 15%;">Image</th>
                    <th style="width: 15%;">Name</th>
                    <th style="width: 20%;">Description</th>
                    <th style="width: 50%;">Facts</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $fruits = array(
                    "Banana" => array(
                        "image" => "banana.jpg",
                        "desc" => "Color Yellow",
                        "facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber."
                    ),
                    "Apple" => array(
                        "image" => "apple.webp",
                        "desc" => "Color Red or Green",
                        "facts" => "Apples are rich in antioxidants and dietary fiber, which help lower the risk of chronic health conditions."
                    ),
                    "Grapes" => array(
                        "image" => "grapes.webp",
                        "desc" => "Color Purple or Green",
                        "facts" => "Grapes are packed with essential vitamins like Vitamin C and K, and high levels of powerful cardiovascular antioxidants."
                    ),
                    "Mango" => array(
                        "image" => "mango.jpg",
                        "desc" => "Color Yellow or Green",
                        "facts" => "Known as the king of fruits, mangoes contain high amounts of immune-boosting Vitamin A and fibers."
                    ),
                    "Orange" => array(
                        "image" => "orange.jpg",
                        "desc" => "Color Orange",
                        "facts" => "Oranges are widely celebrated for their exceptional concentrations of ascorbic acids and refreshing citric juices."
                    ),
                    "Strawberry" => array(
                        "image" => "strawberry.jpg",
                        "desc" => "Color Bright Red",
                        "facts" => "Strawberries are excellent sources of manganese and help promote steady blood sugar management levels."
                    ),
                    "Watermelon" => array(
                        "image" => "watermelon.jpg",
                        "desc" => "Green skin, Red inside",
                        "facts" => "Watermelons consist of over ninety percent pure water, making them remarkably hydrating during hot summer days."
                    ),
                    "Pineapple" => array(
                        "image" => "pineapple.webp",
                        "desc" => "Spiky skin, Yellow inside",
                        "facts" => "Pineapples contain an active digestive enzyme compound group called bromelain which effectively breaks down heavy food molecules."
                    ),
                    "Avocado" => array(
                        "image" => "avocado.webp",
                        "desc" => "Color Dark Green",
                        "facts" => "Avocados are unique fruits because they are exceptionally high in heart-healthy monounsaturated fatty acids."
                    ),
                    "Papaya" => array(
                        "image" => "papaya.jpeg",
                        "desc" => "Color Greenish Yellow",
                        "facts" => "Papayas hold rich amounts of papain enzymes which are highly effective at soothing stomach irritations and regular metabolic functions."
                    )
                );

                ksort($fruits);

                foreach ($fruits as $name => $details) {
                ?>
                <tr>
                    <td class="cell-img">
                        <div class="fruit-img-box">
                            <img src="<?= $details['image'] ?>" alt="<?= $name ?>">
                        </div>
                    </td>
                    <td class="cell-name"><strong><?= $name ?></strong></td>
                    <td class="cell-desc"><?= $details['desc'] ?></td>
                    <td class="cell-facts"><?= $details['facts'] ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>