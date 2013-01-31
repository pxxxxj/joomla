<?php
/**
 * @author    JoomlaShine.com http://www.joomlashine.com
 * @copyright Copyright (C) 2008 - 2011 JoomlaShine.com. All rights reserved.
 * @license   GNU/GPL v2 http://www.gnu.org/licenses/gpl-2.0.html
 * @version   $Id: jsn_checksum_file_comparison.php 17476 2012-10-25 10:57:49Z tuyetvt $
 */
defined('_JEXEC') or die('Restricted access');
include_once dirname(__FILE__). DIRECTORY_SEPARATOR .'jsn_checksum.php';
class JSNChecksumFileComparison extends JSNChecksum
{
	var $_comparedFile 	= '';
	var $_comparingFile	= '';

	function JSNChecksumFileComparison($comparedFilePath)
	{
		parent::JSNChecksum();
		$this->_comparedFile 	= $comparedFilePath. DIRECTORY_SEPARATOR .$this->_checksum_file_name;
		$this->_comparingFile 	= $this->_template_folder_path. DIRECTORY_SEPARATOR .$this->_checksum_file_name;
	}

	function compareFileContent()
	{
		$comparedContentFile 		= $this->_getFileContent($this->_comparedFile);
		$comparingContentFile 		= $this->_getFileContent($this->_comparingFile);
		$result = $this->compare($comparedContentFile, $comparingContentFile);

		if (!is_array($result) || !isset($result['added']) || !isset($result['modified']) || !isset($result['deleted'])) {
			$result = array('added' => array(), 'modified' => array(), 'deleted' => array());
		}

		return $result;
	}
}