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
        $object = new \PicturePark\API\Model\FieldTranslatedString();
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
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('indexId', $data) && $data['indexId'] !== null) {
            $object->indexId = $data['indexId'];
            unset($data['indexId']);
        }
        elseif (\array_key_exists('indexId', $data) && $data['indexId'] === null) {
            $object->indexId = null;
            unset($data['indexId']);
        }
        if (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] !== null) {
            $object->fieldNamespace = $data['fieldNamespace'];
            unset($data['fieldNamespace']);
        }
        elseif (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] === null) {
            $object->fieldNamespace = null;
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
            $object->names = $value;
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->names = null;
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
            $object->descriptions = $value_2;
            unset($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->descriptions = null;
            unset($data['descriptions']);
        }
        if (\array_key_exists('required', $data)) {
            $object->required = $data['required'];
            unset($data['required']);
        }
        if (\array_key_exists('fixed', $data)) {
            $object->fixed = $data['fixed'];
            unset($data['fixed']);
        }
        if (\array_key_exists('index', $data)) {
            $object->index = $data['index'];
            unset($data['index']);
        }
        if (\array_key_exists('simpleSearch', $data)) {
            $object->simpleSearch = $data['simpleSearch'];
            unset($data['simpleSearch']);
        }
        if (\array_key_exists('sortable', $data)) {
            $object->sortable = $data['sortable'];
            unset($data['sortable']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('pattern', $data) && $data['pattern'] !== null) {
            $object->pattern = $data['pattern'];
            unset($data['pattern']);
        }
        elseif (\array_key_exists('pattern', $data) && $data['pattern'] === null) {
            $object->pattern = null;
            unset($data['pattern']);
        }
        if (\array_key_exists('minimumLength', $data) && $data['minimumLength'] !== null) {
            $object->minimumLength = $data['minimumLength'];
            unset($data['minimumLength']);
        }
        elseif (\array_key_exists('minimumLength', $data) && $data['minimumLength'] === null) {
            $object->minimumLength = null;
            unset($data['minimumLength']);
        }
        if (\array_key_exists('maximumLength', $data) && $data['maximumLength'] !== null) {
            $object->maximumLength = $data['maximumLength'];
            unset($data['maximumLength']);
        }
        elseif (\array_key_exists('maximumLength', $data) && $data['maximumLength'] === null) {
            $object->maximumLength = null;
            unset($data['maximumLength']);
        }
        if (\array_key_exists('indexAnalyzers', $data) && $data['indexAnalyzers'] !== null) {
            $values_2 = [];
            foreach ($data['indexAnalyzers'] as $value_4) {
                $values_2[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\AnalyzerBase::class, 'json', $context);
            }
            $object->indexAnalyzers = $values_2;
            unset($data['indexAnalyzers']);
        }
        elseif (\array_key_exists('indexAnalyzers', $data) && $data['indexAnalyzers'] === null) {
            $object->indexAnalyzers = null;
            unset($data['indexAnalyzers']);
        }
        if (\array_key_exists('simpleSearchAnalyzers', $data) && $data['simpleSearchAnalyzers'] !== null) {
            $values_3 = [];
            foreach ($data['simpleSearchAnalyzers'] as $value_5) {
                $values_3[] = $this->denormalizer->denormalize($value_5, \PicturePark\API\Model\AnalyzerBase::class, 'json', $context);
            }
            $object->simpleSearchAnalyzers = $values_3;
            unset($data['simpleSearchAnalyzers']);
        }
        elseif (\array_key_exists('simpleSearchAnalyzers', $data) && $data['simpleSearchAnalyzers'] === null) {
            $object->simpleSearchAnalyzers = null;
            unset($data['simpleSearchAnalyzers']);
        }
        if (\array_key_exists('multiLine', $data)) {
            $object->multiLine = $data['multiLine'];
            unset($data['multiLine']);
        }
        if (\array_key_exists('requiredMetadataLanguages', $data) && $data['requiredMetadataLanguages'] !== null) {
            $values_4 = [];
            foreach ($data['requiredMetadataLanguages'] as $value_6) {
                $values_4[] = $value_6;
            }
            $object->requiredMetadataLanguages = $values_4;
            unset($data['requiredMetadataLanguages']);
        }
        elseif (\array_key_exists('requiredMetadataLanguages', $data) && $data['requiredMetadataLanguages'] === null) {
            $object->requiredMetadataLanguages = null;
            unset($data['requiredMetadataLanguages']);
        }
        if (\array_key_exists('template', $data) && $data['template'] !== null) {
            $object->template = $data['template'];
            unset($data['template']);
        }
        elseif (\array_key_exists('template', $data) && $data['template'] === null) {
            $object->template = null;
            unset($data['template']);
        }
        if (\array_key_exists('boost', $data)) {
            $object->boost = $data['boost'];
            unset($data['boost']);
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
        $dataArray['id'] = $data->id ?? null;
        if (array_key_exists('indexId', get_object_vars($data)) && null !== ($data->indexId ?? null)) {
            $dataArray['indexId'] = $data->indexId ?? null;
        }
        if (array_key_exists('fieldNamespace', get_object_vars($data)) && null !== ($data->fieldNamespace ?? null)) {
            $dataArray['fieldNamespace'] = $data->fieldNamespace ?? null;
        }
        if (array_key_exists('names', get_object_vars($data)) && null !== ($data->names ?? null)) {
            $value = $data->names ?? null;
            if (is_object($data->names ?? null)) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->names ?? null as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $dataArray['names'] = $value;
        }
        if (array_key_exists('descriptions', get_object_vars($data)) && null !== ($data->descriptions ?? null)) {
            $value_2 = $data->descriptions ?? null;
            if (is_object($data->descriptions ?? null)) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->descriptions ?? null as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $dataArray['descriptions'] = $value_2;
        }
        $dataArray['required'] = $data->required ?? null;
        $dataArray['fixed'] = $data->fixed ?? null;
        $dataArray['index'] = $data->index ?? null;
        $dataArray['simpleSearch'] = $data->simpleSearch ?? null;
        $dataArray['sortable'] = $data->sortable ?? null;
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('pattern', get_object_vars($data)) && null !== ($data->pattern ?? null)) {
            $dataArray['pattern'] = $data->pattern ?? null;
        }
        if (array_key_exists('minimumLength', get_object_vars($data)) && null !== ($data->minimumLength ?? null)) {
            $dataArray['minimumLength'] = $data->minimumLength ?? null;
        }
        if (array_key_exists('maximumLength', get_object_vars($data)) && null !== ($data->maximumLength ?? null)) {
            $dataArray['maximumLength'] = $data->maximumLength ?? null;
        }
        if (array_key_exists('indexAnalyzers', get_object_vars($data)) && null !== ($data->indexAnalyzers ?? null)) {
            $values_2 = [];
            foreach ($data->indexAnalyzers ?? null as $value_4) {
                $values_2[] = $value_4 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['indexAnalyzers'] = $values_2;
        }
        if (array_key_exists('simpleSearchAnalyzers', get_object_vars($data)) && null !== ($data->simpleSearchAnalyzers ?? null)) {
            $values_3 = [];
            foreach ($data->simpleSearchAnalyzers ?? null as $value_5) {
                $values_3[] = $value_5 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['simpleSearchAnalyzers'] = $values_3;
        }
        if (array_key_exists('multiLine', get_object_vars($data)) && null !== ($data->multiLine ?? null)) {
            $dataArray['multiLine'] = $data->multiLine ?? null;
        }
        if (array_key_exists('requiredMetadataLanguages', get_object_vars($data)) && null !== ($data->requiredMetadataLanguages ?? null)) {
            $values_4 = [];
            foreach ($data->requiredMetadataLanguages ?? null as $value_6) {
                $values_4[] = $value_6;
            }
            $dataArray['requiredMetadataLanguages'] = $values_4;
        }
        if (array_key_exists('template', get_object_vars($data)) && null !== ($data->template ?? null)) {
            $dataArray['template'] = $data->template ?? null;
        }
        if (array_key_exists('boost', get_object_vars($data)) && null !== ($data->boost ?? null)) {
            $dataArray['boost'] = $data->boost ?? null;
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
        return [\PicturePark\API\Model\FieldTranslatedString::class => false];
    }
}