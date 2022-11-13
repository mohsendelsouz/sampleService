@extends('user.layout.layout')
@section('body')




<div id="app" class="app">

    @include('../template.header')

    @include('../template.menu')

    <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app"
        data-toggle-class="app-sidebar-mobile-toggled"></button>


    <div id="content" class="app-content">

        <div class="row">

            <div class="col-xl-4 col-lg-4">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3" style="text-align: center">

                            {{-- <button type="button" class="btn btn-outline-green" id="popup">Subscribe</button> --}}
                            @if (Session::has('message'))
                           
                                
                                <span style="color: green">{{ Session::get('message') }}</span>
                            
                        @endif
                        
                            <form action="{{ route('stripePayment') }}" method="post">
                                @csrf
                                <h4>Product Name: shirt</h4>
                                <img src="{{url('assets/img/product/product-6.jpg')}}" alt="" class="img-responsive"> 
                                <h5>Price: $150</h5>
                                <script
                                    src="https://checkout.stripe.com/checkout.js"
                                    class="stripe-button"
                                    data-key="pk_test_51LxpoiIHIgjMjhjeZHoWny0W3mN57En9DPe05u2bRATHi4v5EtPuFA5b1HExSwirurpPLS5HkED8JOhnhPOmbIq000Aokh1XgI"
                                    data-name="T-shirt"
                                    data-description="Comfortable cotton t-shirt"
                                    data-amount="150"
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
            <div class="col-xl-4 col-lg-4">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3" style="text-align: center">

                            {{-- <button type="button" class="btn btn-outline-green" id="popup">Subscribe</button> --}}
                            @if (Session::has('message'))
                           
                                
                                <span style="color: green">{{ Session::get('message') }}</span>
                            
                        @endif
                        
                            <form action="{{ route('stripePayment') }}" method="post">
                                @csrf
                                <h4>Product Name: Dress</h4>
                                <img src="{{url('assets/img/product/product-7.jpg')}}" alt="" class="img-responsive"> 

                                <h5>Price: $350</h5>
                                <script
                                    src="https://checkout.stripe.com/checkout.js"
                                    class="stripe-button"
                                    data-key="pk_test_51LxpoiIHIgjMjhjeZHoWny0W3mN57En9DPe05u2bRATHi4v5EtPuFA5b1HExSwirurpPLS5HkED8JOhnhPOmbIq000Aokh1XgI"
                                    data-name="T-shirt"
                                    data-description="Comfortable cotton t-shirt"
                                    data-amount="350"
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
           
            <div class="col-xl-4 col-lg-4">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3" style="text-align: center">

                            {{-- <button type="button" class="btn btn-outline-green" id="popup">Subscribe</button> --}}
                            @if (Session::has('message'))
                           
                                
                                <span style="color: green">{{ Session::get('message') }}</span>
                            
                        @endif
                        
                            <form action="{{ route('stripePayment') }}" method="post">
                                @csrf
                                <h4>Product Name: T-shirt</h4>
                                <img src="{{url('assets/img/product/product-8.jpg')}}" alt="" class="img-responsive"> 

                                <h5>Price: $50</h5>
                                <script
                                    src="https://checkout.stripe.com/checkout.js"
                                    class="stripe-button"
                                    data-key="pk_test_51LxpoiIHIgjMjhjeZHoWny0W3mN57En9DPe05u2bRATHi4v5EtPuFA5b1HExSwirurpPLS5HkED8JOhnhPOmbIq000Aokh1XgI"
                                    data-name="T-shirt"
                                    data-description="Comfortable cotton t-shirt"
                                    data-amount="50"
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
            <div class="col-xl-4 col-lg-4">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3" style="text-align: center">

                            {{-- <button type="button" class="btn btn-outline-green" id="popup">Subscribe</button> --}}
                            @if (Session::has('message'))
                            
                                
                                <span style="color: green">{{ Session::get('message') }}</span>
                            
                        @endif
                        
                            <form action="{{ route('stripePayment') }}" method="post">
                                @csrf
                                <h4>Product Name: pant</h4>
                                <img src="{{url('assets/img/product/product-13.jpg')}}" alt="" class="img-responsive"> 

                                <h5>Price: $650</h5>
                                <script
                                    src="https://checkout.stripe.com/checkout.js"
                                    class="stripe-button"
                                    data-key="pk_test_51LxpoiIHIgjMjhjeZHoWny0W3mN57En9DPe05u2bRATHi4v5EtPuFA5b1HExSwirurpPLS5HkED8JOhnhPOmbIq000Aokh1XgI"
                                    data-name="T-shirt"
                                    data-description="Comfortable cotton t-shirt"
                                    data-amount="650"
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
            <div class="col-xl-4 col-lg-4">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3" style="text-align: center">

                            {{-- <button type="button" class="btn btn-outline-green" id="popup">Subscribe</button> --}}
                            @if (Session::has('message'))
                            
                                
                                <span style="color: green">{{ Session::get('message') }}</span>
                            
                        @endif
                        
                            <form action="{{ route('stripePayment') }}" method="post">
                                @csrf
                                <h4>Product Name: pant</h4>
                                <img src="{{url('assets/img/product/product-11.jpg')}}" alt="" class="img-responsive"> 

                                <h5>Price: $550</h5>
                                <script
                                    src="https://checkout.stripe.com/checkout.js"
                                    class="stripe-button"
                                    data-key="pk_test_51LxpoiIHIgjMjhjeZHoWny0W3mN57En9DPe05u2bRATHi4v5EtPuFA5b1HExSwirurpPLS5HkED8JOhnhPOmbIq000Aokh1XgI"
                                    data-name="T-shirt"
                                    data-description="Comfortable cotton t-shirt"
                                    data-amount="550"
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
            <div class="col-xl-4 col-lg-4">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3" style="text-align: center">

                            {{-- <button type="button" class="btn btn-outline-green" id="popup">Subscribe</button> --}}
                            @if (Session::has('message'))
                            
                                
                                <span style="color: green">{{ Session::get('message') }}</span>
                            
                        @endif
                        
                            <form action="{{ route('stripePayment') }}" method="post">
                                @csrf
                                <h4>Product Name: pant</h4>
                                <img src="{{url('assets/img/product/product-10.jpg')}}" alt="" class="img-responsive"> 

                                <h5>Price: $250</h5>
                                <script
                                    src="https://checkout.stripe.com/checkout.js"
                                    class="stripe-button"
                                    data-key="pk_test_51LxpoiIHIgjMjhjeZHoWny0W3mN57En9DPe05u2bRATHi4v5EtPuFA5b1HExSwirurpPLS5HkED8JOhnhPOmbIq000Aokh1XgI"
                                    data-name="T-shirt"
                                    data-description="Comfortable cotton t-shirt"
                                    data-amount="250"
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