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
