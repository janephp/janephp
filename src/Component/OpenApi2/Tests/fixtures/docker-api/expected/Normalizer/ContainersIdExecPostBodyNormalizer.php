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
class ContainersIdExecPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ContainersIdExecPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ContainersIdExecPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ContainersIdExecPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('AttachStdin', $data) && \is_int($data['AttachStdin'])) {
            $data['AttachStdin'] = (bool) $data['AttachStdin'];
        }
        if (\array_key_exists('AttachStdout', $data) && \is_int($data['AttachStdout'])) {
            $data['AttachStdout'] = (bool) $data['AttachStdout'];
        }
        if (\array_key_exists('AttachStderr', $data) && \is_int($data['AttachStderr'])) {
            $data['AttachStderr'] = (bool) $data['AttachStderr'];
        }
        if (\array_key_exists('Tty', $data) && \is_int($data['Tty'])) {
            $data['Tty'] = (bool) $data['Tty'];
        }
        if (\array_key_exists('Privileged', $data) && \is_int($data['Privileged'])) {
            $data['Privileged'] = (bool) $data['Privileged'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ContainersIdExecPostBodyConstraint());
        }
        if (\array_key_exists('AttachStdin', $data)) {
            $object->attachStdin = $data['AttachStdin'];
        }
        if (\array_key_exists('AttachStdout', $data)) {
            $object->attachStdout = $data['AttachStdout'];
        }
        if (\array_key_exists('AttachStderr', $data)) {
            $object->attachStderr = $data['AttachStderr'];
        }
        if (\array_key_exists('DetachKeys', $data)) {
            $object->detachKeys = $data['DetachKeys'];
        }
        if (\array_key_exists('Tty', $data)) {
            $object->tty = $data['Tty'];
        }
        if (\array_key_exists('Env', $data)) {
            $values = [];
            foreach ($data['Env'] as $value) {
                $values[] = $value;
            }
            $object->env = $values;
        }
        if (\array_key_exists('Cmd', $data)) {
            $values_1 = [];
            foreach ($data['Cmd'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->cmd = $values_1;
        }
        if (\array_key_exists('Privileged', $data)) {
            $object->privileged = $data['Privileged'];
        }
        if (\array_key_exists('User', $data)) {
            $object->user = $data['User'];
        }
        if (\array_key_exists('WorkingDir', $data)) {
            $object->workingDir = $data['WorkingDir'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('attachStdin', get_object_vars($data)) && null !== ($data->attachStdin ?? null)) {
            $dataArray['AttachStdin'] = $data->attachStdin ?? null;
        }
        if (array_key_exists('attachStdout', get_object_vars($data)) && null !== ($data->attachStdout ?? null)) {
            $dataArray['AttachStdout'] = $data->attachStdout ?? null;
        }
        if (array_key_exists('attachStderr', get_object_vars($data)) && null !== ($data->attachStderr ?? null)) {
            $dataArray['AttachStderr'] = $data->attachStderr ?? null;
        }
        if (array_key_exists('detachKeys', get_object_vars($data)) && null !== ($data->detachKeys ?? null)) {
            $dataArray['DetachKeys'] = $data->detachKeys ?? null;
        }
        if (array_key_exists('tty', get_object_vars($data)) && null !== ($data->tty ?? null)) {
            $dataArray['Tty'] = $data->tty ?? null;
        }
        if (array_key_exists('env', get_object_vars($data)) && null !== ($data->env ?? null)) {
            $values = [];
            foreach ($data->env ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['Env'] = $values;
        }
        if (array_key_exists('cmd', get_object_vars($data)) && null !== ($data->cmd ?? null)) {
            $values_1 = [];
            foreach ($data->cmd ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Cmd'] = $values_1;
        }
        if (array_key_exists('privileged', get_object_vars($data)) && null !== ($data->privileged ?? null)) {
            $dataArray['Privileged'] = $data->privileged ?? null;
        }
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['User'] = $data->user ?? null;
        }
        if (array_key_exists('workingDir', get_object_vars($data)) && null !== ($data->workingDir ?? null)) {
            $dataArray['WorkingDir'] = $data->workingDir ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ContainersIdExecPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ContainersIdExecPostBody::class => false];
    }
}