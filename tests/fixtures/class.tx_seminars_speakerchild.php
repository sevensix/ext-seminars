<?php
/***************************************************************
* Copyright notice
*
* (c) 2008 Niels Pardon (mail@niels-pardon.de)
* All rights reserved
*
* This script is part of the TYPO3 project. The TYPO3 project is
* free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Class 'tx_seminars_speakerchild' for the 'seminars' extension.
 *
 * This is mere a class used for unit tests of the 'seminars' extension. Don't
 * use it for any other purpose.
 *
 * @package		TYPO3
 * @subpackage	tx_seminars
 *
 * @author		Niels Pardon <mail@niels-pardon.de>
 */

require_once(t3lib_extMgm::extPath('seminars').'class.tx_seminars_speaker.php');

final class tx_seminars_speakerchild extends tx_seminars_speaker {
	/**
	 * Sets the number of skills for this record.
	 *
	 * TODO: This function needs to be removed once the testing framework
	 * can update the counter for the number of skills.
	 *
	 * @see		https://bugs.oliverklee.com/show_bug.cgi?id=1403
	 *
	 * @param	integer		the number of skills that are associated with
	 * 						this event
	 */
	public function setNumberOfSkills($number) {
		$this->setRecordPropertyInteger('skills', $number);
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/seminarst/tests/fixtures/class.tx_seminars_speakerchild.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/seminars/tests/fixtures/class.tx_seminars_speakerchild.php']);
}
?>