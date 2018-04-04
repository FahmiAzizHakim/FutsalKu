<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
        <h3>Data User</h3>
            <form role="form">
                <div class="form-group">
	                <label>Nama </label>
	                <input type="text" class="form-control" placeholder="Nama">
                </div>
           
                <div class="form-group">
                    <label>ID </label>
                    <input type="text" class="form-control" placeholder="ID">
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <label>Peran</label>
                    <select name="field_role" class="form-control select">
                    <option></option>
                    {foreach from=$role item=row}
                        <option value="{$row.code_code}">{$row.code_name}</option>
                    {/foreach}
                    </select>
                </div>

                
                <button type="button" class="btn btn-success active"><span class="fa fa-check"></span>Submit</button>
                <button type="button" class="btn btn-danger active"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </form>

        </div>
    </div>
</div>
