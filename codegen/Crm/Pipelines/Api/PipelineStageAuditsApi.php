<?php
/**
 * PipelineStageAuditsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Pipelines
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CRM Pipelines
 *
 * Pipelines represent distinct stages in a workflow, like closing a deal or servicing a support ticket. These endpoints provide access to read and modify pipelines in HubSpot. Pipelines support `deals` and `tickets` object types.  ## Pipeline ID validation  When calling endpoints that take pipelineId as a parameter, that ID must correspond to an existing, un-archived pipeline. Otherwise the request will fail with a `404 Not Found` response.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Pipelines\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use HubSpot\Client\Crm\Pipelines\ApiException;
use HubSpot\Client\Crm\Pipelines\Configuration;
use HubSpot\Client\Crm\Pipelines\HeaderSelector;
use HubSpot\Client\Crm\Pipelines\ObjectSerializer;

/**
 * PipelineStageAuditsApi Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Pipelines
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PipelineStageAuditsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
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
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAudit
     *
     * Return an audit of all changes to the pipeline stage
     *
     * @param  string $object_type object_type (required)
     * @param  string $stage_id stage_id (required)
     *
     * @throws \HubSpot\Client\Crm\Pipelines\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HubSpot\Client\Crm\Pipelines\Model\CollectionResponsePublicAuditInfoNoPaging|\HubSpot\Client\Crm\Pipelines\Model\Error
     */
    public function getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAudit($object_type, $stage_id)
    {
        list($response) = $this->getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAuditWithHttpInfo($object_type, $stage_id);
        return $response;
    }

    /**
     * Operation getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAuditWithHttpInfo
     *
     * Return an audit of all changes to the pipeline stage
     *
     * @param  string $object_type (required)
     * @param  string $stage_id (required)
     *
     * @throws \HubSpot\Client\Crm\Pipelines\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HubSpot\Client\Crm\Pipelines\Model\CollectionResponsePublicAuditInfoNoPaging|\HubSpot\Client\Crm\Pipelines\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAuditWithHttpInfo($object_type, $stage_id)
    {
        $request = $this->getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAuditRequest($object_type, $stage_id);

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
                    if ('\HubSpot\Client\Crm\Pipelines\Model\CollectionResponsePublicAuditInfoNoPaging' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Crm\Pipelines\Model\CollectionResponsePublicAuditInfoNoPaging', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\HubSpot\Client\Crm\Pipelines\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HubSpot\Client\Crm\Pipelines\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\HubSpot\Client\Crm\Pipelines\Model\CollectionResponsePublicAuditInfoNoPaging';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\HubSpot\Client\Crm\Pipelines\Model\CollectionResponsePublicAuditInfoNoPaging',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HubSpot\Client\Crm\Pipelines\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAuditAsync
     *
     * Return an audit of all changes to the pipeline stage
     *
     * @param  string $object_type (required)
     * @param  string $stage_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAuditAsync($object_type, $stage_id)
    {
        return $this->getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAuditAsyncWithHttpInfo($object_type, $stage_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAuditAsyncWithHttpInfo
     *
     * Return an audit of all changes to the pipeline stage
     *
     * @param  string $object_type (required)
     * @param  string $stage_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAuditAsyncWithHttpInfo($object_type, $stage_id)
    {
        $returnType = '\HubSpot\Client\Crm\Pipelines\Model\CollectionResponsePublicAuditInfoNoPaging';
        $request = $this->getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAuditRequest($object_type, $stage_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAudit'
     *
     * @param  string $object_type (required)
     * @param  string $stage_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAuditRequest($object_type, $stage_id)
    {
        // verify the required parameter 'object_type' is set
        if ($object_type === null || (is_array($object_type) && count($object_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $object_type when calling getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAudit'
            );
        }
        // verify the required parameter 'stage_id' is set
        if ($stage_id === null || (is_array($stage_id) && count($stage_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $stage_id when calling getCrmV3PipelinesObjectTypePipelineIdStagesStageIdAudit'
            );
        }

        $resourcePath = '/crm/v3/pipelines/{objectType}/{pipelineId}/stages/{stageId}/audit';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($object_type !== null) {
            $resourcePath = str_replace(
                '{' . 'objectType' . '}',
                ObjectSerializer::toPathValue($object_type),
                $resourcePath
            );
        }
        // path params
        if ($stage_id !== null) {
            $resourcePath = str_replace(
                '{' . 'stageId' . '}',
                ObjectSerializer::toPathValue($stage_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', '*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', '*/*'],
                []
            );
        }

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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('hapikey');
        if ($apiKey !== null) {
            $queryParams['hapikey'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
    protected function createHttpClientOption()
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
