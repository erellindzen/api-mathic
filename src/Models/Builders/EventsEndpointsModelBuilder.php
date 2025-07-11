<?php

declare(strict_types=1);

/*
 * SplititWebApiV3Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SplititWebApiV3Lib\Models\Builders;

use Core\Utils\CoreHelper;
use SplititWebApiV3Lib\Models\EventsEndpointsModel;

/**
 * Builder for model EventsEndpointsModel
 *
 * @see EventsEndpointsModel
 */
class EventsEndpointsModelBuilder
{
    /**
     * @var EventsEndpointsModel
     */
    private $instance;

    private function __construct(EventsEndpointsModel $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Events Endpoints Model Builder object.
     */
    public static function init(): self
    {
        return new self(new EventsEndpointsModel());
    }

    /**
     * Sets Create Succeeded field.
     *
     * @param string|null $value
     */
    public function createSucceeded(?string $value): self
    {
        $this->instance->setCreateSucceeded($value);
        return $this;
    }

    /**
     * Initializes a new Events Endpoints Model object.
     */
    public function build(): EventsEndpointsModel
    {
        return CoreHelper::clone($this->instance);
    }
}
