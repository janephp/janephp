<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Docker\\Api\\Model\\SystemInfo';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\SystemInfo';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\SystemInfo();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SystemInfoConstraint());
            $context['skip_validation'] = true;
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
            $values = array();
            foreach ($data['DriverStatus'] as $value) {
                $values_1 = array();
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
            $object->setPlugins($this->denormalizer->denormalize($data['Plugins'], 'Docker\\Api\\Model\\PluginsInfo', 'json', $context));
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
            $object->setRegistryConfig($this->denormalizer->denormalize($data['RegistryConfig'], 'Docker\\Api\\Model\\RegistryServiceConfig', 'json', $context));
        }
        elseif (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] === null) {
            $object->setRegistryConfig(null);
        }
        if (\array_key_exists('GenericResources', $data)) {
            $values_2 = array();
            foreach ($data['GenericResources'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\Api\\Model\\GenericResourcesItem', 'json', $context);
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
            $values_3 = array();
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
            $values_4 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Runtimes'] as $key => $value_4) {
                $values_4[$key] = $this->denormalizer->denormalize($value_4, 'Docker\\Api\\Model\\Runtime', 'json', $context);
            }
            $object->setRuntimes($values_4);
        }
        if (\array_key_exists('DefaultRuntime', $data)) {
            $object->setDefaultRuntime($data['DefaultRuntime']);
        }
        if (\array_key_exists('Swarm', $data)) {
            $object->setSwarm($this->denormalizer->denormalize($data['Swarm'], 'Docker\\Api\\Model\\SwarmInfo', 'json', $context));
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
            $object->setContainerdCommit($this->denormalizer->denormalize($data['ContainerdCommit'], 'Docker\\Api\\Model\\Commit', 'json', $context));
        }
        if (\array_key_exists('RuncCommit', $data)) {
            $object->setRuncCommit($this->denormalizer->denormalize($data['RuncCommit'], 'Docker\\Api\\Model\\Commit', 'json', $context));
        }
        if (\array_key_exists('InitCommit', $data)) {
            $object->setInitCommit($this->denormalizer->denormalize($data['InitCommit'], 'Docker\\Api\\Model\\Commit', 'json', $context));
        }
        if (\array_key_exists('SecurityOptions', $data)) {
            $values_5 = array();
            foreach ($data['SecurityOptions'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setSecurityOptions($values_5);
        }
        if (\array_key_exists('ProductLicense', $data)) {
            $object->setProductLicense($data['ProductLicense']);
        }
        if (\array_key_exists('DefaultAddressPools', $data)) {
            $values_6 = array();
            foreach ($data['DefaultAddressPools'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Docker\\Api\\Model\\SystemInfoDefaultAddressPoolsItem', 'json', $context);
            }
            $object->setDefaultAddressPools($values_6);
        }
        if (\array_key_exists('Warnings', $data)) {
            $values_7 = array();
            foreach ($data['Warnings'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setWarnings($values_7);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('iD') && null !== $object->getID()) {
            $data['ID'] = $object->getID();
        }
        if ($object->isInitialized('containers') && null !== $object->getContainers()) {
            $data['Containers'] = $object->getContainers();
        }
        if ($object->isInitialized('containersRunning') && null !== $object->getContainersRunning()) {
            $data['ContainersRunning'] = $object->getContainersRunning();
        }
        if ($object->isInitialized('containersPaused') && null !== $object->getContainersPaused()) {
            $data['ContainersPaused'] = $object->getContainersPaused();
        }
        if ($object->isInitialized('containersStopped') && null !== $object->getContainersStopped()) {
            $data['ContainersStopped'] = $object->getContainersStopped();
        }
        if ($object->isInitialized('images') && null !== $object->getImages()) {
            $data['Images'] = $object->getImages();
        }
        if ($object->isInitialized('driver') && null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        }
        if ($object->isInitialized('driverStatus') && null !== $object->getDriverStatus()) {
            $values = array();
            foreach ($object->getDriverStatus() as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $data['DriverStatus'] = $values;
        }
        if ($object->isInitialized('dockerRootDir') && null !== $object->getDockerRootDir()) {
            $data['DockerRootDir'] = $object->getDockerRootDir();
        }
        if ($object->isInitialized('plugins') && null !== $object->getPlugins()) {
            $data['Plugins'] = $this->normalizer->normalize($object->getPlugins(), 'json', $context);
        }
        if ($object->isInitialized('memoryLimit') && null !== $object->getMemoryLimit()) {
            $data['MemoryLimit'] = $object->getMemoryLimit();
        }
        if ($object->isInitialized('swapLimit') && null !== $object->getSwapLimit()) {
            $data['SwapLimit'] = $object->getSwapLimit();
        }
        if ($object->isInitialized('kernelMemory') && null !== $object->getKernelMemory()) {
            $data['KernelMemory'] = $object->getKernelMemory();
        }
        if ($object->isInitialized('cpuCfsPeriod') && null !== $object->getCpuCfsPeriod()) {
            $data['CpuCfsPeriod'] = $object->getCpuCfsPeriod();
        }
        if ($object->isInitialized('cpuCfsQuota') && null !== $object->getCpuCfsQuota()) {
            $data['CpuCfsQuota'] = $object->getCpuCfsQuota();
        }
        if ($object->isInitialized('cPUShares') && null !== $object->getCPUShares()) {
            $data['CPUShares'] = $object->getCPUShares();
        }
        if ($object->isInitialized('cPUSet') && null !== $object->getCPUSet()) {
            $data['CPUSet'] = $object->getCPUSet();
        }
        if ($object->isInitialized('pidsLimit') && null !== $object->getPidsLimit()) {
            $data['PidsLimit'] = $object->getPidsLimit();
        }
        if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
            $data['OomKillDisable'] = $object->getOomKillDisable();
        }
        if ($object->isInitialized('iPv4Forwarding') && null !== $object->getIPv4Forwarding()) {
            $data['IPv4Forwarding'] = $object->getIPv4Forwarding();
        }
        if ($object->isInitialized('bridgeNfIptables') && null !== $object->getBridgeNfIptables()) {
            $data['BridgeNfIptables'] = $object->getBridgeNfIptables();
        }
        if ($object->isInitialized('bridgeNfIp6tables') && null !== $object->getBridgeNfIp6tables()) {
            $data['BridgeNfIp6tables'] = $object->getBridgeNfIp6tables();
        }
        if ($object->isInitialized('debug') && null !== $object->getDebug()) {
            $data['Debug'] = $object->getDebug();
        }
        if ($object->isInitialized('nFd') && null !== $object->getNFd()) {
            $data['NFd'] = $object->getNFd();
        }
        if ($object->isInitialized('nGoroutines') && null !== $object->getNGoroutines()) {
            $data['NGoroutines'] = $object->getNGoroutines();
        }
        if ($object->isInitialized('systemTime') && null !== $object->getSystemTime()) {
            $data['SystemTime'] = $object->getSystemTime();
        }
        if ($object->isInitialized('loggingDriver') && null !== $object->getLoggingDriver()) {
            $data['LoggingDriver'] = $object->getLoggingDriver();
        }
        if ($object->isInitialized('cgroupDriver') && null !== $object->getCgroupDriver()) {
            $data['CgroupDriver'] = $object->getCgroupDriver();
        }
        if ($object->isInitialized('cgroupVersion') && null !== $object->getCgroupVersion()) {
            $data['CgroupVersion'] = $object->getCgroupVersion();
        }
        if ($object->isInitialized('nEventsListener') && null !== $object->getNEventsListener()) {
            $data['NEventsListener'] = $object->getNEventsListener();
        }
        if ($object->isInitialized('kernelVersion') && null !== $object->getKernelVersion()) {
            $data['KernelVersion'] = $object->getKernelVersion();
        }
        if ($object->isInitialized('operatingSystem') && null !== $object->getOperatingSystem()) {
            $data['OperatingSystem'] = $object->getOperatingSystem();
        }
        if ($object->isInitialized('oSVersion') && null !== $object->getOSVersion()) {
            $data['OSVersion'] = $object->getOSVersion();
        }
        if ($object->isInitialized('oSType') && null !== $object->getOSType()) {
            $data['OSType'] = $object->getOSType();
        }
        if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
            $data['Architecture'] = $object->getArchitecture();
        }
        if ($object->isInitialized('nCPU') && null !== $object->getNCPU()) {
            $data['NCPU'] = $object->getNCPU();
        }
        if ($object->isInitialized('memTotal') && null !== $object->getMemTotal()) {
            $data['MemTotal'] = $object->getMemTotal();
        }
        if ($object->isInitialized('indexServerAddress') && null !== $object->getIndexServerAddress()) {
            $data['IndexServerAddress'] = $object->getIndexServerAddress();
        }
        if ($object->isInitialized('registryConfig') && null !== $object->getRegistryConfig()) {
            $data['RegistryConfig'] = $this->normalizer->normalize($object->getRegistryConfig(), 'json', $context);
        }
        if ($object->isInitialized('genericResources') && null !== $object->getGenericResources()) {
            $values_2 = array();
            foreach ($object->getGenericResources() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['GenericResources'] = $values_2;
        }
        if ($object->isInitialized('httpProxy') && null !== $object->getHttpProxy()) {
            $data['HttpProxy'] = $object->getHttpProxy();
        }
        if ($object->isInitialized('httpsProxy') && null !== $object->getHttpsProxy()) {
            $data['HttpsProxy'] = $object->getHttpsProxy();
        }
        if ($object->isInitialized('noProxy') && null !== $object->getNoProxy()) {
            $data['NoProxy'] = $object->getNoProxy();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if ($object->isInitialized('labels') && null !== $object->getLabels()) {
            $values_3 = array();
            foreach ($object->getLabels() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['Labels'] = $values_3;
        }
        if ($object->isInitialized('experimentalBuild') && null !== $object->getExperimentalBuild()) {
            $data['ExperimentalBuild'] = $object->getExperimentalBuild();
        }
        if ($object->isInitialized('serverVersion') && null !== $object->getServerVersion()) {
            $data['ServerVersion'] = $object->getServerVersion();
        }
        if ($object->isInitialized('clusterStore') && null !== $object->getClusterStore()) {
            $data['ClusterStore'] = $object->getClusterStore();
        }
        if ($object->isInitialized('clusterAdvertise') && null !== $object->getClusterAdvertise()) {
            $data['ClusterAdvertise'] = $object->getClusterAdvertise();
        }
        if ($object->isInitialized('runtimes') && null !== $object->getRuntimes()) {
            $values_4 = array();
            foreach ($object->getRuntimes() as $key => $value_4) {
                $values_4[$key] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['Runtimes'] = $values_4;
        }
        if ($object->isInitialized('defaultRuntime') && null !== $object->getDefaultRuntime()) {
            $data['DefaultRuntime'] = $object->getDefaultRuntime();
        }
        if ($object->isInitialized('swarm') && null !== $object->getSwarm()) {
            $data['Swarm'] = $this->normalizer->normalize($object->getSwarm(), 'json', $context);
        }
        if ($object->isInitialized('liveRestoreEnabled') && null !== $object->getLiveRestoreEnabled()) {
            $data['LiveRestoreEnabled'] = $object->getLiveRestoreEnabled();
        }
        if ($object->isInitialized('isolation') && null !== $object->getIsolation()) {
            $data['Isolation'] = $object->getIsolation();
        }
        if ($object->isInitialized('initBinary') && null !== $object->getInitBinary()) {
            $data['InitBinary'] = $object->getInitBinary();
        }
        if ($object->isInitialized('containerdCommit') && null !== $object->getContainerdCommit()) {
            $data['ContainerdCommit'] = $this->normalizer->normalize($object->getContainerdCommit(), 'json', $context);
        }
        if ($object->isInitialized('runcCommit') && null !== $object->getRuncCommit()) {
            $data['RuncCommit'] = $this->normalizer->normalize($object->getRuncCommit(), 'json', $context);
        }
        if ($object->isInitialized('initCommit') && null !== $object->getInitCommit()) {
            $data['InitCommit'] = $this->normalizer->normalize($object->getInitCommit(), 'json', $context);
        }
        if ($object->isInitialized('securityOptions') && null !== $object->getSecurityOptions()) {
            $values_5 = array();
            foreach ($object->getSecurityOptions() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['SecurityOptions'] = $values_5;
        }
        if ($object->isInitialized('productLicense') && null !== $object->getProductLicense()) {
            $data['ProductLicense'] = $object->getProductLicense();
        }
        if ($object->isInitialized('defaultAddressPools') && null !== $object->getDefaultAddressPools()) {
            $values_6 = array();
            foreach ($object->getDefaultAddressPools() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['DefaultAddressPools'] = $values_6;
        }
        if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
            $values_7 = array();
            foreach ($object->getWarnings() as $value_7) {
                $values_7[] = $value_7;
            }
            $data['Warnings'] = $values_7;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SystemInfoConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}