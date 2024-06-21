@extends('app')
@section('title', 'invoice')
@section('content')
    <!-- BEGIN .app-main -->
    <div class="app-main">


        <!-- BEGIN .main-heading -->
        <header class="main-heading">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item home">
                                <a href="index.html">
                                    <i class="icon-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                        </ol>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="daterange-container">
                            <div id="reportrange" class="form-control">
                                <span></span> <i class="icon-chevron-down down-arrow"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END: .main-heading -->


        <!-- BEGIN .main-content -->
        <div class="main-content">


            <!-- Row start -->
            <div class="row gutters justify-content-center">
                <div class="col-xl-9 col-lg-9 col-md-10 col-sm-12">
                    <div class="invoice-container">

                        <div class="invoice-header">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-sm-6 col-12">
                                    <img src="img/logo.svg" class="invoice-logo" alt="Modern Admin Dashboard">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="btn-group float-right">
                                        <a href="#" class="btn btn-outline-info btn-sm">
                                            <i class="icon-printer"></i> Export PDF
                                        </a>
                                        <a href="#" class="btn btn-outline-orange btn-sm ml-2">
                                            <i class="icon-printer"></i> Print
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>

                        <div class="invoice-address">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <small>From,</small><br><br>
                                    <h6>Jeffrey</h6>
                                    <address>
                                        Street Address<br>
                                        City, Zip Code<br>
                                        Phone: 000-000-0000
                                    </address>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <small>To,</small><br><br>
                                    <h6>Lexus</h6>
                                    <address>
                                        Street Address<br>
                                        City, Zip Code<br>
                                        Phone: 000-000-0000
                                    </address>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="invoice-details">
                                        <small>Invoice / Month</small><br>
                                        <small>Invoice No - #56789</small><br>
                                        <small>March 30th 2023</small><br>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>

                        <div class="invoice-body">

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <p><b>Hello, Emily</b></p>
                                    <p>Thank you for shopping from our store and for your order.</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">

                                </div>
                            </div>
                            <!-- Row end -->

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Items</th>
                                                <th>Product ID</th>
                                                <th>Quantity</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Milestone Monitor
                                                    <p class="m-0 text-muted">
                                                        <small>Reference site about Lorem Ipsum, giving information on its origins</small>
                                                    </p>
                                                </td>
                                                <td>#50000879</td>
                                                <td>2</td>
                                                <td>$1150.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Milestone Dashboard
                                                    <p class="m-0 text-muted">
                                                        <small>As well as a random Lipsum generator.</small>
                                                    </p>
                                                </td>
                                                <td>#50000871</td>
                                                <td>3</td>
                                                <td>$50.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Milestone Web App
                                                    <p class="m-0 text-muted">
                                                        <small>Lorem ipsum has become the industry standard.</small>
                                                    </p>
                                                </td>
                                                <td>#50000665</td>
                                                <td>2</td>
                                                <td>$49.99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Row end -->

                            <!-- Row start -->
                            <div class="invoice-payment">
                                <div class="row gutters">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 order-last">
                                        <table class="table no-border m-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>
                                                            Subtotal<br>
                                                            Shipping &amp; Handling<br>
                                                            Tax<br>
                                                        </p>
                                                        <h5 class="text-danger"><strong>Grand Total</strong></h5>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            $1170.00<br>
                                                            $30.00<br>
                                                            $50.00<br>
                                                        </p>
                                                        <h5 class="text-danger"><strong>$1250.00</strong></h5>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->

                        </div>

                        <div class="invoice-footer">
                            Thank you for your Business.
                        </div>

                    </div>
                </div>
            </div>
            <!-- Row end -->


        </div>
        <!-- END: .main-content -->
    </div>
    <!-- END: .app-main -->
@endsection
