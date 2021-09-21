@extends('jfbiswajit/ssl-commerz::layout.app')

@section('css')
<style>
    /* =======================================================================
  Template Name: Pipex Payment
  Author: James
  Author URI: https://www.facebook.com/shahazadaaliimam/
  Version: 1.0
  Description: This Template is created for Pipex Online Payment
  ======================================================================= */

    * {
        margin: 0px;
        padding: 0px;
        list-style: none;
    }

    img {
        max-width: 100%;
    }

    a {
        text-decoration: none;
        outline: none;
        color: #fa607e;
    }

    a:hover {
        color: #ff0033;
    }

    a:hover,
    a:focus,
    input,
    textarea {
        text-decoration: none;
        outline: none;
    }

    .center {
        text-align: center;
    }

    .left {
        text-align: left;
    }

    .right {
        text-align: right;
    }

    .cp {
        cursor: pointer;
    }

    html,
    body {
        height: 100%;
    }

    p {
        margin-bottom: 0px;
        width: 100%;
    }

    .no-padding {
        padding: 0px;
    }

    .no-margin {
        margin: 0px;
    }

    .hid {
        display: none;
    }

    .top-mar {
        margin-top: 15px;
    }

    .h-100 {
        height: 100%;
    }

    ::placeholder {
        color: #747f8a !important;
        font-size: 13px;
        opacity: .5 !important;
    }

    .container-fluid {
        padding: 0px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Open Sans", sans-serif;
        color: #545454;
    }

    strong {
        font-family: "Open Sans", sans-serif;
    }

    body {
        background-color: #f1f1f145 !important;
        font-family: "Open Sans", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;
        color: #6A6A6A;
        overflow-x: hidden;
    }

    /* ===================================== payment Page Design CSS ==================================== */
    .form-payment-body {
        background: linear-gradient(rgba(0, 0, 0, 0.637), rgba(0, 0, 0, 0.637)),
            url(https://previews.123rf.com/images/279photo/279photo1612/279photo161205274/68221978-payment-terminal-with-card-on-white-background-top-view-.jpg);
        center center: ;
        background-size: cover;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-payment-body .payment-desk {
        filter: drop-shadow(0 0 13.5px rgba(0, 0, 0, 0.09));
        margin-top: 5%;
        margin-bottom: 5%;
    }

    .form-payment-body .payment-desk .detail-box {
        background-color: #FFF;
        padding: 20px;
    }

    .form-payment-body .payment-desk .detail-box .logo {
        width: 200px;
    }

    .form-payment-body .payment-desk .detail-box .help {
        width: 450px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .form-payment-body .payment-desk .detail-box .detailsh {
        text-align: center;
    }

    .form-payment-body .payment-desk .detail-box .detailsh h3 {
        font-size: 1.2rem;
        margin-bottom: 15px;
    }

    .form-payment-body .payment-desk .detail-box .detailsh p {
        font-size: .8rem;
    }

    .form-payment-body .payment-desk .paymentform {
        background-color: #4c56c0;
        text-align: center;
        color: #FFF;
        padding: 20px;
    }

    .form-payment-body .payment-desk .paymentform p {
        font-size: .8rem;
        margin-bottom: 35px;
    }

    .form-payment-body .payment-desk .paymentform .payment-det .form-row {
        margin-top: 20px;
    }

    .form-payment-body .payment-desk .paymentform .payment-det .form-row label {
        font-size: .85rem;
    }

    .form-payment-body .payment-desk .paymentform .payment-det .input-group .input-group-prepend .input-group-text {
        background-color: #3d46a7;
        color: #ffffffcf;
        border-right: 0px;
        border: 0px;
    }

    .form-payment-body .payment-desk .paymentform .payment-det .input-group .form-control {
        background-color: #3d46a7;
        color: #FFF;
        border-left: 0px;
        border: 0px;
    }

    .form-payment-body .payment-desk .paymentform .payment-det .input-group .form-control:focus {
        border: 0px;
    }

    .form-payment-body .payment-desk .paymentform .forget {
        text-align: right;
    }

    .form-payment-body .payment-desk .paymentform .social-link ul {
        float: right;
        margin-top: 30px;
    }

    .form-payment-body .payment-desk .paymentform .social-link ul li {
        float: left;
        padding: 15px;
        font-size: .9rem;
    }

    .form-control {
        background-color: #F8F8F8;
        margin-bottom: 20px;
        padding: .375rem;
    }

    .form-control:focus {
        background-color: #FFF;
        border-color: #CCC;
    }

    .form-control:focus {
        box-shadow: none;
        border: 0px;
    }

    ::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: #FFF !important;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: #FFF !important;
    }

    :-ms-input-placeholder {
        /* IE 10+ */
        color: #FFF !important;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        color: #FFF !important;
    }

    /* ===================================== Responsive Style CSS ==================================== */
    @media screen and (max-width: 991px) {
        .we-are-making .text-part {
            text-align: center;
        }

        .we-are-making .text-part .count .count-sing {
            margin-bottom: 20px;
        }

        .headwe-nav .container {
            padding: 10px;
        }

        header .headwe-nav .nav-div .navbar-nav .nav-item .nav-link {
            padding: 10px;
            border-right: 0px;
        }
    }

    /*# sourceMappingURL=style.css.map */
</style>
<script src="https://kit.fontawesome.com/20d905b1f0.js" crossorigin="anonymous"></script>
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
                            <h3>24 x 7 Premium Support</h3>
                            <p>Call +880-18XXXXXXXX</p>
                        </div>
                        <hr>
                        <p>© 2021 <a href="https://www.pipexbd.com">Aqualink Bangladesh Ltd</a></p>

                    </div>
                    <div class="col-md-7 paymentform">
                        <h2 style="color: white">Online Payment</h2>
                        <p class="border-bottom-1">Payment Information</p>
                        <form action="{{ url('/get-payment-info') }}" method="POST" class="needs-validation">
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
                                            <input type="text" name="customer_name" class="form-control"
                                                id="customer_name" placeholder="Your Full Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <label for="user_name">Company Name</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="user_name" class="form-control" id="user_name"
                                                placeholder="Company Name" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 text-left">
                                        <label for="address">Address</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-map-marker"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="address" class="form-control" id="address"
                                                placeholder="Your Connection Address" required="">
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
                                            <input type="text" name="customer_mobile" class="form-control" id="mobile"
                                                placeholder="01XXXXXXXXX" required="">
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
                                            <input type="email" name="customer_email" class="form-control" id="email"
                                                placeholder="Your Email Address" required="">
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
                                            <input type="number" name="amount" class="form-control" id="amount"
                                                placeholder="Amount in Bangladeshi Taka" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-left">
                                        <div class="form-check mt-3 mb-4">
                                            <input style="transform: scale(2);
    margin: 7px 0px 0px -14px;" type="checkbox" class="form-check-input" id="agree" required="">
                                            <label style="margin: 4px 0px 0px 10px;
    font-size: 0.8rem;" class="form-check-label" for="agree">I Accept the <a href="terms.php"
                                                    class="font-weight-bold">Terms &amp; Condition</a>, <a
                                                    href="privacy.php" class="font-weight-bold">Privacy Policy</a> and
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
