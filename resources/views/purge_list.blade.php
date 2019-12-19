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
        <h1>List of Non Openers</h1>
        @if($nonOpeners!=null)
            <table class="table table-responsive">
                <thead>
                <tr>
                    Email
                </tr>
                <tr>
                    Action
                </tr>
                </thead>
                <tbody>
                @foreach($nonOpeners as $nonOpener)
                    <td>{{$nonOpener->email}}</td>
                    <td><a href="#">
                            <button class="btn btn-danger">Remove</button>
                        </a></td>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    Email
                </tr>
                <tr>
                    Action
                </tr>
                </tfoot>
            </table>
        @endif

@endsection
