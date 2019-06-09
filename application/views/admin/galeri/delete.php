<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?= $value->id ?>">
<i class="fa fa-trash-o"></i> Delete
</button>
<div class="modal fade" id="myModal<?= $value->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
            </div>
            <div class="modal-body">
                Yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="<?= base_url('admin/galeri/hapus/'.$value->id) ?>" class="btn btn-primary"><i class="fa fa-trash-o"></i>  Ya, Hapus Data</a>
            </div>
        </div>
    </div>
</div>
