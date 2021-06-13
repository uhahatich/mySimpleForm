<? session_start() ?>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/header.php' ?>
<? if (empty($_SESSION['userID'])) : ?>
    <div class="container regContainer">
        <h1 class="fs-1 text-center mb-5">Форма авторизации</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-4">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label fs-4">Ваш пароль</label>
                        <input type="password" name="pass" class="form-control" id="pass">
                    </div>
                    <div class="alert alert-danger mt-2" id="errorBlock"></div>
                    <button type="button" class="btn btn-primary fs-4" id="authUser">Авторизация</button>
                </form>
            </div>
        </div>
    </div>
<? else : ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <h1> <? echo $_SESSION['userID'] ?> </h1>

            </div>

        </div>

    </div>
<? endif; ?>

<? require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/footer.php' ?>