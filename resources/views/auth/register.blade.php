@extends('auth.layout')

@section('content')
    <section class="auth-section">
        <div class="container">
            <div class="row min-vh-100 d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="card bg-white auth-card">
                        <div class="text-center py-4 btn-main">
                            <h3 class="font-weight-bold text-white text-uppercase">Регистрация <i class="fas fa-user-plus"></i> </h3>
                        </div>
                        <div class="px-3 my-2">
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item mx-2">
                                    <a class="nav-link active btn-main" id="pills-home-tab" data-toggle="pill" href="#user" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Физ. лицо
                                        <i class="fas fa-user"></i>
                                    </a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link btn-main" id="pills-profile-tab" data-toggle="pill" href="#company" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Юр. лицо
                                        <i class="fas fa-building"></i>
                                    </a>
                                </li>

                            </ul>
                            <form>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="px-3 my-2">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold main-color">ФИО</label>
                                                <input type="text" class="form-control main-color" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ФИО">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold main-color">Телефон</label>
                                                <input type="text" class="form-control main-color" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Телефон">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="font-weight-bold main-color">Email</label>
                                                <input type="email" class="form-control main-color" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваша почта">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1" class="font-weight-bold main-color">Пароль</label>
                                                <input type="password" class="form-control main-color" id="exampleInputPassword1" placeholder="Пароль">
                                            </div>

                                            <div class="text-center mt-4">
                                                <button type="submit" class="btn btn-main">Регистрация <i class="fas fa-plus"></i> </button>
                                            </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="px-3 my-2">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold main-color">Наименование</label>
                                            <input type="text" class="form-control main-color" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ФИО">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold main-color">Телефон</label>
                                            <input type="text" class="form-control main-color" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Телефон">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="font-weight-bold main-color">Email</label>
                                            <input type="email" class="form-control main-color" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваша почта">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1" class="font-weight-bold main-color">Пароль</label>
                                            <input type="password" class="form-control main-color" id="exampleInputPassword1" placeholder="Пароль">
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-main">Регистрация <i class="fas fa-plus"></i> </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            </form>
                            <div class="row d-flex">
                                <div class="w-50 my-2 text-center">
                                    <a href="" class="btn main-color">Забыли пароль <i class="fas fa-question"></i> </a>
                                </div>
                                <div class="w-50 my-2 text-center">
                                    <a href="" class="btn main-color">Вход <i class="fas fa-sign-in"></i> </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
