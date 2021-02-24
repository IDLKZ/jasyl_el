@extends('user.layout')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-3">
            @include('user.sidebar')
        </div>
        <div class="col-md-9">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Личный кабинет</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://yandex-images.naydex.net/n5G3Cb139/6a7b09Yxd/LGu7Z7qWt8DhiEuW-H5reJggYgeBVxTbMRoWMUl7lxeVfeSZmL7dkrhfb-jWdIEir0DJFb-z19vitscOEeDwDTErvx7yxoq1ofUTs4kCh5B9nNLvbKOVO7GzB1ApetYT_UGdBAWqwQdlKmZpPvi1D6apoAmzspZ7z-uKjgEUpc1YjlpHomYyaIlxrz48yssINUBeO0RHVbv9J6d88XL6qiUp7ehgni1TGbbe_VbIAT8ivYRRKzrWX_N7SnYZRA2xYEreD7L2-sjdBb9aTGq_CKH43rdUx4W_nZOHNHkyDpbhdb3UfLYZvzl2EvX6yEWrgqU8ee9uGlNbp7a-gbTpUbTWctsOljZghW0_3tSS1-BpQG67BFMh68G3x5CZXqJGDbmRNLgG0Vth8mo9kvAJ3z6ZfD3PtjZzY4vOWhFMWT3E4upvSsqCzIV9S2rUEvdA9Vya9-y7-a9Zjys0DY7eLiHp6eigApk_qdouCbZMvXtSgbSFhwamay9Dfg4pfJVdPALix05-Fszpcbc-oO5LyK0c9h-0Q-U_yRfP8IVCVs5ZaUUooDbt08H6ZokS0DEX0hmwNXfOupfbzyqufbQJzYRKftdmluJ8nSH75kD-v8DFSBZXYCshD_0D30iBxlpe2SFNcLDKndPBWrIpjjQBc7J5NBV3QoojN1eWUsX8dfXIDjbnOuqK3Bn590KkkmMgZTyK1xh7jc8FF890ScKaon0pLSDAvvHfWXJ-4a4E0btysfDll36-GyM_Cr7FSCVdBFLuVy6etixF0fd-5JrfNGUgHq_oewGzgUdrTIneqrJtaeFg5CblN-mmjq3G7LGXBrWQeX-mfgujywbSXeR5MVRiRlvOUqJYcQGbOsxy12T9iO57NMO1Exm_I_yhVlr63fVFEFyCLZOdmuKNxjC9E26F8BV_Fp73uzsKolVE9WWscsKP_nqG6PWtU1YoXvfckSBiT2TDqT9B33t0mV7o" width="100%" height="150" alt="">
                        </div>
                        <div class="col-md-9">
                            <h6><strong>Admin Admin</strong></h6>

                            <small>Почта</small><br>
                            <p><b>jasylel@gmail.com</b></p>
                            <small>Посадил деревьев</small><br>
                            <p><b>100 (шт)</b></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Посаженные деревья</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://www.memorie.md/uploads/posts/2020-06/1592507792_brevno4.jpg" width="100%" height="120" alt="">
                        </div>
                        <div class="col-md-6">
                            <h6><strong>TITLE</strong></h6>
                            <p>До конца сборов осталось <b>7000</b> из <b>7000</b></p>
                            <p>Начали: <b>15.02.2020</b> Закончили: <b>18.02.2020</b></p>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
