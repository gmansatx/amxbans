<?php /* Smarty version 2.6.25, created on 2023-02-26 16:42:25
         compiled from admin_sv.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'lang', 'admin_sv.tpl', 4, false),array('modifier', 'date_format', 'admin_sv.tpl', 71, false),array('function', 'html_options', 'admin_sv.tpl', 104, false),)), $this); ?>
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
		<td id="main" valign="top" class="admin_list">
		<?php if ($this->_supers['session']['servers_edit'] == 'yes'): ?>
			<span class="title"><?php echo ((is_array($_tmp='_SERVERSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</span>
			<table width="95%" align="center"><tr><td>
				<table class="admin_list" border="1" width="100%">
					<tr class="htable">
						<td width="1%"><?php echo ((is_array($_tmp='_MOD')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%"><?php echo ((is_array($_tmp='_IP')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp='_HOSTNAME')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%" align="center"><?php echo ((is_array($_tmp='_VERSION')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
						<td width="1%" align="center"><?php echo ((is_array($_tmp='_LASTSEEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
					</tr>
					<?php $_from = $this->_tpl_vars['servers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['servers']):
?>
						
						<tr class="list" style="cursor:pointer;"onClick="NewToggleLayer('layer_<?php echo $this->_tpl_vars['servers']['sid']; ?>
');">
							<td align="center"><img src="images/mods/<?php echo $this->_tpl_vars['servers']['gametype']; ?>
.gif" /></td>
							<td align="center"><?php echo $this->_tpl_vars['servers']['address']; ?>
</td>
							<td align="center"><?php echo $this->_tpl_vars['servers']['hostname']; ?>
</td>
							<td align="center"><?php echo $this->_tpl_vars['servers']['amxban_version']; ?>
</td>
							<td align="center"><nobr><?php echo ((is_array($_tmp=$this->_tpl_vars['servers']['timestamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d. %b %Y - %T") : smarty_modifier_date_format($_tmp, "%d. %b %Y - %T")); ?>
</nobr></td>
						</tr>
						<tr id="layer_<?php echo $this->_tpl_vars['servers']['sid']; ?>
" <?php if ($this->_tpl_vars['servers']['sid'] != $this->_tpl_vars['server_activ']): ?>style="display: none"<?php endif; ?>>
							<td class="admin_list" colspan="5"><div style="display:none">
								<fieldset><legend><?php echo ((is_array($_tmp='_SERVERSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 <?php echo $this->_tpl_vars['servers']['hostname']; ?>
</legend>
									<table class="table_details" width="95%">
									<form name="rcon_<?php echo $this->_tpl_vars['servers']['sid']; ?>
" method="POST">
										<tr class="htable">
											<td colspan="4"><?php echo ((is_array($_tmp='_SERVERSETTINGS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										</tr>
										<tr class="settings_line">
											<td><?php echo ((is_array($_tmp='_RCONPW')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
											<td width="1%"><?php if ($this->_supers['session']['servers_edit'] == 'yes'): ?>
												<input type="password" name="rcon" value="<?php echo $this->_tpl_vars['servers']['rcon']; ?>
" />
												<?php else: ?>
												<i><?php echo ((is_array($_tmp='_HIDDEN')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</i>
												<?php endif; ?>
											</td>
											<td>&nbsp;</td>
											<td rowspan="5" width="1%" valign="bottom">
												<input type="hidden" name="sid" value="<?php echo $this->_tpl_vars['servers']['sid']; ?>
" />
												<input type="hidden" name="sidname" value="<?php echo $this->_tpl_vars['servers']['hostname']; ?>
" />
												<input type="submit" class="button" name="save" value="<?php echo ((is_array($_tmp='_SAVE')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" <?php if ($this->_supers['session']['servers_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
												<input type="submit" class="button" name="del" value="<?php echo ((is_array($_tmp='_DEL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="return confirm('<?php echo ((is_array($_tmp='_DELSERVER')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
<?php echo ((is_array($_tmp='_DATALOSS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
');" <?php if ($this->_supers['session']['servers_edit'] !== 'yes'): ?>disabled<?php endif; ?> />
											</td>
										</tr>
										<tr class="settings_line">
											<td><?php echo ((is_array($_tmp='_MOTDURL')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
											<td><input type="text" size="70" name="amxban_motd" id="<?php echo $this->_tpl_vars['servers']['sid']; ?>
" value="<?php echo $this->_tpl_vars['servers']['amxban_motd']; ?>
" /></td>
											<td><input type="button" class="button" value="<?php echo ((is_array($_tmp='_AUTO')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" onclick="document.getElementById('<?php echo $this->_tpl_vars['servers']['sid']; ?>
').value='<?php echo $this->_tpl_vars['motd_url']; ?>
';" /></td>
										</tr>
										<tr class="settings_line">
											<td><?php echo ((is_array($_tmp='_MOTDDELAY')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
											<td><?php echo smarty_function_html_options(array('name' => 'motd_delay','values' => $this->_tpl_vars['delay_choose'],'output' => $this->_tpl_vars['delay_choose'],'selected' => $this->_tpl_vars['servers']['motd_delay']), $this);?>
 <?php echo ((is_array($_tmp='_SECS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										</tr>
<!--										<tr class="settings_line">
											<td><?php echo ((is_array($_tmp='_SERVERMENU')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
											<td><?php echo smarty_function_html_options(array('name' => 'amxban_menu','values' => $this->_tpl_vars['menu_choose'],'output' => $this->_tpl_vars['menu_choose'],'selected' => $this->_tpl_vars['servers']['amxban_menu']), $this);?>
</td>
										</tr>
-->											<tr class="settings_line">
											<td><?php echo ((is_array($_tmp='_REASONSSET')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
											<td><?php echo smarty_function_html_options(array('name' => 'reasons','values' => $this->_tpl_vars['reasons_values'],'output' => $this->_tpl_vars['reasons_choose'],'selected' => $this->_tpl_vars['servers']['reasons']), $this);?>
</td>
										</tr>
										<tr class="settings_line">
											<td><?php echo ((is_array($_tmp='_TIMEZONEFIXX')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
											<td><?php echo smarty_function_html_options(array('name' => 'timezone_fixx','values' => $this->_tpl_vars['timezone_values'],'output' => $this->_tpl_vars['timezone_output'],'selected' => $this->_tpl_vars['servers']['timezone_fixx']), $this);?>
 <?php echo ((is_array($_tmp='_HOURS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
										</tr>
										<?php if ($this->_tpl_vars['servers']['rcon']): ?>
											<tr class="settings_line"><td colspan="4">&nbsp;</td></tr>
											<tr class="htable">
												<td colspan="4"><?php echo ((is_array($_tmp='_SERVERRCON')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</td>
											</tr>
											<?php if ($this->_supers['session']['servers_edit'] == 'yes'): ?>
											<tr class="settings_line">
												<td valign="top"><?php echo ((is_array($_tmp='_RCON_PREDEFINED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
												<td>
<!--												<select name="command" size="3">
														<?php unset($this->_sections['rcon_cmds']);
$this->_sections['rcon_cmds']['name'] = 'rcon_cmds';
$this->_sections['rcon_cmds']['loop'] = is_array($_loop=$this->_tpl_vars['rcon_cmds']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rcon_cmds']['show'] = true;
$this->_sections['rcon_cmds']['max'] = $this->_sections['rcon_cmds']['loop'];
$this->_sections['rcon_cmds']['step'] = 1;
$this->_sections['rcon_cmds']['start'] = $this->_sections['rcon_cmds']['step'] > 0 ? 0 : $this->_sections['rcon_cmds']['loop']-1;
if ($this->_sections['rcon_cmds']['show']) {
    $this->_sections['rcon_cmds']['total'] = $this->_sections['rcon_cmds']['loop'];
    if ($this->_sections['rcon_cmds']['total'] == 0)
        $this->_sections['rcon_cmds']['show'] = false;
} else
    $this->_sections['rcon_cmds']['total'] = 0;
if ($this->_sections['rcon_cmds']['show']):

            for ($this->_sections['rcon_cmds']['index'] = $this->_sections['rcon_cmds']['start'], $this->_sections['rcon_cmds']['iteration'] = 1;
                 $this->_sections['rcon_cmds']['iteration'] <= $this->_sections['rcon_cmds']['total'];
                 $this->_sections['rcon_cmds']['index'] += $this->_sections['rcon_cmds']['step'], $this->_sections['rcon_cmds']['iteration']++):
$this->_sections['rcon_cmds']['rownum'] = $this->_sections['rcon_cmds']['iteration'];
$this->_sections['rcon_cmds']['index_prev'] = $this->_sections['rcon_cmds']['index'] - $this->_sections['rcon_cmds']['step'];
$this->_sections['rcon_cmds']['index_next'] = $this->_sections['rcon_cmds']['index'] + $this->_sections['rcon_cmds']['step'];
$this->_sections['rcon_cmds']['first']      = ($this->_sections['rcon_cmds']['iteration'] == 1);
$this->_sections['rcon_cmds']['last']       = ($this->_sections['rcon_cmds']['iteration'] == $this->_sections['rcon_cmds']['total']);
?>
															<option value="<?php echo $this->_tpl_vars['rcon_cmds'][$this->_sections['rcon_cmds']['index']]; ?>
" <?php if ($this->_sections['rcon_cmds']['index'] == 0): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['rcon_cmdkeys'][$this->_sections['rcon_cmds']['index']])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</option>
														<?php endfor; endif; ?>
													</select>
-->
													<select name="command" size="1">
														<?php unset($this->_sections['rcon_cmds']);
$this->_sections['rcon_cmds']['name'] = 'rcon_cmds';
$this->_sections['rcon_cmds']['loop'] = is_array($_loop=$this->_tpl_vars['rcon_cmds']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rcon_cmds']['show'] = true;
$this->_sections['rcon_cmds']['max'] = $this->_sections['rcon_cmds']['loop'];
$this->_sections['rcon_cmds']['step'] = 1;
$this->_sections['rcon_cmds']['start'] = $this->_sections['rcon_cmds']['step'] > 0 ? 0 : $this->_sections['rcon_cmds']['loop']-1;
if ($this->_sections['rcon_cmds']['show']) {
    $this->_sections['rcon_cmds']['total'] = $this->_sections['rcon_cmds']['loop'];
    if ($this->_sections['rcon_cmds']['total'] == 0)
        $this->_sections['rcon_cmds']['show'] = false;
} else
    $this->_sections['rcon_cmds']['total'] = 0;
if ($this->_sections['rcon_cmds']['show']):

            for ($this->_sections['rcon_cmds']['index'] = $this->_sections['rcon_cmds']['start'], $this->_sections['rcon_cmds']['iteration'] = 1;
                 $this->_sections['rcon_cmds']['iteration'] <= $this->_sections['rcon_cmds']['total'];
                 $this->_sections['rcon_cmds']['index'] += $this->_sections['rcon_cmds']['step'], $this->_sections['rcon_cmds']['iteration']++):
$this->_sections['rcon_cmds']['rownum'] = $this->_sections['rcon_cmds']['iteration'];
$this->_sections['rcon_cmds']['index_prev'] = $this->_sections['rcon_cmds']['index'] - $this->_sections['rcon_cmds']['step'];
$this->_sections['rcon_cmds']['index_next'] = $this->_sections['rcon_cmds']['index'] + $this->_sections['rcon_cmds']['step'];
$this->_sections['rcon_cmds']['first']      = ($this->_sections['rcon_cmds']['iteration'] == 1);
$this->_sections['rcon_cmds']['last']       = ($this->_sections['rcon_cmds']['iteration'] == $this->_sections['rcon_cmds']['total']);
?>
															<option value="<?php echo $this->_tpl_vars['rcon_cmds'][$this->_sections['rcon_cmds']['index']]; ?>
" <?php if ($this->_sections['rcon_cmds']['index'] == 0): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['rcon_cmdkeys'][$this->_sections['rcon_cmds']['index']])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</option>
														<?php endfor; endif; ?>
													</select>
												</td>
												<td>
													<input type="submit" class="button" name="rconcommand" value="<?php echo ((is_array($_tmp='_RCON_SEND')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" />
												</td>
												<td></td>
											</tr>
											<tr class="settings_line">
												<td><?php echo ((is_array($_tmp='_RCON_USERDEFINED')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
:</td>
												<td><input type="test" size="70" name="rconuser" onkeyup="document.rcon_<?php echo $this->_tpl_vars['servers']['sid']; ?>
.rconuserstart_<?php echo $this->_tpl_vars['servers']['sid']; ?>
.disabled=(this.value=='');" /></td>
												<td><input type="submit" class="button" name="rconuserstart_<?php echo $this->_tpl_vars['servers']['sid']; ?>
" value="<?php echo ((is_array($_tmp='_RCON_SEND')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
" disabled /></td>
											</tr>
											<?php else: ?>
												<tr class="settings_line"><td class="admin_msg"><?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
 !!</td></tr>
											<?php endif; ?>	
										<?php endif; ?>
									</form>
									</table>
								</fieldset></div>
							</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
			</td></tr></table>
									<?php if ($this->_tpl_vars['msg']): ?>
				<div class="notice">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['msg'])) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>

				<?php if ($this->_tpl_vars['smsg']): ?>
					<br /><br />
					<div class="rcon_box">
						<pre><?php echo $this->_tpl_vars['smsg']; ?>
</pre>
						<div class="clearer">&nbsp;</div>
					</div>
				<?php endif; ?>
					<div class="clearer">&nbsp;</div>
				</div>
			<?php endif; ?>
		<?php else: ?>
			<center><div class="admin_msg"><?php echo ((is_array($_tmp='_NOACCESS')) ? $this->_run_mod_handler('lang', true, $_tmp) : smarty_modifier_lang($_tmp)); ?>
</div></center>
		<?php endif; ?>
		</td>
	</tr>
</table>