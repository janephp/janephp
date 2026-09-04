<?php

namespace Jane\Component\OpenApi31\Tests\Expected\TrainTravel;

class Client extends \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\Client
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetStationsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetStationsUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetStationsForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetStationsTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetStationsInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\StationsGetJsonResponse200
     */
    public function getStations(array $queryParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint\GetStations($queryParameters, $accept));
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
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetTripsInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\TripsGetJsonResponse200
     */
    public function getTrips(array $queryParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint\GetTrips($queryParameters, $accept));
    }
    /**
     * Returns a list of all trip bookings by the authenticated user.
     * @param array{
     *    "page"?: int, //The page number to return
     *    "limit"?: int, //The number of items to return per page
     * } $queryParameters
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingsBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingsUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingsForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingsTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingsInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsGetJsonResponse200
     */
    public function getBookings(array $queryParameters = [], array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint\GetBookings($queryParameters, $accept));
    }
    /**
     * A booking is a temporary hold on a trip. It is not confirmed until the payment is processed.
     * @param \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Booking $requestBody
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingNotFoundException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingConflictException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsPostJsonResponse201
     */
    public function createBooking(\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\Booking $requestBody, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint\CreateBooking($requestBody, $accept));
    }
    /**
     * Deletes a booking, cancelling the hold on the trip.
     * @param string $bookingId The ID of the booking to retrieve.
     * @param array $accept Accept content header application/problem+json|application/problem+xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingNotFoundException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\DeleteBookingInternalServerErrorException
     *
     * @return null
     */
    public function deleteBooking(string $bookingId, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint\DeleteBooking($bookingId, $accept));
    }
    /**
     * Returns the details of a specific booking.
     * @param string $bookingId The ID of the booking to retrieve.
     * @param array $accept Accept content header application/json|application/xml|application/problem+json|application/problem+xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingNotFoundException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\GetBookingInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsBookingIdGetJsonResponse200
     */
    public function getBooking(string $bookingId, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint\GetBooking($bookingId, $accept));
    }
    /**
     * A payment is an attempt to pay for the booking, which will confirm the booking for the user and enable them to get their tickets.
     * @param string $bookingId The ID of the booking to pay for.
     * @param \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingPayment $requestBody
     * @param array $accept Accept content header application/json|application/problem+json|application/problem+xml
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingPaymentBadRequestException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingPaymentUnauthorizedException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingPaymentForbiddenException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingPaymentTooManyRequestsException
     * @throws \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Exception\CreateBookingPaymentInternalServerErrorException
     *
     * @return null|\Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingsBookingIdPaymentPostResponse200
     */
    public function createBookingPayment(string $bookingId, \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Model\BookingPayment $requestBody, array $accept = [])
    {
        return $this->executeEndpoint(new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Endpoint\CreateBookingPayment($bookingId, $requestBody, $accept));
    }
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://try.microcks.io/rest/Train+Travel+API/1.0.0');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Jane\Component\OpenApi31\Tests\Expected\TrainTravel\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}