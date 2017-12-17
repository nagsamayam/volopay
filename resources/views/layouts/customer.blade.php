<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ full_title($page->title) }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $page->meta_description }}">
    <meta name="keywords" content="{{ $page->meta_keywords }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">
    @if(ga_tracking_id())
        <script src="https://www.googletagmanager.com/gtag/js?id=<?php echo ga_tracking_id(); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', "<?php echo  ga_tracking_id(); ?>");
        </script>
    @endif
    <link href="{{ asset('css/frontend.min.css') }}" rel="stylesheet">
</head>

<body>
<header>
    <nav class="navbar">
        <div class="container">
            <div class="pull-left nav-wrapper">
                <a href="/" class="brand">
                    <img src="{{ asset('images/brand-light.svg') }}" alt="Volopay" width="140">
                </a><a data-activates="smNav" class="button-collapse pull-right"><i
                            class="material-icons media-middle push-d">&#xE5D2;</i></a>
            </div>
            <div id="smNav" class="sm side-nav">
                <ul class="collapsible" data-collapsible="accordion">
                    <li><a class="collapsible-header{{uri_exists([
                    'prepaid-cards', 'exepense-management', 'travel-expense', 'petty-cash', 'cutom-api', 'digital-marketing-expense', 'salary-disbursement'
                    ]) ? ' active' : ''}}"><span class="i-block media-middle">SOLUTIONS</span> <span
                                    class="md-arrow-drop-down i-block"><i class="material-icons media-middle">
                                    &#xE5C5;</i></span></a>

                        <div class="collapsible-body"><a href="prepaid-cards">Prepaid Cards</a> <a
                                    href="exepense-management">Exepense Management</a> <a
                                    href="travel-expense">Travel Expense</a> <a href="petty-cash">Petty
                                Cash</a> <a href="cutom-api">Cutom API</a> <a
                                    href="digital-marketing-expense">Digital Marketing Expense</a> <a
                                    href="salary-disbursement">Salary Disbursement</a>
                        </div>
                    </li>
                    <li><a href="/features"{{set_active('features')}}>Features</a>
                    </li>
                    <li><a href="https://medium.com/blog-volopay-co" target="_blank">Blog</a>
                    </li>
                    <li><a href="/about-us"{{set_active('about-us')}}>ABOUT US</a>
                    </li>
                    <li><a href="https://volopay.typeform.com/to/b2uP5J" target="_blank">Request a Demo</a>
                    </li>
                    <li><a href="/contact-us"{{set_active('about-us')}}>CONTACT US</a>
                    </li>
                </ul>
            </div>
            <div class="lg pull-right">
                <ul>
                    <li><a class="dropdown-button{{uri_exists([
                    'prepaid-cards', 'exepense-management', 'travel-expense', 'petty-cash', 'cutom-api', 'digital-marketing-expense', 'salary-disbursement'
                    ]) ? ' active' : ''}}" href="#!" data-activates="solutions" data-beloworigin="true"
                           data-hover="true" data-constrainwidth="false"><span
                                    class="i-block media-middle">SOLUTIONS</span> <span
                                    class="md-arrow-drop-down i-block"><i class="material-icons media-middle">
                                    &#xE5C5;</i></span></a>
                        <ul id="solutions" class="dropdown-content">
                            <li><a href="prepaid-cards">Prepaid Cards</a>
                            </li>
                            <li><a href="exepense-management">Exepense Management</a>
                            </li>
                            <li><a href="travel-expense">Travel Expense</a>
                            </li>
                            <li><a href="petty-cash">Petty Cash</a>
                            </li>
                            <li><a href="cutom-api">Cutom API</a>
                            </li>
                            <li><a href="digital-marketing-expense">Digital Marketing Expense</a>
                            </li>
                            <li><a href="salary-disbursement">Salary Disbursement</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/features" {{set_active('features')}}>Features</a>
                    </li>
                    <li><a href="https://medium.com/blog-volopay-co" target="_blank">Blog</a>
                    </li>
                    <li><a href="/about-us" {{set_active('about-us')}}>ABOUT US</a>
                    </li>
                    <li><a href="https://volopay.typeform.com/to/b2uP5J" target="_blank">Request a Demo</a>
                    </li>
                    <li><a href="contact-us" {{set_active('contact-us')}}>CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>
    @include('includes._footer')
</footer>
<script>
    window.fcSettings = {
        token: "<?php echo config('services.fresh_chat.token'); ?>",
        host: "https://wchat.freshchat.com",
        config: {
            headerProperty: {
                backgroundColor: '#FF0042'
            }
        }
    };
</script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="https://wchat.freshchat.com/js/widget.js"></script>
<script src="{{ asset('js/frontend.min.js') }}"></script>
</body>
</html>