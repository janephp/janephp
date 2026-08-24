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
class SearchResultTextMatchesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\SearchResultTextMatchesItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\SearchResultTextMatchesItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\SearchResultTextMatchesItem();
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
            $this->validate($data, new \Github\Validator\SearchResultTextMatchesItemConstraint());
        }
        if (\array_key_exists('object_url', $data)) {
            $object->setObjectUrl($data['object_url']);
            unset($data['object_url']);
        }
        if (\array_key_exists('object_type', $data) && $data['object_type'] !== null) {
            $object->setObjectType($data['object_type']);
            unset($data['object_type']);
        }
        elseif (\array_key_exists('object_type', $data) && $data['object_type'] === null) {
            $object->setObjectType(null);
        }
        if (\array_key_exists('property', $data)) {
            $object->setProperty($data['property']);
            unset($data['property']);
        }
        if (\array_key_exists('fragment', $data)) {
            $object->setFragment($data['fragment']);
            unset($data['fragment']);
        }
        if (\array_key_exists('matches', $data)) {
            $values = [];
            foreach ($data['matches'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\SearchResultTextMatchesItemMatchesItem::class, 'json', $context);
            }
            $object->setMatches($values);
            unset($data['matches']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('objectUrl') && null !== $data->getObjectUrl()) {
            $dataArray['object_url'] = $data->getObjectUrl();
        }
        if ($data->isInitialized('objectType') && null !== $data->getObjectType()) {
            $dataArray['object_type'] = $data->getObjectType();
        }
        if ($data->isInitialized('property') && null !== $data->getProperty()) {
            $dataArray['property'] = $data->getProperty();
        }
        if ($data->isInitialized('fragment') && null !== $data->getFragment()) {
            $dataArray['fragment'] = $data->getFragment();
        }
        if ($data->isInitialized('matches') && null !== $data->getMatches()) {
            $values = [];
            foreach ($data->getMatches() as $value) {
                $values[] = $value === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['matches'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\SearchResultTextMatchesItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\SearchResultTextMatchesItem::class => false];
    }
}