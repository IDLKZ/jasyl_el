@extends("layouts.app")
@section("content")
    @push("style")
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    @endpush
{{--    Первый блог--}}
<section class="mb-5 mt-2">
    <div class="container-fluid bg-gray-100">
        <div class="row py-md-2">
            <div class="col-md-6 pl-md-5 pl-sm-0 align-self-center px-md-5 py-md-2 py-sm-4">
                <h4 class="font-weight-bold">Наш план — триллион деревьев</h4>
                <p class="my-2 ml-md-2 ml-sm-0">
                    Основой целью деятельности объединения
                    является сохранение и приумножение зеленого
                    фонда страны, а также экологическое воспитание
                    подрастающего поколения
                </p>
                <button class="btn btn-main py-2">
                    Посадить лес <i class="fas fa-tree ml-2"></i></button>
            </div>
            <div class="col-md-6 order-sm-1 pr-0 order-first order-sm-last py-sm-2">
                <div class="bg-main"></div>
            </div>
        </div>

    </div>
</section>
{{--    Первый блог--}}

{{--Второй блог--}}
    <section class="mt-2 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-title text-uppercase font-weight-bold">Выберите <span class="main-color"> подходящий продукт </span></p>
                <p class="text-subtitle font-weight-bold">Мы делаем лучшие экологоческие проекты под ключ</p>
            </div>
        </div>
        <div class="row my-2">
            @for($i = 0; $i<3; $i++)
            <div class="col-md-4 my-2">
                <div class="card">
                    <div class="bg-card" style="background-image: url('/assets/image/forest1.jpg')">
                        <button class="btn btn-main bg-card-button font-weight-bold">Отличный старт</button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Зеленый Герой</h4>
                        <div class="my-2">
                            <button class="btn btn-sm bg-tag-button my-1">Первые шаги в экологии</button>
                            <button class="btn btn-sm bg-tag-button my-1">Могут все</button>
                            <button class="btn btn-sm bg-tag-button my-1">Выбор 123 компаний</button>
                        </div>
                        <p class="card-text font-weight-bold">Мощная корпоративная ответсвеность:</p>
                        <ul>
                            <li>до 10 гектар</li>
                            <li>до 35 000 посаженных деревьев</li>
                        </ul>
                        <p class="card-text font-weight-bold">Мощная корпоративная ответсвеность:</p>
                        <ul>
                            <li>стрим новостных поводов</li>
                            <li>стрим hi-res профессиональных</li>
                            <li>фотоматериалов высокого разрешения</li>
                            <li>сертификаты</li>
                            <li>видеобращения от лесничеств</li>
                             <li>таблоиды спонсора на участках</li>
                        </ul>
                        <p class="card-text font-weight-bold">Гарантии качества:</p>
                        <ul>
                            <li>тщательно отобранные лесничества</li>
                            <li>проверка на отсутствие двойного
                                финансирования</li>
                            <li>проверка репутации и надежности</li>
                            <li>мониторинг исполнения на месте</li>
                            <li>контроль соблюдения лучших мировых
                                практик лесовосстановления</li>
                            <li>мониторинг исполнения на месте</li>
                            <li>контроль соблюдения лучших мировых
                                практик лесовосстановления</li>
                        </ul>
                        <div class="row">
                            <div class="col-md-8">
                                <a class="main-color font-weight-bold">250 000 тг/месяц</a>
                                <small>минимальная подписка 5 лет</small>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="#" class="btn btn-sm btn-main text-left">Выбрать</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            @endfor
        </div>
    </div>
    </section>
{{--    Конец Второго блога--}}

{{--    Начало Третьего блога--}}
<section class="mt-2 mb-5 bg-white">
    <div class="container ">
        <div class="row py-5">
            <div class="col-md-12">
                <p class="text-title text-uppercase font-weight-bold">Наши <span class="main-color"> клиенты </span></p>
                <p class="text-subtitle font-weight-bold">Они доверяют нам</p>
            </div>
            <div class="col-md-12">
                <div class="client">
                    <div><img src="/assets/image/1.jpg" height="250px" width="250px"></div>
                    <div><img src="/assets/image/2.jpg" height="250px" width="250px"></div>
                    <div><img src="/assets/image/3.jpg" height="250px" width="250px"></div>
                    <div><img src="/assets/image/4.jpg" height="250px" width="250px"></div>
                </div>
            </div>

        </div>
    </div>
