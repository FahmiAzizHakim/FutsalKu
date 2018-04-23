<?php
/* Smarty version 3.1.30, created on 2018-04-09 12:14:49
  from "C:\xampp\htdocs\FutsalKu\application\modules\masterdata\views\merchant_goods\lists.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acb3d19919f98_61548290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a551a9cc421f063a7b9b78d20647691dbff6af29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\masterdata\\views\\merchant_goods\\lists.tpl',
      1 => 1523268886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acb3d19919f98_61548290 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
masterdata/merchant_goods/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
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
                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_barang']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['store_goods_code'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['store_goods_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['store_goods_type'];?>
</td>
                                <td>Rp.<?php echo $_smarty_tpl->tpl_vars['row']->value['store_goods_price'];?>
</td>
                                <td>Aktif</td>
                                <td><button type="button" class="btn btn-success active" onclick="EditUser('<?php echo $_smarty_tpl->tpl_vars['row']->value['store_goods_id'];?>
')""><span class="fa fa-pencil"></span>Edit</button></td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    base_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';
    
    function EditUser(store_goods_id){
        window.location = base_url + 'masterdata/merchant_goods/edit?store_goods_id=' + store_goods_id;
        }
    
<?php echo '</script'; ?>
>                   <?php }
}
