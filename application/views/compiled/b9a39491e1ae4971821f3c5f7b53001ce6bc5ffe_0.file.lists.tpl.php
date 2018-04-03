<?php
/* Smarty version 3.1.30, created on 2018-04-03 14:49:59
  from "C:\xampp\htdocs\FutsalKu\application\modules\masterdata\views\lapangan\lists.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac37877ee8345_41202804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9a39491e1ae4971821f3c5f7b53001ce6bc5ffe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\masterdata\\views\\lapangan\\lists.tpl',
      1 => 1522657285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac37877ee8345_41202804 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_lapangan']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_no'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_room'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['field_type'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['activestatus'];?>
</td>
                                    <td><button type="button" class="btn btn-success active"><span class="fa fa-pencil"></span>Edit</button></td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
