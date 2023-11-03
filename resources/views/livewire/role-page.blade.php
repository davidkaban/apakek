<div>
    <div class="pagetitle">
        <h1>Role</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Role</li>
          </ol>
        </nav>
      </div>

      <div class="card">
        <div class="card-header row">
            <div class="col-3">
                <label for="">Search By Name</label>
                <input type="text" class="form-control" wire:model.live="name">
            </div>
            <div class="col-3">
                <label for="">Action</label> <br>
                <a class="btn btn-primary" href="{{ route('role.form') }}">Create Role</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @forelse ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <div class="d-inline">
                                    <a class="btn btn-success" href="{{ route('role.edit', ['role' => $role->id]) }}">Edit</a>
                                    <a class="btn btn-info" href="{{ route('role.detail', ['role' => $role->id]) }}">Detail</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <td colspan="3"> Data Tidak Di Temukan</td>
                    @endforelse
                </tbody>
            </table>
            {{ $roles->links() }}
        </div>
      </div>
</div>
