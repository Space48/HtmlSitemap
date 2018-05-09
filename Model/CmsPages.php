<?php
namespace Space48\HtmlSitemap\Model;

use Magento\Cms\Api\PageRepositoryInterface;
use Magento\Cms\Model\Page;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Store\Model\Store;
use Magento\Store\Model\StoreManagerInterface;

class CmsPages
{
    /**
     * @var \Magento\Cms\Api\PageRepositoryInterface
     */
    private $pageRepository;
    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;
    /**
     * @var FilterBuilder
     */
    private $filterBuilder;
    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @param PageRepositoryInterface $pageRepositoryInterface
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param FilterBuilder $filterBuilder
     */
    public function __construct(
        PageRepositoryInterface $pageRepositoryInterface,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        FilterBuilder $filterBuilder,
        StoreManagerInterface $storeManager
    )
    {
        $this->pageRepository = $pageRepositoryInterface;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->filterBuilder = $filterBuilder;
        $this->storeManager = $storeManager;
    }
    /**
     * @return \Magento\Cms\Api\Data\PageInterface[]
     */
    public function getCmsPages()
    {
        $stores = [Store::DEFAULT_STORE_ID, $this->storeManager->getStore()->getId()];

        $this->searchCriteriaBuilder->addFilter('store_id', $stores, 'in');
        $this->searchCriteriaBuilder->addFilter('is_active', Page::STATUS_ENABLED);
        $this->searchCriteriaBuilder->addFilter('identifier', [Page::NOROUTE_PAGE_ID, 'service-unavailable'], 'nin');

        return $this->pageRepository->getList($this->searchCriteriaBuilder->create())->getItems();
    }
}
