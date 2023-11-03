<div>
    <div class="pagetitle">
        <h1>Role</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('role.page') }}">Role</a></li>
            <li class="breadcrumb-item">Role Form</li>
          </ol>
        </nav>
      </div>

      <div class="card">
        <div class="card-body row">
            <div class="col-12">
                <label for="">Name Role</label>
                <input type="text" wire:model="name" class="form-control">
                @error("name")
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-12">
                <label for="">Permission</label>
                @foreach($permissions as $permission)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" wire:model="permission" value="{{ $permission->id }}" id="{{ $permission->id }}">
                        <label class="form-check-label" for="{{ $permission->id }}">
                            {{ $permission->name }}
                        </label>
                  </div>
                @endforeach
                @error("permission")
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <br>
                <a class="btn btn-secondary" href="{{ route('role.page') }}">Back</a>
                <button class="btn btn-primary" wire:click="submit">Save</button>
            </div>
        </div>
      </div>
</div>
