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
class OptionsVersionAvailabilityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\OptionsVersionAvailability::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\OptionsVersionAvailability::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\OptionsVersionAvailability();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kafka', $data)) {
            $values = [];
            foreach ($data['kafka'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\DatabaseVersionAvailability::class, 'json', $context);
            }
            $object->setKafka($values);
            unset($data['kafka']);
        }
        if (\array_key_exists('pg', $data)) {
            $values_1 = [];
            foreach ($data['pg'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\DatabaseVersionAvailability::class, 'json', $context);
            }
            $object->setPg($values_1);
            unset($data['pg']);
        }
        if (\array_key_exists('mysql', $data)) {
            $values_2 = [];
            foreach ($data['mysql'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\DatabaseVersionAvailability::class, 'json', $context);
            }
            $object->setMysql($values_2);
            unset($data['mysql']);
        }
        if (\array_key_exists('redis', $data)) {
            $values_3 = [];
            foreach ($data['redis'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\DatabaseVersionAvailability::class, 'json', $context);
            }
            $object->setRedis($values_3);
            unset($data['redis']);
        }
        if (\array_key_exists('valkey', $data)) {
            $values_4 = [];
            foreach ($data['valkey'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jane\Generated\DigitalOcean\Model\DatabaseVersionAvailability::class, 'json', $context);
            }
            $object->setValkey($values_4);
            unset($data['valkey']);
        }
        if (\array_key_exists('mongodb', $data)) {
            $values_5 = [];
            foreach ($data['mongodb'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Jane\Generated\DigitalOcean\Model\DatabaseVersionAvailability::class, 'json', $context);
            }
            $object->setMongodb($values_5);
            unset($data['mongodb']);
        }
        if (\array_key_exists('opensearch', $data)) {
            $values_6 = [];
            foreach ($data['opensearch'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Jane\Generated\DigitalOcean\Model\DatabaseVersionAvailability::class, 'json', $context);
            }
            $object->setOpensearch($values_6);
            unset($data['opensearch']);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('kafka') && null !== $data->getKafka()) {
            $values = [];
            foreach ($data->getKafka() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['kafka'] = $values;
        }
        if ($data->isInitialized('pg') && null !== $data->getPg()) {
            $values_1 = [];
            foreach ($data->getPg() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['pg'] = $values_1;
        }
        if ($data->isInitialized('mysql') && null !== $data->getMysql()) {
            $values_2 = [];
            foreach ($data->getMysql() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['mysql'] = $values_2;
        }
        if ($data->isInitialized('redis') && null !== $data->getRedis()) {
            $values_3 = [];
            foreach ($data->getRedis() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['redis'] = $values_3;
        }
        if ($data->isInitialized('valkey') && null !== $data->getValkey()) {
            $values_4 = [];
            foreach ($data->getValkey() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['valkey'] = $values_4;
        }
        if ($data->isInitialized('mongodb') && null !== $data->getMongodb()) {
            $values_5 = [];
            foreach ($data->getMongodb() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['mongodb'] = $values_5;
        }
        if ($data->isInitialized('opensearch') && null !== $data->getOpensearch()) {
            $values_6 = [];
            foreach ($data->getOpensearch() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['opensearch'] = $values_6;
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\OptionsVersionAvailability::class => false];
    }
}