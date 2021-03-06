<?php
/**
 * File containing the ezoptionhandler class.
 *
 * @copyright Copyright (C) 1999 - 2012 Brookins Consulting. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2 (or any later version)
 * @version //autogentag//
 * @package bccie
 */

include_once('extension/bccie/modules/bccie/parser.php');
include_once('extension/bccie/modules/bccie/basehandler.php');

class eZOptionHandler extends BaseHandler {

        function exportAttribute(&$attribute, $seperationChar) {
                $ret = false;
                $objectAttribute = $attribute->contentObjectAttribute();
                $objectAttributeContent = $objectAttribute->content();
                if($objectAttributeContent->Options)
                        $ret = $objectAttributeContent->Options[$attribute->DataInt]['value'];
                return $this->escape($ret, $seperationChar);
                
   }
}

?>