</section>
{{--    Конец Третьего блога--}}

{{--    Начало Четвертого блога--}}
    <section class="mt-2 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-title text-uppercase font-weight-bold">Лучшие места для <span class="main-color"> посадки деревьев </span></p>
                </div>
            </div>
            <div class="row my-2">
                @for($i = 0; $i<2; $i++)
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <div class="bg-card" style="background-image: url('/assets/image/forest1.jpg')">
                                <button class="btn btn-main bg-card-button font-weight-bold">Помогаем Валдаю</button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Пригородное</h4>
                                <div class="my-2">
                                    <button class="btn btn-sm bg-tag-button my-1">супер лесничий</button>
                                    <button class="btn btn-sm bg-tag-button my-1">национальный парк</button>
                                    <button class="btn btn-sm bg-tag-button my-1">уникальное место</button>
                                </div>
                                <p class="card-text">
                                    Очень знаменитый и посещаемый
                                    Национальный Парк находится между
                                    Петербургом и Москвой. В 2004 году ему
                                    присвоен высокий статус международного
                                    биосферного резервата в рамках программы ЮНЕСКО
                                </p>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-main text-left"> Посадить лес <i class="fas fa-tree ml-2"></i></a>
                                    </div>


                            </div>
                        </div>

                    </div>
                @endfor
            </div>
        </div>
    </section>
{{--    Конец Четвертого блога--}}

{{--Начало Пятого блога--}}
    <section class="mt-2 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-title text-uppercase font-weight-bold">Почему <span class="main-color"> Нас Выбирают </span></p>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4 my-2">
                    <div class="circle-advantage d-flex align-items-center justify-content-center m-auto">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="my-2 text-center">
                        <h4 class="font-weight-bold main-color text-uppercase">
                            100% гарантия
                        </h4>
                        <p>
                            посадки, регулярных уходов и сохранности
                            вашего леса
                        </p>
                    </div>


                </div>
                <div class="col-md-4 my-2">
                    <div class="circle-advantage d-flex align-items-center justify-content-center m-auto">
                        <i class="fas fa-language"></i>
                    </div>
                    <div class="my-2 text-center">
                        <h4 class="font-weight-bold main-color text-uppercase">
                            На 168 языках
                        </h4>
                        <p>
                            подготовим сертификаты и отчеты
                        </p>
                    </div>


                </div>
                <div class="col-md-4 my-2">
                    <div class="circle-advantage d-flex align-items-center justify-content-center m-auto">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <div class="my-2 text-center">
                        <h4 class="font-weight-bold main-color text-uppercase">
                            Цена
                        </h4>
                        <p>
                            без посредников и фирм-однодневок,
                            самая дешевая посадка с гарантией
                            приживаемости
                        </p>
                    </div>


                </div>
                <div class="col-md-4 my-2">
                    <div class="circle-advantage d-flex align-items-center justify-content-center m-auto">
                        <i class="fas fa-tree"></i>
                    </div>
                    <div class="my-2 text-center">
                        <h4 class="font-weight-bold main-color text-uppercase">
                            Прозрачность
                        </h4>
                        <p>
                            до посадки и спустя сто лет
                        </p>
                    </div>


                </div>
                <div class="col-md-4 my-2">
                    <div class="circle-advantage d-flex align-items-center justify-content-center m-auto">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="my-2 text-center">
                        <h4 class="font-weight-bold main-color text-uppercase">
                            Гибкость
                        </h4>
                        <p>
                            Настроим все наши процессы под ваши
                            цели и задачи
                        </p>
                    </div>


                </div>
                <div class="col-md-4 my-2">
                    <div class="circle-advantage d-flex align-items-center justify-content-center m-auto">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <div class="my-2 text-center">
                        <h4 class="font-weight-bold main-color text-uppercase">
                            Миллионы
                        </h4>
                        <p>
                            деревьев и сотни посадок
                        </p>
                    </div>


                </div>

            </div>
        </div>
    </section>
{{--Конец Пятого блога--}}

