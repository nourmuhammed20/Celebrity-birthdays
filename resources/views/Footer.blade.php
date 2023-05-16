<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ trans('main-trans.title') }}</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <link rel='stylesheet' href='https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css'>
    <link rel="stylesheet" href="{{ url('styles/footer.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">{{ trans('main-trans.Get') }}</h3>
                            <h6>{{ trans('main-trans.miss') }}</h6>
                            <form action="#" class="f_subscribe_two mailchimp mb-4" method="post" novalidate="true"
                                _lpchecked="1">
                                <input type="text" name="EMAIL" class="form-control memail"
                                    placeholder="{{ trans('main-trans.Email') }}">
                                <button class="btn btn_get btn_get_two"
                                    type="submit">{{ trans('main-trans.Subscribe') }}</button>
                                <p class="mchimp-errmessage" style="display: none;"></p>
                                <p class="mchimp-sucmessage" style="display: none;"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">{{ trans('main-trans.Download') }}</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">{{ trans('main-trans.Company') }}</a></li>
                                <li><a href="#">{{ trans('main-trans.Android') }}</a></li>
                                <li><a href="#">{{ trans('main-trans.ios') }}</a></li>
                                <li><a href="#">{{ trans('main-trans.Desktop') }}</a></li>
                                <li><a href="#">{{ trans('main-trans.Projects') }}</a></li>
                                <li><a href="#">{{ trans('main-trans.tasks') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s"
                            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">{{ trans('main-trans.Help') }}</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">{{ trans('main-trans.FAQ') }}</a></li>
                                <li><a href="#">{{ trans('main-trans.Term') }}</a></li>
                                <li><a href="#">{{ trans('main-trans.Reporting') }}</a></li>
                                <li><a href="#">{{ trans('main-trans.Documentation') }}</a></li>
                                <li><a href="#">{{ trans('main-trans.Support') }}</a></li>
                                <li><a href="#">{{ trans('main-trans.Privacy') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s"
                            style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">{{ trans('main-trans.Team') }}</h3>
                            <div class="f_social_icon">
                                <a href="#" class="fab fa-facebook"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-linkedin"></a>
                                <a href="#" class="fab fa-pinterest"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 col-sm-7">
                        <p class="mb-0 f_400">{{ trans('main-trans.rights') }}</p>
                    </div>
                    <div class="col-lg-6 col-sm-5 text-right">
                        <p>Made with ❤ by <a href="#" target="_blank" class="text-primary">Web Based Team</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- partial -->

</body>

</html>
