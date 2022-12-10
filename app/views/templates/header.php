<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand fs-2 fw-bold" href="#">CRUD User</a>
        </div>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active fs-5 mx-2" href="<?= BASEURL . '/auth' ?>" aria-current="page" href="#">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active fs-5 mx-2" href="<?= BASEURL . '/auth/logout' ?>" aria-current="page" href="#">Logout</a>
            </li>
        </ul>
    </nav>