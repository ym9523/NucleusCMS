<?
// German Nucleus Language File --- Nucleus 3.01

// LAST CHANGE: 14. August 2004  
//
// New Translation by Peter M�ller, info@groningen-info.de 
// for Nucleus version: 3.1 
//
// Original Author: Thorsten Bonck
// Formerly based on translation by: Holger Laschka 
// Originally for Nucleus version: 2.0b
// License: GNU Public License (GPL)
//
// Please note: if you want to translate this file to your own language, be aware
// that in a next Nucleus version, new variables might be added and some other ones
// might be deleted. Therefor, it's important to list the Nucleus version for which 
// the file was written in your document.
//
// Fully translated language file can be sent to Wouter Demuynck (nucleus@demuynck.org)
// and will be available for download (with proper credit to the author, of course)



// media library
define('_MEDIA_VIEW',				'ansehen');
define('_MEDIA_VIEW_TT',			'Datei ansehen (in neuem Fenster)');
define('_MEDIA_FILTER_APPLY',		'Filter anwenden');
define('_MEDIA_FILTER_LABEL',		'Filter: ');
define('_MEDIA_UPLOAD_TO',			'Upload in ...');
define('_MEDIA_UPLOAD_NEW',			'Neue Datei uploaden ...');
define('_MEDIA_COLLECTION_SELECT',	'Ausw�hlen');
define('_MEDIA_COLLECTION_TT',		'Sammlung wechseln');
define('_MEDIA_COLLECTION_LABEL',	'Aktuelle Sammlung: ');
define('_ERROR_UPLOADMOVE',	'Datei konnte nicht hochgeladen werden. Stimmen die Dateirechte (CHMOD 777)?');



// _EBLOG_SEARCH war nicht definiert! Aus english.php kopiert 
// 'always include in search' blog setting (yes/no) [in v2.5beta, the 'always' part wasn't clear]
define('_EBLOG_SEARCH',				'Blog <em>immer</em> durchsuchen?');

// START introduced after v1.1 START

// bookmarklet buttons
define('_BMLET_ADD',				'Hinzuf&uuml;gen');
define('_BMLET_EDIT',				'Bearbeiten');
define('_BMLET_DELETE',				'L&ouml;schen');
define('_BMLET_BODY',				'Inhalt'); // war "Einf�hrung" 
define('_BMLET_MORE',				'Erweitert');
define('_BMLET_OPTIONS',			'Optionen');
define('_BMLET_PREVIEW',			'Vorschau');

// used in bookmarklet
define('_ITEM_UPDATED',				'Artikel wurde aktualisiert');
define('_ITEM_DELETED',				'Artikel wurde gel&ouml;scht');

// plugins
define('_CONFIRMTXT_PLUGIN',		'Plugin wirklich l&ouml;schen');
define('_ERROR_NOSUCHPLUGIN',		'Kein solches Plugin');
define('_ERROR_DUPPLUGIN',			'Dieses Plugin ist bereits installiert');
define('_ERROR_PLUGFILEERROR',		'Dieses Plugin existiert nicht oder es sind unzureichende Zugriffsrechte gesetzt');
define('_PLUGS_NOCANDIDATES',		'Kein Plugin gefunden');

define('_PLUGS_TITLE_MANAGE',		'Plugins verwalten');
define('_PLUGS_TITLE_INSTALLED',	'Plugin bereits installiert');
define('_PLUGS_TITLE_UPDATE',		'Liste mit Plugins aktualisieren');
define('_PLUGS_TEXT_UPDATE',		'Ausf&uuml;hren, um Eintragungen bei Aktualisierungen zu cachen');
define('_PLUGS_TITLE_NEW',			'Neues Plugin installieren');
define('_PLUGS_ADD_TEXT',			'Unten steht eine Liste von m&ouml;glichen, nicht installierten Plugins. Bitte <strong>vor dem Installieren sicherstellen</strong>, dass es tats�chlich ein Plugin ist.');
define('_PLUGS_BTN_INSTALL',		'Plugin installieren');
define('_BACKTOOVERVIEW',			'Zur&uuml;ck zur �bersicht');

// editlink
define('_TEMPLATE_EDITLINK',		'Link: Artikel bearbeiten');

// add left / add right tooltips
define('_ADD_LEFT_TT',				'Linke Box hinzuf&uuml;gen');
define('_ADD_RIGHT_TT',				'Rechte Box hinzuf&uuml;gen');

// add/edit item: new category (in dropdown box)
define('_ADD_NEWCAT',				'Neue Kategorie');

// new settings
define('_SETTINGS_PLUGINURL',		'Plugin URL');
define('_SETTINGS_MAXUPLOADSIZE',	'Max. Dateigr&ouml;�e (Bytes)');
define('_SETTINGS_NONMEMBERMSGS',	'Nichtmitglieder d&uuml;rfen Nachrichten verschicken');
define('_SETTINGS_PROTECTMEMNAMES',	'Mitgliedernamen sch&uuml;tzen');

// overview screen
define('_OVERVIEW_PLUGINS',			'Plugins verwalten...');

// actionlog
define('_ACTIONLOG_NEWMEMBER',		'Neue Mitgliederanmeldungen:');

// membermail (when not logged in)
define('_MEMBERMAIL_MAIL',			'Email-Adresse:');

// file upload
define('_ERROR_DISALLOWEDUPLOAD2',	'Stimmen die Dateirechte (CHMOD 777)?'); // war "ungen�gende Rechte" 

// plugin list
define('_LISTS_INFO',				'Informationen');
define('_LIST_PLUGS_AUTHOR',		'Von:');
define('_LIST_PLUGS_VER',			'Version:');
define('_LIST_PLUGS_SITE',			'Homepage besuchen');
define('_LIST_PLUGS_DESC',			'Beschreibung:');
define('_LIST_PLUGS_SUBS',			'Folgende Ereignisse &uuml;bermitteln:');
define('_LIST_PLUGS_UP',			'nach oben');
define('_LIST_PLUGS_DOWN',			'nach unten');
define('_LIST_PLUGS_UNINSTALL',		'deinstallieren');
define('_LIST_PLUGS_ADMIN',			'administrieren');
define('_LIST_PLUGS_OPTIONS',		'Optionen&nbsp;bearbeiten');

// plugin option list
define('_LISTS_VALUE',				'Wert');

// plugin options
define('_ERROR_NOPLUGOPTIONS',		'Dieses Plugin hat keine Optionen');
define('_PLUGS_BACK',				'Zur&uuml;ck zur Plugin-�bersicht');
define('_PLUGS_SAVE',				'Optionen speichern');
define('_PLUGS_OPTIONS_UPDATED',	'Pluginoptionen aktualisiert');
define('_OVERVIEW_MANAGEMENT',		'Nucleus-Verwaltung');
define('_OVERVIEW_MANAGE',			'Nucleus verwalten...');
define('_MANAGE_GENERAL',			'Verschiedene Einstellungen');
define('_MANAGE_SKINS',				'Skins und Templates');
define('_MANAGE_EXTRA',				'Spezielle Einstellungen');

define('_BACKTOMANAGE',				'Zur&uuml;ck zur Nucleus-Verwaltung');


// END introduced after v1.1 END


