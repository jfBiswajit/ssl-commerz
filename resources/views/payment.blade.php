@extends('jfbiswajit/ssl-commerz::layout.app')

@section('css')
@endsection

@section('content')
<div class="container">
    <div class="pt-4 text-center">
        <h2>SSLCommerz</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. We have provided
            this sample form for understanding Hosted Checkout Payment with SSLCommerz.</p>
    </div>

    <div class="row">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Amount</h4>
            <form action="{{ url('/get-payment-info') }}" method="POST" class="needs-validation">
                <div class="mb-3">
                    <input name="amt" type="text" class="form-control" id="address" value="2000" required>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
            </form>
        </div>
    </div>
</div>
@endsection
