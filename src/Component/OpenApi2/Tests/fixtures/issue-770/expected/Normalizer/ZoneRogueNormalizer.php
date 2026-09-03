<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ZoneRogueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneRogue::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneRogue::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneRogue();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('protectionEnabled', $data) && \is_int($data['protectionEnabled'])) {
            $data['protectionEnabled'] = (bool) $data['protectionEnabled'];
        }
        if (\array_key_exists('reportType', $data)) {
            $object->reportType = $data['reportType'];
        }
        if (\array_key_exists('maliciousTypes', $data)) {
            $values = [];
            foreach ($data['maliciousTypes'] as $value) {
                $values[] = $value;
            }
            $object->maliciousTypes = $values;
        }
        if (\array_key_exists('protectionEnabled', $data)) {
            $object->protectionEnabled = $data['protectionEnabled'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('reportType', get_object_vars($data)) && null !== ($data->reportType ?? null)) {
            $dataArray['reportType'] = $data->reportType ?? null;
        }
        if (array_key_exists('maliciousTypes', get_object_vars($data)) && null !== ($data->maliciousTypes ?? null)) {
            $values = [];
            foreach ($data->maliciousTypes ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['maliciousTypes'] = $values;
        }
        if (array_key_exists('protectionEnabled', get_object_vars($data)) && null !== ($data->protectionEnabled ?? null)) {
            $dataArray['protectionEnabled'] = $data->protectionEnabled ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneRogue::class => false];
    }
}