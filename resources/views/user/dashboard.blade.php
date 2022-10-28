@extends('user.layout.layout')
@section('body')




<div id="app" class="app">

    @include('../template.header')

    @include('../template.menu')

    <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app"
        data-toggle-class="app-sidebar-mobile-toggled"></button>


    <div id="content" class="app-content">

        <div class="row">

            <div class="col-xl-6 col-lg-6">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3" style="text-align: center">

                            {{-- <button type="button" class="btn btn-outline-green" id="popup">Subscribe</button> --}}
                            @if (Session::has('message'))
                           
                                
                                <span style="color: green">{{ Session::get('message') }}</span>
                            
                        @endif
                            <form action="{{ route('stripePayment') }}" method="post">
                                @csrf
                                <script
                                    src="https://checkout.stripe.com/checkout.js"
                                    class="stripe-button"
                                    data-key="pk_test_51LxpoiIHIgjMjhjeZHoWny0W3mN57En9DPe05u2bRATHi4v5EtPuFA5b1HExSwirurpPLS5HkED8JOhnhPOmbIq000Aokh1XgI"
                                    data-name="T-shirt"
                                    data-description="Comfortable cotton t-shirt"
                                    data-amount="500"
                                    data-currency="usd">
                                </script>
                            </form>

                        </div>


                    </div>


                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>

            </div>

           


           


        </div>

    </div>




</div>




@endsection