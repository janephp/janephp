<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\Client
{
    /**
     * It's easy to say you know them all, but do you really? Retrieve all the planets and check whether you missed one.
     * @param array{
     *    "limit"?: int, //The number of items to return
     *    "offset"?: int, //The number of items to skip before starting to collect the result set
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/xml
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetsGetJsonResponse200
     */
    public function getAllData(array $queryParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\GetAllData($queryParameters, $accept));
    }
    /**
     * Time to play god and create a new planet. What do you think? Ah, don't think too much. What could go wrong anyway?
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreatePlanetBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreatePlanetForbiddenException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet
     */
    public function createPlanet(?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody = null, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\CreatePlanet($requestBody, $accept));
    }
    /**
     * This endpoint was used to delete planets. Unfortunately, that caused a lot of trouble for planets with life. So, this endpoint is now deprecated and should not be used anymore.
     * @param int $planetId The ID of the planet to get
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\DeletePlanetNotFoundException
     *
     * @return null
     */
    public function deletePlanet(int $planetId, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\DeletePlanet($planetId, $accept));
    }
    /**
     * You'll better learn a little bit more about the planets. It might come in handy once space travel is available for everyone.
     * @param int $planetId The ID of the planet to get
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetPlanetNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet
     */
    public function getPlanet(int $planetId, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\GetPlanet($planetId, $accept));
    }
    /**
     * Sometimes you make mistakes, that's fine. No worries, you can update all planets.
     * @param int $planetId The ID of the planet to get
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet
     */
    public function updatePlanet(int $planetId, ?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody = null, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\UpdatePlanet($planetId, $requestBody, $accept));
    }
    /**
     * Got a crazy good photo of a planet? Share it with the world!
     * @param int $planetId The ID of the planet to get
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetsPlanetIdImagePostBody $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UploadImageBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UploadImageForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UploadImageNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\ImageUploadedMessage
     */
    public function uploadImage(int $planetId, ?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetsPlanetIdImagePostBody $requestBody = null, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\UploadImage($planetId, $requestBody, $accept));
    }
    /**
     * @param mixed $requestBody
     *
     * @return null
     */
    public function createCelestialBody($requestBody)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\CreateCelestialBody($requestBody));
    }
    /**
     * Time to create a user account, eh?
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UserSignupPostBody $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserConflictException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserUnprocessableEntityException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\User
     */
    public function createUser(?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UserSignupPostBody $requestBody = null, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\CreateUser($requestBody, $accept));
    }
    /**
     * Yeah, this is the boring security stuff. Just get your super secret token and move on.
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Credentials $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenTooManyRequestsException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Token
     */
    public function getToken(?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Credentials $requestBody = null, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\GetToken($requestBody, $accept));
    }
    /**
     * Find yourself they say. That's what you can do here.
     * @param array $accept Accept content header application/json|application/xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetMeUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetMeForbiddenException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\User
     */
    public function getMe(array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\GetMe($accept));
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}