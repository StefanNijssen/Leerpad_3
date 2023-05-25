<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php';?> 
    

    <main>
        <?php
        $page = $_GET['page'];

        if ($page == 'sport') {
            include 'pages/sport.php';
        } elseif ($page == 'vrijetijdsbesteding') {
            include 'pages/vrijetijdsbesteding.php';
        } elseif ($page == 'game1') {
            include 'pages/game1.php';
        } elseif ($page == 'game2') {
            include 'pages/game2.php';
        }
        ?>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>