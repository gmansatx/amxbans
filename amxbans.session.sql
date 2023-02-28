SELECT ba.*, se.gametype,se.timezone_fixx, aa.nickname 
FROM amxbans.amx_bans AS ba
LEFT JOIN amxbans.amx_serverinfo AS se ON ba.server_ip=se.address
LEFT JOIN amxbans.amx_amxadmins AS aa ON (aa.steamid=ba.admin_nick OR aa.steamid=ba.admin_ip OR aa.steamid=ba.admin_id)
WHERE ba.expired=0 ORDER BY ban_created DESC LIMIT 20;