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
class HealthcheckResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\HealthcheckResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\HealthcheckResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\HealthcheckResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\HealthcheckResultConstraint());
        }
        if (\array_key_exists('Start', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['Start']);
            if (false === $date) {
                throw new \Docker\Api\Runtime\Normalizer\InvalidDateException($data['Start'], 'Y-m-d\TH:i:sP');
            }
            $object->start = $date;
        }
        if (\array_key_exists('End', $data)) {
            $object->end = $data['End'];
        }
        if (\array_key_exists('ExitCode', $data)) {
            $object->exitCode = $data['ExitCode'];
        }
        if (\array_key_exists('Output', $data)) {
            $object->output = $data['Output'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('start', get_object_vars($data)) && null !== ($data->start ?? null)) {
            $dataArray['Start'] = ($data->start ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('end', get_object_vars($data)) && null !== ($data->end ?? null)) {
            $dataArray['End'] = $data->end ?? null;
        }
        if (array_key_exists('exitCode', get_object_vars($data)) && null !== ($data->exitCode ?? null)) {
            $dataArray['ExitCode'] = $data->exitCode ?? null;
        }
        if (array_key_exists('output', get_object_vars($data)) && null !== ($data->output ?? null)) {
            $dataArray['Output'] = $data->output ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\HealthcheckResultConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\HealthcheckResult::class => false];
    }
}