<?php /* Smarty version 2.6.25, created on 2023-02-21 21:50:05
         compiled from step6.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'step6.tpl', 2, false),)), $this); ?>
<div>
	<div align="center" class="notice"><?php echo ((is_array($_tmp='_STEP6DESC')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<br /><?php echo ((is_array($_tmp='_STEP6DESC2')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div>
	<br />
	<fieldset>
		<legend><?php echo ((is_array($_tmp='_ROOTDIRS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</legend>
		<table width="100%" cellpadding="5">
			<tr class="settings_line">
				<td width="40%"><?php echo ((is_array($_tmp='_DIRROOT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td><?php echo $this->_supers['session']['path_root']; ?>
</td>
			</tr>
			<tr class="settings_line">
				<td><?php echo ((is_array($_tmp='_DIRDOCUMENT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td><?php echo $this->_supers['session']['document_root']; ?>
</td>
			</tr>
		</table>
	</fieldset>
	<br />
	<fieldset>
		<legend><?php echo ((is_array($_tmp='_DBSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</legend>
		<table width="100%" cellpadding="5">
			<tr class="settings_line">
				<td width="40%"><?php echo ((is_array($_tmp='_HOST')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td><?php echo $this->_supers['session']['dbhost']; ?>
</td>
			</tr>
			<tr class="settings_line">
				<td><?php echo ((is_array($_tmp='_USER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td><?php echo $this->_supers['session']['dbuser']; ?>
</td>
			</tr>
			<tr class="settings_line">
				<td><?php echo ((is_array($_tmp='_DATABASE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td><?php echo $this->_supers['session']['dbdb']; ?>
</td>
			</tr>
			<tr class="settings_line">
				<td><?php echo ((is_array($_tmp='_TBLPREFIX')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td><?php echo $this->_supers['session']['dbprefix']; ?>
</td>
			</tr>
		</table>
	</fieldset>
	<br />
	<fieldset>
		<legend><?php echo ((is_array($_tmp='_ADMINSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</legend>
		<table width="100%" cellpadding="5">
			<tr class="settings_line">
				<td width="40%"><?php echo ((is_array($_tmp='_USER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td><?php echo $this->_supers['session']['adminuser']; ?>
</td>
			</tr>
			<tr class="settings_line">
				<td><?php echo ((is_array($_tmp='_EMAILADR')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
				<td><?php echo $this->_supers['session']['adminemail']; ?>
</td>
			</tr>
		</table>
	</fieldset>