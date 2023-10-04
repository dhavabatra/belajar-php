<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class=container>

    







    <?php
        $product = [
            [
                'nama' => 'Product 1',
                'img' => 'assets/img/img_4081.jpg'
            ],
            [
                'nama' => 'Product 2',
                'img' => 'assets/img/img_4081.jpg'
            ],
            [
                'nama' => 'Product 3',
                'img' => 'assets/img/img_4081.jpg'
            ],
            [
                'nama' => 'Product 4',
                'img' => 'assets/img/img_4081.jpg'
            ],
        ];
        
        $bahan = [
            [
                'nama' => 'Bahan 1',
                'img' => 'assets/img/img_4081.jpg'
            ],
            [
                'nama' => 'Bahan 2',
                'img' => 'assets/img/img_4081.jpg'
            ],
            [
                'nama' => 'Bahan 3',
                'img' => 'assets/img/img_4081.jpg'
            ],
            [
                'nama' => 'Bahan 4',
                'img' => 'assets/img/img_4081.jpg'
                ]
            ];

            foreach ($product as $key) {
                echo '<div class="card">';
                echo '<h2>' . $key['nama'] . '<?h2>';
                // echo '<>' . $key['img'] . '<?p>';
                echo '</div>';
            };

            echo '<br>';

        //     foreach ($bahan as $key) {
        //     echo '<div class="card2">';
        //     echo '<h2>' . $key['nama'] . '<?h2>';
        //     // echo '<>' . $key['img'] . '<?p>';
        //     echo '</div>';
        // };
    ?>
    </div>
</body>
</html>