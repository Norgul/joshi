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
    <h1>Subscribers List</h1>
    @if ($lists->count() > 0)
        <table id="data-table" class="table table-box pml-table">
            <thead>
            <th>
                <h2 style="display: none">Email</h2>
            </th>
            </thead>
            <tbody>
            @foreach ($lists as $key => $item)
                <tr>
                    <td>

                        <h5 class="no-margin text-bold">
                            {{ $item->email }}
                        </h5>
                        <span class="text-muted">{{ trans('messages.created_at') }}: {{ Tool::formatDateTime($item->created_at) }}</span>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
{{--        @include('elements/_per_page_select', ["items" => $lists])--}}
{{--        {{ $lists->links() }}--}}
    @elseif (!empty(request()->keyword))
        <div class="empty-list">
            <i class="icon-address-book2"></i>
            <span class="line-1">
			{{ trans('messages.no_search_result') }}
		</span>
        </div>
    @else
        <div class="empty-list">
            <i class="icon-address-book2"></i>
            <span class="line-1">
			{{ trans('messages.list_empty_line_1') }}
		</span>
            <span class="line-2">
			{{ trans('messages.list_empty_line_2') }}
		</span>
        </div>
    @endif

@endsection
