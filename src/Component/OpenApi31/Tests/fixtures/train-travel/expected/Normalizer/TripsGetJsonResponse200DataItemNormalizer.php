<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TripsGetJsonResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Model\TripsGetJsonResponse200DataItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Model\TripsGetJsonResponse200DataItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Model\TripsGetJsonResponse200DataItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (float) $data['price'];
        }
        if (\array_key_exists('bicycles_allowed', $data) && \is_int($data['bicycles_allowed'])) {
            $data['bicycles_allowed'] = (bool) $data['bicycles_allowed'];
        }
        if (\array_key_exists('dogs_allowed', $data) && \is_int($data['dogs_allowed'])) {
            $data['dogs_allowed'] = (bool) $data['dogs_allowed'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Validator\TripsGetJsonResponse200DataItemConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('origin', $data)) {
            $object->setOrigin($data['origin']);
        }
        if (\array_key_exists('destination', $data)) {
            $object->setDestination($data['destination']);
        }
        if (\array_key_exists('departure_time', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['departure_time']);
            if (false === $date) {
                throw new \Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['departure_time'], 'Y-m-d\TH:i:sP');
            }
            $object->setDepartureTime($date);
        }
        if (\array_key_exists('arrival_time', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['arrival_time']);
            if (false === $date_1) {
                throw new \Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['arrival_time'], 'Y-m-d\TH:i:sP');
            }
            $object->setArrivalTime($date_1);
        }
        if (\array_key_exists('operator', $data)) {
            $object->setOperator($data['operator']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (\array_key_exists('bicycles_allowed', $data)) {
            $object->setBicyclesAllowed($data['bicycles_allowed']);
        }
        if (\array_key_exists('dogs_allowed', $data)) {
            $object->setDogsAllowed($data['dogs_allowed']);
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($data['self']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('origin') && null !== $data->getOrigin()) {
            $dataArray['origin'] = $data->getOrigin();
        }
        if ($data->isInitialized('destination') && null !== $data->getDestination()) {
            $dataArray['destination'] = $data->getDestination();
        }
        if ($data->isInitialized('departureTime') && null !== $data->getDepartureTime()) {
            $dataArray['departure_time'] = $data->getDepartureTime()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('arrivalTime') && null !== $data->getArrivalTime()) {
            $dataArray['arrival_time'] = $data->getArrivalTime()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('operator') && null !== $data->getOperator()) {
            $dataArray['operator'] = $data->getOperator();
        }
        if ($data->isInitialized('price') && null !== $data->getPrice()) {
            $dataArray['price'] = $data->getPrice();
        }
        if ($data->isInitialized('bicyclesAllowed') && null !== $data->getBicyclesAllowed()) {
            $dataArray['bicycles_allowed'] = $data->getBicyclesAllowed();
        }
        if ($data->isInitialized('dogsAllowed') && null !== $data->getDogsAllowed()) {
            $dataArray['dogs_allowed'] = $data->getDogsAllowed();
        }
        if ($data->isInitialized('self') && null !== $data->getSelf()) {
            $dataArray['self'] = $data->getSelf();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Validator\TripsGetJsonResponse200DataItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Model\TripsGetJsonResponse200DataItem::class => false];
    }
}