// global stuff
define('_LOGOUT',					'Abmelden');
define('_LOGIN',					'Anmelden');
define('_YES',						'Ja');
define('_NO',						'Nein');
define('_SUBMIT',					'Absenden');
define('_ERROR',					'Fehler');
define('_ERRORMSG',					'Es ist ein Fehler aufgetreten!');
define('_BACK',						'Zur&uuml;ck');
define('_NOTLOGGEDIN',				'Nicht angemeldet');
define('_LOGGEDINAS',				'Angemeldet als');
define('_ADMINHOME',				'Startseite');
define('_NAME',						'Name');
define('_BACKHOME',					'Zur&uuml;ck zur Startseite');
define('_BADACTION',				'Diese Aktion existiert nicht');
define('_MESSAGE',					'Nachricht');
define('_HELP_TT',					'Hilfe!');


define('_POPUP_CLOSE',				'Fenster schlie&szlig;en');

define('_LOGIN_PLEASE',				'Bitte erst anmelden');

// commentform
define('_COMMENTFORM_YOUARE',		'Sie sind angemeldet als ');
define('_COMMENTFORM_SUBMIT',		'Kommentar hinzuf&uuml;gen');
define('_COMMENTFORM_COMMENT',		'Ihr Kommentar');
define('_COMMENTFORM_NAME',			'Ihr Name');
define('_COMMENTFORM_MAIL',			'EMail oder Homepage');
define('_COMMENTFORM_REMEMBER',		'Informiere mich'); //tja, was macht dat denn? Remember me ... ***

// loginform
define('_LOGINFORM_NAME',			'Benutzer');
define('_LOGINFORM_PWD',			'Passwort');
define('_LOGINFORM_YOUARE',			'Angemeldet als');
define('_LOGINFORM_SHARED',			'Rechner mit mehreren Benutzern (kein Anmeldecookie setzen)');

// member mailform
define('_MEMBERMAIL_SUBMIT',		'Nachricht absenden');

// search form
define('_SEARCHFORM_SUBMIT',		'Suchen');

// add item form
define('_ADD_ADDTO',				'Neuen Artikel hinzuf&uuml;gen zu');
define('_ADD_CREATENEW',			'Neuen Artikel erstellen');
define('_ADD_BODY',					'Inhalt');
define('_ADD_TITLE',				'�berschrift');
define('_ADD_MORE',					'Erweitert (optional)');
define('_ADD_PREVIEW',				'Vorschau');
define('_ADD_DISABLE_COMMENTS',		'Kommentare verbieten?');
define('_ADD_ADDITEM',				'Artikel speichern');
define('_ADD_ADDNOW',				'Jetzt ver&ouml;ffentlichen');
define('_ADD_ADDLATER',				'Sp&auml;ter ver&ouml;ffentlichen');
define('_ADD_PLACE_ON',				'Datum: ');
define('_ADD_ADDDRAFT',				'Als Entwurf speichern');
define('_ADD_NOPASTDATES',			'(Datum aus der Vergangenheit ist ung&uuml;ltig, wird durch aktuelles Datum ersetzt)');
define('_ADD_BOLD_TT',				'Fett');
define('_ADD_ITALIC_TT',			'Kursiv');
define('_ADD_HREF_TT',				'Link erstellen');
define('_ADD_MEDIA_TT',				'Bild hinzuf&uuml;gen');
define('_ADD_PREVIEW_TT',			'Zeige/Verberge Vorschau');
define('_ADD_CUT_TT',				'L&ouml;sche');
define('_ADD_COPY_TT',				'Kopiere');
define('_ADD_PASTE_TT',				'Ausschneiden');


// edit item form
define('_EDIT_ITEM',				'Artikel &auml;ndern');
define('_EDIT_SUBMIT',				'Artikel speichern ...');
define('_EDIT_ORIG_AUTHOR',			'Autor');
define('_EDIT_BACKTODRAFTS',		'Als Entwurf '); //hier stand was mit "Hintergrund erg�nzen" oder so. 
define('_EDIT_COMMENTSNOTE',		'(Achtung: Beim Ausschalten der Kommentarfunktion bleiben bisherige Kommentare online)');

// used on delete screens
define('_DELETE_CONFIRM',			'L&ouml;schen bitte best&auml;tigen');
define('_DELETE_CONFIRM_BTN',		'L&ouml;schen best&auml;tigen');
define('_CONFIRMTXT_ITEM',			'Folgender Artikel soll gel&ouml;scht werden:');
define('_CONFIRMTXT_COMMENT',		'Folgender Kommentar soll gel&ouml;scht werden:');
define('_CONFIRMTXT_TEAM1',			'Sie sind dabei ');
define('_CONFIRMTXT_TEAM2',			' aus der Teamliste zu l&ouml;schen ');
define('_CONFIRMTXT_BLOG',			'Folgendes Blog soll gel&ouml;scht werden: ');
define('_WARNINGTXT_BLOGDEL',		'Achtung! Beim L&ouml;schen des Blogs werden alle Artikel und Kommentare mitgel&ouml;scht. Bitte best&auml;tigen Sie diese Aktion noch einmal!<br />Bitte Nucleus w&auml;hrend des L&ouml;schvorganges nicht unterbrechen.');
define('_CONFIRMTXT_MEMBER',		'Folgendes Mitglied soll gel&ouml;scht werden: ');
define('_CONFIRMTXT_TEMPLATE',		'Folgendes Template soll gel&ouml;scht werden: ');
define('_CONFIRMTXT_SKIN',			'Folgender Skin soll gel&ouml;scht werden: ');
define('_CONFIRMTXT_BAN',			'Folgende ausgesperrte IP-Adressen sollen freigegeben werden: ');

// some status messages
define('_DELETED_ITEM',				'Artikel gel&ouml;scht!');
define('_DELETED_MEMBER',			'Mitglied gel&ouml;scht!');
define('_DELETED_COMMENT',			'Kommentar gel&ouml;scht!');
define('_DELETED_BLOG',				'Blog gel&ouml;scht!');
define('_ITEM_MOVED',				'Artikel verschoben.');
define('_ITEM_ADDED',				'Artikel hinzugef&uuml;gt.');
define('_COMMENT_UPDATED',			'Kommentar ge&auml;ndert.');

