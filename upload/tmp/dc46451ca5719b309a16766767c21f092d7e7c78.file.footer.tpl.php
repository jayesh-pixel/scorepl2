<?php /* Smarty version Smarty-3.1.13, created on 2024-09-18 17:01:07
         compiled from "/home/u614697683/domains/scorepl.com/public_html/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14636339466eab9fb53de90-17590809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc46451ca5719b309a16766767c21f092d7e7c78' => 
    array (
      0 => '/home/u614697683/domains/scorepl.com/public_html/templates/footer.tpl',
      1 => 1726650412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14636339466eab9fb53de90-17590809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_66eab9fb541215_37748685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_66eab9fb541215_37748685')) {function content_66eab9fb541215_37748685($_smarty_tpl) {?>		<?php if ($_SESSION[$_smarty_tpl->tpl_vars['session']->value]['userid']&&!strstr($_SERVER['REQUEST_URI'],'terms')&&!strstr($_SERVER['REQUEST_URI'],'privacy')){?>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
	<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
        <div class="modal-dialog" role="document ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Popup Header</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true ">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Here is the text coming you can put also image if you want…
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
	$(document).ready(function() {
		pageLoaded();
	});
</script>
</body>
</html><?php }} ?>