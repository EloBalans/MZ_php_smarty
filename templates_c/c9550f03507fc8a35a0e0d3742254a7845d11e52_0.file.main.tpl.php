<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-06 16:14:24
  from 'C:\xampp\htdocs\Kalkulator\app\View\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edba4c0c66574_15794330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9550f03507fc8a35a0e0d3742254a7845d11e52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator\\app\\View\\templates\\main.tpl',
      1 => 1590950554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edba4c0c66574_15794330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">	
   
    </head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>Kalkulator kredytowy - Mateusz Zatoń   </h1>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Kalkulator Kredytowy</h2>
						
                                               
					</header>

					
					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6321082075edba4c0c65e19_63414184', 'content');
?>


				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="https://www.facebook.com/mateusz.zaton.7" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Mateusz Zatoń</li>
						<li>Design: Mateusz Zatoń</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<!--[if lte IE 8]><?php echo '<script'; ?>
 src="assets/js/ie/respond.min.js"><?php echo '</script'; ?>
><![endif]-->
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
/* {block 'content'} */
class Block_6321082075edba4c0c65e19_63414184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6321082075edba4c0c65e19_63414184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
