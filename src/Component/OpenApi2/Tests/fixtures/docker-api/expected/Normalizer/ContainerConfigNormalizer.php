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
            $object->setHostname($data['Hostname']);
        }
        if (\array_key_exists('Domainname', $data)) {
            $object->setDomainname($data['Domainname']);
        }
        if (\array_key_exists('User', $data)) {
            $object->setUser($data['User']);
        }
        if (\array_key_exists('AttachStdin', $data)) {
            $object->setAttachStdin($data['AttachStdin']);
        }
        if (\array_key_exists('AttachStdout', $data)) {
            $object->setAttachStdout($data['AttachStdout']);
        }
        if (\array_key_exists('AttachStderr', $data)) {
            $object->setAttachStderr($data['AttachStderr']);
        }
        if (\array_key_exists('ExposedPorts', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['ExposedPorts'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setExposedPorts($values);
        }
        if (\array_key_exists('Tty', $data)) {
            $object->setTty($data['Tty']);
        }
        if (\array_key_exists('OpenStdin', $data)) {
            $object->setOpenStdin($data['OpenStdin']);
        }
        if (\array_key_exists('StdinOnce', $data)) {
            $object->setStdinOnce($data['StdinOnce']);
        }
        if (\array_key_exists('Env', $data)) {
            $values_1 = [];
            foreach ($data['Env'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnv($values_1);
        }
        if (\array_key_exists('Cmd', $data)) {
            $values_2 = [];
            foreach ($data['Cmd'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCmd($values_2);
        }
        if (\array_key_exists('Healthcheck', $data)) {
            $object->setHealthcheck($this->denormalizer->denormalize($data['Healthcheck'], \Docker\Api\Model\HealthConfig::class, 'json', $context));
        }
        if (\array_key_exists('ArgsEscaped', $data)) {
            $object->setArgsEscaped($data['ArgsEscaped']);
        }
        if (\array_key_exists('Image', $data)) {
            $object->setImage($data['Image']);
        }
        if (\array_key_exists('Volumes', $data)) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Volumes'] as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->setVolumes($values_3);
        }
        if (\array_key_exists('WorkingDir', $data)) {
            $object->setWorkingDir($data['WorkingDir']);
        }
        if (\array_key_exists('Entrypoint', $data)) {
            $values_4 = [];
            foreach ($data['Entrypoint'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setEntrypoint($values_4);
        }
        if (\array_key_exists('NetworkDisabled', $data)) {
            $object->setNetworkDisabled($data['NetworkDisabled']);
        }
        if (\array_key_exists('MacAddress', $data)) {
            $object->setMacAddress($data['MacAddress']);
        }
        if (\array_key_exists('OnBuild', $data)) {
            $values_5 = [];
            foreach ($data['OnBuild'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setOnBuild($values_5);
        }
        if (\array_key_exists('Labels', $data)) {
            $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_2 => $value_6) {
                $values_6[$key_2] = $value_6;
            }
            $object->setLabels($values_6);
        }
        if (\array_key_exists('StopSignal', $data)) {
            $object->setStopSignal($data['StopSignal']);
        }
        if (\array_key_exists('StopTimeout', $data)) {
            $object->setStopTimeout($data['StopTimeout']);
        }
        if (\array_key_exists('Shell', $data)) {
            $values_7 = [];
            foreach ($data['Shell'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setShell($values_7);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('hostname') && null !== $data->getHostname()) {
            $dataArray['Hostname'] = $data->getHostname();
        }
        if ($data->isInitialized('domainname') && null !== $data->getDomainname()) {
            $dataArray['Domainname'] = $data->getDomainname();
        }
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['User'] = $data->getUser();
        }
        if ($data->isInitialized('attachStdin') && null !== $data->getAttachStdin()) {
            $dataArray['AttachStdin'] = $data->getAttachStdin();
        }
        if ($data->isInitialized('attachStdout') && null !== $data->getAttachStdout()) {
            $dataArray['AttachStdout'] = $data->getAttachStdout();
        }
        if ($data->isInitialized('attachStderr') && null !== $data->getAttachStderr()) {
            $dataArray['AttachStderr'] = $data->getAttachStderr();
        }
        if ($data->isInitialized('exposedPorts') && null !== $data->getExposedPorts()) {
            $values = [];
            foreach ($data->getExposedPorts() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['ExposedPorts'] = $values;
        }
        if ($data->isInitialized('tty') && null !== $data->getTty()) {
            $dataArray['Tty'] = $data->getTty();
        }
        if ($data->isInitialized('openStdin') && null !== $data->getOpenStdin()) {
            $dataArray['OpenStdin'] = $data->getOpenStdin();
        }
        if ($data->isInitialized('stdinOnce') && null !== $data->getStdinOnce()) {
            $dataArray['StdinOnce'] = $data->getStdinOnce();
        }
        if ($data->isInitialized('env') && null !== $data->getEnv()) {
            $values_1 = [];
            foreach ($data->getEnv() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['Env'] = $values_1;
        }
        if ($data->isInitialized('cmd') && null !== $data->getCmd()) {
            $values_2 = [];
            foreach ($data->getCmd() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['Cmd'] = $values_2;
        }
        if ($data->isInitialized('healthcheck') && null !== $data->getHealthcheck()) {
            $dataArray['Healthcheck'] = $this->normalizer->normalize($data->getHealthcheck(), 'json', $context);
        }
        if ($data->isInitialized('argsEscaped') && null !== $data->getArgsEscaped()) {
            $dataArray['ArgsEscaped'] = $data->getArgsEscaped();
        }
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['Image'] = $data->getImage();
        }
        if ($data->isInitialized('volumes') && null !== $data->getVolumes()) {
            $values_3 = [];
            foreach ($data->getVolumes() as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $dataArray['Volumes'] = $values_3;
        }
        if ($data->isInitialized('workingDir') && null !== $data->getWorkingDir()) {
            $dataArray['WorkingDir'] = $data->getWorkingDir();
        }
        if ($data->isInitialized('entrypoint') && null !== $data->getEntrypoint()) {
            $values_4 = [];
            foreach ($data->getEntrypoint() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['Entrypoint'] = $values_4;
        }
        if ($data->isInitialized('networkDisabled') && null !== $data->getNetworkDisabled()) {
            $dataArray['NetworkDisabled'] = $data->getNetworkDisabled();
        }
        if ($data->isInitialized('macAddress') && null !== $data->getMacAddress()) {
            $dataArray['MacAddress'] = $data->getMacAddress();
        }
        if ($data->isInitialized('onBuild') && null !== $data->getOnBuild()) {
            $values_5 = [];
            foreach ($data->getOnBuild() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['OnBuild'] = $values_5;
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_6 = [];
            foreach ($data->getLabels() as $key_2 => $value_6) {
                $values_6[$key_2] = $value_6;
            }
            $dataArray['Labels'] = $values_6;
        }
        if ($data->isInitialized('stopSignal') && null !== $data->getStopSignal()) {
            $dataArray['StopSignal'] = $data->getStopSignal();
        }
        if ($data->isInitialized('stopTimeout') && null !== $data->getStopTimeout()) {
            $dataArray['StopTimeout'] = $data->getStopTimeout();
        }
        if ($data->isInitialized('shell') && null !== $data->getShell()) {
            $values_7 = [];
            foreach ($data->getShell() as $value_7) {
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