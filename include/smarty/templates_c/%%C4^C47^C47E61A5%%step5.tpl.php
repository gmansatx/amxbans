<?php /* Smarty version 2.6.25, created on 2023-02-21 21:43:55
         compiled from step5.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'step5.tpl', 2, false),array('modifier', 'default', 'step5.tpl', 9, false),)), $this); ?>
<div>
	<div align="center" class="notice"><?php echo ((is_array($_tmp='_STEP5DESC')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
	<br />
	<fieldset>
		<legend><?php echo ((is_array($_tmp='_ADMINSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</legend>
		<table width="100%" cellpadding="5">
			<tr class="settings_line">
				<td><?php echo ((is_array($_tmp='_USER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td width="1%"><input type="text" name="adminuser" value="<?php if ($this->_tpl_vars['admin']['0'] || $this->_supers['session']['adminuser']): ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['admin']['0'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_supers['session']['adminuser']) : smarty_modifier_default($_tmp, @$this->_supers['session']['adminuser'])); ?>
<?php else: ?>admin<?php endif; ?>" size="20" /></td>
			</tr>
			<tr class="settings_line">
				<td><?php echo ((is_array($_tmp='_PASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td width="1%"><input type="password" name="adminpass" value="<?php if ($this->_tpl_vars['adminpass'] || $this->_supers['session']['adminpass']): ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['adminpass'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_supers['session']['adminpass']) : smarty_modifier_default($_tmp, @$this->_supers['session']['adminpass'])); ?>
<?php endif; ?>" size="20" /></td>
			</tr>
			<tr class="settings_line">
				<td><?php echo ((is_array($_tmp='_PASSWORD2')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td width="1%"><input type="password" name="adminpass2" value="<?php if ($this->_tpl_vars['adminpass'] || $this->_supers['session']['adminpass2']): ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['adminpass'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_supers['session']['adminpass']) : smarty_modifier_default($_tmp, @$this->_supers['session']['adminpass'])); ?>
<?php endif; ?>" size="20" /></td>
			</tr>
			<tr class="settings_line">
				<td><?php echo ((is_array($_tmp='_EMAILADR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td width="1%"><input type="text" name="adminemail" value="<?php if ($this->_tpl_vars['admin']['1'] || $this->_supers['session']['adminemail']): ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['admin']['1'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_supers['session']['adminemail']) : smarty_modifier_default($_tmp, @$this->_supers['session']['adminemail'])); ?>
<?php else: ?>admin@domain.com<?php endif; ?>" size="20" /></td>
			</tr>
		</table>
	<br />
	<?php if ($this->_tpl_vars['validate']): ?>
		<?php $_from = $this->_tpl_vars['validate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['validate']):
?>
			<div class="error"><?php echo ((is_array($_tmp=$this->_tpl_vars['validate'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['msg']): ?>
		<div class="<?php if ($this->_tpl_vars['msg'] == '_ADMINOK'): ?>success<?php else: ?>error<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
	<?php endif; ?>