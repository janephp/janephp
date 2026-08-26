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
            $date = \DateTime::createFromFormat('l, d-M-y H:i:s T', $data['date']);
            if (false === $date) {
                throw new \Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['date'], 'l, d-M-y H:i:s T');
            }
            $object->setDate($date);
        }
        if (\array_key_exists('dateOrNull', $data) && $data['dateOrNull'] !== null) {
            $date_1 = \DateTime::createFromFormat('l, d-M-y H:i:s T', $data['dateOrNull']);
            if (false === $date_1) {
                throw new \Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['dateOrNull'], 'l, d-M-y H:i:s T');
            }
            $object->setDateOrNull($date_1);
        }
        elseif (\array_key_exists('dateOrNull', $data) && $data['dateOrNull'] === null) {
            $object->setDateOrNull(null);
        }
        if (\array_key_exists('dateOrNullOrInt', $data) && $data['dateOrNullOrInt'] !== null) {
            $value = $data['dateOrNullOrInt'];
            if (is_string($data['dateOrNullOrInt']) and false !== \DateTime::createFromFormat('l, d-M-y H:i:s T', $data['dateOrNullOrInt'])) {
                $date_2 = \DateTime::createFromFormat('l, d-M-y H:i:s T', $data['dateOrNullOrInt']);
                if (false === $date_2) {
                    throw new \Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['dateOrNullOrInt'], 'l, d-M-y H:i:s T');
                }
                $value = $date_2;
            } elseif (is_null($data['dateOrNullOrInt'])) {
                $value = $data['dateOrNullOrInt'];
            } elseif (is_int($data['dateOrNullOrInt'])) {
                $value = $data['dateOrNullOrInt'];
            } elseif ('' === $data['dateOrNullOrInt']) {
                $value = null;
            } elseif (is_string($data['dateOrNullOrInt'])) {
                throw new \Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['dateOrNullOrInt'], 'l, d-M-y H:i:s T');
            }
            $object->setDateOrNullOrInt($value);
        }
        elseif (\array_key_exists('dateOrNullOrInt', $data) && $data['dateOrNullOrInt'] === null) {
            $object->setDateOrNullOrInt(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('date') && null !== $data->getDate()) {
            $dataArray['date'] = $data->getDate()->format('l, d-M-y H:i:s T');
        }
        if ($data->isInitialized('dateOrNull') && null !== $data->getDateOrNull()) {
            $dataArray['dateOrNull'] = $data->getDateOrNull()?->format('l, d-M-y H:i:s T');
        }
        if ($data->isInitialized('dateOrNullOrInt') && null !== $data->getDateOrNullOrInt()) {
            $value = $data->getDateOrNullOrInt();
            if (is_object($data->getDateOrNullOrInt())) {
                $value = $data->getDateOrNullOrInt()->format('l, d-M-y H:i:s T');
            } elseif (is_null($data->getDateOrNullOrInt())) {
                $value = $data->getDateOrNullOrInt();
            } elseif (is_int($data->getDateOrNullOrInt())) {
                $value = $data->getDateOrNullOrInt();
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