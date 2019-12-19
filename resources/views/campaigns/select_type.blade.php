@extends('layouts.v2.index')
@section('content')
    <div class="row">
        <div class="col-md-10">
            <ul class="list-group">
                @foreach (MailChamp\Model\Campaign::types() as $key => $type)

                    <li class="list-group-item">
                        <a style="float: right" href="{{ action("CampaignController@create", ["type" => $key]) }}" class="btn btn-info
                        bg-info-800">{{ trans
                        ('messages.choose') }}</a>
                        <a href="{{ action("CampaignController@create", ["type" => $key]) }}">
                        <span class="">
                            <i class="{{ $type['icon'] }} text-grey-800"></i>
                        </span>
                        </a>
                        <h4><a href="{{ action("CampaignController@create", ["type" => $key]) }}">{{ trans('messages.' . $key) }}</a></h4>
                        <p>
                            {{ trans('messages.campaign_intro_' . $key) }}
                        </p>
                    </li><br/><br/>

                @endforeach

            </ul>
            <div class="form-group">
                <br/>
                <a href="{{ action('CampaignController@index') }}" type="button" class="btn bg-grey">
                    <i class="icon-cross2"></i> {{ trans('messages.cancel') }}
                </a>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
@endsection

{{--@section('title', trans('messages.select_campaign_type'))--}}

{{--@section('page_script')--}}
{{--	<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>--}}

{{--    <script type="text/javascript" src="{{ URL::asset('js/validate.js') }}"></script>--}}
{{--@endsection--}}

{{--@section('page_header')--}}
{{--<div class="page-title">--}}
{{--    <ul class="breadcrumb breadcrumb-caret position-right">--}}
{{--        <li><a href="{{ action("HomeController@index") }}">{{ trans('messages.home') }}</a></li>--}}
{{--        <li><a href="{{ action("CampaignController@index") }}">{{ trans('messages.campaigns') }}</a></li>--}}
{{--    </ul>--}}
{{--    <h1>--}}
{{--        <span class="text-semibold"><i class="icon-alarm-check"></i> {{ trans('messages.select_campaign_type') }}</span>--}}
{{--    </h1>--}}
{{--</div>--}}
{{--@endsection--}}