// errors
define('_ERROR_COMMENT_LONGWORD',	'Bitte keine Worte mit mehr als 90 Zeichen bei Kommentaren verwenden');
define('_ERROR_COMMENT_NOCOMMENT',	'Bitte einen Kommentar abgeben');
define('_ERROR_COMMENT_NOUSERNAME',	'Benutzername ist nicht g�ltig.');
define('_ERROR_COMMENT_TOOLONG',	'Ihr Kommentar ist zu lang (max. 5.000 Zeichen)');
define('_ERROR_COMMENTS_DISABLED',	'Kommentare sind in diesem Bereich zurzeit nicht m&ouml;glich.');
define('_ERROR_COMMENTS_NONPUBLIC',	'Kommentare k&ouml;nnen nur von Mitgliedern abgegeben werden');
define('_ERROR_COMMENTS_MEMBERNICK','Dieser Name ist bereits vergeben. Bitte probieren Sie einen anderen.');
define('_ERROR_SKIN',				'Skin error');
define('_ERROR_ITEMCLOSED',			'Dieser Diskussionspunkt ist geschlossen. Keine Kommentare mehr hinzuf&uuml;gbar');
define('_ERROR_NOSUCHITEM',			'Dieser Diskussionspunkt existiert nicht');
define('_ERROR_NOSUCHBLOG',			'Blog nicht vorhanden');
define('_ERROR_NOSUCHSKIN',			'Skin nicht vorhanden');
define('_ERROR_NOSUCHMEMBER',		'Benutzer nicht vorhanden');
define('_ERROR_NOTONTEAM',			'Sie geh&ouml;ren nicht zum Team f&uuml;r dieses Blog.');
define('_ERROR_BADDESTBLOG',		'Aufgerufenes Blog existiert nicht');
define('_ERROR_NOTONDESTTEAM',		'Artikel kann nicht in dieses Blog verschoben werden. Sie sind kein Mitglied dort');
define('_ERROR_NOEMPTYITEMS',		'Leerer Artikel kann nicht hinzugef&uuml;gt werden');
define('_ERROR_BADMAILADDRESS',		'Keine g&uuml;ltige E-Mail-Adresse');
define('_ERROR_BADNOTIFY',			'Eine oder mehrere der angegebenen E-Mail-Adressen ist ung&uuml;ltig');
define('_ERROR_BADNAME',			'Benutzername ung&uuml;ltig (nur a-z und 0-9 gestattet, keine Leerzeichen am Beginn und am Ende)');
define('_ERROR_NICKNAMEINUSE',		'Dieser Spitzname wird von einem anderen Mitglied benutzt');
define('_ERROR_PASSWORDMISMATCH',	'Das Passwort muss g&uuml;ltig sein');
define('_ERROR_PASSWORDTOOSHORT',	'Das Passwort sollte aus mindestens 6 Zeichen bestehen');
define('_ERROR_PASSWORDMISSING',	'Das Passwort darf nicht leer sein');
define('_ERROR_REALNAMEMISSING',	'Sie m&uuml;ssen Ihren vollst�ndigen Namen angeben');
define('_ERROR_ATLEASTONEADMIN',	'Es muss immer ein Super-Administrator vorhanden sein.');
define('_ERROR_ATLEASTONEBLOGADMIN','Wenn Sie dies tun, ist Ihr Blog nicht mehr bearbeitbar. Sie m&uuml;ssen mindestens einen Administrator bestimmen.');
define('_ERROR_ALREADYONTEAM',		'Mitglied schon vorhanden, kann nicht hinzugef&uuml;gt werden');
define('_ERROR_BADSHORTBLOGNAME',	'Der Kurzname f&uuml;r das Blog kann nur a-z and 0-9 enthalten, ohne Leerzeichen');
define('_ERROR_DUPSHORTBLOGNAME',	'Dieser Kurzname f&uuml;r ein Blog ist bereits vergeben');
define('_ERROR_UPDATEFILE',			'Habe keine Schreibrechte f&uuml;r die Update-Datei. Bitte Rechte korrekt setzen (chmod 666). Bitte ber&uuml;cksichtigen, dass der Speicherplatz relativ zum Admin-Verzeichnis liegt, eventuell also absoluten Pfad angeben (z.B. /home/www/site10/web/nucleus/)');
define('_ERROR_DELDEFBLOG',			'Standard-Blog kann nicht gel&ouml;scht werden');
define('_ERROR_DELETEMEMBER',		'Dieses Mitglied kann nicht gel&ouml;scht werden. Vermutlich ist es als Autor gef&uuml;hrt');
define('_ERROR_BADTEMPLATENAME',	'Ung&uuml;ltiger Template-Name, nur a-z und 0-9 verwenden, ohne Leerzeichen');
define('_ERROR_DUPTEMPLATENAME',	'Ein Template mit diesem Namen ist bereits vorhanden');
define('_ERROR_BADSKINNAME',		'Ung&uuml;ltiger Name f&uuml;r Skin (nur a-z, 0-9 erlaubt, keine Leerzeichen)');
define('_ERROR_DUPSKINNAME',		'Ein Skin mit diesem Namen ist bereits vorhanden');
define('_ERROR_DEFAULTSKIN',		'Es muss immer eine Skin mit dem Namen "default" geben');
define('_ERROR_SKINDEFDELETE',		'Der Standard-Skin werden f&uuml;r ein Blog kann nicht gel&ouml;scht.  ');
define('_ERROR_DISALLOWED',			'Sie sind zu dieser Aktion nicht berechtigt');
define('_ERROR_DELETEBAN',			'Fehler beim l&ouml;schen des IP-Ban (existiert nicht)');
define('_ERROR_ADDBAN',				'Fehler beim hinzuf&uuml;gen des IP-Ban. M&ouml;glicherweise nicht in allen Blogs korrekt hinzugef&uuml;gt.');
define('_ERROR_BADACTION',			'Diese Aktion ist nicht m&ouml;glich');
define('_ERROR_MEMBERMAILDISABLED',	'E-Mails von Mitglied zu Mitglied sind gesperrt');
define('_ERROR_MEMBERCREATEDISABLED','Mitgliedereintrag ist gesperrt');
define('_ERROR_INCORRECTEMAIL',		'Falsche Mail-Adresse');
define('_ERROR_VOTEDBEFORE',		'Sie haben zu diesem Artikel schon abgestimmt');
define('_ERROR_BANNED1',			'Aktion nicht durchf&uuml;hrbar, weil Sie (IP ');
define('_ERROR_BANNED2',			') hierf&uuml;r gesperrt sind. Ihre Nachricht: \'');
define('_ERROR_BANNED3',			'\'');
define('_ERROR_LOGINNEEDED',		'F&uuml;r diese Aktion m&uuml;ssen Sie angemeldet sein');
define('_ERROR_CONNECT',			'Verbindungsfehler');
define('_ERROR_FILE_TOO_BIG',		'Datei ist zu gross!');
define('_ERROR_BADFILETYPE',		'Dieser Dateityp ist nicht gestattet');
define('_ERROR_BADREQUEST',			'Upload fehlgeschlagen');
define('_ERROR_DISALLOWEDUPLOAD',	'Sie sind kein Teammitglied. Deshalb d&uuml;rfen Sie keine Dateien hochladen');
define('_ERROR_BADPERMISSIONS',		'Zugriffsrechte f&uuml;r Datei oder Verzeichnis falsch gesetzt');
define('_ERROR_UPLOADMOVEP',		'Datei konnte nicht verschoben werden');
define('_ERROR_UPLOADCOPY',			'Datei konnte nicht kopiert werden');
define('_ERROR_UPLOADDUPLICATE',	'Datei mit diesem Namen bereits vorhanden. Bitte vor dem Upload umbenennen.');
define('_ERROR_LOGINDISALLOWED',	'Sie sind f&uuml;r den Administrationsbereich nicht freigeschaltet. Sie k&ouml;nnen sich als Benutzer anmelden.');
define('_ERROR_DBCONNECT',			'Keine Verbindung zum mySQL-Server');
define('_ERROR_DBSELECT',			'Nucleus-Datenbank nicht gefunden');

// some warnings (used for mediadir setting)
define('_WARNING_NOTADIR',			'Achtung: Dieser Wert ist kein Verzeichnis!');
define('_WARNING_NOTREADABLE',		'Achtung: Dieser Wert ist ein nicht-lesbares Verzeichnis!');
define('_WARNING_NOTWRITABLE',		'Achtung: Dieser Wert ist ein nicht beschreibbares Verzeichnis!');

// media and upload
define('_MEDIA_UPLOADLINK',			'Neue Datei hochladen');
define('_MEDIA_MODIFIED',			'Datum'); // war "ge�ndert" 
define('_MEDIA_FILENAME',			'Dateiname');
define('_MEDIA_DIMENSIONS',			'Gr&ouml;sse');
define('_MEDIA_INLINE',				'Inline (im Text eingef&uuml;gt)');
define('_MEDIA_POPUP',				'Als Popup (in neuem Fenster)');
define('_UPLOAD_TITLE',				'Datei ausw&auml;hlen');
define('_UPLOAD_MSG',				'<br />1. Hochzuladende Datei eintragen ("Durchsuchen..."). <br />2. Klick auf "Hochladen".');
define('_UPLOAD_BUTTON',			'Hochladen');

