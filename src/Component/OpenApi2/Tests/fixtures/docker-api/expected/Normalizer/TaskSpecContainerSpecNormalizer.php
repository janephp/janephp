<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TaskSpecContainerSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\TaskSpecContainerSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\TaskSpecContainerSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\TaskSpecContainerSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('TTY', $data) && \is_int($data['TTY'])) {
            $data['TTY'] = (bool) $data['TTY'];
        }
        if (\array_key_exists('OpenStdin', $data) && \is_int($data['OpenStdin'])) {
            $data['OpenStdin'] = (bool) $data['OpenStdin'];
        }
        if (\array_key_exists('ReadOnly', $data) && \is_int($data['ReadOnly'])) {
            $data['ReadOnly'] = (bool) $data['ReadOnly'];
        }
        if (\array_key_exists('Init', $data) && \is_int($data['Init'])) {
            $data['Init'] = (bool) $data['Init'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\TaskSpecContainerSpecConstraint());
        }
        if (\array_key_exists('Image', $data)) {
            $object->image = $data['Image'];
        }
        if (\array_key_exists('Labels', $data)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->labels = $values;
        }
        if (\array_key_exists('Command', $data)) {
            $values_1 = [];
            foreach ($data['Command'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->command = $values_1;
        }
        if (\array_key_exists('Args', $data)) {
            $values_2 = [];
            foreach ($data['Args'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->args = $values_2;
        }
        if (\array_key_exists('Hostname', $data)) {
            $object->hostname = $data['Hostname'];
        }
        if (\array_key_exists('Env', $data)) {
            $values_3 = [];
            foreach ($data['Env'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->env = $values_3;
        }
        if (\array_key_exists('Dir', $data)) {
            $object->dir = $data['Dir'];
        }
        if (\array_key_exists('User', $data)) {
            $object->user = $data['User'];
        }
        if (\array_key_exists('Groups', $data)) {
            $values_4 = [];
            foreach ($data['Groups'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->groups = $values_4;
        }
        if (\array_key_exists('Privileges', $data)) {
            $object->privileges = $this->denormalizer->denormalize($data['Privileges'], \Docker\Api\Model\TaskSpecContainerSpecPrivileges::class, 'json', $context);
        }
        if (\array_key_exists('TTY', $data)) {
            $object->tTY = $data['TTY'];
        }
        if (\array_key_exists('OpenStdin', $data)) {
            $object->openStdin = $data['OpenStdin'];
        }
        if (\array_key_exists('ReadOnly', $data)) {
            $object->readOnly = $data['ReadOnly'];
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_5 = [];
            foreach ($data['Mounts'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Docker\Api\Model\Mount::class, 'json', $context);
            }
            $object->mounts = $values_5;
        }
        if (\array_key_exists('StopSignal', $data)) {
            $object->stopSignal = $data['StopSignal'];
        }
        if (\array_key_exists('StopGracePeriod', $data)) {
            $object->stopGracePeriod = $data['StopGracePeriod'];
        }
        if (\array_key_exists('HealthCheck', $data)) {
            $object->healthCheck = $this->denormalizer->denormalize($data['HealthCheck'], \Docker\Api\Model\HealthConfig::class, 'json', $context);
        }
        if (\array_key_exists('Hosts', $data)) {
            $values_6 = [];
            foreach ($data['Hosts'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->hosts = $values_6;
        }
        if (\array_key_exists('DNSConfig', $data)) {
            $object->dNSConfig = $this->denormalizer->denormalize($data['DNSConfig'], \Docker\Api\Model\TaskSpecContainerSpecDNSConfig::class, 'json', $context);
        }
        if (\array_key_exists('Secrets', $data)) {
            $values_7 = [];
            foreach ($data['Secrets'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Docker\Api\Model\TaskSpecContainerSpecSecretsItem::class, 'json', $context);
            }
            $object->secrets = $values_7;
        }
        if (\array_key_exists('Configs', $data)) {
            $values_8 = [];
            foreach ($data['Configs'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \Docker\Api\Model\TaskSpecContainerSpecConfigsItem::class, 'json', $context);
            }
            $object->configs = $values_8;
        }
        if (\array_key_exists('Isolation', $data)) {
            $object->isolation = $data['Isolation'];
        }
        if (\array_key_exists('Init', $data) && $data['Init'] !== null) {
            $object->init = $data['Init'];
        }
        elseif (\array_key_exists('Init', $data) && $data['Init'] === null) {
            $object->init = null;
        }
        if (\array_key_exists('Sysctls', $data)) {
            $values_9 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Sysctls'] as $key_1 => $value_9) {
                $values_9[$key_1] = $value_9;
            }
            $object->sysctls = $values_9;
        }
        if (\array_key_exists('CapabilityAdd', $data)) {
            $values_10 = [];
            foreach ($data['CapabilityAdd'] as $value_10) {
                $values_10[] = $value_10;
            }
            $object->capabilityAdd = $values_10;
        }
        if (\array_key_exists('CapabilityDrop', $data)) {
            $values_11 = [];
            foreach ($data['CapabilityDrop'] as $value_11) {
                $values_11[] = $value_11;
            }
            $object->capabilityDrop = $values_11;
        }
        if (\array_key_exists('Ulimits', $data)) {
            $values_12 = [];
            foreach ($data['Ulimits'] as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, \Docker\Api\Model\TaskSpecContainerSpecUlimitsItem::class, 'json', $context);
            }
            $object->ulimits = $values_12;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('image', get_object_vars($data)) && null !== ($data->image ?? null)) {
            $dataArray['Image'] = $data->image ?? null;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->labels ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Labels'] = $values;
        }
        if (array_key_exists('command', get_object_vars($data)) && null !== ($data->command ?? null)) {
            $values_1 = [];
            foreach ($data->command ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Command'] = $values_1;
        }
        if (array_key_exists('args', get_object_vars($data)) && null !== ($data->args ?? null)) {
            $values_2 = [];
            foreach ($data->args ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Args'] = $values_2;
        }
        if (array_key_exists('hostname', get_object_vars($data)) && null !== ($data->hostname ?? null)) {
            $dataArray['Hostname'] = $data->hostname ?? null;
        }
        if (array_key_exists('env', get_object_vars($data)) && null !== ($data->env ?? null)) {
            $values_3 = [];
            foreach ($data->env ?? null as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['Env'] = $values_3;
        }
        if (array_key_exists('dir', get_object_vars($data)) && null !== ($data->dir ?? null)) {
            $dataArray['Dir'] = $data->dir ?? null;
        }
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['User'] = $data->user ?? null;
        }
        if (array_key_exists('groups', get_object_vars($data)) && null !== ($data->groups ?? null)) {
            $values_4 = [];
            foreach ($data->groups ?? null as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['Groups'] = $values_4;
        }
        if (array_key_exists('privileges', get_object_vars($data)) && null !== ($data->privileges ?? null)) {
            $dataArray['Privileges'] = ($data->privileges ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->privileges ?? null, 'json', $context));
        }
        if (array_key_exists('tTY', get_object_vars($data)) && null !== ($data->tTY ?? null)) {
            $dataArray['TTY'] = $data->tTY ?? null;
        }
        if (array_key_exists('openStdin', get_object_vars($data)) && null !== ($data->openStdin ?? null)) {
            $dataArray['OpenStdin'] = $data->openStdin ?? null;
        }
        if (array_key_exists('readOnly', get_object_vars($data)) && null !== ($data->readOnly ?? null)) {
            $dataArray['ReadOnly'] = $data->readOnly ?? null;
        }
        if (array_key_exists('mounts', get_object_vars($data)) && null !== ($data->mounts ?? null)) {
            $values_5 = [];
            foreach ($data->mounts ?? null as $value_5) {
                $values_5[] = $value_5 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['Mounts'] = $values_5;
        }
        if (array_key_exists('stopSignal', get_object_vars($data)) && null !== ($data->stopSignal ?? null)) {
            $dataArray['StopSignal'] = $data->stopSignal ?? null;
        }
        if (array_key_exists('stopGracePeriod', get_object_vars($data)) && null !== ($data->stopGracePeriod ?? null)) {
            $dataArray['StopGracePeriod'] = $data->stopGracePeriod ?? null;
        }
        if (array_key_exists('healthCheck', get_object_vars($data)) && null !== ($data->healthCheck ?? null)) {
            $dataArray['HealthCheck'] = ($data->healthCheck ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->healthCheck ?? null, 'json', $context));
        }
        if (array_key_exists('hosts', get_object_vars($data)) && null !== ($data->hosts ?? null)) {
            $values_6 = [];
            foreach ($data->hosts ?? null as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['Hosts'] = $values_6;
        }
        if (array_key_exists('dNSConfig', get_object_vars($data)) && null !== ($data->dNSConfig ?? null)) {
            $dataArray['DNSConfig'] = ($data->dNSConfig ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->dNSConfig ?? null, 'json', $context));
        }
        if (array_key_exists('secrets', get_object_vars($data)) && null !== ($data->secrets ?? null)) {
            $values_7 = [];
            foreach ($data->secrets ?? null as $value_7) {
                $values_7[] = $value_7 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['Secrets'] = $values_7;
        }
        if (array_key_exists('configs', get_object_vars($data)) && null !== ($data->configs ?? null)) {
            $values_8 = [];
            foreach ($data->configs ?? null as $value_8) {
                $values_8[] = $value_8 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_8, 'json', $context));
            }
            $dataArray['Configs'] = $values_8;
        }
        if (array_key_exists('isolation', get_object_vars($data)) && null !== ($data->isolation ?? null)) {
            $dataArray['Isolation'] = $data->isolation ?? null;
        }
        if (array_key_exists('init', get_object_vars($data)) && null !== ($data->init ?? null)) {
            $dataArray['Init'] = $data->init ?? null;
        }
        if (array_key_exists('sysctls', get_object_vars($data)) && null !== ($data->sysctls ?? null)) {
            $values_9 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->sysctls ?? null as $key_1 => $value_9) {
                $values_9[$key_1] = $value_9;
            }
            $dataArray['Sysctls'] = $values_9;
        }
        if (array_key_exists('capabilityAdd', get_object_vars($data)) && null !== ($data->capabilityAdd ?? null)) {
            $values_10 = [];
            foreach ($data->capabilityAdd ?? null as $value_10) {
                $values_10[] = $value_10;
            }
            $dataArray['CapabilityAdd'] = $values_10;
        }
        if (array_key_exists('capabilityDrop', get_object_vars($data)) && null !== ($data->capabilityDrop ?? null)) {
            $values_11 = [];
            foreach ($data->capabilityDrop ?? null as $value_11) {
                $values_11[] = $value_11;
            }
            $dataArray['CapabilityDrop'] = $values_11;
        }
        if (array_key_exists('ulimits', get_object_vars($data)) && null !== ($data->ulimits ?? null)) {
            $values_12 = [];
            foreach ($data->ulimits ?? null as $value_12) {
                $values_12[] = $value_12 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_12, 'json', $context));
            }
            $dataArray['Ulimits'] = $values_12;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\TaskSpecContainerSpecConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\TaskSpecContainerSpec::class => false];
    }
}