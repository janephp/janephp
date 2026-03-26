<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApSyslogServerProfileUpdateApSyslogServerProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileUpdateApSyslogServerProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileUpdateApSyslogServerProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileUpdateApSyslogServerProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('primaryAddress', $data)) {
            $object->setPrimaryAddress($data['primaryAddress']);
        }
        if (\array_key_exists('primaryPort', $data)) {
            $object->setPrimaryPort($data['primaryPort']);
        }
        if (\array_key_exists('primaryProtocol', $data)) {
            $object->setPrimaryProtocol($data['primaryProtocol']);
        }
        if (\array_key_exists('secondaryAddress', $data)) {
            $object->setSecondaryAddress($data['secondaryAddress']);
        }
        if (\array_key_exists('secondaryPort', $data)) {
            $object->setSecondaryPort($data['secondaryPort']);
        }
        if (\array_key_exists('secondaryProtocol', $data)) {
            $object->setSecondaryProtocol($data['secondaryProtocol']);
        }
        if (\array_key_exists('redundancyMode', $data)) {
            $object->setRedundancyMode($data['redundancyMode']);
        }
        if (\array_key_exists('flowLevel', $data)) {
            $object->setFlowLevel($data['flowLevel']);
        }
        if (\array_key_exists('facility', $data)) {
            $object->setFacility($data['facility']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $dataArray['primaryAddress'] = $data->getPrimaryAddress();
        if ($data->isInitialized('primaryPort') && null !== $data->getPrimaryPort()) {
            $dataArray['primaryPort'] = $data->getPrimaryPort();
        }
        if ($data->isInitialized('primaryProtocol') && null !== $data->getPrimaryProtocol()) {
            $dataArray['primaryProtocol'] = $data->getPrimaryProtocol();
        }
        if ($data->isInitialized('secondaryAddress') && null !== $data->getSecondaryAddress()) {
            $dataArray['secondaryAddress'] = $data->getSecondaryAddress();
        }
        if ($data->isInitialized('secondaryPort') && null !== $data->getSecondaryPort()) {
            $dataArray['secondaryPort'] = $data->getSecondaryPort();
        }
        if ($data->isInitialized('secondaryProtocol') && null !== $data->getSecondaryProtocol()) {
            $dataArray['secondaryProtocol'] = $data->getSecondaryProtocol();
        }
        if ($data->isInitialized('redundancyMode') && null !== $data->getRedundancyMode()) {
            $dataArray['redundancyMode'] = $data->getRedundancyMode();
        }
        if ($data->isInitialized('flowLevel') && null !== $data->getFlowLevel()) {
            $dataArray['flowLevel'] = $data->getFlowLevel();
        }
        if ($data->isInitialized('facility') && null !== $data->getFacility()) {
            $dataArray['facility'] = $data->getFacility();
        }
        if ($data->isInitialized('priority') && null !== $data->getPriority()) {
            $dataArray['priority'] = $data->getPriority();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileUpdateApSyslogServerProfile::class => false];
    }
}