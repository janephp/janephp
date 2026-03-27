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
class MuseumTicketsConfirmationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Model\MuseumTicketsConfirmation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Model\MuseumTicketsConfirmation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Model\MuseumTicketsConfirmation();
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
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Validator\MuseumTicketsConfirmationConstraint());
        }
        if (\array_key_exists('ticketId', $data)) {
            $object->setTicketId($data['ticketId']);
        }
        if (\array_key_exists('ticketDate', $data)) {
            $object->setTicketDate(\DateTime::createFromFormat('Y-m-d', $data['ticketDate'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('ticketType', $data)) {
            $object->setTicketType($data['ticketType']);
        }
        if (\array_key_exists('eventId', $data)) {
            $object->setEventId($data['eventId']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        if (\array_key_exists('confirmationCode', $data)) {
            $object->setConfirmationCode($data['confirmationCode']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ticketId') && null !== $data->getTicketId()) {
            $dataArray['ticketId'] = $data->getTicketId();
        }
        $dataArray['ticketDate'] = $data->getTicketDate()?->format('Y-m-d');
        $dataArray['ticketType'] = $data->getTicketType();
        if ($data->isInitialized('eventId') && null !== $data->getEventId()) {
            $dataArray['eventId'] = $data->getEventId();
        }
        $dataArray['message'] = $data->getMessage();
        $dataArray['confirmationCode'] = $data->getConfirmationCode();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Validator\MuseumTicketsConfirmationConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Model\MuseumTicketsConfirmation::class => false];
    }
}