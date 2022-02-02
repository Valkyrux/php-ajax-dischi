<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>AJAX Dischi</title>
</head>

<body>
    <div class="container">
        <?php include_once __DIR__ . '/components/header.php'; ?>
        <main>
            <div class="main-container" id="app">
                <select name="select-genre" id="genre-select" v-model="choosedGenre" @change="getAxiosCall()">
                    <option value="All">All</option>
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Metal">Metal</option>
                    <option value="Jazz">Jazz</option>
                </select>
                <div class="card" v-for="disk,index in disks" :key="index">
                    <div><img :src="disk.poster" alt=""></div>
                    <h2>{{ disk.title }}</h2>
                    <h3>{{ disk.author }}</h3>
                    <h3>{{ disk.year }}</h3>
                </div>
            </div>
        </main>
        <?php include_once __DIR__ . '/components/footer.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>