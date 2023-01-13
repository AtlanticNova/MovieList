@extends('admin.layout')
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
                <div style="display: flex; flex-direction: row;justify-content: space-between;align: center;">
                    <h1>{{$actorData->name}}</h1>
                    <div>
                        <a href="/admin/actor/edit/{{$actorData->id}}">
                            <button type="button" class="btn btn-outline-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </button>
                        </a>
                        <a href="/admin/actor/remove/{{$actorData->id}}">
                            <button type="button" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                            </button>
                        </a>
                    </div>
                </div>
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
                                <a href="/admin/movies/{{$m->id}}" class="stretched-link"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
