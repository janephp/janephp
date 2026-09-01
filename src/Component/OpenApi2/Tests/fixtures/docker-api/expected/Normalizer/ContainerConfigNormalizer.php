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
class ContainerConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ContainerConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ContainerConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ContainerConfig();
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
        if (\array_key_exists('OpenStdin', $data) && \is_int($data['OpenStdin'])) {
            $data['OpenStdin'] = (bool) $data['OpenStdin'];
        }
        if (\array_key_exists('StdinOnce', $data) && \is_int($data['StdinOnce'])) {
            $data['StdinOnce'] = (bool) $data['StdinOnce'];
        }
        if (\array_key_exists('ArgsEscaped', $data) && \is_int($data['ArgsEscaped'])) {
            $data['ArgsEscaped'] = (bool) $data['ArgsEscaped'];
        }
        if (\array_key_exists('NetworkDisabled', $data) && \is_int($data['NetworkDisabled'])) {
            $data['NetworkDisabled'] = (bool) $data['NetworkDisabled'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ContainerConfigConstraint());
        }
        if (\array_key_exists('Hostname', $data)) {
            $object->hostname = $data['Hostname'];
        }
        if (\array_key_exists('Domainname', $data)) {
            $object->domainname = $data['Domainname'];
        }
        if (\array_key_exists('User', $data)) {
            $object->user = $data['User'];
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
        if (\array_key_exists('ExposedPorts', $data)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['ExposedPorts'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->exposedPorts = $values;
        }
        if (\array_key_exists('Tty', $data)) {
            $object->tty = $data['Tty'];
        }
        if (\array_key_exists('OpenStdin', $data)) {
            $object->openStdin = $data['OpenStdin'];
        }
        if (\array_key_exists('StdinOnce', $data)) {
            $object->stdinOnce = $data['StdinOnce'];
        }
        if (\array_key_exists('Env', $data)) {
            $values_1 = [];
            foreach ($data['Env'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->env = $values_1;
        }
        if (\array_key_exists('Cmd', $data)) {
            $values_2 = [];
            foreach ($data['Cmd'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->cmd = $values_2;
        }
        if (\array_key_exists('Healthcheck', $data)) {
            $object->healthcheck = $this->denormalizer->denormalize($data['Healthcheck'], \Docker\Api\Model\HealthConfig::class, 'json', $context);
        }
        if (\array_key_exists('ArgsEscaped', $data)) {
            $object->argsEscaped = $data['ArgsEscaped'];
        }
        if (\array_key_exists('Image', $data)) {
            $object->image = $data['Image'];
        }
        if (\array_key_exists('Volumes', $data)) {
            $values_3 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Volumes'] as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->volumes = $values_3;
        }
        if (\array_key_exists('WorkingDir', $data)) {
            $object->workingDir = $data['WorkingDir'];
        }
        if (\array_key_exists('Entrypoint', $data)) {
            $values_4 = [];
            foreach ($data['Entrypoint'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->entrypoint = $values_4;
        }
        if (\array_key_exists('NetworkDisabled', $data)) {
            $object->networkDisabled = $data['NetworkDisabled'];
        }
        if (\array_key_exists('MacAddress', $data)) {
            $object->macAddress = $data['MacAddress'];
        }
        if (\array_key_exists('OnBuild', $data)) {
            $values_5 = [];
            foreach ($data['OnBuild'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->onBuild = $values_5;
        }
        if (\array_key_exists('Labels', $data)) {
            $values_6 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Labels'] as $key_2 => $value_6) {
                $values_6[$key_2] = $value_6;
            }
            $object->labels = $values_6;
        }
        if (\array_key_exists('StopSignal', $data)) {
            $object->stopSignal = $data['StopSignal'];
        }
        if (\array_key_exists('StopTimeout', $data)) {
            $object->stopTimeout = $data['StopTimeout'];
        }
        if (\array_key_exists('Shell', $data)) {
            $values_7 = [];
            foreach ($data['Shell'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->shell = $values_7;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('hostname', get_object_vars($data)) && null !== ($data->hostname ?? null)) {
            $dataArray['Hostname'] = $data->hostname ?? null;
        }
        if (array_key_exists('domainname', get_object_vars($data)) && null !== ($data->domainname ?? null)) {
            $dataArray['Domainname'] = $data->domainname ?? null;
        }
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['User'] = $data->user ?? null;
        }
        if (array_key_exists('attachStdin', get_object_vars($data)) && null !== ($data->attachStdin ?? null)) {
            $dataArray['AttachStdin'] = $data->attachStdin ?? null;
        }
        if (array_key_exists('attachStdout', get_object_vars($data)) && null !== ($data->attachStdout ?? null)) {
            $dataArray['AttachStdout'] = $data->attachStdout ?? null;
        }
        if (array_key_exists('attachStderr', get_object_vars($data)) && null !== ($data->attachStderr ?? null)) {
            $dataArray['AttachStderr'] = $data->attachStderr ?? null;
        }
        if (array_key_exists('exposedPorts', get_object_vars($data)) && null !== ($data->exposedPorts ?? null)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->exposedPorts ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['ExposedPorts'] = $values;
        }
        if (array_key_exists('tty', get_object_vars($data)) && null !== ($data->tty ?? null)) {
            $dataArray['Tty'] = $data->tty ?? null;
        }
        if (array_key_exists('openStdin', get_object_vars($data)) && null !== ($data->openStdin ?? null)) {
            $dataArray['OpenStdin'] = $data->openStdin ?? null;
        }
        if (array_key_exists('stdinOnce', get_object_vars($data)) && null !== ($data->stdinOnce ?? null)) {
            $dataArray['StdinOnce'] = $data->stdinOnce ?? null;
        }
        if (array_key_exists('env', get_object_vars($data)) && null !== ($data->env ?? null)) {
            $values_1 = [];
            foreach ($data->env ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Env'] = $values_1;
        }
        if (array_key_exists('cmd', get_object_vars($data)) && null !== ($data->cmd ?? null)) {
            $values_2 = [];
            foreach ($data->cmd ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Cmd'] = $values_2;
        }
        if (array_key_exists('healthcheck', get_object_vars($data)) && null !== ($data->healthcheck ?? null)) {
            $dataArray['Healthcheck'] = ($data->healthcheck ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->healthcheck ?? null, 'json', $context));
        }
        if (array_key_exists('argsEscaped', get_object_vars($data)) && null !== ($data->argsEscaped ?? null)) {
            $dataArray['ArgsEscaped'] = $data->argsEscaped ?? null;
        }
        if (array_key_exists('image', get_object_vars($data)) && null !== ($data->image ?? null)) {
            $dataArray['Image'] = $data->image ?? null;
        }
        if (array_key_exists('volumes', get_object_vars($data)) && null !== ($data->volumes ?? null)) {
            $values_3 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->volumes ?? null as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $dataArray['Volumes'] = $values_3;
        }
        if (array_key_exists('workingDir', get_object_vars($data)) && null !== ($data->workingDir ?? null)) {
            $dataArray['WorkingDir'] = $data->workingDir ?? null;
        }
        if (array_key_exists('entrypoint', get_object_vars($data)) && null !== ($data->entrypoint ?? null)) {
            $values_4 = [];
            foreach ($data->entrypoint ?? null as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['Entrypoint'] = $values_4;
        }
        if (array_key_exists('networkDisabled', get_object_vars($data)) && null !== ($data->networkDisabled ?? null)) {
            $dataArray['NetworkDisabled'] = $data->networkDisabled ?? null;
        }
        if (array_key_exists('macAddress', get_object_vars($data)) && null !== ($data->macAddress ?? null)) {
            $dataArray['MacAddress'] = $data->macAddress ?? null;
        }
        if (array_key_exists('onBuild', get_object_vars($data)) && null !== ($data->onBuild ?? null)) {
            $values_5 = [];
            foreach ($data->onBuild ?? null as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['OnBuild'] = $values_5;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values_6 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->labels ?? null as $key_2 => $value_6) {
                $values_6[$key_2] = $value_6;
            }
            $dataArray['Labels'] = $values_6;
        }
        if (array_key_exists('stopSignal', get_object_vars($data)) && null !== ($data->stopSignal ?? null)) {
            $dataArray['StopSignal'] = $data->stopSignal ?? null;
        }
        if (array_key_exists('stopTimeout', get_object_vars($data)) && null !== ($data->stopTimeout ?? null)) {
            $dataArray['StopTimeout'] = $data->stopTimeout ?? null;
        }
        if (array_key_exists('shell', get_object_vars($data)) && null !== ($data->shell ?? null)) {
            $values_7 = [];
            foreach ($data->shell ?? null as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['Shell'] = $values_7;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ContainerConfigConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ContainerConfig::class => false];
    }
}