<?php /* Smarty version 2.6.25, created on 2023-02-25 18:52:25
         compiled from setup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'getlanguage', 'setup.tpl', 1, false),array('modifier', 'selectlang', 'setup.tpl', 2, false),array('modifier', 'lang', 'setup.tpl', 6, false),array('modifier', 'escape', 'setup.tpl', 27, false),)), $this); ?>
<?php $this->assign('lang', ((is_array($_tmp=$this->_tpl_vars['true'])) ? $this->_run_mod_handler('getlanguage', true, $_tmp) : smarty_modifier_getlanguage($_tmp))); ?>
<?php $this->assign('select_lang', ((is_array($_tmp=$this->_tpl_vars['true'])) ? $this->_run_mod_handler('selectlang', true, $_tmp, 'session') : smarty_modifier_selectlang($_tmp, 'session'))); ?>
<?php $this->assign('default_lang', ((is_array($_tmp=$this->_tpl_vars['true'])) ? $this->_run_mod_handler('selectlang', true, $_tmp, 'config') : smarty_modifier_selectlang($_tmp, 'config'))); ?>
<html>
<head>
	<title>AMXBans - <?php echo ((is_array($_tmp='_INSTALLATION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 - <?php echo ((is_array($_tmp='_STEP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php echo $this->_tpl_vars['sitenr']; ?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp='_ENCODING')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="no-cache" />
	<link rel="stylesheet" type="text/css" href="install/setup.css" />
	<script type="text/javascript" language="javascript" src="install/func.js"></script>
</head>
<body>
<div class="center-wrapper">
	<div id="header">
		<div id="site-title" style="text-align: center;">
			<a href="http://www.amxbans.de" target="_blank"><img src="templates/_gfx/amxbans.png" title="AMXBans" alt="AMXBans" border="0" /></a>
		</div>
	</div>
	<div id="site-title" style="text-align: left;">
		<form method="POST" style="display:inline;">
			<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['sitenr']; ?>
" />
			<select name="newlang" onchange="this.form.submit()">
				<?php $_from = $this->_tpl_vars['lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if (empty ( $this->_tpl_vars['select_lang'] ) && $this->_tpl_vars['default_lang'] == $this->_tpl_vars['lang']): ?>selected<?php endif; ?><?php if ($this->_tpl_vars['select_lang'] == $this->_tpl_vars['lang']): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</form>
	</div>
	<fieldset>
		<legend><span class='title'>AMXBans v<?php echo $this->_tpl_vars['v_web']; ?>
: <?php echo ((is_array($_tmp='_INSTALLATION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span></legend>
		<table width="100%" cellpadding="0" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td rowspan="2" width="40%" valign="top">
					<div align="left" class="block">
						<span class="navi">1. <?php echo ((is_array($_tmp='_STEP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</span> <?php if ($this->_tpl_vars['sitenr'] == 1): ?><span class="navi_select"><?php endif; ?><?php echo ((is_array($_tmp='_STEP1')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span><br /><br />
						<span class="navi">2. <?php echo ((is_array($_tmp='_STEP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</span> <?php if ($this->_tpl_vars['sitenr'] == 2): ?><span class="navi_select"><?php endif; ?><?php echo ((is_array($_tmp='_STEP2')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span><br /><br />
						<span class="navi">3. <?php echo ((is_array($_tmp='_STEP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</span> <?php if ($this->_tpl_vars['sitenr'] == 3): ?><span class="navi_select"><?php endif; ?><?php echo ((is_array($_tmp='_STEP3')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span><br /><br />
						<span class="navi">4. <?php echo ((is_array($_tmp='_STEP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</span> <?php if ($this->_tpl_vars['sitenr'] == 4): ?><span class="navi_select"><?php endif; ?><?php echo ((is_array($_tmp='_STEP4')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span><br /><br />
						<span class="navi">5. <?php echo ((is_array($_tmp='_STEP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</span> <?php if ($this->_tpl_vars['sitenr'] == 5): ?><span class="navi_select"><?php endif; ?><?php echo ((is_array($_tmp='_STEP5')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span><br /><br />
						<span class="navi">6. <?php echo ((is_array($_tmp='_STEP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</span> <?php if ($this->_tpl_vars['sitenr'] == 6): ?><span class="navi_select"><?php endif; ?><?php echo ((is_array($_tmp='_STEP6')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span><br /><br />
						<span class="navi">7. <?php echo ((is_array($_tmp='_STEP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</span> <?php if ($this->_tpl_vars['sitenr'] == 7): ?><span class="navi_select"><?php endif; ?><?php echo ((is_array($_tmp='_STEP7')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
					</div>
				</td>
				<td valign="top" height="400">
					<form method="POST" name="form" style="display:inline;">
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "step".($this->_tpl_vars['sitenr']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</td>
			</tr>
		</table>
	<div align="right">
		<input type="hidden" name="site" value="<?php echo $this->_tpl_vars['sitenr']; ?>
" />
			<?php if ($this->_tpl_vars['sitenr'] != 1 && $this->_tpl_vars['sitenr'] != 7): ?><input type="submit" class="button" name="back" value="<?php echo ((is_array($_tmp='_BACK')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /><?php endif; ?>
			<?php if ($this->_tpl_vars['checkvalue']): ?><input type="submit" class="button" name="check<?php echo $this->_tpl_vars['sitenr']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['checkvalue'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /><?php endif; ?>
			<?php if ($this->_tpl_vars['sitenr'] < 6): ?><input type="submit" class="button" name="next" value="<?php echo ((is_array($_tmp='_NEXT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if (! $this->_tpl_vars['next'] || $this->_tpl_vars['sitenr'] == 1): ?>disabled<?php endif; ?>/><?php endif; ?>
		</form>
	</div>
	</fieldset>
</div>