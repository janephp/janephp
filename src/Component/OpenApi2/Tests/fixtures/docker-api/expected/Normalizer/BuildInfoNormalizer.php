<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\BuildInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\BuildInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\BuildInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\BuildInfoConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('stream', $data)) {
            $object->stream = $data['stream'];
        }
        if (\array_key_exists('error', $data)) {
            $object->error = $data['error'];
        }
        if (\array_key_exists('errorDetail', $data)) {
            $object->errorDetail = $this->denormalizer->denormalize($data['errorDetail'], \Docker\Api\Model\ErrorDetail::class, 'json', $context);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
        }
        if (\array_key_exists('progress', $data)) {
            $object->progress = $data['progress'];
        }
        if (\array_key_exists('progressDetail', $data)) {
            $object->progressDetail = $this->denormalizer->denormalize($data['progressDetail'], \Docker\Api\Model\ProgressDetail::class, 'json', $context);
        }
        if (\array_key_exists('aux', $data)) {
            $object->aux = $this->denormalizer->denormalize($data['aux'], \Docker\Api\Model\ImageID::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('stream', get_object_vars($data)) && null !== ($data->stream ?? null)) {
            $dataArray['stream'] = $data->stream ?? null;
        }
        if (array_key_exists('error', get_object_vars($data)) && null !== ($data->error ?? null)) {
            $dataArray['error'] = $data->error ?? null;
        }
        if (array_key_exists('errorDetail', get_object_vars($data)) && null !== ($data->errorDetail ?? null)) {
            $dataArray['errorDetail'] = ($data->errorDetail ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->errorDetail ?? null, 'json', $context));
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('progress', get_object_vars($data)) && null !== ($data->progress ?? null)) {
            $dataArray['progress'] = $data->progress ?? null;
        }
        if (array_key_exists('progressDetail', get_object_vars($data)) && null !== ($data->progressDetail ?? null)) {
            $dataArray['progressDetail'] = ($data->progressDetail ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->progressDetail ?? null, 'json', $context));
        }
        if (array_key_exists('aux', get_object_vars($data)) && null !== ($data->aux ?? null)) {
            $dataArray['aux'] = ($data->aux ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->aux ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\BuildInfoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\BuildInfo::class => false];
    }
}