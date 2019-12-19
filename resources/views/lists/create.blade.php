@extends('layouts.v2.index')

@section('content')
	<form action="{{ action('MailListController@store') }}" method="POST" class="form-validate-jqueryz">
		{{ csrf_field() }}
		@include("lists._form")
		<hr>
		<div class="text-left">
			<button class="btn bg-teal mr-10"><i class="icon-check"></i> {{ trans('messages.save') }}</button>
			<a href="{{ action('MailListController@index') }}" class="btn bg-grey-800"><i class="icon-cross2"></i> {{ trans('messages.cancel') }}</a>
		</div>
	</form>
@endsection


