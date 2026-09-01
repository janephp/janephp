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
class BusinessRuleTriggerPointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleTriggerPoint::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleTriggerPoint::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleTriggerPoint();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('executionScope', $data)) {
            $value = $data['executionScope'];
            if (is_string($data['executionScope'])) {
                $value = $data['executionScope'];
            }
            $object->executionScope = $value;
        }
        if (\array_key_exists('documentType', $data)) {
            $value_1 = $data['documentType'];
            if (is_string($data['documentType'])) {
                $value_1 = $data['documentType'];
            }
            $object->documentType = $value_1;
        }
        if (\array_key_exists('action', $data)) {
            $value_2 = $data['action'];
            if (is_string($data['action'])) {
                $value_2 = $data['action'];
            }
            $object->action = $value_2;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->executionScope ?? null;
        if (is_string($data->executionScope ?? null)) {
            $value = $data->executionScope ?? null;
        }
        $dataArray['executionScope'] = $value;
        $value_1 = $data->documentType ?? null;
        if (is_string($data->documentType ?? null)) {
            $value_1 = $data->documentType ?? null;
        }
        $dataArray['documentType'] = $value_1;
        $value_2 = $data->action ?? null;
        if (is_string($data->action ?? null)) {
            $value_2 = $data->action ?? null;
        }
        $dataArray['action'] = $value_2;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleTriggerPoint::class => false];
    }
}