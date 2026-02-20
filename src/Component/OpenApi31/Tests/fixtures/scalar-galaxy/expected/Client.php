<?php

namespace Jane\Component\OpenApi31\Tests\Expected;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Client
{
    /**
     * It's easy to say you know them all, but do you really? Retrieve all the planets and check whether you missed one.
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getAllData(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetAllData($accept), $fetch);
    }
    /**
     * Time to play god and create a new planet. What do you think? Ah, don't think too much. What could go wrong anyway?
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreatePlanetBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreatePlanetForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\Planet : \Psr\Http\Message\ResponseInterface)
     */
    public function createPlanet(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\CreatePlanet($accept), $fetch);
    }
    /**
     * This endpoint was used to delete planets. Unfortunately, that caused a lot of trouble for planets with life. So, this endpoint is now deprecated and should not be used anymore.
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeletePlanetNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deletePlanet(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\DeletePlanet($accept), $fetch);
    }
    /**
     * You'll better learn a little bit more about the planets. It might come in handy once space travel is available for everyone.
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetPlanetNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\Planet : \Psr\Http\Message\ResponseInterface)
     */
    public function getPlanet(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetPlanet($accept), $fetch);
    }
    /**
     * Sometimes you make mistakes, that's fine. No worries, you can update all planets.
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdatePlanetNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\Planet : \Psr\Http\Message\ResponseInterface)
     */
    public function updatePlanet(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\UpdatePlanet($accept), $fetch);
    }
    /**
     * Got a crazy good photo of a planet? Share it with the world!
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UploadImageNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\ImageUploadedMessage : \Psr\Http\Message\ResponseInterface)
     */
    public function uploadImage(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\UploadImage($accept), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function createCelestialBody(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\CreateCelestialBody(), $fetch);
    }
    /**
     * Time to create a user account, eh?
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateUserBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateUserUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateUserForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateUserConflictException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateUserUnprocessableEntityException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function createUser(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\CreateUser($accept), $fetch);
    }
    /**
     * Yeah, this is the boring security stuff. Just get your super secret token and move on.
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTokenTooManyRequestsException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\Token : \Psr\Http\Message\ResponseInterface)
     */
    public function getToken(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetToken($accept), $fetch);
    }
    /**
     * Find yourself they say. That's what you can do here.
     * @param array $accept Accept content header application/json|application/xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMeUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMeForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\User : \Psr\Http\Message\ResponseInterface)
     */
    public function getMe(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetMe($accept), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://galaxy.scalar.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}