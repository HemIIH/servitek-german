@extends('admin.settings.misc.salaries.partials.layout')

@section('panel')
    <div class="panel-heading">
        <h3>{{ $text->title }}</h3>
    </div>
    <div class="panel-body text-justify">
        {!! $text->body !!}
    </div>
@endsection