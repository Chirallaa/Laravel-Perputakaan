@if ($edit)
        <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input wire:model="name" type="text" class="form-control" id="name" min="1">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input wire:model="username" type="text" class="form-control" id="username" min="1">
                        @error('username') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input wire:model="password" type="password" class="form-control" id="password" min="1">
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Batal</span>
                <span type="button" wire:click="update({{$user_id}})" class="btn btn-success">Update</span>
                </div>
            </div>
            </div>
        </div>
    @endif