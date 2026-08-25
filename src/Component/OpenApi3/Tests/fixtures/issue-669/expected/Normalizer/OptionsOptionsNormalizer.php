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
class OptionsOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\OptionsOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\OptionsOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\OptionsOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('kafka', $data)) {
            $object->setKafka($this->denormalizer->denormalize($data['kafka'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsKafka::class, 'json', $context));
            unset($data['kafka']);
        }
        if (\array_key_exists('mongodb', $data)) {
            $object->setMongodb($this->denormalizer->denormalize($data['mongodb'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsMongodb::class, 'json', $context));
            unset($data['mongodb']);
        }
        if (\array_key_exists('pg', $data)) {
            $object->setPg($this->denormalizer->denormalize($data['pg'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsPg::class, 'json', $context));
            unset($data['pg']);
        }
        if (\array_key_exists('mysql', $data)) {
            $object->setMysql($this->denormalizer->denormalize($data['mysql'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsMysql::class, 'json', $context));
            unset($data['mysql']);
        }
        if (\array_key_exists('redis', $data)) {
            $object->setRedis($this->denormalizer->denormalize($data['redis'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsRedis::class, 'json', $context));
            unset($data['redis']);
        }
        if (\array_key_exists('valkey', $data)) {
            $object->setValkey($this->denormalizer->denormalize($data['valkey'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsValkey::class, 'json', $context));
            unset($data['valkey']);
        }
        if (\array_key_exists('opensearch', $data)) {
            $object->setOpensearch($this->denormalizer->denormalize($data['opensearch'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsOpensearch::class, 'json', $context));
            unset($data['opensearch']);
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
        if ($data->isInitialized('kafka') && null !== $data->getKafka()) {
            $dataArray['kafka'] = $data->getKafka() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getKafka(), 'json', $context));
        }
        if ($data->isInitialized('mongodb') && null !== $data->getMongodb()) {
            $dataArray['mongodb'] = $data->getMongodb() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getMongodb(), 'json', $context));
        }
        if ($data->isInitialized('pg') && null !== $data->getPg()) {
            $dataArray['pg'] = $data->getPg() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getPg(), 'json', $context));
        }
        if ($data->isInitialized('mysql') && null !== $data->getMysql()) {
            $dataArray['mysql'] = $data->getMysql() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getMysql(), 'json', $context));
        }
        if ($data->isInitialized('redis') && null !== $data->getRedis()) {
            $dataArray['redis'] = $data->getRedis() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getRedis(), 'json', $context));
        }
        if ($data->isInitialized('valkey') && null !== $data->getValkey()) {
            $dataArray['valkey'] = $data->getValkey() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getValkey(), 'json', $context));
        }
        if ($data->isInitialized('opensearch') && null !== $data->getOpensearch()) {
            $dataArray['opensearch'] = $data->getOpensearch() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getOpensearch(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\OptionsOptions::class => false];
    }
}