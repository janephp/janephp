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
class PagingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\Paging::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\Paging::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\Paging();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('size', $data) && \is_int($data['size'])) {
            $data['size'] = (float) $data['size'];
        }
        if (\array_key_exists('prev', $data) && \is_int($data['prev'])) {
            $data['prev'] = (float) $data['prev'];
        }
        if (\array_key_exists('next', $data) && \is_int($data['next'])) {
            $data['next'] = (float) $data['next'];
        }
        if (\array_key_exists('last', $data) && \is_int($data['last'])) {
            $data['last'] = (float) $data['last'];
        }
        if (\array_key_exists('size', $data)) {
            $object->size = $data['size'];
            unset($data['size']);
        }
        if (\array_key_exists('prev', $data)) {
            $object->prev = $data['prev'];
            unset($data['prev']);
        }
        if (\array_key_exists('next', $data)) {
            $object->next = $data['next'];
            unset($data['next']);
        }
        if (\array_key_exists('last', $data)) {
            $object->last = $data['last'];
            unset($data['last']);
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
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $dataArray['size'] = $data->size ?? null;
        }
        if (array_key_exists('prev', get_object_vars($data)) && null !== ($data->prev ?? null)) {
            $dataArray['prev'] = $data->prev ?? null;
        }
        if (array_key_exists('next', get_object_vars($data)) && null !== ($data->next ?? null)) {
            $dataArray['next'] = $data->next ?? null;
        }
        if (array_key_exists('last', get_object_vars($data)) && null !== ($data->last ?? null)) {
            $dataArray['last'] = $data->last ?? null;
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
        return [\CreditSafe\API\Model\Paging::class => false];
    }
}