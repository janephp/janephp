<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FileDepositPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Model\FileDepositPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Model\FileDepositPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Model\FileDepositPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('valid', $data) && \is_int($data['valid'])) {
            $data['valid'] = (bool) $data['valid'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Validator\FileDepositPostBodyConstraint());
        }
        if (\array_key_exists('fichier', $data)) {
            $object->fichier = $data['fichier'];
            unset($data['fichier']);
        }
        if (\array_key_exists('valid', $data)) {
            $object->valid = $data['valid'];
            unset($data['valid']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('fichier', get_object_vars($data)) && null !== ($data->fichier ?? null)) {
            $dataArray['fichier'] = $data->fichier ?? null;
        }
        if (array_key_exists('valid', get_object_vars($data)) && null !== ($data->valid ?? null)) {
            $dataArray['valid'] = $data->valid ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Validator\FileDepositPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\ExpectedMultiPartBoolean\Model\FileDepositPostBody::class => false];
    }
}