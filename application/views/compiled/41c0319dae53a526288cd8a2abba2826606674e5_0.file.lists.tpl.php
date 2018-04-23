<?php
/* Smarty version 3.1.30, created on 2018-04-09 11:32:14
  from "C:\xampp\htdocs\FutsalKu\application\modules\masterdata\views\users\lists.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acb331e6c4563_19990805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41c0319dae53a526288cd8a2abba2826606674e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FutsalKu\\application\\modules\\masterdata\\views\\users\\lists.tpl',
      1 => 1523266322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acb331e6c4563_19990805 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
masterdata/users/add"><button type="button" class="btn btn-success active">&nbsp;<span class="fa fa-plus"></span>Add&nbsp;</button></a>
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_users']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_code'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_group'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['activestatus'];?>
</td>
                                    <td><button type="button" class="btn btn-success active" onclick="EditUser('<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
')"><span class="fa fa-pencil"></span>Edit</button></td>
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
    
    function EditUser(user_id){
        window.location = base_url + 'masterdata/users/edit?user_id=' + user_id;
        }
    
<?php echo '</script'; ?>
>
                            
                            <?php }
}
