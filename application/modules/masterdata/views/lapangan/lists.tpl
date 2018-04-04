<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="{$base_url}masterdata/lapangan/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th width="20px">No. Lap.</th>
                            <th>Nama Lapangan</th>
                            <th>Ruangan</th>
                            <th>Jenis Lapangan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            {foreach from=$data_lapangan item=row}
                                <tr>
                                    <td>{$row.field_no}</td>
                                    <td>{$row.field_name}</td>
                                    <td>{$row.field_room}</td>
                                    <td>{$row.field_type}</td>
                                    <td>{$row.activestatus}</td>
                                    <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
                            
                            