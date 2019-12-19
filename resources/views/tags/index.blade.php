@extends('layouts.v2.index')

@section('title', trans('messages.my_lists'))

@section('page_script')
    <script type="text/javascript" src="{{ URL::asset('assets/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/core/libraries/jquery_ui/touch.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/listing.js') }}"></script>
@endsection

@section('page_header')

    <div class="page-title">
        <ul class="breadcrumb breadcrumb-caret position-right">
            <li><a href="{{ action("HomeController@index") }}">{{ trans('messages.home') }}</a></li>
        </ul>
        <h1>
            <span class="text-semibold"><i class="icon-list2"></i> {{ trans('messages.my_lists') }}</span>
        </h1>
    </div>

@endsection

@section('content')
    <div style="float: right;margin-bottom: 20px" class="col-md-3 text-right">
        <a href="{{url('/tag/create')}}" type="button" class="btn bg-info-800">
            <i class="icon icon-plus2"></i> Create Tag
        </a>
    </div>

    <table id="data-table" class="table table-box pml-table">
        <thead>
        <th>
            <h2 style="display: none">Email</h2>
        </th>
        <th>
            <h2 style="display: none">Email</h2>

        </th>
        </thead>
        <tbody>
        @foreach ($lists as $key => $item)
            <tr>
                <td>

                    <h5 class="no-margin text-bold">
                        {{ $item->name }} (20 Subscribers)
                    </h5>
                    <span class="text-muted">{{ trans('messages.created_at') }}: {{ ($item->created_at) }}</span>
                </td>
                <td class="text-right">

                    <div class="btn-group mr-2 mb-2" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                Options
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a href="{{url('/tag/edit/')."/". $item->id}}" class="dropdown-item">Edit</a>
                                <a href="{{url('/tag/delete/')."/". $item->id}}" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
