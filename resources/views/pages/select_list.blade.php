@extends('layouts.v2.index')
@section('content')
    <style>
        img{
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="{{url('/form_list')}}">
                {{csrf_field()}}
                <label>Please Select List</label>
                <select name="list" class="form-control">
                    @foreach($mail_lists as $mail_list)
                        <option  value="{{$mail_list->uid}}">{{$mail_list->name}}</option>
                    @endforeach
                </select><br/><br/>
                <button type="submit" class="btn btn-primary">Next</button>
            </form>


        </div>
    </div>
@endsection

{{--@section('title', trans('messages.templates'))--}}

{{--@section('page_script')--}}
{{--    <script type="text/javascript" src="{{ URL::asset('assets/js/core/libraries/jquery_ui/interactions.min.js') }}"></script>--}}
{{--	<script type="text/javascript" src="{{ URL::asset('assets/js/core/libraries/jquery_ui/touch.min.js') }}"></script>--}}
{{--		--}}
{{--	<script type="text/javascript" src="{{ URL::asset('js/listing.js') }}"></script>		--}}
{{--@endsection--}}

{{--@section('page_header')--}}

{{--			<div class="page-title">				--}}
{{--				<ul class="breadcrumb breadcrumb-caret position-right">--}}
{{--					<li><a href="{{ action("HomeController@index") }}">{{ trans('messages.home') }}</a></li>--}}
{{--				</ul>--}}
{{--				<h1>--}}
{{--					<span class="text-semibold"><i class="icon-list2"></i> {{ trans('messages.templates') }}</span>--}}
{{--				</h1>				--}}
{{--			</div>--}}

{{--@endsection--}}

