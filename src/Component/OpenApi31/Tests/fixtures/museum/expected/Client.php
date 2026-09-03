<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\Client
{
    /**
     * Get upcoming museum operating hours.
     * @param array{
     *    "startDate"?: string, //Starting date to retrieve future operating hours from. Defaults to today's date.
     *    "page"?: int, //Page number to retrieve.
     *    "limit"?: int, //Number of days per page.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetMuseumHoursBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetMuseumHoursNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\MuseumDailyHours[] : \Psr\Http\Message\ResponseInterface)
     */
    public function getMuseumHours(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint\GetMuseumHours($queryParameters, $accept), $fetch);
    }
    /**
     * Return a list of upcoming special events at the museum.
     * @param array{
     *    "startDate"?: string, //Starting date to retrieve future operating hours from. Defaults to today's date.
     *    "endDate"?: string, //End of a date range to retrieve special events for. Defaults to 7 days after `startDate`.
     *    "page"?: int, //Page number to retrieve.
     *    "limit"?: int, //Number of days per page.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\ListSpecialEventsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\ListSpecialEventsNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listSpecialEvents(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint\ListSpecialEvents($queryParameters, $accept), $fetch);
    }
    /**
     * Creates a new special event for the museum.
     * @param \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent $requestBody
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\CreateSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\CreateSpecialEventNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent : \Psr\Http\Message\ResponseInterface)
     */
    public function createSpecialEvent(\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint\CreateSpecialEvent($requestBody, $accept), $fetch);
    }
    /**
     * Delete a special event from the collection. Allows museum to cancel planned events.
     * @param string $eventId Identifier for a special event.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\DeleteSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\DeleteSpecialEventUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\DeleteSpecialEventNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteSpecialEvent(string $eventId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint\DeleteSpecialEvent($eventId), $fetch);
    }
    /**
     * Get details about a special event.
     * @param string $eventId Identifier for a special event.
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetSpecialEventNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent : \Psr\Http\Message\ResponseInterface)
     */
    public function getSpecialEvent(string $eventId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint\GetSpecialEvent($eventId, $accept), $fetch);
    }
    /**
     * Update the details of a special event.
     * @param string $eventId Identifier for a special event.
     * @param \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEventFields $requestBody
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\UpdateSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\UpdateSpecialEventNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEvent : \Psr\Http\Message\ResponseInterface)
     */
    public function updateSpecialEvent(string $eventId, \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\SpecialEventFields $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint\UpdateSpecialEvent($eventId, $requestBody, $accept), $fetch);
    }
    /**
     * Purchase museum tickets for general entry or special events.
     * @param \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\BuyMuseumTickets $requestBody
     * @param array $accept Accept content header application/json|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\BuyMuseumTicketsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\BuyMuseumTicketsNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\MuseumTicketsConfirmation : \Psr\Http\Message\ResponseInterface)
     */
    public function buyMuseumTickets(\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\BuyMuseumTickets $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint\BuyMuseumTickets($requestBody, $accept), $fetch);
    }
    /**
     * Return an image of your ticket with scannable QR code. Used for event entry.
     * @param string $ticketId Identifier for a ticket to a museum event. Used to generate ticket image.
     * @param array $accept Accept content header image/png|application/problem+json
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetTicketCodeBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Museum\Exception\GetTicketCodeNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getTicketCode(string $ticketId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Museum\Endpoint\GetTicketCode($ticketId, $accept), $fetch);
    }
    public static function create(?\Psr\Http\Client\ClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
        }
        if ($applyServerPlugins) {
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://redocly.com/_mock/docs/openapi/museum-api');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\Museum\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}