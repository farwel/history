@extends('app')

@section('content')

@if(session()->has('success'))
<div class="notification is-success">
    Event created. <i class="fa fa-thumbs-o-up is-pulled-right" aria-hidden="true"></i>
</div>
@endif

{!! Form::open(['route' => 'events.store']) !!}
{!! Form::token() !!}
<div class="columns is-multiline">
    <div class="column is-12">
        <div class="field">
            <div class="control columns is-multiline">
                @include('events.type', ['icon' => 'fa fa-user', 'type' => 'person'])
                @include('events.type', ['icon' => 'fa fa-paint-brush', 'type' => 'art'])
                @include('events.type', ['icon' => 'fa fa-fighter-jet', 'type' => 'war'])
                @include('events.type', ['icon' => 'fa fa-wpexplorer', 'type' => 'discovery'])
                @include('events.type', ['icon' => 'fa fa-lightbulb-o', 'type' => 'invention'])
                @include('events.type', ['icon' => 'fa fa-road', 'type' => 'construcction'])
                @include('events.type', ['icon' => 'fa fa-university', 'type' => 'political'])
                @include('events.type', ['icon' => 'fa fa-usd', 'type' => 'economic'])
                @include('events.type', ['icon' => 'fa fa-hand-rock-o', 'type' => 'protest'])
                @include('events.type', ['icon' => 'fa fa-bomb', 'type' => 'terrorism'])
                @include('events.type', ['icon' => 'fa fa-ambulance', 'type' => 'disaster'])
                @include('events.type', ['icon' => 'fa fa-futbol-o', 'type' => 'sport'])
            </div>
        </div>
    </div>
    <div class="column is-12">
        <div class="field">
            {!! Form::label('title', 'Title', ['class' => 'label']) !!}
            <div class="control">
                {!! Form::text('title', null, ['class' => 'input', 'required' => 'required']) !!}
            </div>
        </div>
    </div>
    <div class="column is-one-third">
        <div class="field">
            {!! Form::label('region', 'Region', ['class' => 'label']) !!}
            <div class="control">
                <div class="select is-fullwidth">
                    {{ Form::select('region', $regions, null, ['class' => 'input', 'required' => 'required']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="column is-one-third">
        <div class="field">
            {!! Form::label('country', 'Country', ['class' => 'label']) !!}
            <div class="control">
                <div class="control">
                    {!! Form::text('country', null, ['class' => 'input']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="column is-one-third">
        <div class="field">
            {!! Form::label('city', 'City', ['class' => 'label']) !!}
            <div class="control">
                <div class="control">
                    {!! Form::text('city', null, ['class' => 'input']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="column is-one-third">
        <div class="field">
            {!! Form::label('start_year', 'Year', ['class' => 'label']) !!}
            <div class="control">
                {!! Form::text('start_year', null, ['class' => 'input', 'required' => 'required', 'pattern' => '\d{4}']) !!}
            </div>
        </div>
    </div>
    <div class="column is-one-third">
        <div class="field">
            {!! Form::label('start_month', 'Month', ['class' => 'label']) !!}
            <div class="control">
                <div class="select is-fullwidth">
                    {{ Form::select('start_month', $months, null, ['class' => 'input']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="column is-one-third">
        <div class="field">
            {!! Form::label('start_day', 'Day', ['class' => 'label']) !!}
            <div class="control">
                {!! Form::text('start_day', null, ['class' => 'input', 'pattern' => '\d{1-2}']) !!}
            </div>
        </div>
    </div>
    <div class="column is-one-third">
        <div class="field">
            {!! Form::label('end_year', 'End year', ['class' => 'label']) !!}
            <div class="control">
                {!! Form::text('end_year', null, ['class' => 'input', 'pattern' => '\d{4}']) !!}
            </div>
        </div>
    </div>
    <div class="column is-one-third">
        <div class="field">
            {!! Form::label('end_month', 'End month', ['class' => 'label']) !!}
            <div class="control">
                <div class="select is-fullwidth">
                    {{ Form::select('end_month', $months, null, ['class' => 'input']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="column is-one-third">
        <div class="field">
            {!! Form::label('end_day', 'End day', ['class' => 'label']) !!}
            <div class="control">
                {!! Form::text('end_day', null, ['class' => 'input', 'pattern' => '\d{1-2}']) !!}
            </div>
        </div>
    </div>
    <div class="column is-12">
        <div class="field">
            {!! Form::label('description', 'Description', ['class' => 'label']) !!}
            <div class="control">
                {!! Form::textarea('description', null, ['class' => 'textarea']) !!}
            </div>
        </div>
    </div>
</div>

{!! Form::button('Create', ['class' => 'button is-primary is-fullwidth', 'type' => 'submit']) !!}
{!! Form::close() !!}

@endsection
