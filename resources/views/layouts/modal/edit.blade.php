<!-- Edit Personnel details modal -->
<div class="modal fade" id="Modal-{{$id}}" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <form class=""
        action="{{route('pokemon.update')}}"
        method="post">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pokemon Details
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input id="id" hidden type="text"
                    name="id" required value="{{$pokemon->id}}">

                <label>Identifier</label>
                <input id="identifier" type="text"
                    class="form-control @error('identifier') is-invalid @enderror"
                    name="identifier" value="{{$pokemon->identifier ?? ''}}">
                <br />

                <label>Species</label>
                <input id="identifier" type="text"
                    class="form-control @error('species_id') is-invalid @enderror"
                    name="species_id" value="{{$pokemon->species_id ?? ''}}">
                <br />

                <label>Height</label>
                <input id="height" type="text"
                    class="form-control @error('height') is-invalid @enderror"
                    name="height" value="{{$pokemon->height ?? ''}}">
                <br />

                <label>Weight</label>
                <input id="identifier" type="text"
                    class="form-control @error('weight') is-invalid @enderror"
                    name="weight" required value="{{$pokemon->weight ?? ''}}">
                <br />

                <label>Base Experience</label>
                <input id="base_experience" type="text"
                    class="form-control @error('base_experience') is-invalid @enderror"
                    name="base_experience" required value="{{$pokemon->base_experience ?? ''}}">
                <br />

                <label>Order</label>
                <input id="order" type="text"
                    class="form-control @error('order') is-invalid @enderror"
                    name="order" required value="{{$pokemon->order ?? ''}}">
                <br />

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="submit" name="button" class="btn btn-primary">Save
                    changes</button>
            </div>
    </form>
</div>
</div>