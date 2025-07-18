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

class ThreeDsRedirectDataV3 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $url;

    /**
     * @var string|null
     */
    private $verb;

    /**
     * @var array<string,string>|null
     */
    private $params;

    /**
     * @var string|null
     */
    private $clientRedirectUrl;

    /**
     * Returns Url.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     *
     * @maps Url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Verb.
     */
    public function getVerb(): ?string
    {
        return $this->verb;
    }

    /**
     * Sets Verb.
     *
     * @maps Verb
     */
    public function setVerb(?string $verb): void
    {
        $this->verb = $verb;
    }

    /**
     * Returns Params.
     *
     * @return array<string,string>|null
     */
    public function getParams(): ?array
    {
        return $this->params;
    }

    /**
     * Sets Params.
     *
     * @maps Params
     *
     * @param array<string,string>|null $params
     */
    public function setParams(?array $params): void
    {
        $this->params = $params;
    }

    /**
     * Returns Client Redirect Url.
     */
    public function getClientRedirectUrl(): ?string
    {
        return $this->clientRedirectUrl;
    }

    /**
     * Sets Client Redirect Url.
     *
     * @maps ClientRedirectUrl
     */
    public function setClientRedirectUrl(?string $clientRedirectUrl): void
    {
        $this->clientRedirectUrl = $clientRedirectUrl;
    }

    /**
     * Converts the ThreeDsRedirectDataV3 object to a human-readable string representation.
     *
     * @return string The string representation of the ThreeDsRedirectDataV3 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ThreeDsRedirectDataV3',
            [
                'url' => $this->url,
                'verb' => $this->verb,
                'params' => $this->params,
                'clientRedirectUrl' => $this->clientRedirectUrl
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
        if (isset($this->url)) {
            $json['Url']               = $this->url;
        }
        if (isset($this->verb)) {
            $json['Verb']              = $this->verb;
        }
        if (isset($this->params)) {
            $json['Params']            = $this->params;
        }
        if (isset($this->clientRedirectUrl)) {
            $json['ClientRedirectUrl'] = $this->clientRedirectUrl;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
