<?php
/* Smarty version 3.1.30, created on 2018-03-09 07:22:23
  from "D:\www\gitlab\FutsalKu\application\modules\masterdata\views\lapangan\lists.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa2281f104381_02738450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6815c74b36dc42fe40e37c306173966aa46b0759' => 
    array (
      0 => 'D:\\www\\gitlab\\FutsalKu\\application\\modules\\masterdata\\views\\lapangan\\lists.tpl',
      1 => 1520493760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa2281f104381_02738450 (Smarty_Internal_Template $_smarty_tpl) {
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
