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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\SystemInfo();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ID', $data)) {
            $object->setID($data['ID']);
        }
        if (\array_key_exists('Containers', $data)) {
            $object->setContainers($data['Containers']);
        }
        if (\array_key_exists('ContainersRunning', $data)) {
            $object->setContainersRunning($data['ContainersRunning']);
        }
        if (\array_key_exists('ContainersPaused', $data)) {
            $object->setContainersPaused($data['ContainersPaused']);
        }
        if (\array_key_exists('ContainersStopped', $data)) {
            $object->setContainersStopped($data['ContainersStopped']);
        }
        if (\array_key_exists('Images', $data)) {
            $object->setImages($data['Images']);
        }
        if (\array_key_exists('Driver', $data)) {
            $object->setDriver($data['Driver']);
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
            $object->setDriverStatus($values);
        }
        if (\array_key_exists('DockerRootDir', $data)) {
            $object->setDockerRootDir($data['DockerRootDir']);
        }
        if (\array_key_exists('Plugins', $data)) {
            $object->setPlugins($this->denormalizer->denormalize($data['Plugins'], \Docker\Api\Model\PluginsInfo::class, 'json', $context));
        }
        if (\array_key_exists('MemoryLimit', $data)) {
            $object->setMemoryLimit($data['MemoryLimit']);
        }
        if (\array_key_exists('SwapLimit', $data)) {
            $object->setSwapLimit($data['SwapLimit']);
        }
        if (\array_key_exists('KernelMemory', $data)) {
            $object->setKernelMemory($data['KernelMemory']);
        }
        if (\array_key_exists('CpuCfsPeriod', $data)) {
            $object->setCpuCfsPeriod($data['CpuCfsPeriod']);
        }
        if (\array_key_exists('CpuCfsQuota', $data)) {
            $object->setCpuCfsQuota($data['CpuCfsQuota']);
        }
        if (\array_key_exists('CPUShares', $data)) {
            $object->setCPUShares($data['CPUShares']);
        }
        if (\array_key_exists('CPUSet', $data)) {
            $object->setCPUSet($data['CPUSet']);
        }
        if (\array_key_exists('PidsLimit', $data)) {
            $object->setPidsLimit($data['PidsLimit']);
        }
        if (\array_key_exists('OomKillDisable', $data)) {
            $object->setOomKillDisable($data['OomKillDisable']);
        }
        if (\array_key_exists('IPv4Forwarding', $data)) {
            $object->setIPv4Forwarding($data['IPv4Forwarding']);
        }
        if (\array_key_exists('BridgeNfIptables', $data)) {
            $object->setBridgeNfIptables($data['BridgeNfIptables']);
        }
        if (\array_key_exists('BridgeNfIp6tables', $data)) {
            $object->setBridgeNfIp6tables($data['BridgeNfIp6tables']);
        }
        if (\array_key_exists('Debug', $data)) {
            $object->setDebug($data['Debug']);
        }
        if (\array_key_exists('NFd', $data)) {
            $object->setNFd($data['NFd']);
        }
        if (\array_key_exists('NGoroutines', $data)) {
            $object->setNGoroutines($data['NGoroutines']);
        }
        if (\array_key_exists('SystemTime', $data)) {
            $object->setSystemTime($data['SystemTime']);
        }
        if (\array_key_exists('LoggingDriver', $data)) {
            $object->setLoggingDriver($data['LoggingDriver']);
        }
        if (\array_key_exists('CgroupDriver', $data)) {
            $object->setCgroupDriver($data['CgroupDriver']);
        }
        if (\array_key_exists('CgroupVersion', $data)) {
            $object->setCgroupVersion($data['CgroupVersion']);
        }
        if (\array_key_exists('NEventsListener', $data)) {
            $object->setNEventsListener($data['NEventsListener']);
        }
        if (\array_key_exists('KernelVersion', $data)) {
            $object->setKernelVersion($data['KernelVersion']);
        }
        if (\array_key_exists('OperatingSystem', $data)) {
            $object->setOperatingSystem($data['OperatingSystem']);
        }
        if (\array_key_exists('OSVersion', $data)) {
            $object->setOSVersion($data['OSVersion']);
        }
        if (\array_key_exists('OSType', $data)) {
            $object->setOSType($data['OSType']);
        }
        if (\array_key_exists('Architecture', $data)) {
            $object->setArchitecture($data['Architecture']);
        }
        if (\array_key_exists('NCPU', $data)) {
            $object->setNCPU($data['NCPU']);
        }
        if (\array_key_exists('MemTotal', $data)) {
            $object->setMemTotal($data['MemTotal']);
        }
        if (\array_key_exists('IndexServerAddress', $data)) {
            $object->setIndexServerAddress($data['IndexServerAddress']);
        }
        if (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] !== null) {
            $object->setRegistryConfig($this->denormalizer->denormalize($data['RegistryConfig'], \Docker\Api\Model\RegistryServiceConfig::class, 'json', $context));
        }
        elseif (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] === null) {
            $object->setRegistryConfig(null);
        }
        if (\array_key_exists('GenericResources', $data)) {
            $values_2 = [];
            foreach ($data['GenericResources'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\GenericResourcesItem::class, 'json', $context);
            }
            $object->setGenericResources($values_2);
        }
        if (\array_key_exists('HttpProxy', $data)) {
            $object->setHttpProxy($data['HttpProxy']);
        }
        if (\array_key_exists('HttpsProxy', $data)) {
            $object->setHttpsProxy($data['HttpsProxy']);
        }
        if (\array_key_exists('NoProxy', $data)) {
            $object->setNoProxy($data['NoProxy']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Labels', $data)) {
            $values_3 = [];
            foreach ($data['Labels'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLabels($values_3);
        }
        if (\array_key_exists('ExperimentalBuild', $data)) {
            $object->setExperimentalBuild($data['ExperimentalBuild']);
        }
        if (\array_key_exists('ServerVersion', $data)) {
            $object->setServerVersion($data['ServerVersion']);
        }
        if (\array_key_exists('ClusterStore', $data)) {
            $object->setClusterStore($data['ClusterStore']);
        }
        if (\array_key_exists('ClusterAdvertise', $data)) {
            $object->setClusterAdvertise($data['ClusterAdvertise']);
        }
        if (\array_key_exists('Runtimes', $data)) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Runtimes'] as $key => $value_4) {
                $values_4[$key] = $this->denormalizer->denormalize($value_4, \Docker\Api\Model\Runtime::class, 'json', $context);
            }
            $object->setRuntimes($values_4);
        }
        if (\array_key_exists('DefaultRuntime', $data)) {
            $object->setDefaultRuntime($data['DefaultRuntime']);
        }
        if (\array_key_exists('Swarm', $data)) {
            $object->setSwarm($this->denormalizer->denormalize($data['Swarm'], \Docker\Api\Model\SwarmInfo::class, 'json', $context));
        }
        if (\array_key_exists('LiveRestoreEnabled', $data)) {
            $object->setLiveRestoreEnabled($data['LiveRestoreEnabled']);
        }
        if (\array_key_exists('Isolation', $data)) {
            $object->setIsolation($data['Isolation']);
        }
        if (\array_key_exists('InitBinary', $data)) {
            $object->setInitBinary($data['InitBinary']);
        }
        if (\array_key_exists('ContainerdCommit', $data)) {
            $object->setContainerdCommit($this->denormalizer->denormalize($data['ContainerdCommit'], \Docker\Api\Model\Commit::class, 'json', $context));
        }
        if (\array_key_exists('RuncCommit', $data)) {
            $object->setRuncCommit($this->denormalizer->denormalize($data['RuncCommit'], \Docker\Api\Model\Commit::class, 'json', $context));
        }
        if (\array_key_exists('InitCommit', $data)) {
            $object->setInitCommit($this->denormalizer->denormalize($data['InitCommit'], \Docker\Api\Model\Commit::class, 'json', $context));
        }
        if (\array_key_exists('SecurityOptions', $data)) {
            $values_5 = [];
            foreach ($data['SecurityOptions'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setSecurityOptions($values_5);
        }
        if (\array_key_exists('ProductLicense', $data)) {
            $object->setProductLicense($data['ProductLicense']);
        }
        if (\array_key_exists('DefaultAddressPools', $data)) {
            $values_6 = [];
            foreach ($data['DefaultAddressPools'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Docker\Api\Model\SystemInfoDefaultAddressPoolsItem::class, 'json', $context);
            }
            $object->setDefaultAddressPools($values_6);
        }
        if (\array_key_exists('Warnings', $data)) {
            $values_7 = [];
            foreach ($data['Warnings'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setWarnings($values_7);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('iD') && null !== $data->getID()) {
            $dataArray['ID'] = $data->getID();
        }
        if ($data->isInitialized('containers') && null !== $data->getContainers()) {
            $dataArray['Containers'] = $data->getContainers();
        }
        if ($data->isInitialized('containersRunning') && null !== $data->getContainersRunning()) {
            $dataArray['ContainersRunning'] = $data->getContainersRunning();
        }
        if ($data->isInitialized('containersPaused') && null !== $data->getContainersPaused()) {
            $dataArray['ContainersPaused'] = $data->getContainersPaused();
        }
        if ($data->isInitialized('containersStopped') && null !== $data->getContainersStopped()) {
            $dataArray['ContainersStopped'] = $data->getContainersStopped();
        }
        if ($data->isInitialized('images') && null !== $data->getImages()) {
            $dataArray['Images'] = $data->getImages();
        }
        if ($data->isInitialized('driver') && null !== $data->getDriver()) {
            $dataArray['Driver'] = $data->getDriver();
        }
        if ($data->isInitialized('driverStatus') && null !== $data->getDriverStatus()) {
            $values = [];
            foreach ($data->getDriverStatus() as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $dataArray['DriverStatus'] = $values;
        }
        if ($data->isInitialized('dockerRootDir') && null !== $data->getDockerRootDir()) {
            $dataArray['DockerRootDir'] = $data->getDockerRootDir();
        }
        if ($data->isInitialized('plugins') && null !== $data->getPlugins()) {
            $dataArray['Plugins'] = $this->normalizer->normalize($data->getPlugins(), 'json', $context);
        }
        if ($data->isInitialized('memoryLimit') && null !== $data->getMemoryLimit()) {
            $dataArray['MemoryLimit'] = $data->getMemoryLimit();
        }
        if ($data->isInitialized('swapLimit') && null !== $data->getSwapLimit()) {
            $dataArray['SwapLimit'] = $data->getSwapLimit();
        }
        if ($data->isInitialized('kernelMemory') && null !== $data->getKernelMemory()) {
            $dataArray['KernelMemory'] = $data->getKernelMemory();
        }
        if ($data->isInitialized('cpuCfsPeriod') && null !== $data->getCpuCfsPeriod()) {
            $dataArray['CpuCfsPeriod'] = $data->getCpuCfsPeriod();
        }
        if ($data->isInitialized('cpuCfsQuota') && null !== $data->getCpuCfsQuota()) {
            $dataArray['CpuCfsQuota'] = $data->getCpuCfsQuota();
        }
        if ($data->isInitialized('cPUShares') && null !== $data->getCPUShares()) {
            $dataArray['CPUShares'] = $data->getCPUShares();
        }
        if ($data->isInitialized('cPUSet') && null !== $data->getCPUSet()) {
            $dataArray['CPUSet'] = $data->getCPUSet();
        }
        if ($data->isInitialized('pidsLimit') && null !== $data->getPidsLimit()) {
            $dataArray['PidsLimit'] = $data->getPidsLimit();
        }
        if ($data->isInitialized('oomKillDisable') && null !== $data->getOomKillDisable()) {
            $dataArray['OomKillDisable'] = $data->getOomKillDisable();
        }
        if ($data->isInitialized('iPv4Forwarding') && null !== $data->getIPv4Forwarding()) {
            $dataArray['IPv4Forwarding'] = $data->getIPv4Forwarding();
        }
        if ($data->isInitialized('bridgeNfIptables') && null !== $data->getBridgeNfIptables()) {
            $dataArray['BridgeNfIptables'] = $data->getBridgeNfIptables();
        }
        if ($data->isInitialized('bridgeNfIp6tables') && null !== $data->getBridgeNfIp6tables()) {
            $dataArray['BridgeNfIp6tables'] = $data->getBridgeNfIp6tables();
        }
        if ($data->isInitialized('debug') && null !== $data->getDebug()) {
            $dataArray['Debug'] = $data->getDebug();
        }
        if ($data->isInitialized('nFd') && null !== $data->getNFd()) {
            $dataArray['NFd'] = $data->getNFd();
        }
        if ($data->isInitialized('nGoroutines') && null !== $data->getNGoroutines()) {
            $dataArray['NGoroutines'] = $data->getNGoroutines();
        }
        if ($data->isInitialized('systemTime') && null !== $data->getSystemTime()) {
            $dataArray['SystemTime'] = $data->getSystemTime();
        }
        if ($data->isInitialized('loggingDriver') && null !== $data->getLoggingDriver()) {
            $dataArray['LoggingDriver'] = $data->getLoggingDriver();
        }
        if ($data->isInitialized('cgroupDriver') && null !== $data->getCgroupDriver()) {
            $dataArray['CgroupDriver'] = $data->getCgroupDriver();
        }
        if ($data->isInitialized('cgroupVersion') && null !== $data->getCgroupVersion()) {
            $dataArray['CgroupVersion'] = $data->getCgroupVersion();
        }
        if ($data->isInitialized('nEventsListener') && null !== $data->getNEventsListener()) {
            $dataArray['NEventsListener'] = $data->getNEventsListener();
        }
        if ($data->isInitialized('kernelVersion') && null !== $data->getKernelVersion()) {
            $dataArray['KernelVersion'] = $data->getKernelVersion();
        }
        if ($data->isInitialized('operatingSystem') && null !== $data->getOperatingSystem()) {
            $dataArray['OperatingSystem'] = $data->getOperatingSystem();
        }
        if ($data->isInitialized('oSVersion') && null !== $data->getOSVersion()) {
            $dataArray['OSVersion'] = $data->getOSVersion();
        }
        if ($data->isInitialized('oSType') && null !== $data->getOSType()) {
            $dataArray['OSType'] = $data->getOSType();
        }
        if ($data->isInitialized('architecture') && null !== $data->getArchitecture()) {
            $dataArray['Architecture'] = $data->getArchitecture();
        }
        if ($data->isInitialized('nCPU') && null !== $data->getNCPU()) {
            $dataArray['NCPU'] = $data->getNCPU();
        }
        if ($data->isInitialized('memTotal') && null !== $data->getMemTotal()) {
            $dataArray['MemTotal'] = $data->getMemTotal();
        }
        if ($data->isInitialized('indexServerAddress') && null !== $data->getIndexServerAddress()) {
            $dataArray['IndexServerAddress'] = $data->getIndexServerAddress();
        }
        if ($data->isInitialized('registryConfig') && null !== $data->getRegistryConfig()) {
            $dataArray['RegistryConfig'] = $this->normalizer->normalize($data->getRegistryConfig(), 'json', $context);
        }
        if ($data->isInitialized('genericResources') && null !== $data->getGenericResources()) {
            $values_2 = [];
            foreach ($data->getGenericResources() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['GenericResources'] = $values_2;
        }
        if ($data->isInitialized('httpProxy') && null !== $data->getHttpProxy()) {
            $dataArray['HttpProxy'] = $data->getHttpProxy();
        }
        if ($data->isInitialized('httpsProxy') && null !== $data->getHttpsProxy()) {
            $dataArray['HttpsProxy'] = $data->getHttpsProxy();
        }
        if ($data->isInitialized('noProxy') && null !== $data->getNoProxy()) {
            $dataArray['NoProxy'] = $data->getNoProxy();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['Name'] = $data->getName();
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_3 = [];
            foreach ($data->getLabels() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['Labels'] = $values_3;
        }
        if ($data->isInitialized('experimentalBuild') && null !== $data->getExperimentalBuild()) {
            $dataArray['ExperimentalBuild'] = $data->getExperimentalBuild();
        }
        if ($data->isInitialized('serverVersion') && null !== $data->getServerVersion()) {
            $dataArray['ServerVersion'] = $data->getServerVersion();
        }
        if ($data->isInitialized('clusterStore') && null !== $data->getClusterStore()) {
            $dataArray['ClusterStore'] = $data->getClusterStore();
        }
        if ($data->isInitialized('clusterAdvertise') && null !== $data->getClusterAdvertise()) {
            $dataArray['ClusterAdvertise'] = $data->getClusterAdvertise();
        }
        if ($data->isInitialized('runtimes') && null !== $data->getRuntimes()) {
            $values_4 = [];
            foreach ($data->getRuntimes() as $key => $value_4) {
                $values_4[$key] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['Runtimes'] = $values_4;
        }
        if ($data->isInitialized('defaultRuntime') && null !== $data->getDefaultRuntime()) {
            $dataArray['DefaultRuntime'] = $data->getDefaultRuntime();
        }
        if ($data->isInitialized('swarm') && null !== $data->getSwarm()) {
            $dataArray['Swarm'] = $this->normalizer->normalize($data->getSwarm(), 'json', $context);
        }
        if ($data->isInitialized('liveRestoreEnabled') && null !== $data->getLiveRestoreEnabled()) {
            $dataArray['LiveRestoreEnabled'] = $data->getLiveRestoreEnabled();
        }
        if ($data->isInitialized('isolation') && null !== $data->getIsolation()) {
            $dataArray['Isolation'] = $data->getIsolation();
        }
        if ($data->isInitialized('initBinary') && null !== $data->getInitBinary()) {
            $dataArray['InitBinary'] = $data->getInitBinary();
        }
        if ($data->isInitialized('containerdCommit') && null !== $data->getContainerdCommit()) {
            $dataArray['ContainerdCommit'] = $this->normalizer->normalize($data->getContainerdCommit(), 'json', $context);
        }
        if ($data->isInitialized('runcCommit') && null !== $data->getRuncCommit()) {
            $dataArray['RuncCommit'] = $this->normalizer->normalize($data->getRuncCommit(), 'json', $context);
        }
        if ($data->isInitialized('initCommit') && null !== $data->getInitCommit()) {
            $dataArray['InitCommit'] = $this->normalizer->normalize($data->getInitCommit(), 'json', $context);
        }
        if ($data->isInitialized('securityOptions') && null !== $data->getSecurityOptions()) {
            $values_5 = [];
            foreach ($data->getSecurityOptions() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['SecurityOptions'] = $values_5;
        }
        if ($data->isInitialized('productLicense') && null !== $data->getProductLicense()) {
            $dataArray['ProductLicense'] = $data->getProductLicense();
        }
        if ($data->isInitialized('defaultAddressPools') && null !== $data->getDefaultAddressPools()) {
            $values_6 = [];
            foreach ($data->getDefaultAddressPools() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['DefaultAddressPools'] = $values_6;
        }
        if ($data->isInitialized('warnings') && null !== $data->getWarnings()) {
            $values_7 = [];
            foreach ($data->getWarnings() as $value_7) {
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