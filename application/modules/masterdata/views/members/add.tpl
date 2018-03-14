<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data Member</h3>
            <form role="form">
                <div class="form-group">
	                <label>Nama Members</label>
	                <input name="field_name"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>No Indentitas</label>
                    <input name="field_name"type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="futsal_address" class="form-control">
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="futsal_email" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>No. Telp 1</label>
                    <input name="futsal_phone1" type="number" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>No. Telp 2</label>
                    <input name="futsal_phone2" type="number" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Lapangan</label>
                    <select name="field_type" class="form-control select">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah Pembayaran</label>
                    <input name="field_name" type="number" class="form-control"/>
                </div>
                
            </form>

        </div>
    </div>
</div>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        	<h3>Jadwal Main</h3>
        	<div class="form-inline" role="form">
                <div class="form-group">
                    <label class="sr-only">Tanggal</label>
                    <input type="text" class="form-control datepicker"/>
                </div>
            	<div class="form-group">
                    <label class="sr-only">Main Jam</label>
                    <select name="price_timefrom"class="form-control select" placeholder="Dari Jam" style="width:200px;">
                    <option>Main Jam</option>
                    <option value="8">08.00</option>
                    <option value="9">09.00</option>
                    <option value="10">10.00</option>
                    <option value="11">11.00</option>
                    <option value="12">12.00</option>
                    <option value="13">13.00</option>
                    <option value="14">14.00</option>
                    <option value="15">15.00</option>
                    <option value="16">16.00</option>
                    <option value="17">17.00</option>
                    <option value="18">18.00</option>
                    <option value="19">19.00</option>
                    <option value="20">20.00</option>
                    <option value="21">21.00</option>
                    <option value="22">22.00</option>
                    <option value="23">23.00</option>
                    <option value="24">24.00</option>
                    </select>
                </div>
                <div class="form-group">
	                <label class="sr-only">Harga</label>
	                <input class="form-control" type="text" placeholder="Harga" style="width:200px;"/>
                </div>                                    
                <button type="submit" class="btn btn-info btn-condensed"><span class="fa fa-plus"></span></button>
            </div>
            <div class="table-responsive">
                <table class="table datatable_simple">
                  	<thead>
                     	<tr>
                        	<th width="20px">No</th>
                            <th>Tanggal</th>
                        	<th>Mulai Jam</th>
                        	<th>Action</th>
                     	</tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>11/04/2018</td>
                            <td>08.00</td>
                            <td><button type="button" class="btn btn-danger active"><span class="fa fa-trash"></span>Hapus</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>11/04/2018</td>
                            <td>08.00</td>
                            <td><button type="button" class="btn btn-danger active"><span class="fa fa-trash"></span>Hapus</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>11/04/2018</td>
                            <td>08.00</td>
                            <td><button type="button" class="btn btn-danger active"><span class="fa fa-trash"></span>Hapus</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
            <button type="button" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
            <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </div>
        </div>
    </div>
</div>