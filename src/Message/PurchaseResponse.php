<?php
/**
 * PayU International Purchase Response
 */
namespace Omnipay\PayuIntl\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;
use Omnipay\Common\Message\RequestInterface;
use Omnipay\PayUIntl\Gateway;

/**
 * Class PurchaseResponse
 * @package Omnipay\PayuIntl\Message
 *
 * @author Valentin Sandu <valentin.sandu@innobyte.com>
 */
class PurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{
    /**
     * Redirect url
     *
     * @var string
     */
    protected $redirectUrl;

    /**
     * Construct
     *
     * @param RequestInterface $request
     * @param mixed $data
     * @param $redirectUrl
     */
    public function __construct(RequestInterface $request, $data, $redirectUrl)
    {
        parent::__construct($request, $data);

        $this->redirectUrl = $redirectUrl;
    }

    /**
     * Get the initiating request object.
     *
     * @return PurchaseRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Check if request is successful
     *
     * @return bool
     */
    public function isSuccessful()
    {
        return false;
    }

    /**
     * Check if redirect
     *
     * @return bool
     */
    public function isRedirect()
    {
        return true;
    }

    /**
     * Get redirect url
     *
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->getRequest()->getGatewayUrl();
    }

    /**
     * Get redirect method
     *
     * @return string
     */
    public function getRedirectMethod()
    {
        return Gateway::REDIRECT_METHOD;
    }

    /**
     * Get redirect data
     *
     * @return mixed
     */
    public function getRedirectData()
    {
        return $this->data;
    }
}
