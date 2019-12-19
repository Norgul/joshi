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
    <h1>Spam Detector </h1>

    <div class="container">

        <div class="row">
            <!--un-minified css code-->
            <div class="col-sm-12">
                <form method="post" action="{{url('/spam-word-scanner/save')}}" enctype="multipart/form-data">
                    <label>Upload File of Spam Words</label>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input name="file" type="file"><br/>
                    <button style="margin-bottom: 20px" class="btn btn-primary" type="submit">Submit</button>
                </form>

                <div class="panel panel-primary">

                    <div class="panel-body">

                                <textarea id="textForScan" cols="10" rows="14" style="width: 90%" class="form-control " name="content_text"
                                          autofocus
                                          required
                                          placeholder="Paste text here">{{old('content_text')
                                }}</textarea>
                        <h3>Scanned Text</h3>
                        <div style="border: 1px solid greenyellow;padding: 5px;width: 90%" id="afterScan">

                        </div>
                    </div>

                </div>

                <div class="submit-btn">
                    <div class="text-action">
                        {{--                                <div class="g-recaptcha" data-sitekey="6LdIOykUAAAAADCrgqWrvty50NDkUGhi1Gax3GOK"></div>--}}
                        <button type="button" id="scan" class="btn btn-primary">Scan Text</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script>
        $('document').ready(function () {
            $('#scan').on('click', function () {
                const raw = $('#textForScan').val();

                const words ='{{$words}}'


                let array = [];
                let new_string = "";

                array = raw.split(' ');

                array.forEach(element => {
                    if (words.includes(element.replace('.', '').replace(',', ''))) {
                        new_string += '<span style="color: red;font-weight: bolder">' + element + '</span> ';
                    } else {
                        new_string += element + ' ';
                    }
                });

                $('#afterScan').html(new_string);
            })

        })
    </script>
@endsection
