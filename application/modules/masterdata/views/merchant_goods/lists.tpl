<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="{$base_url}masterdata/merchant_goods/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
            <br />
            <br />
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th width="110px">Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barangn</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                         {foreach from=$data_barang item=row}
                            <tr>
                                <td>{$row.store_goods_code}</td>
                                <td>{$row.store_goods_name}</td>
                                <td>{$row.store_goods_type}</td>
                                <td>Rp.{$row.store_goods_price}</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active" onclick="EditUser('{$row.store_goods_id}')""><span class="fa fa-pencil"></span>Edit</button></td>
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
    {literal}
    function EditUser(store_goods_id){
        window.location = base_url + 'masterdata/merchant_goods/edit?store_goods_id=' + store_goods_id;
        }
    {/literal}
</script>                   