<?php
namespace Omnipay\PayUIntl\Omnipay\Common;

use Omnipay\Common\Helper;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Address Item
 *
 * This class defines a single an address item in the Omnipay system.
 *
 * @see ItemInterface
 */
class Address implements AddressInterface
{
    /**
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    protected $parameters;

    /**
     * Create a new item with the specified parameters
     *
     * @param array|null $parameters An array of parameters to set on the new object
     */
    public function __construct($parameters = null)
    {
        $this->initialize($parameters);
    }

    /**
     * Initialize this item with the specified parameters
     *
     * @param array|null $parameters An array of parameters to set on this object
     * @return $this
     */
    public function initialize($parameters = null)
    {
        $this->parameters = new ParameterBag;

        Helper::initialize($this, $parameters);

        return $this;
    }

    /**
     * Get parameters
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters->all();
    }

    /**
     * Get parameter
     *
     * @param $key
     * @return mixed
     */
    protected function getParameter($key)
    {
        return $this->parameters->get($key);
    }

    /**
     * Set parameter
     *
     * @param $key
     * @param $value
     * @return $this
     */
    protected function setParameter($key, $value)
    {
        $this->parameters->set($key, $value);

        return $this;
    }

    /**
     * Get first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->getParameter('firstName');
    }

    /**
     * Set first name
     *
     * @param string $value
     * @return Address
     */
    public function setFirstName($value)
    {
        return $this->setParameter('firstName', $value);
    }

    /**
     * Get last name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->getParameter('lastName');
    }

    /**
     * Set last name
     *
     * @param string $value
     * @return Address
     */
    public function setLastName($value)
    {
        return $this->setParameter('lastName', $value);
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->getParameter('email');
    }

    /**
     * Set email
     */
    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->getParameter('phone');
    }

    /**
     * Set phone
     *
     * @param string $value
     * @return Address
     */
    public function setPhone($value)
    {
        return $this->setParameter('phone', $value);
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->getParameter('address');
    }

    /**
     * Set address
     *
     * @param string $value
     * @return Address
     */
    public function setAddress($value)
    {
        return $this->setParameter('address', $value);
    }

    /**
     * Get zip code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->getParameter('zipCode');
    }

    /**
     * Set zip code
     *
     * @param string $value
     * @return Address
     */
    public function setZipCode($value)
    {
        return $this->setParameter('zipCode', $value);
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->getParameter('city');
    }

    /**
     * Set city
     *
     * @param string $value
     * @return Address
     */
    public function setCity($value)
    {
        return $this->setParameter('city', $value);
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->getParameter('state');
    }

    /**
     * Set state
     *
     * @param string $value
     * @return Address
     */
    public function setState($value)
    {
        return $this->setParameter('state', $value);
    }

    /**
     * Get country code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getParameter('countryCode');
    }

    /**
     * Set country code
     *
     * @param string $value
     * @return Address
     */
    public function setCountryCode($value)
    {
        return $this->setParameter('countryCode', $value);
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->getParameter('company');
    }

    /**
     * Set company
     *
     * @param string $value
     * @return Address
     */
    public function setCompany($value)
    {
        return $this->setParameter('company', $value);
    }
}
