@extends('layouts.app')

@section('title', 'Notifications')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                        <li class="breadcrumb-item active">Notifications</li>
                    </ol>
                </div>
                <h4 class="page-title">Notifications</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @include('notifications.fragments.left_aside')

                    <div class="page-aside-right">

                        @include('notifications.fragments.right_aside')

                        <div class="mt-3">
                            <ul class="email-list">

                                @include('notifications.components.notification-item')

                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-7 mt-1">
                                Showing 1 - 20 of 289
                            </div> <!-- end col-->
                            <div class="col-5">
                                <div class="btn-group float-end">
                                    <button type="button" class="btn btn-light btn-sm"><i
                                            class="mdi mdi-chevron-left"></i></button>
                                    <button type="button" class="btn btn-info btn-sm"><i
                                            class="mdi mdi-chevron-right"></i></button>
                                </div>
                            </div> <!-- end col-->
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>

    @include('notifications.fragments.compose_modal')

@endsection
