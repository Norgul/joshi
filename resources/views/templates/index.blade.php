@extends('layouts.v2.index')
@section('content')
	<table class="table table-box pml-table">
		@foreach ($templates as $key => $template)
			<tr>
				<td width="1%">
					<div class="text-nowrap">
						<div class="checkbox inline">
							<label>
								<input type="checkbox" class="node styled"
									   custom-order="{{ $template->custom_order }}"
									   name="ids[]"
									   value="{{ $template->uid }}"
								/>
							</label>
						</div>
						@if (request()->sort_order == 'custom_order' && request()->from == 'mine' && empty(request()->keyword))
							<i data-action="move" class="icon icon-more2 list-drag-button"></i>
						@endif
					</div>
				</td>
				<td width="1%">
					<a href="#"  onclick="popupwindow('{{ action('TemplateController@preview', $template->uid) }}', '{{ $template->name }}', 800, 800)">
						<img class="template-thumb" width="100" height="120" src="{{ action('TemplateController@image', $template->uid) }}?v={{ rand(0,10) }}" />
					</a>
				</td>
				<td>
					<h5 class="no-margin text-bold">
						<a class="kq_search" href="#" onclick="popupwindow('{{ action('TemplateController@preview', $template->uid) }}', '{{ $template->name }}', 800, 800)">
							{{ $template->name }}
						</a>
					</h5>
					<span class="text-muted">
                        {!! is_object($template->admin) ? '<i class="icon-user-tie"></i>' . $template->admin->displayName() : '' !!}
						{!! is_object($template->customer) ? '<i class="icon-user"></i>' . $template->customer->displayName() : '' !!}
                    </span>
					<br>
					<span class="text-muted">{{ trans('messages.updated_at') }}: {{ Tool::formatDateTime($template->created_at) }}</span>
				</td>

				<td>
					<div class="single-stat-box pull-left">
						<span class="no-margin stat-num">{{ trans('messages.template_type_' . $template->source) }}</span>
						<br>
						<span class="text-muted text-nowrap">{{ trans('messages.type') }}</span>
					</div>
				</td>

				<td class="text-right">
					@if (Auth::user()->customer->can('update', $template))
						@if ($template->source == 'builder')
							<a href="{{ action('TemplateController@rebuild', $template->uid) }}" type="button" class="btn bg-grey btn-icon"> <i class="icon-pencil"></i> {{ trans('messages.edit') }}</a>
						@else
							<a href="{{ action('TemplateController@edit', $template->uid) }}" type="button" class="btn bg-grey btn-icon"> <i class="icon-pencil"></i> {{ trans('messages.edit') }}</a>
						@endif
					@endif
					@if (Auth::user()->customer->can('preview', $template) ||
                        Auth::user()->customer->can('copy', $template) ||
                        Auth::user()->customer->can('delete', $template))
						<div class="btn-group">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret ml-0"></span></button>
							<ul class="dropdown-menu dropdown-menu-right">
								@if (Auth::user()->customer->can('preview', $template))
									<li><a href="#preview" onclick="popupwindow('{{ action('TemplateController@preview', $template->uid) }}', '{{ $template->name }}', 800, 800)"><i class="icon-zoomin3"></i> {{ trans("messages.preview") }}</a></li>
								@endif
								@if (Auth::user()->customer->can('copy', $template))
									<li>
										<a
												href="{{ action('TemplateController@copy', $template->uid) }}"
												type="button"
												class="modal_link"
												data-method="GET"
										>
											<i class="icon-copy4"></i> {{ trans("messages.template.copy") }}
										</a>
									</li>
								@endif
								@if (Auth::user()->customer->can('delete', $template))
									<li><a delete-confirm="{{ trans('messages.delete_templates_confirm') }}" href="{{ action('TemplateController@delete', ["uids" => $template->uid]) }}"><i class="icon-trash"></i> {{ trans("messages.delete") }}</a></li>
								@endif
							</ul>
						</div>
					@endif
				</td>
			</tr>
		@endforeach
	</table>
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

