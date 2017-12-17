@extends('layouts.customer')

@section('content')
    <div class="lg">
        <section class="section">
            <div class="primary-banner thumbnail">
                <div class="container">
                    <div class="intro st-4">
                        <h1 class="h2 semi-bold ff-2"><strong>No more</strong><div class="rw-words"><span class="medium">tedious Paperwork.</span> <span class="medium">Stacks of receipts.</span> <span class="medium">Reimbursements.</span></div></h1>
                        <p class="desc-3 sbt-1">AI-based payment card solution that does your expense reports and simplifies business spending.</p>
                        <div class="form-group limited">
                            <input type="text" class="form-control rounded limited" placeholder="Email id" style="padding-right:145px"> <a href="https://volopay.typeform.com/to/b2uP5J" target="_blank" class="btn rounded floating-btn">Free Trial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <h2 class="h2 ff-2 semi-bold center">The most efficient way to manage expenses</h2>
                <div class="row st-10">
                    <div class="col lg-4 center">
                        <img src="images/payment-cards-for-employees.png" alt="way1" height="144">
                        <h4 class="h4 ff-2 semi-bold sbt-2">AI-powered cards for employees</h4>
                        <p class="desc-2">Distribute virtual or plastic volopay cards with custom predefined limits in just a few clicks.</p>
                    </div>
                    <div class="col lg-4 center">
                        <img src="images/automated-expense-reports.png" alt="way2" height="144">
                        <h4 class="h4 ff-2 semi-bold sbt-2">Automated expense reports</h4>
                        <p class="desc-2">Real-time notifications remind employees to take an image of the receipt on the go.</p>
                    </div>
                    <div class="col lg-4 center">
                        <img src="images/real-time-spending-overview.png" alt="way3" height="144">
                        <h4 class="h4 ff-2 semi-bold sbt-2">Real-time spending overview</h4>
                        <p class="desc-2">See all company spending in one place as it happens and sync it to your accounting system.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container grid-10">
                <h2 class="h2 ff-2 semi-bold center">Volopay Solutions</h2>
                <div id="solutions" class="tabs-wrapper">
                    <ul id="tabs" class="tabs i-block">
                        <li class="tab"><a class="active" href="#prepaidCards" title="Prepaid Cards"><i class="thumbnail t36x36 sol prepaid-cards">&nbsp;</i> <span class="i-block media-middle bold">Prepaid Cards</span></a>
                        </li>
                        <li class="tab"><a href="#automatedExpense" title="Automated Expense"><i class="thumbnail t36x36 sol automated-expense">&nbsp;</i> <span class="i-block media-middle bold">Automated Expense</span></a>
                        </li>
                        <li class="tab"><a href="#travelExpense" title="Travel Expense"><i class="thumbnail t36x36 sol travel-expense">&nbsp;</i> <span class="i-block media-middle bold">Travel Expense</span></a>
                        </li>
                        <li class="tab"><a href="#pettyCash" title="Petty cash"><i class="thumbnail t36x36 sol petty-cash">&nbsp;</i> <span class="i-block media-middle bold">Petty cash</span></a>
                        </li>
                    </ul>
                    <div id="prepaidCards">
                        <div class="media">
                            <div class="media-body media-middle">
                                <h4 class="h4 ff-2 semi-bold">Don't loose a receipt ever again</h4>
                                <p class="desc-2 sbt-3">Employees can easily swipe the cards for expenses and get notified to snap a picture of the receipt immediately. All the expenses get automatically recorded and categorized without any delay.</p><a href="prepaid-cards" class="btn btn-sm btn-default rounded-sm"><span class="upper-case media-middle">LEARN MORE</span> <i class="material-icons media-middle md-18">&#xE5CC;</i></a>
                            </div>
                            <div class="media-right media-middle" style="max-height:300px">
                                <img src="images/m-system.png" alt="System banner" height="300">
                            </div>
                        </div>
                    </div>
                    <div id="automatedExpense">
                        <div class="media">
                            <div class="media-body media-middle">
                                <h4 class="h4 ff-2 semi-bold">Gain full control over all the expenses of your employees</h4>
                                <p class="desc-2 sbt-3">Track all the expenses in real-time to avoid any surprises. Speed up the submission process for your employees by using technology like OCR and geo-locations. Our system learns from exceptions to predict outliers and prevent fraud.</p><a href="exepense-management" class="btn btn-sm btn-default rounded-sm"><span class="upper-case media-middle">LEARN MORE</span> <i class="material-icons media-middle md-18">&#xE5CC;</i></a>
                            </div>
                            <div class="media-right media-middle">
                                <img src="images/automated-expense.png" alt="automated-expense" height="300">
                            </div>
                        </div>
                    </div>
                    <div id="travelExpense">
                        <div class="media">
                            <div class="media-body media-middle">
                                <h4 class="h4 ff-2 semi-bold">Report and submit expenses the smart way</h4>
                                <p class="desc-2 sbt-3">Provide your employees with prepaid travel cards and enable them to upload receipts on the go. You can also configure policy expense rules that warn or prevent submission unless all relevant information is completed.</p><a href="travel-expense" class="btn btn-sm btn-default rounded-sm"><span class="upper-case media-middle">LEARN MORE</span> <i class="material-icons media-middle md-18">&#xE5CC;</i></a>
                            </div>
                            <div class="media-right media-middle">
                                <img src="images/travel.png" alt="travel-expense" height="300">
                            </div>
                        </div>
                    </div>
                    <div id="pettyCash">
                        <div class="media">
                            <div class="media-body media-middle">
                                <h4 class="h4 ff-2 semi-bold">Stop worrying about Petty cash</h4>
                                <p class="desc-2 sbt-3">Monitor department/branch wise cash balances and expenses in real time. Customizable settings allow you to set daily, weekly or monthly budgets by category, team or any other settings and also allows you to distribute petty cash to them digitally with one click.</p><a href="petty-cash" class="btn btn-sm btn-default rounded-sm"><span class="upper-case media-middle">LEARN MORE</span> <i class="material-icons media-middle md-18">&#xE5CC;</i></a>
                            </div>
                            <div class="media-right media-middle">
                                <img src="images/petty-cash.png" alt="petty-cash" height="300">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section no-padding">
            <div class="bg light">
                <div class="container grid-10">
                    <h2 class="h2 ff-2 semi-bold center">Simple Setup</h2>
                    <div class="row offset-lr-1 st-7">
                        <div class="col lg-4 center">
                            <div class="box"><span class="circle h3 nos center-block">1</span>
                                <h4 class="h4 ff-2 semi-bold sbt-3">Add funds</h4>
                                <p class="desc-2">Fill in your basic details and your banking details (IBAN) are automatically generated. Add funds to your Volopay account via transfer or credit card to spend them later on.</p>
                            </div>
                        </div>
                        <div class="col lg-4 center">
                            <div class="box"><span class="circle h3 nos center-block">2</span>
                                <h4 class="h4 ff-2 semi-bold sbt-3">Define your spending policy</h4>
                                <p class="desc-2">Invite your team and set up the approval workflow that fits your specific needs. You get to decide the limits and approval flows for all kind of expenses.</p>
                            </div>
                        </div>
                        <div class="col lg-4 center">
                            <div class="box"><span class="circle h3 nos center-block">3</span>
                                <h4 class="h4 ff-2 semi-bold sbt-3">Your teams can start paying!</h4>
                                <p class="desc-2">Teammates can now use Volopay cards to pay for their expenses and save their invoices. All payments will instantly appear in your dashboard in real-time!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section no-padding">
            <div class="bg blogs">
                <div class="container grid-10">
                    <h2 class="h2 ff-2 semi-bold center">BLOGS</h2>
                    <div class="row st-7 offset-lr-1">
                        <div class="col lg-6"><span class="box"><a href="http://wpblog.volopay.co/?p=168" target="_blank" title="Artificial Intelligence and you" style="background-image:url(images/artificial-intelligence.jpg)" class="thumbnail tfullx240">&nbsp;</a></span>
                            <h4 class="h4 ff-2 semi-bold sbt-4"><a href="http://wpblog.volopay.co/?p=168" target="_blank" title="Artificial Intelligence and you">Artificial Intelligence and you</a></h4>
                            <p class="desc-3 sb-2">Upon hearing the words "Artificial Intelligence" most of us instantly assume some sort of an inhuman power dominating us all...</p>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="http://wpblog.volopay.co/?p=168" target="_blank" class="circle t36x36">
                                        <img src="images/brand-square.png" alt="Volopay" class="circle responsive-img">
                                    </a>
                                </div>
                                <div class="media-body media-middle"><a href="http://wpblog.volopay.co/?p=168" target="_blank" class="user-name">Volopay</a>  <small class="time-span">Nov 15</small>
                                </div>
                            </div>
                        </div>
                        <div class="col lg-6"><span class="box"><a href="http://wpblog.volopay.co/?p=187" target="_blank" title="Don't make those expense reports ever again!" style="background-image:url(images/expense-reports.jpg)" class="thumbnail tfullx240"></a></span>
                            <h4 class="h4 ff-2 semi-bold sbt-4"><a href="http://wpblog.volopay.co/?p=187" target="_blank" title="Don't make those expense reports ever again!">Don't make those expense reports ever again!</a></h4>
                            <p class="desc-3 sb-2">Business trips are fun for most of the part - you get to grow your business, meet new people, face new challenges and lot more.</p>
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="http://wpblog.volopay.co/?p=187" target="_blank" class="t36x36">
                                        <img src="images/brand-square.png" alt="Volopay" class="circle responsive-img">
                                    </a>
                                </div>
                                <div class="media-body media-middle"><a href="http://wpblog.volopay.co/?p=187" target="_blank" class="user-name">Volopay</a>  <small class="time-span">Oct 30</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="sm">
@endsection