// some status messages
define('_MSG_ACCOUNTCREATED',		'Account erstellt, Passwort wird per E-Mail zugestellt');
define('_MSG_PASSWORDSENT',			'Passwort wurde per E-Mail zugestellt.');
define('_MSG_LOGINAGAIN',			'Sie m&uuml;ssen sich neu anmelden nach der &Auml;nderung Ihrer Benutzerdaten');
define('_MSG_SETTINGSCHANGED',		'Einstellungen ge&auml;ndert');
define('_MSG_ADMINCHANGED',			'Administrator ge&auml;ndert');
define('_MSG_NEWBLOG',				'Neues Blog angelegt');
define('_MSG_ACTIONLOGCLEARED',		'Aktions-Verzeichnis gel&ouml;scht');

// actionlog in admin area
define('_ACTIONLOG_DISALLOWED',		'Verbotene Aktion: ');
define('_ACTIONLOG_PWDREMINDERSENT','Neues Passwort geschickt an ');
define('_ACTIONLOG_TITLE',			'Action Log');
define('_ACTIONLOG_CLEAR_TITLE',	'Action Log l&ouml;schen');
define('_ACTIONLOG_CLEAR_TEXT',		'Action Log jetzt l&ouml;schen');

// team management
define('_TEAM_TITLE',				'Team verwalten f&uuml;r Blog ');
define('_TEAM_CURRENT',				'Derzeitiges Team');
define('_TEAM_ADDNEW',				'Benutzer zum Team hinzuf&uuml;gen');
define('_TEAM_CHOOSEMEMBER',		'Benutzer ausw&auml;hlen');
define('_TEAM_ADMIN',				'Administratorrechte? ');
define('_TEAM_ADD',					'Zum Team hinzuf&uuml;gen');
define('_TEAM_ADD_BTN',				'Zum Team hinzuf&uuml;gen');

// blogsettings
define('_EBLOG_TITLE',				'Einstellungen f�r Blog');
define('_EBLOG_TEAM_TITLE',			'Team verwalten');
define('_EBLOG_TEAM_TEXT',			'Das Team f&uuml;r diesen Blog verwalten');
define('_EBLOG_SETTINGS_TITLE',		'Einstellungen f&uuml;r Blog');
define('_EBLOG_NAME',				'Name des Blogs');
define('_EBLOG_SHORTNAME',			'Kurzname des Blogs');
define('_EBLOG_SHORTNAME_EXTRA',	'<br />(nur a-z und keine Leerzeichen)');
define('_EBLOG_DESC',				'Beschreibung');
define('_EBLOG_URL',				'URL');
define('_EBLOG_DEFSKIN',			'Standard-Skin');
define('_EBLOG_LINEBREAKS',			'Zeilenumbr&uuml;che beim Artikel schreiben automatisch konvertieren?');
define('_EBLOG_DISABLECOMMENTS',	'Kommentare erlauben?<br /><small>(Wenn nicht erlaubt, sind _keine_ Kommentare m&ouml;glich.)</small>');
define('_EBLOG_ANONYMOUS',			'Kommentare auch Nicht-Mitgliedern gestatten?');
define('_EBLOG_NOTIFY',				'Benachrichtigungsaddresse(n) (verwenden Sie ; als Trennzeichen)');
define('_EBLOG_PING',				'Weblogs.com bei &Auml;nderungen anpingen?');
define('_EBLOG_MAXCOMMENTS',		'Maximale Kommentarzahl');
define('_EBLOG_UPDATE',				'Update-Datei');
define('_EBLOG_OFFSET',				'Zeitverschiebung');
define('_EBLOG_STIME',				'Aktuelle Serverzeit ist');
define('_EBLOG_BTIME',				'Aktuelle Systemzeit ist');
define('_EBLOG_CHANGE',				'&Auml;ndern');
define('_EBLOG_CHANGE_BTN',			'&Auml;nderungen speichern');
define('_EBLOG_ADMIN',				'Administrator');
define('_EBLOG_ADMIN_MSG',			'Sie besitzen Administratorrechte');
define('_EBLOG_CREATE_TITLE',		'Neues Blog erstellen');
define('_EBLOG_CREATE_TEXT',		'Formular ausf&uuml;llen, um ein neues Blog zu erstellen. <br /><br /> <b>Achtung:</b> Nur die notwendigsten Einstellungen sind hier aufgef&uuml;hrt. Weitere Einstellungen lassen sich anschliessend &uuml;ber die Blog-Einstellungen vornehmen.');
define('_EBLOG_CREATE',				'Erstellen!');
define('_EBLOG_CREATE_BTN',			'Blog erstellen');

// templates
define('_TEMPLATE_TITLE',			'Templates bearbeiten');
define('_TEMPLATE_AVAILABLE_TITLE',	'Verf&uuml;gbare Templates');
define('_TEMPLATE_NEW_TITLE',		'Neues Template');
define('_TEMPLATE_NAME',			'Template-Name');
define('_TEMPLATE_DESC',			'Template-Beschreibung');
define('_TEMPLATE_CREATE',			'Template erstellen');
define('_TEMPLATE_CREATE_BTN',		'Template erstellen');
define('_TEMPLATE_EDIT_TITLE',		'Template bearbeiten');
define('_TEMPLATE_BACK',			'Zur Template-&Uuml;bersicht');
define('_TEMPLATE_EDIT_MSG',		'Nicht alle Einzelteile des Templates werden gebraucht, bitte nicht ben&ouml;tigte einfach leer lassen.');
define('_TEMPLATE_SETTINGS',		'Template-Einstellungen');
define('_TEMPLATE_ITEMS',			'Artikel');
define('_TEMPLATE_ITEMHEADER',		'Artikel&uuml;berschrift');
define('_TEMPLATE_ITEMBODY',		'Artikelinhalt');
define('_TEMPLATE_ITEMFOOTER',		'Artikelfooter');
define('_TEMPLATE_MORELINK',		'Link zu ganzem Artikel');
define('_TEMPLATE_NEW',				'Eigenschaften des neuen Artikels');
define('_TEMPLATE_COMMENTS_ANY',	'Kommentare (falls vorhanden)');
define('_TEMPLATE_CHEADER',			'Kommentar&uuml;berschrift');
define('_TEMPLATE_CBODY',			'Kommentarinhalt');
define('_TEMPLATE_CFOOTER',			'Kommentarfooter');
define('_TEMPLATE_CONE',			'Ein Kommentar');
define('_TEMPLATE_CMANY',			'Zwei (oder mehr) Kommentare');
define('_TEMPLATE_CMORE',			'Weitere Kommentare lesen');
define('_TEMPLATE_CMEXTRA',			'Mitglieder Extra');
define('_TEMPLATE_COMMENTS_NONE',	'Kommentare (falls keine vorhanden)');
define('_TEMPLATE_CNONE',			'Keine Kommentare');
define('_TEMPLATE_COMMENTS_TOOMUCH','Kommentare (falls vorhanden, aber zuviele, um sie hier darzustellen)');
define('_TEMPLATE_CTOOMUCH',		'Zu viele Kommentare');
define('_TEMPLATE_ARCHIVELIST',		'Archivliste');
define('_TEMPLATE_AHEADER',			'Archivlisten&uuml;berschriften');
define('_TEMPLATE_AITEM',			'Archivliste Artikel');
define('_TEMPLATE_AFOOTER',			'Archivliste Fuss');
define('_TEMPLATE_DATETIME',		'Datum und Uhrzeit');
define('_TEMPLATE_DHEADER',			'Datumkopf');
define('_TEMPLATE_DFOOTER',			'Datumfooter');
define('_TEMPLATE_DFORMAT',			'Datumformat');
define('_TEMPLATE_TFORMAT',			'Uhrzeitformat');
define('_TEMPLATE_LOCALE',			'Lokal');
define('_TEMPLATE_IMAGE',			'Bild Popups');
define('_TEMPLATE_PCODE',			'Popup Link Code');
define('_TEMPLATE_ICODE',			'Eingebundenes Bild Code');
define('_TEMPLATE_MCODE',			'Media Link Code');
define('_TEMPLATE_SEARCH',			'Suchen');
define('_TEMPLATE_SHIGHLIGHT',		'Hervorheben');
define('_TEMPLATE_SNOTFOUND',		'Suche brachte keine Ergebnisse');
define('_TEMPLATE_UPDATE',			'Neu speichern');
define('_TEMPLATE_UPDATE_BTN',		'Template neu speichern');
define('_TEMPLATE_RESET_BTN',		'Zur&uuml;cksetzen');

