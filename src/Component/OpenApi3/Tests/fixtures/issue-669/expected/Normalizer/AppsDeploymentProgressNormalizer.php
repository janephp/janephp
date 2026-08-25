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
class AppsDeploymentProgressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('error_steps', $data)) {
            $object->setErrorSteps($data['error_steps']);
            unset($data['error_steps']);
        }
        if (\array_key_exists('pending_steps', $data)) {
            $object->setPendingSteps($data['pending_steps']);
            unset($data['pending_steps']);
        }
        if (\array_key_exists('running_steps', $data)) {
            $object->setRunningSteps($data['running_steps']);
            unset($data['running_steps']);
        }
        if (\array_key_exists('steps', $data)) {
            $values = [];
            foreach ($data['steps'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStep::class, 'json', $context);
            }
            $object->setSteps($values);
            unset($data['steps']);
        }
        if (\array_key_exists('success_steps', $data)) {
            $object->setSuccessSteps($data['success_steps']);
            unset($data['success_steps']);
        }
        if (\array_key_exists('summary_steps', $data)) {
            $values_1 = [];
            foreach ($data['summary_steps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStep::class, 'json', $context);
            }
            $object->setSummarySteps($values_1);
            unset($data['summary_steps']);
        }
        if (\array_key_exists('total_steps', $data)) {
            $object->setTotalSteps($data['total_steps']);
            unset($data['total_steps']);
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
        if ($data->isInitialized('errorSteps') && null !== $data->getErrorSteps()) {
            $dataArray['error_steps'] = $data->getErrorSteps();
        }
        if ($data->isInitialized('pendingSteps') && null !== $data->getPendingSteps()) {
            $dataArray['pending_steps'] = $data->getPendingSteps();
        }
        if ($data->isInitialized('runningSteps') && null !== $data->getRunningSteps()) {
            $dataArray['running_steps'] = $data->getRunningSteps();
        }
        if ($data->isInitialized('steps') && null !== $data->getSteps()) {
            $values = [];
            foreach ($data->getSteps() as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['steps'] = $values;
        }
        if ($data->isInitialized('successSteps') && null !== $data->getSuccessSteps()) {
            $dataArray['success_steps'] = $data->getSuccessSteps();
        }
        if ($data->isInitialized('summarySteps') && null !== $data->getSummarySteps()) {
            $values_1 = [];
            foreach ($data->getSummarySteps() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['summary_steps'] = $values_1;
        }
        if ($data->isInitialized('totalSteps') && null !== $data->getTotalSteps()) {
            $dataArray['total_steps'] = $data->getTotalSteps();
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
        return [\Jane\Generated\DigitalOcean\Model\AppsDeploymentProgress::class => false];
    }
}