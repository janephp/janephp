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
class ApSyslogServerProfileApSyslogServerProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileApSyslogServerProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileApSyslogServerProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileApSyslogServerProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
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
        if (\array_key_exists('createDateTime', $data)) {
            $object->setCreateDateTime($data['createDateTime']);
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->setModifiedDateTime($data['modifiedDateTime']);
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->setCreatorUsername($data['creatorUsername']);
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->setModifierUsername($data['modifierUsername']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
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
        if ($data->isInitialized('createDateTime') && null !== $data->getCreateDateTime()) {
            $dataArray['createDateTime'] = $data->getCreateDateTime();
        }
        if ($data->isInitialized('modifiedDateTime') && null !== $data->getModifiedDateTime()) {
            $dataArray['modifiedDateTime'] = $data->getModifiedDateTime();
        }
        if ($data->isInitialized('creatorUsername') && null !== $data->getCreatorUsername()) {
            $dataArray['creatorUsername'] = $data->getCreatorUsername();
        }
        if ($data->isInitialized('modifierUsername') && null !== $data->getModifierUsername()) {
            $dataArray['modifierUsername'] = $data->getModifierUsername();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileApSyslogServerProfile::class => false];
    }
}