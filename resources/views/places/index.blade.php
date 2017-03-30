@extends('common')

@section('title')
Places
@endsection

@section('actions')
<li class="nav-item"><a class="nav-link btn btn-primary rounded-circle" href="{{ route('places.create') }}"><i class="fa fa-plus fa-fw"></i></a></li>
@endsection

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="fa fa-times fa-fw"></i></span>
    </button>
    <p><strong>Success!</strong> {{ $message }}.</p>
</div>
@endif

@foreach ($places as $key => $place)
<article class="card card-transparent card-hover flex-row align-items-center my-3 row">
    <div class="col-md-7 col-xs-12 card-block p-3">
        @if (empty($place->image))
        <img class="float-left img-responsive rounded-circle mr-3" width="80" height="80" src="http://placehold.it/160x160" alt="" />
        @else
        <img class="float-left img-responsive rounded-circle mr-3" width="80" height="80" src="media\places\{{ $place->image }}" alt="" />
        @endif

        <h2 class="h4 card-title pt-3"><a class="btn-text" href="{{ route('places.show', $place->id) }}">{{ $place->name }}</a></h2>
        <p class="card-subtitle text-muted">
        {{ $place->address }}{{ $place->address2 }}, {{ $place->city }}, {{ $place->state }}, {{ $place->zip }}

        @if (!empty($place->title))
        <i class="fa fa-diamond mr-1"></i>{{ $place->address1 }}
        @endif

        @if (!empty($place->phone))
            @if (!empty($place->title))
                at
            @endif
        @endif
        </p>
    </div>
    @if (!empty($place->phone))
    <div class="col-md-2 col-xs-12 card-block p-3">
        <p><i class="text-muted fa fa-phone fa-2x fa-fw mr-1 float-left"></i>{{ $place->phone }}</p>
    </div>
    @endif
    @if (!empty($place->email))
    <div class="col-md-3 col-xs-12 card-block p-3">
        <p><i class="text-muted fa fa-envelope fa-2x fa-fw mr-1 float-left"></i>{{ $place->email }}</p>
    </div>
    @endif
</article>
@endforeach

{!! $places->links() !!}

@endsection