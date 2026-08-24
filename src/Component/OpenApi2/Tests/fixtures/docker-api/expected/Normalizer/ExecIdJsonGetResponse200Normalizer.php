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
            $object->setCanRemove($data['CanRemove']);
        }
        if (\array_key_exists('DetachKeys', $data)) {
            $object->setDetachKeys($data['DetachKeys']);
        }
        if (\array_key_exists('ID', $data)) {
            $object->setID($data['ID']);
        }
        if (\array_key_exists('Running', $data)) {
            $object->setRunning($data['Running']);
        }
        if (\array_key_exists('ExitCode', $data)) {
            $object->setExitCode($data['ExitCode']);
        }
        if (\array_key_exists('ProcessConfig', $data)) {
            $object->setProcessConfig($this->denormalizer->denormalize($data['ProcessConfig'], \Docker\Api\Model\ProcessConfig::class, 'json', $context));
        }
        if (\array_key_exists('OpenStdin', $data)) {
            $object->setOpenStdin($data['OpenStdin']);
        }
        if (\array_key_exists('OpenStderr', $data)) {
            $object->setOpenStderr($data['OpenStderr']);
        }
        if (\array_key_exists('OpenStdout', $data)) {
            $object->setOpenStdout($data['OpenStdout']);
        }
        if (\array_key_exists('ContainerID', $data)) {
            $object->setContainerID($data['ContainerID']);
        }
        if (\array_key_exists('Pid', $data)) {
            $object->setPid($data['Pid']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('canRemove') && null !== $data->getCanRemove()) {
            $dataArray['CanRemove'] = $data->getCanRemove();
        }
        if ($data->isInitialized('detachKeys') && null !== $data->getDetachKeys()) {
            $dataArray['DetachKeys'] = $data->getDetachKeys();
        }
        if ($data->isInitialized('iD') && null !== $data->getID()) {
            $dataArray['ID'] = $data->getID();
        }
        if ($data->isInitialized('running') && null !== $data->getRunning()) {
            $dataArray['Running'] = $data->getRunning();
        }
        if ($data->isInitialized('exitCode') && null !== $data->getExitCode()) {
            $dataArray['ExitCode'] = $data->getExitCode();
        }
        if ($data->isInitialized('processConfig') && null !== $data->getProcessConfig()) {
            $dataArray['ProcessConfig'] = $data->getProcessConfig() === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->getProcessConfig(), 'json', $context));
        }
        if ($data->isInitialized('openStdin') && null !== $data->getOpenStdin()) {
            $dataArray['OpenStdin'] = $data->getOpenStdin();
        }
        if ($data->isInitialized('openStderr') && null !== $data->getOpenStderr()) {
            $dataArray['OpenStderr'] = $data->getOpenStderr();
        }
        if ($data->isInitialized('openStdout') && null !== $data->getOpenStdout()) {
            $dataArray['OpenStdout'] = $data->getOpenStdout();
        }
        if ($data->isInitialized('containerID') && null !== $data->getContainerID()) {
            $dataArray['ContainerID'] = $data->getContainerID();
        }
        if ($data->isInitialized('pid') && null !== $data->getPid()) {
            $dataArray['Pid'] = $data->getPid();
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