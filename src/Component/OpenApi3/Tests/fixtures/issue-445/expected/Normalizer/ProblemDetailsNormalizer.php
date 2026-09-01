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
class ProblemDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ProblemDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ProblemDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ProblemDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->type = $data['type'];
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->type = null;
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->title = $data['title'];
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->title = null;
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->status = $data['status'];
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->status = null;
        }
        if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
            $object->detail = $data['detail'];
        }
        elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
            $object->detail = null;
        }
        if (\array_key_exists('instance', $data) && $data['instance'] !== null) {
            $object->instance = $data['instance'];
        }
        elseif (\array_key_exists('instance', $data) && $data['instance'] === null) {
            $object->instance = null;
        }
        if (\array_key_exists('extensions', $data) && $data['extensions'] !== null) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['extensions'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->extensions = $values;
        }
        elseif (\array_key_exists('extensions', $data) && $data['extensions'] === null) {
            $object->extensions = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('title', get_object_vars($data)) && null !== ($data->title ?? null)) {
            $dataArray['title'] = $data->title ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('detail', get_object_vars($data)) && null !== ($data->detail ?? null)) {
            $dataArray['detail'] = $data->detail ?? null;
        }
        if (array_key_exists('instance', get_object_vars($data)) && null !== ($data->instance ?? null)) {
            $dataArray['instance'] = $data->instance ?? null;
        }
        if (array_key_exists('extensions', get_object_vars($data)) && null !== ($data->extensions ?? null)) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->extensions ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['extensions'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ProblemDetails::class => false];
    }
}