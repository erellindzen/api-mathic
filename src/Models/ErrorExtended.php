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

class ErrorExtended implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var string|null
     */
    private $additionalInfo;

    /**
     * @var array<string,string>|null
     */
    private $extraData;

    /**
     * Returns Code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     *
     * @maps Code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps Message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Additional Info.
     */
    public function getAdditionalInfo(): ?string
    {
        return $this->additionalInfo;
    }

    /**
     * Sets Additional Info.
     *
     * @maps AdditionalInfo
     */
    public function setAdditionalInfo(?string $additionalInfo): void
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * Returns Extra Data.
     *
     * @return array<string,string>|null
     */
    public function getExtraData(): ?array
    {
        return $this->extraData;
    }

    /**
     * Sets Extra Data.
     *
     * @maps ExtraData
     *
     * @param array<string,string>|null $extraData
     */
    public function setExtraData(?array $extraData): void
    {
        $this->extraData = $extraData;
    }

    /**
     * Converts the ErrorExtended object to a human-readable string representation.
     *
     * @return string The string representation of the ErrorExtended object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ErrorExtended',
            [
                'code' => $this->code,
                'message' => $this->message,
                'additionalInfo' => $this->additionalInfo,
                'extraData' => $this->extraData
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
        if (isset($this->code)) {
            $json['Code']           = $this->code;
        }
        if (isset($this->message)) {
            $json['Message']        = $this->message;
        }
        if (isset($this->additionalInfo)) {
            $json['AdditionalInfo'] = $this->additionalInfo;
        }
        if (isset($this->extraData)) {
            $json['ExtraData']      = $this->extraData;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
