@extends('jfbiswajit/ssl-commerz::layout.app')

@section('css')
@include('jfbiswajit/ssl-commerz::layout.custom-csss')
@endsection

@section('content')
<div style="height: 100vh" class="form-payment-body" style="font-size: .8rem" data-new-gr-c-s-check-loaded="14.1029.0"
    data-gr-ext-installed="">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-10 mx-auto payment-desk">
                <div class="row">
                    <div class="col-md-5 detail-box text-center">
                        <img class="logo" src="http://agrotraces.com/assets/images/brand/aqualink.png"
                            alt="Pipex Network">
                        <div class="detailsh">
                            <img class="help" src="https://payment.pipexbd.com/assets/images/help.png" alt="">
                            <h3>24x7 Premium Support</h3>
                            <p>Call +880-18XXXXXXXX</p>
                        </div>
                        <hr>
                        <p style="color: red">© 2021 <a style="color: red" href="#">Aqualink Bangladesh Ltd</a></p>

                    </div>
                    <div class="col-md-7 paymentform">
                        <h2 style="color: white">ONLINE PAYMENT</h2>
                        <h5 style="color: rgba(255, 255, 255, 0.685)" class="border-bottom-1">Payment Information</h5>
                        <form action="{{ url('/checkout') }}" method="POST" class="needs-validation">
                            <div class="payment-det">
                                <div class="form-row">
                                    <div class="col-md-6 text-left">
                                        <label for="customer_name">Name</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="name" class="form-control" id="customer_name"
                                                placeholder="Your Full Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <label for="user_name">Company Name</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-home"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="company" class="form-control" id="user_name"
                                                placeholder="Company Name" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 text-left">
                                        <label for="email">Email</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Your Email Address" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <label for="mobile">Mobile</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="mobile" class="form-control" id="mobile"
                                                placeholder="01XXXXXXXXX" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 text-left">
                                        <label for="amount">Due Amount (BDT)</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-money"></i>
                                                </span>
                                            </div>
                                            <input name="due_amt" type="number" class="form-control" id="address"
                                                disabled value="500">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 text-left">
                                        <label for="amount">Payment Amount (BDT)</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-money"></i>
                                                </span>
                                            </div>
                                            <input name="pay_amt" type="number" class="form-control" id="address"
                                                value=""
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-left">
                                        <div class="form-check mt-3 mb-4">
                                            <input style="transform: scale(2);
                                            margin: 7px 0px 0px -14px;" type="checkbox" class="form-check-input"
                                                id="agree" required="">
                                            <label style="margin: 4px 0px 0px 10px;
                                            font-size: 0.8rem;" class="form-check-label" for="agree">I Accept
                                                the <a href="terms.php" class="font-weight-bold">Terms &amp;
                                                    Condition</a>, <a href="privacy.php"
                                                    class="font-weight-bold">Privacy Policy</a> and
                                                <a href="refund.php" class="font-weight-bold">Refund Policy</a></label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-danger btn-block btn-lg" type="submit">Pay Now</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
