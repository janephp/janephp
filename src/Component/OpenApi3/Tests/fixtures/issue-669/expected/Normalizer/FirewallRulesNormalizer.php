<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FirewallRulesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\FirewallRules::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\FirewallRules::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\FirewallRules();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('inbound_rules', $data) && $data['inbound_rules'] !== null) {
            $values = [];
            foreach ($data['inbound_rules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\FirewallRulesInboundRulesItem::class, 'json', $context);
            }
            $object->setInboundRules($values);
            unset($data['inbound_rules']);
        }
        elseif (\array_key_exists('inbound_rules', $data) && $data['inbound_rules'] === null) {
            $object->setInboundRules(null);
            unset($data['inbound_rules']);
        }
        if (\array_key_exists('outbound_rules', $data) && $data['outbound_rules'] !== null) {
            $values_1 = [];
            foreach ($data['outbound_rules'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\FirewallRulesOutboundRulesItem::class, 'json', $context);
            }
            $object->setOutboundRules($values_1);
            unset($data['outbound_rules']);
        }
        elseif (\array_key_exists('outbound_rules', $data) && $data['outbound_rules'] === null) {
            $object->setOutboundRules(null);
            unset($data['outbound_rules']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('inboundRules') && null !== $data->getInboundRules()) {
            $values = [];
            foreach ($data->getInboundRules() as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['inbound_rules'] = $values;
        }
        if ($data->isInitialized('outboundRules') && null !== $data->getOutboundRules()) {
            $values_1 = [];
            foreach ($data->getOutboundRules() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['outbound_rules'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\FirewallRules::class => false];
    }
}