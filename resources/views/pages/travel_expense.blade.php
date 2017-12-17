@extends('layouts.'.$page->layout)

@section('content')
    <div class="lg">
        <section class="section">
            <div class="container grid-10">
                <div class="media">
                    <div class="media-body media-middle">
                        <h1 class="h2 ff-2 semi-bold">Travel Expense</h1>
                        <p class="desc-3">No more overspending or reimbursements.</p>
                    </div>
                    <div class="lg media-right media-middle">
                        <figure class="detail-img">
                            <img src="images/travel.png" alt="Digital Marketing Expense" width="500">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="sm">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col sm-12 sb-3">
                        <img src="images/travel.png" alt="Digital Marketing Expense" class="responsive-img" width="300">
                    </div>
                    <div class="col sm-12">
                        <h1 class="h3 ff-2 semi-bold sb-1">Travel Expense</h1>
                        <p class="desc-3">No more overspending or reimbursements.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="section section-2 responsive">
        <div class="container grid-10">
            <div class="row">
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i class="thumbnail t48x48 icon-sprites-card"></i></span>
                        <p class="media-body semi-bold">Employees get Volopay expense cards, pre-loaded with money.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i class="thumbnail t48x48 icon-sprites-travel"></i></span>
                        <p class="media-body semi-bold">They use the card for a variety of travel expenses like airfare, hotel, food etc.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i class="thumbnail t48x48 icon-sprites-receipt"></i></span>
                        <p class="media-body semi-bold">Employees can take a quick photo of the receipt and generate expense reports with a click of a button.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i class="thumbnail t48x48 icon-sprites-notification"></i></span>
                        <p class="media-body semi-bold">They get notified of any policy violations made before the expense is submitted, so that you can simply either approve or reject the expenses without having to waste your time.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i class="thumbnail t48x48 icon-sprites-system"></i></span>
                        <p class="media-body semi-bold">The Trips dashboard gives you a holistic view of business travel costs by trip for your entire organization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section no-padding responsive">
        <div class="bg light">
            <div class="container grid-10">
                <div class="responsive-media">
                    <div class="r-6 media-middle">
                        <h2 class="h2 ff-2 semi-bold mb-2">Benefits of AI-integrated travel expense management</h2>
                    </div>
                    <div class="r-6 media-middle">
                        <ul class="chevron">
                            <li>No need to share one corporate card.</li>
                            <li>No need to collect personal information.</li>
                            <li>No more overspending.</li>
                            <li>No more employee reimbursements.</li>
                            <li>No more receipts and paperwork.</li>
                            <li>No more fraudulent activities.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection