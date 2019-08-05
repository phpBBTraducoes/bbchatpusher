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
	'BBCHAT_PUSHER'						=> 'Chat',
	'BBCHAT_NOT_ENABLED'				=> 'BBchat não está ativado',
	'NO_AUTH_BBCHAT'					=> 'Você não está autorizado a usar o chat.',
	'SITESPLAT_BBCHAT_BOARD_DISABLED'	=> 'Estamos preparando uma extensão incrível para você, aguente firme!',

	'BACK_TO_ROOMS'	=> '< Voltar as salas',

	// notifications
	'BBCHAT_MENTION'	=> 'Você foi mencionado por %s na sala de chat %s',

	// UCP/ACP options
	'NO_SOUND'	=> 'Sem som',

	// Topic Alerts
	'NEW_TOPIC'	=> 'Novo topico: %s',
));
