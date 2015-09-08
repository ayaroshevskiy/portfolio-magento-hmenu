<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Holoflek
 * @package     Holoflek_Menu
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Holoflek Menu Data helper
 *
 * @category   Holoflek
 * @package    Holoflek_Menu
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Holoflek_Menu_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Retrieve Url of Category.
     *
     * @return string
     */
    public function getCategoryUrl($categoryId = null)
    {
        if (empty($categoryId)) {
            return false;
        }

        $category = Mage::getSingleton('catalog/category')->load($categoryId);

        return $category->getUrl();
    }
}
