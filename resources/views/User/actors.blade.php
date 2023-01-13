@extends('user.layout')
@section('headline', 'Actors')

@section('content')
    <div class="text-white" style="background-color: black; padding:30px;">
        <div class="d-flex justify-content-between">
            <h1 class="px-4">Actors</h1>
            <form class="d-flex">
                <input class="form-control me-2 bg-dark text-white" type="search" placeholder="Search" aria-label="Search" name="search" value="{{ old('search') }}">
                <button class="btn btn-dark" type="submit">Search</button>
            </form>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-1" style="display: flex; flex-direction: row; margin-top: 20px">
            @foreach ($actorsData as $actorsData)
                <div class="card bg-dark text-white mb-2" style="width: 15rem;margin-left: 20px;">
                    <img src="{{ asset('images/' . $actorsData->imageURL) }}" alt="" style="max-height: 300px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $actorsData->name }}</h5>
                        <p class="card-text text-secondary">{{ $actorsData->title }}</p>
                        <a href="/actors/{{ $actorsData->id }}" class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
