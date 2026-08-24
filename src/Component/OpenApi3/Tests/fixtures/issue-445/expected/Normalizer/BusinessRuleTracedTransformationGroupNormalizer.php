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
class BusinessRuleTracedTransformationGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleTracedTransformationGroup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleTracedTransformationGroup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleTracedTransformationGroup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
            $object->setTraceRefId($data['traceRefId']);
        }
        elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
            $object->setTraceRefId(null);
        }
        if (\array_key_exists('input', $data) && $data['input'] !== null) {
            $object->setInput($data['input']);
        }
        elseif (\array_key_exists('input', $data) && $data['input'] === null) {
            $object->setInput(null);
        }
        if (\array_key_exists('output', $data) && $data['output'] !== null) {
            $object->setOutput($data['output']);
        }
        elseif (\array_key_exists('output', $data) && $data['output'] === null) {
            $object->setOutput(null);
        }
        if (\array_key_exists('transformations', $data) && $data['transformations'] !== null) {
            $values = [];
            foreach ($data['transformations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\BusinessRuleTracedTransformation::class, 'json', $context);
            }
            $object->setTransformations($values);
        }
        elseif (\array_key_exists('transformations', $data) && $data['transformations'] === null) {
            $object->setTransformations(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('traceRefId') && null !== $data->getTraceRefId()) {
            $dataArray['traceRefId'] = $data->getTraceRefId();
        }
        if ($data->isInitialized('input') && null !== $data->getInput()) {
            $dataArray['input'] = $data->getInput();
        }
        if ($data->isInitialized('output') && null !== $data->getOutput()) {
            $dataArray['output'] = $data->getOutput();
        }
        if ($data->isInitialized('transformations') && null !== $data->getTransformations()) {
            $values = [];
            foreach ($data->getTransformations() as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['transformations'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleTracedTransformationGroup::class => false];
    }
}