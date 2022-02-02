<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>php dischi</title>
</head>

<body>
    <div class="container">
        <?php include_once __DIR__ . '/components/header.php'; ?>
        <main>
            <div class="main-container">
                <?php include_once __DIR__ . '/components/cards-php.php'; ?>
            </div>
        </main>
        <?php include_once __DIR__ . '/components/footer.php'; ?>
    </div>
</body>

</html>