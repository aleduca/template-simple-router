<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->e($title)?></title>
        <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
</head>
<body>

        <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

     <?=$this->insert('partials/humberger');?>
     <?=$this->insert('partials/header');?>
     <?=$this->insert('partials/menu_search');?>
     
     
     <?=$this->section('content')?>
     
     <?=$this->insert('partials/footer');?>
     
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>