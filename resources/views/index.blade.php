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
    <section class="mt-2 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-title text-uppercase font-weight-bold">Почему <span class="main-color"> Нас Выбирают </span></p>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-4">
                    <div class="circle-advantage d-flex align-items-center justify-content-center m-auto">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="my-2 text-center">
                        <h4 class="font-weight-bold main-color text-uppercase">
                            100% гарантия
                        </h4>
                    </div>


                </div>
            </div>
        </div>
    </section>
{{--    Начало Пятого блога--}}
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

        })


    </script>
@endpush
