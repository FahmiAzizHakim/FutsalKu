<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="{$base_url}masterdata/users/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th width="20px">Username</th>
                            <th>Nama User</th>
                            <th>User Group</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data_users item=row}
                                <tr>
                                    <td>{$row.user_code}</td>
                                    <td>{$row.user_name}</td>
                                    <td>{$row.activestatus}</td>
                                    <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                                </tr>
                            {/foreach}
                            <tr>
                                <td>fahmiaziz</td>
                                <td>Fahmi Aziz Hakim</td>
                                <td>Admin</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                <td>fahmiaziz</td>
                                <td>Fahmi Aziz Hakim</td>
                                <td>Admin</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                <td>fahmiaziz</td>
                                <td>Fahmi Aziz Hakim</td>
                                <td>Admin</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
                            
                            