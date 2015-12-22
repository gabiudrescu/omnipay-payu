<?php
/**
 * Cart Item
 */

namespace Omnipay\PayUIntl\Omnipay\Common;

use Omnipay\Common\Item as BaseItem;

/**
 * Cart Item
 *
 * This class defines a single cart item in the Omnipay system.
 *
 * @see ItemInterface
 */
class Item extends BaseItem
{
    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->getParameter('sku');
    }

    /**
     * Set sku
     *
     * @param $value
     * @return $this
     */
    public function setSku($value)
    {
        return $this->setParameter('sku', $value);
    }

    /**
     * Get tax percent
     *
     * @return int
     */
    public function getTaxPercent()
    {
        return $this->getParameter('tax_percent');
    }

    /**
     * Set tax percent
     *
     * @param $value
     * @return $this
     */
    public function setTaxPercent($value)
    {
        return $this->setParameter('tax_percent', $value);
    }
}
