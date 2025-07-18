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

class InstallmentPlanUpdateResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $refOrderNumber;

    /**
     * @var string|null
     */
    private $installmentPlanNumber;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $shippingStatus;

    /**
     * @var float|null
     */
    private $newAmount;

    /**
     * @param string $status
     * @param string $shippingStatus
     */
    public function __construct(string $status, string $shippingStatus)
    {
        $this->status = $status;
        $this->shippingStatus = $shippingStatus;
    }

    /**
     * Returns Ref Order Number.
     */
    public function getRefOrderNumber(): ?string
    {
        return $this->refOrderNumber;
    }

    /**
     * Sets Ref Order Number.
     *
     * @maps RefOrderNumber
     */
    public function setRefOrderNumber(?string $refOrderNumber): void
    {
        $this->refOrderNumber = $refOrderNumber;
    }

    /**
     * Returns Installment Plan Number.
     */
    public function getInstallmentPlanNumber(): ?string
    {
        return $this->installmentPlanNumber;
    }

    /**
     * Sets Installment Plan Number.
     *
     * @maps InstallmentPlanNumber
     */
    public function setInstallmentPlanNumber(?string $installmentPlanNumber): void
    {
        $this->installmentPlanNumber = $installmentPlanNumber;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps Status
     * @factory \SplititWebApiV3Lib\Models\PlanStatusEnum::checkValue
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Shipping Status.
     */
    public function getShippingStatus(): string
    {
        return $this->shippingStatus;
    }

    /**
     * Sets Shipping Status.
     *
     * @required
     * @maps ShippingStatus
     * @factory \SplititWebApiV3Lib\Models\ShippingStatusEnum::checkValue
     */
    public function setShippingStatus(string $shippingStatus): void
    {
        $this->shippingStatus = $shippingStatus;
    }

    /**
     * Returns New Amount.
     */
    public function getNewAmount(): ?float
    {
        return $this->newAmount;
    }

    /**
     * Sets New Amount.
     *
     * @maps NewAmount
     */
    public function setNewAmount(?float $newAmount): void
    {
        $this->newAmount = $newAmount;
    }

    /**
     * Converts the InstallmentPlanUpdateResponse object to a human-readable string representation.
     *
     * @return string The string representation of the InstallmentPlanUpdateResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'InstallmentPlanUpdateResponse',
            [
                'refOrderNumber' => $this->refOrderNumber,
                'installmentPlanNumber' => $this->installmentPlanNumber,
                'status' => $this->status,
                'shippingStatus' => $this->shippingStatus,
                'newAmount' => $this->newAmount
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
        if (isset($this->refOrderNumber)) {
            $json['RefOrderNumber']        = $this->refOrderNumber;
        }
        if (isset($this->installmentPlanNumber)) {
            $json['InstallmentPlanNumber'] = $this->installmentPlanNumber;
        }
        $json['Status']                    = PlanStatusEnum::checkValue($this->status);
        $json['ShippingStatus']            = ShippingStatusEnum::checkValue($this->shippingStatus);
        if (isset($this->newAmount)) {
            $json['NewAmount']             = $this->newAmount;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
