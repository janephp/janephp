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
        $object = new \Jane\Generated\DigitalOcean\Model\ClusterUpdate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('auto_upgrade', $data) && \is_int($data['auto_upgrade'])) {
            $data['auto_upgrade'] = (bool) $data['auto_upgrade'];
        }
        if (\array_key_exists('surge_upgrade', $data) && \is_int($data['surge_upgrade'])) {
            $data['surge_upgrade'] = (bool) $data['surge_upgrade'];
        }
        if (\array_key_exists('ha', $data) && \is_int($data['ha'])) {
            $data['ha'] = (bool) $data['ha'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->tags = $values;
            unset($data['tags']);
        }
        if (\array_key_exists('maintenance_policy', $data) && $data['maintenance_policy'] !== null) {
            $object->maintenancePolicy = $this->denormalizer->denormalize($data['maintenance_policy'], \Jane\Generated\DigitalOcean\Model\MaintenancePolicy::class, 'json', $context);
            unset($data['maintenance_policy']);
        }
        elseif (\array_key_exists('maintenance_policy', $data) && $data['maintenance_policy'] === null) {
            $object->maintenancePolicy = null;
            unset($data['maintenance_policy']);
        }
        if (\array_key_exists('auto_upgrade', $data)) {
            $object->autoUpgrade = $data['auto_upgrade'];
            unset($data['auto_upgrade']);
        }
        if (\array_key_exists('surge_upgrade', $data)) {
            $object->surgeUpgrade = $data['surge_upgrade'];
            unset($data['surge_upgrade']);
        }
        if (\array_key_exists('ha', $data)) {
            $object->ha = $data['ha'];
            unset($data['ha']);
        }
        if (\array_key_exists('control_plane_firewall', $data) && $data['control_plane_firewall'] !== null) {
            $object->controlPlaneFirewall = $this->denormalizer->denormalize($data['control_plane_firewall'], \Jane\Generated\DigitalOcean\Model\ControlPlaneFirewall::class, 'json', $context);
            unset($data['control_plane_firewall']);
        }
        elseif (\array_key_exists('control_plane_firewall', $data) && $data['control_plane_firewall'] === null) {
            $object->controlPlaneFirewall = null;
            unset($data['control_plane_firewall']);
        }
        if (\array_key_exists('cluster_autoscaler_configuration', $data) && $data['cluster_autoscaler_configuration'] !== null) {
            $object->clusterAutoscalerConfiguration = $this->denormalizer->denormalize($data['cluster_autoscaler_configuration'], \Jane\Generated\DigitalOcean\Model\ClusterAutoscalerConfiguration::class, 'json', $context);
            unset($data['cluster_autoscaler_configuration']);
        }
        elseif (\array_key_exists('cluster_autoscaler_configuration', $data) && $data['cluster_autoscaler_configuration'] === null) {
            $object->clusterAutoscalerConfiguration = null;
            unset($data['cluster_autoscaler_configuration']);
        }
        if (\array_key_exists('routing_agent', $data) && $data['routing_agent'] !== null) {
            $object->routingAgent = $this->denormalizer->denormalize($data['routing_agent'], \Jane\Generated\DigitalOcean\Model\RoutingAgent::class, 'json', $context);
            unset($data['routing_agent']);
        }
        elseif (\array_key_exists('routing_agent', $data) && $data['routing_agent'] === null) {
            $object->routingAgent = null;
            unset($data['routing_agent']);
        }
        if (\array_key_exists('amd_gpu_device_plugin', $data) && $data['amd_gpu_device_plugin'] !== null) {
            $object->amdGpuDevicePlugin = $this->denormalizer->denormalize($data['amd_gpu_device_plugin'], \Jane\Generated\DigitalOcean\Model\AmdGpuDevicePlugin::class, 'json', $context);
            unset($data['amd_gpu_device_plugin']);
        }
        elseif (\array_key_exists('amd_gpu_device_plugin', $data) && $data['amd_gpu_device_plugin'] === null) {
            $object->amdGpuDevicePlugin = null;
            unset($data['amd_gpu_device_plugin']);
        }
        if (\array_key_exists('amd_gpu_device_metrics_exporter_plugin', $data) && $data['amd_gpu_device_metrics_exporter_plugin'] !== null) {
            $object->amdGpuDeviceMetricsExporterPlugin = $this->denormalizer->denormalize($data['amd_gpu_device_metrics_exporter_plugin'], \Jane\Generated\DigitalOcean\Model\AmdGpuDeviceMetricsExporterPlugin::class, 'json', $context);
            unset($data['amd_gpu_device_metrics_exporter_plugin']);
        }
        elseif (\array_key_exists('amd_gpu_device_metrics_exporter_plugin', $data) && $data['amd_gpu_device_metrics_exporter_plugin'] === null) {
            $object->amdGpuDeviceMetricsExporterPlugin = null;
            unset($data['amd_gpu_device_metrics_exporter_plugin']);
        }
        if (\array_key_exists('nvidia_gpu_device_plugin', $data) && $data['nvidia_gpu_device_plugin'] !== null) {
            $object->nvidiaGpuDevicePlugin = $this->denormalizer->denormalize($data['nvidia_gpu_device_plugin'], \Jane\Generated\DigitalOcean\Model\NvidiaGpuDevicePlugin::class, 'json', $context);
            unset($data['nvidia_gpu_device_plugin']);
        }
        elseif (\array_key_exists('nvidia_gpu_device_plugin', $data) && $data['nvidia_gpu_device_plugin'] === null) {
            $object->nvidiaGpuDevicePlugin = null;
            unset($data['nvidia_gpu_device_plugin']);
        }
        if (\array_key_exists('rdma_shared_dev_plugin', $data) && $data['rdma_shared_dev_plugin'] !== null) {
            $object->rdmaSharedDevPlugin = $this->denormalizer->denormalize($data['rdma_shared_dev_plugin'], \Jane\Generated\DigitalOcean\Model\RdmaSharedDevPlugin::class, 'json', $context);
            unset($data['rdma_shared_dev_plugin']);
        }
        elseif (\array_key_exists('rdma_shared_dev_plugin', $data) && $data['rdma_shared_dev_plugin'] === null) {
            $object->rdmaSharedDevPlugin = null;
            unset($data['rdma_shared_dev_plugin']);
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
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values = [];
            foreach ($data->tags ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        if (array_key_exists('maintenancePolicy', get_object_vars($data)) && null !== ($data->maintenancePolicy ?? null)) {
            $dataArray['maintenance_policy'] = ($data->maintenancePolicy ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->maintenancePolicy ?? null, 'json', $context));
        }
        if (array_key_exists('autoUpgrade', get_object_vars($data)) && null !== ($data->autoUpgrade ?? null)) {
            $dataArray['auto_upgrade'] = $data->autoUpgrade ?? null;
        }
        if (array_key_exists('surgeUpgrade', get_object_vars($data)) && null !== ($data->surgeUpgrade ?? null)) {
            $dataArray['surge_upgrade'] = $data->surgeUpgrade ?? null;
        }
        if (array_key_exists('ha', get_object_vars($data)) && null !== ($data->ha ?? null)) {
            $dataArray['ha'] = $data->ha ?? null;
        }
        if (array_key_exists('controlPlaneFirewall', get_object_vars($data)) && null !== ($data->controlPlaneFirewall ?? null)) {
            $dataArray['control_plane_firewall'] = ($data->controlPlaneFirewall ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->controlPlaneFirewall ?? null, 'json', $context));
        }
        if (array_key_exists('clusterAutoscalerConfiguration', get_object_vars($data)) && null !== ($data->clusterAutoscalerConfiguration ?? null)) {
            $dataArray['cluster_autoscaler_configuration'] = ($data->clusterAutoscalerConfiguration ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->clusterAutoscalerConfiguration ?? null, 'json', $context));
        }
        if (array_key_exists('routingAgent', get_object_vars($data)) && null !== ($data->routingAgent ?? null)) {
            $dataArray['routing_agent'] = ($data->routingAgent ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->routingAgent ?? null, 'json', $context));
        }
        if (array_key_exists('amdGpuDevicePlugin', get_object_vars($data)) && null !== ($data->amdGpuDevicePlugin ?? null)) {
            $dataArray['amd_gpu_device_plugin'] = ($data->amdGpuDevicePlugin ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->amdGpuDevicePlugin ?? null, 'json', $context));
        }
        if (array_key_exists('amdGpuDeviceMetricsExporterPlugin', get_object_vars($data)) && null !== ($data->amdGpuDeviceMetricsExporterPlugin ?? null)) {
            $dataArray['amd_gpu_device_metrics_exporter_plugin'] = ($data->amdGpuDeviceMetricsExporterPlugin ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->amdGpuDeviceMetricsExporterPlugin ?? null, 'json', $context));
        }
        if (array_key_exists('nvidiaGpuDevicePlugin', get_object_vars($data)) && null !== ($data->nvidiaGpuDevicePlugin ?? null)) {
            $dataArray['nvidia_gpu_device_plugin'] = ($data->nvidiaGpuDevicePlugin ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->nvidiaGpuDevicePlugin ?? null, 'json', $context));
        }
        if (array_key_exists('rdmaSharedDevPlugin', get_object_vars($data)) && null !== ($data->rdmaSharedDevPlugin ?? null)) {
            $dataArray['rdma_shared_dev_plugin'] = ($data->rdmaSharedDevPlugin ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->rdmaSharedDevPlugin ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
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