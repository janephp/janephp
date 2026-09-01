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
class SystemInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\SystemInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\SystemInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\SystemInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('MemoryLimit', $data) && \is_int($data['MemoryLimit'])) {
            $data['MemoryLimit'] = (bool) $data['MemoryLimit'];
        }
        if (\array_key_exists('SwapLimit', $data) && \is_int($data['SwapLimit'])) {
            $data['SwapLimit'] = (bool) $data['SwapLimit'];
        }
        if (\array_key_exists('KernelMemory', $data) && \is_int($data['KernelMemory'])) {
            $data['KernelMemory'] = (bool) $data['KernelMemory'];
        }
        if (\array_key_exists('CpuCfsPeriod', $data) && \is_int($data['CpuCfsPeriod'])) {
            $data['CpuCfsPeriod'] = (bool) $data['CpuCfsPeriod'];
        }
        if (\array_key_exists('CpuCfsQuota', $data) && \is_int($data['CpuCfsQuota'])) {
            $data['CpuCfsQuota'] = (bool) $data['CpuCfsQuota'];
        }
        if (\array_key_exists('CPUShares', $data) && \is_int($data['CPUShares'])) {
            $data['CPUShares'] = (bool) $data['CPUShares'];
        }
        if (\array_key_exists('CPUSet', $data) && \is_int($data['CPUSet'])) {
            $data['CPUSet'] = (bool) $data['CPUSet'];
        }
        if (\array_key_exists('PidsLimit', $data) && \is_int($data['PidsLimit'])) {
            $data['PidsLimit'] = (bool) $data['PidsLimit'];
        }
        if (\array_key_exists('OomKillDisable', $data) && \is_int($data['OomKillDisable'])) {
            $data['OomKillDisable'] = (bool) $data['OomKillDisable'];
        }
        if (\array_key_exists('IPv4Forwarding', $data) && \is_int($data['IPv4Forwarding'])) {
            $data['IPv4Forwarding'] = (bool) $data['IPv4Forwarding'];
        }
        if (\array_key_exists('BridgeNfIptables', $data) && \is_int($data['BridgeNfIptables'])) {
            $data['BridgeNfIptables'] = (bool) $data['BridgeNfIptables'];
        }
        if (\array_key_exists('BridgeNfIp6tables', $data) && \is_int($data['BridgeNfIp6tables'])) {
            $data['BridgeNfIp6tables'] = (bool) $data['BridgeNfIp6tables'];
        }
        if (\array_key_exists('Debug', $data) && \is_int($data['Debug'])) {
            $data['Debug'] = (bool) $data['Debug'];
        }
        if (\array_key_exists('ExperimentalBuild', $data) && \is_int($data['ExperimentalBuild'])) {
            $data['ExperimentalBuild'] = (bool) $data['ExperimentalBuild'];
        }
        if (\array_key_exists('LiveRestoreEnabled', $data) && \is_int($data['LiveRestoreEnabled'])) {
            $data['LiveRestoreEnabled'] = (bool) $data['LiveRestoreEnabled'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SystemInfoConstraint());
        }
        if (\array_key_exists('ID', $data)) {
            $object->iD = $data['ID'];
        }
        if (\array_key_exists('Containers', $data)) {
            $object->containers = $data['Containers'];
        }
        if (\array_key_exists('ContainersRunning', $data)) {
            $object->containersRunning = $data['ContainersRunning'];
        }
        if (\array_key_exists('ContainersPaused', $data)) {
            $object->containersPaused = $data['ContainersPaused'];
        }
        if (\array_key_exists('ContainersStopped', $data)) {
            $object->containersStopped = $data['ContainersStopped'];
        }
        if (\array_key_exists('Images', $data)) {
            $object->images = $data['Images'];
        }
        if (\array_key_exists('Driver', $data)) {
            $object->driver = $data['Driver'];
        }
        if (\array_key_exists('DriverStatus', $data)) {
            $values = [];
            foreach ($data['DriverStatus'] as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->driverStatus = $values;
        }
        if (\array_key_exists('DockerRootDir', $data)) {
            $object->dockerRootDir = $data['DockerRootDir'];
        }
        if (\array_key_exists('Plugins', $data)) {
            $object->plugins = $this->denormalizer->denormalize($data['Plugins'], \Docker\Api\Model\PluginsInfo::class, 'json', $context);
        }
        if (\array_key_exists('MemoryLimit', $data)) {
            $object->memoryLimit = $data['MemoryLimit'];
        }
        if (\array_key_exists('SwapLimit', $data)) {
            $object->swapLimit = $data['SwapLimit'];
        }
        if (\array_key_exists('KernelMemory', $data)) {
            $object->kernelMemory = $data['KernelMemory'];
        }
        if (\array_key_exists('CpuCfsPeriod', $data)) {
            $object->cpuCfsPeriod = $data['CpuCfsPeriod'];
        }
        if (\array_key_exists('CpuCfsQuota', $data)) {
            $object->cpuCfsQuota = $data['CpuCfsQuota'];
        }
        if (\array_key_exists('CPUShares', $data)) {
            $object->cPUShares = $data['CPUShares'];
        }
        if (\array_key_exists('CPUSet', $data)) {
            $object->cPUSet = $data['CPUSet'];
        }
        if (\array_key_exists('PidsLimit', $data)) {
            $object->pidsLimit = $data['PidsLimit'];
        }
        if (\array_key_exists('OomKillDisable', $data)) {
            $object->oomKillDisable = $data['OomKillDisable'];
        }
        if (\array_key_exists('IPv4Forwarding', $data)) {
            $object->iPv4Forwarding = $data['IPv4Forwarding'];
        }
        if (\array_key_exists('BridgeNfIptables', $data)) {
            $object->bridgeNfIptables = $data['BridgeNfIptables'];
        }
        if (\array_key_exists('BridgeNfIp6tables', $data)) {
            $object->bridgeNfIp6tables = $data['BridgeNfIp6tables'];
        }
        if (\array_key_exists('Debug', $data)) {
            $object->debug = $data['Debug'];
        }
        if (\array_key_exists('NFd', $data)) {
            $object->nFd = $data['NFd'];
        }
        if (\array_key_exists('NGoroutines', $data)) {
            $object->nGoroutines = $data['NGoroutines'];
        }
        if (\array_key_exists('SystemTime', $data)) {
            $object->systemTime = $data['SystemTime'];
        }
        if (\array_key_exists('LoggingDriver', $data)) {
            $object->loggingDriver = $data['LoggingDriver'];
        }
        if (\array_key_exists('CgroupDriver', $data)) {
            $object->cgroupDriver = $data['CgroupDriver'];
        }
        if (\array_key_exists('CgroupVersion', $data)) {
            $object->cgroupVersion = $data['CgroupVersion'];
        }
        if (\array_key_exists('NEventsListener', $data)) {
            $object->nEventsListener = $data['NEventsListener'];
        }
        if (\array_key_exists('KernelVersion', $data)) {
            $object->kernelVersion = $data['KernelVersion'];
        }
        if (\array_key_exists('OperatingSystem', $data)) {
            $object->operatingSystem = $data['OperatingSystem'];
        }
        if (\array_key_exists('OSVersion', $data)) {
            $object->oSVersion = $data['OSVersion'];
        }
        if (\array_key_exists('OSType', $data)) {
            $object->oSType = $data['OSType'];
        }
        if (\array_key_exists('Architecture', $data)) {
            $object->architecture = $data['Architecture'];
        }
        if (\array_key_exists('NCPU', $data)) {
            $object->nCPU = $data['NCPU'];
        }
        if (\array_key_exists('MemTotal', $data)) {
            $object->memTotal = $data['MemTotal'];
        }
        if (\array_key_exists('IndexServerAddress', $data)) {
            $object->indexServerAddress = $data['IndexServerAddress'];
        }
        if (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] !== null) {
            $object->registryConfig = $this->denormalizer->denormalize($data['RegistryConfig'], \Docker\Api\Model\RegistryServiceConfig::class, 'json', $context);
        }
        elseif (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] === null) {
            $object->registryConfig = null;
        }
        if (\array_key_exists('GenericResources', $data)) {
            $values_2 = [];
            foreach ($data['GenericResources'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\GenericResourcesItem::class, 'json', $context);
            }
            $object->genericResources = $values_2;
        }
        if (\array_key_exists('HttpProxy', $data)) {
            $object->httpProxy = $data['HttpProxy'];
        }
        if (\array_key_exists('HttpsProxy', $data)) {
            $object->httpsProxy = $data['HttpsProxy'];
        }
        if (\array_key_exists('NoProxy', $data)) {
            $object->noProxy = $data['NoProxy'];
        }
        if (\array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
        }
        if (\array_key_exists('Labels', $data)) {
            $values_3 = [];
            foreach ($data['Labels'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->labels = $values_3;
        }
        if (\array_key_exists('ExperimentalBuild', $data)) {
            $object->experimentalBuild = $data['ExperimentalBuild'];
        }
        if (\array_key_exists('ServerVersion', $data)) {
            $object->serverVersion = $data['ServerVersion'];
        }
        if (\array_key_exists('ClusterStore', $data)) {
            $object->clusterStore = $data['ClusterStore'];
        }
        if (\array_key_exists('ClusterAdvertise', $data)) {
            $object->clusterAdvertise = $data['ClusterAdvertise'];
        }
        if (\array_key_exists('Runtimes', $data)) {
            $values_4 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Runtimes'] as $key => $value_4) {
                $values_4[$key] = $this->denormalizer->denormalize($value_4, \Docker\Api\Model\Runtime::class, 'json', $context);
            }
            $object->runtimes = $values_4;
        }
        if (\array_key_exists('DefaultRuntime', $data)) {
            $object->defaultRuntime = $data['DefaultRuntime'];
        }
        if (\array_key_exists('Swarm', $data)) {
            $object->swarm = $this->denormalizer->denormalize($data['Swarm'], \Docker\Api\Model\SwarmInfo::class, 'json', $context);
        }
        if (\array_key_exists('LiveRestoreEnabled', $data)) {
            $object->liveRestoreEnabled = $data['LiveRestoreEnabled'];
        }
        if (\array_key_exists('Isolation', $data)) {
            $object->isolation = $data['Isolation'];
        }
        if (\array_key_exists('InitBinary', $data)) {
            $object->initBinary = $data['InitBinary'];
        }
        if (\array_key_exists('ContainerdCommit', $data)) {
            $object->containerdCommit = $this->denormalizer->denormalize($data['ContainerdCommit'], \Docker\Api\Model\Commit::class, 'json', $context);
        }
        if (\array_key_exists('RuncCommit', $data)) {
            $object->runcCommit = $this->denormalizer->denormalize($data['RuncCommit'], \Docker\Api\Model\Commit::class, 'json', $context);
        }
        if (\array_key_exists('InitCommit', $data)) {
            $object->initCommit = $this->denormalizer->denormalize($data['InitCommit'], \Docker\Api\Model\Commit::class, 'json', $context);
        }
        if (\array_key_exists('SecurityOptions', $data)) {
            $values_5 = [];
            foreach ($data['SecurityOptions'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->securityOptions = $values_5;
        }
        if (\array_key_exists('ProductLicense', $data)) {
            $object->productLicense = $data['ProductLicense'];
        }
        if (\array_key_exists('DefaultAddressPools', $data)) {
            $values_6 = [];
            foreach ($data['DefaultAddressPools'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Docker\Api\Model\SystemInfoDefaultAddressPoolsItem::class, 'json', $context);
            }
            $object->defaultAddressPools = $values_6;
        }
        if (\array_key_exists('Warnings', $data)) {
            $values_7 = [];
            foreach ($data['Warnings'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->warnings = $values_7;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('iD', get_object_vars($data)) && null !== ($data->iD ?? null)) {
            $dataArray['ID'] = $data->iD ?? null;
        }
        if (array_key_exists('containers', get_object_vars($data)) && null !== ($data->containers ?? null)) {
            $dataArray['Containers'] = $data->containers ?? null;
        }
        if (array_key_exists('containersRunning', get_object_vars($data)) && null !== ($data->containersRunning ?? null)) {
            $dataArray['ContainersRunning'] = $data->containersRunning ?? null;
        }
        if (array_key_exists('containersPaused', get_object_vars($data)) && null !== ($data->containersPaused ?? null)) {
            $dataArray['ContainersPaused'] = $data->containersPaused ?? null;
        }
        if (array_key_exists('containersStopped', get_object_vars($data)) && null !== ($data->containersStopped ?? null)) {
            $dataArray['ContainersStopped'] = $data->containersStopped ?? null;
        }
        if (array_key_exists('images', get_object_vars($data)) && null !== ($data->images ?? null)) {
            $dataArray['Images'] = $data->images ?? null;
        }
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $dataArray['Driver'] = $data->driver ?? null;
        }
        if (array_key_exists('driverStatus', get_object_vars($data)) && null !== ($data->driverStatus ?? null)) {
            $values = [];
            foreach ($data->driverStatus ?? null as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $dataArray['DriverStatus'] = $values;
        }
        if (array_key_exists('dockerRootDir', get_object_vars($data)) && null !== ($data->dockerRootDir ?? null)) {
            $dataArray['DockerRootDir'] = $data->dockerRootDir ?? null;
        }
        if (array_key_exists('plugins', get_object_vars($data)) && null !== ($data->plugins ?? null)) {
            $dataArray['Plugins'] = ($data->plugins ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->plugins ?? null, 'json', $context));
        }
        if (array_key_exists('memoryLimit', get_object_vars($data)) && null !== ($data->memoryLimit ?? null)) {
            $dataArray['MemoryLimit'] = $data->memoryLimit ?? null;
        }
        if (array_key_exists('swapLimit', get_object_vars($data)) && null !== ($data->swapLimit ?? null)) {
            $dataArray['SwapLimit'] = $data->swapLimit ?? null;
        }
        if (array_key_exists('kernelMemory', get_object_vars($data)) && null !== ($data->kernelMemory ?? null)) {
            $dataArray['KernelMemory'] = $data->kernelMemory ?? null;
        }
        if (array_key_exists('cpuCfsPeriod', get_object_vars($data)) && null !== ($data->cpuCfsPeriod ?? null)) {
            $dataArray['CpuCfsPeriod'] = $data->cpuCfsPeriod ?? null;
        }
        if (array_key_exists('cpuCfsQuota', get_object_vars($data)) && null !== ($data->cpuCfsQuota ?? null)) {
            $dataArray['CpuCfsQuota'] = $data->cpuCfsQuota ?? null;
        }
        if (array_key_exists('cPUShares', get_object_vars($data)) && null !== ($data->cPUShares ?? null)) {
            $dataArray['CPUShares'] = $data->cPUShares ?? null;
        }
        if (array_key_exists('cPUSet', get_object_vars($data)) && null !== ($data->cPUSet ?? null)) {
            $dataArray['CPUSet'] = $data->cPUSet ?? null;
        }
        if (array_key_exists('pidsLimit', get_object_vars($data)) && null !== ($data->pidsLimit ?? null)) {
            $dataArray['PidsLimit'] = $data->pidsLimit ?? null;
        }
        if (array_key_exists('oomKillDisable', get_object_vars($data)) && null !== ($data->oomKillDisable ?? null)) {
            $dataArray['OomKillDisable'] = $data->oomKillDisable ?? null;
        }
        if (array_key_exists('iPv4Forwarding', get_object_vars($data)) && null !== ($data->iPv4Forwarding ?? null)) {
            $dataArray['IPv4Forwarding'] = $data->iPv4Forwarding ?? null;
        }
        if (array_key_exists('bridgeNfIptables', get_object_vars($data)) && null !== ($data->bridgeNfIptables ?? null)) {
            $dataArray['BridgeNfIptables'] = $data->bridgeNfIptables ?? null;
        }
        if (array_key_exists('bridgeNfIp6tables', get_object_vars($data)) && null !== ($data->bridgeNfIp6tables ?? null)) {
            $dataArray['BridgeNfIp6tables'] = $data->bridgeNfIp6tables ?? null;
        }
        if (array_key_exists('debug', get_object_vars($data)) && null !== ($data->debug ?? null)) {
            $dataArray['Debug'] = $data->debug ?? null;
        }
        if (array_key_exists('nFd', get_object_vars($data)) && null !== ($data->nFd ?? null)) {
            $dataArray['NFd'] = $data->nFd ?? null;
        }
        if (array_key_exists('nGoroutines', get_object_vars($data)) && null !== ($data->nGoroutines ?? null)) {
            $dataArray['NGoroutines'] = $data->nGoroutines ?? null;
        }
        if (array_key_exists('systemTime', get_object_vars($data)) && null !== ($data->systemTime ?? null)) {
            $dataArray['SystemTime'] = $data->systemTime ?? null;
        }
        if (array_key_exists('loggingDriver', get_object_vars($data)) && null !== ($data->loggingDriver ?? null)) {
            $dataArray['LoggingDriver'] = $data->loggingDriver ?? null;
        }
        if (array_key_exists('cgroupDriver', get_object_vars($data)) && null !== ($data->cgroupDriver ?? null)) {
            $dataArray['CgroupDriver'] = $data->cgroupDriver ?? null;
        }
        if (array_key_exists('cgroupVersion', get_object_vars($data)) && null !== ($data->cgroupVersion ?? null)) {
            $dataArray['CgroupVersion'] = $data->cgroupVersion ?? null;
        }
        if (array_key_exists('nEventsListener', get_object_vars($data)) && null !== ($data->nEventsListener ?? null)) {
            $dataArray['NEventsListener'] = $data->nEventsListener ?? null;
        }
        if (array_key_exists('kernelVersion', get_object_vars($data)) && null !== ($data->kernelVersion ?? null)) {
            $dataArray['KernelVersion'] = $data->kernelVersion ?? null;
        }
        if (array_key_exists('operatingSystem', get_object_vars($data)) && null !== ($data->operatingSystem ?? null)) {
            $dataArray['OperatingSystem'] = $data->operatingSystem ?? null;
        }
        if (array_key_exists('oSVersion', get_object_vars($data)) && null !== ($data->oSVersion ?? null)) {
            $dataArray['OSVersion'] = $data->oSVersion ?? null;
        }
        if (array_key_exists('oSType', get_object_vars($data)) && null !== ($data->oSType ?? null)) {
            $dataArray['OSType'] = $data->oSType ?? null;
        }
        if (array_key_exists('architecture', get_object_vars($data)) && null !== ($data->architecture ?? null)) {
            $dataArray['Architecture'] = $data->architecture ?? null;
        }
        if (array_key_exists('nCPU', get_object_vars($data)) && null !== ($data->nCPU ?? null)) {
            $dataArray['NCPU'] = $data->nCPU ?? null;
        }
        if (array_key_exists('memTotal', get_object_vars($data)) && null !== ($data->memTotal ?? null)) {
            $dataArray['MemTotal'] = $data->memTotal ?? null;
        }
        if (array_key_exists('indexServerAddress', get_object_vars($data)) && null !== ($data->indexServerAddress ?? null)) {
            $dataArray['IndexServerAddress'] = $data->indexServerAddress ?? null;
        }
        if (array_key_exists('registryConfig', get_object_vars($data)) && null !== ($data->registryConfig ?? null)) {
            $dataArray['RegistryConfig'] = ($data->registryConfig ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->registryConfig ?? null, 'json', $context));
        }
        if (array_key_exists('genericResources', get_object_vars($data)) && null !== ($data->genericResources ?? null)) {
            $values_2 = [];
            foreach ($data->genericResources ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['GenericResources'] = $values_2;
        }
        if (array_key_exists('httpProxy', get_object_vars($data)) && null !== ($data->httpProxy ?? null)) {
            $dataArray['HttpProxy'] = $data->httpProxy ?? null;
        }
        if (array_key_exists('httpsProxy', get_object_vars($data)) && null !== ($data->httpsProxy ?? null)) {
            $dataArray['HttpsProxy'] = $data->httpsProxy ?? null;
        }
        if (array_key_exists('noProxy', get_object_vars($data)) && null !== ($data->noProxy ?? null)) {
            $dataArray['NoProxy'] = $data->noProxy ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['Name'] = $data->name ?? null;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values_3 = [];
            foreach ($data->labels ?? null as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['Labels'] = $values_3;
        }
        if (array_key_exists('experimentalBuild', get_object_vars($data)) && null !== ($data->experimentalBuild ?? null)) {
            $dataArray['ExperimentalBuild'] = $data->experimentalBuild ?? null;
        }
        if (array_key_exists('serverVersion', get_object_vars($data)) && null !== ($data->serverVersion ?? null)) {
            $dataArray['ServerVersion'] = $data->serverVersion ?? null;
        }
        if (array_key_exists('clusterStore', get_object_vars($data)) && null !== ($data->clusterStore ?? null)) {
            $dataArray['ClusterStore'] = $data->clusterStore ?? null;
        }
        if (array_key_exists('clusterAdvertise', get_object_vars($data)) && null !== ($data->clusterAdvertise ?? null)) {
            $dataArray['ClusterAdvertise'] = $data->clusterAdvertise ?? null;
        }
        if (array_key_exists('runtimes', get_object_vars($data)) && null !== ($data->runtimes ?? null)) {
            $values_4 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->runtimes ?? null as $key => $value_4) {
                $values_4[$key] = $value_4 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['Runtimes'] = $values_4;
        }
        if (array_key_exists('defaultRuntime', get_object_vars($data)) && null !== ($data->defaultRuntime ?? null)) {
            $dataArray['DefaultRuntime'] = $data->defaultRuntime ?? null;
        }
        if (array_key_exists('swarm', get_object_vars($data)) && null !== ($data->swarm ?? null)) {
            $dataArray['Swarm'] = ($data->swarm ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->swarm ?? null, 'json', $context));
        }
        if (array_key_exists('liveRestoreEnabled', get_object_vars($data)) && null !== ($data->liveRestoreEnabled ?? null)) {
            $dataArray['LiveRestoreEnabled'] = $data->liveRestoreEnabled ?? null;
        }
        if (array_key_exists('isolation', get_object_vars($data)) && null !== ($data->isolation ?? null)) {
            $dataArray['Isolation'] = $data->isolation ?? null;
        }
        if (array_key_exists('initBinary', get_object_vars($data)) && null !== ($data->initBinary ?? null)) {
            $dataArray['InitBinary'] = $data->initBinary ?? null;
        }
        if (array_key_exists('containerdCommit', get_object_vars($data)) && null !== ($data->containerdCommit ?? null)) {
            $dataArray['ContainerdCommit'] = ($data->containerdCommit ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->containerdCommit ?? null, 'json', $context));
        }
        if (array_key_exists('runcCommit', get_object_vars($data)) && null !== ($data->runcCommit ?? null)) {
            $dataArray['RuncCommit'] = ($data->runcCommit ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->runcCommit ?? null, 'json', $context));
        }
        if (array_key_exists('initCommit', get_object_vars($data)) && null !== ($data->initCommit ?? null)) {
            $dataArray['InitCommit'] = ($data->initCommit ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->initCommit ?? null, 'json', $context));
        }
        if (array_key_exists('securityOptions', get_object_vars($data)) && null !== ($data->securityOptions ?? null)) {
            $values_5 = [];
            foreach ($data->securityOptions ?? null as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['SecurityOptions'] = $values_5;
        }
        if (array_key_exists('productLicense', get_object_vars($data)) && null !== ($data->productLicense ?? null)) {
            $dataArray['ProductLicense'] = $data->productLicense ?? null;
        }
        if (array_key_exists('defaultAddressPools', get_object_vars($data)) && null !== ($data->defaultAddressPools ?? null)) {
            $values_6 = [];
            foreach ($data->defaultAddressPools ?? null as $value_6) {
                $values_6[] = $value_6 === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
            }
            $dataArray['DefaultAddressPools'] = $values_6;
        }
        if (array_key_exists('warnings', get_object_vars($data)) && null !== ($data->warnings ?? null)) {
            $values_7 = [];
            foreach ($data->warnings ?? null as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['Warnings'] = $values_7;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\SystemInfoConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\SystemInfo::class => false];
    }
}