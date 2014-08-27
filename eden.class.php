<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2014 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 *
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('eden')) {
	class eden extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '0.1';
		protected $this_game		= 'eden';
		protected $types			= array('classes', 'races', 'filters');
		protected $classes			= array();
		protected $races			= array();
		protected $filters			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> false
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',		// Unknown
						1 	=> 'all',		// Gnome
						2 	=> 'all',		// Human
						3 	=> 'all',		// Dwarf
						4 	=> 'all',		// Night Elf
						5 	=> 'all',		// Troll
					),
				),
			),
		);

		protected $class_colors = array(
			1	=> '#368BDE',
			2	=> '#F87430',
			3	=> '#368BDE',
			4	=> '#8DCC47',
			5	=> '#8DCC47',
			6	=> '#B85AF0',
			7	=> '#F8D25A',
			8	=> '#B85AF0',
			9	=> '#F87430',
			10	=> '#8DCC47',
			11	=> '#368BDE',
			12	=> '#F8D25A',
			13	=> '#F87430',
			14	=> '#B85AF0',
			15	=> '#F8D25A',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		public function profilefields(){
			$xml_fields = array(
				'gender'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_gender',
					'options'		=> array('Male' => 'uc_male', 'Female' => 'uc_female'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'guild'	=> array(
					'type'			=> 'text',
					'category'		=> 'character',
					'lang'			=> 'uc_guild',
					'size'			=> 40,
					'undeletable'	=> true,
				),
			);
			return $xml_fields;
		}

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
				$this->filters[$lang] = array_merge($this->filters[$lang], array(
					array('name' => '-----------', 'value' => false),
					array('name' => $this->glang('tank', true, $lang), 'value' => 'class:7,12,15'),
					array('name' => $this->glang('healer', true, $lang), 'value' => 'class:1,3,11'),
					array('name' => $this->glang('support', true, $lang), 'value' => 'class:1,3,11'),
					array('name' => $this->glang('melee', true, $lang), 'value' => 'class:2,9,13'),
					array('name' => $this->glang('ranged', true, $lang), 'value' => 'class:4,5,6,8,10,14'),
					
				));
			}
		}

		public function install($install=false){}
	}
}
?>