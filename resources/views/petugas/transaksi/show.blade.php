@if ($show)
<div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Detail Transaksi</h4>
        <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </span>
        </div>
        <div class="modal-body">
             <div class="row">
                 <div class="col-md-7">
                     <table class="table text-nowrap">                    
                        <tbody>
                            <tr>
                                <th>Id Peminjam</th>
                                <td>:</td>
                                <td>{{$peminjam_id}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Pinjam</th>
                                <td>:</td>
                                <td>{{$tanggal_pinjam}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal kembali</th>
                                <td>:</td>
                                <td>{{$tanggal_kembali}}</td>
                            </tr>
                            <tr>
                                <th>Denda</th>
                                <td>:</td>
                                <td>{{$denda}}</td>
                            </tr>
                        </tbody>
                    </table>
                 </div>
             </div>
        </div>
        <div class="modal-footer justify-content-between">
        <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Kembali</span>
        </div>
    </div>
    </div>
</div>
@endif