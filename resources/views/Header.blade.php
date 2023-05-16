<!DOCTYPE HTML>
<html>

<head>
    <title>{{ trans('main-trans.title') }}</title>
    <link rel="stylesheet" href="{{ url('styles/header.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body class="hero-anime">

    <div class="navigation-wrap bg-light start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">

                        <a class="navbar-brand" href="#" target="_blank"><img src="{{ url('images/logo.png') }}"
                                alt=""></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                        role="button" aria-haspopup="true"
                                        aria-expanded="false">{{ trans('main-trans.Home') }}</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">{{ trans('main-trans.Action') }}</a>
                                        <a class="dropdown-item"
                                            href="#">{{ trans('main-trans.Another-action') }}</a>
                                        <a class="dropdown-item"
                                            href="#">{{ trans('main-trans.Something-else-here') }}</a>
                                    </div>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#">{{ trans('main-trans.Portfolio') }}</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#">{{ trans('main-trans.Agency') }}</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                        role="button" aria-haspopup="true"
                                        aria-expanded="false">{{ trans('main-trans.Services') }}</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">{{ trans('main-trans.Action') }}</a>
                                        <a class="dropdown-item"
                                            href="#">{{ trans('main-trans.Another-action') }}</a>
                                    </div>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#">{{ trans('main-trans.Journal') }}</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#">{{ trans('main-trans.Contact') }}</a>
                                </li>
                                <div class="language-selector my-2 mx-4">
                                    <div class="current-language">
                                        <img src="{{ asset('images/flags/' . LaravelLocalization::getCurrentLocale() . '.png') }}"
                                            alt="{{ LaravelLocalization::getCurrentLocaleNative() }}" />
                                        <span>{{ LaravelLocalization::getCurrentLocaleNative() }}</span>
                                    </div>
                                    <ul class="language-list">
                                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    <img src="{{ asset('images/flags/' . $localeCode . '.png') }}"
                                                        alt="{{ $properties['native'] }}" />
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5">
    </div>
</body>
<script src="{{ url('scripts/header.js') }}"></script>

</html>