// skins
define('_SKIN_EDIT_TITLE',			'Skins bearbeiten');
define('_SKIN_AVAILABLE_TITLE',		'Verf&uuml;gbare Skins');
define('_SKIN_NEW_TITLE',			'Neuer Skin');
define('_SKIN_NAME',				'Name des Skins');
define('_SKIN_DESC',				'Beschreibung');
define('_SKIN_CREATE',				'Erstellen');
define('_SKIN_CREATE_BTN',			'Skin erstellen');
define('_SKIN_EDITONE_TITLE',		'Skin bearbeiten');
define('_SKIN_BACK',				'Zur&uuml;ck zum &Uuml;berblick Skin');
define('_SKIN_PARTS_TITLE',			'SkinEinzelteile');
define('_SKIN_PARTS_MSG',			'Nicht alle Einzelteile werden f&uuml;r Skins ben&ouml;tigt. Nicht ben&ouml;tigte Einzelteile leer lassen. Skin zum Bearbeiten ausw&auml;hlen:');
define('_SKIN_PART_MAIN',			'&Uuml;bersichtsseite');
define('_SKIN_PART_ITEM',			'Detailseite');
define('_SKIN_PART_ALIST',			'Archivliste');
define('_SKIN_PART_ARCHIVE',		'Archiv');
define('_SKIN_PART_SEARCH',			'Suchen');
define('_SKIN_PART_ERROR',			'Fehler');
define('_SKIN_PART_MEMBER',			'Benutzerinformationen');
define('_SKIN_PART_POPUP',			'Popup-Bilder');
define('_SKIN_GENSETTINGS_TITLE',	'Globale Einstellungen');
define('_SKIN_CHANGE',				'&Auml;ndern');
define('_SKIN_CHANGE_BTN',			'Diese Einstellungen speichern');
define('_SKIN_UPDATE_BTN',			'&Auml;nderungen speichern');
define('_SKIN_RESET_BTN',			'Zur&uuml;cksetzen');
define('_SKIN_EDITPART_TITLE',		'Skin bearbeiten');
define('_SKIN_GOBACK',				'Zur&uuml;ck zu Skins bearbeiten');
define('_SKIN_ALLOWEDVARS',			'G&uuml;ltige Variablen (hier klicken):');

// global settings
define('_SETTINGS_TITLE',			'Globale Einstellungen');
define('_SETTINGS_SUB_GENERAL',		'Globale Einstellungen');
define('_SETTINGS_DEFBLOG',			'StandardBlog');
define('_SETTINGS_ADMINMAIL',		'Administrator E-Mail');
define('_SETTINGS_SITENAME',		'Name der Site');
define('_SETTINGS_SITEURL',			'URL der Site (endet mit /)');
define('_SETTINGS_ADMINURL',		'URL des Administratorbereichs (endet mit /)');
define('_SETTINGS_DIRS',			'Nucleusverzeichnisse');
define('_SETTINGS_MEDIADIR',		'Medienverzeichnis');
define('_SETTINGS_SEECONFIGPHP',	'(config.php beachten)');
define('_SETTINGS_MEDIAURL',		'Medien-URL (endet mit /)');
define('_SETTINGS_ALLOWUPLOAD',		'Datei-Upload gestatten?');
define('_SETTINGS_ALLOWUPLOADTYPES','G&uuml;ltige Dateitypen f&uuml;r den Upload');
define('_SETTINGS_CHANGELOGIN',		'Benutzer d&uuml;rfen Ihren Name/Passwort &auml;ndern');
define('_SETTINGS_COOKIELIFE',		'Wie lange gilt der Anmeldecookie?');
define('_SETTINGS_COOKIESESSION',	'F&uuml;r eine Session');
define('_SETTINGS_COOKIEMONTH',		'F&uuml;r einen Monat');
define('_SETTINGS_LASTVISIT',		'Cookie f�r letzten Besuch (last visit) aktivieren');
define('_SETTINGS_ALLOWCREATE',		'Besuchern die Einrichtung eines Benutzer-Accounts gestatten');
define('_SETTINGS_NEWLOGIN',		'Anmelden mit selbst erstelltem Account gestatten');
define('_SETTINGS_NEWLOGIN2',		'(gilt nur f&uuml;r neue Benutzer-Accounts)');
define('_SETTINGS_MEMBERMSGS',		'Mitglied-zu-Mitglied-Kommunikation gestatten');
define('_SETTINGS_LANGUAGE',		'Standard Sprachmodul');
define('_SETTINGS_DISABLESITE',		'Site offline schalten');
define('_SETTINGS_DBLOGIN',			'mySQL Anmeldung &amp; Datenbank');
define('_SETTINGS_UPDATE',			'Einstellungen aktualisieren');
define('_SETTINGS_UPDATE_BTN',		'Einstellungen speichern');
define('_SETTINGS_DISABLEJS',		'JavaScript Werkzeuge ausschalten');

// bans
define('_BAN_TITLE',				'Zugriffsperren f&uuml;r');
define('_BAN_NONE',					'Keine Zugriffsperren f&uuml;r dieses Blog');
define('_BAN_NEW_TITLE',			'Neue Zugriffsperre erstellen');
define('_BAN_NEW_TEXT',				'Neue Zugriffsperre hinzuf&uuml;gen');
define('_BAN_REMOVE_TITLE',			'Zugriffsperre l&ouml;schen');
define('_BAN_IPRANGE',				'IP Bereich');
define('_BAN_BLOGS',				'Welche Blogs?');
define('_BAN_DELETE_TITLE',			'Zugriffsperre l&ouml;schen');
define('_BAN_ALLBLOGS',				'Alle Blogs in Ihrem Admin-Bereich.');
define('_BAN_REMOVED_TITLE',		'Zugriffsperre gel&ouml;scht');
define('_BAN_REMOVED_TEXT',			'Zugriffsperre in folgenden Blogs gel&ouml;scht:');
define('_BAN_ADD_TITLE',			'Zugriffsperre hinzuf&uuml;gen');
define('_BAN_IPRANGE_TEXT',			'Zu sperrenden IP-Bereich ausw&auml;hlen. Je weniger Nummern, desto mehr Benutzer werden blockiert.');
define('_BAN_BLOGS_TEXT',			'Sie k&ouml;nnen wahlweise nur einen Blog sperren, oder alle Blogs in Ihrem Admin-Bereich. Bitte ausw&auml;hlen.');
define('_BAN_REASON_TITLE',			'Grund');
define('_BAN_REASON_TEXT',			'Sie k&ouml;nnen die Zugriffsperre begr&uuml;nden, dies wird dem Benutzer angezeigt. Maximal 256 Zeichen.');
define('_BAN_ADD_BTN',				'Zugriffsperre speichern');

