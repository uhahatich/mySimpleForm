<? require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/header.php' ?>

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

<? require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/footer.php' ?>