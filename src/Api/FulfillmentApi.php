<?php
/**
 * FulfillmentApi
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
 * FulfillmentApi Class Doc Comment
 *
 * @package  ck/plenty-client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FulfillmentApi
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
        'restFulfillmentPicklistPickingOrderItemGet' => [
            'application/json',
        ],
        'restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet' => [
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
     * Operation restFulfillmentPicklistPickingOrderItemGet
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restFulfillmentPicklistPickingOrderItemGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \ck/plenty-client\Model\PickingOrderItem[]
     */
    public function restFulfillmentPicklistPickingOrderItemGet(
        string $contentType = self::contentTypes['restFulfillmentPicklistPickingOrderItemGet'][0]
    ): array
    {
        list($response) = $this->restFulfillmentPicklistPickingOrderItemGetWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemGetWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restFulfillmentPicklistPickingOrderItemGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \ck/plenty-client\Model\PickingOrderItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function restFulfillmentPicklistPickingOrderItemGetWithHttpInfo(
        string $contentType = self::contentTypes['restFulfillmentPicklistPickingOrderItemGet'][0]
    ): array
    {
        $request = $this->restFulfillmentPicklistPickingOrderItemGetRequest($contentType);

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
                    if ('\ck/plenty-client\Model\PickingOrderItem[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ck/plenty-client\Model\PickingOrderItem[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ck/plenty-client\Model\PickingOrderItem[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ck/plenty-client\Model\PickingOrderItem[]';
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
                        '\ck/plenty-client\Model\PickingOrderItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemGetAsync
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restFulfillmentPicklistPickingOrderItemGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function restFulfillmentPicklistPickingOrderItemGetAsync(
        string $contentType = self::contentTypes['restFulfillmentPicklistPickingOrderItemGet'][0]
    ): PromiseInterface
    {
        return $this->restFulfillmentPicklistPickingOrderItemGetAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemGetAsyncWithHttpInfo
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restFulfillmentPicklistPickingOrderItemGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function restFulfillmentPicklistPickingOrderItemGetAsyncWithHttpInfo(
        string $contentType = self::contentTypes['restFulfillmentPicklistPickingOrderItemGet'][0]
    ): PromiseInterface
    {
        $returnType = '\ck/plenty-client\Model\PickingOrderItem[]';
        $request = $this->restFulfillmentPicklistPickingOrderItemGetRequest($contentType);

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
     * Create request for operation 'restFulfillmentPicklistPickingOrderItemGet'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restFulfillmentPicklistPickingOrderItemGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function restFulfillmentPicklistPickingOrderItemGetRequest(
        string $contentType = self::contentTypes['restFulfillmentPicklistPickingOrderItemGet'][0]
    ): Request
    {


        $resourcePath = '/rest/fulfillment/picklist/picking_order_item';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
     * Operation restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet
     *
     * @param  int $picking_order_item_id The PickingOrderItemId (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \ck/plenty-client\Model\PickingOrderItem
     */
    public function restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet(
        int $picking_order_item_id,
        string $contentType = self::contentTypes['restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'][0]
    ): \ck/plenty-client\Model\PickingOrderItem
    {
        list($response) = $this->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetWithHttpInfo($picking_order_item_id, $contentType);
        return $response;
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetWithHttpInfo
     *
     * @param  int $picking_order_item_id The PickingOrderItemId (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \ck/plenty-client\Model\PickingOrderItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetWithHttpInfo(
        int $picking_order_item_id,
        string $contentType = self::contentTypes['restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'][0]
    ): array
    {
        $request = $this->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetRequest($picking_order_item_id, $contentType);

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
                    if ('\ck/plenty-client\Model\PickingOrderItem' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\ck/plenty-client\Model\PickingOrderItem' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ck/plenty-client\Model\PickingOrderItem', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ck/plenty-client\Model\PickingOrderItem';
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
                        '\ck/plenty-client\Model\PickingOrderItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetAsync
     *
     * @param  int $picking_order_item_id The PickingOrderItemId (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetAsync(
        int $picking_order_item_id,
        string $contentType = self::contentTypes['restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'][0]
    ): PromiseInterface
    {
        return $this->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetAsyncWithHttpInfo($picking_order_item_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetAsyncWithHttpInfo
     *
     * @param  int $picking_order_item_id The PickingOrderItemId (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetAsyncWithHttpInfo(
        $picking_order_item_id,
        string $contentType = self::contentTypes['restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'][0]
    ): PromiseInterface
    {
        $returnType = '\ck/plenty-client\Model\PickingOrderItem';
        $request = $this->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetRequest($picking_order_item_id, $contentType);

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
     * Create request for operation 'restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'
     *
     * @param  int $picking_order_item_id The PickingOrderItemId (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetRequest(
        $picking_order_item_id,
        string $contentType = self::contentTypes['restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'][0]
    ): Request
    {

        // verify the required parameter 'picking_order_item_id' is set
        if ($picking_order_item_id === null || (is_array($picking_order_item_id) && count($picking_order_item_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $picking_order_item_id when calling restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'
            );
        }


        $resourcePath = '/rest/fulfillment/picklist/picking_order_item/{pickingOrderItemId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($picking_order_item_id !== null) {
            $resourcePath = str_replace(
                '{' . 'pickingOrderItemId' . '}',
                ObjectSerializer::toPathValue($picking_order_item_id),
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
