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
class FieldTranslatedStringNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FieldTranslatedString::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FieldTranslatedString::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\FieldTranslatedString();
        if (\array_key_exists('boost', $data) && \is_int($data['boost'])) {
            $data['boost'] = (double) $data['boost'];
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
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        }
        if (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] !== null) {
            $object->setFieldNamespace($data['fieldNamespace']);
            unset($data['fieldNamespace']);
        }
        elseif (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] === null) {
            $object->setFieldNamespace(null);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $object->setDescriptions($data['descriptions']);
            unset($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
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
        if (\array_key_exists('pattern', $data) && $data['pattern'] !== null) {
            $object->setPattern($data['pattern']);
            unset($data['pattern']);
        }
        elseif (\array_key_exists('pattern', $data) && $data['pattern'] === null) {
            $object->setPattern(null);
        }
        if (\array_key_exists('minimumLength', $data) && $data['minimumLength'] !== null) {
            $object->setMinimumLength($data['minimumLength']);
            unset($data['minimumLength']);
        }
        elseif (\array_key_exists('minimumLength', $data) && $data['minimumLength'] === null) {
            $object->setMinimumLength(null);
        }
        if (\array_key_exists('maximumLength', $data) && $data['maximumLength'] !== null) {
            $object->setMaximumLength($data['maximumLength']);
            unset($data['maximumLength']);
        }
        elseif (\array_key_exists('maximumLength', $data) && $data['maximumLength'] === null) {
            $object->setMaximumLength(null);
        }
        if (\array_key_exists('indexAnalyzers', $data) && $data['indexAnalyzers'] !== null) {
            $values = [];
            foreach ($data['indexAnalyzers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\AnalyzerBase::class, 'json', $context);
            }
            $object->setIndexAnalyzers($values);
            unset($data['indexAnalyzers']);
        }
        elseif (\array_key_exists('indexAnalyzers', $data) && $data['indexAnalyzers'] === null) {
            $object->setIndexAnalyzers(null);
        }
        if (\array_key_exists('simpleSearchAnalyzers', $data) && $data['simpleSearchAnalyzers'] !== null) {
            $values_1 = [];
            foreach ($data['simpleSearchAnalyzers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\AnalyzerBase::class, 'json', $context);
            }
            $object->setSimpleSearchAnalyzers($values_1);
            unset($data['simpleSearchAnalyzers']);
        }
        elseif (\array_key_exists('simpleSearchAnalyzers', $data) && $data['simpleSearchAnalyzers'] === null) {
            $object->setSimpleSearchAnalyzers(null);
        }
        if (\array_key_exists('multiLine', $data)) {
            $object->setMultiLine($data['multiLine']);
            unset($data['multiLine']);
        }
        if (\array_key_exists('requiredMetadataLanguages', $data) && $data['requiredMetadataLanguages'] !== null) {
            $values_2 = [];
            foreach ($data['requiredMetadataLanguages'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRequiredMetadataLanguages($values_2);
            unset($data['requiredMetadataLanguages']);
        }
        elseif (\array_key_exists('requiredMetadataLanguages', $data) && $data['requiredMetadataLanguages'] === null) {
            $object->setRequiredMetadataLanguages(null);
        }
        if (\array_key_exists('template', $data) && $data['template'] !== null) {
            $object->setTemplate($data['template']);
            unset($data['template']);
        }
        elseif (\array_key_exists('template', $data) && $data['template'] === null) {
            $object->setTemplate(null);
        }
        if (\array_key_exists('boost', $data)) {
            $object->setBoost($data['boost']);
            unset($data['boost']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        if ($data->isInitialized('indexId')) {
            $dataArray['indexId'] = $data->getIndexId();
        }
        if ($data->isInitialized('fieldNamespace')) {
            $dataArray['fieldNamespace'] = $data->getFieldNamespace();
        }
        if ($data->isInitialized('names')) {
            $dataArray['names'] = $data->getNames();
        }
        if ($data->isInitialized('descriptions')) {
            $dataArray['descriptions'] = $data->getDescriptions();
        }
        $dataArray['required'] = $data->getRequired();
        $dataArray['fixed'] = $data->getFixed();
        $dataArray['index'] = $data->getIndex();
        $dataArray['simpleSearch'] = $data->getSimpleSearch();
        $dataArray['sortable'] = $data->getSortable();
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('pattern')) {
            $dataArray['pattern'] = $data->getPattern();
        }
        if ($data->isInitialized('minimumLength')) {
            $dataArray['minimumLength'] = $data->getMinimumLength();
        }
        if ($data->isInitialized('maximumLength')) {
            $dataArray['maximumLength'] = $data->getMaximumLength();
        }
        if ($data->isInitialized('indexAnalyzers')) {
            $values = [];
            foreach ($data->getIndexAnalyzers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['indexAnalyzers'] = $values;
        }
        if ($data->isInitialized('simpleSearchAnalyzers')) {
            $values_1 = [];
            foreach ($data->getSimpleSearchAnalyzers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['simpleSearchAnalyzers'] = $values_1;
        }
        if ($data->isInitialized('multiLine') && null !== $data->getMultiLine()) {
            $dataArray['multiLine'] = $data->getMultiLine();
        }
        if ($data->isInitialized('requiredMetadataLanguages')) {
            $values_2 = [];
            foreach ($data->getRequiredMetadataLanguages() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['requiredMetadataLanguages'] = $values_2;
        }
        if ($data->isInitialized('template')) {
            $dataArray['template'] = $data->getTemplate();
        }
        if ($data->isInitialized('boost') && null !== $data->getBoost()) {
            $dataArray['boost'] = $data->getBoost();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FieldTranslatedString::class => false];
    }
}