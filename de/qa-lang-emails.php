<?php

/*
	Question2Answer 1.4 (c) 2011, Gideon Greenspan

	http://www.question2answer.org/


	File: qa-lang/de-DU/qa-lang-emails.php
	Version: 1.4
	Date: 2011-06-25
	Description: Language phrases for email notifications in German
	Translation: Philip Schilling / www.philip.me (based on translation of Corinna Baldauf)


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Deine Antwort bei ^site_title hat einen neuen Kommentar von ^c_handle:\n\n^open^c_content^close erhalten.\n\nDeine Antwort war:\n\n^open^c_context^close\n\nDu kannst mit einem eigenen Kommentar antworten:\n^url\n\nVielen Dank,\n\n^site_title",
		'a_commented_subject' => 'Deine Antwort bei ^site_title hat einen neuen Kommentar erhalten',
		'a_followed_body' => "Deine Antwort bei ^site_title hat eine neue ähnliche Frage von ^q_handle:\n\n^open^q_title^close erhalten.\n\nDeine Antwort war:\n\n^open^a_content^close\n\nKlicke auf den folgenden Link, um die neue Frage zu beantworten:\n^url\n\nVielen Dank,\n\n^site_title",
		'a_followed_subject' => 'Deine Antwort bei ^site_title hat eine ähnliche Frage',
		'a_selected_body' => "Herzlichen Glückwunsch! Deine Antwort bei ^site_title wurde von ^s_handle als Beste ausgewählt:\n\n^open^a_content^close\n\nDie Frage war:\n\n^open^q_title^close\n\nKlicke auf den folgenden Link, um deine Antwort zu sehen:\n^url\n\nVielen Dank,\n\n^site_title",
		'a_selected_subject' => 'Deine Antwort bei ^site_title wurde als beste ausgewählt!',
		'c_commented_body' => "Bei ^site_title hat ^c_handle einen neuen Kommentar nach deinem Kommentar hinterlassen:\n\n^open^c_content^close\n\nHier findest du die Unterhaltung:\n\n^open^c_context^close\n\nDu kannst mit einem eigenen Kommentar antworten:\n^url\n\nVielen Dank,\n\n^site_title",
		'c_commented_subject' => 'Dein Kommentar bei ^site_title wurde hinzugefügt zu',
		'confirm_body' => "Bitte klicke auf den folgenden Link, um deine Email-Adresse bei ^site_title zu bestätigen:\n^url\n\nVielen Dank,\n^site_title",
		'confirm_subject' => '^site_title - Email-Address bestätigen',
		'feedback_body' => "Kommentare:\n^message\n\nName:\n^name\n\nEmail:\n^email\n\nVorherige Seite:\n^previous\n\nBenutzer:\n^url\n\nIP-Addresse:\n^ip\n\nBrowser:\n^browser",
		'feedback_subject' => '^ Feedback',
		'new_password_body' => "Unten findest du dein neues Passwort für ^site_title.\n\nPasswort: ^password\n\nBitte ändere dieses Passwort in ein selbst gewähltes nach dem ersten Einloggen.\n\nVielen Dank,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Dein neues Passwort',
		'q_answered_body' => "^a_handle hat deine Frage bei ^site_title beantwortet:\n\n^open^a_content^close\n\nDeine Frage war:\n\n^open^q_title^close\n\nWenn die Antwort gut ist, kannst du sie als Beste auswählen:\n^url\n\nVielen Dank,\n\n^site_title",
		'q_answered_subject' => 'Deine Frage bei ^site_title wurde beantwortet',
		'q_commented_body' => "^c_handle hat deine Frage bei ^site_title kommentiert:\n\n^open^c_content^close\n\nDeine Frage war:\n\n^open^c_context^close\n\nDu kannst mit einem eigenen Kommentar antworten:\n^url\n\nVielen Dank,\n\n^site_title",
		'q_commented_subject' => 'Deine Frage bei ^site_title hat einen neuen Kommentar',
		'q_posted_body' => "^q_handle hat eine neue Frage gestellt\n\n^open^q_title\n\n^q_content^close\n\nKlicke auf den folgenden Link, um die Frage zu sehen:\n^url\n\nVielen Dank,\n\n^site_title",
		'q_posted_subject' => 'Bei ^site_title gibt es eine neue Frage',
		'reset_body' => "Bitte klicke auf den folgenden Link, um dein Passwort für ^site_title zurückzusetzen:\n^url\n\nAlternativ, kannst du den untenstehenden Code in das Feld auf der Website eingeben.\n\nCode: ^code\n\nWenn du dein Passwort nicht zurücksetzen willst, kannst du diese Email einfach ignorieren.\n\nVielen Dank,\n^site_title",
		'reset_subject' => '^site_title - Passwort zurücksetzen',
		'welcome_body' => "Danke, dass du dich bei ^site_title angemeldet hast.\n\n^custom^confirmDeine Login-Daten lauten:\n\nEmail: ^email\nPasswort: ^password\n\nBitte bewahre diese Informationen sicher auf.\n\nVielen Dank,\n\n^site_title\n^url",
		'welcome_confirm' => "Bitte klicke auf den folgenden Link, um deine Email-Adresse zu bestätigen:\n^url\n\n",
		'welcome_subject' => 'Willkommen bei ^site_title!',
		'flagged_body' => "Ein Post von ^p_handle hat ^flags:\n\n^open^p_context^close erhalten\n\nKlicke auf den folgenden Link, um den Post zu sehen:\n^url\n\nVielen Dank,\n\n^site_title",
		'flagged_subject' => "^site_title hat einen Post markiert",
		'private_message_body' => "Du hast eine private Nachricht von ^f_handle auf ^site_title:\n\n^open^message^close erhalten.\n\n^moreVielen Dank,\n\n^site_title\n\n\nUm private Nachrichten zu sperren, logge dich bitte in dein Konto ein:\n^a_url",
		'private_message_info' => "Mehr Informationen über ^f_handle:\n^url\n\n",
		'private_message_reply' => "Klicke auf den Link, um ^f_handle mit einer privaten Nachricht zu antworten:\n^url\n\n",
		'private_message_subject' => "Nachricht von ^f_handle auf ^site_title",
		'moderate_body' => "Ein Beitrag von ^p_handle erfordert deine Freigabe:\n\n^open^p_context^close\n\nKlicke auf diesen Link, um den Beitrag freizugeben oder abzulehnen:\n\n^url\n\nDanke sehr,\n\n^site_title",
		'moderate_subject' => '^site_title Moderation',
		'to_handle_prefix' => "^,\n\n",
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/
