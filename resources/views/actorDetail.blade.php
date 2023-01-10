@extends('layout')
@section('headline', 'Actor Detail')

@section('content')
    <div class="text-white" style="padding:51.5px; background-color:black;display: flex; flex-direction: row; justify-content: center;">
        <div>
            <img src="{{asset('images/'.$actorData->imageURL)}}" alt="" style="max-width: 250px; margin-right: 20px">
            <div class="pt-3">
                <h4 class="pb-4">Personal Info</h4>
                <h6>Popularity</h6>
                <p style="color:grey">{{$actorData->popularity}}</p>
                <h6>Gender</h6>
                <p style="color:grey">{{$actorData->gender}}</p>
                <h6>Birthday</h6>
                <p style="color:grey">{{$actorData->DOB}}</p>
                <h6>Place of Birth</h6>
                <p style="color:grey">{{$actorData->POB}}</p>
            </div>
        </div>
        <div class="p-4">
            <div>
                <h1>{{$actorData->name}}</h1>
                <h4 style="font-weight:100">Biograhpy</h4>
                <p>{{$actorData->biography}}</p>
            </div>
            <div class="pt-3">
                <h4 style="font-weight:100">Known For</h4>
                <div style="display: flex; flex-direction: row; margin-top: 20px">
                    @foreach ($movie as $m)
                        <div class="card bg-dark text-white" style="width: 15rem;margin-left: 20px;">
                            <img src="{{asset('images/'.$m->imageThumbnail)}}" alt="" style="max-height: 300px">
                            <div class="card-body">
                                <h5 class="card-title">{{$m->title}}</h5>
                                <a href="/movies/{{$m->id}}" class="stretched-link"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
