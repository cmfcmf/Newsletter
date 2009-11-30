<?php
require_once ('modules/Newsletter/pnlang/deu/plugins.php');

define('_NEWSLETTER',				'Newsletter');
define('_NEWSLETTER_START',				'Start');
define('_NEWSLETTER_1MONTH',			'1 Monat');
define('_NEWSLETTER_1YEAR',			'1 Jahr');
define('_NEWSLETTER_2MONTHS',			'2 Monate');
define('_NEWSLETTER_3MONTHS',			'3 Monate');
define('_NEWSLETTER_6MONTHS',			'6 Monate');
define('_NEWSLETTER_ACTION',			'ausf�hren');
define('_NEWSLETTER_ACTION_DELETE',		'l�schen');
define('_NEWSLETTER_ACTION_DETAIL',		'Details');
define('_NEWSLETTER_ACTION_EDIT',		'bearbeiten');
define('_NEWSLETTER_ACTIVE',			'Aktiv');
define('_NEWSLETTER_ADMIN',			'Newsletter Konfiguration');
define('_NEWSLETTER_ADMINKEY',			'Adminkey');
define('_NEWSLETTER_ADMIN_APPROVED',		'Genehmigung');
define('_NEWSLETTER_ALLOW_ANON_REGISTRATION',	'Anonyme Abonnenten erlauben?');
define('_NEWSLETTER_ALLOW_FREQUENCY_CHANGE',	'Intervall�nderungen erlauben?');
define('_NEWSLETTER_ALREADYSUBSCRIBED',		'Sie sind schon auf unseren Newsletter aboniert!');
define('_NEWSLETTER_ALREADYSUBSCRIBED_ADMIN',	'Diese Email Adresse ist schon auf unseren Newsletter aboniert!');
define('_NEWSLETTER_ANON_NOT_ALLOWED',		'Enstuldigung, aber Sie m�ssen Mitglied dieser Seite sein, um unseren Newsletter abonnieren zu k�nnen.');
define('_NEWSLETTER_APPROVAL_REQUIRED',		'* subscriptions subject to approval.');
define('_NEWSLETTER_APPROVED',			'genehmigt');
define('_NEWSLETTER_ARCHIVE_OPTION_REMOVE',	'Das Archiv kann nicht wiederhergestellt werden');
define('_NEWSLETTER_AUTOAPPROVE_DISABLEDMESSAGE','Auto-Genehmigung ist zur Zeit deaktiviert. Sie m�ssen diesen User manuell, in der Abonnentenverwaltung, freischalten!');
define('_NEWSLETTER_AUTO_APPROVE_REGISTRATIONS','Abonnements automatisch genehmigen?');
define('_NEWSLETTER_AVAILABLEPLUGINS',		'verf�gbare Plugins');
define('_NEWSLETTER_BACK',			'zur�ck');
define('_NEWSLETTER_CHANGE_ACTIVE_STATUS',	'Status �ndern');
define('_NEWSLETTER_CHANGE_APPROVED_STATUS', 	'Sind Sie sicher, dass sie den Status des Users �ndern m�chten?');
define('_NEWSLETTER_CHANGE_APPROVED_STATUS_CHANGED','Der Status des Users wurde g�ndert!');
define('_NEWSLETTER_CHANGE_SUBSCRIPTION_OPTIONS','Hier k�nnen Sie Ihr Abonnement konfigurieren');
define('_NEWSLETTER_CHECKEDYES', 		'(angehakt = ja)');
define('_NEWSLETTER_DATABASE',			'Datenbank');
define('_NEWSLETTER_DATE',			'Datum');
define('_NEWSLETTER_DAY_FRIDAY',		'Freitag');
define('_NEWSLETTER_DAY_MONDAY',		'Montag');
define('_NEWSLETTER_DAY_SATURDAY',		'Samstag');
define('_NEWSLETTER_DAY_SUNDAY',		'Sonntag');
define('_NEWSLETTER_DAY_THURSDAY',		'Donnerstag');
define('_NEWSLETTER_DAY_TUESDAY',		'Dienstag');
define('_NEWSLETTER_DAY_WEDNESDAY',		'Mittwoch');
define('_NEWSLETTER_DEFAULT_FREQUENCY',		'Standart Intervall');
define('_NEWSLETTER_DEFAULT_TYPE',		'Standart Newsletter Typ');
define('_NEWSLETTER_DELETEUSER',		'User l�schen');
define('_NEWSLETTER_DISABLE_FOR_PERFORMANCE',	'abhaken um Performance zu gewinnen');
define('_NEWSLETTER_EMAIL',			'Email');
define('_NEWSLETTER_EMAIL_EMPTY',		'Ihre Test-Mail wurde nicht gesendet da sie keine Email Adresse eingegeben haben');
define('_NEWSLETTER_EMAIL_FAILURE',		'Fehler beim versenden der Test-Mail');
define('_NEWSLETTER_EMAIL_STAFF',		'Team');
define('_NEWSLETTER_EMAIL_UNSUBSCRIBE_SUBJECT',	'Abonnement gel�scht');
define('_NEWSLETTER_EMAIL_USER_NOTIFY',		'Vielen Dank f�r Ihre Anmeldung!');
define('_NEWSLETTER_EMAIL_USER_NOTIFY1',	'Hallo');
define('_NEWSLETTER_EMAIL_USER_NOTIFY3',	'Ihr');
define('_NEWSLETTER_EMAIL_USER_NOTIFY4',	'Haben Sie sich nicht selbst angemeldet, bitte besuchen Sie');
define('_NEWSLETTER_EMAIL_USER_NOTIFY5',	'um dieses Abonnement zu beenden.');
define('_NEWSLETTER_EMAIL_USER_SUBJECT',	'Newsletter Subscription Received');
define('_NEWSLETTER_EMAIL_USER_UNSUBSRIBE',	'Ihr Abonnement wurde erfolgreich beendet!');
define('_NEWSLETTER_EMAIL_USER_UNSUBSRIBE1',	'Wir w�rden uns freuen, wenn sie unseren Newsletter wieder abonnieren.');
define('_NEWSLETTER_EMAIL_USER_UNSUBSRIBE2',	'Danke, ihr');
define('_NEWSLETTER_EMAIL_USER_UNSUBSRIBE3',	'Team');
define('_NEWSLETTER_ENABLE_MULTILINGUAL',	'Multi-Sprachenumgebung aktivieren'); 
define('_NEWSLETTER_EXPIRE_ARCHIVED',		'Archive l�schen nach');
define('_NEWSLETTER_FILE',			'Datei');
define('_NEWSLETTER_FILTER',			'Filter');
define('_NEWSLETTER_FIND_TEMPLATES',		'Sie finde die Templates unter');
define('_NEWSLETTER_FIND_TEMPLATES', 'Sie finden die Templates unter');
define('_NEWSLETTER_FORMAT',			'Format');
define('_NEWSLETTER_FORMAT_HTML',		'HTML');
define('_NEWSLETTER_FORMAT_TEXT',		'Text');
define('_NEWSLETTER_FORMAT_TEXTWLINK',		'Text mit Link zum Archiv');
define('_NEWSLETTER_FREQUENCY',			'Frequenz');
define('_NEWSLETTER_FREQUENCY_2MONTHS',		'Alle 2 Monate');
define('_NEWSLETTER_FREQUENCY_3MONTHS',		'Alle 3 Monate');
define('_NEWSLETTER_FREQUENCY_6MONTHS',		'Alle 6 Monate');
define('_NEWSLETTER_FREQUENCY_9MONTHS',		'Alle 9 Monate');
define('_NEWSLETTER_FREQUENCY_MONTHLY',		'Monatlich');
define('_NEWSLETTER_FREQUENCY_WEEKLY',		'W�chentlich');
define('_NEWSLETTER_FREQUENCY_YEARLY',		'J�hrlich');
define('_NEWSLETTER_FREQUENCYCHANGE_DISABLED',	'Benutzerbasierte Frequenz�nderungen sind duch den Administrator ausgeschaltet');
define('_NEWSLETTER_GO',			'los');
define('_NEWSLETTER_HELLO',			'Hallo');
define('_NEWSLETTER_HELP',			'Hilfe');
define('_NEWSLETTER_HELP_MEDIASHARE',		'Geben Sie hier den Pfad zu Ihren Bildern ein, z.B.: mediashare/, pnTemp/mediashare/ usw.');
define('_NEWSLETTER_HELP_ENABLE_MULTILINGUAL',	'Dies aktiviert die M�glichkeit, dass mehrsprachige Newsletter verschickt werden k�nnen.');
define('_NEWSLETTER_HELP_SEND_FROM',		'Das ist die Absenderadresse Ihres Newsletters z.B. newsletter@ihredomain.at');
define('_NEWSLETTER_HOME',			'Start');
define('_NEWSLETTER_ID',			'ID');
define('_NEWSLETTER_IMPORT',			'Import');
define('_NEWSLETTER_IMPORT_ADMIN',		'Zikula User Import Konfiguration');
define('_NEWSLETTER_INACTIVE',			'Inaktiv');
define('_NEWSLETTER_INACTIVE_WARNING',		'Ihr Abonnement ist vor�bergehend deaktiviert');
define('_NEWSLETTER_INFO',			'Information');
define('_NEWSLETTER_ITTOOK',			'Es dauerte');
define('_NEWSLETTER_JOINDATE',			'Abobegin');
define('_NEWSLETTER_LANGUAGE',			'Sprache');
define('_NEWSLETTER_LANGUAGE_NOT_SELECTED',	'Bitte verwenden sie den Sprachselektor des Filters um die Sprache in der sie den Newsletter versenden m�chten zu w�hlen');
define('_NEWSLETTER_LASTSENT',			'Zusendung');
define('_NEWSLETTER_LIMIT_DEFAULT_TYPE_MISMATCH','Sie haben die option zur Beschr�nkung des Aboformats gew�hlt aber ihren Default Newsletter Typ auf ein anderes Format gesetzt. Ihr Default Newsletter Typ wurder auf das Format das sie bei der Beschr�nkung des Typs gew�hlt haben gesetzt. Bitte verifieren sie Ihre Einstellungen!');
define('_NEWSLETTER_MAILER_NOT_AVAILABLE',	'Das Mailer Modul ist nicht verf�gbar');
define('_NEWSLETTER_MAILS',			'Nachrichten gesendet');
define('_NEWSLETTER_MAXIMUM_SEND_PER_HOUR',	'Maximale Anzahl von Zusendungen pro Stunde');
define('_NEWSLETTER_MESSAGE',			'Intro Botschaft');
define('_NEWSLETTER_MESSAGE_INFO',		'Bitte aktivieren Sie das NewsletterMessage Plugin falls sie diese Botschaft Ihrem Newsletter hinzuf�gen m�chten.');
define('_NEWSLETTER_MESSAGEADD',		'Botschaft');
define('_NEWSLETTER_MESSAGE_TITLE',		'Hier k�nnen Sie f�r ihren Newsletter einen individuellen Beitrag hinzuf�gen');
define('_NEWSLETTER_NEVER',			'Nie');
define('_NEWSLETTER_NEWUSERINFO',		'Ein neuer User hat sich bei unserem Newsletter angemeldet!'); 	
define('_NEWSLETTER_NITEMS',			'Anzahl an Objekten');
define('_NEWSLETTER_NOTE',			'Achtung');
define('_NEWSLETTER_NOTIFY_ADMIN_SUBJECT',	'Neuer Abonnent');
define('_NEWSLETTER_NOTIFY_USER_SUBJECT',	'Newsletter');
define('_NEWSLETTER_NOT_APPROVED',		'nicht genehmigt');
define('_NEWSLETTER_NO_USERS',			'Es ist keine Abonnenten verf�gbar!');
define('_NEWSLETTER_NO_USERS_SELECTED',		'Es wurden keine Abonnenten markiert!');
define('_NEWSLETTER_NPLUGINS',			'Anzahl an Plugins');
define('_NEWSLETTER_OPTIONS',			'Einstellungen');
define('_NEWSLETTER_PERSONALIZE_EMAIL',		'Mail personalisieren');
define('_NEWSLETTER_PLUGIN',			'Plugin');
define('_NEWSLETTER_PLUGIN_ITEMS',		'Anzahl der Beitr�ge');
define('_NEWSLETTER_PREVIEW',			'Vorschau');
define('_NEWSLETTER_PREVIEW_TEMPLATES',		'Templates Vorschau');
define('_NEWSLETTER_PREVIEW_TITLE',		'Vorschau');
define('_NEWSLETTER_PRUNE_ARCHIVES',		'Archiv l�schen');
define('_NEWSLETTER_REQUIRE_TERMS_OF_SERVICE',	'Ben�tigt eine Registrierung die zustimmung zu den Nutzungsbedingungen?');
define('_NEWSLETTER_SEARCH',			'Suche');
define('_NEWSLETTER_SECONDS_TO_SEND_LAST_BATCH','Sekunden um den letzten Auftrag durchzuf�hren.');
define('_NEWSLETTER_SELECT',			'- ausw�hlen -');
define('_NEWSLETTER_SELECT_ARCHIVE_TO_FLUSH',	'Bitte w�hlen Sie das zu l�schende Archiv aus');
define('_NEWSLETTER_SENDDAY',			'Zusendung am');
define('_NEWSLETTER_SEND_DATE',			'letzte Zustellung');
define('_NEWSLETTER_SEND_DATE_NONE',		'noch keinen Newsletter erhalten');
define('_NEWSLETTER_SEND_FROM',			'Absenderadresse');
define('_NEWSLETTER_SEND_PER_REQUEST',		'sende pro Anfrage');
define('_NEWSLETTER_SEND_TO',			'sende an');
define('_NEWSLETTER_SENT_SUCCESSFULLY',		'Der Newsletter wurde erfolgreich gesendet ');
define('_NEWSLETTER_SETTINGS',			'Einstellungen');
define('_NEWSLETTER_SIMPLIFY_BATCH_PROCESSING',	'f�r das cron/batchprocessing');
define('_NEWSLETTER_SIZE',			'Gr��e');
define('_NEWSLETTER_STATISTICS',		'Statistiken');
define('_NEWSLETTER_STATISTICS_ACTIVE',		'Aktive Abonnenten');
define('_NEWSLETTER_STATISTICS_ACTIVEAPPROVED',	'Aktive und genehmigte Abonnenten');
define('_NEWSLETTER_STATISTICS_APPROVED',	'genehmigte Abonnenten');
define('_NEWSLETTER_STATISTICS_ARCHIVES',	'Anzahl an Archiven');
define('_NEWSLETTER_STATISTICS_HTML',		'Anzahl an HTML Abo`s ');
define('_NEWSLETTER_STATISTICS_MONTHLY',	'Anzahl an monatlichen Zustellungen');
define('_NEWSLETTER_STATISTICS_REGISTERED',	'Registrierte Abonnenten');
define('_NEWSLETTER_STATISTICS_TEXT',		'Anzahl an TEXT Abo`s');
define('_NEWSLETTER_STATISTICS_TEXTWITHLINKS',	'Anzahl an TEXT mit LINK Abo`s');
define('_NEWSLETTER_STATISTICS_TITLE',		'Newsletter Statistiken');
define('_NEWSLETTER_STATISTICS_USERS',		'Gesamtzahl an Abonnenten');
define('_NEWSLETTER_STATISTICS_WEEKLY',		'Anzahl an w�chentlichen Zustellungen');
define('_NEWSLETTER_STATISTICS_YEARLY',		'Anzahl an j�hrlichen Zustellungen');
define('_NEWSLETTER_STATUS',			'Abonnement Status');
define('_NEWSLETTER_STATUS_ACTIVE',		'Ihr Abonnement ist zur Zeit aktiv!');
define('_NEWSLETTER_STATUS_APPROVED',		'Genehmigungsstatus');
define('_NEWSLETTER_STATUS_INACTIVE',		'Ihr Abonnement ist zur Zeit inaktiv!');
define('_NEWSLETTER_STATUS_ISAPPROVED',		'Abo genehmigt!');
define('_NEWSLETTER_STATUS_NOTAPPROVED', 'Nicht genehmigt');
define('_NEWSLETTER_SUBSCRIBE',			'anmelden');
define('_NEWSLETTER_SUBSCRIPTION_NOTICES',	'Nachricht �ber neue Abonnenten empfangen?');
define('_NEWSLETTER_SUSPEND',			'Abonnement vor�bergehend aussetzen?');
define('_NEWSLETTER_TERMS_OF_SERVICE',		'Nutzungsbedingungen');
define('_NEWSLETTER_TOS_NOT_SELECTED',		'Sie m�ssen den Nutzungsbedingungen zustimmen, damit Sie unseren Newsletter empfangen k�nnen!');
define('_NEWSLETTER_TERMS_OF_SERVICE_AGREE',	'Ja, ich stimme den <a href="index.php?module=Newsletter&amp;func=main&amp;ot=tos" title="Nutzungsbedingungen">Nutzungsbedingungen</a> zu.');
define('_NEWSLETTER_TERMS_OF_SERVICE_ERROR',	'Sie m�ssen den Nutzungsbedingungen zustimmen, um den Newsletter abonnieren zu k�nnen!');
define('_NEWSLETTER_TERMS_OF_SERVICE_TEXT_1',	'wird Ihre Pers�nlichen Daten weder ver�ffentlichen, verkaufen oder an Dritte weiterleiten.');
define('_NEWSLETTER_TERMS_OF_SERVICE_TEXT_2',	'Sie k�nnen Ihre Zustimmung zum Empfang des Newsletters jederzeit wiederrufen.');
define('_NEWSLETTER_TERMS_OF_SERVICE_TEXT_3','	bietet keine Gew�hrleistungen oder Garantien f�r diesen Dienst und �bernimmt keine Verantwortung oder Haftung f�r etwaige Sch�den, die vor, w�hrend oder nach dem Abonnement dieses Dienstes entstehen k�nnten.');
define('_NEWSLETTER_TESTSEND',			'Vorschau an diesen Benutzer verschicken');
define('_NEWSLETTER_TEXT_FOR_SUBSCRIBING',	'f�r die Anmeldung zu unserm Newsletter!');
define('_NEWSLETTER_TEXT_HERE',			'hier!');
define('_NEWSLETTER_TEXT_LINK_TO_ARCHIVE',	'Link zum Newsletter Archiv:');
define('_NEWSLETTER_TEXT_SUBSCRIBE',		'Sie erhalten diesen Newsletter weil Sie sich auf unserer Seite daf�r angemeldet haben, sie k�nnen sich jederzeit wieder abmelden.');
define('_NEWSLETTER_TEXT_THANK_YOU',		'Vielen Dank');
define('_NEWSLETTER_TEXT_WEB_TEAM',		'Team');
define('_NEWSLETTER_TYPE',			'Typ');
define('_NEWSLETTER_TYPE_LIMIT',		'Aboformat beschr�nken auf');
define('_NEWSLETTER_UNAPPROVED',		'noch nicht genehmigt');
define('_NEWSLETTER_UNSUBSCRIBE',		'Abmelden');
define('_NEWSLETTER_UNSUBSCRIBE_CONFIRM',	'Sind Sie sicher, dass Sie sich abmelden m�chten?');
define('_NEWSLETTER_UNSUBSCRIBE_MESSAGE',	'Hier k�nnen Sie sich vom Newsletter abmelden');
define('_NEWSLETTER_UPDATE_CONFIGURATION',	'Konfiguration speichern');
define('_NEWSLETTER_UPDATE_LAST_SENT_DATE',	'Datum der letzten Sendung aktualisieren?');
define('_NEWSLETTER_USERADD',			'Benutzer Anlegen');
define('_NEWSLETTER_USERIMPORT',		'Import');
define('_NEWSLETTER_USERIMPORT_EXPLAIN',        'Importiere Zikula Users'); 
define('_NEWSLETTER_USERNAME',			'Name');
define('_NEWSLETTER_USERS',			'Benutzer');
define('_NEWSLETTER_USERSEARCH',		'Benutzersuche');
define('_NEWSLETTER_USERS_PER_PAGE',		'User pro Seite');
define('_NEWSLETTER_USER_EDIT',			'User bearbeiten');
define('_NEWSLETTER_USER_OPTIONS_UPDATED',	'Einstellungen erfolgreich gespeichert!');
define('_NEWSLETTER_USER_SUBSCRIBED',		'Vielen Dank f�r Ihre Anmeldung!');
define('_NEWSLETTER_USER_UID',			'ID');
define('_NEWSLETTER_USER_UNSUBSCRIBED',		'Ihre Abmeldung wurde erfolgreich durchgef�hrt!');
define('_NEWSLETTER_USER_WELCOME',		'Willkommen bei unserem Newsletter, hier k�nnen Sie Ihr Abo verwalten, oder sich abmelden.');
define('_NEWSLETTER_VIEWARCHIVE',		'Newsletter anzeigen');
define('_NEWSLETTER_VIEWARCHIVES',		'Archiv');
define('_NEWSLETTER_VIEWARCHIVES_LIST',		'Archivansicht');
define('_NEWSLETTER_VIEW_Abonnenten',		'Abonnenten bearbeiten');
define('_NEWSLETTER_VIEW_PLUGINS',		'Plugins');
define('_NEWSLETTER_VIEW_SUBSCRIBERS',		'Abonnenten');
define('_NEWSLETTER_X_NUMBER_OF_EMAILS',	'"x" Anzahl an E-Mails');
define('_NEWSLETTER_YOUR_EMAIL',		'Ihre E-Mailadresse:');
define('_NEWSLETTER_YOUR_NAME',			'Ihr Name:');
define('_NEWSLETTER_ZERO_NO_RESTRICTION',	'(0 [Zero] = keine Einschr�nkung)');
define('_NEWSLETTER_USERIMPORT_FINISH',		'User-Import fertiggestellt.');
define('_NEWSLETTER_USERIMPORT_IMPORTED',	'Benutzer wurden importiert');
define('_NEWSLETTER_EMAIL_SUCCESS',	'Nachricht erfolgreich gesendet!');
define('_NEWSLETTER_CONFIG_ARCHIVES',			'Archiv Einstellungen');
define('_NEWSLETTER_SHOW_ARCHIVE',			'Archiv in User-Men� anzeigen?');
define('_NEWSLETTER_SHOW_ID',			'Newsletter ID anzeigen ?');
define('_NEWSLETTER_SHOW_DATE',			'Datum azeigen?');
define('_NEWSLETTER_SHOW_OBJECTS',			'Anzahl an Objekten anzeigen?');
define('_NEWSLETTER_SHOW_PLUGINS',			'Anzahl an Plugins anzeigen?');
define('_NEWSLETTER_SHOW_SIZE',			'Gr��e des Newsletters anzeigen?');
define('_NEWSLETTER_SHOW_LANG',			'Sprache anzeigen?');
define('_NEWSLETTER_SHOW_APPROVAL_STATUS',			'Soll dem User der Genehmigungsstatus gezeigt werden? ');
define('_NEWSLETTER_SUBJECT',			'Betreff');
define('_NEWSLETTER_HELP_SUBJECT',			'Das ist der Titel der Betreffszeile des gesendeten Newsletters');
define('_NEWSLETTER_DISABLE_AUTO',			'Manueller Versand');
define('_NEWSLETTER_HELP_DISABLE_AUTO',			'Deaktiviert die automatische Zusendung. Newsletter m�ssen nun manuell verschickt werden ');
define('_NEWSLETTER_MAILER_NOTE',			'Zikula 1.1.2 und h�her: Falls HTML-Mails versendet werden sollen, muss im Mailer-Modul (System --> Mailer) der Haken bei "Mails im html-format senden" aktiviert werden!');
define('_NEWSLETTER_START_NOTE',			'Willkommen bei Newsletter!');
define('_NEWSLETTER_START_NOTE_1',			'Besuchen Sie unsere Projekt-Seite');
define('_NEWSLETTER_START_NOTE_2',			'Bitte melden Sie Fehlermeldungen oder W�nsche f�r kommende Versionen im Tracker!');

  
  
  
  

    


