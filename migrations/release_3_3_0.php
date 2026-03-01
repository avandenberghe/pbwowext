<?php
/**
 *
 * @package PBWoW Extension
 * @copyright (c) 2015 PayBas
 * @copyright (c) 2017 Sajaki
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paybas\pbwowext\migrations;

class release_3_3_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['pbwowext_version']) && version_compare($this->config['pbwowext_version'], '3.3.0', '>=');
	}

	static public function depends_on()
	{
		return array('\paybas\pbwowext\migrations\release_3_2_8');
	}

	public function update_data()
	{
		return array(
			array('config.update', array('pbwowext_version', '3.3.0')),
			array('custom', array(array($this, 'fix_http_links'))),
		);
	}

	public function fix_http_links()
	{
		$table = $this->table_prefix . 'pbwowext_config';

		$fields = array('topbar_code', 'headerlinks_code', 'ads_index_code');
		foreach ($fields as $field)
		{
			$sql = 'SELECT config_value FROM ' . $table . " WHERE config_name = '" . $this->db->sql_escape($field) . "'";
			$result = $this->db->sql_query($sql);
			$row = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);

			if ($row && strpos($row['config_value'], 'http://') !== false)
			{
				$new_value = str_replace('http://', 'https://', $row['config_value']);
				$sql = 'UPDATE ' . $table . " SET config_value = '" . $this->db->sql_escape($new_value) . "' WHERE config_name = '" . $this->db->sql_escape($field) . "'";
				$this->db->sql_query($sql);
			}
		}
	}
}
