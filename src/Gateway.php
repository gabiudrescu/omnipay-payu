<?php
/**
 * PayU International Gateway
 */
namespace Omnipay\PayUIntl;

use Omnipay\Common\AbstractGateway;

/**
 * Class Gateway
 * @package Omnipay\PayUIntl
 *
 * @author Valentin Sandu <valentin.sandu@innobyte.com>
 */
class Gateway extends AbstractGateway
{
    /**
     * Gateway name
     */
    const GATEWAY_NAME = 'PayUIntl';

    /**
     * PayU gateway payment methods
     *
     * @var string
     */
    const PAYU_METHOD_CCVISAMC = 'CCVISAMC';
    const PAYU_METHOD_CCJCB = 'CCJCB';
    const PAYU_METHOD_CCDINERS = 'CCDINERS';
    const PAYU_METHOD_PAYPAL = 'PAYPAL';

    /**
     * IOS successful statuses
     */
    const IOS_SUCCESS_COMPLETE = 'COMPLETE';
    const IOS_SUCCESS_REFUND = 'REFUND';
    const IOS_SUCCESS_REVERSED = 'REVERSED';
    const IOS_SUCCESS_PAYMENT_AUTHORIZED = 'PAYMENT_AUTHORIZED';
    const IOS_SUCCESS_CASH = 'CASH';

    /**
     * IOS denied statuses
     */
    const IOS_DENIED_NOT_FOUND = 'NOT_FOUND';
    const IOS_DENIED_CARD_NOTAUTHORIZED = 'CARD_NOTAUTHORIZED';
    const IOS_DENIED_INVALID = 'INVALID';

    /**
     * Redirect method
     */
    const REDIRECT_METHOD = 'POST';

    /**
     * PayU allowed currencies
     *
     * @var array
     */
    protected $allowedCurrencies = array(
        'RON', 'EUR', 'USD', 'TRY', 'HUF', 'CZK', 'PLN', 'RUB', 'UAH', 'INR'
    );

    /**
     * PayU allowed languages
     *
     * @var array
     */
    protected $allowedLanguages = array(
        'RO', 'EN', 'HU', 'DE', 'FR', 'IT', 'ES', 'BG', 'PL'
    );

    /**
     * IOS successful statuses
     *
     * @var array
     */
    protected $successfulStatuses = array(
        self::IOS_SUCCESS_COMPLETE,
        self::IOS_SUCCESS_REFUND,
        self::IOS_SUCCESS_REVERSED,
        self::IOS_SUCCESS_PAYMENT_AUTHORIZED,
        self::IOS_SUCCESS_CASH
    );

    /**
     * IOS denied statuses
     *
     * @var array
     */
    protected $deniedStatuses = array(
        self::IOS_DENIED_NOT_FOUND,
        self::IOS_DENIED_CARD_NOTAUTHORIZED,
        self::IOS_DENIED_INVALID
    );

    /**
     * Get gateway name
     *
     * @return string
     */
    public function getName()
    {
        return self::GATEWAY_NAME;
    }

    /**
     * Get merchant id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    /**
     * Set merchant id
     *
     * @param string $value
     * @return $this
     */
    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    /**
     * Get secret key
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->getParameter('secretKey');
    }

    /**
     * Set secret key
     *
     * @param string $value
     * @return $this
     */
    public function setSecretKey($value)
    {
        return $this->setParameter('secretKey', $value);
    }

    /**
     * Get live url
     *
     * @return string
     */
    public function getLiveUrl()
    {
        return $this->getParameter('liveUrl');
    }

    /**
     * Set live url
     *
     * @param string $value
     * @return string
     */
    public function setLiveUrl($value)
    {
        return $this->setParameter('liveUrl', $value);
    }

    /**
     * Get sandbox url
     *
     * @return string
     */
    public function getSandboxUrl()
    {
        return $this->getParameter('sandboxUrl');
    }

    /**
     * Set sandbox url
     *
     * @param string $value
     * @return string
     */
    public function setSandboxUrl($value)
    {
        return $this->setParameter('sandboxUrl', $value);
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->getParameter('country');
    }

    /**
     * Set country
     *
     * @param string $value
     * @return $this
     */
    public function setCountry($value)
    {
        return $this->setParameter('country', $value);
    }

    /**
     * Get payment method type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return self::PAYU_METHOD_CCVISAMC;
    }

    /**
     * Get auto mode
     *
     * @return mixed
     */
    public function getAutoMode()
    {
        return $this->getParameter('autoMode');
    }

    /**
     * Set auto mode
     *  - redirect customers straight to the card details page (skipping the billing/delivery screens)
     *
     * @param bool $value
     * @return $this
     */
    public function setAutoMode($value)
    {
        return $this->setParameter('autoMode', $value);
    }

    /**
     * Get timeout
     *
     * @return string
     */
    public function getTimeout()
    {
        return $this->getParameter('timeout');
    }

    /**
     * Set timeout
     *
     * @param string $value
     * @return $this
     */
    public function setTimeout($value)
    {
        return $this->setParameter('timeout', $value);
    }

    /**
     * Get timeout url
     *
     * @return string
     */
    public function getTimeoutUrl()
    {
        return $this->getParameter('timeout_url');
    }

    /**
     * Set timeout url
     *
     * @param string $value
     * @return $this
     */
    public function setTimeoutUrl($value)
    {
        return $this->setParameter('timeout_url', $value);
    }

    /**
     * Get the request return URL
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->getParameter('returnUrl');
    }

    /**
     * Sets the request return URL.
     *
     * @param string $value
     * @return $this
     */
    public function setReturnUrl($value)
    {
        return $this->setParameter('returnUrl', $value);
    }

    /**
     * Get default parameters
     *
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'MERCHANT' => '',
            'PAY_METHOD' => '',
            'AUTOMODE' => '',
            'TESTORDER' => ''
        );
    }

    /**
     * @param array $parameters
     * @return \Omnipay\PayU\Message\PurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PayUIntl\Message\PurchaseRequest', $parameters);
    }
}
