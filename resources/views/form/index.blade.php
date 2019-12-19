@extends('layouts.v2.index')
@section('content')
    <style>
        .form_image{
           padding-top: 10px;
           padding-bottom: 10px;
           height: 300px;
           width: 250px;
       }
    </style>
   <div class="row">

       <div class="text-center col-md-4">
           <b>Sign-up form</b><br/>
           <a href="{{url("lists/$unit_id/pages/sign_up_form/update")}}"><img class="form_image" src="{{url('forms/a.png')}}"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Sign-up form Design B</b><br/>
           <a href="{{url("lists/$unit_id/pages2/sign_up_form_2/update2")}}"><img class="form_image" src="{{url('forms/b.png')}}"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Sign-up form Design C</b><br/>
           <a href="{{url("lists/$unit_id/pages3/sign_up_form_3/update3")}}"><img class="form_image" src="{{url('forms/c.png')}}"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Sign-up "Thank you" page</b><br/>
           <a href="{{url("lists/$unit_id/pages/sign_up_thankyou_page/update")}}"><img class="form_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuuSByRIpfCVoRPklhKTCIocuSEsL-cqblO222Uw2lIbnfoI8w"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Sign-up Confirmation "Thank  you" page</b><br/>
           <a href="{{url("lists/$unit_id/pages/sign_up_confirmation_thankyou/update")}}"><img class="form_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuuSByRIpfCVoRPklhKTCIocuSEsL-cqblO222Uw2lIbnfoI8w"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Final "Welcome" email</b><br/>
           <a href="{{url("lists/$unit_id/pages/sign_up_welcome_email/update")}}"><img class="form_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuuSByRIpfCVoRPklhKTCIocuSEsL-cqblO222Uw2lIbnfoI8w"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Unsubscribe form</b><br/>
           <a href="{{url("lists/$unit_id/pages/unsubscribe_form/update")}}"><img class="form_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuuSByRIpfCVoRPklhKTCIocuSEsL-cqblO222Uw2lIbnfoI8w"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Unsubscribe success form</b><br/>
           <a href="{{url("lists/$unit_id/pages/unsubscribe_success_page/update")}}"><img class="form_image"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuuSByRIpfCVoRPklhKTCIocuSEsL-cqblO222Uw2lIbnfoI8w"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Unsubscribe success page</b><br/>
           <a href="{{url("lists/'$unit_id'/pages/unsubscribe_goodbye_email/update")}}"><img class="form_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuuSByRIpfCVoRPklhKTCIocuSEsL-cqblO222Uw2lIbnfoI8w"><br/></a>
       </div>


       <div class="text-center col-md-4">
           <b>Unsubscribe "Goodbye" email</b><br/>
           <a href="{{url("lists/'$unit_id'/pages/unsubscribe_goodbye_email/update")}}"><img class="form_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuuSByRIpfCVoRPklhKTCIocuSEsL-cqblO222Uw2lIbnfoI8w"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Update profile email sent</b><br/>
           <a href="{{url("lists/'$unit_id'/pages/profile_update_email_sent/update")}}"><img class="form_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuuSByRIpfCVoRPklhKTCIocuSEsL-cqblO222Uw2lIbnfoI8w"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Update profile email</b><br/>
           <a href="{{url("lists/'$unit_id'/pages/profile_update_email/update")}}"><img class="form_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuuSByRIpfCVoRPklhKTCIocuSEsL-cqblO222Uw2lIbnfoI8w"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Update profile form</b><br/>
           <a href="{{url("lists/'$unit_id'/pages/profile_update_form/update")}}"><img class="form_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuuSByRIpfCVoRPklhKTCIocuSEsL-cqblO222Uw2lIbnfoI8w"><br/></a>
       </div>

       <div class="text-center col-md-4">
           <b>Update profile success page</b>
           <a href="{{url("lists/'$unit_id'/pages/profile_update_success_page/update")}}"><img class="form_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuuSByRIpfCVoRPklhKTCIocuSEsL-cqblO222Uw2lIbnfoI8w"><br/></a>
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

