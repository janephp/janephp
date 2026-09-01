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
class ZoneModifyDiffServProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneModifyDiffServProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneModifyDiffServProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneModifyDiffServProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('uplinkDiffServ', $data)) {
            $object->uplinkDiffServ = $this->denormalizer->denormalize($data['uplinkDiffServ'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneUplinkDiffServ::class, 'json', $context);
        }
        if (\array_key_exists('downlinkDiffServ', $data)) {
            $object->downlinkDiffServ = $this->denormalizer->denormalize($data['downlinkDiffServ'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneDownlinkDiffServ::class, 'json', $context);
        }
        if (\array_key_exists('preservedList', $data)) {
            $values = [];
            foreach ($data['preservedList'] as $value) {
                $values[] = $value;
            }
            $object->preservedList = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('uplinkDiffServ', get_object_vars($data)) && null !== ($data->uplinkDiffServ ?? null)) {
            $dataArray['uplinkDiffServ'] = ($data->uplinkDiffServ ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->uplinkDiffServ ?? null, 'json', $context));
        }
        if (array_key_exists('downlinkDiffServ', get_object_vars($data)) && null !== ($data->downlinkDiffServ ?? null)) {
            $dataArray['downlinkDiffServ'] = ($data->downlinkDiffServ ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->downlinkDiffServ ?? null, 'json', $context));
        }
        if (array_key_exists('preservedList', get_object_vars($data)) && null !== ($data->preservedList ?? null)) {
            $values = [];
            foreach ($data->preservedList ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['preservedList'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ZoneModifyDiffServProfile::class => false];
    }
}