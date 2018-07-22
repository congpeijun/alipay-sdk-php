<?php
/**
 * ALIPAY API: alipay.exsc.user.currentsign.get request
 *
 * @author auto create
 * @since  1.0, 2017-03-29 17:12:42
 */

namespace Alipay\Request;

class AlipayExscUserCurrentsignGetRequest extends AbstractAlipayRequest
{

    /**
     * 支付宝 cif的accountNo 格式：支付宝userId+0156
     **/
    private $alipayId;

    private $apiParas = array();
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion = "1.0";
    private $notifyUrl;
    private $returnUrl;
    

    
    public function setAlipayId($alipayId)
    {
        $this->alipayId = $alipayId;
        $this->apiParas["alipay_id"] = $alipayId;
    }

    public function getAlipayId()
    {
        return $this->alipayId;
    }

    public function getApiMethodName()
    {
        return "alipay.exsc.user.currentsign.get";
    }

    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }

    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function getTerminalType()
    {
        return $this->terminalType;
    }

    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
    }

    public function getTerminalInfo()
    {
        return $this->terminalInfo;
    }

    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
    }

    public function getProdCode()
    {
        return $this->prodCode;
    }

    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;
    }

    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function getApiVersion()
    {
        return $this->apiVersion;
    }
}
