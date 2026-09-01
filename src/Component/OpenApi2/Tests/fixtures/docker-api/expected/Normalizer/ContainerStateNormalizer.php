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
            $object->status = $data['Status'];
        }
        if (\array_key_exists('Running', $data)) {
            $object->running = $data['Running'];
        }
        if (\array_key_exists('Paused', $data)) {
            $object->paused = $data['Paused'];
        }
        if (\array_key_exists('Restarting', $data)) {
            $object->restarting = $data['Restarting'];
        }
        if (\array_key_exists('OOMKilled', $data)) {
            $object->oOMKilled = $data['OOMKilled'];
        }
        if (\array_key_exists('Dead', $data)) {
            $object->dead = $data['Dead'];
        }
        if (\array_key_exists('Pid', $data)) {
            $object->pid = $data['Pid'];
        }
        if (\array_key_exists('ExitCode', $data)) {
            $object->exitCode = $data['ExitCode'];
        }
        if (\array_key_exists('Error', $data)) {
            $object->error = $data['Error'];
        }
        if (\array_key_exists('StartedAt', $data)) {
            $object->startedAt = $data['StartedAt'];
        }
        if (\array_key_exists('FinishedAt', $data)) {
            $object->finishedAt = $data['FinishedAt'];
        }
        if (\array_key_exists('Health', $data)) {
            $object->health = $this->denormalizer->denormalize($data['Health'], \Docker\Api\Model\Health::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['Status'] = $data->status ?? null;
        }
        if (array_key_exists('running', get_object_vars($data)) && null !== ($data->running ?? null)) {
            $dataArray['Running'] = $data->running ?? null;
        }
        if (array_key_exists('paused', get_object_vars($data)) && null !== ($data->paused ?? null)) {
            $dataArray['Paused'] = $data->paused ?? null;
        }
        if (array_key_exists('restarting', get_object_vars($data)) && null !== ($data->restarting ?? null)) {
            $dataArray['Restarting'] = $data->restarting ?? null;
        }
        if (array_key_exists('oOMKilled', get_object_vars($data)) && null !== ($data->oOMKilled ?? null)) {
            $dataArray['OOMKilled'] = $data->oOMKilled ?? null;
        }
        if (array_key_exists('dead', get_object_vars($data)) && null !== ($data->dead ?? null)) {
            $dataArray['Dead'] = $data->dead ?? null;
        }
        if (array_key_exists('pid', get_object_vars($data)) && null !== ($data->pid ?? null)) {
            $dataArray['Pid'] = $data->pid ?? null;
        }
        if (array_key_exists('exitCode', get_object_vars($data)) && null !== ($data->exitCode ?? null)) {
            $dataArray['ExitCode'] = $data->exitCode ?? null;
        }
        if (array_key_exists('error', get_object_vars($data)) && null !== ($data->error ?? null)) {
            $dataArray['Error'] = $data->error ?? null;
        }
        if (array_key_exists('startedAt', get_object_vars($data)) && null !== ($data->startedAt ?? null)) {
            $dataArray['StartedAt'] = $data->startedAt ?? null;
        }
        if (array_key_exists('finishedAt', get_object_vars($data)) && null !== ($data->finishedAt ?? null)) {
            $dataArray['FinishedAt'] = $data->finishedAt ?? null;
        }
        if (array_key_exists('health', get_object_vars($data)) && null !== ($data->health ?? null)) {
            $dataArray['Health'] = ($data->health ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->health ?? null, 'json', $context));
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