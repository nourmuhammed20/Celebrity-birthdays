@extends('layout')


@section('content')
    <div>
        <div class="home mb-5 bg-light">
            <div class="container mt-5 pt-5">
                <h1 class="text-center my-3">{{ trans('main-trans.Registration-Form') }}</h1>
                <div class="card border-danger text-bg-danger mb-3 ">
                    <div class="card-body text-danger p-2 ">
                        <h5 class="card-title text-center text-light mb-0">{{ trans('main-trans.All-required') }}</h5>
                    </div>
                </div>

                <form method="POST" action="{{ route('register') }}" id="form" enctype="multipart/form-data"
                    name="my-form">
                    @csrf
                    <div class="row d-flex flex-wrap justify-content-center ">
                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" id="fname_id" name="name"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Example: John doe">
                                <label for="fname_id">{{ trans('main-trans.Name') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input required type="text" class="form-control" id="uname_id" name="username"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Must Be Unique">
                                <label for="uname_id">{{ trans('main-trans.username') }}</label>
                                <div id="uname_response"> </div>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input required class="form-control" id="email_id" name="email" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Must Contain @ , .com">
                                <label for="email_id">{{ trans('main-trans.Email') }}</label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" id="phone" name="phone"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Only accept Egyptian Numbers without +20">
                                <label for="phone">{{ trans('main-trans.Phone') }}</label>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="password" required class="form-control" id="password_id" name="password"
                                    data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                    title="Must contain : <ul><li>Eight characters or more</li><li>Number & Special char</li><li>Upper/lower case chars</li></ul>" />
                                <label for="password_id">{{ trans('main-trans.Password') }}</label>
                            </div>
                        </div>


                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="password" required class="form-control" id="password2_id" name="repassword"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Must Match previous password">
                                <label for="password2_id">{{ trans('main-trans.Confirm') }}</label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-3 ">
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" id="address_id" name="address"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Example : 29 cairo st">
                                <label for="address_id">{{ trans('main-trans.Address') }}</label>
                            </div>
                        </div>

                        <div class="col-md-5 mt-3 ">

                            <div class="form-floating mb-3">
                                <input type="date" required class="form-control" id="bd_id" name="birthday"
                                    data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                    title="Valid date between : <br> 1900-2023">
                                <label for="bd_id">{{ trans('main-trans.birthday') }}</label>
                            </div>
                        </div>
                        <div class="col-md-1 d-flex align-items-center justify-content-end">
                            <button type="button" class="rounded-2 search-btn p-1" id="search-btn" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="Search Actor's Birthday">
                                <img class="search-gif w-75" src="{{ url('images/search.gif') }}" alt="">
                            </button>
                        </div>

                        <div class="input-group my-3">
                            <input type="file" required class="form-control" name="image" accept="image/*"
                                id="img_id" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Only Image Extensions Available">
                        </div>

                    </div>
                    <button class="btn btn-outline-primary mb-3" type="submit"
                        id="submitBtn">{{ trans('main-trans.Submit') }}</button>
                </form>

                <div class="card d-none mb-3 ">
                    <div class="card-body  p-2 ">
                        <h5 class="card-title text-center text-light mb-0" id="message"></h5>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" style="background-color: blueviolet;">
                        <div class='text-center my-2 text-light fs-3 fw-bold'>{{ trans('main-trans.Famous') }}</div>
                    </div>
                    <div class="card-body mx-2">
                        <div class="row" id="names" style="display: flex; flex-wrap: nowrap; overflow-x: auto;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                @if (session()->has('message'))
                    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                        data-bs-autohide="true" data-bs-delay="5000">
                        <div class="toast-header">
                            <img src="{{ url('images/notification.gif') }}" class="rounded me-2" alt="...">
                            <strong class="me-auto">{{ trans('main-trans.notification') }}</strong>
                            <small>{{ trans('main-trans.from') }} {{ now()->second }} {{ trans('main-trans.sec') }}
                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </small>
                        </div>
                        <div class="toast-body">
                            {{ session('message') }}
                        </div>
                    </div>
                @endif

                @if (session()->has('toast'))
                    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                        data-bs-autohide="true" data-bs-delay="5000">
                        <div class="toast-header">
                            <img src="{{ url('images/notification.gif') }}" class="rounded me-2" alt="...">
                            <strong class="me-auto">{{ trans('main-trans.notification') }}</strong>
                            <small>{{ trans('main-trans.from') }} {{ now()->second }} {{ trans('main-trans.sec') }}
                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </small>
                        </div>
                        <div class="toast-body">
                            {{ session('toast') }}
                        </div>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true"
                        data-bs-autohide="true" data-bs-delay="5000">
                        <div class="toast-header">
                            <img src="{{ url('images/notification.gif') }}" class="rounded me-2" alt="...">
                            <strong class="me-auto">{{ trans('main-trans.notification') }}</strong>
                            <small>{{ trans('main-trans.from') }} {{ now()->second }} {{ trans('main-trans.sec') }}
                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </small>
                        </div>
                        <div class="toast-body">
                            {{ session('error') }}
                        </div>
                    </div>
                @endif

            </div>
        </div>
    @endsection
