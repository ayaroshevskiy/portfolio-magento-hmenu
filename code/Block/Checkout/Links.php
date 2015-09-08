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
 * @category    Mage
 * @package     Holoflek_Menu
 * @copyright  Copyright (c) 2006-2015 X.commerce, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Links block
 *
 * @category    Holoflek
 * @package     Holoflek_Menu
 * @author      Altexsoft Team
 */
class Holoflek_Menu_Block_Checkout_Links extends Mage_Checkout_Block_Links
{
    /**
     * Add shopping cart link to parent block
     *
     * @return Mage_Checkout_Block_Links
     */
    public function addCartLink()
    {
        $parentBlock = $this->getParentBlock();
        if ($parentBlock && Mage::helper('core')->isModuleOutputEnabled('Mage_Checkout')) {

            $text = $this->__('Your Basket');

            $afterText = null;

            if ($miniCart = $this->getChild('cart_top_link_drop')) {
                $afterText = $miniCart->toHtml();
            }

            $parentBlock->removeLinkByUrl($this->getUrl('checkout/cart'));
            $parentBlock->addLink($text, 'checkout/cart', $text, true, array(), 30, ' class="basket"', ' data-target-element="#header-cart" class="skip-link skip-cart"', null, $afterText);
        }
        return $this;
    }
}
