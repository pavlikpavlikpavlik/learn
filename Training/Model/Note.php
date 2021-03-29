<?php
/**
 * Codifi_Training
 *
 * @copyright   Copyright (c) 2021 Codifi
 * @author      Pavel Zelenevich <pzelenevich@codifi.me>
 */

declare(strict_types=1);

namespace Codifi\Training\Model;

use Codifi\Training\Api\Data\NoteInterface;
use Magento\Framework\Model\AbstractExtensibleModel;
use Magento\Tests\NamingConvention\true\string;

/**
 * Class Note
 * @package Codifi\Training\Model
 */
class Note extends AbstractExtensibleModel implements NoteInterface
{
    /**
     * Note construct.
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\CustomerNote::class);
    }

    /**
     * Get note id.
     *
     * @return int
     */
    public function getNoteId() : int
    {
        return $this->_getData(self::NOTE_ID);
    }

    /**
     * Set note id.
     *
     * @param int $noteId
     * @return void
     */
    public function setNoteId($noteId) : void
    {
        $this->setData([self::NOTE_ID => $noteId]);
    }

    /**
     * Get note.
     *
     * @return string
     */
    public function getNoteText() : string
    {
        return $this->_getData(self::NOTE);
    }

    /**
     * Set note.
     *
     * @param string $noteText
     * @return void
     */
    public function setNoteText($noteText) : void
    {
        $this->setData([self::NOTE => $noteText]);
    }

    /**
     * Get autocomplete value.
     *
     * @return int
     */
    public function getAutocomplete() : int
    {
        return $this->_getData(self::AUTOCOMPLETE);
    }

    /**
     * Set autocomplete value.
     *
     * @param $autocomplete
     * @return void
     */
    public function setAutocomplete($autocomplete) : void
    {
        $this->setData([self::AUTOCOMPLETE => $autocomplete]);
    }

    /**
     * Get customer id.
     *
     * @return int
     */
    public function getCustomerId() : int
    {
        return $this->_getData(self::CUSTOMER_ID);
    }

    /**
     * Set customer id.
     *
     * @param $customerId
     * @return void
     */
    public function setCustomerId($customerId) : void
    {
        $this->setData([self::CUSTOMER_ID => $customerId]);
    }

    /**
     * Get created at.
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->_getData(self::CREATED_AT);
    }

    /**
     * Set created at.
     *
     * @param string $createdAt
     * @return void
     */
    public function setCreatedAt(string $createdAt) : void
    {
        $this->setData([self::CREATED_AT => $createdAt]);
    }

    /**
     * Get created by.
     *
     * @return string
     */
    public function getCreatedBy() : string
    {
        return $this->_getData(self::CREATED_BY);
    }

    /**
     * Set created by.
     *
     * @param string $createdBy
     * @return void
     */
    public function setCreatedBy(string $createdBy) : void
    {
        $this->setData([self::CREATED_BY => $createdBy]);
    }

    /**
     * Get updated at.
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->_getData(self::UPDATED_AT);
    }

    /**
     * Set updated at.
     *
     * @param string $updatedAt
     * @return void
     */
    public function setUpdatedAt(string $updatedAt) : void
    {
        $this->setData([self::UPDATED_AT => $updatedAt]);
    }

    /**
     * Get updated by.
     *
     * @return string
     */
    public function getUpdatedBy() : string
    {
        return $this->_getData(self::UPDATED_BY);
    }

    /**
     * Set updated by.
     *
     * @param string $updatedBy
     * @return void
     */
    public function setUpdatedBy(string $updatedBy) : void
    {
        $this->setData([self::UPDATED_BY => $updatedBy]);
    }
}


