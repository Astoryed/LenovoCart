@extends('layouts.master')

@section('content')

<!-- Sidebar-->
<div class="sidebar col-xl-3 col-lg-4 sidebar">
    <div class="block">
        <h6 class="text-uppercase">Product Categories</h6>
        <ul class="list-unstyled">
            <li><a href="#" class="d-flex justify-content-between align-items-center"><span>Men's Collection</span><small>200</small></a>
                <ul class="list-unstyled">
                    <li> <a href="#">T-shirts</a></li>
                    <li> <a href="#">Hoodies</a></li>
                    <li> <a href="#">Shorts</a></li>
                </ul>
            </li>
            <li class="active"><a href="#" class="d-flex justify-content-between align-items-center"><span>Women's Collection</span><small>120</small></a>
                <ul class="list-unstyled">
                    <li> <a href="#">T-shirts</a></li>
                    <li> <a href="#">Dresses</a></li>
                    <li> <a href="#">Pants</a></li>
                    <li> <a href="#">Shorts</a></li>
                </ul>
            </li>
            <li><a href="#" class="d-flex justify-content-between align-items-center"><span>Accessories</span><small>80</small></a>
                <ul class="list-unstyled">
                    <li> <a href="#">Wallets</a></li>
                    <li> <a href="#">Backpacks</a></li>
                    <li> <a href="#">Belts</a></li>
                    <li> <a href="#">Necklaces</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /Sidebar end-->
<!-- Grid -->
<div class="products-grid col-xl-9 col-lg-8 sidebar-left">
    <div class="row">
        <!-- item-->
        <div class="item col-xl-4 col-md-6">
            <div class="product is-gray">
                <div class="image d-flex align-items-center justify-content-center">
                    <div class="ribbon ribbon-primary text-uppercase">Sale</div><img src="img/mob-3.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                        <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart">
                                <i class="fa fa-shopping-cart"></i></a><a href="#" class="visit-product active"><i class="icon-search"></i>View</a>
                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="title"><small class="text-muted">Men Wear</small><a href="#">
                        <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a>
                    <span class="price text-muted">$40.00</span></div>
            </div>
        </div>
        <div class="item col-xl-4 col-md-6">
            <div class="product is-gray">
                <div class="image d-flex align-items-center justify-content-center"><img src="img/mob-2.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                        <div class="CTA d-flex align-items-center justify-content-center">
                            <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                            <a href="#" class="visit-product active"><i class="icon-search"></i>View</a>
                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view">
                                <i class="fa fa-arrows-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="title"><small class="text-muted">Men Wear</small><a href="#">
                        <h3 class="h6 text-uppercase no-margin-bottom">Elegant Blue</h3></a><span class="price text-muted">$40.00</span></div>
            </div>
        </div>
        <div class="item col-xl-4 col-md-6">
            <div class="product is-gray">
                <div class="image d-flex align-items-center justify-content-center">
                    <div class="ribbon ribbon-success text-uppercase">New</div><img src="img/hoodie-man-3.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                        <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                </div>
                <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                        <h3 class="h6 text-uppercase no-margin-bottom">Elegant Black</h3></a><span class="price text-muted">$40.00</span></div>
            </div>
        </div>
        <div class="item col-xl-4 col-md-6">
            <div class="product is-gray">
                <div class="image d-flex align-items-center justify-content-center"><img src="img/hoodie-man-4.png" alt="product" class="img-fluid">
                    <div class="hover-overlay d-flex align-items-center justify-content-center">
                        <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                    </div>
                </div>
                <div class="title"><small class="text-muted">Men Wear</small><a href="detail.html">
                        <h3 class="h6 text-uppercase no-margin-bottom">Elegant Gray</h3></a><span class="price text-muted">$40.00</span></div>
            </div>
        </div>
    </div>
    <nav aria-label="page navigation example" class="d-flex justify-content-center">
        <ul class="pagination pagination-custom">
            <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
            <li class="page-item"><a href="#" class="page-link active">1       </a></li>
            <li class="page-item"><a href="#" class="page-link">2       </a></li>
            <li class="page-item"><a href="#" class="page-link">3       </a></li>
            <li class="page-item"><a href="#" class="page-link">4       </a></li>
            <li class="page-item"><a href="#" class="page-link">5 </a></li>
            <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">Next</span><span class="sr-only">Next     </span></a></li>
        </ul>
    </nav>
</div>
<!-- / Grid End-->
@endsection