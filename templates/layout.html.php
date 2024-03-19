<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?? '' ?>">
</head>

<body>
    <main>
        <?php require '../templates/' . $page . '.html.php';  ?>
    </main>
</body>

</html>