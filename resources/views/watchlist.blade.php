@extends('layout')
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
                        <td class="table-dark"><img src="{{asset('images/'.$w->imageThumbnail)}}" alt="" style="max-width: 100px"></td>
                        <td class="table-dark">{{$w->title}}</td>
                        <td class="table-dark">{{$w->status}}</td>
                        <td class="table-dark">
                            <a href="" class="btn btn-danger addAttr" data-bs-toggle="modal" data-bs-target="#modal-update" data-id="{{$w->w_id}}">Update</a>
                            {{-- <a data-target="#modal-delete-{{ $w->w_id }}"> --}}
                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-update">
                                    Action
                                </button> --}}
                            {{-- </a> --}}
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="pagination justify-content-end">
                    {{$watchlist->links()}}
                </div>
            </div>
        </div>
        {{-- <div class="modal fade modal" id="modal-update-{{$w->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Change Status</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="modal_body"></h6>
                    <form action="/watchlists/update/{{$recepient-id}}">
                        @csrf
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected value="Planning">Planned</option>
                            <option value="Watching">Watching</option>
                            <option value="Finished">Finished</option>
                            <option value="Remove">Remove</option>
                          </select>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
        </div> --}}
    </content>
    {{-- <script>
        $('.addAttr').click(function() {
        var id = $(this).data('id');
        var str = 'ID = ' , id
        $('#id').val(id);
        $("#modal_body").html(id);
        } );
     </script> --}}
     <script>
        $(document).ready(function(){
            $("#modal-update").on("show.bs.modal", function(event){
              var button = $(event.relatedTarget); // button the triggered modal
                var w_id = button.data("id"); //data-id of button which is equal to id (primary key) of person
                /*
                Although below is working to get and display values for id (personId),
                it is recommended that they be fetched via ajax ($.ajax()) that queries data
                from database based on personId
                */

                //displays values to modal
                var modal = $(this)
                $(this).find("#personDetails").html($("<b>ID: " + w_id ))
                modal.find('.modal-body form').val(recipient)
            });
        });
        </script>
@endsection
