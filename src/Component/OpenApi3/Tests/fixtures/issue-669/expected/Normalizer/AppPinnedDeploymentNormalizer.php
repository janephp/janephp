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
            $object->setCause($data['cause']);
            unset($data['cause']);
        }
        if (\array_key_exists('cloned_from', $data)) {
            $object->setClonedFrom($data['cloned_from']);
            unset($data['cloned_from']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('jobs', $data)) {
            $values = [];
            foreach ($data['jobs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppsDeploymentJob::class, 'json', $context);
            }
            $object->setJobs($values);
            unset($data['jobs']);
        }
        if (\array_key_exists('functions', $data)) {
            $values_1 = [];
            foreach ($data['functions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\AppsDeploymentFunctions::class, 'json', $context);
            }
            $object->setFunctions($values_1);
            unset($data['functions']);
        }
        if (\array_key_exists('phase', $data)) {
            $object->setPhase($data['phase']);
            unset($data['phase']);
        }
        if (\array_key_exists('phase_last_updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['phase_last_updated_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['phase_last_updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setPhaseLastUpdatedAt($date_1);
            unset($data['phase_last_updated_at']);
        }
        if (\array_key_exists('progress', $data)) {
            $object->setProgress($this->denormalizer->denormalize($data['progress'], \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgress::class, 'json', $context));
            unset($data['progress']);
        }
        if (\array_key_exists('services', $data)) {
            $values_2 = [];
            foreach ($data['services'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\AppsDeploymentService::class, 'json', $context);
            }
            $object->setServices($values_2);
            unset($data['services']);
        }
        if (\array_key_exists('spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['spec'], \Jane\Generated\DigitalOcean\Model\AppSpec::class, 'json', $context));
            unset($data['spec']);
        }
        if (\array_key_exists('static_sites', $data)) {
            $values_3 = [];
            foreach ($data['static_sites'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\AppsDeploymentStaticSite::class, 'json', $context);
            }
            $object->setStaticSites($values_3);
            unset($data['static_sites']);
        }
        if (\array_key_exists('tier_slug', $data)) {
            $object->setTierSlug($data['tier_slug']);
            unset($data['tier_slug']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_2) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setUpdatedAt($date_2);
            unset($data['updated_at']);
        }
        if (\array_key_exists('workers', $data)) {
            $values_4 = [];
            foreach ($data['workers'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Jane\Generated\DigitalOcean\Model\AppsDeploymentWorker::class, 'json', $context);
            }
            $object->setWorkers($values_4);
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
        if ($data->isInitialized('cause') && null !== $data->getCause()) {
            $dataArray['cause'] = $data->getCause();
        }
        if ($data->isInitialized('clonedFrom') && null !== $data->getClonedFrom()) {
            $dataArray['cloned_from'] = $data->getClonedFrom();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('jobs') && null !== $data->getJobs()) {
            $values = [];
            foreach ($data->getJobs() as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['jobs'] = $values;
        }
        if ($data->isInitialized('functions') && null !== $data->getFunctions()) {
            $values_1 = [];
            foreach ($data->getFunctions() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['functions'] = $values_1;
        }
        if ($data->isInitialized('phase') && null !== $data->getPhase()) {
            $dataArray['phase'] = $data->getPhase();
        }
        if ($data->isInitialized('phaseLastUpdatedAt') && null !== $data->getPhaseLastUpdatedAt()) {
            $dataArray['phase_last_updated_at'] = $data->getPhaseLastUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('progress') && null !== $data->getProgress()) {
            $dataArray['progress'] = $data->getProgress() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getProgress(), 'json', $context));
        }
        if ($data->isInitialized('services') && null !== $data->getServices()) {
            $values_2 = [];
            foreach ($data->getServices() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['services'] = $values_2;
        }
        if ($data->isInitialized('spec') && null !== $data->getSpec()) {
            $dataArray['spec'] = $data->getSpec() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getSpec(), 'json', $context));
        }
        if ($data->isInitialized('staticSites') && null !== $data->getStaticSites()) {
            $values_3 = [];
            foreach ($data->getStaticSites() as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['static_sites'] = $values_3;
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('workers') && null !== $data->getWorkers()) {
            $values_4 = [];
            foreach ($data->getWorkers() as $value_4) {
                $values_4[] = $value_4 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['workers'] = $values_4;
        }
        foreach ($data as $key => $value_5) {
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