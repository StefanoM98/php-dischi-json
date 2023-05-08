<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi json</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="app">
        <header>
            <img src="img/logo-small.svg" alt="">
        </header>
        <main>
            <div class="container">
                <div class="row justify-content-center row-cols-3">
                    <div class="col" v-for="(disk, index) in disks" :key="index">
                        <div class="card d-flex p-4 m-4 text-center align-items-center">
                            <img class="card-img-top" :src="disk.poster" alt="Card image cap">
                            <div class="card-body text-white">
                                <h5 class="card-title">{{disk.title}}</h5>
                                <p class="card-text">{{disk.author}}</p>
                                <p class="card-text">{{ disk.year }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>

</html>