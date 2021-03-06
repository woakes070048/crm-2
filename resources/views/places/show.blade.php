@extends('common')

@section('title')
Show Place
@endsection

@section('back')
<a class="nav-link" href="{{ route('places.index') }}"><i class="fa fa-arrow-left fa-lg"></i></a>
@endsection

@section('actions')
<li class="nav-item"><a class="nav-link btn btn-primary rounded-circle" href="{{ route('places.edit', $place->id) }}"><i class="fa fa-edit fa-fw"></i></a></li>
<li class="nav-item"><button class="nav-link btn btn-link" type="button" data-toggle="modal" data-target="#modal"><i class="fa fa-trash fa-fw"></i></button></li>
<li class="nav-item"><a class="nav-link btn btn-link" href="{{ route('places.create') }}"><i class="fa fa-plus fa-fw"></i></a></li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        @if (empty($place->image))
        <img class="float-left img-responsive rounded-circle mr-3" width="160" height="160" src="http://placehold.it/160x160&text=No%20Image" alt="" />
        @else
        <img class="float-left img-responsive rounded-circle mr-3" width="160" height="160" src="../media\places\{{ $place->image }}" alt="" />
        @endif
        <h2 class="h4 card-title pt-5">{{ $place->name }} {{ $place->parent }} <span class="float-md-right"><span class="badge badge-pill badge-default">{{ $place->status }}</span><span class="badge badge-pill badge-default ml-1">{{ $place->type }}</span></span></h2>
        <p class="card-subtitle text-muted">

            @if (!empty($place->division))
            <i class="fa fa-diamond mr-1"></i>{{ $place->division }}
            @endif

            @if (!empty($person->phone))
            @if (!empty($person->title))
            at
            @endif
            @endif
        </p>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-md-6">
                <p><i class="text-muted fa fa-home fa-2x fa-fw float-left mr-4 mb-4"></i>{{$place->address}}@if (!empty($place->address2)) {{$place->address2}}@endif<br />{{$place->city}}, {{$place->state}}, {{$place->zip}}<br />{{$place->country}}</p>
            </div>
            <div class="col-md-3">
                <p><i class="text-muted fa fa-phone fa-2x fa-fw float-left mr-4 mb-4"></i>{{$place->phone}}<br /><span class="mt-3">{{$place->alt}}</span></p>
            </div>
            <div class="col-md-3">
                <p><i class="text-muted fa fa-envelope fa-2x fa-fw float-left mr-4 mb-4"></i>{{$place->email}}</p>
            </div>
            <div class="col">
                <p><i class="text-muted fa fa-external-link fa-2x fa-fw float-left mr-4 mb-4"></i>{{$place->web}}</p>
            </div>
        </div>
    </div>
    <div class="card-footer card-block text-muted">
        @if (!empty($place->note))
        <div class="row">
            <div class="col">
                <i class="text-muted fa fa-sticky-note fa-fw mr-1"></i>{{$place->note}}
                <hr>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col">
                <small><i class="text-muted fa fa-id-card fa-fw mr-1"></i>ID#: {{$place->id}}</small>
            </div>
            <div class="col">
                <small><i class="text-muted fa fa-plus-square fa-fw mr-1"></i>Created: {{$place->created_at}}</small>
            </div>
            <div class="col">
                <small><i class="text-muted fa fa-pencil-square fa-fw mr-1"></i>Updated: {{$place->updated_at}}</small>
            </div>
        </div>
    </div>
</div>

<h2>People</h2>
@if (empty($place->people))

@else
@foreach ($place->people as $key => $person)
<i class="fa fa-building mx-1"></i><a class="btn-text" href="{{ route('people.show', $person->id) }}">{{ $person->name }}
@endforeach 
@endif
@endsection

@section('modal')
<div class="modal-header">
    <h5 class="modal-title" id="modal-label">Delete {{ $place->name }}?</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <p>Are you sure you wish to delete? (There is no undo.)</p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    {!! Form::open(['method' => 'DELETE','route' => ['places.destroy', $place->id],'style'=>'display:inline']) !!}{!! Form::button('OK', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}{!! Form::close() !!}
</div>
@endsection