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
    <div class="container">
        <form method="post" enctype="multipart/form-data" action="{{url('/purge-list')}}">
            <div class="row">
                <div class="col-sm-12">

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="col-md-4">

                            <label>Please enter the number of days you want to view records</label>
                            <input name="days" type="text" class="form-control">
                        </div>
                </div>
            </div>
            <div class="submit-btn">
                <div class="text-action">
                    {{--                                <div class="g-recaptcha" data-sitekey="6LdIOykUAAAAADCrgqWrvty50NDkUGhi1Gax3GOK"></div>--}}
                    <button style="margin-top: 10px;margin-left: 5px" type="submit" class="btn btn-primary">View Subscribers</button>
                </div>
            </div>
        </form>
@endsection
