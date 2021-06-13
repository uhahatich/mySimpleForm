<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simpleForm</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/reset.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <header class="d-flex flex-wrap justify-content-end py-3 mb-4 border-bottom">
                    <ul class="nav nav-pills">
                        <? if (empty($_SESSION['userID'])) : ?>
                            <li class="nav-item header-nav-item"><a href="../index.php" class="nav-link">Регистрация</a></li>
                            <li class="nav-item header-nav-item ms-2"><a href="../auth.php" class="nav-link">Авторизация </a></li>
                        <? else : ?>
                            <form action="/phpScripts/exit.php">
                                <button type="submit" class="btn btn-primary fs-4" id="exitBtn">Выйти</button>
                            </form>
                        <? endif; ?>
                    </ul>
                </header>
            </div>
        </div>
    </div>