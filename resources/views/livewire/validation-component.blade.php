<form class="w-50 m-auto mt-5" wire:submit="submit">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" wire:model.live="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        <div class="text-danger">@error('email') {{ $message }} @enderror</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" wire:model.live="password" id="exampleInputPassword1">
        <div class="text-danger" >@error('password') {{ $message }} @enderror</div>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" wire:model="remember" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
