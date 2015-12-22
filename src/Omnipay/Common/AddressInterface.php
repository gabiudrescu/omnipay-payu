<?php
namespace Omnipay\PayUIntl\Omnipay\Common;

/**
 * Address Item interface
 *
 * This interface defines the functionality that all address items in
 * the Omnipay system are to have.
 */
interface AddressInterface
{
    /**
     * Customer first name
     */
    public function getFirstName();

    /**
     * Customer last name
     */
    public function getLastName();

    /**
     * Customer email
     */
    public function getEmail();

    /**
     * Customer phone
     */
    public function getPhone();

    /**
     * Customer address
     */
    public function getAddress();

    /**
     * Customer zip code
     */
    public function getZipCode();

    /**
     * Customer city
     */
    public function getCity();

    /**
     * Customer state
     */
    public function getState();

    /**
     * Customer country code
     */
    public function getCountryCode();

    /**
     * Customer company
     */
    public function getCompany();
}
