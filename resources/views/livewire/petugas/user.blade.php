<div class="row">
    <div class="col-12">

    @include('admin-lte/flash')
    @include('petugas/user/edit')
    
    <div class="card">
    <div class="card-header">
             <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                <input wire:model="search" type="search" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                </div>
            </div>
            </div>
            <!-- /.card-header -->
            @if ($user->isNotEmpty())
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th width="10%">No</th>
                    <th>Nama</th>
                    <th>User Name</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($user as $item)
                @if($item->id !== auth()->id())
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->username}}</td>
                        <td>
                            @endif
                           @if ($item->roles[0]->name == 'peminjam')
                                <span class="badge bg-fuchsia">Peminjam</span>
                            @endif
                       <th>
                        @if($item->id !== auth()->id())
                        <div class="btn-group">
                                <span wire:click="edit({{$item->id}})" class="btn btn-sm btn-primary mr-2">Edit</span>
                                <span wire:click="delete({{$item->id}})" class="btn btn-sm btn-danger">Hapus</span>
                                @endif
                            </th>
                      </td>
                    </tr>
                @endforeach 
    <div class="row justify-content-center">
        {{$user->links()}}
    </div>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        @endif
    </div>
    
    @if ($user->isEmpty())
        <div class="card">
            <div class="card-body">
                <div class="alert alert-danger">
                    User tidak ditemukan
                </div>
            </div>
        </div>
    @endif


    </div>
</div>
<!-- /.row -->