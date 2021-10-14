@extends('admin.layout.master')
@section('title', 'Event List | Admin')
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
                                    <li><span class="bread-blod">List</span>
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
@endsection
@section('content')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="product-status-wrap drp-lst">
                            <h4>Event list</h4>

                            <div class="asset-inner">
                                <table class="table-mailbox">
                                    <tr>
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="true">Event name</th>
                                        <th data-field="email" data-editable="true">Band names</th>
                                        <th data-field="phone" data-editable="true">Start date</th>
                                        <th data-field="complete">End date</th>
                                        <th data-field="task" data-editable="true">Portfolio</th>
                                        <th data-field="date" data-editable="true">Ticket price</th>
                                        <th data-field="price" data-editable="true">Status</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                    @foreach($data as $data)
                                        <tr>
                                            <td>{{ $data['id'] }}</td>
                                            <td>{{ $data['event_name'] }}</td>
                                            <td>{{ $data['band_names'] }}</td>
                                            <td>{{ $data['start_date'] }}</td>
                                            <td>{{ $data['end_date'] }}</td>
                                            <td>{{ $data['portfolio'] }}</td>
                                            <td>{{ $data['ticket_price'] }}</td>
                                            <td>{{ $data['status'] }}</td>
                                            <td>
                                                <a href="/admin/event/detail?id={{ $data['id'] }}">
                                                    <button data-toggle="tooltip" title="Detail"
                                                            class="pd-setting-ed"><i class="fa fa-info"
                                                                                     aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                                <a href="/admin/event/edit?id={{ $data['id'] }}">
                                                    <button data-toggle="tooltip" title="Edit"
                                                            class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                                                     aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                                <a href="/admin/event/delete?id={{ $data['id'] }}">
                                                    <button data-toggle="tooltip" title="Trash"
                                                            class="pd-setting-ed"><i class="fa fa-trash-o"
                                                                                     aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div>
                                        <div style="margin: 35px 0 0">Showing 1 to 10 of 21 entries
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="custom-pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-pre"><a href="#">‹</a></li>
                                                <li class="page-number active"><a href="#">1</a></li>
                                                <li class="page-number"><a href="#">2</a></li>
                                                <li class="page-number"><a href="#">3</a></li>
                                                <li class="page-next"><a href="#">›</a></li>
                                            </ul>
                                        </nav>
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

