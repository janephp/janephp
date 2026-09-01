<?php

namespace Jane\Component\OpenApi31\Tests\Expected;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Client
{
    /**
     * It's easy to say you know them all, but do you really? Retrieve all the planets and check whether you missed one.
     * @param array{
     *    "limit"?: int, //The number of items to return
     *    "offset"?: int, //The number of items to skip before starting to collect the result set
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/xml
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\PlanetsGetJsonResponse200
     */
    public function getAllData(array $queryParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetAllData($queryParameters, $accept));
    }
    /**
     * Time to play god and create a new planet. What do you think? Ah, don't think too much. What could go wrong anyway?
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\Model\Planet $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreatePlanetBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreatePlanetForbiddenException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\Planet
     */
    public function createPlanet(?\Jane\Component\OpenApi31\Tests\Expected\Model\Planet $requestBody = null, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\CreatePlanet($requestBody, $accept));
    }
    /**
     * This endpoint was used to delete planets. Unfortunately, that caused a lot of trouble for planets with life. So, this endpoint is now deprecated and should not be used anymore.
     * @param int $planetId The ID of the planet to get
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeletePlanetNotFoundException
     *
     * @return null
     */
    public function deletePlanet(int $planetId, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\DeletePlanet($planetId, $accept));
    }
    /**
     * You'll better learn a little bit more about the planets. It might come in handy once space travel is available for everyone.
     * @param int $planetId The ID of the planet to get
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetPlanetNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\Planet
     */
    public function getPlanet(int $planetId, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetPlanet($planetId, $accept));
    }
    /**
     * Sometimes you make mistakes, that's fine. No worries, you can update all planets.
     * @param int $planetId The ID of the planet to get
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\Model\Planet $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\Planet
     */
    public function updatePlanet(int $planetId, ?\Jane\Component\OpenApi31\Tests\Expected\Model\Planet $requestBody = null, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\UpdatePlanet($planetId, $requestBody, $accept));
    }
    /**
     * Got a crazy good photo of a planet? Share it with the world!
     * @param int $planetId The ID of the planet to get
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\Model\PlanetsPlanetIdImagePostBody $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\ImageUploadedMessage
     */
    public function uploadImage(int $planetId, ?\Jane\Component\OpenApi31\Tests\Expected\Model\PlanetsPlanetIdImagePostBody $requestBody = null, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\UploadImage($planetId, $requestBody, $accept));
    }
    /**
     * @param mixed $requestBody
     *
     * @return null
     */
    public function createCelestialBody($requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\CreateCelestialBody($requestBody));
    }
    /**
     * Time to create a user account, eh?
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\Model\UserSignupPostBody $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateUserBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateUserUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateUserForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateUserConflictException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateUserUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\User
     */
    public function createUser(?\Jane\Component\OpenApi31\Tests\Expected\Model\UserSignupPostBody $requestBody = null, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\CreateUser($requestBody, $accept));
    }
    /**
     * Yeah, this is the boring security stuff. Just get your super secret token and move on.
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\Model\Credentials $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenTooManyRequestsException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\Token
     */
    public function getToken(?\Jane\Component\OpenApi31\Tests\Expected\Model\Credentials $requestBody = null, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetToken($requestBody, $accept));
    }
    /**
     * Find yourself they say. That's what you can do here.
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMeUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMeForbiddenException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\User
     */
    public function getMe(array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetMe($accept));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://galaxy.scalar.com');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}