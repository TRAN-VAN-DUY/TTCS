<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <title>Perfume Shop</title>
    
</head>
<body>
    <div class="wrapper">
        <?php
            session_start();
            include("../admincp/config/config.php");
            include("header.php");
            include("menu.php");
            include("main.php");
            include("footer.php");
        ?>

        
    </div>
</body>
</html>     