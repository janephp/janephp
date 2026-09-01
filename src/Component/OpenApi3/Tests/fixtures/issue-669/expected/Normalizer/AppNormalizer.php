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
            $object->activeDeployment = $this->denormalizer->denormalize($data['active_deployment'], \Jane\Generated\DigitalOcean\Model\AppsDeployment::class, 'json', $context);
            unset($data['active_deployment']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('default_ingress', $data)) {
            $object->defaultIngress = $data['default_ingress'];
            unset($data['default_ingress']);
        }
        if (\array_key_exists('domains', $data)) {
            $values = [];
            foreach ($data['domains'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppsDomain::class, 'json', $context);
            }
            $object->domains = $values;
            unset($data['domains']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('in_progress_deployment', $data)) {
            $object->inProgressDeployment = $this->denormalizer->denormalize($data['in_progress_deployment'], \Jane\Generated\DigitalOcean\Model\AppsDeployment::class, 'json', $context);
            unset($data['in_progress_deployment']);
        }
        if (\array_key_exists('last_deployment_created_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_deployment_created_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['last_deployment_created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->lastDeploymentCreatedAt = $date_1;
            unset($data['last_deployment_created_at']);
        }
        if (\array_key_exists('live_domain', $data)) {
            $object->liveDomain = $data['live_domain'];
            unset($data['live_domain']);
        }
        if (\array_key_exists('live_url', $data)) {
            $object->liveUrl = $data['live_url'];
            unset($data['live_url']);
        }
        if (\array_key_exists('live_url_base', $data)) {
            $object->liveUrlBase = $data['live_url_base'];
            unset($data['live_url_base']);
        }
        if (\array_key_exists('owner_uuid', $data)) {
            $object->ownerUuid = $data['owner_uuid'];
            unset($data['owner_uuid']);
        }
        if (\array_key_exists('pending_deployment', $data)) {
            $object->pendingDeployment = $this->denormalizer->denormalize($data['pending_deployment'], \Jane\Generated\DigitalOcean\Model\AppPendingDeployment::class, 'json', $context);
            unset($data['pending_deployment']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->projectId = $data['project_id'];
            unset($data['project_id']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $this->denormalizer->denormalize($data['region'], \Jane\Generated\DigitalOcean\Model\AppsRegion::class, 'json', $context);
            unset($data['region']);
        }
        if (\array_key_exists('spec', $data)) {
            $object->spec = $this->denormalizer->denormalize($data['spec'], \Jane\Generated\DigitalOcean\Model\AppSpec::class, 'json', $context);
            unset($data['spec']);
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
        if (\array_key_exists('pinned_deployment', $data)) {
            $object->pinnedDeployment = $this->denormalizer->denormalize($data['pinned_deployment'], \Jane\Generated\DigitalOcean\Model\AppPinnedDeployment::class, 'json', $context);
            unset($data['pinned_deployment']);
        }
        if (\array_key_exists('dedicated_ips', $data)) {
            $values_1 = [];
            foreach ($data['dedicated_ips'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\AppsDedicatedEgressIp::class, 'json', $context);
            }
            $object->dedicatedIps = $values_1;
            unset($data['dedicated_ips']);
        }
        if (\array_key_exists('vpc', $data)) {
            $object->vpc = $this->denormalizer->denormalize($data['vpc'], \Jane\Generated\DigitalOcean\Model\AppsVpc::class, 'json', $context);
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
        if (array_key_exists('activeDeployment', get_object_vars($data)) && null !== ($data->activeDeployment ?? null)) {
            $dataArray['active_deployment'] = ($data->activeDeployment ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->activeDeployment ?? null, 'json', $context));
        }
        if (array_key_exists('inProgressDeployment', get_object_vars($data)) && null !== ($data->inProgressDeployment ?? null)) {
            $dataArray['in_progress_deployment'] = ($data->inProgressDeployment ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->inProgressDeployment ?? null, 'json', $context));
        }
        if (array_key_exists('pendingDeployment', get_object_vars($data)) && null !== ($data->pendingDeployment ?? null)) {
            $dataArray['pending_deployment'] = ($data->pendingDeployment ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->pendingDeployment ?? null, 'json', $context));
        }
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = ($data->region ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->region ?? null, 'json', $context));
        }
        $dataArray['spec'] = ($data->spec ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->spec ?? null, 'json', $context));
        if (array_key_exists('pinnedDeployment', get_object_vars($data)) && null !== ($data->pinnedDeployment ?? null)) {
            $dataArray['pinned_deployment'] = ($data->pinnedDeployment ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->pinnedDeployment ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
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