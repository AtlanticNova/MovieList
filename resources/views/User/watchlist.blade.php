@extends('user.layout')
@section('headline', 'Watchlist')

@section('content')
    <content>
        <div class="text-white p-5" style="background-color: black;max-height: 150vh;min-height: 100vh">
            <div class="pb-5">
                <h1 class="pb-3">My Watchlist</h1>
                <form class="d-flex">
                    <input class="form-control me-2 bg-dark text-white" type="search" placeholder="Search your watchlist..." aria-label="Search" name="search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </div>
            <div style="display: flex; flex-direction: row;align-items: center;margin-bottom: 30px">
                <div style="display:flex; flex-direction: row;justify-content: space-around;align-items: center; padding-right: 15px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-filter-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M7 11.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </div>
                <div class="pl-3">
                    <form action="/watchlists/{{Auth::user()->id}}" method="GET" class="d-flex">
                        @csrf
                        <select name="sorting" class="form-select bg-dark text-white" aria-label="Default select example" style="max-width:170px;border: none; margin-right:10px;">
                            <option value="all" selected>All</option>
                            <option value="1">Planned</option>
                            <option value="2">Watching</option>
                            <option value="3">Finished</option>
                        </select>
                        <button class="btn btn-danger" type="submit">Sort</button>
                    </form>
                </div>
            </div>
            <div>
                <table class="table table-dark table-striped align-middle">
                    <tr class="table-dark">
                        <td>Poster</td>
                        <td>Title</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($watchlist as $w)
                        <tr class="table-dark">
                            <td class="table-dark"><img src="{{ asset('images/' . $w->imageThumbnail) }}" alt="" style="max-width: 100px"></td>
                            <td class="table-dark">{{ $w->title }}</td>
                            @if ($w->status_id === 1)
                                <td class="table-dark" style="color: #14ca2c">{{ $w->status }}</td>
                            @elseif ($w->status_id === 2)
                                <td class="table-dark" style="color: #ffe600">{{ $w->status }}</td>
                            @else
                                <td class="table-dark" style="color: #ff0000">{{ $w->status }}</td>
                            @endif
                            <td class="table-dark">
                                <a href="#modal-update{{$w->w_id}}" class="btn btn-secondary" data-bs-toggle="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </a>
                                @include('User.modalUpdate')
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="pagination justify-content-end">
                    {{ $watchlist->links() }}
                </div>
            </div>
        </div>
    </content>
@endsection
