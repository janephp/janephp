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
class OCIDescriptorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\OCIDescriptor::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\OCIDescriptor::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\OCIDescriptor();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\OCIDescriptorConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mediaType', $data)) {
            $object->setMediaType($data['mediaType']);
        }
        if (\array_key_exists('digest', $data)) {
            $object->setDigest($data['digest']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('mediaType') && null !== $data->getMediaType()) {
            $dataArray['mediaType'] = $data->getMediaType();
        }
        if ($data->isInitialized('digest') && null !== $data->getDigest()) {
            $dataArray['digest'] = $data->getDigest();
        }
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['size'] = $data->getSize();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\OCIDescriptorConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\OCIDescriptor::class => false];
    }
}