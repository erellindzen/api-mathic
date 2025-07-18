<?php

declare(strict_types=1);

/*
 * SplititWebApiV3Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SplititWebApiV3Lib\Exceptions;

use SplititWebApiV3Lib\ApiHelper;

/**
 * OAuth 2 Authorization endpoint exception.
 */
class OAuthProviderException extends ApiException
{
    /**
     * @var string
     */
    private $error;

    /**
     * @var string|null
     */
    private $errorDescription;

    /**
     * @var string|null
     */
    private $errorUri;

    /**
     * @param string $reason
     * @param \SplititWebApiV3Lib\Http\HttpRequest $request
     * @param \SplititWebApiV3Lib\Http\HttpResponse $response
     * @param string $error
     */
    public function __construct(
        string $reason,
        \SplititWebApiV3Lib\Http\HttpRequest $request,
        \SplititWebApiV3Lib\Http\HttpResponse $response,
        string $error
    ) {
        parent::__construct($reason, $request, $response);
        $this->error = $error;
    }

    /**
     * Returns Error.
     * Gets or sets error code.
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * Sets Error.
     * Gets or sets error code.
     *
     * @required
     * @maps error
     * @factory \SplititWebApiV3Lib\Models\OAuthProviderErrorEnum::checkValue
     */
    public function setError(string $error): void
    {
        $this->error = $error;
    }

    /**
     * Returns Error Description.
     * Gets or sets human-readable text providing additional information on error.
     * Used to assist the client developer in understanding the error that occurred.
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }

    /**
     * Sets Error Description.
     * Gets or sets human-readable text providing additional information on error.
     * Used to assist the client developer in understanding the error that occurred.
     *
     * @maps error_description
     */
    public function setErrorDescription(?string $errorDescription): void
    {
        $this->errorDescription = $errorDescription;
    }

    /**
     * Returns Error Uri.
     * Gets or sets a URI identifying a human-readable web page with information about the error, used to
     * provide the client developer with additional information about the error.
     */
    public function getErrorUri(): ?string
    {
        return $this->errorUri;
    }

    /**
     * Sets Error Uri.
     * Gets or sets a URI identifying a human-readable web page with information about the error, used to
     * provide the client developer with additional information about the error.
     *
     * @maps error_uri
     */
    public function setErrorUri(?string $errorUri): void
    {
        $this->errorUri = $errorUri;
    }

    /**
     * Converts the OAuthProviderException object to a human-readable string representation.
     *
     * @return string The string representation of the OAuthProviderException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'OAuthProviderException',
            ['error' => $this->error, 'errorDescription' => $this->errorDescription, 'errorUri' => $this->errorUri],
            parent::__toString()
        );
    }
}
