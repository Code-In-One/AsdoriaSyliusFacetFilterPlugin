<?php

declare(strict_types=1);


namespace Asdoria\SyliusFacetFilterPlugin\Model\Aware;


/**
 * Interface SortableAwareInterface
 * @package Asdoria\SyliusFacetFilterPlugin\Model\Aware
 *
 * @author  Philippe Vesin <pve.asdoria@gmail.com>
 */
interface SortableAwareInterface
{
    /**
     * @return int
     */
    public function getPosition(): ?int;

    /**
     * @param int $position
     */
    public function setPosition(?int $position): void;
}
