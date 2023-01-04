@extends('layout')
@section('headline', 'Actors')

@section('content')
    <div style="background-color: black; padding:20px">
        <div>
            <div style="display: flex; flex-direction: row;">
                @foreach ($actorsData as $actorsData)
                    <a href="/actors/{id}" class="card bg-dark"
                        style="width: 15rem; margin-left: 20px; text-decoration: none; color:white">
                        <img src="{{ asset('/' . $actorsData->imageURL) }}" style="height: 300px; width: auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $actorsData->name }}</h5>
                            <p class="card-text">{{ $actorsData->title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
