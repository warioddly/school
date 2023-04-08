@extends('layouts.app')

@section('title', 'Chat')

@section('content')

    <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Chat</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Chat</h4>
                </div>
            </div>
        </div>

    <div class="row">


        @include('chat.components.left_aside')


        <div class="col-xxl-6 col-xl-12 order-xl-2">
            <div class="card">
                <div class="card-body">

                    <ul class="conversation-list" data-simplebar style="max-height: 537px">
                        <li class="clearfix">
                            <div class="chat-avatar">
                                <img src="assets/images/users/avatar-5.jpg" class="rounded" alt="Shreyu N" />
                                <i>10:00</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Shreyu N</i>
                                    <p>
                                        Hello!
                                    </p>
                                </div>
                            </div>
                            <div class="conversation-actions dropdown">
                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class='uil uil-ellipsis-v'></i></button>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Copy Message</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix odd">
                            <div class="chat-avatar">
                                <img src="assets/images/users/avatar-1.jpg" class="rounded" alt="dominic" />
                                <i>10:01</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Dominic</i>
                                    <p>
                                        Hi, How are you? What about our next meeting?
                                    </p>
                                </div>
                            </div>
                            <div class="conversation-actions dropdown">
                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class='uil uil-ellipsis-v'></i></button>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Copy Message</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="chat-avatar">
                                <img src="assets/images/users/avatar-5.jpg" class="rounded" alt="Shreyu N" />
                                <i>10:01</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Shreyu N</i>
                                    <p>
                                        Yeah everything is fine
                                    </p>
                                </div>
                            </div>
                            <div class="conversation-actions dropdown">
                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class='uil uil-ellipsis-v'></i></button>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Copy Message</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix odd">
                            <div class="chat-avatar">
                                <img src="assets/images/users/avatar-1.jpg" class="rounded" alt="dominic" />
                                <i>10:02</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Dominic</i>
                                    <p>
                                        Wow that's great
                                    </p>
                                </div>
                            </div>
                            <div class="conversation-actions dropdown">
                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class='uil uil-ellipsis-v'></i></button>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Copy Message</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="chat-avatar">
                                <img src="assets/images/users/avatar-5.jpg" alt="Shreyu N" class="rounded" />
                                <i>10:02</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Shreyu N</i>
                                    <p>
                                        Let's have it today if you are free
                                    </p>
                                </div>
                            </div>
                            <div class="conversation-actions dropdown">
                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class='uil uil-ellipsis-v'></i></button>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Copy Message</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix odd">
                            <div class="chat-avatar">
                                <img src="assets/images/users/avatar-1.jpg" alt="dominic" class="rounded" />
                                <i>10:03</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Dominic</i>
                                    <p>
                                        Sure thing! let me know if 2pm works for you
                                    </p>
                                </div>
                            </div>
                            <div class="conversation-actions dropdown">
                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class='uil uil-ellipsis-v'></i></button>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Copy Message</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="chat-avatar">
                                <img src="assets/images/users/avatar-5.jpg" alt="Shreyu N" class="rounded" />
                                <i>10:04</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Shreyu N</i>
                                    <p>
                                        Sorry, I have another meeting scheduled at 2pm. Can we have it
                                        at 3pm instead?
                                    </p>
                                </div>
                            </div>
                            <div class="conversation-actions dropdown">
                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class='uil uil-ellipsis-v'></i></button>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Copy Message</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="chat-avatar">
                                <img src="assets/images/users/avatar-5.jpg" alt="Shreyu N" class="rounded" />
                                <i>10:04</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Shreyu N</i>
                                    <p>
                                        We can also discuss about the presentation talk format if you have some extra mins
                                    </p>
                                </div>
                            </div>
                            <div class="conversation-actions dropdown">
                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class='uil uil-ellipsis-v'></i></button>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Copy Message</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li class="clearfix odd">
                            <div class="chat-avatar">
                                <img src="assets/images/users/avatar-1.jpg" alt="dominic" class="rounded" />
                                <i>10:05</i>
                            </div>
                            <div class="conversation-text">
                                <div class="ctext-wrap">
                                    <i>Dominic</i>
                                    <p>
                                        3pm it is. Sure, let's discuss about presentation format, it would be great to finalize today.
                                        I am attaching the last year format and assets here...
                                    </p>
                                </div>
                                <div class="card mt-2 mb-1 shadow-none border text-start">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded">
                                                                        .ZIP
                                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);"
                                                   class="text-muted fw-bold">Hyper-admin-design.zip</a>
                                                <p class="mb-0">2.3 MB</p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="javascript:void(0);"
                                                   class="btn btn-link btn-lg text-muted">
                                                    <i class="dripicons-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="conversation-actions dropdown">
                                <button class="btn btn-sm btn-link" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class='uil uil-ellipsis-v'></i></button>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Copy Message</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                    </ul>

                   @include('chat.fragments.message_bar')

                </div>
            </div>
        </div>


        @include('chat.components.user_details')

    </div>


@endsection
