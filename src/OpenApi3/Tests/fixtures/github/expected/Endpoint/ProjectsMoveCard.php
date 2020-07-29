<?php

namespace Github\Endpoint;

class ProjectsMoveCard extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $card_id;
    /**
     * 
     *
     * @param int $cardId card_id parameter
     * @param \Github\Model\ProjectsColumnsCardsCardIdMovesPostBody $requestBody 
     */
    public function __construct(int $cardId, \Github\Model\ProjectsColumnsCardsCardIdMovesPostBody $requestBody)
    {
        $this->card_id = $cardId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{card_id}'), array($this->card_id), '/projects/columns/cards/{card_id}/moves');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Github\Model\ProjectsColumnsCardsCardIdMovesPostBody) {
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
     * @throws \Github\Exception\ProjectsMoveCardForbiddenException
     * @throws \Github\Exception\ProjectsMoveCardUnauthorizedException
     * @throws \Github\Exception\ProjectsMoveCardServiceUnavailableException
     * @throws \Github\Exception\ProjectsMoveCardUnprocessableEntityException
     *
     * @return null|\Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse201
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Github\\Model\\ProjectsColumnsCardsCardIdMovesPostResponse201', 'json');
        }
        if (304 === $status) {
            return null;
        }
        if (403 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsMoveCardForbiddenException($serializer->deserialize($body, 'Github\\Model\\ProjectsColumnsCardsCardIdMovesPostResponse403', 'json'));
        }
        if (401 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsMoveCardUnauthorizedException($serializer->deserialize($body, 'Github\\Model\\BasicError', 'json'));
        }
        if (503 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsMoveCardServiceUnavailableException($serializer->deserialize($body, 'Github\\Model\\ProjectsColumnsCardsCardIdMovesPostResponse503', 'json'));
        }
        if (422 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Github\Exception\ProjectsMoveCardUnprocessableEntityException($serializer->deserialize($body, 'Github\\Model\\ValidationError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}