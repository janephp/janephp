<?php

namespace Github\Endpoint;

class AppsGetInstallation extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $installation_id;
    /**
    * Enables an authenticated GitHub App to find an installation's information using the installation id. The installation's account type (`target_type`) will be either an organization or a user account, depending which account the repository belongs to.
    
    You must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint.
    *
    * @param int $installationId installation_id parameter
    */
    public function __construct(int $installationId)
    {
        $this->installation_id = $installationId;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{installation_id}'), array($this->installation_id), '/app/installations/{installation_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\AppsGetInstallationNotFoundException
     * @throws \Github\Exception\AppsGetInstallationUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\Installation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\Installation', 'json');
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\AppsGetInstallationNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (415 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\AppsGetInstallationUnsupportedMediaTypeException($serializer->deserialize($body, 'Github\\Model\\ResponsePreviewHeaderMissing', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}