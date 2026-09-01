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
class BusinessRuleFiredEventDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleFiredEventDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleFiredEventDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleFiredEventDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
            $object->documentId = $data['documentId'];
        }
        elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
            $object->documentId = null;
        }
        if (\array_key_exists('documentType', $data) && $data['documentType'] !== null) {
            $object->documentType = $data['documentType'];
        }
        elseif (\array_key_exists('documentType', $data) && $data['documentType'] === null) {
            $object->documentType = null;
        }
        if (\array_key_exists('ruleIds', $data) && $data['ruleIds'] !== null) {
            $values = [];
            foreach ($data['ruleIds'] as $value) {
                $values[] = $value;
            }
            $object->ruleIds = $values;
        }
        elseif (\array_key_exists('ruleIds', $data) && $data['ruleIds'] === null) {
            $object->ruleIds = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('documentId', get_object_vars($data)) && null !== ($data->documentId ?? null)) {
            $dataArray['documentId'] = $data->documentId ?? null;
        }
        if (array_key_exists('documentType', get_object_vars($data)) && null !== ($data->documentType ?? null)) {
            $dataArray['documentType'] = $data->documentType ?? null;
        }
        if (array_key_exists('ruleIds', get_object_vars($data)) && null !== ($data->ruleIds ?? null)) {
            $values = [];
            foreach ($data->ruleIds ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['ruleIds'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleFiredEventDetail::class => false];
    }
}