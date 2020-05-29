<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-29 17:04:00
  from 'C:\xampp\htdocs\Kalkulator\app\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed12460231112_57042835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e52ab965ff74f467148042741eded5387f6ecd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator\\app\\calc_view.html',
      1 => 1590763471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed12460231112_57042835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!doctype html>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator</title>
        
	
</head>
    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_523040475ed12460215695_98963251', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_523040475ed12460215695_98963251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_523040475ed12460215695_98963251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<body>

<div style="margin: 50px 45%">
<form action="/Kalkulator/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<fieldset>
		<label for="id_value">Liczba w złotówkach: </label>
		<input id="id_val" type="text" placeholder="liczba" name="value" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['value'];?>
" />
		<label for="id_intrest">Odsetki: </label>
		<select name="intrest">
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
		</select>
		<label for="id_years">Lata: </label>
		<input id="id_years" type="text" placeholder="lata" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['years'];?>
" />
	</fieldset>	
	<input type="submit" value="Oblicz!" class="pure-button pure-button-primary" />
</form>	
</div> 
   <div class="messages">
<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol id="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
	<h4>Wynik</h4>
	<p id="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
