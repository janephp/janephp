<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScimUserOperationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ScimUserOperationsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ScimUserOperationsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ScimUserOperationsItem();
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
            $this->validate($data, new \Github\Validator\ScimUserOperationsItemConstraint());
        }
        if (\array_key_exists('op', $data)) {
            $object->setOp($data['op']);
            unset($data['op']);
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
            unset($data['path']);
        }
        if (\array_key_exists('value', $data)) {
            $value = $data['value'];
            if (is_string($data['value'])) {
                $value = $data['value'];
            } elseif (is_array($data['value']) && $this->isOnlyNumericKeys($data['value'])) {
                $values = new \Github\Runtime\JsonObject();
                foreach ($data['value'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            } elseif (is_array($data['value']) && $this->isOnlyNumericKeys($data['value'])) {
                $values_1 = [];
                foreach ($data['value'] as $value_2) {
                    $values_1[] = $value_2;
                }
                $value = $values_1;
            }
            $object->setValue($value);
            unset($data['value']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['op'] = $data->getOp();
        if ($data->isInitialized('path') && null !== $data->getPath()) {
            $dataArray['path'] = $data->getPath();
        }
        if ($data->isInitialized('value') && null !== $data->getValue()) {
            $value = $data->getValue();
            if (is_string($data->getValue())) {
                $value = $data->getValue();
            } elseif (is_object($data->getValue())) {
                $values = new \Github\Runtime\JsonObject();
                foreach ($data->getValue() as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            } elseif (is_array($data->getValue())) {
                $values_1 = [];
                foreach ($data->getValue() as $value_2) {
                    $values_1[] = $value_2;
                }
                $value = $values_1;
            }
            $dataArray['value'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ScimUserOperationsItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ScimUserOperationsItem::class => false];
    }
}