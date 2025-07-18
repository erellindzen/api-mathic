<?php

declare(strict_types=1);

/*
 * SplititWebApiV3Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SplititWebApiV3Lib\Models\Builders;

use Core\Utils\CoreHelper;
use SplititWebApiV3Lib\Models\PaymentInfo;

/**
 * Builder for model PaymentInfo
 *
 * @see PaymentInfo
 */
class PaymentInfoBuilder
{
    /**
     * @var PaymentInfo
     */
    private $instance;

    private function __construct(PaymentInfo $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Info Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentInfo());
    }

    /**
     * Sets Card Bin field.
     *
     * @param string|null $value
     */
    public function cardBin(?string $value): self
    {
        $this->instance->setCardBin($value);
        return $this;
    }

    /**
     * Sets Card Type field.
     *
     * @param string|null $value
     */
    public function cardType(?string $value): self
    {
        $this->instance->setCardType($value);
        return $this;
    }

    /**
     * Initializes a new Payment Info object.
     */
    public function build(): PaymentInfo
    {
        return CoreHelper::clone($this->instance);
    }
}
