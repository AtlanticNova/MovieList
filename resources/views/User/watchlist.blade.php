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
                                <a href="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-update">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="pagination justify-content-end">
                    {{ $watchlist->links() }}
                </div>
            </div>
        </div>
        <form class="modal fade modal" id="modal-update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            @csrf
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark text-white">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Change Status</h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6 class="modal_body"></h6>
                            <select id="changeStatus" class="form-select" aria-label="Default select example" name="status">
                                <option value="Planning">Planned</option>
                                <option value="Watching">Watching</option>
                                <option value="Finished">Finished</option>
                                <option value="Remove">Remove</option>
                            </select>
                    </div>
                    <div class="modal-footer">
                        <button id="button" type="button" class="btn btn-danger">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
        <script>
            const button = document.querySelector('#button');
            const status = document.querySelector('#changeStatus');
            var index;
            button.onclick = (event) => {
                event.preventDefault();
                index = status.selectedIndex + 1;

            }

        </script>
    </content>
@endsection
