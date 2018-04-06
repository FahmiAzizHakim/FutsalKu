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
                                    <td>{$row.user_group}</td>
                                    <td>{$row.activestatus}</td>
                                    <td><button type="button" class="btn btn-success active" onclick="EditUser('{$row.field_id}'><span class="fa fa-pencil"></span>Edit</button></td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
    base_url = '{$base_url}';

    function EditUser(user_id){
        window.location = base_url + 'masterdata/users/edit?user_id=' + user_id;
        }
</script>
                            
                            