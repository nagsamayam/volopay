<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

<!-- Header with nav -->
<header>
    <nav class="navbar">
        <div class="container">
            <div class="pull-left">
                <a href="#!" class="brand">
                    <img src="/images/brand-92x28.png" alt="Volopay">
                </a>
            </div>
            <div class="pull-right">
                <ul>
                    <li><a href="#">SOLUTIONS</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">REQUEST A DEMO</a></li>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="#">KNOW MORE</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Main -->
<main>

    <!-- Section: Banner -->
    <section class="section">
        <div class="primary-banner thumbnail">
            <div class="container">
                <div class="intro st-4">
                    <h1 class="ff-2"><strong>No more</strong><span class="medium">&nbsp;tedious paperwork.</span></h1>

                    <p class="desc-3 sbt-1">AI-based payment card solution that does your expense reports and simplifies
                        business spending.</p>

                    <div class="form-group limited">
                        <input type="text" class="form-control rounded limited" placeholder="Email id"
                               style="padding-right:159px">
                        <button type="button" class="btn floating-btn">Free Trial</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Way to manage expenses -->
    <section class="section">
        <div class="container">
            <h2 class="h1 ff-2 medium center">The most efficient way to manage expenses</h2>

            <div class="row st-3">
                <div class="col sm-12 lg-4 center">
                    <img src="/images/760d17826ed89199d810a08baed78f66.png" alt="way1">

                    <h3 class="h3 ff-2 sbt-2">Payment cards for employees</h3>

                    <p>Distribute virtual or plastic VoloPay cards with custom predefined limits in just a few
                        clicks.</p>
                </div>
                <div class="col sm-12 lg-4 center">
                    <img src="/images/144c88bd3b553b46358b11fc8feb3f6a copy.png" alt="way2">

                    <h3 class="h3 ff-2 sbt-2">Automated expense reports</h3>

                    <p>Real-time notifications remind employees to take an image of the receipt on the go.</p>
                </div>
                <div class="col sm-12 lg-4 center">
                    <img src="/images/7542c94578db9cac99325e62e79c14b3 copy.png" alt="way3">

                    <h3 class="h3 ff-2 sbt-2">Real-time spending overview</h3>

                    <p>See all company spending in one place as it happens and sync it to your accounting system.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Solutions -->
    <section class="section">
        <div class="container">
            <h2 class="h1 ff-2 medium center">Volopay Solutions</h2>

            <div class="center-align st-2">
                <img src="/images/dummy-tabs.jpg" alt="dummy">
            </div>
        </div>
    </section>

    <!-- Section: Steps -->
    <section class="section no-padding">
        <div class="bg steps">
            <div class="container">
                <h2 class="h1 ff-2 medium center">It is as easy as 1 - 2 - 3.</h2>

                <div class="row st-2">
                    <div class="col sm-12 lg-4 center">
                        <div class="box">
                            <span class="circle h3 nos">1</span>

                            <h3 class="h3 ff-2 sbt-3">Add funds</h3>

                            <p>Fill in your basic details and your banking details (IBAN) are automatically generated.
                                Add funds to your VoloPay account via transfer or credit card to spend them later on.
                            </p>
                        </div>
                    </div>
                    <div class="col sm-12 lg-4 center">
                        <div class="box">
                            <span class="circle h3 nos">2</span>

                            <h3 class="h3 ff-2 sbt-3">Define your spending policy</h3>

                            <p>Invite your team and set up the approval workflow that fits your specific needs. You
                                decide who can spend what amount and who can approve which requests.
                            </p>
                        </div>
                    </div>
                    <div class="col sm-12 lg-4 center">
                        <div class="box">
                            <span class="circle h3 nos">3</span>

                            <h3 class="h3 ff-2 sbt-3">Your teams can start paying! </h3>

                            <p>Teammates can now use VoloPay cards to pay for their expenses and save their invoices.
                                All payments will instantly appear in your dashboard in real-time!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Testimonials -->
    <section class="section no-padding">
        <div class="bg testimonials">
            <div class="container">
                <h2 class="h1 ff-2 medium center">Testimonials</h2>

                <p class="desc desc-3">Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut
                    laoreet sodales nisi, quis iaculis nulla iaculis vitae.
                </p>

                <div class="center-align">
                    <img src="/images/dummy-carousel.jpg" alt="dummy">
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer>
    <section class="footer thumbnail">
        <div class="primary">
            <div class="container center-align">
                <h2 class="ff-2 h1">Get started today</h2>

                <p class="desc-3 sbt-1">Sign up today and get 1 month free trial.</p>

                <div class="form-group limited center-block">
                    <input type="text" class="form-control rounded limited" placeholder="Email id"
                           style="padding-right:159px">
                    <button type="button" class="btn floating-btn">Free Trial</button>
                </div>
            </div>
        </div>
        <div class="secondary">
            <div class="container">
                <div class="row">
                    <div class="col sm-12 lg-2">
                        <a href="#">
                            <img src="/images/brand-138x42.png" alt="brand">
                        </a>
                    </div>
                    <div class="col sm-12 lg-4">
                        <menu class="menu">FROM OUR BLOG</menu>
                        <ul>
                            <li style="padding:2px 0 16px;">
                                <em>Fusce vehicula dolor arcu, sit amet blandit dolor mollis nec. Donec viverra eleifend
                                    lacus, vitae ullamcorper metus.</em>
                            </li>
                            <li>
                                <em>Fusce vehicula dolor arcu, sit amet blandit dolor mollis nec. Donec viverra eleifend
                                    lacus, vitae ullamcorper metus.</em>
                            <li>
                        </ul>
                    </div>
                    <div class="col sm-12 lg-2">
                        <menu class="menu">MENU</menu>
                        <ul>
                            <li><a href="#!">Solutions</a></li>
                            <li><a href="#!">About Us</a></li>
                            <li><a href="#!">Blog</a></li>
                            <li><a href="#!">Features</a></li>
                        </ul>
                    </div>
                    <div class="col sm-12 lg-2">
                        <menu class="menu">CONTACT US</menu>
                        <ul>
                            <li><a href="#!">Customer Support</a></li>
                            <li><a href="#!">General Enquiries</a></li>
                            <li><a href="#!">FAQs</a></li>
                            <li><a href="#!">News</a></li>
                        </ul>
                    </div>
                    <div class="col sm-12 lg-2">
                        <menu class="menu">SOCIAL MEDIA</menu>
                        <ul>
                            <li><a href="#!">Facebook</a></li>
                            <li><a href="#!">Twitter</a></li>
                            <li><a href="#!">Linked In</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
</body>
</html>
