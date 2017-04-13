<?php
namespace Space48\HtmlSitemap\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;
use Space48\HtmlSitemap\Model\CmsPages;

class Cms extends Template
{
    /**
     * @var CmsPages
     */
    private $cmsPages;
    /**
     * @param Context $context
     * @param CmsPages $cmsPages
     */
    public function __construct(
        Context $context,
        CmsPages $cmsPages
    )
    {
        $this->cmsPages = $cmsPages;
        parent::__construct($context);
    }
    /**
     * @return \Magento\Cms\Api\Data\PageInterface[]
     */
    public function getCmsPages()
    {
        return $this->cmsPages->getCmsPages();
    }
}