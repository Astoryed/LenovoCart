@extends('layouts.master')

@section('content')

        <!-- Hero Section-->
        <section class="hero hero-page gray-bg padding-small">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <h1>Shopping Cart</h1>
                        <p class="lead text-muted">You currently have 3 items in your shopping cart</p>
                    </div>
                    <ul class="breadcrumb d-flex justify-content-start justify-content-lg-center col-lg-3 text-right order-1 order-lg-2">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Shopping Cart Section-->
        <section class="shopping-cart">
            <div class="container">
                <div class="basket">
                    <div class="basket-holder">
                        <div class="basket-header">
                            <div class="row">
                                <div class="col-lg-5">Product</div>
                                <div class="col-lg-2">Price</div>
                                <div class="col-lg-2">Quantity</div>
                                <div class="col-lg-2">Total</div>
                                <div class="col-lg-1 text-center">Remove</div>
                            </div>
                        </div>
                        <div class="basket-body">
                            <!-- Product-->
                            <div class="item">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-5">
                                        <div class="d-flex align-items-center"><img src="img/mob.png" alt="..." class="img-fluid">
                                            <div class="title"><a href="#">
                                                    <h5>Lose Oversised Shirt</h5><span class="text-muted">Size: Large</span></a></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2"><span>$65.00</span></div>
                                    <div class="col-lg-2">
                                        <div class="d-flex align-items-center">
                                            <div class="quantity d-flex align-items-center">
                                                <div class="dec-btn">-</div>
                                                <input type="text" value="4" class="quantity-no">
                                                <div class="inc-btn">+</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2"><span>$325.00</span></div>
                                    <div class="col-lg-1 text-center"><i class="delete fa fa-trash fa-2x"></i></div>
                                </div>
                            </div>
                            <!-- Product-->
                            <div class="item">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-5">
                                        <div class="d-flex align-items-center"><img src="img/mob-2.png" alt="..." class="img-fluid">
                                            <div class="title"><a href="#">
                                                    <h5>Lose Oversised Shirt</h5><span class="text-muted">Size: Medium</span></a></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2"><span>$65.00</span></div>
                                    <div class="col-lg-2">
                                        <div class="d-flex align-items-center">
                                            <div class="quantity d-flex align-items-center">
                                                <div class="dec-btn">-</div>
                                                <input type="text" value="3" class="quantity-no">
                                                <div class="inc-btn">+</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2"><span>$325.00</span></div>
                                    <div class="col-lg-1 text-center"><i class="delete fa fa-trash fa-2x"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection