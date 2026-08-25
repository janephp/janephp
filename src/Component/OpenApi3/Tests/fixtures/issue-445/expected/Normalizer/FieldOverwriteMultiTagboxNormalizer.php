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
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
            unset($data['id']);
        }
        if (\array_key_exists('required', $data)) {
            $object->setRequired($data['required']);
            unset($data['required']);
        }
        if (\array_key_exists('overwriteRequired', $data)) {
            $object->setOverwriteRequired($data['overwriteRequired']);
            unset($data['overwriteRequired']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $object->setFilter($data['filter']);
            unset($data['filter']);
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->setFilter(null);
            unset($data['filter']);
        }
        if (\array_key_exists('overwriteFilter', $data)) {
            $object->setOverwriteFilter($data['overwriteFilter']);
            unset($data['overwriteFilter']);
        }
        if (\array_key_exists('listItemCreateTemplate', $data) && $data['listItemCreateTemplate'] !== null) {
            $object->setListItemCreateTemplate($data['listItemCreateTemplate']);
            unset($data['listItemCreateTemplate']);
        }
        elseif (\array_key_exists('listItemCreateTemplate', $data) && $data['listItemCreateTemplate'] === null) {
            $object->setListItemCreateTemplate(null);
            unset($data['listItemCreateTemplate']);
        }
        if (\array_key_exists('overwriteListItemCreateTemplate', $data)) {
            $object->setOverwriteListItemCreateTemplate($data['overwriteListItemCreateTemplate']);
            unset($data['overwriteListItemCreateTemplate']);
        }
        if (\array_key_exists('maximumItems', $data) && $data['maximumItems'] !== null) {
            $object->setMaximumItems($data['maximumItems']);
            unset($data['maximumItems']);
        }
        elseif (\array_key_exists('maximumItems', $data) && $data['maximumItems'] === null) {
            $object->setMaximumItems(null);
            unset($data['maximumItems']);
        }
        if (\array_key_exists('overwriteMaximumItems', $data)) {
            $object->setOverwriteMaximumItems($data['overwriteMaximumItems']);
            unset($data['overwriteMaximumItems']);
        }
        if (\array_key_exists('minimumItems', $data) && $data['minimumItems'] !== null) {
            $object->setMinimumItems($data['minimumItems']);
            unset($data['minimumItems']);
        }
        elseif (\array_key_exists('minimumItems', $data) && $data['minimumItems'] === null) {
            $object->setMinimumItems(null);
            unset($data['minimumItems']);
        }
        if (\array_key_exists('overwriteMinimumItems', $data)) {
            $object->setOverwriteMinimumItems($data['overwriteMinimumItems']);
            unset($data['overwriteMinimumItems']);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        $dataArray['required'] = $data->getRequired();
        $dataArray['overwriteRequired'] = $data->getOverwriteRequired();
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('filter') && null !== $data->getFilter()) {
            $dataArray['filter'] = $data->getFilter();
        }
        if ($data->isInitialized('overwriteFilter') && null !== $data->getOverwriteFilter()) {
            $dataArray['overwriteFilter'] = $data->getOverwriteFilter();
        }
        if ($data->isInitialized('listItemCreateTemplate') && null !== $data->getListItemCreateTemplate()) {
            $dataArray['listItemCreateTemplate'] = $data->getListItemCreateTemplate();
        }
        if ($data->isInitialized('overwriteListItemCreateTemplate') && null !== $data->getOverwriteListItemCreateTemplate()) {
            $dataArray['overwriteListItemCreateTemplate'] = $data->getOverwriteListItemCreateTemplate();
        }
        if ($data->isInitialized('maximumItems') && null !== $data->getMaximumItems()) {
            $dataArray['maximumItems'] = $data->getMaximumItems();
        }
        if ($data->isInitialized('overwriteMaximumItems') && null !== $data->getOverwriteMaximumItems()) {
            $dataArray['overwriteMaximumItems'] = $data->getOverwriteMaximumItems();
        }
        if ($data->isInitialized('minimumItems') && null !== $data->getMinimumItems()) {
            $dataArray['minimumItems'] = $data->getMinimumItems();
        }
        if ($data->isInitialized('overwriteMinimumItems') && null !== $data->getOverwriteMinimumItems()) {
            $dataArray['overwriteMinimumItems'] = $data->getOverwriteMinimumItems();
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
        return [\PicturePark\API\Model\FieldOverwriteMultiTagbox::class => false];
    }
}