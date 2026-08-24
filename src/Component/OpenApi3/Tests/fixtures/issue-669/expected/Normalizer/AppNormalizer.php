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
class AppNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\App::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\App::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\App();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('active_deployment', $data)) {
            $object->setActiveDeployment($this->denormalizer->denormalize($data['active_deployment'], \Jane\Generated\DigitalOcean\Model\AppsDeployment::class, 'json', $context));
            unset($data['active_deployment']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('default_ingress', $data)) {
            $object->setDefaultIngress($data['default_ingress']);
            unset($data['default_ingress']);
        }
        if (\array_key_exists('domains', $data)) {
            $values = [];
            foreach ($data['domains'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppsDomain::class, 'json', $context);
            }
            $object->setDomains($values);
            unset($data['domains']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('in_progress_deployment', $data)) {
            $object->setInProgressDeployment($this->denormalizer->denormalize($data['in_progress_deployment'], \Jane\Generated\DigitalOcean\Model\AppsDeployment::class, 'json', $context));
            unset($data['in_progress_deployment']);
        }
        if (\array_key_exists('last_deployment_created_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_deployment_created_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['last_deployment_created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setLastDeploymentCreatedAt($date_1);
            unset($data['last_deployment_created_at']);
        }
        if (\array_key_exists('live_domain', $data)) {
            $object->setLiveDomain($data['live_domain']);
            unset($data['live_domain']);
        }
        if (\array_key_exists('live_url', $data)) {
            $object->setLiveUrl($data['live_url']);
            unset($data['live_url']);
        }
        if (\array_key_exists('live_url_base', $data)) {
            $object->setLiveUrlBase($data['live_url_base']);
            unset($data['live_url_base']);
        }
        if (\array_key_exists('owner_uuid', $data)) {
            $object->setOwnerUuid($data['owner_uuid']);
            unset($data['owner_uuid']);
        }
        if (\array_key_exists('pending_deployment', $data)) {
            $object->setPendingDeployment($this->denormalizer->denormalize($data['pending_deployment'], \Jane\Generated\DigitalOcean\Model\AppPendingDeployment::class, 'json', $context));
            unset($data['pending_deployment']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
            unset($data['project_id']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($this->denormalizer->denormalize($data['region'], \Jane\Generated\DigitalOcean\Model\AppsRegion::class, 'json', $context));
            unset($data['region']);
        }
        if (\array_key_exists('spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['spec'], \Jane\Generated\DigitalOcean\Model\AppSpec::class, 'json', $context));
            unset($data['spec']);
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
        if (\array_key_exists('pinned_deployment', $data)) {
            $object->setPinnedDeployment($this->denormalizer->denormalize($data['pinned_deployment'], \Jane\Generated\DigitalOcean\Model\AppPinnedDeployment::class, 'json', $context));
            unset($data['pinned_deployment']);
        }
        if (\array_key_exists('dedicated_ips', $data)) {
            $values_1 = [];
            foreach ($data['dedicated_ips'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\AppsDedicatedEgressIp::class, 'json', $context);
            }
            $object->setDedicatedIps($values_1);
            unset($data['dedicated_ips']);
        }
        if (\array_key_exists('vpc', $data)) {
            $object->setVpc($this->denormalizer->denormalize($data['vpc'], \Jane\Generated\DigitalOcean\Model\AppsVpc::class, 'json', $context));
            unset($data['vpc']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('activeDeployment') && null !== $data->getActiveDeployment()) {
            $dataArray['active_deployment'] = $data->getActiveDeployment() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getActiveDeployment(), 'json', $context));
        }
        if ($data->isInitialized('inProgressDeployment') && null !== $data->getInProgressDeployment()) {
            $dataArray['in_progress_deployment'] = $data->getInProgressDeployment() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getInProgressDeployment(), 'json', $context));
        }
        if ($data->isInitialized('pendingDeployment') && null !== $data->getPendingDeployment()) {
            $dataArray['pending_deployment'] = $data->getPendingDeployment() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getPendingDeployment(), 'json', $context));
        }
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $data->getRegion() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getRegion(), 'json', $context));
        }
        $dataArray['spec'] = $data->getSpec() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getSpec(), 'json', $context));
        if ($data->isInitialized('pinnedDeployment') && null !== $data->getPinnedDeployment()) {
            $dataArray['pinned_deployment'] = $data->getPinnedDeployment() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getPinnedDeployment(), 'json', $context));
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\App::class => false];
    }
}