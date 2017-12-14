<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <title>{{ config('app.name') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet">
</head>
<body>

<!-- Header with nav -->
<header>
    <nav class="navbar">
        <div class="container">
            <div class="pull-left nav-wrapper">
                <a href="#!" class="brand">
                    <img src="images/brand-light.svg" alt="Volopay" width="92">
                </a>
                <a data-activates="smNav" class="button-collapse pull-right"><i
                            class="material-icons media-middle push-d">&#xE5D2;</i></a>
            </div>

            <!-- sm Navbar -->
            <div id="smNav" class="sm side-nav">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <a class="collapsible-header">
                            <span class="i-block media-middle">SOLUTIONS</span>
                            <span class="md-arrow-drop-down i-block"><i class="material-icons media-middle">&#xE5C5;</i></span>
                        </a>
                        <!-- Collapsible Structure -->
                        <div class="collapsible-body">
                            <a href="#!">Payment cards for employees</a>
                            <a href="#!">Automated expense reports</a>
                            <a href="#!">Real-time spending overview</a>
                        </div>
                    </li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">REQUEST A DEMO</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li>
                        <a class="collapsible-header">
                            <span class="i-block media-middle">know more</span>
                            <span class="md-arrow-drop-down i-block"><i class="material-icons media-middle">&#xE5C5;</i></span>
                        </a>
                        <!-- Collapsible Structure -->
                        <div class="collapsible-body">
                            <a href="#!">Customer support</a>
                            <a href="#!">General enquiries</a>
                            <a href="#!">FAQs</a>
                            <a href="#!">News</a>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- lg Navbar -->
            <div class="lg pull-right">
                <ul>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="solutions" data-beloworigin="true"
                           data-hover="true" data-constrainwidth="false">
                            <span class="i-block media-middle">SOLUTIONS</span>
                            <span class="md-arrow-drop-down i-block"><i class="material-icons media-middle">&#xE5C5;</i></span>
                        </a>

                        <!-- Dropdown Structure -->
                        <ul id="solutions" class="dropdown-content">
                            <li><a href="#!">Payment cards for employees</a></li>
                            <li><a href="#!">Automated expense reports</a></li>
                            <li><a href="#!">Real-time spending overview</a></li>
                        </ul>
                    </li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">REQUEST A DEMO</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="knowMore" data-beloworigin="true"
                           data-hover="true" data-constrainwidth="false">
                            <span class="i-block media-middle">know more</span>
                            <span class="md-arrow-drop-down i-block"><i class="material-icons media-middle">&#xE5C5;</i></span>
                        </a>

                        <!-- Dropdown Structure -->
                        <ul id="knowMore" class="dropdown-content">
                            <li><a href="#!">Customer support</a></li>
                            <li><a href="#!">General enquiries</a></li>
                            <li><a href="#!">FAQs</a></li>
                            <li><a href="#!">News</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Main -->
<main>

    <!-- Large Screen -->
    <div class="lg">
        <!-- Section: Banner -->
        <section class="section">
            <div class="primary-banner thumbnail">
                <div class="container">
                    <div class="intro st-4">
                        <h1 class="h2 ff-2"><strong>No more</strong><span class="medium">&nbsp;tedious paperwork.</span>
                        </h1>

                        <p class="desc-3 sbt-1">AI-based payment card solution that does your expense reports and
                            simplifies business spending.</p>

                        <div class="form-group limited">
                            <input type="text" class="form-control rounded limited" placeholder="Email id"
                                   style="padding-right:145px">
                            <button type="button" class="btn rounded floating-btn">Free Trial</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Way to manage expenses -->
        <section class="section">
            <div class="container">
                <h2 class="h2 ff-2 medium center">The most efficient way to manage expenses</h2>

                <div class="row st-3">
                    <div class="col sm-12 lg-4 center">
                        <img src="images/payment-cards-for-employees.png" alt="way1">

                        <h3 class="h3 ff-2 sbt-2">Payment cards for employees</h3>

                        <p class="desc-2">Distribute virtual or plastic VoloPay cards with custom predefined limits in
                            just a few clicks.</p>
                    </div>
                    <div class="col sm-12 lg-4 center">
                        <img src="images/automated-expense-reports.png" alt="way2">

                        <h3 class="h3 ff-2 sbt-2">Automated expense reports</h3>

                        <p class="desc-2">Real-time notifications remind employees to take an image of the receipt on
                            the go.</p>
                    </div>
                    <div class="col sm-12 lg-4 center">
                        <img src="images/real-time-spending-overview.png" alt="way3">

                        <h3 class="h3 ff-2 sbt-2">Real-time spending overview</h3>

                        <p class="desc-2">See all company spending in one place as it happens and sync it to your
                            accounting system.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Solutions -->
        <section class="section">
            <div class="container grid-10">
                <h2 class="h2 ff-2 medium center">Volopay Solutions</h2>

                <!-- Tabs -->
                <div class="tabs-primary st-2">
                    <div id="solutions" class="center">
                        <ul id="tabs" class="tabs i-block">
                            <li class="tab col sm-2 lg-3">
                                <a class="active" href="#prepaidCards">
                                    <i class="thumbnail t36x36 sol prepaid-cards">&nbsp;</i>
                                    <span class="i-block media-middle bold">Prepaid Cards</span>
                                </a>
                            </li>
                            <li class="tab col sm-2 lg-3">
                                <a href="#automatedExpense">
                                    <i class="thumbnail t36x36 sol automated-expense">&nbsp;</i>
                                    <span class="i-block media-middle bold">Automated Expense</span>
                                </a>
                            </li>
                            <li class="tab col sm-2 lg-3">
                                <a href="#travelExpense">
                                    <i class="thumbnail t36x36 sol travel-expense">&nbsp;</i>
                                    <span class="i-block media-middle bold">Travel Expense</span>
                                </a>
                            </li>
                            <li class="tab col sm-2 lg-3">
                                <a href="#pettyCash">
                                    <i class="thumbnail t36x36 sol petty-cash">&nbsp;</i>
                                    <span class="i-block media-middle bold">Petty Cash</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div id="prepaidCards" class="col sm-12 lg-12">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h3 class="h3">Don't loose a receipt ever again</h3>

                                    <p class="desc-2 sbt-3">
                                        Employees can easily swipe the cards for expenses and get notified to snap a
                                        picture of the receipt immediately. All the expenses get automatically recorded
                                        without any delay.
                                    </p>
                                    <a href="#!" class="btn btn-sm btn-default rounded-sm">
                                        <span class="upper-case media-middle">LEARN MORE</span>
                                        <i class="material-icons media-middle md-18">&#xE5CC;</i>
                                    </a>
                                </div>
                                <div class="media-right media-middle">
                                    <img src="images/w-system-banner.png" alt="System banner" width="512">
                                </div>
                            </div>
                        </div>
                        <div id="automatedExpense" class="col sm-12 lg-12">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h3 class="h3">Automated Expense</h3>

                                    <p class="desc-2 sbt-3">
                                        Employees can easily swipe the cards for expenses and get notified to snap a
                                        picture of the receipt immediately. Employees can easily swipe the cards for
                                        expenses and get notified to snap a picture of the receipt immediately.
                                        Employees can easily swipe
                                        the cards for expenses and get notified to snap a picture of the receipt
                                        immediately. All the expenses get automatically recorded without any delay.
                                        Employees can easily swipe the cards for expenses and get notified
                                        to snap a picture of the receipt immediately.
                                    </p>
                                    <a href="#!" class="btn btn-sm btn-default rounded-sm">
                                        <span class="upper-case media-middle">LEARN MORE</span>
                                        <i class="material-icons media-middle md-18">&#xE5CC;</i>
                                    </a>
                                </div>
                                <div class="media-right media-middle">
                                    <img src="images/w-system-banner.png" alt="System banner" width="512">
                                </div>
                            </div>
                        </div>
                        <div id="travelExpense" class="col sm-12 lg-12">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h3 class="h3">Travel Expense</h3>

                                    <p class="desc-2 sbt-3">
                                        Employees can easily swipe the cards for expenses and get notified to snap a
                                        picture of the receipt immediately.
                                    </p>
                                    <a href="#!" class="btn btn-sm btn-default rounded-sm">
                                        <span class="upper-case media-middle">LEARN MORE</span>
                                        <i class="material-icons media-middle md-18">&#xE5CC;</i>
                                    </a>
                                </div>
                                <div class="media-right media-middle">
                                    <img src="images/w-system-banner.png" alt="System banner" width="512">
                                </div>
                            </div>
                        </div>
                        <div id="pettyCash" class="col sm-12 lg-12">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h3 class="h3">Petty Cash</h3>

                                    <p class="desc-2 sbt-3">
                                        Employees can easily swipe the cards for expenses and get notified to snap a
                                        picture of the receipt immediately. All the expenses get automatically recorded
                                        without any delay. Employees can easily swipe the cards for expenses and get
                                        notified to snap
                                        a picture of the receipt immediately. All the expenses get automatically
                                        recorded without any delay.
                                    </p>
                                    <a href="#!" class="btn btn-sm btn-default rounded-sm">
                                        <span class="upper-case media-middle">LEARN MORE</span>
                                        <i class="material-icons media-middle md-18">&#xE5CC;</i>
                                    </a>
                                </div>
                                <div class="media-right media-middle">
                                    <img src="images/w-system-banner.png" alt="System banner" width="512">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Steps -->
        <section class="section no-padding">
            <div class="bg steps">
                <div class="container grid-10">
                    <h2 class="h2 ff-2 medium center">It is as easy as 1 - 2 - 3.</h2>

                    <div class="row st-2">
                        <div class="col sm-12 lg-4 center">
                            <div class="box">
                                <span class="circle h3 nos center-block">1</span>

                                <h3 class="h3 ff-2 sbt-3">Add funds</h3>

                                <p class="desc-2">Fill in your basic details and your banking details (IBAN) are
                                    automatically generated. Add funds to your VoloPay account via transfer or credit
                                    card to spend them later on.
                                </p>
                            </div>
                        </div>
                        <div class="col sm-12 lg-4 center">
                            <div class="box">
                                <span class="circle h3 nos center-block">2</span>

                                <h3 class="h3 ff-2 sbt-3">Define your spending policy</h3>

                                <p class="desc-2">Invite your team and set up the approval workflow that fits your
                                    specific needs. You decide who can spend what amount and who can approve which
                                    requests.
                                </p>
                            </div>
                        </div>
                        <div class="col sm-12 lg-4 center">
                            <div class="box">
                                <span class="circle h3 nos center-block">3</span>

                                <h3 class="h3 ff-2 sbt-3">Your teams can start paying! </h3>

                                <p class="desc-2">Teammates can now use VoloPay cards to pay for their expenses and save
                                    their invoices. All payments will instantly appear in your dashboard in real-time!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: BLOGS -->
        <section class="section no-padding">
            <div class="bg blogs">
                <div class="container grid-10">
                    <h2 class="h2 ff-2 medium center">BLOGS</h2>

                    <div class="row st-2">
                        <div class="col lg-6">
                                <span class="box">
                                    <img src="images/How to make the right decisions by intuition (the easiest way).jpeg"
                                         alt="How to make the right decisions by intuition" class="responsive-img">
                                </span>
                            <h4 class="h4 ff-2 sbt-4">How to make the right decisions by intuition (the easiest
                                way)?</h4>

                            <p class="desc-3 sb-p">With only 15 minutes of observation John Gottman, a psychologist, has
                                been successfully able to predict if the couple will be together in 15 years...
                            </p>

                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#!" class="circle t36x36">
                                        <img src="images/maxim-dsouza.png" alt="Maxim Dsouza"
                                             class="circle responsive-img">
                                    </a>
                                </div>
                                <div class=" media-body media-middle">
                                    <a href="#!" class="user-name">Maxim Dsouza</a>
                                    <small class="time-span">Oct 31</small>
                                </div>
                            </div>
                        </div>
                        <div class="col lg-6">
                                <span class="box">
                                    <img src="images/How to achieve results by delegating effectively.jpeg"
                                         alt="How to make the right decisions by intuition" class="responsive-img">
                                </span>
                            <h4 class="h4 ff-2 sbt-4">How to achieve results by delegating effectively</h4>

                            <p class="desc-3 sb-p">Sam recently got promoted as the manager for his team after his
                                tremendous performance year after year as an individual performer. In his new role as a
                                manager...
                            </p>

                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#!" class="t36x36">
                                        <img src="images/maxim-dsouza.png" alt="Maxim Dsouza"
                                             class="circle responsive-img">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <a href="#!" class="user-name">Maxim Dsouza</a>
                                    <small class="time-span">Oct 31</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Small Screen -->

    <div class="sm">
        <!--Section: Banner -->
        <section class="section">
            <div class="primary-banner">
                <div class="container">
                    <div class="intro">
                        <h1 class="h4 ff-2"><strong>No more</strong><span class="medium">&nbsp;tedious paperwork.</span>
                        </h1>

                        <p class="desc-3 sbt-1">AI-based payment card solution that does your expense reports and
                            simplifies business spending.</p>
                        <button type="button" class="btn rounded floating-btn">Free Trial</button>
                    </div>
                </div>
            </div>
            <div class="primary-banner-bg thumbnail">&nbsp;</div>
        </section>

        <!-- Section: Way to manage expenses -->
        <section class="section">
            <div class="container">
                <h2 class="h4 ff-2 medium center">The most efficient way to manage expenses</h2>

                <div class="row st-2">
                    <div id="ways" class="carousel carousel-slider center">
                        <div class="carousel-item" href="#way1!">
                            <div class="col sm-12 center">
                                <img src="images/payment-cards-for-employees.png" alt="way1">

                                <h3 class="h4 ff-2 sbt-2">Payment cards for employees</h3>

                                <p class="desc-2">Distribute virtual or plastic VoloPay cards with custom predefined
                                    limits in just a few clicks.</p>
                            </div>
                        </div>
                        <div class="carousel-item" href="#way2!">
                            <div class="col sm-12 center">
                                <img src="images/automated-expense-reports.png" alt="way2">

                                <h3 class="h4 ff-2 sbt-2">Automated expense reports</h3>

                                <p class="desc-2">Real-time notifications remind employees to take an image of the
                                    receipt on the go.</p>
                            </div>
                        </div>
                        <div class="carousel-item" href="#way3!">
                            <div class="col sm-12 center">
                                <img src="images/real-time-spending-overview.png" alt="way3">

                                <h3 class="h4 ff-2 sbt-2">Real-time spending overview</h3>

                                <p class="desc-2">See all company spending in one place as it happens and sync it to
                                    your accounting system.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Solutions -->
        <section class="section">
            <div class="container grid-10">
                <h2 class="h4 ff-2 medium center">Volopay Solutions</h2>

                <!-- Tabs -->
                <div class="tabs-primary st-1">
                    <div id="solutions" class="center">
                        <ul id="mTabs" class="tabs i-block">
                            <li class="tab col sm-2">
                                <a class="active" href="#prepaidCards">
                                    <i class="thumbnail t36x36 sol prepaid-cards">&nbsp;</i>
                                    <span class="i-block media-middle bold">Prepaid Cards</span>
                                </a>
                            </li>
                            <li class="tab col sm-2">
                                <a href="#automatedExpense">
                                    <i class="thumbnail t36x36 sol automated-expense">&nbsp;</i>
                                    <span class="i-block media-middle bold">Automated Expense</span>
                                </a>
                            </li>
                            <li class="tab col sm-2">
                                <a href="#travelExpense">
                                    <i class="thumbnail t36x36 sol travel-expense">&nbsp;</i>
                                    <span class="i-block media-middle bold">Travel Expense</span>
                                </a>
                            </li>
                            <li class="tab col sm-2">
                                <a href="#pettyCash">
                                    <i class="thumbnail t36x36 sol petty-cash">&nbsp;</i>
                                    <span class="i-block media-middle bold">Petty Cash</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div id="prepaidCards" class="col sm-12">
                            <figure>
                                <img src="images/w-system-banner.png" alt="System banner" class="responsive-img">
                            </figure>
                            <h3 class="h4 sb-p">Don't loose a receipt ever again</h3>
                            <a href="#!" class="btn btn-sm btn-default rounded-sm">
                                <span class="upper-case media-middle">LEARN MORE</span>
                                <i class="material-icons media-middle md-18">&#xE5CC;</i>
                            </a>
                        </div>
                        <div id="automatedExpense" class="col sm-12">
                            <figure>
                                <img src="images/w-system-banner.png" alt="System banner" class="responsive-img">
                            </figure>
                            <h3 class="h4 sb-p">Automated Expense</h3>
                            <a href="#!" class="btn btn-sm btn-default rounded-sm">
                                <span class="upper-case media-middle">LEARN MORE</span>
                                <i class="material-icons media-middle md-18">&#xE5CC;</i>
                            </a>
                        </div>
                        <div id="travelExpense" class="col sm-12">
                            <figure>
                                <img src="images/w-system-banner.png" alt="System banner" class="responsive-img">
                            </figure>
                            <h3 class="h4 sb-p">Travel Expense</h3>
                            <a href="#!" class="btn btn-sm btn-default rounded-sm">
                                <span class="upper-case media-middle">LEARN MORE</span>
                                <i class="material-icons media-middle md-18">&#xE5CC;</i>
                            </a>
                        </div>
                        <div id="pettyCash" class="col sm-12">
                            <div>
                                <img src="images/w-system-banner.png" alt="System banner" class="responsive-img">

                                <h3 class="h4 sb-p">Petty Cash</h3>
                                <a href="#!" class="btn btn-sm btn-default rounded-sm">
                                    <span class="upper-case media-middle">LEARN MORE</span>
                                    <i class="material-icons media-middle md-18">&#xE5CC;</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Steps -->
        <section class="section no-padding">
            <div class="bg steps">
                <div class="container grid-10">
                    <h2 class="h4 ff-2 medium center">It is as easy as 1 - 2 - 3.</h2>

                    <div class="st-1">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header">
                                    <span class="circle h3 nos i-block media-middle">1</span>

                                    <h3 class="h6 ff-2 i-block media-middle">Add funds</h3>
                                </div>
                                <div class="collapsible-body">
                                    <p class="desc-2">
                                        Fill in your basic details and your banking details (IBAN) are automatically
                                        generated. Add funds to your VoloPay account via transfer or credit card to
                                        spend them later on.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    <span class="circle h3 nos i-block media-middle">2</span>

                                    <h3 class="h6 ff-2 i-block media-middle">Define your spending policy</h3>
                                </div>
                                <div class="collapsible-body">
                                    <p class="desc-2">
                                        Invite your team and set up the approval workflow that fits your specific needs.
                                        You decide who can spend what amount and who can approve which requests.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">
                                    <span class="circle h3 nos i-block media-middle">3</span>

                                    <h3 class="h6 ff-2 i-block media-middle">Your teams can start paying!</h3>
                                </div>
                                <div class="collapsible-body">
                                    <p class="desc-2">
                                        Teammates can now use VoloPay cards to pay for their expenses and save their
                                        invoices. All payments will instantly appear in your dashboard in real-time!
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: BLOGS -->
        <section class="section no-padding">
            <div class="bg blogs">
                <div class="container grid-10">
                    <h2 class="h4 ff-2 medium center">BLOGS</h2>

                    <div class="row st-1">
                        <div class="col sm-12">
                                <span class="box">
                                    <img src="images/How to make the right decisions by intuition (the easiest way).jpeg"
                                         alt="How to make the right decisions by intuition" class="responsive-img">
                                </span>
                            <h4 class="h6 ff-2 sbt-4">How to make the right decisions by intuition (the easiest
                                way)?</h4>

                            <p>With only 15 minutes of observation John Gottman, a psychologist, has been successfully
                                able to predict if the couple will be together in 15 years...
                            </p>

                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#!" class="circle t36x36">
                                        <img src="images/maxim-dsouza.png" alt="Maxim Dsouza"
                                             class="circle responsive-img">
                                    </a>
                                </div>
                                <div class=" media-body media-middle">
                                    <a href="#!" class="user-name">Maxim Dsouza</a>
                                    <small class="time-span">Oct 31</small>
                                </div>
                            </div>
                        </div>
                        <div class="col sm-12 st-1">
                                <span class="box">
                                    <img src="images/How to achieve results by delegating effectively.jpeg"
                                         alt="How to make the right decisions by intuition" class="responsive-img">
                                </span>
                            <h4 class="h6 ff-2 sbt-4">How to achieve results by delegating effectively</h4>

                            <p>Sam recently got promoted as the manager for his team after his tremendous performance
                                year after year as an individual performer. In his new role as a manager...
                            </p>

                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#!" class="t36x36">
                                        <img src="images/maxim-dsouza.png" alt="Maxim Dsouza"
                                             class="circle responsive-img">
                                    </a>
                                </div>
                                <div class="media-body media-middle">
                                    <a href="#!" class="user-name">Maxim Dsouza</a>
                                    <small class="time-span">Oct 31</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- Footer -->
<footer>
    <section class="section thumbnail">
        <div class="bg primary">
            <div class="container grid-8 center-align">
                <h2 class="h2 ff-2">Get started today</h2>

                <p class="desc-3 sbt-1">Sign up today and get 1 month free trial.</p>

                <div class="form-group limited center-block lg">
                    <input type="text" class="form-control rounded limited" placeholder="Email id"
                           style="padding-right:145px">
                    <button type="button" class="btn rounded floating-btn">Free Trial</button>
                </div>
                <div class="form-group center-block sm">
                    <button type="button" class="btn rounded">Free Trial</button>
                </div>
            </div>
        </div>
        <div class="bg secondary">
            <div class="container grid-8">
                <div class="row">
                    <div class="col sm-12 lg-4 m-sb">
                        <a href="#" class="i-block">
                            <img src="images/brand-dark.svg" alt="Volopay" width="138">
                        </a>

                        <div class="media media-2">
                            <div class="media-left">
                                <i class="material-icons md-16 push-d">&#xE55F;</i>
                            </div>
                            <div class="media-body">
                                6 Raffles Quay, #16-01,<br> Singapore. 048580
                            </div>
                        </div>

                        <div class="media media-2">
                            <div class="media-left media-middle">
                                <i class="material-icons md-16 push-d">&#xE0E1;</i>
                            </div>
                            <div class="media-body media-middle">
                                <a href="mailto:hi@volopay.com" class="link">hi@volopay.com</a>
                            </div>
                        </div>

                        <div class="media media-2">
                            <div class="media-left media-middle">
                                <i class="material-icons md-16 push-d">&#xE325;</i>
                            </div>
                            <div class="media-body media-middle">+91 98765 43210
                            </div>
                        </div>
                    </div>

                    <div class="col sm-6 lg-3">
                        <menu class="menu">CONTACT US</menu>
                        <ul>
                            <li><a href="#!">Customer Support</a></li>
                            <li><a href="#!">General Enquiries</a></li>
                            <li><a href="#!">FAQs</a></li>
                            <li><a href="#!">News</a></li>
                        </ul>
                    </div>
                    <div class="col sm-6 lg-3">
                        <menu class="menu">SOCIAL MEDIA</menu>
                        <ul>
                            <li>
                                <a href="#!">
                                    <i class="icons-facebook"><img src="images/icons-facebook.svg" alt="Facebook"></i>
                                    <span class="i-block media-middle">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="icons-facebook"><img src="images/icons-twitter.svg" alt="Twitter"></i>
                                    <span class="i-block media-middle">Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="icons-facebook"><img src="images/icons-linkedin.svg" alt="Linked In"></i>
                                    <span class="i-block media-middle">Linked In</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="{{ asset('js/frontend.min.js') }}"></script>
</body>
</html>
