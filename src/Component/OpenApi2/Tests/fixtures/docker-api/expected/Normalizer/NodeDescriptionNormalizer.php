<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NodeDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\NodeDescription::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\NodeDescription::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\NodeDescription();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\NodeDescriptionConstraint());
        }
        if (\array_key_exists('Hostname', $data)) {
            $object->hostname = $data['Hostname'];
        }
        if (\array_key_exists('Platform', $data)) {
            $object->platform = $this->denormalizer->denormalize($data['Platform'], \Docker\Api\Model\Platform::class, 'json', $context);
        }
        if (\array_key_exists('Resources', $data)) {
            $object->resources = $this->denormalizer->denormalize($data['Resources'], \Docker\Api\Model\ResourceObject::class, 'json', $context);
        }
        if (\array_key_exists('Engine', $data)) {
            $object->engine = $this->denormalizer->denormalize($data['Engine'], \Docker\Api\Model\EngineDescription::class, 'json', $context);
        }
        if (\array_key_exists('TLSInfo', $data)) {
            $object->tLSInfo = $this->denormalizer->denormalize($data['TLSInfo'], \Docker\Api\Model\TLSInfo::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('hostname', get_object_vars($data)) && null !== ($data->hostname ?? null)) {
            $dataArray['Hostname'] = $data->hostname ?? null;
        }
        if (array_key_exists('platform', get_object_vars($data)) && null !== ($data->platform ?? null)) {
            $dataArray['Platform'] = ($data->platform ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->platform ?? null, 'json', $context));
        }
        if (array_key_exists('resources', get_object_vars($data)) && null !== ($data->resources ?? null)) {
            $dataArray['Resources'] = ($data->resources ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->resources ?? null, 'json', $context));
        }
        if (array_key_exists('engine', get_object_vars($data)) && null !== ($data->engine ?? null)) {
            $dataArray['Engine'] = ($data->engine ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->engine ?? null, 'json', $context));
        }
        if (array_key_exists('tLSInfo', get_object_vars($data)) && null !== ($data->tLSInfo ?? null)) {
            $dataArray['TLSInfo'] = ($data->tLSInfo ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->tLSInfo ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\NodeDescriptionConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\NodeDescription::class => false];
    }
}