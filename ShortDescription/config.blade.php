<h2>{{ __('app.apps.config') }} ({{ __('app.optional') }}) @include('items.enable')</h2>
<div class="items">
	<input type="hidden" data-config="dataonly" class="config-item" name="config[dataonly]" value="1" />
	<div class="input">
		<label>Short Description</label>
		{!! Form::text('config[shortdesc]', isset($item) && property_exists($item->getconfig(), 'shortdesc') ? $item->getconfig()->shortdesc : null, ['placeholder' => __('app.apps.shortdesc'), 'data-config' => 'shortdesc', 'class' => 'form-control config-item']) !!}
	</div>
</div>
