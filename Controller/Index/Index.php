<?php
namespace Space48\HtmlSitemap\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;

    protected $resultForwardFactory;

    protected $sitemapHelper;

    public function __construct(
        Context $context,
        ForwardFactory $resultForwardFactory,
        PageFactory $resultPageFactory,
        \Space48\HtmlSitemap\Helper\Data $sitemapHelper
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->resultForwardFactory = $resultForwardFactory;
        $this->sitemapHelper = $sitemapHelper;

        parent::__construct($context);
    }

    public function execute()
    {
        if (!$this->sitemapHelper->isEnabled()) {
            return $this->resultForwardFactory->create()->forward('noroute');
        }

        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__("Sitemap"));
        $resultPage->getConfig()->setDescription(__("Can't find what you're looking for? Use our sitemap to navigate to our site's pages and categories."));
        $resultPage->getConfig()->setKeywords("sitemap");

        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}