{{--    Начало Шестого блога--}}
    <section class="mt-2 mb-5 py-2 bg-white">
        <div class="container my-2">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-title text-uppercase font-weight-bold">Сертификат</p>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-3">
                    <div class="certificate"></div>

                </div>
                <div class="col-md-9 d-flex align-items-center">
                    <div>
                        <p>Оплачивая посадку леса, вы получаете профессиональный сертификат с подписью лесничего, координатами вашего леса и количеством поглощенного СO2. Сертификат может быть выдан как один на весь участок, так и на каждое дерево на этом участке.
                            Дарите сертификаты, украшайте ими офис, гордитесь собой!</p>
                        <a href="#" class="btn btn-main text-left"> Посадить лес <i class="fas fa-tree ml-2"></i></a>
                        <a href="#" class="btn text-left"> Посмотреть сертификат <i class="fas fa-eye ml-2"></i></a>

                    </div>
                </div>

            </div>
        </div>
    </section>
    {{--    Конец Шестого блога--}}

{{--    Начало Седьмого блога--}}
    <section class="mt-2 mb-5">
        <div class="container my-2">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-title text-uppercase font-weight-bold">Часто задаваемые <span class="main-color"> вопросы </span></p>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card my-2">
                            <div class="card-header bg-white" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <p class="font-weight-bold text-dark"><span class="main-color"> Вопрос: </span> Как это работает?</p>

                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Основой целью деятельности объединения является сохранение и приумножение зеленого фонда страны, а также экологическое воспитание подрастающего поколения
                                </div>
                            </div>
                        </div>

                        <div class="card my-2">
                            <div class="card-header bg-white" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <p class="font-weight-bold text-dark"><span class="main-color"> Вопрос: </span> Что входит в стоимость?</p>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>1. Вырубка погибшего леса и очистка территории (в некоторых проектах территория уже очищена);</p>
                                    <p>2. Подготовка почвы - нарезка борозд;</p>
                                    <p>3. Закупка саженцев;</p>
                                    <p>4. Посадка саженцев;</p>
                                    <p>5. Механизированный уход за саженцами в течение 5 лет;</p>
                                    <p>6. Налоги и комиссия нашей компании для регистрации новых пострадавших территорий, контроля за посадками и последующим пятилетним уходом и улучшения качества космического снимка участка.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card my-2">
                            <div class="card-header bg-white" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <p class="font-weight-bold text-dark"><span class="main-color"> Вопрос: </span>Почему такая низкая стоимость?</p>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Потому что
                                </div>
                            </div>
                        </div>
                        <div class="card my-2">
                            <div class="card-header bg-white" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        <p class="font-weight-bold text-dark"><span class="main-color"> Вопрос: </span>Почему стоимость проектов разная?</p>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Потому что
                                </div>
                            </div>

                        </div>
                        </div>
                </div>
                </div>
            </div>
    </section>
{{--    Конец Седьмого блога--}}

{{--    Начало Восьмого блога --}}
<section class="mt-2 mb-5 bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-md-end justify-content-sm-center">
                <div>
                    <p>Свяжитесь с нами</p>
                    <p>+7-777-777-77-77</p>
                    <p>salem@saitmail.kz</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="w-100 px-2 border-left border-dark">
                    <p class="text-title text-uppercase font-weight-bold">Заказать Звонок</p>
                    <form>
                        <div class="form-group">
                            <label for="inputPhone">Ваш телефон</label>
                            <input type="text" class="form-control" id="inputPhone" aria-describedby="emailHelp" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Ваше имя</label>
                            <input type="text" class="form-control" id="inputName" aria-describedby="emailHelp" name="name">
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="option" name="option">
                            <label class="form-check-label" for="option">Я принимаю условия передачи информации</label>
                        </div>
                        <button type="submit" class="btn btn-main w-100">Заказать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{--    Конец Восьмого блога --}}
@endsection
@push("script")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('.client').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                centerMode: false,
                // variableWidth: true
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    ]
            });
            $('.pill-button').hover(function(){
                $(this).find('.second').toggleClass('text-white');
                $(this).find('.first').toggleClass('text-white');
            });
        })


    </script>
@endpush
