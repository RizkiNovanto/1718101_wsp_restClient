<h1 class="h3 mb-4 text-gray-800 text-center text-primary"><strong>Ustadz</strong></h1>
<br><br><br>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModalCenterUst"><i class="fa fa-table mr-3"></i>Tambah Data</button>
<br>
<br>
<br>
<table class="table ">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">ustadz_id</th>
            <th scope="col">nama_ustadz</th>
            <th scope="col">alamat_ustadz</th>
            <th scope="col">no_hp_ustadz</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody id="table_ustadz">

    </tbody>

</table>
<div class="modal fade" id="exampleModalCenterUst" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formustadz">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" name="createNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="text" class="form-control" name="createAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">No Hp</label>
                        <input type="text" class="form-control" name="createNoHp" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary addUst" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCenterUst" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formustadz">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" name="updateNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="text" class="form-control" name="updateAlamat" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">No Hp</label>
                        <input type="text" class="form-control" name="updateNoHp" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updateUst" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>