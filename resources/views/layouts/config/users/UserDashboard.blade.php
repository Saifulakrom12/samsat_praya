@extends('app')
@section('content')
@section('title', 'User Dashboard')
<!-- BEGIN .app-main -->
<div class="app-main">

    <!-- BEGIN .main-heading -->
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item home">
                            <a href="#">
                                <i class="icon-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
        <div class="row gutters">
            <div class="col-lg-3 col-sm-6">
                <div class="simple-widget">
                    <i class="iconn icon-basket"></i>
                    <h3>$5200</h3>
                    <p>Sales</p>
                    <div class="progress xs">
                        <div class="progress-bar" role="progressbar" style="width: 37%;" aria-valuenow="37"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="simple-widget">
                    <i class="iconn icon-wallet"></i>
                    <h3>$2300</h3>
                    <p>Expenses</p>
                    <div class="progress xs">
                        <div class="progress-bar" role="progressbar" style="width: 48%;" aria-valuenow="48"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="simple-widget">
                    <i class="iconn icon-map6"></i>
                    <h3>5900</h3>
                    <p>Visitors</p>
                    <div class="progress xs">
                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="simple-widget secondary">
                    <i class="iconn icon-bargraph"></i>
                    <h3>750</h3>
                    <p>Orders</p>
                    <div class="progress xs">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">Sales</div>
                    <div class="toggle-switch tr">
                        <input type="checkbox" class="check" />
                        <b class="b switch"></b>
                        <b class="b track"></b>
                    </div>
                    <div class="card-body">
                        <div id="areaChart" class="chart-height-lg"></div>
                        <div class="spacer20"></div>
                        <div class="row gutters">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-4 col-12">
                                <div class="info-stats">
                                    <h4 class="info-total text-success">45,900</h4>
                                    <h6 class="info-title">Sales</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-4 col-12">
                                <div class="info-stats">
                                    <h4 class="info-total text-info">24,000</h4>
                                    <h6 class="info-title">Expenses</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-4 col-12">
                                <div class="info-stats">
                                    <h4 class="info-total text-danger">18,900</h4>
                                    <h6 class="info-title">Visits</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-lg-4 col-sm-6">
                <div class="datepicket-container primary">
                    <div id="datepicker"></div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card black todo-container">
                    <div class="todo-header">
                        <div id="today-date"></div>
                    </div>
                    <div class="customScroll4">
                        <ul class="todo-body">
                            <li class="todo-list done">
                                <div class="todo-info">
                                    <span class="dot yellow"></span>
                                    <p>Team Meeting<span class="time">10:30am</span></p>
                                    <small>Mobile App</small>
                                </div>
                            </li>
                            <li class="todo-list">
                                <div class="todo-info">
                                    <span class="dot blue"></span>
                                    <p>Make new page<span class="time">12pm</span></p>
                                    <small>New website</small>
                                </div>
                            </li>
                            <li class="todo-list">
                                <div class="todo-info">
                                    <span class="dot red"></span>
                                    <p>Code review<span class="time">3pm</span></p>
                                    <small>Product launch</small>
                                </div>
                            </li>
                            <li class="todo-list">
                                <div class="todo-info">
                                    <span class="dot yellow"></span>
                                    <p>Catchup with Bristo <span class="time">9am</span></p>
                                    <small>Mobile Project</small>
                                </div>
                            </li>
                            <li class="todo-list">
                                <div class="todo-info">
                                    <span class="dot"></span>
                                    <p>Watch Football Match<span class="time">3:30pm</span></p>
                                    <small>Football match</small>
                                </div>
                            </li>
                            <li class="todo-list">
                                <div class="todo-info">
                                    <span class="dot orange"></span>
                                    <p>Trekking with Maria<span class="time">5pm</span></p>
                                    <small>Fun time</small>
                                </div>
                            </li>
                            <li class="todo-list">
                                <div class="todo-info">
                                    <span class="dot yellow"></span>
                                    <p>Coffee with Julia<span class="time">9pm</span></p>
                                    <small>Friends</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card black">
                    <div class="card-header">Visitors</div>
                    <div class="card-body">
                        <div id="us-map2" class="chart-height-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->


        <!-- Row start -->
        <div class="row gutters">
            <div class="col-sm-12">
                <div class="card black">
                    <div class="card-header">
                        Subscribers
                    </div>
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-sm-3 col-12">
                                <div id="on-trials"></div>
                            </div>
                            <div class="col-sm-3 col-12">
                                <div id="base-plan"></div>
                            </div>
                            <div class="col-sm-3 col-12">
                                <div id="premium-plan"></div>
                            </div>
                            <div class="col-sm-3 col-12">
                                <div id="platinum-plan"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->


        <!-- Row start -->
        <div class="row gutters">
            <div class="col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">Orders</div>
                    <div class="customScroll">
                        <div class="card-body">
                            <ul class="product-status">
                                <li class="clearfix">
                                    <div class="customer">
                                        <img src="img/avatar1.svg" alt="Modern Admin Dashboard">
                                    </div>
                                    <div class="product-details">
                                        <span class="badge badge-primary">Delivered</span>
                                        <h6>Product has been delivered.</h6>
                                        <p>We are pleased to inform that the following items in your order OD556753 the
                                            following
                                            items in your order OD556753 have been delivered.</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="customer">
                                        <img src="img/avatar2.svg" alt="Modern Admin Dashboard">
                                    </div>
                                    <div class="product-details">
                                        <span class="badge badge-secondary">Returned</span>
                                        <h6>Product has been returned.</h6>
                                        <p>Thank you for shopping! The following items in your order OD576798 have been
                                            delivered.
                                        </p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="customer">
                                        <img src="img/avatar4.svg" alt="Modern Admin Dashboard">
                                    </div>
                                    <div class="product-details">
                                        <span class="badge badge-success">Cancelled</span>
                                        <h6>Product has been cancelled.</h6>
                                        <p>We will send you another email once the items. The following items in your
                                            order OD576766
                                            have been delivered.</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="customer">
                                        <img src="img/avatar2.svg" alt="Modern Admin Dashboard">
                                    </div>
                                    <div class="product-details">
                                        <span class="badge badge-secondary">Returned</span>
                                        <h6>Product has been returned.</h6>
                                        <p>Thank you for shopping!</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="customer">
                                        <img src="img/avatar4.svg" alt="Modern Admin Dashboard">
                                    </div>
                                    <div class="product-details">
                                        <span class="badge badge-success">Cancelled</span>
                                        <h6>Product has been cancelled.</h6>
                                        <p>We will send you another email once the items.</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="customer">
                                        <img src="img/avatar1.svg" alt="Modern Admin Dashboard">
                                    </div>
                                    <div class="product-details">
                                        <span class="badge badge-primary">Delivered</span>
                                        <h6>Product has been delivered.</h6>
                                        <p>We are pleased to inform that the following items in your order OD556753 the
                                            following
                                            items in your order OD556753 have been delivered.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">Activity</div>
                    <div class="customScroll">
                        <div class="card-body">
                            <ul class="project-activity">
                                <li class="activity-list">
                                    <div class="detail-info">
                                        <span class="lbl"></span>
                                        <p class="desc-info"><span>Bovane Merso</span> server not found, connection
                                            problem
                                            otifications of subscriptions.</p>
                                        <a href="#" class="activity-status"><i
                                                class="icon-done_all"></i>Read</a>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="detail-info">
                                        <span class="lbl green"></span>
                                        <p class="desc-info"><span>John Vereridms</span> explore the history of the
                                            classic Lorem
                                            Ipsum passage and generate your own text using any number of characters,
                                            words, sentences
                                            or paragraphs.</p>
                                        <a href="#" class="activity-status">Mark as read</a>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="detail-info">
                                        <span class="lbl red"></span>
                                        <p class="desc-info"><span>Levsmia Eapitanb</span> Commonly used as placeholder
                                            text in the
                                            graphic and print industries.</p>
                                        <a href="#" class="activity-status"><i
                                                class="icon-done_all"></i>Read</a>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="detail-info">
                                        <span class="lbl pink"></span>
                                        <p class="desc-info"><span>Boneyds Nlics</span> Lorem Ipsum's origins extend
                                            far back to a
                                            scrambled Latin passage from Cicero in the middle ages.</p>
                                        <a href="#" class="activity-status">Mark as read</a>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="detail-info">
                                        <span class="lbl yellow"></span>
                                        <p class="desc-info"><span>Muurvd Bgvane</span> In publishing and graphic
                                            design, lorem
                                            ipsum is a filler text or greeking commonly used to demonstrate the textual
                                            elements.</p>
                                        <a href="#" class="activity-status"><i
                                                class="icon-done_all"></i>Read</a>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="detail-info">
                                        <span class="lbl orange"></span>
                                        <p class="desc-info"><span>Covin Aamirv</span> Lorem ipsum has become the
                                            industry standard
                                            for design mockups and prototypes. By adding a little bit of Latin to a
                                            mockup, you're
                                            able to show clients a more complete version of your design without actually
                                            having to
                                            invest time and effort drafting copy.</p>
                                        <a href="#" class="activity-status">Mark as read</a>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="detail-info">
                                        <span class="lbl blue"></span>
                                        <p class="desc-info"><span>Gosmin Vapitanb</span> Elit platea justo lorem
                                            egestas vestibulum
                                            blandit eget sed vitae in elementum nisl justo rutrum.</p>
                                        <a href="#" class="activity-status"><i
                                                class="icon-done_all"></i>Read</a>
                                    </div>
                                </li>
                                <li class="activity-list">
                                    <div class="detail-info">
                                        <span class="lbl red"></span>
                                        <p class="desc-info"><span>Eoneyad Hlinsg</span> A handy Lorem Ipsum Generator
                                            that helps to
                                            create dummy text for all layout needs.</p>
                                        <a href="#" class="activity-status">Mark as read</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
