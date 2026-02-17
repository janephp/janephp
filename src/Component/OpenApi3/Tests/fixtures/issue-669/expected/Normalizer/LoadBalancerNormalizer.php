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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\LoadBalancer();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
            unset($data['project_id']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
            unset($data['ip']);
        }
        if (\array_key_exists('ipv6', $data)) {
            $object->setIpv6($data['ipv6']);
            unset($data['ipv6']);
        }
        if (\array_key_exists('size_unit', $data)) {
            $object->setSizeUnit($data['size_unit']);
            unset($data['size_unit']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        if (\array_key_exists('algorithm', $data)) {
            $object->setAlgorithm($data['algorithm']);
            unset($data['algorithm']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('forwarding_rules', $data)) {
            $values = [];
            foreach ($data['forwarding_rules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ForwardingRule::class, 'json', $context);
            }
            $object->setForwardingRules($values);
            unset($data['forwarding_rules']);
        }
        if (\array_key_exists('health_check', $data)) {
            $object->setHealthCheck($this->denormalizer->denormalize($data['health_check'], \Jane\Generated\DigitalOcean\Model\HealthCheck::class, 'json', $context));
            unset($data['health_check']);
        }
        if (\array_key_exists('sticky_sessions', $data)) {
            $object->setStickySessions($this->denormalizer->denormalize($data['sticky_sessions'], \Jane\Generated\DigitalOcean\Model\StickySessions::class, 'json', $context));
            unset($data['sticky_sessions']);
        }
        if (\array_key_exists('redirect_http_to_https', $data)) {
            $object->setRedirectHttpToHttps($data['redirect_http_to_https']);
            unset($data['redirect_http_to_https']);
        }
        if (\array_key_exists('enable_proxy_protocol', $data)) {
            $object->setEnableProxyProtocol($data['enable_proxy_protocol']);
            unset($data['enable_proxy_protocol']);
        }
        if (\array_key_exists('enable_backend_keepalive', $data)) {
            $object->setEnableBackendKeepalive($data['enable_backend_keepalive']);
            unset($data['enable_backend_keepalive']);
        }
        if (\array_key_exists('http_idle_timeout_seconds', $data)) {
            $object->setHttpIdleTimeoutSeconds($data['http_idle_timeout_seconds']);
            unset($data['http_idle_timeout_seconds']);
        }
        if (\array_key_exists('vpc_uuid', $data)) {
            $object->setVpcUuid($data['vpc_uuid']);
            unset($data['vpc_uuid']);
        }
        if (\array_key_exists('disable_lets_encrypt_dns_records', $data)) {
            $object->setDisableLetsEncryptDnsRecords($data['disable_lets_encrypt_dns_records']);
            unset($data['disable_lets_encrypt_dns_records']);
        }
        if (\array_key_exists('firewall', $data)) {
            $object->setFirewall($this->denormalizer->denormalize($data['firewall'], \Jane\Generated\DigitalOcean\Model\LbFirewall::class, 'json', $context));
            unset($data['firewall']);
        }
        if (\array_key_exists('network', $data)) {
            $object->setNetwork($data['network']);
            unset($data['network']);
        }
        if (\array_key_exists('network_stack', $data)) {
            $object->setNetworkStack($data['network_stack']);
            unset($data['network_stack']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('domains', $data)) {
            $values_1 = [];
            foreach ($data['domains'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\Domains::class, 'json', $context);
            }
            $object->setDomains($values_1);
            unset($data['domains']);
        }
        if (\array_key_exists('glb_settings', $data)) {
            $object->setGlbSettings($this->denormalizer->denormalize($data['glb_settings'], \Jane\Generated\DigitalOcean\Model\GlbSettings::class, 'json', $context));
            unset($data['glb_settings']);
        }
        if (\array_key_exists('target_load_balancer_ids', $data)) {
            $values_2 = [];
            foreach ($data['target_load_balancer_ids'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTargetLoadBalancerIds($values_2);
            unset($data['target_load_balancer_ids']);
        }
        if (\array_key_exists('tls_cipher_policy', $data)) {
            $object->setTlsCipherPolicy($data['tls_cipher_policy']);
            unset($data['tls_cipher_policy']);
        }
        if (\array_key_exists('region', $data)) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['region'] as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->setRegion($values_3);
            unset($data['region']);
        }
        if (\array_key_exists('droplet_ids', $data)) {
            $values_4 = [];
            foreach ($data['droplet_ids'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setDropletIds($values_4);
            unset($data['droplet_ids']);
        }
        if (\array_key_exists('tag', $data)) {
            $object->setTag($data['tag']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('projectId') && null !== $data->getProjectId()) {
            $dataArray['project_id'] = $data->getProjectId();
        }
        if ($data->isInitialized('sizeUnit') && null !== $data->getSizeUnit()) {
            $dataArray['size_unit'] = $data->getSizeUnit();
        }
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['size'] = $data->getSize();
        }
        if ($data->isInitialized('algorithm') && null !== $data->getAlgorithm()) {
            $dataArray['algorithm'] = $data->getAlgorithm();
        }
        $values = [];
        foreach ($data->getForwardingRules() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['forwarding_rules'] = $values;
        if ($data->isInitialized('healthCheck') && null !== $data->getHealthCheck()) {
            $dataArray['health_check'] = $this->normalizer->normalize($data->getHealthCheck(), 'json', $context);
        }
        if ($data->isInitialized('stickySessions') && null !== $data->getStickySessions()) {
            $dataArray['sticky_sessions'] = $this->normalizer->normalize($data->getStickySessions(), 'json', $context);
        }
        if ($data->isInitialized('redirectHttpToHttps') && null !== $data->getRedirectHttpToHttps()) {
            $dataArray['redirect_http_to_https'] = $data->getRedirectHttpToHttps();
        }
        if ($data->isInitialized('enableProxyProtocol') && null !== $data->getEnableProxyProtocol()) {
            $dataArray['enable_proxy_protocol'] = $data->getEnableProxyProtocol();
        }
        if ($data->isInitialized('enableBackendKeepalive') && null !== $data->getEnableBackendKeepalive()) {
            $dataArray['enable_backend_keepalive'] = $data->getEnableBackendKeepalive();
        }
        if ($data->isInitialized('httpIdleTimeoutSeconds') && null !== $data->getHttpIdleTimeoutSeconds()) {
            $dataArray['http_idle_timeout_seconds'] = $data->getHttpIdleTimeoutSeconds();
        }
        if ($data->isInitialized('vpcUuid') && null !== $data->getVpcUuid()) {
            $dataArray['vpc_uuid'] = $data->getVpcUuid();
        }
        if ($data->isInitialized('disableLetsEncryptDnsRecords') && null !== $data->getDisableLetsEncryptDnsRecords()) {
            $dataArray['disable_lets_encrypt_dns_records'] = $data->getDisableLetsEncryptDnsRecords();
        }
        if ($data->isInitialized('firewall') && null !== $data->getFirewall()) {
            $dataArray['firewall'] = $this->normalizer->normalize($data->getFirewall(), 'json', $context);
        }
        if ($data->isInitialized('network') && null !== $data->getNetwork()) {
            $dataArray['network'] = $data->getNetwork();
        }
        if ($data->isInitialized('networkStack') && null !== $data->getNetworkStack()) {
            $dataArray['network_stack'] = $data->getNetworkStack();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('domains') && null !== $data->getDomains()) {
            $values_1 = [];
            foreach ($data->getDomains() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['domains'] = $values_1;
        }
        if ($data->isInitialized('glbSettings') && null !== $data->getGlbSettings()) {
            $dataArray['glb_settings'] = $this->normalizer->normalize($data->getGlbSettings(), 'json', $context);
        }
        if ($data->isInitialized('targetLoadBalancerIds') && null !== $data->getTargetLoadBalancerIds()) {
            $values_2 = [];
            foreach ($data->getTargetLoadBalancerIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['target_load_balancer_ids'] = $values_2;
        }
        if ($data->isInitialized('tlsCipherPolicy') && null !== $data->getTlsCipherPolicy()) {
            $dataArray['tls_cipher_policy'] = $data->getTlsCipherPolicy();
        }
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $values_3 = [];
            foreach ($data->getRegion() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $dataArray['region'] = $values_3;
        }
        if ($data->isInitialized('dropletIds') && null !== $data->getDropletIds()) {
            $values_4 = [];
            foreach ($data->getDropletIds() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['droplet_ids'] = $values_4;
        }
        if ($data->isInitialized('tag') && null !== $data->getTag()) {
            $dataArray['tag'] = $data->getTag();
        }
        foreach ($data as $key_1 => $value_5) {
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