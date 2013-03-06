<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @author Manu Quintans
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 */

$lang = array();
$lang['title'] = 'AJAX Chat';
$lang['userName'] = 'Username';
$lang['password'] = 'Password';
$lang['login'] = 'Login';
$lang['logout'] = 'Cerrar Sesión';
$lang['channel'] = 'Canal';
$lang['style'] = 'Style';
$lang['language'] = 'Idioma';
$lang['inputLineBreak'] = 'Press SHIFT+ENTER to input a line break';
$lang['messageSubmit'] = 'Submit';
$lang['registeredUsers'] = 'Registered Users';
$lang['onlineUsers'] = 'Usuarios Conectados';
$lang['toggleAutoScroll'] = 'Autoscroll on/off';
$lang['toggleAudio'] = 'Sound on/off';
$lang['toggleHelp'] = 'Show/hide help';
$lang['toggleSettings'] = 'Show/hide settings';
$lang['toggleOnlineList'] = 'Show/hide online list';
$lang['bbCodeLabelBold'] = 'b';
$lang['bbCodeLabelItalic'] = 'i';
$lang['bbCodeLabelUnderline'] = 'u';
$lang['bbCodeLabelQuote'] = 'Quote';
$lang['bbCodeLabelCode'] = 'Code';
$lang['bbCodeLabelURL'] = 'URL';
$lang['bbCodeLabelColor'] = 'Font Color';
$lang['bbCodeTitleBold'] = 'Bold text: [b]text[/b]';
$lang['bbCodeTitleItalic'] = 'Italic text: [i]text[/i]';
$lang['bbCodeTitleUnderline'] = 'Underline text: [u]text[/u]';
$lang['bbCodeTitleQuote'] = 'Quote text: [quote]text[/quote] or [quote=author]text[/quote]';
$lang['bbCodeTitleCode'] = 'Code display: [code]code[/code]';
$lang['bbCodeTitleURL'] = 'Insert URL: [url]http://example.org[/url] or [url=http://example.org]text[/url]';
$lang['bbCodeTitleColor'] = 'Font Color: [color=red]text[/color]';
$lang['help'] = 'Ayuda';
$lang['helpItemDescJoin'] = 'Entrar en canal:';
$lang['helpItemCodeJoin'] = '/join nombre del canal';
$lang['helpItemDescJoinCreate'] = 'Create a private room (Registered users only):';
$lang['helpItemCodeJoinCreate'] = '/join';
$lang['helpItemDescInvite'] = 'Invite someone (e.g. to a private room):';
$lang['helpItemCodeInvite'] = '/invite Username';
$lang['helpItemDescUninvite'] = 'Revoke invitation:';
$lang['helpItemCodeUninvite'] = '/uninvite Username';
$lang['helpItemDescLogout'] = 'Cerrar sesión:';
$lang['helpItemCodeLogout'] = '/quit';
$lang['helpItemDescPrivateMessage'] = 'Mensaje Privado:';
$lang['helpItemCodePrivateMessage'] = '/msg Usuario Texto';
$lang['helpItemDescQueryOpen'] = 'Abrir un canal privado:';
$lang['helpItemCodeQueryOpen'] = '/query Usuario';
$lang['helpItemDescQueryClose'] = 'Cerrar canal privado:';
$lang['helpItemCodeQueryClose'] = '/query';
$lang['helpItemDescAction'] = 'Describe action:';
$lang['helpItemCodeAction'] = '/action Text';
$lang['helpItemDescDescribe'] = 'Describe action in private message:';
$lang['helpItemCodeDescribe'] = '/describe Username Text';
$lang['helpItemDescIgnore'] = 'Ignorar/Aceptar mensajes de usuarios:';
$lang['helpItemCodeIgnore'] = '/ignore Username';
$lang['helpItemDescIgnoreList'] = 'List ignored users:';
$lang['helpItemCodeIgnoreList'] = '/ignore';
$lang['helpItemDescWhereis'] = 'Display user channel:';
$lang['helpItemCodeWhereis'] = '/whereis Username';
$lang['helpItemDescKick'] = 'Patear usuario (Solo moderadores):';
$lang['helpItemCodeKick'] = '/kick Usuario [Minutos baneado]';
$lang['helpItemDescUnban'] = 'Quitar ban usuario (Solo moderadores):';
$lang['helpItemCodeUnban'] = '/unban Username';
$lang['helpItemDescBans'] = 'Listar usuarios baneados (Solo moderadores):';
$lang['helpItemCodeBans'] = '/bans';
$lang['helpItemDescWhois'] = 'Mostrar ips de usuarios (Solo moderadores):';
$lang['helpItemCodeWhois'] = '/whois Username';
$lang['helpItemDescWho'] = 'Mostrar usuarios conectados:';
$lang['helpItemCodeWho'] = '/who [Channelname]';
$lang['helpItemDescList'] = 'Lista de canales disponibles:';
$lang['helpItemCodeList'] = '/list';
$lang['helpItemDescRoll'] = 'Roll dice:';
$lang['helpItemCodeRoll'] = '/roll [number]d[sides]';
$lang['helpItemDescNick'] = 'Change username:';
$lang['helpItemCodeNick'] = '/nick Username';
$lang['settings'] = 'Settings';
$lang['settingsBBCode'] = 'Enable BBCode:';
$lang['settingsHyperLinks'] = 'Enable hyperlinks:';
$lang['settingsLineBreaks'] = 'Enable line breaks:';
$lang['settingsEmoticons'] = 'Enable emoticons:';
$lang['settingsAutoFocus'] = 'Automatically set the focus on the input field:';
$lang['settingsMaxMessages'] = 'Maximum number of messages in the chatlist:';
$lang['settingsWordWrap'] = 'Enable wrapping of long words:';
$lang['settingsMaxWordLength'] = 'Maximum length of a word before it gets wrapped:';
$lang['settingsDateFormat'] = 'Format of date and time display:';
$lang['settingsPersistFontColor'] = 'Persist font color:';
$lang['settingsAudioVolume'] = 'Sound Volume:';
$lang['settingsSoundReceive'] = 'Sound for incoming messages:';
$lang['settingsSoundSend'] = 'Sound for outgoing messages:';
$lang['settingsSoundEnter'] = 'Sound for login and channel enter messages:';
$lang['settingsSoundLeave'] = 'Sound for logout and channel leave messages:';
$lang['settingsSoundChatBot'] = 'Sound for chatbot messages:';
$lang['settingsSoundError'] = 'Sound for error messages:';
$lang['settingsBlink'] = 'Blink window title on new messages:';
$lang['settingsBlinkInterval'] = 'Blink interval in milliseconds:';
$lang['settingsBlinkIntervalNumber'] = 'Number of blink intervals:';
$lang['playSelectedSound'] = 'Play selected sound';
$lang['requiresJavaScript'] = 'Necesitar tener activado el Javascript en tu navegador..';
$lang['errorInvalidUser'] = 'Usuario Invalido.';
$lang['errorUserInUse'] = 'Este nombre de usuario esta siendo utilizado en este momento.';
$lang['errorBanned'] = 'El Usuario o la IP esta baneada..'; 
$lang['errorMaxUsersLoggedIn'] = 'The chat has reached the maximum number of logged-in users.';
$lang['errorChatClosed'] = 'The chat is closed at the moment.';
$lang['logsTitle'] = 'AJAX Chat - Logs';
$lang['logsDate'] = 'Date';
$lang['logsTime'] = 'Time';
$lang['logsSearch'] = 'Search';
$lang['logsPrivateChannels'] = 'Private Channels';
$lang['logsPrivateMessages'] = 'Private Messages';
?>