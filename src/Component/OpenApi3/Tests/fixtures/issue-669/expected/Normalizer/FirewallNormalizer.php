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
class FirewallNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\Firewall::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\Firewall::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\Firewall();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('pending_changes', $data)) {
            $values = [];
            foreach ($data['pending_changes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\FirewallPendingChangesItem::class, 'json', $context);
            }
            $object->setPendingChanges($values);
            unset($data['pending_changes']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('droplet_ids', $data) && $data['droplet_ids'] !== null) {
            $values_1 = [];
            foreach ($data['droplet_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDropletIds($values_1);
            unset($data['droplet_ids']);
        }
        elseif (\array_key_exists('droplet_ids', $data) && $data['droplet_ids'] === null) {
            $object->setDropletIds(null);
        }
        if (\array_key_exists('tags', $data)) {
            $values_2 = [];
            foreach ($data['tags'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTags($values_2);
            unset($data['tags']);
        }
        if (\array_key_exists('inbound_rules', $data) && $data['inbound_rules'] !== null) {
            $values_3 = [];
            foreach ($data['inbound_rules'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\FirewallRulesInboundRulesItem::class, 'json', $context);
            }
            $object->setInboundRules($values_3);
            unset($data['inbound_rules']);
        }
        elseif (\array_key_exists('inbound_rules', $data) && $data['inbound_rules'] === null) {
            $object->setInboundRules(null);
        }
        if (\array_key_exists('outbound_rules', $data) && $data['outbound_rules'] !== null) {
            $values_4 = [];
            foreach ($data['outbound_rules'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jane\Generated\DigitalOcean\Model\FirewallRulesOutboundRulesItem::class, 'json', $context);
            }
            $object->setOutboundRules($values_4);
            unset($data['outbound_rules']);
        }
        elseif (\array_key_exists('outbound_rules', $data) && $data['outbound_rules'] === null) {
            $object->setOutboundRules(null);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('dropletIds')) {
            $values = [];
            foreach ($data->getDropletIds() as $value) {
                $values[] = $value;
            }
            $dataArray['droplet_ids'] = $values;
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_1 = [];
            foreach ($data->getTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tags'] = $values_1;
        }
        if ($data->isInitialized('inboundRules')) {
            $values_2 = [];
            foreach ($data->getInboundRules() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['inbound_rules'] = $values_2;
        }
        if ($data->isInitialized('outboundRules')) {
            $values_3 = [];
            foreach ($data->getOutboundRules() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['outbound_rules'] = $values_3;
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\Firewall::class => false];
    }
}