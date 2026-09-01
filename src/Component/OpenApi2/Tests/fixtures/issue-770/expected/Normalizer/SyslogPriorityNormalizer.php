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
class SyslogPriorityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogPriority::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogPriority::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogPriority();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('critical', $data)) {
            $object->critical = $data['critical'];
        }
        if (\array_key_exists('major', $data)) {
            $object->major = $data['major'];
        }
        if (\array_key_exists('minor', $data)) {
            $object->minor = $data['minor'];
        }
        if (\array_key_exists('warning', $data)) {
            $object->warning = $data['warning'];
        }
        if (\array_key_exists('informational', $data)) {
            $object->informational = $data['informational'];
        }
        if (\array_key_exists('debug', $data)) {
            $object->debug = $data['debug'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('critical', get_object_vars($data)) && null !== ($data->critical ?? null)) {
            $dataArray['critical'] = $data->critical ?? null;
        }
        if (array_key_exists('major', get_object_vars($data)) && null !== ($data->major ?? null)) {
            $dataArray['major'] = $data->major ?? null;
        }
        if (array_key_exists('minor', get_object_vars($data)) && null !== ($data->minor ?? null)) {
            $dataArray['minor'] = $data->minor ?? null;
        }
        if (array_key_exists('warning', get_object_vars($data)) && null !== ($data->warning ?? null)) {
            $dataArray['warning'] = $data->warning ?? null;
        }
        if (array_key_exists('informational', get_object_vars($data)) && null !== ($data->informational ?? null)) {
            $dataArray['informational'] = $data->informational ?? null;
        }
        if (array_key_exists('debug', get_object_vars($data)) && null !== ($data->debug ?? null)) {
            $dataArray['debug'] = $data->debug ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogPriority::class => false];
    }
}