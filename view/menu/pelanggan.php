<div class="col-md-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pelanggan</h3>



        </div>
        
                <button type="button" class="btn btn-primary btn-md my-3 mx-4" data-toggle="modal" data-target="#modal-tambah" style="margin-left: 10px; margin-right: 10px;">
                    Tambah
                </button>
                <div class="modal fade" id="modal-tambah">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-justify">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                        <form>
                            <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
                            </div>
                            <div class="form-group">
                            <label for="telepon">No. Telepon:</label>
                            <input type="text" class="form-control" name="telepon" placeholder="Masukkan No. Telepon">
                            </div>
                        </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
           
        <!-- /.box-header -->
        <div class="box-body">
          

            <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">No. Telepon</th>
                <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr class="align-middle">
                <td>1</td>
                <td>Orang</td>
                <td>Jl.kamu</td>
                <td>0874567898765</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-edit">
                    Edit
                    </button>

                    <div class="modal fade" id="modal-edit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-justify">Update Data</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="edit-nama">Nama:</label>
                                <input type="text" class="form-control" id="edit-nama" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="edit-alamat">Alamat:</label>
                                <input type="text" class="form-control" id="edit-alamat" placeholder="Masukkan Alamat">
                            </div>
                            <div class="form-group">
                                <label for="edit-telepon">No. Telepon:</label>
                                <input type="text" class="form-control" id="edit-telepon" placeholder="Masukkan No. Telepon">
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                    </div>

                    <!-- Button trigger modal delete -->
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-hapus">
                    Delete
                    </button>

                    <div class="modal fade" id="modal-hapus">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-justify">Delete Data</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this data?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                    </div>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</div>