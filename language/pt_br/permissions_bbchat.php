<?php
/**
 *
 * BBchat
 * @copyright (c) 2018 sitesplat.com All rights reserved
 * @license Proprietary
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2019 [ver 1.1.2] (https://github.com/phpBBTraducoes)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACL_CAT_BBCHAT'	=> 'BBchat',

	'ACL_U_BBCHAT_PUSHER_BBCHAT'		=> 'Pode usar BBchat',
	'ACL_U_BBCHAT_PUSHER_PRIVATE'		=> 'Pode usar conversas privadas com amigos',
	'ACL_U_BBCHAT_PUSHER_PRIVATE_ALL'	=> 'Pode usar conversas privadas com qualquer um',
	'ACL_U_BBCHAT_PUSHER_DELETE'		=> 'Pode excluir todas as mensagens',
	'ACL_U_BBCHAT_PUSHER_DELETE_SELF'	=> 'Pode excluir suas mensagens',
	'ACL_U_BBCHAT_PUSHER_BAN'			=> 'Pode banir usuários',
	'ACL_U_BBCHAT_PUSHER_SEND_FILES'	=> 'Pode enviar arquivos',
));
