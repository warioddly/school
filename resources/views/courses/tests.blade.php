@extends('layouts.app')

@section('title', 'Tests')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tasks</a></li>
                        <li class="breadcrumb-item active">Task Detail</li>
                    </ol>
                </div>
                <h4 class="page-title">Material Detail</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card d-block">
                <div class="card-body">

                    <h3 class="mt-3">Here you can check your skills</h3>

                    <div class="row">
                        <div class="col-6">
                            <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Author</p>
                            <div class="d-flex">
                                <div>
                                    <h5 class="mt-1 font-14">WARIODDLY</h5>
                                </div>
                            </div>

                        </div>

                    </div>

                    <h5 class="mt-3">Overview:</h5>

                    <div class="text-muted mb-4">
                        <p><a href="https://joldo.kg/ru/pdd-kr.html" target="_blank">ПДД КР</a></p>
                        <p><a href="https://joldo.kg/ru/pdd.html" target="_blank">Тест на русском</a></p>
                        <p><a href="https://joldo.kg/ru/onlayn-test-2023-kyrgyzcha.html" target="_blank">Тест на кыргызком</a></p>
                    </p>

                </div>

            </div>


        </div>

    </div>


@endsection
