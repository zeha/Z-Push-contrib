<?php
/***********************************************
* File      :   config.php
* Project   :   Z-Push
* Descr     :   CardDAV backend configuration file
*
* Created   :   16.03.2013
*
* Copyright 2007 - 2013 Zarafa Deutschland GmbH
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License, version 3,
* as published by the Free Software Foundation with the following additional
* term according to sec. 7:
*
* According to sec. 7 of the GNU Affero General Public License, version 3,
* the terms of the AGPL are supplemented with the following terms:
*
* "Zarafa" is a registered trademark of Zarafa B.V.
* "Z-Push" is a registered trademark of Zarafa Deutschland GmbH
* The licensing of the Program under the AGPL does not imply a trademark license.
* Therefore any rights, title and interest in our trademarks remain entirely with us.
*
* However, if you propagate an unmodified version of the Program you are
* allowed to use the term "Z-Push" to indicate that you distribute the Program.
* Furthermore you may use our trademarks where it is necessary to indicate
* the intended purpose of a product or service provided you use it in accordance
* with honest practices in industrial or commercial matters.
* If you want to propagate modified versions of the Program under the name "Z-Push",
* you may only do so if you have a written permission by Zarafa Deutschland GmbH
* (to acquire a permission please contact Zarafa at trademark@zarafa.com).
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
* Consult LICENSE file for details
************************************************/

// ************************
//  BackendCardDAV settings
// ************************

// Server protocol: http or https
define('CARDDAV_PROTOCOL', 'https');

// Server name
define('CARDDAV_SERVER', 'localhost');

// Server port
define('CARDDAV_PORT', '443');

// Server path to the addressbook
// %u: replaced with the username
// %d: replaced with the domain
//   Add the trailing /
define('CARDDAV_PATH', '/addressbooks/users/%u/addressbook/');

// Addressbook display name
// %u: replaced with the username
// %d: replaced with the domain
define('CARDDAV_CONTACTS_FOLDER_NAME', '%u Addressbook');


// If the CardDAV server support the sync-collection operation
// DAViCal supports it, but SabreDav/Owncloud doesn't
// Setting this to false will work with most servers, but it will be pretty slow: 1 petition for the href of vcards, and 1 petition for each vcard
define('CARDDAV_SUPPORTS_SYNC', false);