// LOGIN screen
define('_LOGIN_MESSAGE',			'Nachricht');
define('_LOGIN_NAME',				  'Benutzername');
define('_LOGIN_PASSWORD',			'Passwort');
define('_LOGIN_SHARED',				'Rechner mit mehreren Benutzern (kein Anmeldecookie setzen)');

// membermanagement
define('_MEMBERS_TITLE',			'Benutzerverwaltung');
define('_MEMBERS_CURRENT',			'Aktuelle Benutzer');
define('_MEMBERS_NEW',				'Neuen Benutzer erstellen');
define('_MEMBERS_DISPLAY',			'Benutzername');
define('_MEMBERS_DISPLAY_INFO',		'(Mit diesem Namen melden Sie sich an)');
define('_MEMBERS_REALNAME',			'Vollst�ndiger Name');
define('_MEMBERS_PWD',				'Passwort');
define('_MEMBERS_REPPWD',			'Passwort wiederholen');
define('_MEMBERS_EMAIL',			'E-Mail');
define('_MEMBERS_EMAIL_EDIT',		'(Beim &Auml;ndern der E-Mail-Adresse erhalten Sie umgehend ein neues Passwort per Mail)');
define('_MEMBERS_URL',				'Homepage-Adresse (URL)');
define('_MEMBERS_SUPERADMIN',		'Administratorrechte');
define('_MEMBERS_CANLOGIN',			'Darf sich in den Admin-Bereich einloggen:');
define('_MEMBERS_NOTES',			'Bemerkungen');
define('_MEMBERS_NEW_BTN',			'Benutzer hinzuf&uuml;gen');
define('_MEMBERS_EDIT',				'&Auml;nderung der Benutzereinstellungen');
define('_MEMBERS_EDIT_BTN',			'Benutzereinstellungen speichern');
define('_MEMBERS_BACKTOOVERVIEW',	'Zur&uuml;ck zur Benutzerverwaltung');

// List of blogs (TT = tooltip)
define('_BLOGLIST_TT_VISIT',		'Webseite ausw&auml;hlen'); // wo taucht das auf? ***
define('_BLOGLIST_ADD',				'Artikel schreiben');
define('_BLOGLIST_TT_ADD',			'Neuen Artikel f�r dieses Blog schreiben');
define('_BLOGLIST_EDIT',			'Artikel &auml;ndern');
define('_BLOGLIST_TT_EDIT',			'Einen bereits vorhandenen Artikel f�r dieses Blog bearbeiten oder l&ouml;schen');
define('_BLOGLIST_BMLET',			'Bookmarklets');
define('_BLOGLIST_TT_BMLET',		'Verwaltet die Bookmarklets. ');
define('_BLOGLIST_SETTINGS',		'Blog-Einstellungen');
define('_BLOGLIST_TT_SETTINGS',		'Einstellungen &auml;ndern oder Team verwalten');
define('_BLOGLIST_BANS',			'Zugriffsperren');
define('_BLOGLIST_TT_BANS',			'Zugriffsperren verwalten');
define('_BLOGLIST_DELETE',			'Blog l&ouml;schen');
define('_BLOGLIST_TT_DELETE',		'Dieses Blog l&ouml;schen!');

// OVERVIEW screen
define('_OVERVIEW_YRBLOGS',			'Ihre Blogs');
define('_OVERVIEW_YRDRAFTS',		'Ihre Entw&uuml;rfe');
define('_OVERVIEW_YRSETTINGS',		'Ihre Einstellungen');
define('_OVERVIEW_GSETTINGS',		'Allgemeine Einstellungen');
define('_OVERVIEW_NOBLOGS',			'Sie sind nicht als Benutzer aufgef&uuml;hrt');
define('_OVERVIEW_NODRAFTS',		'Keine Entw&uuml;rfe');
define('_OVERVIEW_EDITSETTINGS',	'Ihre Einstellungen bearbeiten...');
define('_OVERVIEW_BROWSEITEMS',		'Ihre Artikel auflisten...');
define('_OVERVIEW_BROWSECOMM',		'Ihre Kommentare auflisten...');
define('_OVERVIEW_VIEWLOG',			'Action Log anschauen...');
define('_OVERVIEW_MEMBERS',			'Benutzer verwalten...');
define('_OVERVIEW_NEWLOG',			'Neues Blog erstellen...');
define('_OVERVIEW_SETTINGS',		'Globale Einstellungen bearbeiten...');
define('_OVERVIEW_TEMPLATES',		'Templates bearbeiten...');
define('_OVERVIEW_SKINS',			'Skins bearbeiten...');
define('_OVERVIEW_BACKUP',			'Sichern/Wiederherstellen...');

// ITEMLIST
define('_ITEMLIST_BLOG',			'Artikel f&uuml;r Blog'); 
define('_ITEMLIST_YOUR',			'Ihre Artikel');

// Comments
define('_COMMENTS',					'Kommentare');
define('_NOCOMMENTS',				'Keine Kommentare zu diesem Artikel');
define('_COMMENTS_YOUR',			'Ihre Kommentare');
define('_NOCOMMENTS_YOUR',			'Sie haben keine Kommentare verfasst');

// LISTS (general)
define('_LISTS_NOMORE',				'Keine Ergebnisse (mehr)');
define('_LISTS_PREV',				'Zur&uuml;ck');
define('_LISTS_NEXT',				'Weiter');
define('_LISTS_SEARCH',				'Suchen');
define('_LISTS_CHANGE',				'&Auml;ndern');
define('_LISTS_PERPAGE',			'Artikel/Seite');
define('_LISTS_ACTIONS',			'Was tun?'); //war Aktionen 
define('_LISTS_DELETE',				'L&ouml;schen');
define('_LISTS_EDIT',				'Bearbeiten');
define('_LISTS_MOVE',				'Verschieben');
define('_LISTS_CLONE',				'Kopieren');
define('_LISTS_TITLE',				'Artikel');
define('_LISTS_BLOG',				'Blog');
define('_LISTS_NAME',				'Name');
define('_LISTS_DESC',				'Beschreibung');
define('_LISTS_TIME',				'Uhrzeit');
define('_LISTS_COMMENTS',			'Kommentare');


// member list 
define('_LIST_MEMBER_NAME',			'Benutzername');
define('_LIST_MEMBER_RNAME',		'Vollst�ndiger Name');
define('_LIST_MEMBER_ADMIN',		'Super-Administrator? ');
define('_LIST_MEMBER_LOGIN',		'Kann sich anmelden? ');
define('_LIST_MEMBER_URL',			'Homepage');

// banlist
define('_LIST_BAN_IPRANGE',			'IP Bereich');
define('_LIST_BAN_REASON',			'Grund');

// actionlist
define('_LIST_ACTION_MSG',			'Nachricht');

// commentlist
define('_LIST_COMMENT_BANIP',		'IP sperren');
define('_LIST_COMMENT_WHO',			'Autor');
define('_LIST_COMMENT',				'Kommentar');
define('_LIST_COMMENT_HOST',		'Host');

// itemlist
define('_LIST_ITEM_INFO',			'Info');
define('_LIST_ITEM_CONTENT',		'&Uuml;berschrift und Inhalt');


// teamlist
define('_LIST_TEAM_ADMIN',			'Administrator ');
define('_LIST_TEAM_CHADMIN',		'Administratorrechte &auml;ndern');

