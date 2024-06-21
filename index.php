<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'header.php' ; ?>
<main>  
    <?php 
    if (isset($_GET['page'])) {
        $page = basename($_GET['page']);
        $pagePath = 'pages/' . $page . '.php';
        if(file_exists( $pagePath)){
            include $pagePath;
        }else {
            echo "<p>La page demandée n'existe pas.</p>";
        }
    }else {
            include 'pages/acceuil.php';
        }
    ?>
</main>

<?php include 'footer.php' ; ?>
</body>
</html>