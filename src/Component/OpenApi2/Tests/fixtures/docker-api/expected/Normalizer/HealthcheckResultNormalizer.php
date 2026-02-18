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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\HealthcheckResult();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\HealthcheckResultConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Start', $data)) {
            $object->setStart(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['Start']));
        }
        if (\array_key_exists('End', $data)) {
            $object->setEnd($data['End']);
        }
        if (\array_key_exists('ExitCode', $data)) {
            $object->setExitCode($data['ExitCode']);
        }
        if (\array_key_exists('Output', $data)) {
            $object->setOutput($data['Output']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('start') && null !== $data->getStart()) {
            $dataArray['Start'] = $data->getStart()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('end') && null !== $data->getEnd()) {
            $dataArray['End'] = $data->getEnd();
        }
        if ($data->isInitialized('exitCode') && null !== $data->getExitCode()) {
            $dataArray['ExitCode'] = $data->getExitCode();
        }
        if ($data->isInitialized('output') && null !== $data->getOutput()) {
            $dataArray['Output'] = $data->getOutput();
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