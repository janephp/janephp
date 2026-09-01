<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MuseumTicketsConfirmationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\MuseumTicketsConfirmation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\MuseumTicketsConfirmation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\MuseumTicketsConfirmation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Museum\Validator\MuseumTicketsConfirmationConstraint());
        }
        if (\array_key_exists('ticketId', $data)) {
            $object->ticketId = $data['ticketId'];
            unset($data['ticketId']);
        }
        if (\array_key_exists('ticketDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['ticketDate']);
            if (false === $date) {
                throw new \Jane\Component\OpenApi31\Tests\Expected\Museum\Runtime\Normalizer\InvalidDateException($data['ticketDate'], 'Y-m-d');
            }
            $object->ticketDate = $date->setTime(0, 0, 0);
            unset($data['ticketDate']);
        }
        if (\array_key_exists('ticketType', $data)) {
            $object->ticketType = $data['ticketType'];
            unset($data['ticketType']);
        }
        if (\array_key_exists('eventId', $data)) {
            $object->eventId = $data['eventId'];
            unset($data['eventId']);
        }
        if (\array_key_exists('message', $data)) {
            $object->message = $data['message'];
            unset($data['message']);
        }
        if (\array_key_exists('confirmationCode', $data)) {
            $object->confirmationCode = $data['confirmationCode'];
            unset($data['confirmationCode']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('ticketId', get_object_vars($data)) && null !== ($data->ticketId ?? null)) {
            $dataArray['ticketId'] = $data->ticketId ?? null;
        }
        $dataArray['ticketDate'] = ($data->ticketDate ?? null)->format('Y-m-d');
        $dataArray['ticketType'] = $data->ticketType ?? null;
        if (array_key_exists('eventId', get_object_vars($data)) && null !== ($data->eventId ?? null)) {
            $dataArray['eventId'] = $data->eventId ?? null;
        }
        $dataArray['message'] = $data->message ?? null;
        $dataArray['confirmationCode'] = $data->confirmationCode ?? null;
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Museum\Validator\MuseumTicketsConfirmationConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Museum\Model\MuseumTicketsConfirmation::class => false];
    }
}