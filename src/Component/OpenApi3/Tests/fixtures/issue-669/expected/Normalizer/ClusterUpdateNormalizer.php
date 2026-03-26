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
class ClusterUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ClusterUpdate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ClusterUpdate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ClusterUpdate();
        if (\array_key_exists('auto_upgrade', $data) && \is_int($data['auto_upgrade'])) {
            $data['auto_upgrade'] = (bool) $data['auto_upgrade'];
        }
        if (\array_key_exists('surge_upgrade', $data) && \is_int($data['surge_upgrade'])) {
            $data['surge_upgrade'] = (bool) $data['surge_upgrade'];
        }
        if (\array_key_exists('ha', $data) && \is_int($data['ha'])) {
            $data['ha'] = (bool) $data['ha'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data['tags']);
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
        if (\array_key_exists('surge_upgrade', $data)) {
            $object->setSurgeUpgrade($data['surge_upgrade']);
            unset($data['surge_upgrade']);
        }
        if (\array_key_exists('ha', $data)) {
            $object->setHa($data['ha']);
            unset($data['ha']);
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
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values = [];
            foreach ($data->getTags() as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
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
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ClusterUpdate::class => false];
    }
}