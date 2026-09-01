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
class AppPinnedDeploymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppPinnedDeployment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppPinnedDeployment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppPinnedDeployment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('cause', $data)) {
            $object->cause = $data['cause'];
            unset($data['cause']);
        }
        if (\array_key_exists('cloned_from', $data)) {
            $object->clonedFrom = $data['cloned_from'];
            unset($data['cloned_from']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('jobs', $data)) {
            $values = [];
            foreach ($data['jobs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppsDeploymentJob::class, 'json', $context);
            }
            $object->jobs = $values;
            unset($data['jobs']);
        }
        if (\array_key_exists('functions', $data)) {
            $values_1 = [];
            foreach ($data['functions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\AppsDeploymentFunctions::class, 'json', $context);
            }
            $object->functions = $values_1;
            unset($data['functions']);
        }
        if (\array_key_exists('phase', $data)) {
            $object->phase = $data['phase'];
            unset($data['phase']);
        }
        if (\array_key_exists('phase_last_updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['phase_last_updated_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['phase_last_updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->phaseLastUpdatedAt = $date_1;
            unset($data['phase_last_updated_at']);
        }
        if (\array_key_exists('progress', $data)) {
            $object->progress = $this->denormalizer->denormalize($data['progress'], \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgress::class, 'json', $context);
            unset($data['progress']);
        }
        if (\array_key_exists('services', $data)) {
            $values_2 = [];
            foreach ($data['services'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\AppsDeploymentService::class, 'json', $context);
            }
            $object->services = $values_2;
            unset($data['services']);
        }
        if (\array_key_exists('spec', $data)) {
            $object->spec = $this->denormalizer->denormalize($data['spec'], \Jane\Generated\DigitalOcean\Model\AppSpec::class, 'json', $context);
            unset($data['spec']);
        }
        if (\array_key_exists('static_sites', $data)) {
            $values_3 = [];
            foreach ($data['static_sites'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\AppsDeploymentStaticSite::class, 'json', $context);
            }
            $object->staticSites = $values_3;
            unset($data['static_sites']);
        }
        if (\array_key_exists('tier_slug', $data)) {
            $object->tierSlug = $data['tier_slug'];
            unset($data['tier_slug']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_2) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_2;
            unset($data['updated_at']);
        }
        if (\array_key_exists('workers', $data)) {
            $values_4 = [];
            foreach ($data['workers'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jane\Generated\DigitalOcean\Model\AppsDeploymentWorker::class, 'json', $context);
            }
            $object->workers = $values_4;
            unset($data['workers']);
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
        if (array_key_exists('cause', get_object_vars($data)) && null !== ($data->cause ?? null)) {
            $dataArray['cause'] = $data->cause ?? null;
        }
        if (array_key_exists('clonedFrom', get_object_vars($data)) && null !== ($data->clonedFrom ?? null)) {
            $dataArray['cloned_from'] = $data->clonedFrom ?? null;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('jobs', get_object_vars($data)) && null !== ($data->jobs ?? null)) {
            $values = [];
            foreach ($data->jobs ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['jobs'] = $values;
        }
        if (array_key_exists('functions', get_object_vars($data)) && null !== ($data->functions ?? null)) {
            $values_1 = [];
            foreach ($data->functions ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['functions'] = $values_1;
        }
        if (array_key_exists('phase', get_object_vars($data)) && null !== ($data->phase ?? null)) {
            $dataArray['phase'] = $data->phase ?? null;
        }
        if (array_key_exists('phaseLastUpdatedAt', get_object_vars($data)) && null !== ($data->phaseLastUpdatedAt ?? null)) {
            $dataArray['phase_last_updated_at'] = ($data->phaseLastUpdatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('progress', get_object_vars($data)) && null !== ($data->progress ?? null)) {
            $dataArray['progress'] = ($data->progress ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->progress ?? null, 'json', $context));
        }
        if (array_key_exists('services', get_object_vars($data)) && null !== ($data->services ?? null)) {
            $values_2 = [];
            foreach ($data->services ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['services'] = $values_2;
        }
        if (array_key_exists('spec', get_object_vars($data)) && null !== ($data->spec ?? null)) {
            $dataArray['spec'] = ($data->spec ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->spec ?? null, 'json', $context));
        }
        if (array_key_exists('staticSites', get_object_vars($data)) && null !== ($data->staticSites ?? null)) {
            $values_3 = [];
            foreach ($data->staticSites ?? null as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['static_sites'] = $values_3;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('workers', get_object_vars($data)) && null !== ($data->workers ?? null)) {
            $values_4 = [];
            foreach ($data->workers ?? null as $value_4) {
                $values_4[] = $value_4 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['workers'] = $values_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppPinnedDeployment::class => false];
    }
}