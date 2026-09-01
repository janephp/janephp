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
class SwarmSpecCAConfigExternalCAsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\SwarmSpecCAConfigExternalCAsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\SwarmSpecCAConfigExternalCAsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\SwarmSpecCAConfigExternalCAsItem();
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
            $this->validate($data, new \Docker\Api\Validator\SwarmSpecCAConfigExternalCAsItemConstraint());
        }
        if (\array_key_exists('Protocol', $data)) {
            $object->protocol = $data['Protocol'];
        }
        if (\array_key_exists('URL', $data)) {
            $object->uRL = $data['URL'];
        }
        if (\array_key_exists('Options', $data)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Options'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->options = $values;
        }
        if (\array_key_exists('CACert', $data)) {
            $object->cACert = $data['CACert'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $dataArray['Protocol'] = $data->protocol ?? null;
        }
        if (array_key_exists('uRL', get_object_vars($data)) && null !== ($data->uRL ?? null)) {
            $dataArray['URL'] = $data->uRL ?? null;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->options ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Options'] = $values;
        }
        if (array_key_exists('cACert', get_object_vars($data)) && null !== ($data->cACert ?? null)) {
            $dataArray['CACert'] = $data->cACert ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\SwarmSpecCAConfigExternalCAsItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\SwarmSpecCAConfigExternalCAsItem::class => false];
    }
}