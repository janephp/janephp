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
class ZoneBonjourPolicyRuleConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneBonjourPolicyRuleConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneBonjourPolicyRuleConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneBonjourPolicyRuleConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->priority = $data['priority'];
        }
        if (\array_key_exists('bridgeService', $data)) {
            $object->bridgeService = $data['bridgeService'];
        }
        if (\array_key_exists('protocol', $data)) {
            $object->protocol = $data['protocol'];
        }
        if (\array_key_exists('fromVlan', $data)) {
            $object->fromVlan = $data['fromVlan'];
        }
        if (\array_key_exists('toVlan', $data)) {
            $object->toVlan = $data['toVlan'];
        }
        if (\array_key_exists('notes', $data)) {
            $object->notes = $data['notes'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('priority', get_object_vars($data)) && null !== ($data->priority ?? null)) {
            $dataArray['priority'] = $data->priority ?? null;
        }
        if (array_key_exists('bridgeService', get_object_vars($data)) && null !== ($data->bridgeService ?? null)) {
            $dataArray['bridgeService'] = $data->bridgeService ?? null;
        }
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $dataArray['protocol'] = $data->protocol ?? null;
        }
        if (array_key_exists('fromVlan', get_object_vars($data)) && null !== ($data->fromVlan ?? null)) {
            $dataArray['fromVlan'] = $data->fromVlan ?? null;
        }
        if (array_key_exists('toVlan', get_object_vars($data)) && null !== ($data->toVlan ?? null)) {
            $dataArray['toVlan'] = $data->toVlan ?? null;
        }
        if (array_key_exists('notes', get_object_vars($data)) && null !== ($data->notes ?? null)) {
            $dataArray['notes'] = $data->notes ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ZoneBonjourPolicyRuleConfiguration::class => false];
    }
}