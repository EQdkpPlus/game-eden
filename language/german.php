<?php
/*	Project:	EQdkp-Plus
 *	Package:	Eden Eternal game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Barde',
		2	=> 'Klingentänzer',
		3	=> 'Kleriker',
		4	=> 'Ingenieur',
		5	=> 'Jäger',
		6	=> 'Illusionist',
		7	=> 'Ritter',
		8 	=> 'Magier',
		9	=> 'Kampfkünstler',
		10	=> 'Waldläufer',
		11  => 'Schamane',
		12	=> 'Templer',
		13	=> 'Dieb',
		14	=> 'Hexenmeister',
		15	=> 'Krieger',
	),

	'races' => array(
		0	=> 'Unknown',
		1	=> 'Mensch',
		2	=> 'Zumi',
		3	=> 'Anuran',
		4	=> 'Halfkin',
		5	=> 'Ursun',
	),

	'lang' => array(
		'eden'							=> 'Eden Eternal',
		'tank'							=> 'Tank',
		'healer'						=> 'Heiler',
		'support'						=> 'Unterstützung',
		'melee'							=> 'Nahkampf',
		'ranged'						=> 'Fernkampf',
		
		// Profile information
		'uc_gender'						=> 'Geschlecht',
		'uc_male'						=> 'Männlich',
		'uc_female'						=> 'Weiblich',
		'uc_guild'						=> 'Gilde',
		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',
	),
);
?>