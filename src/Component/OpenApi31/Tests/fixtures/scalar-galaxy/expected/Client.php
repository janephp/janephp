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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetsGetJsonResponse200 : \Psr\Http\Message\ResponseInterface)
     */
    public function getAllData(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\GetAllData($queryParameters, $accept), $fetch);
    }
    /**
     * Time to play god and create a new planet. What do you think? Ah, don't think too much. What could go wrong anyway?
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreatePlanetBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreatePlanetForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet : \Psr\Http\Message\ResponseInterface)
     */
    public function createPlanet(?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\CreatePlanet($requestBody, $accept), $fetch);
    }
    /**
     * This endpoint was used to delete planets. Unfortunately, that caused a lot of trouble for planets with life. So, this endpoint is now deprecated and should not be used anymore.
     * @param int $planetId The ID of the planet to get
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\DeletePlanetNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deletePlanet(int $planetId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\DeletePlanet($planetId, $accept), $fetch);
    }
    /**
     * You'll better learn a little bit more about the planets. It might come in handy once space travel is available for everyone.
     * @param int $planetId The ID of the planet to get
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetPlanetNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet : \Psr\Http\Message\ResponseInterface)
     */
    public function getPlanet(int $planetId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\GetPlanet($planetId, $accept), $fetch);
    }
    /**
     * Sometimes you make mistakes, that's fine. No worries, you can update all planets.
     * @param int $planetId The ID of the planet to get
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UpdatePlanetNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet : \Psr\Http\Message\ResponseInterface)
     */
    public function updatePlanet(int $planetId, ?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Planet $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\UpdatePlanet($planetId, $requestBody, $accept), $fetch);
    }
    /**
     * Got a crazy good photo of a planet? Share it with the world!
     * @param int $planetId The ID of the planet to get
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetsPlanetIdImagePostBody $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UploadImageBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UploadImageForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\UploadImageNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\ImageUploadedMessage : \Psr\Http\Message\ResponseInterface)
     */
    public function uploadImage(int $planetId, ?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\PlanetsPlanetIdImagePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\UploadImage($planetId, $requestBody, $accept), $fetch);
    }
    /**
     * @param mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function createCelestialBody($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\CreateCelestialBody($requestBody), $fetch);
    }
    /**
     * Time to create a user account, eh?
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UserSignupPostBody $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserConflictException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\CreateUserUnprocessableEntityException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function createUser(?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\UserSignupPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\CreateUser($requestBody, $accept), $fetch);
    }
    /**
     * Yeah, this is the boring security stuff. Just get your super secret token and move on.
     * @param null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Credentials $requestBody
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetTokenTooManyRequestsException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Token : \Psr\Http\Message\ResponseInterface)
     */
    public function getToken(?\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\Credentials $requestBody = null, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\GetToken($requestBody, $accept), $fetch);
    }
    /**
     * Find yourself they say. That's what you can do here.
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetMeUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Exception\GetMeForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function getMe(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Endpoint\GetMe($accept), $fetch);
    }
    public static function create(?\Psr\Http\Client\ClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
        }
        if ($applyServerPlugins) {
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://galaxy.scalar.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}