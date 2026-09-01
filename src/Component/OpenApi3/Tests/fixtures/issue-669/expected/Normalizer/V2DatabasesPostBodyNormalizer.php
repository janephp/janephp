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
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('engine', $data)) {
            $object->engine = $data['engine'];
            unset($data['engine']);
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
            unset($data['version']);
        }
        if (\array_key_exists('semantic_version', $data)) {
            $object->semanticVersion = $data['semantic_version'];
            unset($data['semantic_version']);
        }
        if (\array_key_exists('num_nodes', $data)) {
            $object->numNodes = $data['num_nodes'];
            unset($data['num_nodes']);
        }
        if (\array_key_exists('size', $data)) {
            $object->size = $data['size'];
            unset($data['size']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
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
        if (\array_key_exists('private_network_uuid', $data)) {
            $object->privateNetworkUuid = $data['private_network_uuid'];
            unset($data['private_network_uuid']);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->tags = $values;
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->tags = null;
            unset($data['tags']);
        }
        if (\array_key_exists('db_names', $data) && $data['db_names'] !== null) {
            $values_1 = [];
            foreach ($data['db_names'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->dbNames = $values_1;
            unset($data['db_names']);
        }
        elseif (\array_key_exists('db_names', $data) && $data['db_names'] === null) {
            $object->dbNames = null;
            unset($data['db_names']);
        }
        if (\array_key_exists('ui_connection', $data)) {
            $object->uiConnection = $this->denormalizer->denormalize($data['ui_connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterUiConnection::class, 'json', $context);
            unset($data['ui_connection']);
        }
        if (\array_key_exists('schema_registry_connection', $data)) {
            $object->schemaRegistryConnection = $this->denormalizer->denormalize($data['schema_registry_connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterSchemaRegistryConnection::class, 'json', $context);
            unset($data['schema_registry_connection']);
        }
        if (\array_key_exists('connection', $data)) {
            $object->connection = $this->denormalizer->denormalize($data['connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterConnection::class, 'json', $context);
            unset($data['connection']);
        }
        if (\array_key_exists('private_connection', $data)) {
            $object->privateConnection = $this->denormalizer->denormalize($data['private_connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterPrivateConnection::class, 'json', $context);
            unset($data['private_connection']);
        }
        if (\array_key_exists('standby_connection', $data)) {
            $object->standbyConnection = $this->denormalizer->denormalize($data['standby_connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterStandbyConnection::class, 'json', $context);
            unset($data['standby_connection']);
        }
        if (\array_key_exists('standby_private_connection', $data)) {
            $object->standbyPrivateConnection = $this->denormalizer->denormalize($data['standby_private_connection'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterStandbyPrivateConnection::class, 'json', $context);
            unset($data['standby_private_connection']);
        }
        if (\array_key_exists('users', $data) && $data['users'] !== null) {
            $values_2 = [];
            foreach ($data['users'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\DatabaseUser::class, 'json', $context);
            }
            $object->users = $values_2;
            unset($data['users']);
        }
        elseif (\array_key_exists('users', $data) && $data['users'] === null) {
            $object->users = null;
            unset($data['users']);
        }
        if (\array_key_exists('maintenance_window', $data)) {
            $object->maintenanceWindow = $this->denormalizer->denormalize($data['maintenance_window'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterMaintenanceWindow::class, 'json', $context);
            unset($data['maintenance_window']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->projectId = $data['project_id'];
            unset($data['project_id']);
        }
        if (\array_key_exists('rules', $data)) {
            $values_3 = [];
            foreach ($data['rules'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\FirewallRule::class, 'json', $context);
            }
            $object->rules = $values_3;
            unset($data['rules']);
        }
        if (\array_key_exists('version_end_of_life', $data)) {
            $object->versionEndOfLife = $data['version_end_of_life'];
            unset($data['version_end_of_life']);
        }
        if (\array_key_exists('version_end_of_availability', $data)) {
            $object->versionEndOfAvailability = $data['version_end_of_availability'];
            unset($data['version_end_of_availability']);
        }
        if (\array_key_exists('storage_size_mib', $data)) {
            $object->storageSizeMib = $data['storage_size_mib'];
            unset($data['storage_size_mib']);
        }
        if (\array_key_exists('metrics_endpoints', $data)) {
            $values_4 = [];
            foreach ($data['metrics_endpoints'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jane\Generated\DigitalOcean\Model\DatabaseServiceEndpoint::class, 'json', $context);
            }
            $object->metricsEndpoints = $values_4;
            unset($data['metrics_endpoints']);
        }
        if (\array_key_exists('autoscale', $data)) {
            $object->autoscale = $this->denormalizer->denormalize($data['autoscale'], \Jane\Generated\DigitalOcean\Model\DatabaseClusterAutoscale::class, 'json', $context);
            unset($data['autoscale']);
        }
        if (\array_key_exists('backup_restore', $data)) {
            $object->backupRestore = $this->denormalizer->denormalize($data['backup_restore'], \Jane\Generated\DigitalOcean\Model\DatabaseBackup::class, 'json', $context);
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
        $dataArray['name'] = $data->name ?? null;
        $dataArray['engine'] = $data->engine ?? null;
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version ?? null;
        }
        $dataArray['num_nodes'] = $data->numNodes ?? null;
        $dataArray['size'] = $data->size ?? null;
        $dataArray['region'] = $data->region ?? null;
        if (array_key_exists('privateNetworkUuid', get_object_vars($data)) && null !== ($data->privateNetworkUuid ?? null)) {
            $dataArray['private_network_uuid'] = $data->privateNetworkUuid ?? null;
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values = [];
            foreach ($data->tags ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        if (array_key_exists('uiConnection', get_object_vars($data)) && null !== ($data->uiConnection ?? null)) {
            $dataArray['ui_connection'] = ($data->uiConnection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->uiConnection ?? null, 'json', $context));
        }
        if (array_key_exists('schemaRegistryConnection', get_object_vars($data)) && null !== ($data->schemaRegistryConnection ?? null)) {
            $dataArray['schema_registry_connection'] = ($data->schemaRegistryConnection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->schemaRegistryConnection ?? null, 'json', $context));
        }
        if (array_key_exists('connection', get_object_vars($data)) && null !== ($data->connection ?? null)) {
            $dataArray['connection'] = ($data->connection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->connection ?? null, 'json', $context));
        }
        if (array_key_exists('privateConnection', get_object_vars($data)) && null !== ($data->privateConnection ?? null)) {
            $dataArray['private_connection'] = ($data->privateConnection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->privateConnection ?? null, 'json', $context));
        }
        if (array_key_exists('standbyConnection', get_object_vars($data)) && null !== ($data->standbyConnection ?? null)) {
            $dataArray['standby_connection'] = ($data->standbyConnection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->standbyConnection ?? null, 'json', $context));
        }
        if (array_key_exists('standbyPrivateConnection', get_object_vars($data)) && null !== ($data->standbyPrivateConnection ?? null)) {
            $dataArray['standby_private_connection'] = ($data->standbyPrivateConnection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->standbyPrivateConnection ?? null, 'json', $context));
        }
        if (array_key_exists('maintenanceWindow', get_object_vars($data)) && null !== ($data->maintenanceWindow ?? null)) {
            $dataArray['maintenance_window'] = ($data->maintenanceWindow ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->maintenanceWindow ?? null, 'json', $context));
        }
        if (array_key_exists('projectId', get_object_vars($data)) && null !== ($data->projectId ?? null)) {
            $dataArray['project_id'] = $data->projectId ?? null;
        }
        if (array_key_exists('rules', get_object_vars($data)) && null !== ($data->rules ?? null)) {
            $values_1 = [];
            foreach ($data->rules ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['rules'] = $values_1;
        }
        if (array_key_exists('storageSizeMib', get_object_vars($data)) && null !== ($data->storageSizeMib ?? null)) {
            $dataArray['storage_size_mib'] = $data->storageSizeMib ?? null;
        }
        if (array_key_exists('autoscale', get_object_vars($data)) && null !== ($data->autoscale ?? null)) {
            $dataArray['autoscale'] = ($data->autoscale ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->autoscale ?? null, 'json', $context));
        }
        if (array_key_exists('backupRestore', get_object_vars($data)) && null !== ($data->backupRestore ?? null)) {
            $dataArray['backup_restore'] = ($data->backupRestore ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->backupRestore ?? null, 'json', $context));
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