// edit comments
define('_EDITC_TITLE',				'Kommentare bearbeiten');
define('_EDITC_WHO',				'Autor');
define('_EDITC_HOST',				'Von wo?');
define('_EDITC_WHEN',				'Wann?');
define('_EDITC_TEXT',				'Text');
define('_EDITC_EDIT',				'Kommentar bearbeiten');
define('_EDITC_MEMBER',				'Mitglied');
define('_EDITC_NONMEMBER',			'kein Mitglied');

// move item
define('_MOVE_TITLE',				'In welchen Blog verschieben?');
define('_MOVE_BTN',					'Artikel verschieben');


// new additions for Nucleus 1.1

define('_SETTINGS_COOKIES_TITLE',   'Cookie Einstellungen');
define('_SETTINGS_COOKIEPATH',      'Cookie Pfad (nur f&uuml;r Fortgeschrittene)');
define('_SETTINGS_COOKIEDOMAIN',	'Cookie Domain (nur f&uuml;r Fortgeschrittene)'); 
define('_SETTINGS_COOKIESECURE',	'Sichere Cookies (nur f&uuml;r Fortgeschrittene)');
define('_SKIN_UPDATED',				'Skin wurde gespeichert'); 
define('_TEMPLATE_UPDATED',			'Template wurde gespeichert');
define('_CHARSET',					'iso-8859-1');
define('_ERROR_NOSUCHLANGUAGE',     'Diese Sprache wird nicht unterst&uuml;tzt');
define('_ERROR_NOSUCHCATEGORY',     'Diese Kategorie ist nicht vorhanden');
define('_ERROR_DELETELASTCATEGORY', 'Es muss mindestens eine Kategorie vorhanden sein'); 
define('_ERROR_DELETEDEFCATEGORY',	'Die Standard-Kategorie kann nicht gel&ouml;scht werden');
define('_ERROR_BADCATEGORYNAME',    'Ung&uuml;ltiger Kategorie-Name');
define('_ERROR_DUPCATEGORYNAME',    'Dieser Kategoriename ist bereits vergeben');
define('_CONFIRMTXT_CATEGORY',      'Sie l&ouml;schen gerade die Kategorie');
define('_DELETED_CATEGORY',         'Kategorie gel&ouml;scht');
define('_MEMBERS_DEFLANG',			'Sprache');
define('_MEMBERS_USESITELANG',      '- benutze globale Einstellungen -'); // war "Siteeinstellungen" 
define('_EBLOG_DEFCAT',             'Standard-Kategorie');
define('_EBLOG_CAT_TITLE',          'Kategorien');
define('_EBLOG_CAT_NAME',           'Name der Kategorie');
define('_EBLOG_CAT_DESC',			'Beschreibung der Kategorie'); 
define('_EBLOG_CAT_CREATE',			'Neue Kategorie erstellen'); 
define('_EBLOG_CAT_UPDATE',			'Kategorie speichern'); 
define('_EBLOG_CAT_UPDATE_BTN',		'Kategorie speichern');
define('_EBLOG_NOTIFY_ON',          'Benachrichtigung bei folgendem Ereignis:');
define('_EBLOG_NOTIFY_COMMENT',     'Neuer Kommentar');
define('_EBLOG_NOTIFY_KARMA',       'Neue Bewertung (Karma)');
define('_EBLOG_NOTIFY_ITEM',        'Neuer Artikel');
define('_ADD_CATEGORY',             'Kategorie');
define('_ADD_DRAFTNFUTURE',         'Alte &amp; k&uuml;nftige Artikel');
define('_SETTINGS_MEDIA',           'Media/Upload Einstellungen'); 
define('_SETTINGS_MEDIAPREFIX',     'Stelle hochgeladenen Dateien ein Datum voran');
define('_SETTINGS_MEMBERS',         'Mitglieder-Einstellungen');
define('_TEMPLATE_CATEGORYLIST',    'Kategorie-Listen');
define('_TEMPLATE_CATHEADER',       'Kategorie-Listen Header');
define('_TEMPLATE_CATITEM',         'Kategorie-Listen Artikel');
define('_TEMPLATE_CATFOOTER',       'Kategorie-Listen Footer');
define('_LOGIN_FORGOT',             'Passwort vergessen?');
define('_LISTS_TYPE',               'Typ');
define('_SKIN_TYPE',                'Skin-Typ');
define('_YOURSITE',                 'Website');

// START introduced after v1.5 START

// Here starts the new translation

// posting to the past/edit timestamps
define('_EBLOG_ALLOWPASTPOSTING',	'Ver�ffentlichung in der Vergangenheit erlauben?');
define('_ADD_CHANGEDATE',			'Datum &auml;ndern');
define('_BMLET_CHANGEDATE',			'Datum &auml;ndern');

// skin import/export
define('_OVERVIEW_SKINIMPORT',		'Skin importieren/exportieren...');

// skin settings
define('_PARSER_INCMODE_NORMAL',	'Normal');
define('_PARSER_INCMODE_SKINDIR',	'Skinverzeichnis benutzen ');
define('_SKIN_INCLUDE_MODE',		'Include Modus');
define('_SKIN_INCLUDE_PREFIX',		'Include Pr�fix');

// global settings
define('_SETTINGS_BASESKIN',		'Standard Skin');
define('_SETTINGS_SKINSURL',		'Skin URL');
define('_SETTINGS_ACTIONSURL',		'URL zur action.php');

// category moves (batch)
define('_ERROR_MOVEDEFCATEGORY',	'Standardkategorie kann nicht verschoben werden');
define('_ERROR_MOVETOSELF',			'Kategorie kann nicht verschoben werden (Ziel und Ursprung sind identisch)');
define('_MOVECAT_TITLE',			'Zielblog ausw�hlen');
define('_MOVECAT_BTN',				'Kategorie verschieben');

// URLMode setting
define('_SETTINGS_URLMODE',			'URL Modus');
define('_SETTINGS_URLMODE_NORMAL',	'Normal');
define('_SETTINGS_URLMODE_PATHINFO','Fancy URLs');

// Batch operations
define('_BATCH_NOSELECTION',		'Es ist nichts ausgew&auml;hlt');
define('_BATCH_ITEMS',				'Batchaktionen f&uuml;r Artikel');
define('_BATCH_CATEGORIES',			'Batchaktionen f&uuml;r Kategorien');
define('_BATCH_MEMBERS',			'Batchoperationen f&uuml;r Mitglieder');
define('_BATCH_TEAM',				'Batchoperationen f&uuml;r Team');
define('_BATCH_COMMENTS',			'Batchoperationen f&uuml;r Kommentare');
define('_BATCH_UNKNOWN',			'Unbekannte Batchoperation: ');
define('_BATCH_EXECUTING',			'Wird ausgef&uuml;hrt:');
define('_BATCH_ONCATEGORY',			'in Kategorie');
define('_BATCH_ONITEM',				'an Artikel');
define('_BATCH_ONCOMMENT',			'an Kommentar');
define('_BATCH_ONMEMBER',			'an Mitglied');
define('_BATCH_ONTEAM',				'an Teammitglied');
define('_BATCH_SUCCESS',			'Erfolgreich beendet!');
define('_BATCH_DONE',				'Erledigt!');
define('_BATCH_DELETE_CONFIRM',		'Batchoperation l&ouml;schen best&auml;tigen');
define('_BATCH_DELETE_CONFIRM_BTN',	'L&ouml;schen best&auml;tigen');
define('_BATCH_SELECTALL',			'Alle Eintr&auml;ge markieren');
define('_BATCH_DESELECTALL',		'Alle Markierungen entfernen');

