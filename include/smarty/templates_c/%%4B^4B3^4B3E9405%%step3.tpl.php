<?php /* Smarty version 2.6.25, created on 2023-02-23 21:23:39
         compiled from step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'step3.tpl', 2, false),)), $this); ?>
<div>
	<div align="center" class="notice"><?php echo ((is_array($_tmp='_STEP3DESC')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br /><?php echo ((is_array($_tmp='_STEP3DESC2')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
	<br />
	<fieldset>
		<legend><?php echo ((is_array($_tmp='_ROOTDIRS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</legend>
			<table width="100%" cellpadding="5">
				<tr class="settings_line">
					<td><?php echo ((is_array($_tmp='_DIRROOT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
					<td width="1%"><input type="text" name="path_root" value="<?php echo $this->_tpl_vars['dirs']['path_root']; ?>
" size="50" /></td>
				</tr>
				<tr class="settings_line">
					<td><?php echo ((is_array($_tmp='_DIRDOCUMENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
					<td><input type="text" name="document_root" value="<?php echo $this->_tpl_vars['dirs']['document_root']; ?>
" size="50" /></td>
				</tr>
			</table>
	</fieldset>
<br />
	<fieldset>
		<legend><?php echo ((is_array($_tmp='_DIRCHECK')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</legend>
			<table width="100%" cellpadding="5">
				<tr>
					<td>include/</td>
					<td width="1%"><img src="images/<?php if ($this->_tpl_vars['dirs']['include'] == true): ?>success.gif<?php else: ?>cross.png<?php endif; ?>" /></td>
				</tr>
				<tr>
					<td>temp/</td>
					<td><img src="images/<?php if ($this->_tpl_vars['dirs']['temp'] == true): ?>success.gif<?php else: ?>cross.png<?php endif; ?>" /></td>
				</tr>
				<tr>
					<td>include/smarty/templates_c</td>
					<td valign="center"><img src="images/<?php if ($this->_tpl_vars['dirs']['templates_c'] == true): ?>success.gif<?php else: ?>cross.png<?php endif; ?>" /></td>
				</tr>
				<tr>
					<td>include/files/</td>
					<td><img src="images/<?php if ($this->_tpl_vars['dirs']['files'] == true): ?>success.gif<?php else: ?>cross.png<?php endif; ?>" /></td>
				</tr>
				<tr>
					<td>include/backup/</td>
					<td><img src="images/<?php if ($this->_tpl_vars['dirs']['backup'] == true): ?>success.gif<?php else: ?>cross.png<?php endif; ?>" /></td>
				</tr>
				<tr>
					<td>/</td>
					<td><img src="images/<?php if ($this->_tpl_vars['dirs']['setupphp'] == true): ?>success.gif<?php else: ?>warning.gif<?php endif; ?>" /></td>
				</tr>
			</table>
	</fieldset>
	<br />
	<div class="notice">
		<img src="images/success.gif" /> - <?php echo ((is_array($_tmp='_OK')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
		<img src="images/warning.gif" /> - <?php echo ((is_array($_tmp='_SETNOTRECOMMENDED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br />
		<img src="images/cross.png" /> - <?php echo ((is_array($_tmp='_NOTWRITABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

	</div>
	<?php if ($this->_tpl_vars['dirs']['setupphp'] == false): ?>
		<div class="welcome"><img src="images/warning.gif" /> <?php echo ((is_array($_tmp='_SETUPNOTDELETABLE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
	<?php endif; ?>