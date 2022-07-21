<?php

 namespace Assignment2\Meghashree\Api\Data;

 use Magento\Framework\Api\SearchResultsInterface;

interface DataSearchResultInterface extends SearchResultsInterface
{
    /**
     * Getitems
     *
     * @return \Assignment2\Meghashree\Api\Data\DataInterface[]
     */
    public function getItems();

    /**
     * Setitems
     *
     * @param array $items
     * @return Assignment2\Meghashree\Api\Data\DataInterface[]
     */
    public function setItems(array $items);
}
