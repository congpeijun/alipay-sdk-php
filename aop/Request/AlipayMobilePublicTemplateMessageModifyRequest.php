<?php
/**
 * ALIPAY API: alipay.mobile.public.template.message.modify request
 *
 * @author auto create
 * @since  1.0, 2017-04-14 20:26:03
 */

namespace Alipay\Request;

class AlipayMobilePublicTemplateMessageModifyRequest extends AbstractAlipayRequest
{

    /**
     * 模板id
     **/
    private $templateId;
    
    /**
     * 行业设置
     **/
    private $tradeSetting;

    private $apiParas = array();
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion = "1.0";
    private $notifyUrl;
    private $returnUrl;
    

    
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        $this->apiParas["template_id"] = $templateId;
    }

    public function getTemplateId()
    {
        return $this->templateId;
    }

    public function setTradeSetting($tradeSetting)
    {
        $this->tradeSetting = $tradeSetting;
        $this->apiParas["trade_setting"] = $tradeSetting;
    }

    public function getTradeSetting()
    {
        return $this->tradeSetting;
    }

    public function getApiMethodName()
    {
        return "alipay.mobile.public.template.message.modify";
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
