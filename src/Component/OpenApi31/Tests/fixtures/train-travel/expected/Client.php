<?php

namespace Jane\Component\OpenApi31\Tests\Expected;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\Runtime\Client\Client
{
    /**
     * Returns a paginated and searchable list of all train stations.
     * @param array{
     *    "page"?: int, //The page number to return
     *    "limit"?: int, //The number of items to return per page
     *    "coordinates"?: string, //The latitude and longitude of the user's location, to narrow down the search results to sites within a proximity of this location.
     *    "search"?: string, //A search term to filter the list of stations by name or address.
     *    "country"?: string, //Filter stations by country code
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetStationsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getStations(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetStations($queryParameters, $accept), $fetch);
    }
    /**
     * Returns a list of available train trips between the specified origin and destination stations on the given date, and allows for filtering by bicycle and dog allowances.
     *
     * @param array{
     *    "page"?: int, //The page number to return
     *    "limit"?: int, //The number of items to return per page
     *    "origin": string, //The ID of the origin station
     *    "destination": string, //The ID of the destination station
     *    "date": string, //The date and time of the trip in ISO 8601 format in origin station's timezone.
     *    "bicycles"?: bool, //Only return trips where bicycles are known to be allowed
     *    "dogs"?: bool, //Only return trips where dogs are known to be allowed
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetTripsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getTrips(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetTrips($queryParameters, $accept), $fetch);
    }
    /**
     * Returns a list of all trip bookings by the authenticated user.
     * @param array{
     *    "page"?: int, //The page number to return
     *    "limit"?: int, //The number of items to return per page
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetBookingsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetBookingsUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetBookingsForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetBookingsTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetBookingsInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getBookings(array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetBookings($queryParameters, $accept), $fetch);
    }
    /**
     * A booking is a temporary hold on a trip. It is not confirmed until the payment is processed.
     * @param \Jane\Component\OpenApi31\Tests\Expected\Model\Booking $requestBody
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingNotFoundException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingConflictException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function createBooking(\Jane\Component\OpenApi31\Tests\Expected\Model\Booking $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\CreateBooking($requestBody, $accept), $fetch);
    }
    /**
     * Deletes a booking, cancelling the hold on the trip.
     * @param string $bookingId The ID of the booking to retrieve.
     * @param array $accept Accept content header application/problem+json|application/problem+xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteBookingBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteBookingUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteBookingForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteBookingNotFoundException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteBookingTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\DeleteBookingInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function deleteBooking(string $bookingId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\DeleteBooking($bookingId, $accept), $fetch);
    }
    /**
     * Returns the details of a specific booking.
     * @param string $bookingId The ID of the booking to retrieve.
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetBookingBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetBookingUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetBookingForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetBookingNotFoundException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetBookingTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\GetBookingInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getBooking(string $bookingId, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\GetBooking($bookingId, $accept), $fetch);
    }
    /**
     * A payment is an attempt to pay for the booking, which will confirm the booking for the user and enable them to get their tickets.
     * @param string $bookingId The ID of the booking to pay for.
     * @param \Jane\Component\OpenApi31\Tests\Expected\Model\BookingPayment $requestBody
     * @param array $accept Accept content header application/json|application/problem+json|application/problem+xml
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\Exception\CreateBookingPaymentInternalServerErrorException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function createBookingPayment(string $bookingId, \Jane\Component\OpenApi31\Tests\Expected\Model\BookingPayment $requestBody, string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\Endpoint\CreateBookingPayment($bookingId, $requestBody, $accept), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://try.microcks.io/rest/Train+Travel+API/1.0.0');
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