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
class FieldStringArrayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FieldStringArray::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FieldStringArray::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\FieldStringArray();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('boost', $data) && \is_int($data['boost'])) {
            $data['boost'] = (float) $data['boost'];
        }
        if (\array_key_exists('required', $data) && \is_int($data['required'])) {
            $data['required'] = (bool) $data['required'];
        }
        if (\array_key_exists('fixed', $data) && \is_int($data['fixed'])) {
            $data['fixed'] = (bool) $data['fixed'];
        }
        if (\array_key_exists('index', $data) && \is_int($data['index'])) {
            $data['index'] = (bool) $data['index'];
        }
        if (\array_key_exists('simpleSearch', $data) && \is_int($data['simpleSearch'])) {
            $data['simpleSearch'] = (bool) $data['simpleSearch'];
        }
        if (\array_key_exists('sortable', $data) && \is_int($data['sortable'])) {
            $data['sortable'] = (bool) $data['sortable'];
        }
        if (\array_key_exists('multiLine', $data) && \is_int($data['multiLine'])) {
            $data['multiLine'] = (bool) $data['multiLine'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('indexId', $data) && $data['indexId'] !== null) {
            $object->setIndexId($data['indexId']);
            unset($data['indexId']);
        }
        elseif (\array_key_exists('indexId', $data) && $data['indexId'] === null) {
            $object->setIndexId(null);
            unset($data['indexId']);
        }
        if (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] !== null) {
            $object->setFieldNamespace($data['fieldNamespace']);
            unset($data['fieldNamespace']);
        }
        elseif (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] === null) {
            $object->setFieldNamespace(null);
            unset($data['fieldNamespace']);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $value = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $object->setNames($value);
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
            unset($data['names']);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $value_2 = $data['descriptions'];
            if (is_array($data['descriptions']) && $this->isOnlyNumericKeys($data['descriptions'])) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['descriptions'] as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $object->setDescriptions($value_2);
            unset($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
            unset($data['descriptions']);
        }
        if (\array_key_exists('required', $data)) {
            $object->setRequired($data['required']);
            unset($data['required']);
        }
        if (\array_key_exists('fixed', $data)) {
            $object->setFixed($data['fixed']);
            unset($data['fixed']);
        }
        if (\array_key_exists('index', $data)) {
            $object->setIndex($data['index']);
            unset($data['index']);
        }
        if (\array_key_exists('simpleSearch', $data)) {
            $object->setSimpleSearch($data['simpleSearch']);
            unset($data['simpleSearch']);
        }
        if (\array_key_exists('sortable', $data)) {
            $object->setSortable($data['sortable']);
            unset($data['sortable']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('template', $data) && $data['template'] !== null) {
            $object->setTemplate($data['template']);
            unset($data['template']);
        }
        elseif (\array_key_exists('template', $data) && $data['template'] === null) {
            $object->setTemplate(null);
            unset($data['template']);
        }
        if (\array_key_exists('pattern', $data) && $data['pattern'] !== null) {
            $object->setPattern($data['pattern']);
            unset($data['pattern']);
        }
        elseif (\array_key_exists('pattern', $data) && $data['pattern'] === null) {
            $object->setPattern(null);
            unset($data['pattern']);
        }
        if (\array_key_exists('minimumLength', $data) && $data['minimumLength'] !== null) {
            $object->setMinimumLength($data['minimumLength']);
            unset($data['minimumLength']);
        }
        elseif (\array_key_exists('minimumLength', $data) && $data['minimumLength'] === null) {
            $object->setMinimumLength(null);
            unset($data['minimumLength']);
        }
        if (\array_key_exists('maximumLength', $data) && $data['maximumLength'] !== null) {
            $object->setMaximumLength($data['maximumLength']);
            unset($data['maximumLength']);
        }
        elseif (\array_key_exists('maximumLength', $data) && $data['maximumLength'] === null) {
            $object->setMaximumLength(null);
            unset($data['maximumLength']);
        }
        if (\array_key_exists('indexAnalyzers', $data) && $data['indexAnalyzers'] !== null) {
            $values_2 = [];
            foreach ($data['indexAnalyzers'] as $value_4) {
                $values_2[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\AnalyzerBase::class, 'json', $context);
            }
            $object->setIndexAnalyzers($values_2);
            unset($data['indexAnalyzers']);
        }
        elseif (\array_key_exists('indexAnalyzers', $data) && $data['indexAnalyzers'] === null) {
            $object->setIndexAnalyzers(null);
            unset($data['indexAnalyzers']);
        }
        if (\array_key_exists('simpleSearchAnalyzers', $data) && $data['simpleSearchAnalyzers'] !== null) {
            $values_3 = [];
            foreach ($data['simpleSearchAnalyzers'] as $value_5) {
                $values_3[] = $this->denormalizer->denormalize($value_5, \PicturePark\API\Model\AnalyzerBase::class, 'json', $context);
            }
            $object->setSimpleSearchAnalyzers($values_3);
            unset($data['simpleSearchAnalyzers']);
        }
        elseif (\array_key_exists('simpleSearchAnalyzers', $data) && $data['simpleSearchAnalyzers'] === null) {
            $object->setSimpleSearchAnalyzers(null);
            unset($data['simpleSearchAnalyzers']);
        }
        if (\array_key_exists('multiLine', $data)) {
            $object->setMultiLine($data['multiLine']);
            unset($data['multiLine']);
        }
        if (\array_key_exists('grantedValues', $data) && $data['grantedValues'] !== null) {
            $values_4 = [];
            foreach ($data['grantedValues'] as $value_6) {
                $values_4[] = $value_6;
            }
            $object->setGrantedValues($values_4);
            unset($data['grantedValues']);
        }
        elseif (\array_key_exists('grantedValues', $data) && $data['grantedValues'] === null) {
            $object->setGrantedValues(null);
            unset($data['grantedValues']);
        }
        if (\array_key_exists('boost', $data)) {
            $object->setBoost($data['boost']);
            unset($data['boost']);
        }
        if (\array_key_exists('maximumItems', $data) && $data['maximumItems'] !== null) {
            $object->setMaximumItems($data['maximumItems']);
            unset($data['maximumItems']);
        }
        elseif (\array_key_exists('maximumItems', $data) && $data['maximumItems'] === null) {
            $object->setMaximumItems(null);
            unset($data['maximumItems']);
        }
        if (\array_key_exists('minimumItems', $data) && $data['minimumItems'] !== null) {
            $object->setMinimumItems($data['minimumItems']);
            unset($data['minimumItems']);
        }
        elseif (\array_key_exists('minimumItems', $data) && $data['minimumItems'] === null) {
            $object->setMinimumItems(null);
            unset($data['minimumItems']);
        }
        foreach ($data as $key_2 => $value_7) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_7;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('indexId') && null !== $data->getIndexId()) {
            $dataArray['indexId'] = $data->getIndexId();
        }
        if ($data->isInitialized('fieldNamespace') && null !== $data->getFieldNamespace()) {
            $dataArray['fieldNamespace'] = $data->getFieldNamespace();
        }
        if ($data->isInitialized('names') && null !== $data->getNames()) {
            $value = $data->getNames();
            if (is_object($data->getNames())) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getNames() as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $dataArray['names'] = $value;
        }
        if ($data->isInitialized('descriptions') && null !== $data->getDescriptions()) {
            $value_2 = $data->getDescriptions();
            if (is_object($data->getDescriptions())) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getDescriptions() as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $dataArray['descriptions'] = $value_2;
        }
        $dataArray['required'] = $data->getRequired();
        $dataArray['fixed'] = $data->getFixed();
        $dataArray['index'] = $data->getIndex();
        $dataArray['simpleSearch'] = $data->getSimpleSearch();
        $dataArray['sortable'] = $data->getSortable();
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('template') && null !== $data->getTemplate()) {
            $dataArray['template'] = $data->getTemplate();
        }
        if ($data->isInitialized('pattern') && null !== $data->getPattern()) {
            $dataArray['pattern'] = $data->getPattern();
        }
        if ($data->isInitialized('minimumLength') && null !== $data->getMinimumLength()) {
            $dataArray['minimumLength'] = $data->getMinimumLength();
        }
        if ($data->isInitialized('maximumLength') && null !== $data->getMaximumLength()) {
            $dataArray['maximumLength'] = $data->getMaximumLength();
        }
        if ($data->isInitialized('indexAnalyzers') && null !== $data->getIndexAnalyzers()) {
            $values_2 = [];
            foreach ($data->getIndexAnalyzers() as $value_4) {
                $values_2[] = $value_4 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['indexAnalyzers'] = $values_2;
        }
        if ($data->isInitialized('simpleSearchAnalyzers') && null !== $data->getSimpleSearchAnalyzers()) {
            $values_3 = [];
            foreach ($data->getSimpleSearchAnalyzers() as $value_5) {
                $values_3[] = $value_5 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['simpleSearchAnalyzers'] = $values_3;
        }
        if ($data->isInitialized('multiLine') && null !== $data->getMultiLine()) {
            $dataArray['multiLine'] = $data->getMultiLine();
        }
        if ($data->isInitialized('grantedValues') && null !== $data->getGrantedValues()) {
            $values_4 = [];
            foreach ($data->getGrantedValues() as $value_6) {
                $values_4[] = $value_6;
            }
            $dataArray['grantedValues'] = $values_4;
        }
        if ($data->isInitialized('boost') && null !== $data->getBoost()) {
            $dataArray['boost'] = $data->getBoost();
        }
        if ($data->isInitialized('maximumItems') && null !== $data->getMaximumItems()) {
            $dataArray['maximumItems'] = $data->getMaximumItems();
        }
        if ($data->isInitialized('minimumItems') && null !== $data->getMinimumItems()) {
            $dataArray['minimumItems'] = $data->getMinimumItems();
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_7) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FieldStringArray::class => false];
    }
}