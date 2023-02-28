<?php /* Smarty version 2.6.25, created on 2023-02-26 15:39:49
         compiled from main_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getlanguage', 'main_header.tpl', 2, false),array('modifier', 'selectlang', 'main_header.tpl', 3, false),array('modifier', 'lang', 'main_header.tpl', 15, false),array('modifier', 'escape', 'main_header.tpl', 31, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $this->assign('lang', ((is_array($_tmp=$this->_tpl_vars['true'])) ? $this->_run_mod_handler('getlanguage', true, $_tmp) : smarty_modifier_getlanguage($_tmp))); ?>
<?php $this->assign('select_lang', ((is_array($_tmp=$this->_tpl_vars['true'])) ? $this->_run_mod_handler('selectlang', true, $_tmp, 'session') : smarty_modifier_selectlang($_tmp, 'session'))); ?>
<?php $this->assign('default_lang', ((is_array($_tmp=$this->_tpl_vars['true'])) ? $this->_run_mod_handler('selectlang', true, $_tmp, 'config') : smarty_modifier_selectlang($_tmp, 'config'))); ?>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<meta name="description" content="A ban system for the HL1 engine to manage multiple server bans."/>
	<meta name="keywords" content="amx, bans, amxbans" />
	<meta name="author" content="setoy, shorty, Sleepwalker, indianiso1" />
	<meta http-equiv="pragma" content="no-cache" /> 
	<meta http-equiv="cache-control" content="no-cache" />
	<link rel="stylesheet" type="text/css" href="templates/<?php echo $this->_tpl_vars['design']; ?>
_css/style.css" />
	<title>AMXBans <?php echo $this->_tpl_vars['version_web']; ?>
 - <?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php if ($this->_tpl_vars['title2']): ?> - <?php echo ((is_array($_tmp=$this->_tpl_vars['title2'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php endif; ?></title>
	<script type="text/javascript" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_js/amxbans.js.php"></script>
	<script type="text/javascript" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_js/jquery.js"></script>
	<script type="text/javascript" src="templates/<?php echo $this->_tpl_vars['design']; ?>
_js/tooltip.js"></script>	
	<script type="text/javascript" src="include/layer.js"></script>
</head>

<body id="top" <?php if ($this->_supers['session']['loginfailed']): ?>onLoad="javascript: countdown(<?php echo $this->_supers['session']['loginfailed']; ?>
);"<?php endif; ?>>
<div id="network">
	<div class="center-wrapper">
		<div class="left">
			<ul class="tabbed" id="menu-tabs">
				<li>
					<form method="post" action="" style="padding:5px 8px 0 0;margin:0;">
						<select name="newlang" style="padding:0;margin:0;" onchange="this.form.submit()">
						<?php $_from = $this->_tpl_vars['lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if (empty ( $this->_tpl_vars['select_lang'] ) && $this->_tpl_vars['default_lang'] == $this->_tpl_vars['lang']): ?>selected="selected"<?php endif; ?> <?php if ($this->_tpl_vars['select_lang'] == $this->_tpl_vars['lang']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
						</select>
					</form>
				</li>
				<?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
					<?php if ($this->_supers['session']['loggedin'] == 'true'): ?>
						<?php if ($this->_tpl_vars['menu']['lang_key2']): ?><li><a href="<?php echo $this->_tpl_vars['menu']['url2']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['menu']['lang_key2'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li><?php endif; ?>
					<?php else: ?>
						<?php if ($this->_tpl_vars['menu']['lang_key']): ?><li><a href="<?php echo $this->_tpl_vars['menu']['url']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['menu']['lang_key'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li><?php endif; ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
      		</ul>
		</div>
		<div class="right">
			
			<ul class="tabbed" id="admin-tabs">
				<?php if ($this->_supers['session']['loggedin'] == 'true'): ?>
					<li><a href="admin.php"><?php echo ((is_array($_tmp='_ADMINAREA')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
					<li><a href="logout.php"><?php echo ((is_array($_tmp='_LOGOUT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php echo $this->_supers['session']['uname']; ?>
</a></li>
				<?php else: ?>
					<li>
						<form name="loginform" action="login.php" method="post">
							<script type="text/javascript">
								var languser = '<?php echo ((is_array($_tmp='_USERNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
';
								var langpass = '<?php echo ((is_array($_tmp='_PASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
';
							</script>
							<input
								type="text" 
								size="17"
								name="user" 
								value="<?php echo ((is_array($_tmp='_USERNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" 
								onfocus="javascript:if(this.value=languser)this.value='';" 
								
								/>
							<input 
								type="password"
								size="12" 
								name="pass" 
								value="<?php echo ((is_array($_tmp='_PASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" 
								onfocus="javascript:if(this.value=langpass)this.value='';" 
								
								/>
							<input type='checkbox' checked="checked" name='remember' title='<?php echo ((is_array($_tmp='_REMEMBERME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
' />
							<button type="submit" name="action" id="action" value="Login"><?php echo ((is_array($_tmp='_LOGIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</button>
						</form>
					</li>
				<?php endif; ?>
			</ul>
			
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div>

<div id="site">
	<div class="center-wrapper">
		<?php if ($this->_tpl_vars['banner'] <> ""): ?>
			<div id="header">
				<div id="site-title" style="text-align: center;">
					<a href="<?php echo $this->_tpl_vars['banner_url']; ?>
" target="_blank"><img src="images/banner/<?php echo $this->_tpl_vars['banner']; ?>
" alt="<?php echo $this->_tpl_vars['banner_url']; ?>
" title="<?php echo $this->_tpl_vars['banner_url']; ?>
" /></a>
				</div>
			</div>
		<?php else: ?>
			<div class="spacer">&nbsp;</div>
		<?php endif; ?>