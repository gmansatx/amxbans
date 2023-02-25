<?php /* Smarty version 2.6.25, created on 2023-02-23 21:23:36
         compiled from step2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'step2.tpl', 2, false),)), $this); ?>
<div>
	<div align="center" class="notice"><?php echo ((is_array($_tmp='_STEP2DESC')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
	<fieldset>
	<legend><?php echo ((is_array($_tmp='_SERVERSETUP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</legend>
	<table width="80%" align="center">
		<tr class="settings_line">
			<td>PHP <?php echo ((is_array($_tmp='_VERSION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
			<td><img src="images/<?php if ($this->_tpl_vars['php_settings']['version_php'] >= 5.0): ?>success<?php else: ?>warning<?php endif; ?>.gif" /> <?php echo $this->_tpl_vars['php_settings']['version_php']; ?>
</td>
		</tr>
		<tr class="settings_line">
			<td>MySQL <?php echo ((is_array($_tmp='_VERSION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
			<td><img src="images/<?php if ($this->_tpl_vars['php_settings']['mysql_version'] >= 4.1): ?>success<?php else: ?>warning<?php endif; ?>.gif" /> <?php echo $this->_tpl_vars['php_settings']['mysql_version']; ?>
</td>
		</tr>
		<tr class="settings_line">
			<td width="40%">safe_mode</td>
			<td valign="center"><img src="images/<?php if ($this->_tpl_vars['php_settings']['safe_mode'] == '_ON'): ?>success<?php else: ?>warning<?php endif; ?>.gif" /> <?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['safe_mode'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
		</tr>
		<tr class="settings_line">
			<td>register_globals</td>
			<td><img src="images/<?php if ($this->_tpl_vars['php_settings']['register_globals'] == '_OFF'): ?>success<?php else: ?>warning<?php endif; ?>.gif" /> <?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['register_globals'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
		</tr>
		<tr class="settings_line">
			<td>magic_quotes_gpc</td>
			<td><img src="images/<?php if ($this->_tpl_vars['php_settings']['magic_quotes_gpc'] == '_OFF'): ?>success<?php else: ?>warning<?php endif; ?>.gif" /> <?php echo ((is_array($_tmp=$this->_tpl_vars['php_settings']['magic_quotes_gpc'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
		</tr>
		<tr class="settings_line">
			<td>upload_max_filesize</td>
			<td><?php echo $this->_tpl_vars['php_settings']['upload_max_filesize']; ?>
</td>
		</tr>
		<tr class="settings_line">
			<td>max_execution_time</td>
			<td><?php echo $this->_tpl_vars['php_settings']['max_execution_time']; ?>
 <?php echo ((is_array($_tmp='_SEC')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
		</tr>
	</table>
	</fieldset>
	<br />
	<div class="notice">
		<img src="images/success.gif" /> - <?php echo ((is_array($_tmp='_SETRECOMMENDED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
		<img src="images/warning.gif" /> - <?php echo ((is_array($_tmp='_SETNOTRECOMMENDED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

	</div>
</div>