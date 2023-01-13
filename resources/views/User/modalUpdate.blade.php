<form class="modal fade" id="modal-update{{$w->w_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" method="POST" action="/watchlists/update/{{$w->w_id}}">
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
                        <option value="1">Planned</option>
                        <option value="2">Watching</option>
                        <option value="3">Finished</option>
                        <option value="Remove">Remove</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Save changes</button>
            </div>
        </div>
    </div>
</form>
