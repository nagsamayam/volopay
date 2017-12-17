@extends('layouts.'.$page->layout)

@section('content')
    <div class="lg">
        <section class="section">
            <div class="container grid-10">
                <div class="media">
                    <div class="media-body media-middle">
                        <h1 class="h2 ff-2 semi-bold">Exepense Management</h1>

                        <p class="desc-3">No more month-end surprises for you.</p>
                    </div>
                    <div class="lg media-right media-middle">
                        <figure class="detail-img">
                            <img src="images/automated-expense.png" alt="Exepense Management" width="500">
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
                        <img src="images/automated-expense.png" alt="Exepense Management" class="responsive-img"
                             width="300">
                    </div>
                    <div class="col sm-12">
                        <h1 class="h3 ff-2 semi-bold sb-1">Exepense Management</h1>

                        <p class="desc-3">No more month-end surprises for you.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="section section-2 responsive">
        <div class="container grid-10">
            <div class="row">
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i
                                    class="thumbnail t48x48 icon-sprites-calendar"></i></span>

                        <p class="media-body semi-bold">Set daily/weekly/monthly budgets to suit each department and
                            employee individually.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i
                                    class="thumbnail t48x48 icon-sprites-speed"></i></span>

                        <p class="media-body semi-bold">Create custom expense views to apply context and speed up
                            approving.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i
                                    class="thumbnail t48x48 icon-sprites-fraud"></i></span>

                        <p class="media-body semi-bold">Our system learns from exceptions to predict outliers and hence
                            prevents fraud.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i
                                    class="thumbnail t48x48 icon-sprites-notification"></i></span>

                        <p class="media-body semi-bold">Employee gets notified of any policy violations made before the
                            expense is submitted, so that you can simply either approve or reject the expenses without
                            having to waste your time.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i
                                    class="thumbnail t48x48 icon-sprites-fraud"></i></span>

                        <p class="media-body semi-bold">See all corporate card spending as it happens to help prevent
                            fraud and reconcile throughout the month.</p>
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
                        <h2 class="h2 ff-2 semi-bold mb-2">Benefits Of AI integrated Expense Management Tools</h2>
                    </div>
                    <div class="r-6 media-middle">
                        <ul class="chevron">
                            <li>No need to share one corporate card.</li>
                            <li>No need to collect personal information.</li>
                            <li>No more overspending.</li>
                            <li>No more employee reimbursements.</li>
                            <li>No receipts and paperwork.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection