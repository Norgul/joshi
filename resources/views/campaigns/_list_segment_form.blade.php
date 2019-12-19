<?php $index = isset($index) ? $index : '__index__' ?>

<div class="condition-line" rel="{{ $index }}">
    <div class="row list-segment-container">
        <div class="col-md-2">
            <div class="form-group">
                <label>{{ trans('messages.default_list_information') }}</label>
                <div>
                    <input type='hidden' name="lists_segments[{{ $index }}][is_default]" value="false" />
                    @include('helpers.form_control', [
                        'include_blank' => trans('messages.choose'),
                        'type' => 'radio',
                        'name' => 'lists_segments[' . $index . '][is_default]',
                        'label' => '',
                        'popup' => trans('messages.campaign_default_list_help'),
                        'value' => $lists_segment_group['is_default'],
                        'options' => [['text' => trans('messages.selected'), 'value' => 'true']],
                        'rules' => [],
                        'radio_group' => 'campaign_list_info_defaulf',
                    ])
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>{{ trans('messages.default_list_information') }}</label>
                <div>
                    <div class="radio">
                        <label><input type="radio" value="a" class="rec_choice" name="rec_choice">Choose Recepients From Subscribers List</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="b" class="rec_choice" name="rec_choice">Choose Recepients From Tags</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 list_select_box" target-box="segments-select-box"
            segments-url="{{ action('SegmentController@selectBox') }}">
            @include('helpers.form_control', [
                'name' => 'lists_segments[' . $index . '][mail_list_uid]',
                'include_blank' => trans('messages.choose'),
                'type' => 'select',
                'label' => trans('messages.which_list_send'),
                'value' => (is_object($lists_segment_group['list']) ? $lists_segment_group['list']->uid : ""),
                'options' => Auth::user()->customer->readCache('MailListSelectOptions', []),
                'rules' => isset($rules) ? $rules : []
            ])
        </div>

        <div  class="col-md-12 tags_list_select">
            <label>Select Tags:</label>

            <select class="js-example-basic-multiple" name="tags_my_own[]" multiple="multiple">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select><br/><br/>

            <div class="col-md-4">
                <label>Name:</label>
                <input name="name">
            </div><br/><br/>

            <div class="col-md-4">
                <label>Default Subject:</label>
                <input name="subject">
            </div><br/><br/>

            <div class="col-md-4">
                <label>From Email:</label>
                <input name="from_email">
            </div><br/><br/>

            <div class="col-md-4">
                <label>From Name:</label>
                <input name="from_name">
            </div><br/><br/>

        </div>


        <div class="col-md-5 segments-select-box multiple">
            @if (is_object($lists_segment_group['list']) && collect($lists_segment_group['list']->readCache('SegmentSelectOptions', []))->count())
                @include('helpers.form_control', [
                    'value' => implode(",", $lists_segment_group['segment_uids']),
                    'type' => 'select',
                    'name' => 'lists_segments[' . $index . '][segment_uids][]',
                    'label' => trans('messages.which_segment_send'),
                    'options' => collect($lists_segment_group['list']->readCache('SegmentSelectOptions', [])),
                    'multiple' => true,
                    'quick_note' => trans('messages.leave_empty_to_choose_all_list')
                ])
            @endif
        </div>
        <div class="col-md-1 pt-28">
            <a onclick="$(this).parents('.condition-line').remove()" href="#delete" class="btn bg-danger-400"><i class="icon-trash"></i></a>
        </div>
    </div>
    <hr class="mt-10">


</div>
