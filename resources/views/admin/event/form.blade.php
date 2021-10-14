@extends('admin.layout.master')
@section('title', 'Create Event | Admin')
@section('breadcrumb')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Search..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Create event</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <!-- datapicker CSS
      ============================================ -->
    <link rel="stylesheet" href="/css/datapicker/datepicker3.css">
@endsection
@section('content')
    <div class="basic-form-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline12-list">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Create new event</h1>
                            </div>
                        </div>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="all-form-element-inner">
                                            <form action="/admin/event/create" name="event-form" method="post">
                                                @csrf
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Event
                                                                name</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter event's name" name="eventName">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Band
                                                                names</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter band's name" name="bandNames">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Start
                                                                Date</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-9 col-xs-12">
                                                            <div class="sparkline16-graph">
                                                                <div class="date-picker-inner">
                                                                    <div class="form-group data-custon-pick"
                                                                         id="data_2">
                                                                        <div class="input-group date">
                                                                            <span class="input-group-addon"><i
                                                                                    class="fa fa-calendar"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                   name="startDate" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">End
                                                                Date</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-9 col-xs-12">
                                                            <div class="sparkline16-graph">
                                                                <div class="date-picker-inner">
                                                                    <div class="form-group data-custon-pick"
                                                                         id="data_2">
                                                                        <div class="input-group date">
                                                                            <span class="input-group-addon"><i
                                                                                    class="fa fa-calendar"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                   name="endDate" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">Portfolio</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter product's price" name="portfolio">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">Price</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Enter product's price" name="ticketPrice">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label
                                                                class="login2 pull-right pull-right-pro">Status</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-9 col-xs-12">
                                                            <div class="form-select-list">
                                                                <select class="form-control" name="status">
                                                                    <option value="" disabled selected></option>
                                                                    <option value="0">Tạm hoãn</option>
                                                                    <option value="1">Đang diễn ra</option>
                                                                    <option value="2">Sắp diễn ra</option>
                                                                    <option value="3">Đã diễn ra</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                    <button class="btn btn-sm btn-primary login-submit-cs"
                                                                            type="submit">Save
                                                                    </button>
                                                                    <button class="btn btn-white" type="reset">Reset
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <!-- datapicker JS
		============================================ -->
    <script src="/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="/js/datapicker/datepicker-active.js"></script>
@endsection
