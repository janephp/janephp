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
class ValidationErrorErrorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ValidationErrorErrorsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ValidationErrorErrorsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ValidationErrorErrorsItem();
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
            $this->validate($data, new \Github\Validator\ValidationErrorErrorsItemConstraint());
        }
        if (\array_key_exists('resource', $data)) {
            $object->setResource($data['resource']);
            unset($data['resource']);
        }
        if (\array_key_exists('field', $data)) {
            $object->setField($data['field']);
            unset($data['field']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        if (\array_key_exists('index', $data)) {
            $object->setIndex($data['index']);
            unset($data['index']);
        }
        if (\array_key_exists('value', $data)) {
            $value = $data['value'];
            if (is_string($data['value'])) {
                $value = $data['value'];
            } elseif (is_int($data['value'])) {
                $value = $data['value'];
            } elseif (is_array($data['value']) && $this->isOnlyNumericKeys($data['value'])) {
                $values = [];
                foreach ($data['value'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            }
            $object->setValue($value);
            unset($data['value']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('resource') && null !== $data->getResource()) {
            $dataArray['resource'] = $data->getResource();
        }
        if ($data->isInitialized('field') && null !== $data->getField()) {
            $dataArray['field'] = $data->getField();
        }
        if ($data->isInitialized('message') && null !== $data->getMessage()) {
            $dataArray['message'] = $data->getMessage();
        }
        $dataArray['code'] = $data->getCode();
        if ($data->isInitialized('index') && null !== $data->getIndex()) {
            $dataArray['index'] = $data->getIndex();
        }
        if ($data->isInitialized('value') && null !== $data->getValue()) {
            $value = $data->getValue();
            if (is_string($data->getValue())) {
                $value = $data->getValue();
            } elseif (is_int($data->getValue())) {
                $value = $data->getValue();
            } elseif (is_array($data->getValue())) {
                $values = [];
                foreach ($data->getValue() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            }
            $dataArray['value'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ValidationErrorErrorsItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ValidationErrorErrorsItem::class => false];
    }
}