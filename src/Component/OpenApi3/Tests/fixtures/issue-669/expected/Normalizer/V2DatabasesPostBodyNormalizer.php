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
class V2DatabasesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\V2DatabasesPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\V2DatabasesPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\V2DatabasesPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('engine', $data)) {
            $object->setEngine($data['engine']);
            unset($data['engine']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        if (\array_key_exists('semantic_version', $data)) {
            $object->setSemanticVersion($data['semantic_version']);
            unset($data['semantic_version']);
        }
        if (\array_key_exists('num_nodes', $data)) {
            $object->setNumNodes($data['num_nodes']);
            unset($data['num_nodes']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
            unset($data['region']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('private_network_uuid', $data)) {
            $object->setPrivateNetworkUuid($data['private_network_uuid']);
            unset($data['private_network_uuid']);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
            unset($data['tags']);
        }
        if (\array_key_exists('db_names', $data) && $data['db_names'] !== null) {
            $values_1 = [];
            foreach ($data['db_names'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDbNames($values_1);
            unset($data['db_names']);
        }
        elseif (\array_key_exists('db_names', $data) && $data['db_names'] === null) {
            $object->setDbNames(null);
            unset($data['db_names']);
        }
        if (\array_key_exists('ui_connection', $data)) {
            $object->setUiConnection($this->denormalizer->denormalize($data['ui_connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterUiConnection::class, 'json', $context));
            unset($data['ui_connection']);
        }
        if (\array_key_exists('schema_registry_connection', $data)) {
            $object->setSchemaRegistryConnection($this->denormalizer->denormalize($data['schema_registry_connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterSchemaRegistryConnection::class, 'json', $context));
            unset($data['schema_registry_connection']);
        }
        if (\array_key_exists('connection', $data)) {
            $object->setConnection($this->denormalizer->denormalize($data['connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterConnection::class, 'json', $context));
            unset($data['connection']);
        }
        if (\array_key_exists('private_connection', $data)) {
            $object->setPrivateConnection($this->denormalizer->denormalize($data['private_connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterPrivateConnection::class, 'json', $context));
            unset($data['private_connection']);
        }
        if (\array_key_exists('standby_connection', $data)) {
            $object->setStandbyConnection($this->denormalizer->denormalize($data['standby_connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterStandbyConnection::class, 'json', $context));
            unset($data['standby_connection']);
        }
        if (\array_key_exists('standby_private_connection', $data)) {
            $object->setStandbyPrivateConnection($this->denormalizer->denormalize($data['standby_private_connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterStandbyPrivateConnection::class, 'json', $context));
            unset($data['standby_private_connection']);
        }
        if (\array_key_exists('users', $data) && $data['users'] !== null) {
            $values_2 = [];
            foreach ($data['users'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\DatabaseUser::class, 'json', $context);
            }
            $object->setUsers($values_2);
            unset($data['users']);
        }
        elseif (\array_key_exists('users', $data) && $data['users'] === null) {
            $object->setUsers(null);
            unset($data['users']);
        }
        if (\array_key_exists('maintenance_window', $data)) {
            $object->setMaintenanceWindow($this->denormalizer->denormalize($data['maintenance_window'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterMaintenanceWindow::class, 'json', $context));
            unset($data['maintenance_window']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
            unset($data['project_id']);
        }
        if (\array_key_exists('rules', $data)) {
            $values_3 = [];
            foreach ($data['rules'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\FirewallRule::class, 'json', $context);
            }
            $object->setRules($values_3);
            unset($data['rules']);
        }
        if (\array_key_exists('version_end_of_life', $data)) {
            $object->setVersionEndOfLife($data['version_end_of_life']);
            unset($data['version_end_of_life']);
        }
        if (\array_key_exists('version_end_of_availability', $data)) {
            $object->setVersionEndOfAvailability($data['version_end_of_availability']);
            unset($data['version_end_of_availability']);
        }
        if (\array_key_exists('storage_size_mib', $data)) {
            $object->setStorageSizeMib($data['storage_size_mib']);
            unset($data['storage_size_mib']);
        }
        if (\array_key_exists('metrics_endpoints', $data)) {
            $values_4 = [];
            foreach ($data['metrics_endpoints'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jane\Generated\DigitalOcean\Model\DatabaseServiceEndpoint::class, 'json', $context);
            }
            $object->setMetricsEndpoints($values_4);
            unset($data['metrics_endpoints']);
        }
        if (\array_key_exists('autoscale', $data)) {
            $object->setAutoscale($this->denormalizer->denormalize($data['autoscale'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterAutoscale::class, 'json', $context));
            unset($data['autoscale']);
        }
        if (\array_key_exists('backup_restore', $data)) {
            $object->setBackupRestore($this->denormalizer->denormalize($data['backup_restore'], \Jane\Generated\DigitalOcean\Model\DatabaseBackup::class, 'json', $context));
            unset($data['backup_restore']);
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
        $dataArray['name'] = $data->getName();
        $dataArray['engine'] = $data->getEngine();
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        $dataArray['num_nodes'] = $data->getNumNodes();
        $dataArray['size'] = $data->getSize();
        $dataArray['region'] = $data->getRegion();
        if ($data->isInitialized('privateNetworkUuid') && null !== $data->getPrivateNetworkUuid()) {
            $dataArray['private_network_uuid'] = $data->getPrivateNetworkUuid();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values = [];
            foreach ($data->getTags() as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        if ($data->isInitialized('uiConnection') && null !== $data->getUiConnection()) {
            $dataArray['ui_connection'] = $data->getUiConnection() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getUiConnection(), 'json', $context));
        }
        if ($data->isInitialized('schemaRegistryConnection') && null !== $data->getSchemaRegistryConnection()) {
            $dataArray['schema_registry_connection'] = $data->getSchemaRegistryConnection() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getSchemaRegistryConnection(), 'json', $context));
        }
        if ($data->isInitialized('connection') && null !== $data->getConnection()) {
            $dataArray['connection'] = $data->getConnection() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getConnection(), 'json', $context));
        }
        if ($data->isInitialized('privateConnection') && null !== $data->getPrivateConnection()) {
            $dataArray['private_connection'] = $data->getPrivateConnection() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getPrivateConnection(), 'json', $context));
        }
        if ($data->isInitialized('standbyConnection') && null !== $data->getStandbyConnection()) {
            $dataArray['standby_connection'] = $data->getStandbyConnection() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getStandbyConnection(), 'json', $context));
        }
        if ($data->isInitialized('standbyPrivateConnection') && null !== $data->getStandbyPrivateConnection()) {
            $dataArray['standby_private_connection'] = $data->getStandbyPrivateConnection() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getStandbyPrivateConnection(), 'json', $context));
        }
        if ($data->isInitialized('maintenanceWindow') && null !== $data->getMaintenanceWindow()) {
            $dataArray['maintenance_window'] = $data->getMaintenanceWindow() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getMaintenanceWindow(), 'json', $context));
        }
        if ($data->isInitialized('projectId') && null !== $data->getProjectId()) {
            $dataArray['project_id'] = $data->getProjectId();
        }
        if ($data->isInitialized('rules') && null !== $data->getRules()) {
            $values_1 = [];
            foreach ($data->getRules() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['rules'] = $values_1;
        }
        if ($data->isInitialized('storageSizeMib') && null !== $data->getStorageSizeMib()) {
            $dataArray['storage_size_mib'] = $data->getStorageSizeMib();
        }
        if ($data->isInitialized('autoscale') && null !== $data->getAutoscale()) {
            $dataArray['autoscale'] = $data->getAutoscale() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getAutoscale(), 'json', $context));
        }
        if ($data->isInitialized('backupRestore') && null !== $data->getBackupRestore()) {
            $dataArray['backup_restore'] = $data->getBackupRestore() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getBackupRestore(), 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\V2DatabasesPostBody::class => false];
    }
}