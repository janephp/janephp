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
class LoadBalancerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\LoadBalancer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\LoadBalancer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\LoadBalancer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('redirect_http_to_https', $data) && \is_int($data['redirect_http_to_https'])) {
            $data['redirect_http_to_https'] = (bool) $data['redirect_http_to_https'];
        }
        if (\array_key_exists('enable_proxy_protocol', $data) && \is_int($data['enable_proxy_protocol'])) {
            $data['enable_proxy_protocol'] = (bool) $data['enable_proxy_protocol'];
        }
        if (\array_key_exists('enable_backend_keepalive', $data) && \is_int($data['enable_backend_keepalive'])) {
            $data['enable_backend_keepalive'] = (bool) $data['enable_backend_keepalive'];
        }
        if (\array_key_exists('disable_lets_encrypt_dns_records', $data) && \is_int($data['disable_lets_encrypt_dns_records'])) {
            $data['disable_lets_encrypt_dns_records'] = (bool) $data['disable_lets_encrypt_dns_records'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->projectId = $data['project_id'];
            unset($data['project_id']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->ip = $data['ip'];
            unset($data['ip']);
        }
        if (\array_key_exists('ipv6', $data)) {
            $object->ipv6 = $data['ipv6'];
            unset($data['ipv6']);
        }
        if (\array_key_exists('size_unit', $data)) {
            $object->sizeUnit = $data['size_unit'];
            unset($data['size_unit']);
        }
        if (\array_key_exists('size', $data)) {
            $object->size = $data['size'];
            unset($data['size']);
        }
        if (\array_key_exists('algorithm', $data)) {
            $object->algorithm = $data['algorithm'];
            unset($data['algorithm']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('forwarding_rules', $data)) {
            $values = [];
            foreach ($data['forwarding_rules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ForwardingRule::class, 'json', $context);
            }
            $object->forwardingRules = $values;
            unset($data['forwarding_rules']);
        }
        if (\array_key_exists('health_check', $data)) {
            $object->healthCheck = $this->denormalizer->denormalize($data['health_check'], \Jane\Generated\DigitalOcean\Model\HealthCheck::class, 'json', $context);
            unset($data['health_check']);
        }
        if (\array_key_exists('sticky_sessions', $data)) {
            $object->stickySessions = $this->denormalizer->denormalize($data['sticky_sessions'], \Jane\Generated\DigitalOcean\Model\StickySessions::class, 'json', $context);
            unset($data['sticky_sessions']);
        }
        if (\array_key_exists('redirect_http_to_https', $data)) {
            $object->redirectHttpToHttps = $data['redirect_http_to_https'];
            unset($data['redirect_http_to_https']);
        }
        if (\array_key_exists('enable_proxy_protocol', $data)) {
            $object->enableProxyProtocol = $data['enable_proxy_protocol'];
            unset($data['enable_proxy_protocol']);
        }
        if (\array_key_exists('enable_backend_keepalive', $data)) {
            $object->enableBackendKeepalive = $data['enable_backend_keepalive'];
            unset($data['enable_backend_keepalive']);
        }
        if (\array_key_exists('http_idle_timeout_seconds', $data)) {
            $object->httpIdleTimeoutSeconds = $data['http_idle_timeout_seconds'];
            unset($data['http_idle_timeout_seconds']);
        }
        if (\array_key_exists('vpc_uuid', $data)) {
            $object->vpcUuid = $data['vpc_uuid'];
            unset($data['vpc_uuid']);
        }
        if (\array_key_exists('disable_lets_encrypt_dns_records', $data)) {
            $object->disableLetsEncryptDnsRecords = $data['disable_lets_encrypt_dns_records'];
            unset($data['disable_lets_encrypt_dns_records']);
        }
        if (\array_key_exists('firewall', $data)) {
            $object->firewall = $this->denormalizer->denormalize($data['firewall'], \Jane\Generated\DigitalOcean\Model\LbFirewall::class, 'json', $context);
            unset($data['firewall']);
        }
        if (\array_key_exists('network', $data)) {
            $object->network = $data['network'];
            unset($data['network']);
        }
        if (\array_key_exists('network_stack', $data)) {
            $object->networkStack = $data['network_stack'];
            unset($data['network_stack']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        if (\array_key_exists('domains', $data)) {
            $values_1 = [];
            foreach ($data['domains'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\Domains::class, 'json', $context);
            }
            $object->domains = $values_1;
            unset($data['domains']);
        }
        if (\array_key_exists('glb_settings', $data)) {
            $object->glbSettings = $this->denormalizer->denormalize($data['glb_settings'], \Jane\Generated\DigitalOcean\Model\GlbSettings::class, 'json', $context);
            unset($data['glb_settings']);
        }
        if (\array_key_exists('target_load_balancer_ids', $data)) {
            $values_2 = [];
            foreach ($data['target_load_balancer_ids'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->targetLoadBalancerIds = $values_2;
            unset($data['target_load_balancer_ids']);
        }
        if (\array_key_exists('tls_cipher_policy', $data)) {
            $object->tlsCipherPolicy = $data['tls_cipher_policy'];
            unset($data['tls_cipher_policy']);
        }
        if (\array_key_exists('region', $data)) {
            $values_3 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data['region'] as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->region = $values_3;
            unset($data['region']);
        }
        if (\array_key_exists('droplet_ids', $data)) {
            $values_4 = [];
            foreach ($data['droplet_ids'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->dropletIds = $values_4;
            unset($data['droplet_ids']);
        }
        if (\array_key_exists('tag', $data)) {
            $object->tag = $data['tag'];
            unset($data['tag']);
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('projectId', get_object_vars($data)) && null !== ($data->projectId ?? null)) {
            $dataArray['project_id'] = $data->projectId ?? null;
        }
        if (array_key_exists('sizeUnit', get_object_vars($data)) && null !== ($data->sizeUnit ?? null)) {
            $dataArray['size_unit'] = $data->sizeUnit ?? null;
        }
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $dataArray['size'] = $data->size ?? null;
        }
        if (array_key_exists('algorithm', get_object_vars($data)) && null !== ($data->algorithm ?? null)) {
            $dataArray['algorithm'] = $data->algorithm ?? null;
        }
        $values = [];
        foreach ($data->forwardingRules ?? null as $value) {
            $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['forwarding_rules'] = $values;
        if (array_key_exists('healthCheck', get_object_vars($data)) && null !== ($data->healthCheck ?? null)) {
            $dataArray['health_check'] = ($data->healthCheck ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->healthCheck ?? null, 'json', $context));
        }
        if (array_key_exists('stickySessions', get_object_vars($data)) && null !== ($data->stickySessions ?? null)) {
            $dataArray['sticky_sessions'] = ($data->stickySessions ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->stickySessions ?? null, 'json', $context));
        }
        if (array_key_exists('redirectHttpToHttps', get_object_vars($data)) && null !== ($data->redirectHttpToHttps ?? null)) {
            $dataArray['redirect_http_to_https'] = $data->redirectHttpToHttps ?? null;
        }
        if (array_key_exists('enableProxyProtocol', get_object_vars($data)) && null !== ($data->enableProxyProtocol ?? null)) {
            $dataArray['enable_proxy_protocol'] = $data->enableProxyProtocol ?? null;
        }
        if (array_key_exists('enableBackendKeepalive', get_object_vars($data)) && null !== ($data->enableBackendKeepalive ?? null)) {
            $dataArray['enable_backend_keepalive'] = $data->enableBackendKeepalive ?? null;
        }
        if (array_key_exists('httpIdleTimeoutSeconds', get_object_vars($data)) && null !== ($data->httpIdleTimeoutSeconds ?? null)) {
            $dataArray['http_idle_timeout_seconds'] = $data->httpIdleTimeoutSeconds ?? null;
        }
        if (array_key_exists('vpcUuid', get_object_vars($data)) && null !== ($data->vpcUuid ?? null)) {
            $dataArray['vpc_uuid'] = $data->vpcUuid ?? null;
        }
        if (array_key_exists('disableLetsEncryptDnsRecords', get_object_vars($data)) && null !== ($data->disableLetsEncryptDnsRecords ?? null)) {
            $dataArray['disable_lets_encrypt_dns_records'] = $data->disableLetsEncryptDnsRecords ?? null;
        }
        if (array_key_exists('firewall', get_object_vars($data)) && null !== ($data->firewall ?? null)) {
            $dataArray['firewall'] = ($data->firewall ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->firewall ?? null, 'json', $context));
        }
        if (array_key_exists('network', get_object_vars($data)) && null !== ($data->network ?? null)) {
            $dataArray['network'] = $data->network ?? null;
        }
        if (array_key_exists('networkStack', get_object_vars($data)) && null !== ($data->networkStack ?? null)) {
            $dataArray['network_stack'] = $data->networkStack ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('domains', get_object_vars($data)) && null !== ($data->domains ?? null)) {
            $values_1 = [];
            foreach ($data->domains ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['domains'] = $values_1;
        }
        if (array_key_exists('glbSettings', get_object_vars($data)) && null !== ($data->glbSettings ?? null)) {
            $dataArray['glb_settings'] = ($data->glbSettings ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->glbSettings ?? null, 'json', $context));
        }
        if (array_key_exists('targetLoadBalancerIds', get_object_vars($data)) && null !== ($data->targetLoadBalancerIds ?? null)) {
            $values_2 = [];
            foreach ($data->targetLoadBalancerIds ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['target_load_balancer_ids'] = $values_2;
        }
        if (array_key_exists('tlsCipherPolicy', get_object_vars($data)) && null !== ($data->tlsCipherPolicy ?? null)) {
            $dataArray['tls_cipher_policy'] = $data->tlsCipherPolicy ?? null;
        }
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $values_3 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data->region ?? null as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $dataArray['region'] = $values_3;
        }
        if (array_key_exists('dropletIds', get_object_vars($data)) && null !== ($data->dropletIds ?? null)) {
            $values_4 = [];
            foreach ($data->dropletIds ?? null as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['droplet_ids'] = $values_4;
        }
        if (array_key_exists('tag', get_object_vars($data)) && null !== ($data->tag ?? null)) {
            $dataArray['tag'] = $data->tag ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_5) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\LoadBalancer::class => false];
    }
}