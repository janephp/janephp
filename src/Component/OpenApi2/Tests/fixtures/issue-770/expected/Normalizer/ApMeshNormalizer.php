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
            $object->setMeshMode($data['meshMode']);
        }
        if (\array_key_exists('uplinkSelection', $data)) {
            $object->setUplinkSelection($data['uplinkSelection']);
        }
        if (\array_key_exists('meshUplinkEntryList', $data)) {
            $values = [];
            foreach ($data['meshUplinkEntryList'] as $value) {
                $values[] = $value;
            }
            $object->setMeshUplinkEntryList($values);
        }
        if (\array_key_exists('uplinkRadio', $data)) {
            $object->setUplinkRadio($data['uplinkRadio']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('meshMode') && null !== $data->getMeshMode()) {
            $dataArray['meshMode'] = $data->getMeshMode();
        }
        if ($data->isInitialized('uplinkSelection') && null !== $data->getUplinkSelection()) {
            $dataArray['uplinkSelection'] = $data->getUplinkSelection();
        }
        if ($data->isInitialized('meshUplinkEntryList') && null !== $data->getMeshUplinkEntryList()) {
            $values = [];
            foreach ($data->getMeshUplinkEntryList() as $value) {
                $values[] = $value;
            }
            $dataArray['meshUplinkEntryList'] = $values;
        }
        if ($data->isInitialized('uplinkRadio') && null !== $data->getUplinkRadio()) {
            $dataArray['uplinkRadio'] = $data->getUplinkRadio();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApMesh::class => false];
    }
}