                            <div class="col-md-10">
                                <hr>								
								<div class="row">
									<div class="col-md-12">										
										<div class="">
											<div class="row ">
												<div class="col-md-3">
													@include('helpers.form_control', [
														'type' => 'checkboxes',
														'name' => 'weekly_recurring_weekdays[]',
														'class' => '',
														'check_all_none' => true,
														'label' => trans('messages.choose_a_weekday'),
														'value' => null !== $first_event->getDataValue('weekdays') ? implode(",", $first_event->getDataValue('weekdays')) : '',
														'options' => MailChamp\Library\Tool::dayOfWeekSelectOptions(),
														'rules' => []
													])
												</div>												
												<div class="col-md-3">
													@include('helpers.form_control', [
														'type' => 'checkboxes',
														'name' => 'weekly_recurring_weeks[]',
														'multiple' => '',
														'check_all_none' => true,
														'label' => ucfirst(trans('messages.weeks')),
														'value' => null !== $first_event->getDataValue('weeks') ? implode(",", $first_event->getDataValue('weeks')) : '',
														'options' => MailChamp\Library\Tool::weekSelectOptions(),
														'rules' => []
													])
												</div>
												<div class="col-md-3">
													@include('helpers.form_control', [
														'type' => 'checkboxes',
														'name' => 'weekly_recurring_months[]',
														'multiple' => '',
														'check_all_none' => true,
														'label' => ucfirst(trans('messages.months')),
														'value' => null !== $first_event->getDataValue('months') ? implode(",", $first_event->getDataValue('months')) : '',
														'include_blank' => trans('messages.Every_month'),
														'options' => MailChamp\Library\Tool::monthSelectOptions(),
														'rules' => []
													])
												</div>
												<div class="col-md-3">
													@include('helpers.form_control', [
														'type' => 'time',
														'name' => 'weekly_recurring_time',
														'label' => ucfirst(trans('messages.at')),
														'value' => null !== $first_event->getDataValue('time') ? MailChamp\Library\Tool::timeStringFromTimestamp(MailChamp\Library\Tool::dateTimeFromString($first_event->getDataValue('time'))) : '',
														'rules' => $first_event->rules(),
														'help_class' => 'trigger'
													])
												</div>
											</div>
										</div>
									</div>
								</div>								
							</div>