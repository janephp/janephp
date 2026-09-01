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
class ClusterlintResultsDiagnosticsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ClusterlintResultsDiagnosticsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ClusterlintResultsDiagnosticsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ClusterlintResultsDiagnosticsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('check_name', $data)) {
            $object->checkName = $data['check_name'];
            unset($data['check_name']);
        }
        if (\array_key_exists('severity', $data)) {
            $object->severity = $data['severity'];
            unset($data['severity']);
        }
        if (\array_key_exists('message', $data)) {
            $object->message = $data['message'];
            unset($data['message']);
        }
        if (\array_key_exists('object', $data)) {
            $object->object = $this->denormalizer->denormalize($data['object'], \Jane\Generated\DigitalOcean\Model\ClusterlintResultsDiagnosticsItemObject::class, 'json', $context);
            unset($data['object']);
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
        if (array_key_exists('checkName', get_object_vars($data)) && null !== ($data->checkName ?? null)) {
            $dataArray['check_name'] = $data->checkName ?? null;
        }
        if (array_key_exists('severity', get_object_vars($data)) && null !== ($data->severity ?? null)) {
            $dataArray['severity'] = $data->severity ?? null;
        }
        if (array_key_exists('message', get_object_vars($data)) && null !== ($data->message ?? null)) {
            $dataArray['message'] = $data->message ?? null;
        }
        if (array_key_exists('object', get_object_vars($data)) && null !== ($data->object ?? null)) {
            $dataArray['object'] = ($data->object ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->object ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\ClusterlintResultsDiagnosticsItem::class => false];
    }
}