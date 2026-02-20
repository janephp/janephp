<?php

namespace Jane\Component\OpenApi31\Tests\Expected;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Client
{
    /**
     * Get upcoming museum operating hours.
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMuseumHoursBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMuseumHoursNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\MuseumDailyHours[] : \Psr\Http\Message\ResponseInterface)
     */
    public function getMuseumHours(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetMuseumHours($accept), $fetch);
    }
    /**
     * Return a list of upcoming special events at the museum.
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\ListSpecialEventsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\ListSpecialEventsNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listSpecialEvents(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\ListSpecialEvents($accept), $fetch);
    }
    /**
     * Creates a new special event for the museum.
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateSpecialEventNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent : \Psr\Http\Message\ResponseInterface)
     */
    public function createSpecialEvent(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\CreateSpecialEvent($accept), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteSpecialEventUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteSpecialEventNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteSpecialEvent(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\DeleteSpecialEvent(), $fetch);
    }
    /**
     * Get details about a special event.
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetSpecialEventNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent : \Psr\Http\Message\ResponseInterface)
     */
    public function getSpecialEvent(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetSpecialEvent($accept), $fetch);
    }
    /**
     * Update the details of a special event.
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdateSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdateSpecialEventNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent : \Psr\Http\Message\ResponseInterface)
     */
    public function updateSpecialEvent(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\UpdateSpecialEvent($accept), $fetch);
    }
    /**
     * Purchase museum tickets for general entry or special events.
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\BuyMuseumTicketsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\BuyMuseumTicketsNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Model\MuseumTicketsConfirmation : \Psr\Http\Message\ResponseInterface)
     */
    public function buyMuseumTickets(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\BuyMuseumTickets($accept), $fetch);
    }
    /**
     * Return an image of your ticket with scannable QR code. Used for event entry.
     * @param array $accept Accept content header image/png|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTicketCodeBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTicketCodeNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getTicketCode(string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetTicketCode($accept), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://redocly.com/_mock/docs/openapi/museum-api');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
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