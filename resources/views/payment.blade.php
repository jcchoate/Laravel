@extends('layouts.app')

@section('content')
<div class="container">
        <form action="/purchase" method="POST">
        {{csrf_field()}}
            <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{config('services.stripe.key')}}"
                data-amount="999"
                data-name="home.jaredchoatepro"
                data-description="Example charge"
                data-zip-code="true"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto">
            </script>
        </form>
</div>
@endsection
