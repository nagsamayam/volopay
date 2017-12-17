@extends('layouts.'.$page->layout)
@section('content')
    <div class="lg">
        <section class="section">
            <div class="container grid-10">
                <div class="media">
                    <div class="media-body media-middle">
                        <h1 class="h2 ff-2 semi-bold">Petty Cash</h1>
                        <p class="desc-3">Simplify and track your petty cash.</p>
                    </div>
                    <div class="lg media-right media-middle">
                        <figure class="detail-img">
                            <img src="images/petty-cash.png" alt="Petty Cash" width="500">
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
                        <img src="images/petty-cash.png" alt="Petty Cash" class="responsive-img" width="300">
                    </div>
                    <div class="col sm-12">
                        <h1 class="h3 ff-2 semi-bold sb-1">Petty Cash</h1>
                        <p class="desc-3">Simplify and track your petty cash.</p>
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
                        <p class="media-body semi-bold">Employees get Volopay expense cards, pre-loaded with money. Which can distributed within various departments.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i class="thumbnail t48x48 icon-sprites-travel"></i></span>
                        <p class="media-body semi-bold">They use the card for a variety of expenses with respect to their department.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i class="thumbnail t48x48 icon-sprites-receipt"></i></span>
                        <p class="media-body semi-bold">Employees can take a quick photo of the receipt and generate expense reports with a click of a button.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i class="thumbnail t48x48 icon-sprites-notification"></i></span>
                        <p class="media-body semi-bold">Pivot between Live Reports to see expenses logically sorted by employee, project, client, etc. for faster review.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i class="thumbnail t48x48 icon-sprites-system"></i></span>
                        <p class="media-body semi-bold">Accountants can easily view the expenses categorised in one place. No more reciept hunting for them.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i class="thumbnail t48x48 icon-sprites-fraud"></i></span>
                        <p class="media-body semi-bold">Our AI enbled software also does the work of Identifying outliers which helps in detecting and avoiding fraudulent activities.</p>
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
                        <h2 class="h2 ff-2 semi-bold mb-2">Benefits of AI-integrated Petty Cash Management</h2>
                    </div>
                    <div class="r-6 media-middle">
                        <ul class="chevron">
                            <li>No more cash slips and logs.</li>
                            <li>No more risks of theft or loss.</li>
                            <li>No more overspending.</li>
                            <li>No reimbursements or replenishments.</li>
                            <li>No paperwork.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection