<form class="w-50 m-auto mt-5" wire:submit="submit">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">file</label>
        <input type="file" class="form-control" wire:model="photo" id="exampleInputEmail1" >
        <div class="text-danger">@error('photo') {{ $message }} @enderror</div>
        <br>
        <div class="spinner-border text-primary" role="status" wire:loading wire:target='photo'>
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div class="mb-3">
        @if ($photo)
        <img src="{{ $photo->temporaryUrl() }}" width="400px">
        <div class="text-danger">@error('photo') {{ $message }} @enderror</div>
    @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
