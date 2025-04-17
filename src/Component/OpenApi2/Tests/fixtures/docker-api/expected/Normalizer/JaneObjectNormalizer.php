<?php

namespace Docker\Api\Normalizer;

use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Docker\Api\Model\Port::class => \Docker\Api\Normalizer\PortNormalizer::class,
        
        \Docker\Api\Model\MountPoint::class => \Docker\Api\Normalizer\MountPointNormalizer::class,
        
        \Docker\Api\Model\DeviceMapping::class => \Docker\Api\Normalizer\DeviceMappingNormalizer::class,
        
        \Docker\Api\Model\DeviceRequest::class => \Docker\Api\Normalizer\DeviceRequestNormalizer::class,
        
        \Docker\Api\Model\ThrottleDevice::class => \Docker\Api\Normalizer\ThrottleDeviceNormalizer::class,
        
        \Docker\Api\Model\Mount::class => \Docker\Api\Normalizer\MountNormalizer::class,
        
        \Docker\Api\Model\MountBindOptions::class => \Docker\Api\Normalizer\MountBindOptionsNormalizer::class,
        
        \Docker\Api\Model\MountVolumeOptions::class => \Docker\Api\Normalizer\MountVolumeOptionsNormalizer::class,
        
        \Docker\Api\Model\MountVolumeOptionsDriverConfig::class => \Docker\Api\Normalizer\MountVolumeOptionsDriverConfigNormalizer::class,
        
        \Docker\Api\Model\MountTmpfsOptions::class => \Docker\Api\Normalizer\MountTmpfsOptionsNormalizer::class,
        
        \Docker\Api\Model\RestartPolicy::class => \Docker\Api\Normalizer\RestartPolicyNormalizer::class,
        
        \Docker\Api\Model\Resources::class => \Docker\Api\Normalizer\ResourcesNormalizer::class,
        
        \Docker\Api\Model\ResourcesBlkioWeightDeviceItem::class => \Docker\Api\Normalizer\ResourcesBlkioWeightDeviceItemNormalizer::class,
        
        \Docker\Api\Model\ResourcesUlimitsItem::class => \Docker\Api\Normalizer\ResourcesUlimitsItemNormalizer::class,
        
        \Docker\Api\Model\Limit::class => \Docker\Api\Normalizer\LimitNormalizer::class,
        
        \Docker\Api\Model\ResourceObject::class => \Docker\Api\Normalizer\ResourceObjectNormalizer::class,
        
        \Docker\Api\Model\GenericResourcesItem::class => \Docker\Api\Normalizer\GenericResourcesItemNormalizer::class,
        
        \Docker\Api\Model\GenericResourcesItemNamedResourceSpec::class => \Docker\Api\Normalizer\GenericResourcesItemNamedResourceSpecNormalizer::class,
        
        \Docker\Api\Model\GenericResourcesItemDiscreteResourceSpec::class => \Docker\Api\Normalizer\GenericResourcesItemDiscreteResourceSpecNormalizer::class,
        
        \Docker\Api\Model\HealthConfig::class => \Docker\Api\Normalizer\HealthConfigNormalizer::class,
        
        \Docker\Api\Model\Health::class => \Docker\Api\Normalizer\HealthNormalizer::class,
        
        \Docker\Api\Model\HealthcheckResult::class => \Docker\Api\Normalizer\HealthcheckResultNormalizer::class,
        
        \Docker\Api\Model\HostConfig::class => \Docker\Api\Normalizer\HostConfigNormalizer::class,
        
        \Docker\Api\Model\HostConfigLogConfig::class => \Docker\Api\Normalizer\HostConfigLogConfigNormalizer::class,
        
        \Docker\Api\Model\ContainerConfig::class => \Docker\Api\Normalizer\ContainerConfigNormalizer::class,
        
        \Docker\Api\Model\NetworkingConfig::class => \Docker\Api\Normalizer\NetworkingConfigNormalizer::class,
        
        \Docker\Api\Model\NetworkSettings::class => \Docker\Api\Normalizer\NetworkSettingsNormalizer::class,
        
        \Docker\Api\Model\Address::class => \Docker\Api\Normalizer\AddressNormalizer::class,
        
        \Docker\Api\Model\PortBinding::class => \Docker\Api\Normalizer\PortBindingNormalizer::class,
        
        \Docker\Api\Model\GraphDriverData::class => \Docker\Api\Normalizer\GraphDriverDataNormalizer::class,
        
        \Docker\Api\Model\Image::class => \Docker\Api\Normalizer\ImageNormalizer::class,
        
        \Docker\Api\Model\ImageRootFS::class => \Docker\Api\Normalizer\ImageRootFSNormalizer::class,
        
        \Docker\Api\Model\ImageMetadata::class => \Docker\Api\Normalizer\ImageMetadataNormalizer::class,
        
        \Docker\Api\Model\ImageSummary::class => \Docker\Api\Normalizer\ImageSummaryNormalizer::class,
        
        \Docker\Api\Model\AuthConfig::class => \Docker\Api\Normalizer\AuthConfigNormalizer::class,
        
        \Docker\Api\Model\ProcessConfig::class => \Docker\Api\Normalizer\ProcessConfigNormalizer::class,
        
        \Docker\Api\Model\Volume::class => \Docker\Api\Normalizer\VolumeNormalizer::class,
        
        \Docker\Api\Model\VolumeUsageData::class => \Docker\Api\Normalizer\VolumeUsageDataNormalizer::class,
        
        \Docker\Api\Model\Network::class => \Docker\Api\Normalizer\NetworkNormalizer::class,
        
        \Docker\Api\Model\IPAM::class => \Docker\Api\Normalizer\IPAMNormalizer::class,
        
        \Docker\Api\Model\NetworkContainer::class => \Docker\Api\Normalizer\NetworkContainerNormalizer::class,
        
        \Docker\Api\Model\BuildInfo::class => \Docker\Api\Normalizer\BuildInfoNormalizer::class,
        
        \Docker\Api\Model\BuildCache::class => \Docker\Api\Normalizer\BuildCacheNormalizer::class,
        
        \Docker\Api\Model\ImageID::class => \Docker\Api\Normalizer\ImageIDNormalizer::class,
        
        \Docker\Api\Model\CreateImageInfo::class => \Docker\Api\Normalizer\CreateImageInfoNormalizer::class,
        
        \Docker\Api\Model\PushImageInfo::class => \Docker\Api\Normalizer\PushImageInfoNormalizer::class,
        
        \Docker\Api\Model\ErrorDetail::class => \Docker\Api\Normalizer\ErrorDetailNormalizer::class,
        
        \Docker\Api\Model\ProgressDetail::class => \Docker\Api\Normalizer\ProgressDetailNormalizer::class,
        
        \Docker\Api\Model\ErrorResponse::class => \Docker\Api\Normalizer\ErrorResponseNormalizer::class,
        
        \Docker\Api\Model\IdResponse::class => \Docker\Api\Normalizer\IdResponseNormalizer::class,
        
        \Docker\Api\Model\EndpointSettings::class => \Docker\Api\Normalizer\EndpointSettingsNormalizer::class,
        
        \Docker\Api\Model\EndpointIPAMConfig::class => \Docker\Api\Normalizer\EndpointIPAMConfigNormalizer::class,
        
        \Docker\Api\Model\PluginMount::class => \Docker\Api\Normalizer\PluginMountNormalizer::class,
        
        \Docker\Api\Model\PluginDevice::class => \Docker\Api\Normalizer\PluginDeviceNormalizer::class,
        
        \Docker\Api\Model\PluginEnv::class => \Docker\Api\Normalizer\PluginEnvNormalizer::class,
        
        \Docker\Api\Model\PluginInterfaceType::class => \Docker\Api\Normalizer\PluginInterfaceTypeNormalizer::class,
        
        \Docker\Api\Model\PluginPrivilege::class => \Docker\Api\Normalizer\PluginPrivilegeNormalizer::class,
        
        \Docker\Api\Model\Plugin::class => \Docker\Api\Normalizer\PluginNormalizer::class,
        
        \Docker\Api\Model\PluginSettings::class => \Docker\Api\Normalizer\PluginSettingsNormalizer::class,
        
        \Docker\Api\Model\PluginConfig::class => \Docker\Api\Normalizer\PluginConfigNormalizer::class,
        
        \Docker\Api\Model\PluginConfigInterface::class => \Docker\Api\Normalizer\PluginConfigInterfaceNormalizer::class,
        
        \Docker\Api\Model\PluginConfigUser::class => \Docker\Api\Normalizer\PluginConfigUserNormalizer::class,
        
        \Docker\Api\Model\PluginConfigNetwork::class => \Docker\Api\Normalizer\PluginConfigNetworkNormalizer::class,
        
        \Docker\Api\Model\PluginConfigLinux::class => \Docker\Api\Normalizer\PluginConfigLinuxNormalizer::class,
        
        \Docker\Api\Model\PluginConfigArgs::class => \Docker\Api\Normalizer\PluginConfigArgsNormalizer::class,
        
        \Docker\Api\Model\PluginConfigRootfs::class => \Docker\Api\Normalizer\PluginConfigRootfsNormalizer::class,
        
        \Docker\Api\Model\ObjectVersion::class => \Docker\Api\Normalizer\ObjectVersionNormalizer::class,
        
        \Docker\Api\Model\NodeSpec::class => \Docker\Api\Normalizer\NodeSpecNormalizer::class,
        
        \Docker\Api\Model\Node::class => \Docker\Api\Normalizer\NodeNormalizer::class,
        
        \Docker\Api\Model\NodeDescription::class => \Docker\Api\Normalizer\NodeDescriptionNormalizer::class,
        
        \Docker\Api\Model\Platform::class => \Docker\Api\Normalizer\PlatformNormalizer::class,
        
        \Docker\Api\Model\EngineDescription::class => \Docker\Api\Normalizer\EngineDescriptionNormalizer::class,
        
        \Docker\Api\Model\EngineDescriptionPluginsItem::class => \Docker\Api\Normalizer\EngineDescriptionPluginsItemNormalizer::class,
        
        \Docker\Api\Model\TLSInfo::class => \Docker\Api\Normalizer\TLSInfoNormalizer::class,
        
        \Docker\Api\Model\NodeStatus::class => \Docker\Api\Normalizer\NodeStatusNormalizer::class,
        
        \Docker\Api\Model\ManagerStatus::class => \Docker\Api\Normalizer\ManagerStatusNormalizer::class,
        
        \Docker\Api\Model\SwarmSpec::class => \Docker\Api\Normalizer\SwarmSpecNormalizer::class,
        
        \Docker\Api\Model\SwarmSpecOrchestration::class => \Docker\Api\Normalizer\SwarmSpecOrchestrationNormalizer::class,
        
        \Docker\Api\Model\SwarmSpecRaft::class => \Docker\Api\Normalizer\SwarmSpecRaftNormalizer::class,
        
        \Docker\Api\Model\SwarmSpecDispatcher::class => \Docker\Api\Normalizer\SwarmSpecDispatcherNormalizer::class,
        
        \Docker\Api\Model\SwarmSpecCAConfig::class => \Docker\Api\Normalizer\SwarmSpecCAConfigNormalizer::class,
        
        \Docker\Api\Model\SwarmSpecCAConfigExternalCAsItem::class => \Docker\Api\Normalizer\SwarmSpecCAConfigExternalCAsItemNormalizer::class,
        
        \Docker\Api\Model\SwarmSpecEncryptionConfig::class => \Docker\Api\Normalizer\SwarmSpecEncryptionConfigNormalizer::class,
        
        \Docker\Api\Model\SwarmSpecTaskDefaults::class => \Docker\Api\Normalizer\SwarmSpecTaskDefaultsNormalizer::class,
        
        \Docker\Api\Model\SwarmSpecTaskDefaultsLogDriver::class => \Docker\Api\Normalizer\SwarmSpecTaskDefaultsLogDriverNormalizer::class,
        
        \Docker\Api\Model\ClusterInfo::class => \Docker\Api\Normalizer\ClusterInfoNormalizer::class,
        
        \Docker\Api\Model\JoinTokens::class => \Docker\Api\Normalizer\JoinTokensNormalizer::class,
        
        \Docker\Api\Model\Swarm::class => \Docker\Api\Normalizer\SwarmNormalizer::class,
        
        \Docker\Api\Model\TaskSpec::class => \Docker\Api\Normalizer\TaskSpecNormalizer::class,
        
        \Docker\Api\Model\TaskSpecPluginSpec::class => \Docker\Api\Normalizer\TaskSpecPluginSpecNormalizer::class,
        
        \Docker\Api\Model\TaskSpecContainerSpec::class => \Docker\Api\Normalizer\TaskSpecContainerSpecNormalizer::class,
        
        \Docker\Api\Model\TaskSpecContainerSpecPrivileges::class => \Docker\Api\Normalizer\TaskSpecContainerSpecPrivilegesNormalizer::class,
        
        \Docker\Api\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => \Docker\Api\Normalizer\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class,
        
        \Docker\Api\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => \Docker\Api\Normalizer\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class,
        
        \Docker\Api\Model\TaskSpecContainerSpecDNSConfig::class => \Docker\Api\Normalizer\TaskSpecContainerSpecDNSConfigNormalizer::class,
        
        \Docker\Api\Model\TaskSpecContainerSpecSecretsItem::class => \Docker\Api\Normalizer\TaskSpecContainerSpecSecretsItemNormalizer::class,
        
        \Docker\Api\Model\TaskSpecContainerSpecSecretsItemFile::class => \Docker\Api\Normalizer\TaskSpecContainerSpecSecretsItemFileNormalizer::class,
        
        \Docker\Api\Model\TaskSpecContainerSpecConfigsItem::class => \Docker\Api\Normalizer\TaskSpecContainerSpecConfigsItemNormalizer::class,
        
        \Docker\Api\Model\TaskSpecContainerSpecConfigsItemFile::class => \Docker\Api\Normalizer\TaskSpecContainerSpecConfigsItemFileNormalizer::class,
        
        \Docker\Api\Model\TaskSpecContainerSpecUlimitsItem::class => \Docker\Api\Normalizer\TaskSpecContainerSpecUlimitsItemNormalizer::class,
        
        \Docker\Api\Model\TaskSpecNetworkAttachmentSpec::class => \Docker\Api\Normalizer\TaskSpecNetworkAttachmentSpecNormalizer::class,
        
        \Docker\Api\Model\TaskSpecResources::class => \Docker\Api\Normalizer\TaskSpecResourcesNormalizer::class,
        
        \Docker\Api\Model\TaskSpecRestartPolicy::class => \Docker\Api\Normalizer\TaskSpecRestartPolicyNormalizer::class,
        
        \Docker\Api\Model\TaskSpecPlacement::class => \Docker\Api\Normalizer\TaskSpecPlacementNormalizer::class,
        
        \Docker\Api\Model\TaskSpecPlacementPreferencesItem::class => \Docker\Api\Normalizer\TaskSpecPlacementPreferencesItemNormalizer::class,
        
        \Docker\Api\Model\TaskSpecPlacementPreferencesItemSpread::class => \Docker\Api\Normalizer\TaskSpecPlacementPreferencesItemSpreadNormalizer::class,
        
        \Docker\Api\Model\TaskSpecLogDriver::class => \Docker\Api\Normalizer\TaskSpecLogDriverNormalizer::class,
        
        \Docker\Api\Model\Task::class => \Docker\Api\Normalizer\TaskNormalizer::class,
        
        \Docker\Api\Model\TaskStatus::class => \Docker\Api\Normalizer\TaskStatusNormalizer::class,
        
        \Docker\Api\Model\TaskStatusContainerStatus::class => \Docker\Api\Normalizer\TaskStatusContainerStatusNormalizer::class,
        
        \Docker\Api\Model\ServiceSpec::class => \Docker\Api\Normalizer\ServiceSpecNormalizer::class,
        
        \Docker\Api\Model\ServiceSpecMode::class => \Docker\Api\Normalizer\ServiceSpecModeNormalizer::class,
        
        \Docker\Api\Model\ServiceSpecModeReplicated::class => \Docker\Api\Normalizer\ServiceSpecModeReplicatedNormalizer::class,
        
        \Docker\Api\Model\ServiceSpecModeReplicatedJob::class => \Docker\Api\Normalizer\ServiceSpecModeReplicatedJobNormalizer::class,
        
        \Docker\Api\Model\ServiceSpecUpdateConfig::class => \Docker\Api\Normalizer\ServiceSpecUpdateConfigNormalizer::class,
        
        \Docker\Api\Model\ServiceSpecRollbackConfig::class => \Docker\Api\Normalizer\ServiceSpecRollbackConfigNormalizer::class,
        
        \Docker\Api\Model\EndpointPortConfig::class => \Docker\Api\Normalizer\EndpointPortConfigNormalizer::class,
        
        \Docker\Api\Model\EndpointSpec::class => \Docker\Api\Normalizer\EndpointSpecNormalizer::class,
        
        \Docker\Api\Model\Service::class => \Docker\Api\Normalizer\ServiceNormalizer::class,
        
        \Docker\Api\Model\ServiceEndpoint::class => \Docker\Api\Normalizer\ServiceEndpointNormalizer::class,
        
        \Docker\Api\Model\ServiceEndpointVirtualIPsItem::class => \Docker\Api\Normalizer\ServiceEndpointVirtualIPsItemNormalizer::class,
        
        \Docker\Api\Model\ServiceUpdateStatus::class => \Docker\Api\Normalizer\ServiceUpdateStatusNormalizer::class,
        
        \Docker\Api\Model\ServiceServiceStatus::class => \Docker\Api\Normalizer\ServiceServiceStatusNormalizer::class,
        
        \Docker\Api\Model\ServiceJobStatus::class => \Docker\Api\Normalizer\ServiceJobStatusNormalizer::class,
        
        \Docker\Api\Model\ImageDeleteResponseItem::class => \Docker\Api\Normalizer\ImageDeleteResponseItemNormalizer::class,
        
        \Docker\Api\Model\ServiceUpdateResponse::class => \Docker\Api\Normalizer\ServiceUpdateResponseNormalizer::class,
        
        \Docker\Api\Model\ContainerSummary::class => \Docker\Api\Normalizer\ContainerSummaryNormalizer::class,
        
        \Docker\Api\Model\ContainerSummaryHostConfig::class => \Docker\Api\Normalizer\ContainerSummaryHostConfigNormalizer::class,
        
        \Docker\Api\Model\ContainerSummaryNetworkSettings::class => \Docker\Api\Normalizer\ContainerSummaryNetworkSettingsNormalizer::class,
        
        \Docker\Api\Model\Driver::class => \Docker\Api\Normalizer\DriverNormalizer::class,
        
        \Docker\Api\Model\SecretSpec::class => \Docker\Api\Normalizer\SecretSpecNormalizer::class,
        
        \Docker\Api\Model\Secret::class => \Docker\Api\Normalizer\SecretNormalizer::class,
        
        \Docker\Api\Model\ConfigSpec::class => \Docker\Api\Normalizer\ConfigSpecNormalizer::class,
        
        \Docker\Api\Model\Config::class => \Docker\Api\Normalizer\ConfigNormalizer::class,
        
        \Docker\Api\Model\ContainerState::class => \Docker\Api\Normalizer\ContainerStateNormalizer::class,
        
        \Docker\Api\Model\SystemVersion::class => \Docker\Api\Normalizer\SystemVersionNormalizer::class,
        
        \Docker\Api\Model\SystemVersionPlatform::class => \Docker\Api\Normalizer\SystemVersionPlatformNormalizer::class,
        
        \Docker\Api\Model\SystemVersionComponentsItem::class => \Docker\Api\Normalizer\SystemVersionComponentsItemNormalizer::class,
        
        \Docker\Api\Model\SystemInfo::class => \Docker\Api\Normalizer\SystemInfoNormalizer::class,
        
        \Docker\Api\Model\SystemInfoDefaultAddressPoolsItem::class => \Docker\Api\Normalizer\SystemInfoDefaultAddressPoolsItemNormalizer::class,
        
        \Docker\Api\Model\PluginsInfo::class => \Docker\Api\Normalizer\PluginsInfoNormalizer::class,
        
        \Docker\Api\Model\RegistryServiceConfig::class => \Docker\Api\Normalizer\RegistryServiceConfigNormalizer::class,
        
        \Docker\Api\Model\IndexInfo::class => \Docker\Api\Normalizer\IndexInfoNormalizer::class,
        
        \Docker\Api\Model\Runtime::class => \Docker\Api\Normalizer\RuntimeNormalizer::class,
        
        \Docker\Api\Model\Commit::class => \Docker\Api\Normalizer\CommitNormalizer::class,
        
        \Docker\Api\Model\SwarmInfo::class => \Docker\Api\Normalizer\SwarmInfoNormalizer::class,
        
        \Docker\Api\Model\PeerNode::class => \Docker\Api\Normalizer\PeerNodeNormalizer::class,
        
        \Docker\Api\Model\NetworkAttachmentConfig::class => \Docker\Api\Normalizer\NetworkAttachmentConfigNormalizer::class,
        
        \Docker\Api\Model\EventActor::class => \Docker\Api\Normalizer\EventActorNormalizer::class,
        
        \Docker\Api\Model\EventMessage::class => \Docker\Api\Normalizer\EventMessageNormalizer::class,
        
        \Docker\Api\Model\OCIDescriptor::class => \Docker\Api\Normalizer\OCIDescriptorNormalizer::class,
        
        \Docker\Api\Model\OCIPlatform::class => \Docker\Api\Normalizer\OCIPlatformNormalizer::class,
        
        \Docker\Api\Model\DistributionInspect::class => \Docker\Api\Normalizer\DistributionInspectNormalizer::class,
        
        \Docker\Api\Model\ContainersCreatePostBody::class => \Docker\Api\Normalizer\ContainersCreatePostBodyNormalizer::class,
        
        \Docker\Api\Model\ContainersCreatePostResponse201::class => \Docker\Api\Normalizer\ContainersCreatePostResponse201Normalizer::class,
        
        \Docker\Api\Model\ContainersIdJsonGetResponse200::class => \Docker\Api\Normalizer\ContainersIdJsonGetResponse200Normalizer::class,
        
        \Docker\Api\Model\ContainersIdTopGetResponse200::class => \Docker\Api\Normalizer\ContainersIdTopGetResponse200Normalizer::class,
        
        \Docker\Api\Model\ContainersIdChangesGetResponse200Item::class => \Docker\Api\Normalizer\ContainersIdChangesGetResponse200ItemNormalizer::class,
        
        \Docker\Api\Model\ContainersIdUpdatePostBody::class => \Docker\Api\Normalizer\ContainersIdUpdatePostBodyNormalizer::class,
        
        \Docker\Api\Model\ContainersIdUpdatePostResponse200::class => \Docker\Api\Normalizer\ContainersIdUpdatePostResponse200Normalizer::class,
        
        \Docker\Api\Model\ContainersIdWaitPostResponse200::class => \Docker\Api\Normalizer\ContainersIdWaitPostResponse200Normalizer::class,
        
        \Docker\Api\Model\ContainersIdWaitPostResponse200Error::class => \Docker\Api\Normalizer\ContainersIdWaitPostResponse200ErrorNormalizer::class,
        
        \Docker\Api\Model\ContainersIdArchiveGetResponse400::class => \Docker\Api\Normalizer\ContainersIdArchiveGetResponse400Normalizer::class,
        
        \Docker\Api\Model\ContainersIdArchiveHeadResponse400::class => \Docker\Api\Normalizer\ContainersIdArchiveHeadResponse400Normalizer::class,
        
        \Docker\Api\Model\ContainersPrunePostResponse200::class => \Docker\Api\Normalizer\ContainersPrunePostResponse200Normalizer::class,
        
        \Docker\Api\Model\BuildPrunePostResponse200::class => \Docker\Api\Normalizer\BuildPrunePostResponse200Normalizer::class,
        
        \Docker\Api\Model\ImagesNameHistoryGetResponse200Item::class => \Docker\Api\Normalizer\ImagesNameHistoryGetResponse200ItemNormalizer::class,
        
        \Docker\Api\Model\ImagesSearchGetResponse200Item::class => \Docker\Api\Normalizer\ImagesSearchGetResponse200ItemNormalizer::class,
        
        \Docker\Api\Model\ImagesPrunePostResponse200::class => \Docker\Api\Normalizer\ImagesPrunePostResponse200Normalizer::class,
        
        \Docker\Api\Model\AuthPostResponse200::class => \Docker\Api\Normalizer\AuthPostResponse200Normalizer::class,
        
        \Docker\Api\Model\SystemDfGetResponse200::class => \Docker\Api\Normalizer\SystemDfGetResponse200Normalizer::class,
        
        \Docker\Api\Model\ContainersIdExecPostBody::class => \Docker\Api\Normalizer\ContainersIdExecPostBodyNormalizer::class,
        
        \Docker\Api\Model\ExecIdStartPostBody::class => \Docker\Api\Normalizer\ExecIdStartPostBodyNormalizer::class,
        
        \Docker\Api\Model\ExecIdJsonGetResponse200::class => \Docker\Api\Normalizer\ExecIdJsonGetResponse200Normalizer::class,
        
        \Docker\Api\Model\VolumesGetResponse200::class => \Docker\Api\Normalizer\VolumesGetResponse200Normalizer::class,
        
        \Docker\Api\Model\VolumesCreatePostBody::class => \Docker\Api\Normalizer\VolumesCreatePostBodyNormalizer::class,
        
        \Docker\Api\Model\VolumesPrunePostResponse200::class => \Docker\Api\Normalizer\VolumesPrunePostResponse200Normalizer::class,
        
        \Docker\Api\Model\NetworksCreatePostBody::class => \Docker\Api\Normalizer\NetworksCreatePostBodyNormalizer::class,
        
        \Docker\Api\Model\NetworksCreatePostResponse201::class => \Docker\Api\Normalizer\NetworksCreatePostResponse201Normalizer::class,
        
        \Docker\Api\Model\NetworksIdConnectPostBody::class => \Docker\Api\Normalizer\NetworksIdConnectPostBodyNormalizer::class,
        
        \Docker\Api\Model\NetworksIdDisconnectPostBody::class => \Docker\Api\Normalizer\NetworksIdDisconnectPostBodyNormalizer::class,
        
        \Docker\Api\Model\NetworksPrunePostResponse200::class => \Docker\Api\Normalizer\NetworksPrunePostResponse200Normalizer::class,
        
        \Docker\Api\Model\SwarmInitPostBody::class => \Docker\Api\Normalizer\SwarmInitPostBodyNormalizer::class,
        
        \Docker\Api\Model\SwarmJoinPostBody::class => \Docker\Api\Normalizer\SwarmJoinPostBodyNormalizer::class,
        
        \Docker\Api\Model\SwarmUnlockkeyGetResponse200::class => \Docker\Api\Normalizer\SwarmUnlockkeyGetResponse200Normalizer::class,
        
        \Docker\Api\Model\SwarmUnlockPostBody::class => \Docker\Api\Normalizer\SwarmUnlockPostBodyNormalizer::class,
        
        \Docker\Api\Model\ServicesCreatePostBody::class => \Docker\Api\Normalizer\ServicesCreatePostBodyNormalizer::class,
        
        \Docker\Api\Model\ServicesCreatePostResponse201::class => \Docker\Api\Normalizer\ServicesCreatePostResponse201Normalizer::class,
        
        \Docker\Api\Model\ServicesIdUpdatePostBody::class => \Docker\Api\Normalizer\ServicesIdUpdatePostBodyNormalizer::class,
        
        \Docker\Api\Model\SecretsCreatePostBody::class => \Docker\Api\Normalizer\SecretsCreatePostBodyNormalizer::class,
        
        \Docker\Api\Model\ConfigsCreatePostBody::class => \Docker\Api\Normalizer\ConfigsCreatePostBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Docker\Api\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Docker\Api\Model\Port::class => false,
            \Docker\Api\Model\MountPoint::class => false,
            \Docker\Api\Model\DeviceMapping::class => false,
            \Docker\Api\Model\DeviceRequest::class => false,
            \Docker\Api\Model\ThrottleDevice::class => false,
            \Docker\Api\Model\Mount::class => false,
            \Docker\Api\Model\MountBindOptions::class => false,
            \Docker\Api\Model\MountVolumeOptions::class => false,
            \Docker\Api\Model\MountVolumeOptionsDriverConfig::class => false,
            \Docker\Api\Model\MountTmpfsOptions::class => false,
            \Docker\Api\Model\RestartPolicy::class => false,
            \Docker\Api\Model\Resources::class => false,
            \Docker\Api\Model\ResourcesBlkioWeightDeviceItem::class => false,
            \Docker\Api\Model\ResourcesUlimitsItem::class => false,
            \Docker\Api\Model\Limit::class => false,
            \Docker\Api\Model\ResourceObject::class => false,
            \Docker\Api\Model\GenericResourcesItem::class => false,
            \Docker\Api\Model\GenericResourcesItemNamedResourceSpec::class => false,
            \Docker\Api\Model\GenericResourcesItemDiscreteResourceSpec::class => false,
            \Docker\Api\Model\HealthConfig::class => false,
            \Docker\Api\Model\Health::class => false,
            \Docker\Api\Model\HealthcheckResult::class => false,
            \Docker\Api\Model\HostConfig::class => false,
            \Docker\Api\Model\HostConfigLogConfig::class => false,
            \Docker\Api\Model\ContainerConfig::class => false,
            \Docker\Api\Model\NetworkingConfig::class => false,
            \Docker\Api\Model\NetworkSettings::class => false,
            \Docker\Api\Model\Address::class => false,
            \Docker\Api\Model\PortBinding::class => false,
            \Docker\Api\Model\GraphDriverData::class => false,
            \Docker\Api\Model\Image::class => false,
            \Docker\Api\Model\ImageRootFS::class => false,
            \Docker\Api\Model\ImageMetadata::class => false,
            \Docker\Api\Model\ImageSummary::class => false,
            \Docker\Api\Model\AuthConfig::class => false,
            \Docker\Api\Model\ProcessConfig::class => false,
            \Docker\Api\Model\Volume::class => false,
            \Docker\Api\Model\VolumeUsageData::class => false,
            \Docker\Api\Model\Network::class => false,
            \Docker\Api\Model\IPAM::class => false,
            \Docker\Api\Model\NetworkContainer::class => false,
            \Docker\Api\Model\BuildInfo::class => false,
            \Docker\Api\Model\BuildCache::class => false,
            \Docker\Api\Model\ImageID::class => false,
            \Docker\Api\Model\CreateImageInfo::class => false,
            \Docker\Api\Model\PushImageInfo::class => false,
            \Docker\Api\Model\ErrorDetail::class => false,
            \Docker\Api\Model\ProgressDetail::class => false,
            \Docker\Api\Model\ErrorResponse::class => false,
            \Docker\Api\Model\IdResponse::class => false,
            \Docker\Api\Model\EndpointSettings::class => false,
            \Docker\Api\Model\EndpointIPAMConfig::class => false,
            \Docker\Api\Model\PluginMount::class => false,
            \Docker\Api\Model\PluginDevice::class => false,
            \Docker\Api\Model\PluginEnv::class => false,
            \Docker\Api\Model\PluginInterfaceType::class => false,
            \Docker\Api\Model\PluginPrivilege::class => false,
            \Docker\Api\Model\Plugin::class => false,
            \Docker\Api\Model\PluginSettings::class => false,
            \Docker\Api\Model\PluginConfig::class => false,
            \Docker\Api\Model\PluginConfigInterface::class => false,
            \Docker\Api\Model\PluginConfigUser::class => false,
            \Docker\Api\Model\PluginConfigNetwork::class => false,
            \Docker\Api\Model\PluginConfigLinux::class => false,
            \Docker\Api\Model\PluginConfigArgs::class => false,
            \Docker\Api\Model\PluginConfigRootfs::class => false,
            \Docker\Api\Model\ObjectVersion::class => false,
            \Docker\Api\Model\NodeSpec::class => false,
            \Docker\Api\Model\Node::class => false,
            \Docker\Api\Model\NodeDescription::class => false,
            \Docker\Api\Model\Platform::class => false,
            \Docker\Api\Model\EngineDescription::class => false,
            \Docker\Api\Model\EngineDescriptionPluginsItem::class => false,
            \Docker\Api\Model\TLSInfo::class => false,
            \Docker\Api\Model\NodeStatus::class => false,
            \Docker\Api\Model\ManagerStatus::class => false,
            \Docker\Api\Model\SwarmSpec::class => false,
            \Docker\Api\Model\SwarmSpecOrchestration::class => false,
            \Docker\Api\Model\SwarmSpecRaft::class => false,
            \Docker\Api\Model\SwarmSpecDispatcher::class => false,
            \Docker\Api\Model\SwarmSpecCAConfig::class => false,
            \Docker\Api\Model\SwarmSpecCAConfigExternalCAsItem::class => false,
            \Docker\Api\Model\SwarmSpecEncryptionConfig::class => false,
            \Docker\Api\Model\SwarmSpecTaskDefaults::class => false,
            \Docker\Api\Model\SwarmSpecTaskDefaultsLogDriver::class => false,
            \Docker\Api\Model\ClusterInfo::class => false,
            \Docker\Api\Model\JoinTokens::class => false,
            \Docker\Api\Model\Swarm::class => false,
            \Docker\Api\Model\TaskSpec::class => false,
            \Docker\Api\Model\TaskSpecPluginSpec::class => false,
            \Docker\Api\Model\TaskSpecContainerSpec::class => false,
            \Docker\Api\Model\TaskSpecContainerSpecPrivileges::class => false,
            \Docker\Api\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => false,
            \Docker\Api\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false,
            \Docker\Api\Model\TaskSpecContainerSpecDNSConfig::class => false,
            \Docker\Api\Model\TaskSpecContainerSpecSecretsItem::class => false,
            \Docker\Api\Model\TaskSpecContainerSpecSecretsItemFile::class => false,
            \Docker\Api\Model\TaskSpecContainerSpecConfigsItem::class => false,
            \Docker\Api\Model\TaskSpecContainerSpecConfigsItemFile::class => false,
            \Docker\Api\Model\TaskSpecContainerSpecUlimitsItem::class => false,
            \Docker\Api\Model\TaskSpecNetworkAttachmentSpec::class => false,
            \Docker\Api\Model\TaskSpecResources::class => false,
            \Docker\Api\Model\TaskSpecRestartPolicy::class => false,
            \Docker\Api\Model\TaskSpecPlacement::class => false,
            \Docker\Api\Model\TaskSpecPlacementPreferencesItem::class => false,
            \Docker\Api\Model\TaskSpecPlacementPreferencesItemSpread::class => false,
            \Docker\Api\Model\TaskSpecLogDriver::class => false,
            \Docker\Api\Model\Task::class => false,
            \Docker\Api\Model\TaskStatus::class => false,
            \Docker\Api\Model\TaskStatusContainerStatus::class => false,
            \Docker\Api\Model\ServiceSpec::class => false,
            \Docker\Api\Model\ServiceSpecMode::class => false,
            \Docker\Api\Model\ServiceSpecModeReplicated::class => false,
            \Docker\Api\Model\ServiceSpecModeReplicatedJob::class => false,
            \Docker\Api\Model\ServiceSpecUpdateConfig::class => false,
            \Docker\Api\Model\ServiceSpecRollbackConfig::class => false,
            \Docker\Api\Model\EndpointPortConfig::class => false,
            \Docker\Api\Model\EndpointSpec::class => false,
            \Docker\Api\Model\Service::class => false,
            \Docker\Api\Model\ServiceEndpoint::class => false,
            \Docker\Api\Model\ServiceEndpointVirtualIPsItem::class => false,
            \Docker\Api\Model\ServiceUpdateStatus::class => false,
            \Docker\Api\Model\ServiceServiceStatus::class => false,
            \Docker\Api\Model\ServiceJobStatus::class => false,
            \Docker\Api\Model\ImageDeleteResponseItem::class => false,
            \Docker\Api\Model\ServiceUpdateResponse::class => false,
            \Docker\Api\Model\ContainerSummary::class => false,
            \Docker\Api\Model\ContainerSummaryHostConfig::class => false,
            \Docker\Api\Model\ContainerSummaryNetworkSettings::class => false,
            \Docker\Api\Model\Driver::class => false,
            \Docker\Api\Model\SecretSpec::class => false,
            \Docker\Api\Model\Secret::class => false,
            \Docker\Api\Model\ConfigSpec::class => false,
            \Docker\Api\Model\Config::class => false,
            \Docker\Api\Model\ContainerState::class => false,
            \Docker\Api\Model\SystemVersion::class => false,
            \Docker\Api\Model\SystemVersionPlatform::class => false,
            \Docker\Api\Model\SystemVersionComponentsItem::class => false,
            \Docker\Api\Model\SystemInfo::class => false,
            \Docker\Api\Model\SystemInfoDefaultAddressPoolsItem::class => false,
            \Docker\Api\Model\PluginsInfo::class => false,
            \Docker\Api\Model\RegistryServiceConfig::class => false,
            \Docker\Api\Model\IndexInfo::class => false,
            \Docker\Api\Model\Runtime::class => false,
            \Docker\Api\Model\Commit::class => false,
            \Docker\Api\Model\SwarmInfo::class => false,
            \Docker\Api\Model\PeerNode::class => false,
            \Docker\Api\Model\NetworkAttachmentConfig::class => false,
            \Docker\Api\Model\EventActor::class => false,
            \Docker\Api\Model\EventMessage::class => false,
            \Docker\Api\Model\OCIDescriptor::class => false,
            \Docker\Api\Model\OCIPlatform::class => false,
            \Docker\Api\Model\DistributionInspect::class => false,
            \Docker\Api\Model\ContainersCreatePostBody::class => false,
            \Docker\Api\Model\ContainersCreatePostResponse201::class => false,
            \Docker\Api\Model\ContainersIdJsonGetResponse200::class => false,
            \Docker\Api\Model\ContainersIdTopGetResponse200::class => false,
            \Docker\Api\Model\ContainersIdChangesGetResponse200Item::class => false,
            \Docker\Api\Model\ContainersIdUpdatePostBody::class => false,
            \Docker\Api\Model\ContainersIdUpdatePostResponse200::class => false,
            \Docker\Api\Model\ContainersIdWaitPostResponse200::class => false,
            \Docker\Api\Model\ContainersIdWaitPostResponse200Error::class => false,
            \Docker\Api\Model\ContainersIdArchiveGetResponse400::class => false,
            \Docker\Api\Model\ContainersIdArchiveHeadResponse400::class => false,
            \Docker\Api\Model\ContainersPrunePostResponse200::class => false,
            \Docker\Api\Model\BuildPrunePostResponse200::class => false,
            \Docker\Api\Model\ImagesNameHistoryGetResponse200Item::class => false,
            \Docker\Api\Model\ImagesSearchGetResponse200Item::class => false,
            \Docker\Api\Model\ImagesPrunePostResponse200::class => false,
            \Docker\Api\Model\AuthPostResponse200::class => false,
            \Docker\Api\Model\SystemDfGetResponse200::class => false,
            \Docker\Api\Model\ContainersIdExecPostBody::class => false,
            \Docker\Api\Model\ExecIdStartPostBody::class => false,
            \Docker\Api\Model\ExecIdJsonGetResponse200::class => false,
            \Docker\Api\Model\VolumesGetResponse200::class => false,
            \Docker\Api\Model\VolumesCreatePostBody::class => false,
            \Docker\Api\Model\VolumesPrunePostResponse200::class => false,
            \Docker\Api\Model\NetworksCreatePostBody::class => false,
            \Docker\Api\Model\NetworksCreatePostResponse201::class => false,
            \Docker\Api\Model\NetworksIdConnectPostBody::class => false,
            \Docker\Api\Model\NetworksIdDisconnectPostBody::class => false,
            \Docker\Api\Model\NetworksPrunePostResponse200::class => false,
            \Docker\Api\Model\SwarmInitPostBody::class => false,
            \Docker\Api\Model\SwarmJoinPostBody::class => false,
            \Docker\Api\Model\SwarmUnlockkeyGetResponse200::class => false,
            \Docker\Api\Model\SwarmUnlockPostBody::class => false,
            \Docker\Api\Model\ServicesCreatePostBody::class => false,
            \Docker\Api\Model\ServicesCreatePostResponse201::class => false,
            \Docker\Api\Model\ServicesIdUpdatePostBody::class => false,
            \Docker\Api\Model\SecretsCreatePostBody::class => false,
            \Docker\Api\Model\ConfigsCreatePostBody::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}