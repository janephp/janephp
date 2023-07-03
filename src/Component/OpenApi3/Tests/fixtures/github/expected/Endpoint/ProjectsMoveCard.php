<?php

namespace Github\Endpoint;

class ProjectsMoveCard extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $card_id;
    /**
     * 
     *
     * @param int $cardId card_id parameter
     * @param null|\Github\Model\ProjectsColumnsCardsCardIdMovesPostBody $requestBody 
     */
    public function __construct(int $cardId, ?\Github\Model\ProjectsColumnsCardsCardIdMovesPostBody $requestBody = null)
    {
        $this->card_id = $cardId;
        $this->body = $requestBody;
    }
    use \Github\Runtime\Client\EndpointTrait;
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
     * @return null|\Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse201|\Psr\Http\Message\StreamInterface
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize((string) $body, 'Github\\Model\\ProjectsColumnsCardsCardIdMovesPostResponse201', 'json');
        }
        if (304 === $status) {
            return $body;
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsMoveCardForbiddenException($serializer->deserialize((string) $body, 'Github\\Model\\ProjectsColumnsCardsCardIdMovesPostResponse403', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsMoveCardUnauthorizedException($serializer->deserialize((string) $body, 'Github\\Model\\BasicError', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsMoveCardServiceUnavailableException($serializer->deserialize((string) $body, 'Github\\Model\\ProjectsColumnsCardsCardIdMovesPostResponse503', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Github\Exception\ProjectsMoveCardUnprocessableEntityException($serializer->deserialize((string) $body, 'Github\\Model\\ValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}