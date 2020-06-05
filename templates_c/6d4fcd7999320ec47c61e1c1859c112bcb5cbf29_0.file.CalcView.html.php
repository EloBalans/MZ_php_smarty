<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-31 22:21:04
  from 'C:\xampp\htdocs\Kalkulator\app\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed411b0ee0a14_60573503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d4fcd7999320ec47c61e1c1859c112bcb5cbf29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator\\app\\CalcView.html',
      1 => 1590955736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed411b0ee0a14_60573503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!doctype html>


    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2932962655ed411b0ebd2b3_11249703', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'content'} */
class Block_2932962655ed411b0ebd2b3_11249703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2932962655ed411b0ebd2b3_11249703',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div style="margin: 50px 45%">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcProcess" method="post">
	<fieldset>
		<label for="value">Liczba w złotówkach: </label>
                <input id="value" type="text" placeholder="liczba" name="value" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->value;?>
" />
		<label for="percent">Odsetki: </label>
		<select id ="percent" name="percent" >
			<option value="0.01">1%</option>
			<option value="0.02">2%</option>
			<option value="0.03">3%</option>
			<option value="0.04">4%</option>
			<option value="0.05">5%</option>
			<option value="0.06">6%</option>
			<option value="0.07">7%</option>        
			<option value="0.08">8%</option>
			<option value="0.09">9%</option>
			<option value="0.1">10%</option>
                        <option value="0.11">11%</option>
                        <option value="0.12">12%</option>
                        <option value="0.13">13%</option>
                        <option value="0.14">14%</option>
                        <option value="0.15">15%</option>
                        
		</select>
		<label for="years">Lata: </label>
                <input id="years" type="text" placeholder="lata" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" />
	</fieldset>
    <div style="margin: 60px -10%">
	<input type="submit" value="Oblicz!" class="pure-button pure-button-primary" />
    </div>
</form>	
    
    
<div class="messages"   >


    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
            <h4>Informacje: </h4>
            <ol class="inf">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
            <h4>Wynik</h4>
            <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

            </p>
    <?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
