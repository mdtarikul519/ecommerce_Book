
@extends('dashboard.layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div style="margin-top: 100px;">
        <div class="card rounded-none">
            <div class="card-header pt-3 pb-1 d-flex justify-content-between align-items-center">
                <div><h4 class="" style="font-size: 22px !important;">All Users</h4></div>
                <div class="d-flex justify-content-between">
                    <!-- <label class="switch">
                        <input v-if="data.is_visible" type="checkbox" @change="toggle" checked="">
                        <input v-else type="checkbox" @change="toggle">
                        <span class="switch-state" style="background-color: #4c6887;"></span>
                    </label> -->
                    <div class="ps-3 d-flex gap-2">
                        <a href="{{ route('dashboard.user.create') }}" class="btn btn-sm btn-info"> Create </a>
                    </div>
                </div>
            </div>
            <div class="card-body px-4 py-2 form_area custom_scroll">
                <div class="custom_table nowrap table-responsive w-100 h-100 custom_scroll">
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr class="text-capitalize">
                                <th  style="width: 100px;">SL</th>
                                <th  style="width: 50px;">photo</th>
                                <th  style="width: 200px;text-align: left;">name</th>
                                {{-- <th  style="width: 50px;">user name</th> --}}
                                <th  style="width: 50px;">telegram id</th>
                                <th  style="width: 50px;">telegram name</th>
                                <th  style="width: 50px;">mobile number</th>
                                <th  style="width: 200px;">email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alldata as $item)
                            <tr>
                                <td >{{$loop->index + 1}}</td>
                                <td>
                                    <img src="/{{ $item->photo }}" height="20px" alt="Image">
                                </td>
                                <td class="text-start">
                                    <b>
                                        {{$item->first_name}} {{$item->last_name}}
                                    </b>
                                    <div class="d-flex gap-2 mt-2 flex-wrap">
                                        <a href="{{route('dashboard.user.edit',$item->id)}}" class="text-info"> Edit </a>
                                        <a href="{{route('dashboard.product_category.details',$item->id)}}" class="text-warning"> Details </a>
                                        <a onclick="return confirm(`delete data?`)" href="{{route('dashboard.user.destory',$item->id)}}" class="text-danger">delete </a>
                                    </div>
                                </td>
                                {{-- <td >{{$item->user_name}}</td> --}}
                                <td >{{$item->telegram_id}}</td>
                                <td>{{$item->telegram_name}}</td>
                                <td >{{$item->mobile_number}}</td>

                                <td >{{$item->email}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-2">
                <nav aria-label="Page navigation example" class="">
                    <ul class="pagination pagination-warning">
                        <li class="page-item">
                            <a class="page-link"><span>« Previous</span></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="http://127.0.0.1:8000/api/v1/navbar-menu-details/all?orderByType=DESC&amp;sub_menu_slug=vrti-notis-82634719&amp;page=1"><span>1</span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link"><span>Next »</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

