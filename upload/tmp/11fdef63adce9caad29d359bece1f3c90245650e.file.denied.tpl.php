<?php /* Smarty version Smarty-3.1.13, created on 2024-05-02 16:44:26
         compiled from "/home/u293792719/domains/mtadmin.online/public_html/Onn11/templates/denied.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41447817866337592969043-86896727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11fdef63adce9caad29d359bece1f3c90245650e' => 
    array (
      0 => '/home/u293792719/domains/mtadmin.online/public_html/Onn11/templates/denied.tpl',
      1 => 1713535678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41447817866337592969043-86896727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6633759296d373_49826179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6633759296d373_49826179')) {function content_6633759296d373_49826179($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
                <div class="card-body">
                	<div class="row">
                    	<div class="col-sm-12 col-md-4">
                        	<h3 class="card-title text-danger">Access Denied</h3>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
                <div class="card-body">
            		<div class="row alert alert-danger">
						You are not allowed access to the page (<?php echo $_SERVER['REQUEST_URI'];?>
).
						<p>
							You are either logged off or do not have enough access rights to view this page.
							<br />
							Please look for the links on our <a href="<?php echo $_smarty_tpl->getConfigVariable('server_url');?>
">home page</a>. You can also send an email to <a href="mailto:<?php echo $_smarty_tpl->getConfigVariable('from');?>
"><?php echo $_smarty_tpl->getConfigVariable('from');?>
</a>.
						</p>
						<a href="<?php if ($_SERVER['HTTP_REFERER']){?><?php echo $_SERVER['HTTP_REFERER'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getConfigVariable('server_url');?>
<?php }?>">Go Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>