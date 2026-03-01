<?php
/**
 *
 * @package PBWoW Extension
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paybas\pbwowext;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		$config = $this->container->get('config');

		if (phpbb_version_compare($config['version'], '3.3.0', '>='))
		{
			return true;
		}

		$language = $this->container->get('language');
		$language->add_lang('info_acp_pbwowext', 'paybas/pbwowext');

		return array($language->lang('EXTENSION_REQUIRES_330'));
	}
}
