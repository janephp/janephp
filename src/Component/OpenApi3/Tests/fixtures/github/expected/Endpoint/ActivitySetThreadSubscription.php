<?php

namespace Github\Endpoint;

class ActivitySetThreadSubscription extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $thread_id;
    /**
    * If you are watching a repository, you receive notifications for all threads by default. Use this endpoint to ignore future notifications for threads until you comment on the thread or get an **@mention**.
    
    You can also use this endpoint to subscribe to threads that you are currently not receiving notifications for or to subscribed to threads that you have previously ignored.
    
    Unsubscribing from a conversation in a repository that you are not watching is functionally equivalent to the [Delete a thread subscription](https://developer.github.com/v3/activity/notifications/#delete-a-thread-subscription) endpoint.
    *
    * @param int $threadId thread_id parameter
    * @param null|\Github\Model\NotificationsThreadsThreadIdSubscriptionPutBody $requestBody 
    */
    public function __construct(int $threadId, ?\Github\Model\NotificationsThreadsThreadIdSubscriptionPutBody $requestBody = null)
    {
        $this->thread_id = $threadId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{thread_id}'], [$this->thread_id], '/notifications/threads/{thread_id}/subscription');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\NotificationsThreadsThreadIdSubscriptionPutBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Github\Exception\ActivitySetThreadSubscriptionForbiddenException
     * @throws \Github\Exception\ActivitySetThreadSubscriptionUnauthorizedException
     *
     * @return null|\Github\Model\ThreadSubscription
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Github\\Model\\ThreadSubscription', 'json');
        }
        if (304 === $status) {
            return null;
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ActivitySetThreadSubscriptionForbiddenException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ActivitySetThreadSubscriptionUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}