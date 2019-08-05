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
	'UCP_BBCHAT_TITLE'	=> 'Editar opções do BBchat',
	'SEND_SOUND'		=> 'Um som a ser reproduzido quando você envia uma mensagem',
	'RECEIVE_SOUND'		=> 'Um som a ser tocado quando você recebe uma mensagem',
	'DEFAULT_SOUND'		=> 'Use o som padrão',
	'MENTIONS_ENABLE'	=> 'Os usuários podem mencionar você no chat (você receberá uma notificação)',
    'BBCHAT_SIGNATURE'	=> '<a class="pull-right" style="font-size:12px;" href="https://goo.gl/kFxVMh" target="_blank">Extensão BBchat por SiteSplat</a>',
	
	'NOTIFICATION_TYPE_SITESPLAT.BBCHATPUSHER.NOTIFICATION.TYPE.MENTION'	=> 'Alguém menciona você no chat'
));
