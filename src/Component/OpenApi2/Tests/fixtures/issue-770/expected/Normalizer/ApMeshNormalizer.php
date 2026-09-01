<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApMeshNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApMesh::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApMesh::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApMesh();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('meshMode', $data)) {
            $object->meshMode = $data['meshMode'];
        }
        if (\array_key_exists('uplinkSelection', $data)) {
            $object->uplinkSelection = $data['uplinkSelection'];
        }
        if (\array_key_exists('meshUplinkEntryList', $data)) {
            $values = [];
            foreach ($data['meshUplinkEntryList'] as $value) {
                $values[] = $value;
            }
            $object->meshUplinkEntryList = $values;
        }
        if (\array_key_exists('uplinkRadio', $data)) {
            $object->uplinkRadio = $data['uplinkRadio'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('meshMode', get_object_vars($data)) && null !== ($data->meshMode ?? null)) {
            $dataArray['meshMode'] = $data->meshMode ?? null;
        }
        if (array_key_exists('uplinkSelection', get_object_vars($data)) && null !== ($data->uplinkSelection ?? null)) {
            $dataArray['uplinkSelection'] = $data->uplinkSelection ?? null;
        }
        if (array_key_exists('meshUplinkEntryList', get_object_vars($data)) && null !== ($data->meshUplinkEntryList ?? null)) {
            $values = [];
            foreach ($data->meshUplinkEntryList ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['meshUplinkEntryList'] = $values;
        }
        if (array_key_exists('uplinkRadio', get_object_vars($data)) && null !== ($data->uplinkRadio ?? null)) {
            $dataArray['uplinkRadio'] = $data->uplinkRadio ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApMesh::class => false];
    }
}