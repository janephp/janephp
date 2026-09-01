<?php

namespace Jane\Component\OpenApi31\Tests\Expected;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Client
{
    /**
     * Get upcoming museum operating hours.
     * @param array{
     *    "startDate"?: string, //Starting date to retrieve future operating hours from. Defaults to today's date.
     *    "page"?: int, //Page number to retrieve.
     *    "limit"?: int, //Number of days per page.
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMuseumHoursBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetMuseumHoursNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\MuseumDailyHours[]
     */
    public function getMuseumHours(array $queryParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetMuseumHours($queryParameters, $accept));
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\ListSpecialEventsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\ListSpecialEventsNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent[]
     */
    public function listSpecialEvents(array $queryParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\ListSpecialEvents($queryParameters, $accept));
    }
    /**
     * Creates a new special event for the museum.
     * @param \Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent $requestBody
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateSpecialEventNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent
     */
    public function createSpecialEvent(\Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent $requestBody, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\CreateSpecialEvent($requestBody, $accept));
    }
    /**
     * Delete a special event from the collection. Allows museum to cancel planned events.
     * @param string $eventId Identifier for a special event.
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteSpecialEventUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteSpecialEventNotFoundException
     *
     * @return null
     */
    public function deleteSpecialEvent(string $eventId)
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\DeleteSpecialEvent($eventId));
    }
    /**
     * Get details about a special event.
     * @param string $eventId Identifier for a special event.
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetSpecialEventNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent
     */
    public function getSpecialEvent(string $eventId, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetSpecialEvent($eventId, $accept));
    }
    /**
     * Update the details of a special event.
     * @param string $eventId Identifier for a special event.
     * @param \Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEventFields $requestBody
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdateSpecialEventBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\UpdateSpecialEventNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEvent
     */
    public function updateSpecialEvent(string $eventId, \Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEventFields $requestBody, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\UpdateSpecialEvent($eventId, $requestBody, $accept));
    }
    /**
     * Purchase museum tickets for general entry or special events.
     * @param \Jane\Component\OpenApi31\Tests\Expected\Model\BuyMuseumTickets $requestBody
     * @param array $accept Accept content header application/json|application/problem+json
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\BuyMuseumTicketsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\BuyMuseumTicketsNotFoundException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\Model\MuseumTicketsConfirmation
     */
    public function buyMuseumTickets(\Jane\Component\OpenApi31\Tests\Expected\Model\BuyMuseumTickets $requestBody, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\BuyMuseumTickets($requestBody, $accept));
    }
    /**
     * Return an image of your ticket with scannable QR code. Used for event entry.
     * @param string $ticketId Identifier for a ticket to a museum event. Used to generate ticket image.
     * @param array $accept Accept content header image/png|application/problem+json
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTicketCodeBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTicketCodeNotFoundException
     *
     * @return null
     */
    public function getTicketCode(string $ticketId, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetTicketCode($ticketId, $accept));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://redocly.com/_mock/docs/openapi/museum-api');
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