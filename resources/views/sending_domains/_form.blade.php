{{ csrf_field() }}

<div class="row">
	<div class="col-sm-12 col-md-12">
		<h3>{{ trans('messages.sending_domain.title') }}</h3>
	</div>
	<div class="col-sm-6 col-md-6">
		@include('helpers.form_control', [
			'type' => 'text',
			'readonly' => $readonly,
			'class' => '',
			'name' => 'name',
			'label' => trans('messages.domain_name'),
			'value' => $server->name,
			'help_class' => 'sending_server',
			'rules' => MailChamp\Model\SendingDomain::rules()
		])
	</div>
	@if (\MailChamp\Model\Setting::isYes('allow_turning_off_dkim_signing'))
		<div class="col-sm-6 col-md-6">
			<div class="form-group checkbox-right-switch">
				@include('helpers.form_control', [
					'type' => 'checkbox',
					'class' => '',
					'name' => 'signing_enabled',
					'value' => $server->signing_enabled,
					'help_class' => 'sending_domain',
					'options' => [0, 1],
					'rules' => MailChamp\Model\SendingDomain::rules()
				])
			</div>
		</div>
	@endif
</div>
<hr >
<div class="text-left">
	<button class="btn bg-teal mr-10"><i class="icon-check"></i> {{ trans('messages.save') }}</button>
</div>
