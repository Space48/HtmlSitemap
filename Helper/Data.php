<?php

namespace Space48\HtmlSitemap\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    const XML_PATH = 's48_htmlsitemap/settings/';

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    public function isEnabled() {
        return $this->scopeConfig->isSetFlag(self::XML_PATH."enabled", \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

}