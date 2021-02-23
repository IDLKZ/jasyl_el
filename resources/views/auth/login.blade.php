@extends('auth.layout')

@section('content')
<section class="auth-section">
    <div class="container">
        <div class="row min-vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card bg-white auth-card">
                    <div class="text-center py-4 btn-main">
                        <h3 class="font-weight-bold text-white text-uppercase">Вход <i class="fas fa-sign-in"></i> </h3>
                    </div>
                    <div class="px-3 my-2">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold main-color">Email</label>
                                <input type="email" class="form-control main-color" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваша почта">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold main-color">Пароль</label>
                                <input type="password" class="form-control main-color" id="exampleInputPassword1" placeholder="Пароль">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label main-color" for="exampleCheck1">Запомнить меня</label>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-main">Войти <i class="fas fa-unlock"></i> </button>
                            </div>
                        </form>
                        <div class="row d-flex">
                            <div class="w-50 my-2 text-center">
                                <a href="" class="btn main-color">Забыли пароль <i class="fas fa-question"></i> </a>
                            </div>
                            <div class="w-50 my-2 text-center">
                                <a href="" class="btn main-color">Регистрация <i class="fas fa-user-plus"></i> </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
