<?php
/* Smarty version 3.1.39, created on 2021-03-20 18:15:57
  from 'C:\xampp\htdocs\php_project_paw3\templates\main.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60562dcdec1137_93581489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c57ef00f822d68a9f784feff14236620c142b52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_project_paw3\\templates\\main.php',
      1 => 1616260550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60562dcdec1137_93581489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
                <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
                <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
        <body>
            	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!--PIERWSZA|| One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Kalkulator kredytowy</h1>
							<p class="major"><?php echo $_smarty_tpl->tpl_vars['page_description']->value;?>
</p>
							<ul class="actions stacked">
								<li><a href="#seven" class="button big wide smooth-scroll-middle">Przejdz do Kalkulatora</a></li>
							</ul>
						</div>
						<div class="image">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/kalkulator.jpg" alt="alt" />
						</div>
					</section>

                                
                                
                                
				<!--SWINKA|| Two -->
					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
						<div class="content">
							<h2>Jak działa kalkulator?</h2>
                                                        <p>Noo tu bierze, liczy ciach bajera dobrze robi kalkulator dobrze </br> dobrze liczy chlopak.</p>
							<ul class="actions stacked">
								<li><a href="#seven" class="button">Chce juz liczyć!</a></li>
							</ul>
						</div>
						<div class="image">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/skarbonka1.jpg" alt="" />
						</div>
					</section>
			
                                
                                
                                
		
				<!--KALKULATOR|| Seven -->
					<section  class="wrapper style1 align-center" id="seven">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21117415760562dcdebd350_56900257', 'content');
?>

					</section>
                                                                               
				<!-- STOPKA -->
					<footer class="wrapper style1 align-center">
						<div class="inner">
                                                    <h3><?php echo $_smarty_tpl->tpl_vars['page_footer']->value;?>
</h3>
							<p>&copy; Tomek Kidawa <a href="https://github.com/TomekKidawa" class="icon brands style1 fa-github"><span class="label">Github</span></a> || Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

 
       
	</body>
</html><?php }
/* {block 'content'} */
class Block_21117415760562dcdebd350_56900257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21117415760562dcdebd350_56900257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
