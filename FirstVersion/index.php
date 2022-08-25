<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>PHP Dischi</title>
</head>
<body>
    <?php
        $discs = [
            [
                "poster" => "https:\/\/www.onstageweb.com\/wp-content\/uploads\/2018\/09\/bon-jovi-new-jersey.jpg",
                "title" => "New Jersey",
                "author" => "Bon Jovi",
                "genre" => "Rock",
                "year" => "1988"
            ],
            [
                "poster" => "https:\/\/img.discogs.com\/vknPDdrqRbT92pNRX0W4I5N91jg=\/fit-in\/300x300\/filters:strip_icc():format(jpeg):mode_rgb():quality(40)\/discogs-images\/R-1246953-1448927086-6590.jpeg.jpg",
                "title" => "Live at Wembley 86",
                "author" => "Quuen",
                "genre" => "Pop",
                "year" => "1992"
            ],
            [
                "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
                "title" => "Ten's Summoner's Tales",
                "author" => "Sting",
                "genre" => "Pop",
                "year" => "1993"
            ],
            [
                "poster" => "https:\/\/cdn2.jazztimes.com\/2018\/05\/SteveGadd-800x723.jpg",
                "title" => "Steve Gadd Band",
                "author" => "Steve Gadd Band",
                "genre" => "Jazz",
                "year" => "2018"
            ],
            [
                "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
                "title" => "Brave new World",
                "author" => "Iron Maiden",
                "genre" => "Metal",
                "year" => "2000"
            ],
            [
                "poster" => "https:\/\/upload.wikimedia.org\/wikipedia\/en\/9\/97\/Eric_Clapton_OMCOMR.jpg",
                "title" => "One more car, one more raider",
                "author" => "Eric Clapton",
                "genre" => "Rock",
                "year" => "2002"
            ],
            [
                "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
                "title" => "Made in Japan",
                "author" => "Deep Purple",
                "genre" => "Rock",
                "year" => "1972"
            ],
            [
                "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
                "title" => "And Justice for All",
                "author" => "Metallica",
                "genre" => "Metal",
                "year" => "1988"
            ],
            [
                "poster" => "https:\/\/img.discogs.com\/KOBsqQwKiNKH-q927oHMyVdDzSo=\/fit-in\/596x596\/filters:strip_icc():format(jpeg):mode_rgb():quality(90)\/discogs-images\/R-6406665-1418464475-6120.jpeg.jpg",
                "title" => "Hard Wired",
                "author" => "Dave Weckl",
                "genre" => "Jazz",
                "year" => "1994"
            ],
            [
                "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
                "title" => "Bad",
                "author" => "Michael Jackson",
                "genre" => "Pop",
                "year" => "1987"
            ],
        ];
    ?>

    <header>
        <i class="bi bi-spotify"></i>
    </header>

    <main>
        <div class="container">
            <div class="cards-container d-flex align-content-stretch flex-wrap">
                <?php foreach ($discs as $disc) { ?>
                    <div class="card mx-1">
                        <img src="<?php echo $disc['poster'] ?>" class="card-img-top p-3" alt="<?php echo $disc['title'] ?>">
                        <div class="card-body text-center">
                            <h5 class="text-white fw-bold text-uppercase"> <?php echo $disc['title'] ?> </h5>
                            <div class="card-text d-flex flex-column">
                                <div><?php echo $disc['author'] ?></div>
                                <div><?php echo $disc['year'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>