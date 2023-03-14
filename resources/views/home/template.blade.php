@extends('frontend.app')

@section('title', 'page_title')

@section('content')
<!-- Start Content -->
<div class="container py-5">
    <div class="row">

        @include('frontend.templatemo-accordion')

        <div class="col-lg-9">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="h2 pb-4">@yield('title')</h1>
                </div>
                <div class="col-md-6 pb-4">
                    <div class="d-flex">
                        <!-- select class="form-control">
                            <option>Featured</option>
                            <option>A to Z</option>
                            <option>Item</option>
                        </select -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="/phone-device-mounts">
                                <img class="card-img rounded-0 img-fluid img-thumbnail" src="assets/img/accessories/5179750-cat_motorcycle_product_type_accessories_phone_and_device_mounts-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="#">
                                <img class="card-img rounded-0 img-fluid img-thumbnail" src="assets/img/accessories/5179736-cat_motorcycle_product_type_accessories_covers-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="#">
                                <img class="card-img rounded-0 img-fluid img-thumbnail" src="assets/img/accessories/5179739-cat_motorcycle_product_type_accessories_handlebar_accessories-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="#">
                                <img class="card-img rounded-0 img-fluid img-thumbnail" src="assets/img/accessories/5179735-cat_motorcycle_product_type_accessories_battery_care_and_power_accessories-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="#">
                                <img class="card-img rounded-0 img-fluid img-thumbnail" src="assets/img/accessories/5179751-cat_motorcycle_product_type_accessories_scoot_stuff-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="#">
                                <img class="card-img rounded-0 img-fluid img-thumbnail" src="assets/img/accessories/5179756-cat_motorcycle_product_type_accessories_workshop-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="#">
                                <img class="card-img rounded-0 img-fluid img-thumbnail" src="assets/img/accessories/5179747-cat_motorcycle_product_type_accessories_helmet_accessories-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="#">
                                <img class="card-img rounded-0 img-fluid img-thumbnail" src="assets/img/accessories/5179748-cat_motorcycle_product_type_accessories_lighting-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="#">
                                <img class="card-img rounded-0 img-fluid img-thumbnail" src="assets/img/accessories/5179749-cat_motorcycle_product_type_accessories_paint_protection-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="#">
                                <img class="card-img rounded-0 img-fluid img-thumbnail" src="assets/img/accessories/5179754-cat_motorcycle_product_type_accessories_travel_and_transportation-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="#">
                                <img class="card-img rounded-0 img-fluid" src="assets/img/accessories/5179755-cat_motorcycle_product_type_accessories_tyre_and_wheel_care-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <a class="" href="#">
                                <img class="card-img rounded-0 img-fluid img-thumbnail" src="assets/img/accessories/5179738-cat_motorcycle_product_type_accessories_eye_wear-2-3-367.jpg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->

@endsection