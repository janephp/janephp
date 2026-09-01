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
class IdentityQueryCriteriaOptionsLocalUserAuditTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaOptionsLocalUserAuditTime::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaOptionsLocalUserAuditTime::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaOptionsLocalUserAuditTime();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('start', $data) && \is_int($data['start'])) {
            $data['start'] = (float) $data['start'];
        }
        if (\array_key_exists('end', $data) && \is_int($data['end'])) {
            $data['end'] = (float) $data['end'];
        }
        if (\array_key_exists('interval', $data) && \is_int($data['interval'])) {
            $data['interval'] = (float) $data['interval'];
        }
        if (\array_key_exists('start', $data)) {
            $object->start = $data['start'];
        }
        if (\array_key_exists('end', $data)) {
            $object->end = $data['end'];
        }
        if (\array_key_exists('interval', $data)) {
            $object->interval = $data['interval'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('start', get_object_vars($data)) && null !== ($data->start ?? null)) {
            $dataArray['start'] = $data->start ?? null;
        }
        if (array_key_exists('end', get_object_vars($data)) && null !== ($data->end ?? null)) {
            $dataArray['end'] = $data->end ?? null;
        }
        if (array_key_exists('interval', get_object_vars($data)) && null !== ($data->interval ?? null)) {
            $dataArray['interval'] = $data->interval ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaOptionsLocalUserAuditTime::class => false];
    }
}