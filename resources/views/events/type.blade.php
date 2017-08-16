<div class="column is-2">
    <label class="box has-text-centered" title="{{ $type }}">
        <span class="icon">
            <i class="{{ $icon }}"></i>
        </span>
        <div>{{ ucwords($type) }}</div>
        {!! Form::radio('type', $type, null, ['required' => 'required']) !!}
    </label>
</div>
