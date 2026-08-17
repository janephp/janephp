<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\Event::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\Event::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\Event();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('eventId', $data) && \is_int($data['eventId'])) {
            $data['eventId'] = (float) $data['eventId'];
        }
        if (\array_key_exists('companyId', $data) && \is_int($data['companyId'])) {
            $data['companyId'] = (float) $data['companyId'];
        }
        if (\array_key_exists('portfolioId', $data) && \is_int($data['portfolioId'])) {
            $data['portfolioId'] = (float) $data['portfolioId'];
        }
        if (\array_key_exists('eventId', $data)) {
            $object->setEventId($data['eventId']);
            unset($data['eventId']);
        }
        if (\array_key_exists('companyId', $data)) {
            $object->setCompanyId($data['companyId']);
            unset($data['companyId']);
        }
        if (\array_key_exists('portfolioId', $data)) {
            $object->setPortfolioId($data['portfolioId']);
            unset($data['portfolioId']);
        }
        if (\array_key_exists('ruleName', $data)) {
            $object->setRuleName($data['ruleName']);
            unset($data['ruleName']);
        }
        if (\array_key_exists('localEventCode', $data)) {
            $object->setLocalEventCode($data['localEventCode']);
            unset($data['localEventCode']);
        }
        if (\array_key_exists('globalEventCode', $data)) {
            $object->setGlobalEventCode($data['globalEventCode']);
            unset($data['globalEventCode']);
        }
        if (\array_key_exists('newValue', $data)) {
            $object->setNewValue($data['newValue']);
            unset($data['newValue']);
        }
        if (\array_key_exists('oldValue', $data)) {
            $object->setOldValue($data['oldValue']);
            unset($data['oldValue']);
        }
        if (\array_key_exists('eventDate', $data)) {
            $object->setEventDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['eventDate']));
            unset($data['eventDate']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdDate']));
            unset($data['createdDate']);
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
        if ($data->isInitialized('eventId') && null !== $data->getEventId()) {
            $dataArray['eventId'] = $data->getEventId();
        }
        if ($data->isInitialized('companyId') && null !== $data->getCompanyId()) {
            $dataArray['companyId'] = $data->getCompanyId();
        }
        if ($data->isInitialized('portfolioId') && null !== $data->getPortfolioId()) {
            $dataArray['portfolioId'] = $data->getPortfolioId();
        }
        if ($data->isInitialized('ruleName') && null !== $data->getRuleName()) {
            $dataArray['ruleName'] = $data->getRuleName();
        }
        if ($data->isInitialized('localEventCode') && null !== $data->getLocalEventCode()) {
            $dataArray['localEventCode'] = $data->getLocalEventCode();
        }
        if ($data->isInitialized('globalEventCode') && null !== $data->getGlobalEventCode()) {
            $dataArray['globalEventCode'] = $data->getGlobalEventCode();
        }
        if ($data->isInitialized('newValue') && null !== $data->getNewValue()) {
            $dataArray['newValue'] = $data->getNewValue();
        }
        if ($data->isInitialized('oldValue') && null !== $data->getOldValue()) {
            $dataArray['oldValue'] = $data->getOldValue();
        }
        if ($data->isInitialized('eventDate') && null !== $data->getEventDate()) {
            $dataArray['eventDate'] = $data->getEventDate()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('createdDate') && null !== $data->getCreatedDate()) {
            $dataArray['createdDate'] = $data->getCreatedDate()->format('Y-m-d\TH:i:sP');
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\Event::class => false];
    }
}