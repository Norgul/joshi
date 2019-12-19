@extends('layouts.v2.index')
@section('content')
    <h3>Edit Tag</h3>
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            Tag Saved Successfully
        </div>
    @endif
    <form action="{{ action('TagManagerController@store') }}" method="POST" class="form-validate-jqueryz">
        {{ csrf_field() }}

        <div class="sub_section col-md-3">
            @include('helpers.form_control', [
                'type' => 'text',
                'name' => 'name',
                'help_class' => 'sender',
                'value'=>$data->name,

            ])

           <input type="hidden" name="id" value="{{$data->id}}">

        </div>
        <hr>
        <div class="text-left">
            <button class="btn bg-teal mr-10"><i class="icon-check"></i> {{ trans('messages.save') }}</button>
            <a href="{{ action('TagManagerController@index') }}" class="btn bg-grey-800"><i class="icon-cross2"></i> {{ trans('messages.cancel') }}</a>
        </div>
    </form>
@endsection


