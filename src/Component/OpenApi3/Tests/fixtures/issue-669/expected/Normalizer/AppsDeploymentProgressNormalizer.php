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
            $object->errorSteps = $data['error_steps'];
            unset($data['error_steps']);
        }
        if (\array_key_exists('pending_steps', $data)) {
            $object->pendingSteps = $data['pending_steps'];
            unset($data['pending_steps']);
        }
        if (\array_key_exists('running_steps', $data)) {
            $object->runningSteps = $data['running_steps'];
            unset($data['running_steps']);
        }
        if (\array_key_exists('steps', $data)) {
            $values = [];
            foreach ($data['steps'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStep::class, 'json', $context);
            }
            $object->steps = $values;
            unset($data['steps']);
        }
        if (\array_key_exists('success_steps', $data)) {
            $object->successSteps = $data['success_steps'];
            unset($data['success_steps']);
        }
        if (\array_key_exists('summary_steps', $data)) {
            $values_1 = [];
            foreach ($data['summary_steps'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStep::class, 'json', $context);
            }
            $object->summarySteps = $values_1;
            unset($data['summary_steps']);
        }
        if (\array_key_exists('total_steps', $data)) {
            $object->totalSteps = $data['total_steps'];
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
        if (array_key_exists('errorSteps', get_object_vars($data)) && null !== ($data->errorSteps ?? null)) {
            $dataArray['error_steps'] = $data->errorSteps ?? null;
        }
        if (array_key_exists('pendingSteps', get_object_vars($data)) && null !== ($data->pendingSteps ?? null)) {
            $dataArray['pending_steps'] = $data->pendingSteps ?? null;
        }
        if (array_key_exists('runningSteps', get_object_vars($data)) && null !== ($data->runningSteps ?? null)) {
            $dataArray['running_steps'] = $data->runningSteps ?? null;
        }
        if (array_key_exists('steps', get_object_vars($data)) && null !== ($data->steps ?? null)) {
            $values = [];
            foreach ($data->steps ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['steps'] = $values;
        }
        if (array_key_exists('successSteps', get_object_vars($data)) && null !== ($data->successSteps ?? null)) {
            $dataArray['success_steps'] = $data->successSteps ?? null;
        }
        if (array_key_exists('summarySteps', get_object_vars($data)) && null !== ($data->summarySteps ?? null)) {
            $values_1 = [];
            foreach ($data->summarySteps ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['summary_steps'] = $values_1;
        }
        if (array_key_exists('totalSteps', get_object_vars($data)) && null !== ($data->totalSteps ?? null)) {
            $dataArray['total_steps'] = $data->totalSteps ?? null;
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