// batch operations: options in dropdowns
define('_BATCH_ITEM_DELETE',		'L&ouml;schen');
define('_BATCH_ITEM_MOVE',			'Verschieben');
define('_BATCH_MEMBER_DELETE',		'L&ouml;schen');
define('_BATCH_MEMBER_SET_ADM',		'Administratorrechte geben');
define('_BATCH_MEMBER_UNSET_ADM',	'Administratorrechte nehmen');
define('_BATCH_TEAM_DELETE',		'Aus Team l&ouml;schen');
define('_BATCH_TEAM_SET_ADM',		'Administratorrechte geben');
define('_BATCH_TEAM_UNSET_ADM',		'Administratorrechte nehmen');
define('_BATCH_CAT_DELETE',			'L&ouml;schen');
define('_BATCH_CAT_MOVE',			'In anderes Blog verschieben');
define('_BATCH_COMMENT_DELETE',		'L&ouml;schen');

// itemlist: Add new item...
define('_ITEMLIST_ADDNEW',			'Artikel schreiben'); // war "Hinzuf�gen" 
define('_ADD_PLUGIN_EXTRAS',		'Optionen von Plugins'); // war "Extra Plugin Optionen" 

// errors
define('_ERROR_CATCREATEFAIL',		'Neue Kategorie konnte nicht angelegt werden');
define('_ERROR_NUCLEUSVERSIONREQ',	'Das Plugin braucht eine neuere Nucleus-Version: '); //"Nucleus-" erg�nzt 

// backlinks
define('_BACK_TO_BLOGSETTINGS',		'Zur&uuml;ck zu den Blog-Einstellungen');

// skin import export
define('_SKINIE_TITLE_IMPORT',		'Importieren');
define('_SKINIE_TITLE_EXPORT',		'Exportieren');
define('_SKINIE_BTN_IMPORT',		'Importieren');
define('_SKINIE_BTN_EXPORT',		'Exportieren der ausgew&auml;hlten Skins/Templates');
define('_SKINIE_LOCAL',				'Importieren von lokaler Datei:');
define('_SKINIE_NOCANDIDATES',		'Keine Dateien zum Importieren gefunden');
define('_SKINIE_FROMURL',			'Importieren von URL:');
define('_SKINIE_EXPORT_INTRO',		'Unten ausw&auml;hlen, was exportiert werden soll');
define('_SKINIE_EXPORT_SKINS',		'Skins');
define('_SKINIE_EXPORT_TEMPLATES',	'Templates');
define('_SKINIE_EXPORT_EXTRA',		'Extra Info');
define('_SKINIE_CONFIRM_OVERWRITE',	'Soll der bestehende Skin (siehe unten) &uuml;berschrieben werden?');
define('_SKINIE_CONFIRM_IMPORT',	'Ja, importieren');
define('_SKINIE_CONFIRM_TITLE',		'Skins und Templates importieren');
define('_SKINIE_INFO_SKINS',		'Skins in der Datei:');
define('_SKINIE_INFO_TEMPLATES',	'Templates in der Datei:');
define('_SKINIE_INFO_GENERAL',		'Info:');
define('_SKINIE_INFO_SKINCLASH',	'Skinkollisionen:');
define('_SKINIE_INFO_TEMPLCLASH',	'Templatekollisionen:');
define('_SKINIE_INFO_IMPORTEDSKINS','Importierte Skins:');
define('_SKINIE_INFO_IMPORTEDTEMPLS','Importierte Templates:');
define('_SKINIE_DONE',				'Importiert');

define('_AND',						'und');
define('_OR',						'oder');

// empty fields on template edit
define('_EDITTEMPLATE_EMPTY',		'leeres Feld (zum Bearbeiten anklicken)');

// skin overview list
define('_LIST_SKINS_INCMODE',		'IncludeMode:');
define('_LIST_SKINS_INCPREFIX',		'IncludePr&auml;fix:');
define('_LIST_SKINS_DEFINED',		'Definierte Einzelteile:');

// backup
define('_BACKUPS_TITLE',			'Sichern / Wiederherstellen');
define('_BACKUP_TITLE',				'Sichern');
define('_BACKUP_INTRO',				'Den Button klicken, um eine Sicherungskopie der Datenbank zu erstellen.');
define('_BACKUP_ZIP_YES',			'Komprimierung versuchen');
define('_BACKUP_ZIP_NO',			'Keine Komprimierung versuchen');
define('_BACKUP_BTN',				'Sicherungskopier erstellen');
define('_BACKUP_NOTE',				'<b>Achtung:</b> Nur die Datenbank wird gespeichert. Media-Dateien und Einstellungen in der config.php werden <b>NICHT</b> gespeichert.');
define('_RESTORE_TITLE',			'Wiederherstellen');
define('_RESTORE_NOTE',				'<b>WARNUNG:</b> Wiederherstellen wird alle bestehenden Daten <b>L&Ouml;SCHEN</b>!<br />	<b>Achtung:</b> Die Version von Sicherungskopie und Nucleus muss &uuml;bereinstimmen, ansonsten wird es nicht funktionieren!'); // esetzt "Laufzeitsystem" durch "Nucleus" 
define('_RESTORE_INTRO',			'Sicherungsdatei ausw&auml;hlen, danach startet das Wiederherstellen.');
define('_RESTORE_IMSURE',			'Ja, ich will wiederherstellen!');
define('_RESTORE_BTN',				'Von Datei wiederherstellen');
define('_RESTORE_WARNING',			'(Bitte stellen Sie sicher, dass die Sicherungsdatei aktuell ist!)');
define('_ERROR_BACKUP_NOTSURE',		'Die CheckBox muss aktiviert sein!');
define('_RESTORE_COMPLETE',			'Wiederherstellung komplett!');

// new item notification
define('_NOTIFY_NI_MSG',			'Ein neuer Eintrag wurde verfasst:');
define('_NOTIFY_NI_TITLE',			'Neuer Artikel!');
define('_NOTIFY_KV_MSG',			'Bewertung (Karma) bei Eintrag:');
define('_NOTIFY_KV_TITLE',			'Nucleus - Bewertung (Karma):');
define('_NOTIFY_NC_MSG',			'Kommentar f&uuml;r Artikel:'); // war "bei" 
define('_NOTIFY_NC_TITLE',			'Nucleus - Kommentar:');
define('_NOTIFY_USERID',			'Benutzer ID:');
define('_NOTIFY_USER',				'Benutzer:');
define('_NOTIFY_COMMENT',			'Kommentar:');
define('_NOTIFY_VOTE',				'Bewertung:');
define('_NOTIFY_HOST',				'Host:');
define('_NOTIFY_IP',				'IP-Adresse:'); //war "IP:" 
define('_NOTIFY_MEMBER',			'Mitglied:');
define('_NOTIFY_TITLE',				'&Uuml;berschrift:');
define('_NOTIFY_CONTENTS',			'Inhalt:');

// member mail message
define('_MMAIL_MSG',				'Nucleus: Eine Nachricht von'); // erg�nzt "Nucleus: " 
define('_MMAIL_FROMANON',			'Anonymer Besucher');
define('_MMAIL_FROMNUC',			'Geschrieben von einem Nucleus Blog bei'); 
define('_MMAIL_TITLE',				'Nucleus: Eine Nachricht von'); // erg�nzt "Nucleus: " 
define('_MMAIL_MAIL',				'Nachricht:');

// END introduced after v1.5 END

?>