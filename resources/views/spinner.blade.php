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
    <h1>ArticleSpinner </h1>

    <div class="container">
        <form action="{{url('spinner')}}" method="post">


            <div class="row">
                <!--un-minified css code-->
                <div class="col-sm-12">
                    @if(count($errors->all()))
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Alert!</strong> {{ $error }}
                            </div>

                        @endforeach
                    @endif

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="panel panel-primary">

                        <div class="panel-body">
                            @if(Session::has('spinned'))
                                <textarea cols="10" rows="14" style="width: 90%" name="content_text" class="form-control minified_output"
                                          required>{{Session::get
                                ('spinned')
                                }}</textarea>
                            @else
                                <textarea cols="10" rows="14" style="width: 90%" class="form-control " name="content_text" autofocus
                                          required
                                placeholder="Paste text here">{{old('content_text')
                                }}</textarea>
                            @endif
                        </div>

                    </div>

                    <div class="submit-btn">
                        <div class="text-action">
                            {{--                                <div class="g-recaptcha" data-sitekey="6LdIOykUAAAAADCrgqWrvty50NDkUGhi1Gax3GOK"></div>--}}
                            <button type="submit" class="btn btn-primary">Rewrite Article</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>


@endsection
