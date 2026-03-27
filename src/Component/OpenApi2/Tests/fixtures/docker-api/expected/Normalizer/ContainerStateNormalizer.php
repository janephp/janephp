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
class ContainerStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ContainerState::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ContainerState::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ContainerState();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('Running', $data) && \is_int($data['Running'])) {
            $data['Running'] = (bool) $data['Running'];
        }
        if (\array_key_exists('Paused', $data) && \is_int($data['Paused'])) {
            $data['Paused'] = (bool) $data['Paused'];
        }
        if (\array_key_exists('Restarting', $data) && \is_int($data['Restarting'])) {
            $data['Restarting'] = (bool) $data['Restarting'];
        }
        if (\array_key_exists('OOMKilled', $data) && \is_int($data['OOMKilled'])) {
            $data['OOMKilled'] = (bool) $data['OOMKilled'];
        }
        if (\array_key_exists('Dead', $data) && \is_int($data['Dead'])) {
            $data['Dead'] = (bool) $data['Dead'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ContainerStateConstraint());
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
        }
        if (\array_key_exists('Running', $data)) {
            $object->setRunning($data['Running']);
        }
        if (\array_key_exists('Paused', $data)) {
            $object->setPaused($data['Paused']);
        }
        if (\array_key_exists('Restarting', $data)) {
            $object->setRestarting($data['Restarting']);
        }
        if (\array_key_exists('OOMKilled', $data)) {
            $object->setOOMKilled($data['OOMKilled']);
        }
        if (\array_key_exists('Dead', $data)) {
            $object->setDead($data['Dead']);
        }
        if (\array_key_exists('Pid', $data)) {
            $object->setPid($data['Pid']);
        }
        if (\array_key_exists('ExitCode', $data)) {
            $object->setExitCode($data['ExitCode']);
        }
        if (\array_key_exists('Error', $data)) {
            $object->setError($data['Error']);
        }
        if (\array_key_exists('StartedAt', $data)) {
            $object->setStartedAt($data['StartedAt']);
        }
        if (\array_key_exists('FinishedAt', $data)) {
            $object->setFinishedAt($data['FinishedAt']);
        }
        if (\array_key_exists('Health', $data)) {
            $object->setHealth($this->denormalizer->denormalize($data['Health'], \Docker\Api\Model\Health::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['Status'] = $data->getStatus();
        }
        if ($data->isInitialized('running') && null !== $data->getRunning()) {
            $dataArray['Running'] = $data->getRunning();
        }
        if ($data->isInitialized('paused') && null !== $data->getPaused()) {
            $dataArray['Paused'] = $data->getPaused();
        }
        if ($data->isInitialized('restarting') && null !== $data->getRestarting()) {
            $dataArray['Restarting'] = $data->getRestarting();
        }
        if ($data->isInitialized('oOMKilled') && null !== $data->getOOMKilled()) {
            $dataArray['OOMKilled'] = $data->getOOMKilled();
        }
        if ($data->isInitialized('dead') && null !== $data->getDead()) {
            $dataArray['Dead'] = $data->getDead();
        }
        if ($data->isInitialized('pid') && null !== $data->getPid()) {
            $dataArray['Pid'] = $data->getPid();
        }
        if ($data->isInitialized('exitCode') && null !== $data->getExitCode()) {
            $dataArray['ExitCode'] = $data->getExitCode();
        }
        if ($data->isInitialized('error') && null !== $data->getError()) {
            $dataArray['Error'] = $data->getError();
        }
        if ($data->isInitialized('startedAt') && null !== $data->getStartedAt()) {
            $dataArray['StartedAt'] = $data->getStartedAt();
        }
        if ($data->isInitialized('finishedAt') && null !== $data->getFinishedAt()) {
            $dataArray['FinishedAt'] = $data->getFinishedAt();
        }
        if ($data->isInitialized('health') && null !== $data->getHealth()) {
            $dataArray['Health'] = $this->normalizer->normalize($data->getHealth(), 'json', $context);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ContainerStateConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ContainerState::class => false];
    }
}