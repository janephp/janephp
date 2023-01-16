<?php

namespace Docker\Api\Endpoint;

class PutContainerArchive extends \Docker\Api\Runtime\Client\BaseEndpoint implements \Docker\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
    * Upload a tar archive to be extracted to a path in the filesystem of container id.
    *
    * @param string $id ID or name of the container
    * @param string|resource|\Psr\Http\Message\StreamInterface $inputStream The input stream must be a tar archive compressed with one of the
    following algorithms: `identity` (no compression), `gzip`, `bzip2`,
    or `xz`.
    
    * @param array $queryParameters {
    *     @var string $path Path to a directory in the container to extract the archive’s contents into. 
    *     @var string $noOverwriteDirNonDir If `1`, `true`, or `True` then it will be an error if unpacking the
    given content would cause an existing directory to be replaced with
    a non-directory and vice versa.
    
    *     @var string $copyUIDGID If `1`, `true`, then it will copy UID/GID maps to the dest file or
    dir
    
    * }
    */
    public function __construct(string $id, $inputStream, array $queryParameters = array())
    {
        $this->id = $id;
        $this->body = $inputStream;
        $this->queryParameters = $queryParameters;
    }
    use \Docker\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/containers/{id}/archive');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), $this->body);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('path', 'noOverwriteDirNonDir', 'copyUIDGID'));
        $optionsResolver->setRequired(array('path'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('path', array('string'));
        $optionsResolver->addAllowedTypes('noOverwriteDirNonDir', array('string'));
        $optionsResolver->addAllowedTypes('copyUIDGID', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\Api\Exception\PutContainerArchiveBadRequestException
     * @throws \Docker\Api\Exception\PutContainerArchiveForbiddenException
     * @throws \Docker\Api\Exception\PutContainerArchiveNotFoundException
     * @throws \Docker\Api\Exception\PutContainerArchiveInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Docker\Api\Exception\PutContainerArchiveBadRequestException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (403 === $status) {
            throw new \Docker\Api\Exception\PutContainerArchiveForbiddenException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Docker\Api\Exception\PutContainerArchiveNotFoundException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Docker\Api\Exception\PutContainerArchiveInternalServerErrorException($serializer->deserialize($body, 'Docker\\Api\\Model\\ErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}