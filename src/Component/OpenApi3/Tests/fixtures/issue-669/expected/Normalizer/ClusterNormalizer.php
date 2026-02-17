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
class ClusterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\Cluster::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\Cluster::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\Cluster();
        if (\array_key_exists('auto_upgrade', $data) && \is_int($data['auto_upgrade'])) {
            $data['auto_upgrade'] = (bool) $data['auto_upgrade'];
        }
        if (\array_key_exists('surge_upgrade', $data) && \is_int($data['surge_upgrade'])) {
            $data['surge_upgrade'] = (bool) $data['surge_upgrade'];
        }
        if (\array_key_exists('ha', $data) && \is_int($data['ha'])) {
            $data['ha'] = (bool) $data['ha'];
        }
        if (\array_key_exists('registry_enabled', $data) && \is_int($data['registry_enabled'])) {
            $data['registry_enabled'] = (bool) $data['registry_enabled'];
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
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
            unset($data['region']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        if (\array_key_exists('cluster_subnet', $data)) {
            $object->setClusterSubnet($data['cluster_subnet']);
            unset($data['cluster_subnet']);
        }
        if (\array_key_exists('service_subnet', $data)) {
            $object->setServiceSubnet($data['service_subnet']);
            unset($data['service_subnet']);
        }
        if (\array_key_exists('vpc_uuid', $data)) {
            $object->setVpcUuid($data['vpc_uuid']);
            unset($data['vpc_uuid']);
        }
        if (\array_key_exists('ipv4', $data)) {
            $object->setIpv4($data['ipv4']);
            unset($data['ipv4']);
        }
        if (\array_key_exists('endpoint', $data)) {
            $object->setEndpoint($data['endpoint']);
            unset($data['endpoint']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data['tags']);
        }
        if (\array_key_exists('node_pools', $data)) {
            $values_1 = [];
            foreach ($data['node_pools'] as $value_1) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_1 as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setNodePools($values_1);
            unset($data['node_pools']);
        }
        if (\array_key_exists('maintenance_policy', $data) && $data['maintenance_policy'] !== null) {
            $object->setMaintenancePolicy($this->denormalizer->denormalize($data['maintenance_policy'], \Jane\Generated\DigitalOcean\Model\MaintenancePolicy::class, 'json', $context));
            unset($data['maintenance_policy']);
        }
        elseif (\array_key_exists('maintenance_policy', $data) && $data['maintenance_policy'] === null) {
            $object->setMaintenancePolicy(null);
        }
        if (\array_key_exists('auto_upgrade', $data)) {
            $object->setAutoUpgrade($data['auto_upgrade']);
            unset($data['auto_upgrade']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['status'], \Jane\Generated\DigitalOcean\Model\ClusterStatus::class, 'json', $context));
            unset($data['status']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('surge_upgrade', $data)) {
            $object->setSurgeUpgrade($data['surge_upgrade']);
            unset($data['surge_upgrade']);
        }
        if (\array_key_exists('ha', $data)) {
            $object->setHa($data['ha']);
            unset($data['ha']);
        }
        if (\array_key_exists('registry_enabled', $data)) {
            $object->setRegistryEnabled($data['registry_enabled']);
            unset($data['registry_enabled']);
        }
        if (\array_key_exists('control_plane_firewall', $data) && $data['control_plane_firewall'] !== null) {
            $object->setControlPlaneFirewall($this->denormalizer->denormalize($data['control_plane_firewall'], \Jane\Generated\DigitalOcean\Model\ControlPlaneFirewall::class, 'json', $context));
            unset($data['control_plane_firewall']);
        }
        elseif (\array_key_exists('control_plane_firewall', $data) && $data['control_plane_firewall'] === null) {
            $object->setControlPlaneFirewall(null);
        }
        if (\array_key_exists('cluster_autoscaler_configuration', $data) && $data['cluster_autoscaler_configuration'] !== null) {
            $object->setClusterAutoscalerConfiguration($this->denormalizer->denormalize($data['cluster_autoscaler_configuration'], \Jane\Generated\DigitalOcean\Model\ClusterAutoscalerConfiguration::class, 'json', $context));
            unset($data['cluster_autoscaler_configuration']);
        }
        elseif (\array_key_exists('cluster_autoscaler_configuration', $data) && $data['cluster_autoscaler_configuration'] === null) {
            $object->setClusterAutoscalerConfiguration(null);
        }
        if (\array_key_exists('routing_agent', $data) && $data['routing_agent'] !== null) {
            $object->setRoutingAgent($this->denormalizer->denormalize($data['routing_agent'], \Jane\Generated\DigitalOcean\Model\RoutingAgent::class, 'json', $context));
            unset($data['routing_agent']);
        }
        elseif (\array_key_exists('routing_agent', $data) && $data['routing_agent'] === null) {
            $object->setRoutingAgent(null);
        }
        if (\array_key_exists('amd_gpu_device_plugin', $data) && $data['amd_gpu_device_plugin'] !== null) {
            $object->setAmdGpuDevicePlugin($this->denormalizer->denormalize($data['amd_gpu_device_plugin'], \Jane\Generated\DigitalOcean\Model\AmdGpuDevicePlugin::class, 'json', $context));
            unset($data['amd_gpu_device_plugin']);
        }
        elseif (\array_key_exists('amd_gpu_device_plugin', $data) && $data['amd_gpu_device_plugin'] === null) {
            $object->setAmdGpuDevicePlugin(null);
        }
        if (\array_key_exists('amd_gpu_device_metrics_exporter_plugin', $data) && $data['amd_gpu_device_metrics_exporter_plugin'] !== null) {
            $object->setAmdGpuDeviceMetricsExporterPlugin($this->denormalizer->denormalize($data['amd_gpu_device_metrics_exporter_plugin'], \Jane\Generated\DigitalOcean\Model\AmdGpuDeviceMetricsExporterPlugin::class, 'json', $context));
            unset($data['amd_gpu_device_metrics_exporter_plugin']);
        }
        elseif (\array_key_exists('amd_gpu_device_metrics_exporter_plugin', $data) && $data['amd_gpu_device_metrics_exporter_plugin'] === null) {
            $object->setAmdGpuDeviceMetricsExporterPlugin(null);
        }
        if (\array_key_exists('nvidia_gpu_device_plugin', $data) && $data['nvidia_gpu_device_plugin'] !== null) {
            $object->setNvidiaGpuDevicePlugin($this->denormalizer->denormalize($data['nvidia_gpu_device_plugin'], \Jane\Generated\DigitalOcean\Model\NvidiaGpuDevicePlugin::class, 'json', $context));
            unset($data['nvidia_gpu_device_plugin']);
        }
        elseif (\array_key_exists('nvidia_gpu_device_plugin', $data) && $data['nvidia_gpu_device_plugin'] === null) {
            $object->setNvidiaGpuDevicePlugin(null);
        }
        if (\array_key_exists('rdma_shared_dev_plugin', $data) && $data['rdma_shared_dev_plugin'] !== null) {
            $object->setRdmaSharedDevPlugin($this->denormalizer->denormalize($data['rdma_shared_dev_plugin'], \Jane\Generated\DigitalOcean\Model\RdmaSharedDevPlugin::class, 'json', $context));
            unset($data['rdma_shared_dev_plugin']);
        }
        elseif (\array_key_exists('rdma_shared_dev_plugin', $data) && $data['rdma_shared_dev_plugin'] === null) {
            $object->setRdmaSharedDevPlugin(null);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $dataArray['region'] = $data->getRegion();
        $dataArray['version'] = $data->getVersion();
        if ($data->isInitialized('clusterSubnet') && null !== $data->getClusterSubnet()) {
            $dataArray['cluster_subnet'] = $data->getClusterSubnet();
        }
        if ($data->isInitialized('serviceSubnet') && null !== $data->getServiceSubnet()) {
            $dataArray['service_subnet'] = $data->getServiceSubnet();
        }
        if ($data->isInitialized('vpcUuid') && null !== $data->getVpcUuid()) {
            $dataArray['vpc_uuid'] = $data->getVpcUuid();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values = [];
            foreach ($data->getTags() as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        $values_1 = [];
        foreach ($data->getNodePools() as $value_1) {
            $values_2 = [];
            foreach ($value_1 as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $values_1[] = $values_2;
        }
        $dataArray['node_pools'] = $values_1;
        if ($data->isInitialized('maintenancePolicy')) {
            $dataArray['maintenance_policy'] = $this->normalizer->normalize($data->getMaintenancePolicy(), 'json', $context);
        }
        if ($data->isInitialized('autoUpgrade') && null !== $data->getAutoUpgrade()) {
            $dataArray['auto_upgrade'] = $data->getAutoUpgrade();
        }
        if ($data->isInitialized('surgeUpgrade') && null !== $data->getSurgeUpgrade()) {
            $dataArray['surge_upgrade'] = $data->getSurgeUpgrade();
        }
        if ($data->isInitialized('ha') && null !== $data->getHa()) {
            $dataArray['ha'] = $data->getHa();
        }
        if ($data->isInitialized('controlPlaneFirewall')) {
            $dataArray['control_plane_firewall'] = $this->normalizer->normalize($data->getControlPlaneFirewall(), 'json', $context);
        }
        if ($data->isInitialized('clusterAutoscalerConfiguration')) {
            $dataArray['cluster_autoscaler_configuration'] = $this->normalizer->normalize($data->getClusterAutoscalerConfiguration(), 'json', $context);
        }
        if ($data->isInitialized('routingAgent')) {
            $dataArray['routing_agent'] = $this->normalizer->normalize($data->getRoutingAgent(), 'json', $context);
        }
        if ($data->isInitialized('amdGpuDevicePlugin')) {
            $dataArray['amd_gpu_device_plugin'] = $this->normalizer->normalize($data->getAmdGpuDevicePlugin(), 'json', $context);
        }
        if ($data->isInitialized('amdGpuDeviceMetricsExporterPlugin')) {
            $dataArray['amd_gpu_device_metrics_exporter_plugin'] = $this->normalizer->normalize($data->getAmdGpuDeviceMetricsExporterPlugin(), 'json', $context);
        }
        if ($data->isInitialized('nvidiaGpuDevicePlugin')) {
            $dataArray['nvidia_gpu_device_plugin'] = $this->normalizer->normalize($data->getNvidiaGpuDevicePlugin(), 'json', $context);
        }
        if ($data->isInitialized('rdmaSharedDevPlugin')) {
            $dataArray['rdma_shared_dev_plugin'] = $this->normalizer->normalize($data->getRdmaSharedDevPlugin(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\Cluster::class => false];
    }
}