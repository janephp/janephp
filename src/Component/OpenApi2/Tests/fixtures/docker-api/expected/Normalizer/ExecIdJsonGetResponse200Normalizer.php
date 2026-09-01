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
class ExecIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ExecIdJsonGetResponse200::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ExecIdJsonGetResponse200::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ExecIdJsonGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('CanRemove', $data) && \is_int($data['CanRemove'])) {
            $data['CanRemove'] = (bool) $data['CanRemove'];
        }
        if (\array_key_exists('Running', $data) && \is_int($data['Running'])) {
            $data['Running'] = (bool) $data['Running'];
        }
        if (\array_key_exists('OpenStdin', $data) && \is_int($data['OpenStdin'])) {
            $data['OpenStdin'] = (bool) $data['OpenStdin'];
        }
        if (\array_key_exists('OpenStderr', $data) && \is_int($data['OpenStderr'])) {
            $data['OpenStderr'] = (bool) $data['OpenStderr'];
        }
        if (\array_key_exists('OpenStdout', $data) && \is_int($data['OpenStdout'])) {
            $data['OpenStdout'] = (bool) $data['OpenStdout'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ExecIdJsonGetResponse200Constraint());
        }
        if (\array_key_exists('CanRemove', $data)) {
            $object->canRemove = $data['CanRemove'];
        }
        if (\array_key_exists('DetachKeys', $data)) {
            $object->detachKeys = $data['DetachKeys'];
        }
        if (\array_key_exists('ID', $data)) {
            $object->iD = $data['ID'];
        }
        if (\array_key_exists('Running', $data)) {
            $object->running = $data['Running'];
        }
        if (\array_key_exists('ExitCode', $data)) {
            $object->exitCode = $data['ExitCode'];
        }
        if (\array_key_exists('ProcessConfig', $data)) {
            $object->processConfig = $this->denormalizer->denormalize($data['ProcessConfig'], \Docker\Api\Model\ProcessConfig::class, 'json', $context);
        }
        if (\array_key_exists('OpenStdin', $data)) {
            $object->openStdin = $data['OpenStdin'];
        }
        if (\array_key_exists('OpenStderr', $data)) {
            $object->openStderr = $data['OpenStderr'];
        }
        if (\array_key_exists('OpenStdout', $data)) {
            $object->openStdout = $data['OpenStdout'];
        }
        if (\array_key_exists('ContainerID', $data)) {
            $object->containerID = $data['ContainerID'];
        }
        if (\array_key_exists('Pid', $data)) {
            $object->pid = $data['Pid'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('canRemove', get_object_vars($data)) && null !== ($data->canRemove ?? null)) {
            $dataArray['CanRemove'] = $data->canRemove ?? null;
        }
        if (array_key_exists('detachKeys', get_object_vars($data)) && null !== ($data->detachKeys ?? null)) {
            $dataArray['DetachKeys'] = $data->detachKeys ?? null;
        }
        if (array_key_exists('iD', get_object_vars($data)) && null !== ($data->iD ?? null)) {
            $dataArray['ID'] = $data->iD ?? null;
        }
        if (array_key_exists('running', get_object_vars($data)) && null !== ($data->running ?? null)) {
            $dataArray['Running'] = $data->running ?? null;
        }
        if (array_key_exists('exitCode', get_object_vars($data)) && null !== ($data->exitCode ?? null)) {
            $dataArray['ExitCode'] = $data->exitCode ?? null;
        }
        if (array_key_exists('processConfig', get_object_vars($data)) && null !== ($data->processConfig ?? null)) {
            $dataArray['ProcessConfig'] = ($data->processConfig ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->processConfig ?? null, 'json', $context));
        }
        if (array_key_exists('openStdin', get_object_vars($data)) && null !== ($data->openStdin ?? null)) {
            $dataArray['OpenStdin'] = $data->openStdin ?? null;
        }
        if (array_key_exists('openStderr', get_object_vars($data)) && null !== ($data->openStderr ?? null)) {
            $dataArray['OpenStderr'] = $data->openStderr ?? null;
        }
        if (array_key_exists('openStdout', get_object_vars($data)) && null !== ($data->openStdout ?? null)) {
            $dataArray['OpenStdout'] = $data->openStdout ?? null;
        }
        if (array_key_exists('containerID', get_object_vars($data)) && null !== ($data->containerID ?? null)) {
            $dataArray['ContainerID'] = $data->containerID ?? null;
        }
        if (array_key_exists('pid', get_object_vars($data)) && null !== ($data->pid ?? null)) {
            $dataArray['Pid'] = $data->pid ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ExecIdJsonGetResponse200Constraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ExecIdJsonGetResponse200::class => false];
    }
}