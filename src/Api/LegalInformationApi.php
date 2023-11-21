<?php
/**
 * LegalInformationApi
 * PHP version 8.1
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * plentymarkets REST-API
 *
 * The plentymarkets REST API expands the functionality of the plentymarkets CMS and allows access to resources, i.e. data records, via unique URI paths
 *
 * The version of the OpenAPI document: 1.0.0
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ck/plenty-client\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use ck/plenty-client\ApiException;
use ck/plenty-client\Configuration;
use ck/plenty-client\HeaderSelector;
use ck/plenty-client\ObjectSerializer;

/**
 * LegalInformationApi Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LegalInformationApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'restLegalinformationPlentyIdLangTypeGet' => [
            'application/json',
        ],
        'restLegalinformationPlentyIdLangTypePut' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation restLegalinformationPlentyIdLangTypeGet
     *
     * Get legal information of an online store
     *
     * @param  int $plenty_id The plenty ID of the online store. (required)
     * @param  string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English (required)
     * @param  int $type type (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restLegalinformationPlentyIdLangTypeGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \ck/plenty-client\Model\LegalInformation
     */
    public function restLegalinformationPlentyIdLangTypeGet(
        int $plenty_id,
        string $lang,
        int $type,
        string $contentType = self::contentTypes['restLegalinformationPlentyIdLangTypeGet'][0]
    ): \ck/plenty-client\Model\LegalInformation
    {
        list($response) = $this->restLegalinformationPlentyIdLangTypeGetWithHttpInfo($plenty_id, $lang, $type, $contentType);
        return $response;
    }

    /**
     * Operation restLegalinformationPlentyIdLangTypeGetWithHttpInfo
     *
     * Get legal information of an online store
     *
     * @param  int $plenty_id The plenty ID of the online store. (required)
     * @param  string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English (required)
     * @param  int $type (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restLegalinformationPlentyIdLangTypeGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \ck/plenty-client\Model\LegalInformation, HTTP status code, HTTP response headers (array of strings)
     */
    public function restLegalinformationPlentyIdLangTypeGetWithHttpInfo(
        int $plenty_id,
        string $lang,
        int $type,
        string $contentType = self::contentTypes['restLegalinformationPlentyIdLangTypeGet'][0]
    ): array
    {
        $request = $this->restLegalinformationPlentyIdLangTypeGetRequest($plenty_id, $lang, $type, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\ck/plenty-client\Model\LegalInformation' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ck/plenty-client\Model\LegalInformation' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ck/plenty-client\Model\LegalInformation', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ck/plenty-client\Model\LegalInformation';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ck/plenty-client\Model\LegalInformation',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation restLegalinformationPlentyIdLangTypeGetAsync
     *
     * Get legal information of an online store
     *
     * @param  int $plenty_id The plenty ID of the online store. (required)
     * @param  string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English (required)
     * @param  int $type (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restLegalinformationPlentyIdLangTypeGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function restLegalinformationPlentyIdLangTypeGetAsync(
        int $plenty_id,
        string $lang,
        int $type,
        string $contentType = self::contentTypes['restLegalinformationPlentyIdLangTypeGet'][0]
    ): PromiseInterface
    {
        return $this->restLegalinformationPlentyIdLangTypeGetAsyncWithHttpInfo($plenty_id, $lang, $type, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restLegalinformationPlentyIdLangTypeGetAsyncWithHttpInfo
     *
     * Get legal information of an online store
     *
     * @param  int $plenty_id The plenty ID of the online store. (required)
     * @param  string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English (required)
     * @param  int $type (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restLegalinformationPlentyIdLangTypeGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function restLegalinformationPlentyIdLangTypeGetAsyncWithHttpInfo(
        $plenty_id,
        $lang,
        $type,
        string $contentType = self::contentTypes['restLegalinformationPlentyIdLangTypeGet'][0]
    ): PromiseInterface
    {
        $returnType = '\ck/plenty-client\Model\LegalInformation';
        $request = $this->restLegalinformationPlentyIdLangTypeGetRequest($plenty_id, $lang, $type, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'restLegalinformationPlentyIdLangTypeGet'
     *
     * @param  int $plenty_id The plenty ID of the online store. (required)
     * @param  string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English (required)
     * @param  int $type (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restLegalinformationPlentyIdLangTypeGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function restLegalinformationPlentyIdLangTypeGetRequest(
        $plenty_id,
        $lang,
        $type,
        string $contentType = self::contentTypes['restLegalinformationPlentyIdLangTypeGet'][0]
    ): Request
    {

        // verify the required parameter 'plenty_id' is set
        if ($plenty_id === null || (is_array($plenty_id) && count($plenty_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $plenty_id when calling restLegalinformationPlentyIdLangTypeGet'
            );
        }

        // verify the required parameter 'lang' is set
        if ($lang === null || (is_array($lang) && count($lang) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $lang when calling restLegalinformationPlentyIdLangTypeGet'
            );
        }

        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $type when calling restLegalinformationPlentyIdLangTypeGet'
            );
        }


        $resourcePath = '/rest/legalinformation/{plentyId}/{lang}/{type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($plenty_id !== null) {
            $resourcePath = str_replace(
                '{' . 'plentyId' . '}',
                ObjectSerializer::toPathValue($plenty_id),
                $resourcePath
            );
        }
        // path params
        if ($lang !== null) {
            $resourcePath = str_replace(
                '{' . 'lang' . '}',
                ObjectSerializer::toPathValue($lang),
                $resourcePath
            );
        }
        // path params
        if ($type !== null) {
            $resourcePath = str_replace(
                '{' . 'type' . '}',
                ObjectSerializer::toPathValue($type),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['*/*', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation restLegalinformationPlentyIdLangTypePut
     *
     * Save legal information for an online store
     *
     * @param  int $plenty_id The plenty ID of the online store (required)
     * @param  string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English (required)
     * @param  int $type type (required)
     * @param  \ck/plenty-client\Model\RestLegalinformationPlentyIdLangTypePutRequest|null $_rest_legalinformation_plenty_id_lang_type _rest_legalinformation_plenty_id_lang_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restLegalinformationPlentyIdLangTypePut'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \ck/plenty-client\Model\LegalInformation
     */
    public function restLegalinformationPlentyIdLangTypePut(
        int $plenty_id,
        string $lang,
        int $type,
        ?\ck/plenty-client\Model\RestLegalinformationPlentyIdLangTypePutRequest $_rest_legalinformation_plenty_id_lang_type = null,
        string $contentType = self::contentTypes['restLegalinformationPlentyIdLangTypePut'][0]
    ): \ck/plenty-client\Model\LegalInformation
    {
        list($response) = $this->restLegalinformationPlentyIdLangTypePutWithHttpInfo($plenty_id, $lang, $type, $_rest_legalinformation_plenty_id_lang_type, $contentType);
        return $response;
    }

    /**
     * Operation restLegalinformationPlentyIdLangTypePutWithHttpInfo
     *
     * Save legal information for an online store
     *
     * @param  int $plenty_id The plenty ID of the online store (required)
     * @param  string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English (required)
     * @param  int $type (required)
     * @param  \ck/plenty-client\Model\RestLegalinformationPlentyIdLangTypePutRequest|null $_rest_legalinformation_plenty_id_lang_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restLegalinformationPlentyIdLangTypePut'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \ck/plenty-client\Model\LegalInformation, HTTP status code, HTTP response headers (array of strings)
     */
    public function restLegalinformationPlentyIdLangTypePutWithHttpInfo(
        int $plenty_id,
        string $lang,
        int $type,
        ?\ck/plenty-client\Model\RestLegalinformationPlentyIdLangTypePutRequest $_rest_legalinformation_plenty_id_lang_type = null,
        string $contentType = self::contentTypes['restLegalinformationPlentyIdLangTypePut'][0]
    ): array
    {
        $request = $this->restLegalinformationPlentyIdLangTypePutRequest($plenty_id, $lang, $type, $_rest_legalinformation_plenty_id_lang_type, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\ck/plenty-client\Model\LegalInformation' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ck/plenty-client\Model\LegalInformation' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ck/plenty-client\Model\LegalInformation', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ck/plenty-client\Model\LegalInformation';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ck/plenty-client\Model\LegalInformation',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation restLegalinformationPlentyIdLangTypePutAsync
     *
     * Save legal information for an online store
     *
     * @param  int $plenty_id The plenty ID of the online store (required)
     * @param  string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English (required)
     * @param  int $type (required)
     * @param  \ck/plenty-client\Model\RestLegalinformationPlentyIdLangTypePutRequest|null $_rest_legalinformation_plenty_id_lang_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restLegalinformationPlentyIdLangTypePut'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function restLegalinformationPlentyIdLangTypePutAsync(
        int $plenty_id,
        string $lang,
        int $type,
        ?\ck/plenty-client\Model\RestLegalinformationPlentyIdLangTypePutRequest $_rest_legalinformation_plenty_id_lang_type = null,
        string $contentType = self::contentTypes['restLegalinformationPlentyIdLangTypePut'][0]
    ): PromiseInterface
    {
        return $this->restLegalinformationPlentyIdLangTypePutAsyncWithHttpInfo($plenty_id, $lang, $type, $_rest_legalinformation_plenty_id_lang_type, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restLegalinformationPlentyIdLangTypePutAsyncWithHttpInfo
     *
     * Save legal information for an online store
     *
     * @param  int $plenty_id The plenty ID of the online store (required)
     * @param  string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English (required)
     * @param  int $type (required)
     * @param  \ck/plenty-client\Model\RestLegalinformationPlentyIdLangTypePutRequest|null $_rest_legalinformation_plenty_id_lang_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restLegalinformationPlentyIdLangTypePut'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function restLegalinformationPlentyIdLangTypePutAsyncWithHttpInfo(
        $plenty_id,
        $lang,
        $type,
        $_rest_legalinformation_plenty_id_lang_type = null,
        string $contentType = self::contentTypes['restLegalinformationPlentyIdLangTypePut'][0]
    ): PromiseInterface
    {
        $returnType = '\ck/plenty-client\Model\LegalInformation';
        $request = $this->restLegalinformationPlentyIdLangTypePutRequest($plenty_id, $lang, $type, $_rest_legalinformation_plenty_id_lang_type, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'restLegalinformationPlentyIdLangTypePut'
     *
     * @param  int $plenty_id The plenty ID of the online store (required)
     * @param  string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English (required)
     * @param  int $type (required)
     * @param  \ck/plenty-client\Model\RestLegalinformationPlentyIdLangTypePutRequest|null $_rest_legalinformation_plenty_id_lang_type (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restLegalinformationPlentyIdLangTypePut'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function restLegalinformationPlentyIdLangTypePutRequest(
        $plenty_id,
        $lang,
        $type,
        $_rest_legalinformation_plenty_id_lang_type = null,
        string $contentType = self::contentTypes['restLegalinformationPlentyIdLangTypePut'][0]
    ): Request
    {

        // verify the required parameter 'plenty_id' is set
        if ($plenty_id === null || (is_array($plenty_id) && count($plenty_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $plenty_id when calling restLegalinformationPlentyIdLangTypePut'
            );
        }

        // verify the required parameter 'lang' is set
        if ($lang === null || (is_array($lang) && count($lang) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $lang when calling restLegalinformationPlentyIdLangTypePut'
            );
        }

        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $type when calling restLegalinformationPlentyIdLangTypePut'
            );
        }



        $resourcePath = '/rest/legalinformation/{plentyId}/{lang}/{type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($plenty_id !== null) {
            $resourcePath = str_replace(
                '{' . 'plentyId' . '}',
                ObjectSerializer::toPathValue($plenty_id),
                $resourcePath
            );
        }
        // path params
        if ($lang !== null) {
            $resourcePath = str_replace(
                '{' . 'lang' . '}',
                ObjectSerializer::toPathValue($lang),
                $resourcePath
            );
        }
        // path params
        if ($type !== null) {
            $resourcePath = str_replace(
                '{' . 'type' . '}',
                ObjectSerializer::toPathValue($type),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['*/*', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($_rest_legalinformation_plenty_id_lang_type)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($_rest_legalinformation_plenty_id_lang_type));
            } else {
                $httpBody = $_rest_legalinformation_plenty_id_lang_type;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
