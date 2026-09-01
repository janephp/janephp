<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FieldOverwriteMultiTagboxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FieldOverwriteMultiTagbox::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FieldOverwriteMultiTagbox::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\FieldOverwriteMultiTagbox();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('required', $data) && \is_int($data['required'])) {
            $data['required'] = (bool) $data['required'];
        }
        if (\array_key_exists('overwriteRequired', $data) && \is_int($data['overwriteRequired'])) {
            $data['overwriteRequired'] = (bool) $data['overwriteRequired'];
        }
        if (\array_key_exists('overwriteFilter', $data) && \is_int($data['overwriteFilter'])) {
            $data['overwriteFilter'] = (bool) $data['overwriteFilter'];
        }
        if (\array_key_exists('overwriteListItemCreateTemplate', $data) && \is_int($data['overwriteListItemCreateTemplate'])) {
            $data['overwriteListItemCreateTemplate'] = (bool) $data['overwriteListItemCreateTemplate'];
        }
        if (\array_key_exists('overwriteMaximumItems', $data) && \is_int($data['overwriteMaximumItems'])) {
            $data['overwriteMaximumItems'] = (bool) $data['overwriteMaximumItems'];
        }
        if (\array_key_exists('overwriteMinimumItems', $data) && \is_int($data['overwriteMinimumItems'])) {
            $data['overwriteMinimumItems'] = (bool) $data['overwriteMinimumItems'];
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
            unset($data['id']);
        }
        if (\array_key_exists('required', $data)) {
            $object->required = $data['required'];
            unset($data['required']);
        }
        if (\array_key_exists('overwriteRequired', $data)) {
            $object->overwriteRequired = $data['overwriteRequired'];
            unset($data['overwriteRequired']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->filter = $value;
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
            unset($data['filter']);
        }
        if (\array_key_exists('overwriteFilter', $data)) {
            $object->overwriteFilter = $data['overwriteFilter'];
            unset($data['overwriteFilter']);
        }
        if (\array_key_exists('listItemCreateTemplate', $data) && $data['listItemCreateTemplate'] !== null) {
            $object->listItemCreateTemplate = $data['listItemCreateTemplate'];
            unset($data['listItemCreateTemplate']);
        }
        elseif (\array_key_exists('listItemCreateTemplate', $data) && $data['listItemCreateTemplate'] === null) {
            $object->listItemCreateTemplate = null;
            unset($data['listItemCreateTemplate']);
        }
        if (\array_key_exists('overwriteListItemCreateTemplate', $data)) {
            $object->overwriteListItemCreateTemplate = $data['overwriteListItemCreateTemplate'];
            unset($data['overwriteListItemCreateTemplate']);
        }
        if (\array_key_exists('maximumItems', $data) && $data['maximumItems'] !== null) {
            $object->maximumItems = $data['maximumItems'];
            unset($data['maximumItems']);
        }
        elseif (\array_key_exists('maximumItems', $data) && $data['maximumItems'] === null) {
            $object->maximumItems = null;
            unset($data['maximumItems']);
        }
        if (\array_key_exists('overwriteMaximumItems', $data)) {
            $object->overwriteMaximumItems = $data['overwriteMaximumItems'];
            unset($data['overwriteMaximumItems']);
        }
        if (\array_key_exists('minimumItems', $data) && $data['minimumItems'] !== null) {
            $object->minimumItems = $data['minimumItems'];
            unset($data['minimumItems']);
        }
        elseif (\array_key_exists('minimumItems', $data) && $data['minimumItems'] === null) {
            $object->minimumItems = null;
            unset($data['minimumItems']);
        }
        if (\array_key_exists('overwriteMinimumItems', $data)) {
            $object->overwriteMinimumItems = $data['overwriteMinimumItems'];
            unset($data['overwriteMinimumItems']);
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        $dataArray['required'] = $data->required ?? null;
        $dataArray['overwriteRequired'] = $data->overwriteRequired ?? null;
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value = $data->filter ?? null;
            if (is_object($data->filter ?? null)) {
                $value = ($data->filter ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
            }
            $dataArray['filter'] = $value;
        }
        if (array_key_exists('overwriteFilter', get_object_vars($data)) && null !== ($data->overwriteFilter ?? null)) {
            $dataArray['overwriteFilter'] = $data->overwriteFilter ?? null;
        }
        if (array_key_exists('listItemCreateTemplate', get_object_vars($data)) && null !== ($data->listItemCreateTemplate ?? null)) {
            $dataArray['listItemCreateTemplate'] = $data->listItemCreateTemplate ?? null;
        }
        if (array_key_exists('overwriteListItemCreateTemplate', get_object_vars($data)) && null !== ($data->overwriteListItemCreateTemplate ?? null)) {
            $dataArray['overwriteListItemCreateTemplate'] = $data->overwriteListItemCreateTemplate ?? null;
        }
        if (array_key_exists('maximumItems', get_object_vars($data)) && null !== ($data->maximumItems ?? null)) {
            $dataArray['maximumItems'] = $data->maximumItems ?? null;
        }
        if (array_key_exists('overwriteMaximumItems', get_object_vars($data)) && null !== ($data->overwriteMaximumItems ?? null)) {
            $dataArray['overwriteMaximumItems'] = $data->overwriteMaximumItems ?? null;
        }
        if (array_key_exists('minimumItems', get_object_vars($data)) && null !== ($data->minimumItems ?? null)) {
            $dataArray['minimumItems'] = $data->minimumItems ?? null;
        }
        if (array_key_exists('overwriteMinimumItems', get_object_vars($data)) && null !== ($data->overwriteMinimumItems ?? null)) {
            $dataArray['overwriteMinimumItems'] = $data->overwriteMinimumItems ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FieldOverwriteMultiTagbox::class => false];
    }
}