<?php
/**
*
* @package phpBB Extension - Youtube Videos Gallery
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author _Vinny_ - http://www.suportephpbb.com.br
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'VIDEO_INDEX'				=> 'Video Galerij',
	'VIDEO_SELECT_CAT'			=> 'Selecteer een categorie',
	'VIDEO_SUBMIT'				=> 'Nieuwe Video',
	'VIDEO_URL'					=> 'Vul Video URL in',
	'VIDEO_URL_EXPLAIN'			=> '',
	'VIDEOS_TIP'				=> 'Help en suggesties',
	'VIDEOS_TIPS_PART_01'		=> 'Surf naar <a href="https://www.youtube.com/">Youtube.com</a>, zoek je favoriete video.',
	'VIDEOS_TIPS_PART_02'		=> 'Kopieer de video URL, plak deze in bovenstaand formulier, kies categorie en plaats de video.',
	'VIDEOS_TIPS_PART_03'		=> 'Ja kan <strong>youtube.com</strong> gebruiken en <strong>youtu.be</strong>, beide worden geaccepteerd.',
	'VIDEOS_TIPS_PART_04'		=> 'Waarschuwing',
	'VIDEOS_TIPS_PART_05'		=> 'deze pagina is niet voor videos naar youtube te uploaden!',
	'VIDEO_UNAUTHED'			=> 'Je hebt geen permissie om deze video te bekijken.',
	'INVALID_VIDEO'				=> 'De geselecteerde video bestaat niet.',
	'VIDEO'						=> 'Video',
	'VIDEO_EXPLAIN'				=> 'Bekijk galerij van de Youtube videos',
	'VIEW_CAT'					=> 'Bekijk categorie',
	'VIEW_VIDEO'				=> 'Bekijk Video',
	'VIDEO_CAT'					=> 'Categorie',
	'VIDEO_CATS'				=> 'Categorieen',
	'VIDEO_CREATED'				=> 'Deze video is succesvol toegevoegd.',
	'VIDEO_DATE'				=> 'Datum',
	'VIDEO_DELETE'				=> 'Verwijder video',
	'VIDEO_DELETED'				=> 'Deze video is succesvol verwijderd.',
	'VIDEO_LAST'				=> 'Laatste',
	'PAGE_RETURN'				=> '%sGa terug naar de video pagina%s',
	'COMMENTS'					=> 'Racties',
	'POST_COMMENT'				=> 'Plaats een reactie',
	'COMMENT_CREATED'			=> 'Je reactie is succesvol toegevoegd.',
	'VIDEO_CMNT_SUBMIT'			=> 'Plaatst een nieuwe ractie',
	'NO_VIDEOS_COMMENTS'		=> 'Deze video heeft geen reacties.',
	'VIDEO_COMMENT'				=> 'Reactie',
	'VIDEO_COMMENTS'			=> 'Reacties',
	'COMMENT_DELETED_SUCCESS'	=> 'Deze reactie is succesvol verwijderd.',
	'DELETE_COMMENT_CONFIRM'	=> 'Ben je zeker dat je deze reactie wenst te verwijderen?',
	'DELETE_VIDEO'				=> 'Ben je zeker dat je deze video wenst te verwijderen?',
	'MY_VIDEOS'					=> 'Bekijk je videos',
	'NEED_VIDEO_URL'			=> 'Je moet een <strong>url</strong> opgeven voor deze video.',
	'NEWEST_VIDEOS'				=> 'Nieuwste videos',
	'NO_VIDEOS'					=> 'Deze pagina heeft geen videos.',
	'NO_CAT_VIDEOS'				=> 'Deze categorie heeft geen videos of bestaat niet.',
	'NO_USER_VIDEOS'			=> 'Deze gebruiker heeft geen videos of bestaat niet.',
	'NO_CATEGORIES'				=> 'Deze pagina heeft geen categorieen.',
	'NO_TITLE'					=> 'Deze pagina geeft geen titels.',
	'RETURN_TO_VIDEO_INDEX'		=> 'Keer terug naar de video galerij',
	'SEARCH_VIDEOS'				=> 'Zoek Videos',
	'TOTAL_CATEGORIES_OTHER'	=> 'Totaal categorieen <strong>%d</strong>',
	'TOTAL_CATEGORY_ZERO'		=> 'Totaal categorieen <strong>0</strong>',
	'TOTAL_VIDEOS'				=> 'Totaal videos',
	'TOTAL_VIDEOS_OTHER'		=> 'Totaal videos <strong>%d</strong>',
	'TOTAL_VIDEO_ZERO'			=> 'Totaal videos <strong>0</strong>',
	'TOTAL_VIEWS_OTHER'			=> 'Totaal bekeken <strong>%d</strong>',
	'TOTAL_VIEW_ZERO'			=> 'Totaal bekeken <strong>0</strong>',
	'TOTAL_COMMENTS_OTHER'		=> 'Totaal reacties <strong>%d</strong>',
	'TOTAL_COMMENT_ZERO'		=> 'Totaal reacties <strong>0</strong>',
	'USER_VIDEOS'				=> 'Alle videos van gebruiker',
	'USER_VIDEOS_EXPLAIN'		=> 'Toon alle',
	'NO_KEY_ADMIN'				=> 'Beste forum beheerder, om de video galerij te gebruiken moet je een <strong>Google Public API key</strong> aanmaken, ga naar het Administratie Controle Paneel en volg de instructies.',
	'NO_KEY_USER'				=> 'Beste gebruiker, de video galerij is momenteel niet beschikbaar. Probeer later opnieuw..',
	'COMMENTS_DISABLED'			=> 'Reacties zijn uitgeschakeld.',
	'DELETE_COMMENT'			=> 'Verwijder reactie',

	// ACP
	'ACP_VIDEO_GENERAL_SETTINGS'					=> 'Algemene instellingen',
	'ACP_VIDEO_ENABLE'								=> 'Schakel video pagina in',
	'ACP_VIDEO_CATEGORY'							=> 'Video Categorien',
	'ACP_VIDEO_HEIGHT'								=> 'Video Hoogte',
	'ACP_VIDEO_HEIGHT_EXPLAIN'						=> 'Stel video hoogte in.',
	'ACP_VIDEO_WIDTH'								=> 'Video Breedte',
	'ACP_VIDEO_WIDTH_EXPLAIN'						=> 'Stel video breedte in.',
	'ACP_VERSION_CURRENT'							=> 'Versie',
	'ACP_GOOGLE_KEY'								=> 'Google Public API key',
	'ACP_GOOGLE_KEY_EXPLAIN'						=> 'Om de video galerij te gebruiken moet je een <strong>Google Public API key</strong> aanmaken. Bezoek aub <strong><a href="https://console.developers.google.com/">Google Developers Console</a></strong> om de sleutel aan te maken. Lees deze gids als je problemen hebt om deze aan te maken <strong><a href="https://developers.google.com/console/help/new/#generatingdevkeys">Google Developers Console Help: API keys</a></strong>. Tot je deze sleutel aangemaakt hebt zal de video galerij niet beschikbaar zijn.',
	'ACP_VIDEOS_PER_PAGE'							=> 'Videos per pagina',
	'ACP_COMMENTS_PER_PAGE'							=> 'Reacties per pagina',
	'ACP_COMMENTS_PER_PAGE_EXPLAIN'					=> 'Stel het aantal reacties in op de video pagina.<br /><em>Standaard waarde is 10</em>.',
	'ACP_ENABLE_COMMENTS'							=> 'Schakel reacties in op de video pagina',
	'ACP_ENABLE_COMMENTS_EXPLAIN'					=> 'Deze optie zal reacties topen op de video pagina',
	'ACP_ENABLE_VIDEO_STATICS_ON_INDEX'				=> 'Schakel video statistieken in op de index pagina',
	'ACP_ENABLE_VIDEO_STATICS_ON_INDEX_EXPLAIN'		=> 'Deze optie zal de video statistieken weergeven op de index pagina.',
	'ACP_ENABLE_VIDEO_ON_INDEX'						=> 'Schakel laatste videos in op de index pagina',
	'ACP_ENABLE_VIDEO_ON_INDEX_EXPLAIN'				=> 'Deze optie zal de laatste videos weergeven op de index pagina.',
	'ACP_ENABLE_VIDEO_ON_INDEX_LOCATION'			=> 'Toon de laatste videos bovenaan de index pagina',
	'ACP_ENABLE_VIDEO_ON_INDEX_LOCATION_EXPLAIN'	=> 'Nee is de onderkant van de index pagina',
	'ACP_VIDEO_ON_INDEX_VALUE'						=> 'Toon de laatste videos',
	'ACP_VIDEO_ON_INDEX_VALUE_EXPLAIN'				=> 'Stel de waarde in voor het aantal videos op de index pagina.<br /><em>Standaard waarde is 6</em>.',

	// ACP Categories
	'ACP_CATEGORY_CREATED'			=> 'Deze categorie werd succesvol toegevoegd.',
	'ACP_CATEGORY_DELETE'			=> 'Ben je zeker dat je deze categorie wenst te verwijderen?',
	'ACP_CATEGORY_DELETED'			=> 'Deze categorie werd succesvol verwijderd',
	'ACP_CATEGORY_EDIT'				=> 'Bewerk categorie',
	'ACP_CATEGORY_UPDATED'			=> 'Deze categorie werd succesvol geupdate!',
	'ACP_VIDEO_CAT_ADD'				=> 'Nieuwe categrie toegevoegd',
	'ACP_VIDEO_CAT_TITLE'			=> 'Categorie Titel',
	'ACP_VIDEO_CAT_TITLE_EXPLAIN'	=> 'Plaats de titel van de video.',
	'ACP_VIDEO_CAT_TITLE_TITLE'		=> 'Je moet een <strong>titel</strong> invullen voor deze categorie.',
	'ACP_VIDEO_OVERVIEW'			=> 'Video Categorien',
	'ACP_VIDEO_OVERVIEW_EXPLAIN'	=> 'Hier kan je de video categorien beheren van je forum.',
	'ACP_VIDEO_TITLE_EXPLAIN'		=> 'Hier kan je de video titels beheren van je forum',
	'ACP_TITLE_DELETE'				=> 'Ben je zeker dat je deze titel wenst te verwijderen?',
	'ACP_TITLE_DELETED'				=> 'Deze titel werd succesvol verwijderd',

	// Install
	'INSTALL_TEST_CAT'		=> 'ongesorteerd',

	// View Video
	'FLASH_IS_OFF'			=> '[flash] is <em>UIT</em>',
	'FLASH_IS_ON'			=> '[flash] is <em>AAN</em>',
	'VIDEO_ADD_BY'			=> 'Toegevoegd door',
	'VIDEO_BBCODE'			=> 'BBcode',
	'VIDEO_EMBED'			=> 'Embed Video',
	'VIDEO_LINK'			=> 'Video Link',
	'VIDEO_LINKS'			=> 'Links',
	'VIDEO_LINK_YOUTUBE'	=> 'Youtube Video Link',
	'VIDEO_VIEWS'			=> 'Bekeken',

	// Youtube video text
	'VIDEO_AUTHOR'			=> 'Auteur',
	'VIDEO_WATCH'			=> 'Bekijk op YouTube',

	//Pagination
	'LIST_VIDEO'			=> '1 Video',
	'LIST_VIDEOS'			=> '%1$s Videos',
	'LIST_COMMENT'			=> '1 Reactie',
	'LIST_COMMENTS'			=> '%1$s Reacties',

));

