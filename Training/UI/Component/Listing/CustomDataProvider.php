<?php
/**
 * Codifi_Training
 *
 * @copyright   Copyright (c) 2021 Codifi
 * @author      Pavel Zelenevich <pzelenevich@codifi.me>
 */

declare(strict_types=1);

namespace Codifi\Training\UI\Component\Listing;

use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\Search\ReportingInterface;
use Magento\Framework\Api\Search\SearchCriteriaBuilder;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider;
use Codifi\Training\Model\ResourceModel\CustomerNote\CollectionFactory;
use Codifi\Training\Model\ResourceModel\CustomerNote\Collection;

/**
 * Class CustomDataProvider
 * @package Codifi\Training\UI\Component\Listing
 */
class CustomDataProvider extends DataProvider
{
    /**
     * Customer note collection factory
     *
     * @var CollectionFactory
     */
    protected $collectionFactory;

    public function __construct
    (
        CollectionFactory $collectionFactory,
        $name, $primaryFieldName,
        $requestFieldName,
        ReportingInterface $reporting,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        RequestInterface $request,
        FilterBuilder $filterBuilder,
        array $meta = [],
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct(
            $name,
            $primaryFieldName,
            $requestFieldName,
            $reporting,
            $searchCriteriaBuilder,
            $request,
            $filterBuilder,
            $meta,
            $data
        );
    }

    /**
     * Get collection
     *
     * @return Collection
     */
    public function getCollection()
    {
        return $this->collectionFactory->create();
    }
}