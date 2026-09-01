<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\JsonSchema\Tests\Expected\Model\Test::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Test;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Test();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('date', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['date']);
            if (false === $date) {
                throw new \Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['date'], 'Y-m-d');
            }
            $object->date = $date->setTime(0, 0, 0);
        }
        if (\array_key_exists('dateOrNull', $data) && $data['dateOrNull'] !== null) {
            $date_1 = \DateTime::createFromFormat('Y-m-d', $data['dateOrNull']);
            if (false === $date_1) {
                throw new \Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['dateOrNull'], 'Y-m-d');
            }
            $object->dateOrNull = $date_1->setTime(0, 0, 0);
        }
        elseif (\array_key_exists('dateOrNull', $data) && $data['dateOrNull'] === null) {
            $object->dateOrNull = null;
        }
        if (\array_key_exists('dateOrNullOrInt', $data) && $data['dateOrNullOrInt'] !== null) {
            $value = $data['dateOrNullOrInt'];
            if (is_string($data['dateOrNullOrInt']) and false !== \DateTime::createFromFormat('Y-m-d', $data['dateOrNullOrInt'])) {
                $date_2 = \DateTime::createFromFormat('Y-m-d', $data['dateOrNullOrInt']);
                if (false === $date_2) {
                    throw new \Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['dateOrNullOrInt'], 'Y-m-d');
                }
                $value = $date_2->setTime(0, 0, 0);
            } elseif (is_null($data['dateOrNullOrInt'])) {
                $value = $data['dateOrNullOrInt'];
            } elseif (is_int($data['dateOrNullOrInt'])) {
                $value = $data['dateOrNullOrInt'];
            } elseif ('' === $data['dateOrNullOrInt']) {
                $value = null;
            } elseif (is_string($data['dateOrNullOrInt'])) {
                throw new \Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['dateOrNullOrInt'], 'Y-m-d');
            }
            $object->dateOrNullOrInt = $value;
        }
        elseif (\array_key_exists('dateOrNullOrInt', $data) && $data['dateOrNullOrInt'] === null) {
            $object->dateOrNullOrInt = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('date', get_object_vars($data)) && null !== ($data->date ?? null)) {
            $dataArray['date'] = ($data->date ?? null)->format('Y-m-d');
        }
        if (array_key_exists('dateOrNull', get_object_vars($data)) && null !== ($data->dateOrNull ?? null)) {
            $dataArray['dateOrNull'] = ($data->dateOrNull ?? null)?->format('Y-m-d');
        }
        if (array_key_exists('dateOrNullOrInt', get_object_vars($data)) && null !== ($data->dateOrNullOrInt ?? null)) {
            $value = $data->dateOrNullOrInt ?? null;
            if (is_object($data->dateOrNullOrInt ?? null)) {
                $value = ($data->dateOrNullOrInt ?? null)->format('Y-m-d');
            } elseif (is_null($data->dateOrNullOrInt ?? null)) {
                $value = $data->dateOrNullOrInt ?? null;
            } elseif (is_int($data->dateOrNullOrInt ?? null)) {
                $value = $data->dateOrNullOrInt ?? null;
            }
            $dataArray['dateOrNullOrInt'] = $value;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\JsonSchema\Tests\Expected\Model\Test::class => false];
    }
}