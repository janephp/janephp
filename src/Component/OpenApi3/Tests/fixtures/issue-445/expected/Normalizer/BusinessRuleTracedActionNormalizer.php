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
class BusinessRuleTracedActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleTracedAction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleTracedAction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleTracedAction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('documentModified', $data) && \is_int($data['documentModified'])) {
            $data['documentModified'] = (bool) $data['documentModified'];
        }
        if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
            $object->traceRefId = $data['traceRefId'];
        }
        elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
            $object->traceRefId = null;
        }
        if (\array_key_exists('documentModified', $data)) {
            $object->documentModified = $data['documentModified'];
        }
        if (\array_key_exists('text', $data) && $data['text'] !== null) {
            $object->text = $data['text'];
        }
        elseif (\array_key_exists('text', $data) && $data['text'] === null) {
            $object->text = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('traceRefId', get_object_vars($data)) && null !== ($data->traceRefId ?? null)) {
            $dataArray['traceRefId'] = $data->traceRefId ?? null;
        }
        $dataArray['documentModified'] = $data->documentModified ?? null;
        if (array_key_exists('text', get_object_vars($data)) && null !== ($data->text ?? null)) {
            $dataArray['text'] = $data->text ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleTracedAction::class => false];
    }
}