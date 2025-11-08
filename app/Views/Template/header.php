<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Easy-shop' ?></title>
     <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/bootstrap/css/bootstrap.css'); ?>">
</head>
<body>
    <header>
     
      
    <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a <?php echo base_url(); ?> class="nav-link disabled" aria-disabled="true">sign</a>
                    </div>
                </div>
            </div>
        </nav>


    </header>
    <main>