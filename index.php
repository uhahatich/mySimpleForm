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
                        <li class="nav-item header-nav-item"><a href="#" class="nav-link">Регистрация</a></li>
                        <li class="nav-item header-nav-item ms-2"><a href="#" class="nav-link">Авторизация </a></li>
                    </ul>
                </header>
            </div>
        </div>
    </div>
    <div class="container regContainer">
        <h1 class="fs-1 text-center mb-5">Форма регистрации</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label fs-4">Имя пользователя</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-4">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label fs-4">Ваш пароль</label>
                        <input type="password" name="pass" class="form-control" id="pass">
                    </div>
                    <div class="mb-3">
                        <label for="cPass" class="form-label fs-4">Подтвердите пароль</label>
                        <input type="password" name="cPass" class="form-control" id="cPass">
                    </div>
                    <div class="alert alert-danger mt-2" id="errorBlock"></div>
                    <button type="button" class="btn btn-primary fs-4" id="regUser">Регистрация</button>
                </form>
            </div>
        </div>
    </div>









    <script src="/js/main.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/reg.js"></script>

</body>

</html>