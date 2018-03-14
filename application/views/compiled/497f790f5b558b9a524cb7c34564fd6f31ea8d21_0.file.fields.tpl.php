<?php
/* Smarty version 3.1.30, created on 2018-03-08 08:22:41
  from "D:\www\gitlab\FutsalKu\application\modules\masterdata\views\lapangan\fields.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa0e4c1dc1ec3_63545274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '497f790f5b558b9a524cb7c34564fd6f31ea8d21' => 
    array (
      0 => 'D:\\www\\gitlab\\FutsalKu\\application\\modules\\masterdata\\views\\lapangan\\fields.tpl',
      1 => 1520493760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa0e4c1dc1ec3_63545274 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
masterdata/lapangan/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
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
                            <tr>
                                <td>1</td>
                                <td>Sentetis 1</td>
                                <td>Indoor</td>
                                <td>Rumput Sintetis</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sentetis 2</td>
                                <td>Indoor</td>
                                <td>Rumput Sintetis</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Plur 1</td>
                                <td>Outdoor</td>
                                <td>Semen</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
                            
                            <?php }
}
