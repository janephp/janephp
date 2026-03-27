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
class AppJobInvocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppJobInvocation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppJobInvocation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppJobInvocation();
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
        if (\array_key_exists('job_name', $data)) {
            $object->setJobName($data['job_name']);
            unset($data['job_name']);
        }
        if (\array_key_exists('deployment_id', $data)) {
            $object->setDeploymentId($data['deployment_id']);
            unset($data['deployment_id']);
        }
        if (\array_key_exists('phase', $data)) {
            $object->setPhase($data['phase']);
            unset($data['phase']);
        }
        if (\array_key_exists('trigger', $data)) {
            $object->setTrigger($this->denormalizer->denormalize($data['trigger'], \Jane\Generated\DigitalOcean\Model\AppJobInvocationTrigger::class, 'json', $context));
            unset($data['trigger']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('started_at', $data)) {
            $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']));
            unset($data['started_at']);
        }
        if (\array_key_exists('completed_at', $data)) {
            $object->setCompletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['completed_at']));
            unset($data['completed_at']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('jobName') && null !== $data->getJobName()) {
            $dataArray['job_name'] = $data->getJobName();
        }
        if ($data->isInitialized('deploymentId') && null !== $data->getDeploymentId()) {
            $dataArray['deployment_id'] = $data->getDeploymentId();
        }
        if ($data->isInitialized('phase') && null !== $data->getPhase()) {
            $dataArray['phase'] = $data->getPhase();
        }
        if ($data->isInitialized('trigger') && null !== $data->getTrigger()) {
            $dataArray['trigger'] = $this->normalizer->normalize($data->getTrigger(), 'json', $context);
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('startedAt') && null !== $data->getStartedAt()) {
            $dataArray['started_at'] = $data->getStartedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('completedAt') && null !== $data->getCompletedAt()) {
            $dataArray['completed_at'] = $data->getCompletedAt()->format('Y-m-d\TH:i:sP');
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
        return [\Jane\Generated\DigitalOcean\Model\AppJobInvocation::class => false];
    }
}