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
    <div id="app">
        <header>
            <i class="bi bi-spotify"></i>
        </header>

        <main>

        <div class="container">

            <!-- Milestone 1 -->
            <!-- <ul v-for="disc in discs">
                    <li class="text-white">{{disc.title}}</li>
                </ul> -->

            <div class="cards-container d-flex align-content-stretch flex-wrap">

                <div class="card mx-1" v-for="disc in discs">
                    <img :src="disc.poster" class="card-img-top p-3" :alt="disc.title">
                    <div class="card-body text-center">
                        <h5 class="text-white fw-bold text-uppercase"> {{disc.title}} </h5>
                        <div class="card-text d-flex flex-column">
                            <div>{{disc.author}}</div>
                            <div>{{disc.year}}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    </div>
    <script src="script.js"></script>
</body>
</html>