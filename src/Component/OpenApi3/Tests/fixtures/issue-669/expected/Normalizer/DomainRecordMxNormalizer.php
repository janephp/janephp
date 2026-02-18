<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DomainRecordMxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\DomainRecordMx::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\DomainRecordMx::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\DomainRecordMx();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('data', $data)) {
            $object->setData($data['data']);
            unset($data['data']);
        }
        if (\array_key_exists('priority', $data) && $data['priority'] !== null) {
            $object->setPriority($data['priority']);
            unset($data['priority']);
        }
        elseif (\array_key_exists('priority', $data) && $data['priority'] === null) {
            $object->setPriority(null);
        }
        if (\array_key_exists('port', $data) && $data['port'] !== null) {
            $object->setPort($data['port']);
            unset($data['port']);
        }
        elseif (\array_key_exists('port', $data) && $data['port'] === null) {
            $object->setPort(null);
        }
        if (\array_key_exists('ttl', $data)) {
            $object->setTtl($data['ttl']);
            unset($data['ttl']);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($data['weight']);
            unset($data['weight']);
        }
        elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('flags', $data) && $data['flags'] !== null) {
            $object->setFlags($data['flags']);
            unset($data['flags']);
        }
        elseif (\array_key_exists('flags', $data) && $data['flags'] === null) {
            $object->setFlags(null);
        }
        if (\array_key_exists('tag', $data) && $data['tag'] !== null) {
            $object->setTag($data['tag']);
            unset($data['tag']);
        }
        elseif (\array_key_exists('tag', $data) && $data['tag'] === null) {
            $object->setTag(null);
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
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('data') && null !== $data->getData()) {
            $dataArray['data'] = $data->getData();
        }
        if ($data->isInitialized('priority')) {
            $dataArray['priority'] = $data->getPriority();
        }
        if ($data->isInitialized('port')) {
            $dataArray['port'] = $data->getPort();
        }
        if ($data->isInitialized('ttl') && null !== $data->getTtl()) {
            $dataArray['ttl'] = $data->getTtl();
        }
        if ($data->isInitialized('weight')) {
            $dataArray['weight'] = $data->getWeight();
        }
        if ($data->isInitialized('flags')) {
            $dataArray['flags'] = $data->getFlags();
        }
        if ($data->isInitialized('tag')) {
            $dataArray['tag'] = $data->getTag();
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
        return [\Jane\Generated\DigitalOcean\Model\DomainRecordMx::class => false];
    }
}