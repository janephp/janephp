<?php

namespace Github\Endpoint;

class OrgsUpdateWebhook extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $org;
    protected $hook_id;
    /**
     * 
     *
     * @param string $org 
     * @param int $hookId 
     * @param \Github\Model\OrgsOrgHooksHookIdPatchBody $requestBody 
     */
    public function __construct(string $org, int $hookId, \Github\Model\OrgsOrgHooksHookIdPatchBody $requestBody)
    {
        $this->org = $org;
        $this->hook_id = $hookId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{org}', '{hook_id}'), array($this->org, $this->hook_id), '/orgs/{org}/hooks/{hook_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\OrgsOrgHooksHookIdPatchBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\OrgsUpdateWebhookUnprocessableEntityException
     * @throws \Github\Exception\OrgsUpdateWebhookNotFoundException
     *
     * @return null|\Github\Model\OrgHook
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\OrgHook', 'json');
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\OrgsUpdateWebhookUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\OrgsUpdateWebhookNotFoundException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}