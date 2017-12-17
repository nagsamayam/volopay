@extends('layouts.'.$page->layout)
@section('content')
    <div class="lg">
        <section class="section">
            <div class="container grid-10">
                <div class="media">
                    <div class="media-body media-middle">
                        <h1 class="h2 ff-2 semi-bold">Salary Disbursement</h1>

                        <p class="desc-3">Distribute salaries to your employees with just one click.</p>
                    </div>
                    <div class="lg media-right media-middle">
                        <figure class="detail-img">
                            <img src="images/salary-disbursement.png" alt="Salary Disbursement" width="500">
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
                        <img src="images/salary-disbursement.png" alt="Salary Disbursement" class="responsive-img"
                             width="300">
                    </div>
                    <div class="col sm-12">
                        <h1 class="h3 ff-2 semi-bold sb-1">Salary Disbursement</h1>

                        <p class="desc-3">Distribute salaries to your employees with just one click.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="section section-2 responsive">
        <div class="container grid-10">
            <div class="row">
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i class="thumbnail t48x48 icon-sprites-load-card"></i></span>

                        <p class="media-body semi-bold">Load the sum allocated for salaries on Volopay cards.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i
                                    class="thumbnail t48x48 icon-sprites-on-off"></i></span>

                        <p class="media-body semi-bold">In case of loss/theft, Enable/Disable Volopay cards with just
                            one click.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i
                                    class="thumbnail t48x48 icon-sprites-sync"></i></span>

                        <p class="media-body semi-bold">Expenses can be synced to your accounting software using either
                            cash or accrual method.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i
                                    class="thumbnail t48x48 icon-sprites-track"></i></span>

                        <p class="media-body semi-bold">You can track your comapny expenses in real-time and
                            approve/reject those expenses with just a swipe/click.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i
                                    class="thumbnail t48x48 icon-sprites-small-medium"></i></span>

                        <p class="media-body semi-bold">Best suitable for small and medium enterprises as no bank
                            account is needed for this.</p>
                    </div>
                </div>
                <div class="col lg-4 sm-12">
                    <div class="media"><span class="media-left"><i
                                    class="thumbnail t48x48 icon-sprites-bank"></i></span>

                        <p class="media-body semi-bold">Reimburse the expenses according to the custom business policies
                            of your company.</p>
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
                        <h2 class="h2 ff-2 semi-bold mb-2">Benefits of Salary Disbursement</h2>
                    </div>
                    <div class="r-6 media-middle">
                        <ul class="chevron">
                            <li>No bank accounts needed for your employees.</li>
                            <li>No need to collect personal information.</li>
                            <li>No need for employee reimbursements.</li>
                            <li>No more overspending.</li>
                            <li>No receipts and paperwork.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection