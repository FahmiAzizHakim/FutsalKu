<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Kasir Toko</h3>
            <form role="form">
                <div class="form-group">
                    <label>ID Transaksi</label>
                    <input name="field_name"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Jumlah Barang</label>
                    <input name="field_name"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <select name="field_type" class="form-control select">
                    <option></option>
                    <option value="GDTFOD">Makanan</option>
                    <option value="GDTDRK">Minuman</option>
                    <option value="GDTDSCK">Snack/Jajanan</option>
                    <option value="GDTEQP">Peralatan Futsal</option>
                    <option value="GDTOTH">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input name="field_name" type="number" class="form-control"/>
                    </select>
                </div>
                <div class="form-group">
                    <label>Aktif Status</label>
                    <select name="active_status" class="form-control select">
                    <option value="ACTOK">Aktif</option>
                    <option value="ACTNA">Non Aktif</option>
                    </select>
                </div>
                <button type="button" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
                <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </form>

        </div>
    </div>
</div>