<?php /* Smarty version 2.6.25, created on 2023-02-26 16:42:49
         compiled from admin_sa.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_sa.tpl', 4, false),array('function', 'html_options', 'admin_sa.tpl', 112, false),)), $this); ?>
<div id="navigation">
	<div id="main-nav">
		<ul class="tabbed">
			<li id="header_1" onclick="ToggleMenu_open('1');"><a href="#"><?php echo ((is_array($_tmp='_ADMINAREA')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_2" onclick="ToggleMenu_open('2');"><a href="#"><?php echo ((is_array($_tmp='_SERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_3" onclick="ToggleMenu_open('3');"><a href="#"><?php echo ((is_array($_tmp='_WEB')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_4" onclick="ToggleMenu_open('4');"><a href="#"><?php echo ((is_array($_tmp='_OTHER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			<li id="header_5" onclick="ToggleMenu_open('5');"><a href="#"><?php echo ((is_array($_tmp='_MODULES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
		</ul>
		<div class="clearer">&nbsp;</div>
	</div>

	<div id="sub-nav">
		<div id="menu_1" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php"><?php echo ((is_array($_tmp='_MENUINFO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=ban_add"><?php echo ((is_array($_tmp='_ADDBAN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=ban_add_online"><?php echo ((is_array($_tmp='_ADDBANONLINE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_2" style="display: block;">
			<ul class="tabbed">
				<li><a href="admin.php?site=sm_sv"><?php echo ((is_array($_tmp='_SERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=sm_bg"><?php echo ((is_array($_tmp='_MENUREASONS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=sm_av"><?php echo ((is_array($_tmp='_ADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=sm_sa"><?php echo ((is_array($_tmp='_TITLEADMIN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_3" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?site=wm_wa"><?php echo ((is_array($_tmp='_ADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=wm_ul"><?php echo ((is_array($_tmp='_PERM')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=wm_um"><?php echo ((is_array($_tmp='_MENUUSERMENU')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=wm_ms"><?php echo ((is_array($_tmp='_SETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_4" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?site=so_mo"><?php echo ((is_array($_tmp='_MODULES')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=so_up"><?php echo ((is_array($_tmp='_MENUUPDATE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
				<li><a href="admin.php?site=so_lg"><?php echo ((is_array($_tmp='_MENULOGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div id="menu_5" style="display: none;">
			<ul class="tabbed">
				<li><a href="admin.php?modul=iexport"><?php echo ((is_array($_tmp='_MENUIMPORTEXPORT')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</a></li>
			</ul>
		</div>
		<div class="clearer">&nbsp;</div>
	</div>
</div>

		<td id="main" valign="top" >
		<?php if ($this->_supers['session']['amxadmins_view'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_SERVERADMINSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<table width="95%" align="center"><tr><td>
				<table border="1" width="100%">
					<tr align="center" class="htabletop"><td colspan="4"><b><?php echo ((is_array($_tmp='_SERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</b></td></tr>
					<tr align="center" class="htablebottom">
						<td width="1%"><?php echo ((is_array($_tmp='_MOD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp='_HOSTNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%">&nbsp;</td>
					</tr>
					<?php $_from = $this->_tpl_vars['servers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['servers']):
?>
						<form method="POST">
							<input type="hidden" name="sid" value="<?php echo $this->_tpl_vars['servers']['sid']; ?>
" />
							<input type="hidden" name="sidname" value="<?php echo $this->_tpl_vars['servers']['hostname']; ?>
" />
							<tr class="list">
								<td><img src="images/mods/<?php echo $this->_tpl_vars['servers']['gametype']; ?>
.gif"></td>
								<td><?php echo $this->_tpl_vars['servers']['address']; ?>
</td>
								<td><?php echo $this->_tpl_vars['servers']['hostname']; ?>
</td>
								<td><input type="submit" class="button" name="admins_edit" value="<?php echo ((is_array($_tmp='_EDITADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" /></td>
							</tr>
						</form>
					<?php endforeach; endif; unset($_from); ?>
				</table>
				<br />
				<?php if ($this->_tpl_vars['msg']): ?><div class="notice" align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div><?php endif; ?>
				<?php if ($this->_tpl_vars['editadmins']['sidname']): ?>
				<hr />
				<br />
				<form method="POST" name="frm">
				<table border="1" width="100%">
					<tr class="htabletop"><td colspan="9"><b><?php echo ((is_array($_tmp='_ADMINS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
: <?php echo $this->_tpl_vars['editadmins']['sidname']; ?>
</b></td></tr>
					<tr class="htablebottom">
						<td align="center"><?php echo ((is_array($_tmp='_NAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td align="center"><?php echo ((is_array($_tmp='_NICKNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%" align="center"><?php echo ((is_array($_tmp='_STEAMID')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%" align="center"><?php echo ((is_array($_tmp='_ACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%" align="center"><?php echo ((is_array($_tmp='_FLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="20%" align="center"><?php echo ((is_array($_tmp='_CUSTOMFLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%" align="center"><nobr><?php echo ((is_array($_tmp='_STATICBANTIME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</nobr></td>
						<td width="1%"><?php echo ((is_array($_tmp='_ACTIV')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr>
					<?php $_from = $this->_tpl_vars['admins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admins']):
?>
					<tr class="settings_line">
						<td align="center"><?php echo $this->_tpl_vars['admins']['username']; ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['admins']['nickname']; ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['admins']['steamid']; ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['admins']['access']; ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['admins']['flags']; ?>
</td>
						<td align="center">
							<div id="cf<?php echo $this->_tpl_vars['admins']['aid']; ?>
" <?php if ($this->_tpl_vars['admins']['aktiv'] != 1): ?>style="visibility:hidden"<?php endif; ?> nowrap>
								<input type="text" name="custom_flags[]" id="cftxt<?php echo $this->_tpl_vars['admins']['aid']; ?>
" size="22" value="<?php echo $this->_tpl_vars['admins']['custom_flags']; ?>
"/>
								<img src="images/server_key.png" alt="<?php echo ((is_array($_tmp='_ACCESSFLAGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" style="cursor:pointer;" 
									onClick="window.open('include/amxxhelper.php?id=cftxt'+<?php echo $this->_tpl_vars['admins']['aid']; ?>
,'Link','width=510,height=670,dependent=yes,resizable=yes');return false;" />
							</div>
						</td>
						<td align="center">
							<div id="usb<?php echo $this->_tpl_vars['admins']['aid']; ?>
" <?php if ($this->_tpl_vars['admins']['aktiv'] != 1): ?>style="visibility:hidden"<?php endif; ?>>
								<select name="use_static_bantime[]"><?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['yesno_choose'],'output' => ((is_array($_tmp=$this->_tpl_vars['yesno_output'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['admins']['use_static_bantime']), $this);?>
</select>
							</div>
						</td>
						<td align="center">
							<input type="hidden" name="sid" value="<?php echo $this->_tpl_vars['editadmins']['sid']; ?>
" />
							<input type="hidden" name="sidname" value="<?php echo $this->_tpl_vars['editadmins']['sidname']; ?>
" />
							<input type="hidden" name="hid_uid[]" value="<?php echo $this->_tpl_vars['admins']['aid']; ?>
" />
							<select name="aktiv_new[]" onchange="document.getElementById('cf<?php echo $this->_tpl_vars['admins']['aid']; ?>
').style.visibility=(this.value == 1)?'visible':'hidden';
									document.getElementById('usb<?php echo $this->_tpl_vars['admins']['aid']; ?>
').style.visibility=(this.value == 1)?'visible':'hidden';"><?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['onetwo_choose'],'output' => ((is_array($_tmp=$this->_tpl_vars['yesno_output'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)),'selected' => $this->_tpl_vars['admins']['aktiv']), $this);?>

							</select>
						</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>
						<tr align="right">
							<td align="right"><input type="submit" class="button" name="save" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
"  <?php if ($this->_supers['session']['amxadmins_edit'] != 'yes'): ?>disabled<?php endif; ?> /></td>
						</tr>
					</td>
					</tr>
				</table>
				</form>
				<br />
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "info_amxaccess.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
			<?php else: ?>
				<center><div class="admin_msg"><?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div></center>
			<?php endif; ?>
			</td></tr></table>
		</td>
	</tr>
</table>