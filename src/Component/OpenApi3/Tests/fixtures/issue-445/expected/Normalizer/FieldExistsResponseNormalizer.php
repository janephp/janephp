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
class FieldExistsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FieldExistsResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FieldExistsResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\FieldExistsResponse();
        if (\array_key_exists('exists', $data) && \is_int($data['exists'])) {
            $data['exists'] = (bool) $data['exists'];
        }
        if (\array_key_exists('previouslyUsed', $data) && \is_int($data['previouslyUsed'])) {
            $data['previouslyUsed'] = (bool) $data['previouslyUsed'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('exists', $data)) {
            $object->setExists($data['exists']);
        }
        if (\array_key_exists('previouslyUsed', $data)) {
            $object->setPreviouslyUsed($data['previouslyUsed']);
        }
        if (\array_key_exists('schemaId', $data) && $data['schemaId'] !== null) {
            $object->setSchemaId($data['schemaId']);
        }
        elseif (\array_key_exists('schemaId', $data) && $data['schemaId'] === null) {
            $object->setSchemaId(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['exists'] = $data->getExists();
        $dataArray['previouslyUsed'] = $data->getPreviouslyUsed();
        if ($data->isInitialized('schemaId')) {
            $dataArray['schemaId'] = $data->getSchemaId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FieldExistsResponse::class => false];
    }
}