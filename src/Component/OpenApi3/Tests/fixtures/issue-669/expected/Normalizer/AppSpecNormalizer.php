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
class AppSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('disable_edge_cache', $data) && \is_int($data['disable_edge_cache'])) {
            $data['disable_edge_cache'] = (bool) $data['disable_edge_cache'];
        }
        if (\array_key_exists('disable_email_obfuscation', $data) && \is_int($data['disable_email_obfuscation'])) {
            $data['disable_email_obfuscation'] = (bool) $data['disable_email_obfuscation'];
        }
        if (\array_key_exists('enhanced_threat_control_enabled', $data) && \is_int($data['enhanced_threat_control_enabled'])) {
            $data['enhanced_threat_control_enabled'] = (bool) $data['enhanced_threat_control_enabled'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
        }
        if (\array_key_exists('disable_edge_cache', $data)) {
            $object->disableEdgeCache = $data['disable_edge_cache'];
            unset($data['disable_edge_cache']);
        }
        if (\array_key_exists('disable_email_obfuscation', $data)) {
            $object->disableEmailObfuscation = $data['disable_email_obfuscation'];
            unset($data['disable_email_obfuscation']);
        }
        if (\array_key_exists('enhanced_threat_control_enabled', $data)) {
            $object->enhancedThreatControlEnabled = $data['enhanced_threat_control_enabled'];
            unset($data['enhanced_threat_control_enabled']);
        }
        if (\array_key_exists('domains', $data)) {
            $values = [];
            foreach ($data['domains'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppDomainSpec::class, 'json', $context);
            }
            $object->domains = $values;
            unset($data['domains']);
        }
        if (\array_key_exists('services', $data)) {
            $values_1 = [];
            foreach ($data['services'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\AppServiceSpec::class, 'json', $context);
            }
            $object->services = $values_1;
            unset($data['services']);
        }
        if (\array_key_exists('static_sites', $data)) {
            $values_2 = [];
            foreach ($data['static_sites'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\AppStaticSiteSpec::class, 'json', $context);
            }
            $object->staticSites = $values_2;
            unset($data['static_sites']);
        }
        if (\array_key_exists('jobs', $data)) {
            $values_3 = [];
            foreach ($data['jobs'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\AppJobSpec::class, 'json', $context);
            }
            $object->jobs = $values_3;
            unset($data['jobs']);
        }
        if (\array_key_exists('workers', $data)) {
            $values_4 = [];
            foreach ($data['workers'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jane\Generated\DigitalOcean\Model\AppWorkerSpec::class, 'json', $context);
            }
            $object->workers = $values_4;
            unset($data['workers']);
        }
        if (\array_key_exists('functions', $data)) {
            $values_5 = [];
            foreach ($data['functions'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Jane\Generated\DigitalOcean\Model\AppFunctionsSpec::class, 'json', $context);
            }
            $object->functions = $values_5;
            unset($data['functions']);
        }
        if (\array_key_exists('databases', $data)) {
            $values_6 = [];
            foreach ($data['databases'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Jane\Generated\DigitalOcean\Model\AppDatabaseSpec::class, 'json', $context);
            }
            $object->databases = $values_6;
            unset($data['databases']);
        }
        if (\array_key_exists('ingress', $data)) {
            $object->ingress = $this->denormalizer->denormalize($data['ingress'], \Jane\Generated\DigitalOcean\Model\AppIngressSpec::class, 'json', $context);
            unset($data['ingress']);
        }
        if (\array_key_exists('egress', $data)) {
            $object->egress = $this->denormalizer->denormalize($data['egress'], \Jane\Generated\DigitalOcean\Model\AppEgressSpec::class, 'json', $context);
            unset($data['egress']);
        }
        if (\array_key_exists('maintenance', $data)) {
            $object->maintenance = $this->denormalizer->denormalize($data['maintenance'], \Jane\Generated\DigitalOcean\Model\AppMaintenanceSpec::class, 'json', $context);
            unset($data['maintenance']);
        }
        if (\array_key_exists('vpc', $data)) {
            $object->vpc = $this->denormalizer->denormalize($data['vpc'], \Jane\Generated\DigitalOcean\Model\AppsVpc::class, 'json', $context);
            unset($data['vpc']);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = $data->region ?? null;
        }
        if (array_key_exists('disableEdgeCache', get_object_vars($data)) && null !== ($data->disableEdgeCache ?? null)) {
            $dataArray['disable_edge_cache'] = $data->disableEdgeCache ?? null;
        }
        if (array_key_exists('disableEmailObfuscation', get_object_vars($data)) && null !== ($data->disableEmailObfuscation ?? null)) {
            $dataArray['disable_email_obfuscation'] = $data->disableEmailObfuscation ?? null;
        }
        if (array_key_exists('enhancedThreatControlEnabled', get_object_vars($data)) && null !== ($data->enhancedThreatControlEnabled ?? null)) {
            $dataArray['enhanced_threat_control_enabled'] = $data->enhancedThreatControlEnabled ?? null;
        }
        if (array_key_exists('domains', get_object_vars($data)) && null !== ($data->domains ?? null)) {
            $values = [];
            foreach ($data->domains ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['domains'] = $values;
        }
        if (array_key_exists('services', get_object_vars($data)) && null !== ($data->services ?? null)) {
            $values_1 = [];
            foreach ($data->services ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['services'] = $values_1;
        }
        if (array_key_exists('staticSites', get_object_vars($data)) && null !== ($data->staticSites ?? null)) {
            $values_2 = [];
            foreach ($data->staticSites ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['static_sites'] = $values_2;
        }
        if (array_key_exists('jobs', get_object_vars($data)) && null !== ($data->jobs ?? null)) {
            $values_3 = [];
            foreach ($data->jobs ?? null as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['jobs'] = $values_3;
        }
        if (array_key_exists('workers', get_object_vars($data)) && null !== ($data->workers ?? null)) {
            $values_4 = [];
            foreach ($data->workers ?? null as $value_4) {
                $values_4[] = $value_4 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['workers'] = $values_4;
        }
        if (array_key_exists('functions', get_object_vars($data)) && null !== ($data->functions ?? null)) {
            $values_5 = [];
            foreach ($data->functions ?? null as $value_5) {
                $values_5[] = $value_5 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['functions'] = $values_5;
        }
        if (array_key_exists('databases', get_object_vars($data)) && null !== ($data->databases ?? null)) {
            $values_6 = [];
            foreach ($data->databases ?? null as $value_6) {
                $values_6[] = $value_6 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['databases'] = $values_6;
        }
        if (array_key_exists('ingress', get_object_vars($data)) && null !== ($data->ingress ?? null)) {
            $dataArray['ingress'] = ($data->ingress ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->ingress ?? null, 'json', $context));
        }
        if (array_key_exists('egress', get_object_vars($data)) && null !== ($data->egress ?? null)) {
            $dataArray['egress'] = ($data->egress ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->egress ?? null, 'json', $context));
        }
        if (array_key_exists('maintenance', get_object_vars($data)) && null !== ($data->maintenance ?? null)) {
            $dataArray['maintenance'] = ($data->maintenance ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->maintenance ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppSpec::class => false];
    }
}