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
class AvcCreateApplicationPolicyProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AvcCreateApplicationPolicyProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AvcCreateApplicationPolicyProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AvcCreateApplicationPolicyProfile();
        if (\array_key_exists('avcLogEnable', $data) && \is_int($data['avcLogEnable'])) {
            $data['avcLogEnable'] = (bool) $data['avcLogEnable'];
        }
        if (\array_key_exists('avcEventEnable', $data) && \is_int($data['avcEventEnable'])) {
            $data['avcEventEnable'] = (bool) $data['avcEventEnable'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('applicationRules', $data)) {
            $values = [];
            foreach ($data['applicationRules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplicationRule::class, 'json', $context);
            }
            $object->setApplicationRules($values);
        }
        if (\array_key_exists('avcLogEnable', $data)) {
            $object->setAvcLogEnable($data['avcLogEnable']);
        }
        if (\array_key_exists('avcEventEnable', $data)) {
            $object->setAvcEventEnable($data['avcEventEnable']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $values = [];
        foreach ($data->getApplicationRules() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['applicationRules'] = $values;
        if ($data->isInitialized('avcLogEnable') && null !== $data->getAvcLogEnable()) {
            $dataArray['avcLogEnable'] = $data->getAvcLogEnable();
        }
        if ($data->isInitialized('avcEventEnable') && null !== $data->getAvcEventEnable()) {
            $dataArray['avcEventEnable'] = $data->getAvcEventEnable();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AvcCreateApplicationPolicyProfile::class => false];
    }
}