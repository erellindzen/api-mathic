<?php

declare(strict_types=1);

/*
 * SplititWebApiV3Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SplititWebApiV3Lib\Models;

use SplititWebApiV3Lib\ApiHelper;
use stdClass;

class RefundSummary implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $totalAmount;

    /**
     * @var float|null
     */
    private $failedAmount;

    /**
     * @var float|null
     */
    private $succeededAmount;

    /**
     * @var float|null
     */
    private $pendingAmount;

    /**
     * Returns Total Amount.
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }

    /**
     * Sets Total Amount.
     *
     * @maps TotalAmount
     */
    public function setTotalAmount(?float $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns Failed Amount.
     */
    public function getFailedAmount(): ?float
    {
        return $this->failedAmount;
    }

    /**
     * Sets Failed Amount.
     *
     * @maps FailedAmount
     */
    public function setFailedAmount(?float $failedAmount): void
    {
        $this->failedAmount = $failedAmount;
    }

    /**
     * Returns Succeeded Amount.
     */
    public function getSucceededAmount(): ?float
    {
        return $this->succeededAmount;
    }

    /**
     * Sets Succeeded Amount.
     *
     * @maps SucceededAmount
     */
    public function setSucceededAmount(?float $succeededAmount): void
    {
        $this->succeededAmount = $succeededAmount;
    }

    /**
     * Returns Pending Amount.
     */
    public function getPendingAmount(): ?float
    {
        return $this->pendingAmount;
    }

    /**
     * Sets Pending Amount.
     *
     * @maps PendingAmount
     */
    public function setPendingAmount(?float $pendingAmount): void
    {
        $this->pendingAmount = $pendingAmount;
    }

    /**
     * Converts the RefundSummary object to a human-readable string representation.
     *
     * @return string The string representation of the RefundSummary object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'RefundSummary',
            [
                'totalAmount' => $this->totalAmount,
                'failedAmount' => $this->failedAmount,
                'succeededAmount' => $this->succeededAmount,
                'pendingAmount' => $this->pendingAmount
            ]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->totalAmount)) {
            $json['TotalAmount']     = $this->totalAmount;
        }
        if (isset($this->failedAmount)) {
            $json['FailedAmount']    = $this->failedAmount;
        }
        if (isset($this->succeededAmount)) {
            $json['SucceededAmount'] = $this->succeededAmount;
        }
        if (isset($this->pendingAmount)) {
            $json['PendingAmount']   = $this->pendingAmount;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
