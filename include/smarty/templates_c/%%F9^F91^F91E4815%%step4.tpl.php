<?php /* Smarty version 2.6.25, created on 2023-02-23 21:23:42
         compiled from step4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'step4.tpl', 2, false),array('modifier', 'default', 'step4.tpl', 9, false),)), $this); ?>
<div>
	<div align="center" class="notice"><?php echo ((is_array($_tmp='_STEP4DESC')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
	<br />
	<fieldset>
		<legend><?php echo ((is_array($_tmp='_DBSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</legend>
			<table width="100%" cellpadding="5">
				<tr>
					<td><?php echo ((is_array($_tmp='_HOST')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
					<td width="1%"><input type="text" name="dbhost" value="<?php if ($this->_tpl_vars['db']['0'] || $this->_supers['session']['dbhost']): ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['db']['0'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_supers['session']['dbhost']) : smarty_modifier_default($_tmp, @$this->_supers['session']['dbhost'])); ?>
<?php else: ?>127.0.0.1<?php endif; ?>" size="20" /></td>
				</tr>
				<tr>
					<td><?php echo ((is_array($_tmp='_USER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
					<td width="1%"><input type="text" name="dbuser" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['db']['1'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_supers['session']['dbuser']) : smarty_modifier_default($_tmp, @$this->_supers['session']['dbuser'])); ?>
" size="20" /></td>
				</tr>
				<tr>
					<td><?php echo ((is_array($_tmp='_PASSWORD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
					<td width="1%"><input type="password" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['db']['2'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_supers['session']['dbpass']) : smarty_modifier_default($_tmp, @$this->_supers['session']['dbpass'])); ?>
" name="dbpass" size="20" /></td>
				</tr>
				<tr>
					<td><?php echo ((is_array($_tmp='_DATABASE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
					<td width="1%"><input type="text" name="dbdb" value="<?php if ($this->_tpl_vars['db']['3'] || $this->_supers['session']['dbdb']): ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['db']['3'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_supers['session']['dbdb']) : smarty_modifier_default($_tmp, @$this->_supers['session']['dbdb'])); ?>
<?php else: ?>amxbans<?php endif; ?>" size="20" /></td>
				</tr>
				<tr>
					<td><?php echo ((is_array($_tmp='_TBLPREFIX')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
					<td width="1%"><input type="text" name="dbprefix" value="<?php if ($this->_tpl_vars['db']['4'] || $this->_supers['session']['dbprefix']): ?><?php echo ((is_array($_tmp=@$this->_tpl_vars['db']['4'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_supers['session']['dbprefix']) : smarty_modifier_default($_tmp, @$this->_supers['session']['dbprefix'])); ?>
<?php else: ?>amx<?php endif; ?>" size="20" /></td>
				</tr>
			</table>
	</fieldset>
	<?php if ($this->_tpl_vars['prevs']): ?>
		<fieldset>
			<legend><?php echo ((is_array($_tmp='_DBPREVILEGES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</legend>
			<table width="100%" cellpadding="2">
				<?php $_from = $this->_tpl_vars['prevs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['prevs']):
?>
					<tr class="settings_line">
						<td><b><?php echo $this->_tpl_vars['prevs']['name']; ?>
</b></td>
						<td width="1%"><img src="images/<?php if ($this->_tpl_vars['prevs']['value'] == 1): ?>success.gif<?php else: ?>cross.png<?php endif; ?>" /></td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
	<?php endif; ?>
	<br />
	<?php if ($this->_tpl_vars['msg']): ?>
		<div class="<?php if ($this->_tpl_vars['msg'] == '_DBOK'): ?>success<?php else: ?>error<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
	<?php endif; ?>