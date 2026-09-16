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
        $normalizer = match ($normalizerClass) {
            \Docker\Api\Normalizer\PortNormalizer::class => new \Docker\Api\Normalizer\PortNormalizer(),
            \Docker\Api\Normalizer\MountPointNormalizer::class => new \Docker\Api\Normalizer\MountPointNormalizer(),
            \Docker\Api\Normalizer\DeviceMappingNormalizer::class => new \Docker\Api\Normalizer\DeviceMappingNormalizer(),
            \Docker\Api\Normalizer\DeviceRequestNormalizer::class => new \Docker\Api\Normalizer\DeviceRequestNormalizer(),
            \Docker\Api\Normalizer\ThrottleDeviceNormalizer::class => new \Docker\Api\Normalizer\ThrottleDeviceNormalizer(),
            \Docker\Api\Normalizer\MountNormalizer::class => new \Docker\Api\Normalizer\MountNormalizer(),
            \Docker\Api\Normalizer\MountBindOptionsNormalizer::class => new \Docker\Api\Normalizer\MountBindOptionsNormalizer(),
            \Docker\Api\Normalizer\MountVolumeOptionsNormalizer::class => new \Docker\Api\Normalizer\MountVolumeOptionsNormalizer(),
            \Docker\Api\Normalizer\MountVolumeOptionsDriverConfigNormalizer::class => new \Docker\Api\Normalizer\MountVolumeOptionsDriverConfigNormalizer(),
            \Docker\Api\Normalizer\MountTmpfsOptionsNormalizer::class => new \Docker\Api\Normalizer\MountTmpfsOptionsNormalizer(),
            \Docker\Api\Normalizer\RestartPolicyNormalizer::class => new \Docker\Api\Normalizer\RestartPolicyNormalizer(),
            \Docker\Api\Normalizer\ResourcesNormalizer::class => new \Docker\Api\Normalizer\ResourcesNormalizer(),
            \Docker\Api\Normalizer\ResourcesBlkioWeightDeviceItemNormalizer::class => new \Docker\Api\Normalizer\ResourcesBlkioWeightDeviceItemNormalizer(),
            \Docker\Api\Normalizer\ResourcesUlimitsItemNormalizer::class => new \Docker\Api\Normalizer\ResourcesUlimitsItemNormalizer(),
            \Docker\Api\Normalizer\LimitNormalizer::class => new \Docker\Api\Normalizer\LimitNormalizer(),
            \Docker\Api\Normalizer\ResourceObjectNormalizer::class => new \Docker\Api\Normalizer\ResourceObjectNormalizer(),
            \Docker\Api\Normalizer\GenericResourcesItemNormalizer::class => new \Docker\Api\Normalizer\GenericResourcesItemNormalizer(),
            \Docker\Api\Normalizer\GenericResourcesItemNamedResourceSpecNormalizer::class => new \Docker\Api\Normalizer\GenericResourcesItemNamedResourceSpecNormalizer(),
            \Docker\Api\Normalizer\GenericResourcesItemDiscreteResourceSpecNormalizer::class => new \Docker\Api\Normalizer\GenericResourcesItemDiscreteResourceSpecNormalizer(),
            \Docker\Api\Normalizer\HealthConfigNormalizer::class => new \Docker\Api\Normalizer\HealthConfigNormalizer(),
            \Docker\Api\Normalizer\HealthNormalizer::class => new \Docker\Api\Normalizer\HealthNormalizer(),
            \Docker\Api\Normalizer\HealthcheckResultNormalizer::class => new \Docker\Api\Normalizer\HealthcheckResultNormalizer(),
            \Docker\Api\Normalizer\HostConfigNormalizer::class => new \Docker\Api\Normalizer\HostConfigNormalizer(),
            \Docker\Api\Normalizer\HostConfigLogConfigNormalizer::class => new \Docker\Api\Normalizer\HostConfigLogConfigNormalizer(),
            \Docker\Api\Normalizer\ContainerConfigNormalizer::class => new \Docker\Api\Normalizer\ContainerConfigNormalizer(),
            \Docker\Api\Normalizer\NetworkingConfigNormalizer::class => new \Docker\Api\Normalizer\NetworkingConfigNormalizer(),
            \Docker\Api\Normalizer\NetworkSettingsNormalizer::class => new \Docker\Api\Normalizer\NetworkSettingsNormalizer(),
            \Docker\Api\Normalizer\AddressNormalizer::class => new \Docker\Api\Normalizer\AddressNormalizer(),
            \Docker\Api\Normalizer\PortBindingNormalizer::class => new \Docker\Api\Normalizer\PortBindingNormalizer(),
            \Docker\Api\Normalizer\GraphDriverDataNormalizer::class => new \Docker\Api\Normalizer\GraphDriverDataNormalizer(),
            \Docker\Api\Normalizer\ImageNormalizer::class => new \Docker\Api\Normalizer\ImageNormalizer(),
            \Docker\Api\Normalizer\ImageRootFSNormalizer::class => new \Docker\Api\Normalizer\ImageRootFSNormalizer(),
            \Docker\Api\Normalizer\ImageMetadataNormalizer::class => new \Docker\Api\Normalizer\ImageMetadataNormalizer(),
            \Docker\Api\Normalizer\ImageSummaryNormalizer::class => new \Docker\Api\Normalizer\ImageSummaryNormalizer(),
            \Docker\Api\Normalizer\AuthConfigNormalizer::class => new \Docker\Api\Normalizer\AuthConfigNormalizer(),
            \Docker\Api\Normalizer\ProcessConfigNormalizer::class => new \Docker\Api\Normalizer\ProcessConfigNormalizer(),
            \Docker\Api\Normalizer\VolumeNormalizer::class => new \Docker\Api\Normalizer\VolumeNormalizer(),
            \Docker\Api\Normalizer\VolumeUsageDataNormalizer::class => new \Docker\Api\Normalizer\VolumeUsageDataNormalizer(),
            \Docker\Api\Normalizer\NetworkNormalizer::class => new \Docker\Api\Normalizer\NetworkNormalizer(),
            \Docker\Api\Normalizer\IPAMNormalizer::class => new \Docker\Api\Normalizer\IPAMNormalizer(),
            \Docker\Api\Normalizer\NetworkContainerNormalizer::class => new \Docker\Api\Normalizer\NetworkContainerNormalizer(),
            \Docker\Api\Normalizer\BuildInfoNormalizer::class => new \Docker\Api\Normalizer\BuildInfoNormalizer(),
            \Docker\Api\Normalizer\BuildCacheNormalizer::class => new \Docker\Api\Normalizer\BuildCacheNormalizer(),
            \Docker\Api\Normalizer\ImageIDNormalizer::class => new \Docker\Api\Normalizer\ImageIDNormalizer(),
            \Docker\Api\Normalizer\CreateImageInfoNormalizer::class => new \Docker\Api\Normalizer\CreateImageInfoNormalizer(),
            \Docker\Api\Normalizer\PushImageInfoNormalizer::class => new \Docker\Api\Normalizer\PushImageInfoNormalizer(),
            \Docker\Api\Normalizer\ErrorDetailNormalizer::class => new \Docker\Api\Normalizer\ErrorDetailNormalizer(),
            \Docker\Api\Normalizer\ProgressDetailNormalizer::class => new \Docker\Api\Normalizer\ProgressDetailNormalizer(),
            \Docker\Api\Normalizer\ErrorResponseNormalizer::class => new \Docker\Api\Normalizer\ErrorResponseNormalizer(),
            \Docker\Api\Normalizer\IdResponseNormalizer::class => new \Docker\Api\Normalizer\IdResponseNormalizer(),
            \Docker\Api\Normalizer\EndpointSettingsNormalizer::class => new \Docker\Api\Normalizer\EndpointSettingsNormalizer(),
            \Docker\Api\Normalizer\EndpointIPAMConfigNormalizer::class => new \Docker\Api\Normalizer\EndpointIPAMConfigNormalizer(),
            \Docker\Api\Normalizer\PluginMountNormalizer::class => new \Docker\Api\Normalizer\PluginMountNormalizer(),
            \Docker\Api\Normalizer\PluginDeviceNormalizer::class => new \Docker\Api\Normalizer\PluginDeviceNormalizer(),
            \Docker\Api\Normalizer\PluginEnvNormalizer::class => new \Docker\Api\Normalizer\PluginEnvNormalizer(),
            \Docker\Api\Normalizer\PluginInterfaceTypeNormalizer::class => new \Docker\Api\Normalizer\PluginInterfaceTypeNormalizer(),
            \Docker\Api\Normalizer\PluginPrivilegeNormalizer::class => new \Docker\Api\Normalizer\PluginPrivilegeNormalizer(),
            \Docker\Api\Normalizer\PluginNormalizer::class => new \Docker\Api\Normalizer\PluginNormalizer(),
            \Docker\Api\Normalizer\PluginSettingsNormalizer::class => new \Docker\Api\Normalizer\PluginSettingsNormalizer(),
            \Docker\Api\Normalizer\PluginConfigNormalizer::class => new \Docker\Api\Normalizer\PluginConfigNormalizer(),
            \Docker\Api\Normalizer\PluginConfigInterfaceNormalizer::class => new \Docker\Api\Normalizer\PluginConfigInterfaceNormalizer(),
            \Docker\Api\Normalizer\PluginConfigUserNormalizer::class => new \Docker\Api\Normalizer\PluginConfigUserNormalizer(),
            \Docker\Api\Normalizer\PluginConfigNetworkNormalizer::class => new \Docker\Api\Normalizer\PluginConfigNetworkNormalizer(),
            \Docker\Api\Normalizer\PluginConfigLinuxNormalizer::class => new \Docker\Api\Normalizer\PluginConfigLinuxNormalizer(),
            \Docker\Api\Normalizer\PluginConfigArgsNormalizer::class => new \Docker\Api\Normalizer\PluginConfigArgsNormalizer(),
            \Docker\Api\Normalizer\PluginConfigRootfsNormalizer::class => new \Docker\Api\Normalizer\PluginConfigRootfsNormalizer(),
            \Docker\Api\Normalizer\ObjectVersionNormalizer::class => new \Docker\Api\Normalizer\ObjectVersionNormalizer(),
            \Docker\Api\Normalizer\NodeSpecNormalizer::class => new \Docker\Api\Normalizer\NodeSpecNormalizer(),
            \Docker\Api\Normalizer\NodeNormalizer::class => new \Docker\Api\Normalizer\NodeNormalizer(),
            \Docker\Api\Normalizer\NodeDescriptionNormalizer::class => new \Docker\Api\Normalizer\NodeDescriptionNormalizer(),
            \Docker\Api\Normalizer\PlatformNormalizer::class => new \Docker\Api\Normalizer\PlatformNormalizer(),
            \Docker\Api\Normalizer\EngineDescriptionNormalizer::class => new \Docker\Api\Normalizer\EngineDescriptionNormalizer(),
            \Docker\Api\Normalizer\EngineDescriptionPluginsItemNormalizer::class => new \Docker\Api\Normalizer\EngineDescriptionPluginsItemNormalizer(),
            \Docker\Api\Normalizer\TLSInfoNormalizer::class => new \Docker\Api\Normalizer\TLSInfoNormalizer(),
            \Docker\Api\Normalizer\NodeStatusNormalizer::class => new \Docker\Api\Normalizer\NodeStatusNormalizer(),
            \Docker\Api\Normalizer\ManagerStatusNormalizer::class => new \Docker\Api\Normalizer\ManagerStatusNormalizer(),
            \Docker\Api\Normalizer\SwarmSpecNormalizer::class => new \Docker\Api\Normalizer\SwarmSpecNormalizer(),
            \Docker\Api\Normalizer\SwarmSpecOrchestrationNormalizer::class => new \Docker\Api\Normalizer\SwarmSpecOrchestrationNormalizer(),
            \Docker\Api\Normalizer\SwarmSpecRaftNormalizer::class => new \Docker\Api\Normalizer\SwarmSpecRaftNormalizer(),
            \Docker\Api\Normalizer\SwarmSpecDispatcherNormalizer::class => new \Docker\Api\Normalizer\SwarmSpecDispatcherNormalizer(),
            \Docker\Api\Normalizer\SwarmSpecCAConfigNormalizer::class => new \Docker\Api\Normalizer\SwarmSpecCAConfigNormalizer(),
            \Docker\Api\Normalizer\SwarmSpecCAConfigExternalCAsItemNormalizer::class => new \Docker\Api\Normalizer\SwarmSpecCAConfigExternalCAsItemNormalizer(),
            \Docker\Api\Normalizer\SwarmSpecEncryptionConfigNormalizer::class => new \Docker\Api\Normalizer\SwarmSpecEncryptionConfigNormalizer(),
            \Docker\Api\Normalizer\SwarmSpecTaskDefaultsNormalizer::class => new \Docker\Api\Normalizer\SwarmSpecTaskDefaultsNormalizer(),
            \Docker\Api\Normalizer\SwarmSpecTaskDefaultsLogDriverNormalizer::class => new \Docker\Api\Normalizer\SwarmSpecTaskDefaultsLogDriverNormalizer(),
            \Docker\Api\Normalizer\ClusterInfoNormalizer::class => new \Docker\Api\Normalizer\ClusterInfoNormalizer(),
            \Docker\Api\Normalizer\JoinTokensNormalizer::class => new \Docker\Api\Normalizer\JoinTokensNormalizer(),
            \Docker\Api\Normalizer\SwarmNormalizer::class => new \Docker\Api\Normalizer\SwarmNormalizer(),
            \Docker\Api\Normalizer\TaskSpecNormalizer::class => new \Docker\Api\Normalizer\TaskSpecNormalizer(),
            \Docker\Api\Normalizer\TaskSpecPluginSpecNormalizer::class => new \Docker\Api\Normalizer\TaskSpecPluginSpecNormalizer(),
            \Docker\Api\Normalizer\TaskSpecContainerSpecNormalizer::class => new \Docker\Api\Normalizer\TaskSpecContainerSpecNormalizer(),
            \Docker\Api\Normalizer\TaskSpecContainerSpecPrivilegesNormalizer::class => new \Docker\Api\Normalizer\TaskSpecContainerSpecPrivilegesNormalizer(),
            \Docker\Api\Normalizer\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class => new \Docker\Api\Normalizer\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer(),
            \Docker\Api\Normalizer\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class => new \Docker\Api\Normalizer\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer(),
            \Docker\Api\Normalizer\TaskSpecContainerSpecDNSConfigNormalizer::class => new \Docker\Api\Normalizer\TaskSpecContainerSpecDNSConfigNormalizer(),
            \Docker\Api\Normalizer\TaskSpecContainerSpecSecretsItemNormalizer::class => new \Docker\Api\Normalizer\TaskSpecContainerSpecSecretsItemNormalizer(),
            \Docker\Api\Normalizer\TaskSpecContainerSpecSecretsItemFileNormalizer::class => new \Docker\Api\Normalizer\TaskSpecContainerSpecSecretsItemFileNormalizer(),
            \Docker\Api\Normalizer\TaskSpecContainerSpecConfigsItemNormalizer::class => new \Docker\Api\Normalizer\TaskSpecContainerSpecConfigsItemNormalizer(),
            \Docker\Api\Normalizer\TaskSpecContainerSpecConfigsItemFileNormalizer::class => new \Docker\Api\Normalizer\TaskSpecContainerSpecConfigsItemFileNormalizer(),
            \Docker\Api\Normalizer\TaskSpecContainerSpecUlimitsItemNormalizer::class => new \Docker\Api\Normalizer\TaskSpecContainerSpecUlimitsItemNormalizer(),
            \Docker\Api\Normalizer\TaskSpecNetworkAttachmentSpecNormalizer::class => new \Docker\Api\Normalizer\TaskSpecNetworkAttachmentSpecNormalizer(),
            \Docker\Api\Normalizer\TaskSpecResourcesNormalizer::class => new \Docker\Api\Normalizer\TaskSpecResourcesNormalizer(),
            \Docker\Api\Normalizer\TaskSpecRestartPolicyNormalizer::class => new \Docker\Api\Normalizer\TaskSpecRestartPolicyNormalizer(),
            \Docker\Api\Normalizer\TaskSpecPlacementNormalizer::class => new \Docker\Api\Normalizer\TaskSpecPlacementNormalizer(),
            \Docker\Api\Normalizer\TaskSpecPlacementPreferencesItemNormalizer::class => new \Docker\Api\Normalizer\TaskSpecPlacementPreferencesItemNormalizer(),
            \Docker\Api\Normalizer\TaskSpecPlacementPreferencesItemSpreadNormalizer::class => new \Docker\Api\Normalizer\TaskSpecPlacementPreferencesItemSpreadNormalizer(),
            \Docker\Api\Normalizer\TaskSpecLogDriverNormalizer::class => new \Docker\Api\Normalizer\TaskSpecLogDriverNormalizer(),
            \Docker\Api\Normalizer\TaskNormalizer::class => new \Docker\Api\Normalizer\TaskNormalizer(),
            \Docker\Api\Normalizer\TaskStatusNormalizer::class => new \Docker\Api\Normalizer\TaskStatusNormalizer(),
            \Docker\Api\Normalizer\TaskStatusContainerStatusNormalizer::class => new \Docker\Api\Normalizer\TaskStatusContainerStatusNormalizer(),
            \Docker\Api\Normalizer\ServiceSpecNormalizer::class => new \Docker\Api\Normalizer\ServiceSpecNormalizer(),
            \Docker\Api\Normalizer\ServiceSpecModeNormalizer::class => new \Docker\Api\Normalizer\ServiceSpecModeNormalizer(),
            \Docker\Api\Normalizer\ServiceSpecModeReplicatedNormalizer::class => new \Docker\Api\Normalizer\ServiceSpecModeReplicatedNormalizer(),
            \Docker\Api\Normalizer\ServiceSpecModeReplicatedJobNormalizer::class => new \Docker\Api\Normalizer\ServiceSpecModeReplicatedJobNormalizer(),
            \Docker\Api\Normalizer\ServiceSpecUpdateConfigNormalizer::class => new \Docker\Api\Normalizer\ServiceSpecUpdateConfigNormalizer(),
            \Docker\Api\Normalizer\ServiceSpecRollbackConfigNormalizer::class => new \Docker\Api\Normalizer\ServiceSpecRollbackConfigNormalizer(),
            \Docker\Api\Normalizer\EndpointPortConfigNormalizer::class => new \Docker\Api\Normalizer\EndpointPortConfigNormalizer(),
            \Docker\Api\Normalizer\EndpointSpecNormalizer::class => new \Docker\Api\Normalizer\EndpointSpecNormalizer(),
            \Docker\Api\Normalizer\ServiceNormalizer::class => new \Docker\Api\Normalizer\ServiceNormalizer(),
            \Docker\Api\Normalizer\ServiceEndpointNormalizer::class => new \Docker\Api\Normalizer\ServiceEndpointNormalizer(),
            \Docker\Api\Normalizer\ServiceEndpointVirtualIPsItemNormalizer::class => new \Docker\Api\Normalizer\ServiceEndpointVirtualIPsItemNormalizer(),
            \Docker\Api\Normalizer\ServiceUpdateStatusNormalizer::class => new \Docker\Api\Normalizer\ServiceUpdateStatusNormalizer(),
            \Docker\Api\Normalizer\ServiceServiceStatusNormalizer::class => new \Docker\Api\Normalizer\ServiceServiceStatusNormalizer(),
            \Docker\Api\Normalizer\ServiceJobStatusNormalizer::class => new \Docker\Api\Normalizer\ServiceJobStatusNormalizer(),
            \Docker\Api\Normalizer\ImageDeleteResponseItemNormalizer::class => new \Docker\Api\Normalizer\ImageDeleteResponseItemNormalizer(),
            \Docker\Api\Normalizer\ServiceUpdateResponseNormalizer::class => new \Docker\Api\Normalizer\ServiceUpdateResponseNormalizer(),
            \Docker\Api\Normalizer\ContainerSummaryNormalizer::class => new \Docker\Api\Normalizer\ContainerSummaryNormalizer(),
            \Docker\Api\Normalizer\ContainerSummaryHostConfigNormalizer::class => new \Docker\Api\Normalizer\ContainerSummaryHostConfigNormalizer(),
            \Docker\Api\Normalizer\ContainerSummaryNetworkSettingsNormalizer::class => new \Docker\Api\Normalizer\ContainerSummaryNetworkSettingsNormalizer(),
            \Docker\Api\Normalizer\DriverNormalizer::class => new \Docker\Api\Normalizer\DriverNormalizer(),
            \Docker\Api\Normalizer\SecretSpecNormalizer::class => new \Docker\Api\Normalizer\SecretSpecNormalizer(),
            \Docker\Api\Normalizer\SecretNormalizer::class => new \Docker\Api\Normalizer\SecretNormalizer(),
            \Docker\Api\Normalizer\ConfigSpecNormalizer::class => new \Docker\Api\Normalizer\ConfigSpecNormalizer(),
            \Docker\Api\Normalizer\ConfigNormalizer::class => new \Docker\Api\Normalizer\ConfigNormalizer(),
            \Docker\Api\Normalizer\ContainerStateNormalizer::class => new \Docker\Api\Normalizer\ContainerStateNormalizer(),
            \Docker\Api\Normalizer\SystemVersionNormalizer::class => new \Docker\Api\Normalizer\SystemVersionNormalizer(),
            \Docker\Api\Normalizer\SystemVersionPlatformNormalizer::class => new \Docker\Api\Normalizer\SystemVersionPlatformNormalizer(),
            \Docker\Api\Normalizer\SystemVersionComponentsItemNormalizer::class => new \Docker\Api\Normalizer\SystemVersionComponentsItemNormalizer(),
            \Docker\Api\Normalizer\SystemInfoNormalizer::class => new \Docker\Api\Normalizer\SystemInfoNormalizer(),
            \Docker\Api\Normalizer\SystemInfoDefaultAddressPoolsItemNormalizer::class => new \Docker\Api\Normalizer\SystemInfoDefaultAddressPoolsItemNormalizer(),
            \Docker\Api\Normalizer\PluginsInfoNormalizer::class => new \Docker\Api\Normalizer\PluginsInfoNormalizer(),
            \Docker\Api\Normalizer\RegistryServiceConfigNormalizer::class => new \Docker\Api\Normalizer\RegistryServiceConfigNormalizer(),
            \Docker\Api\Normalizer\IndexInfoNormalizer::class => new \Docker\Api\Normalizer\IndexInfoNormalizer(),
            \Docker\Api\Normalizer\RuntimeNormalizer::class => new \Docker\Api\Normalizer\RuntimeNormalizer(),
            \Docker\Api\Normalizer\CommitNormalizer::class => new \Docker\Api\Normalizer\CommitNormalizer(),
            \Docker\Api\Normalizer\SwarmInfoNormalizer::class => new \Docker\Api\Normalizer\SwarmInfoNormalizer(),
            \Docker\Api\Normalizer\PeerNodeNormalizer::class => new \Docker\Api\Normalizer\PeerNodeNormalizer(),
            \Docker\Api\Normalizer\NetworkAttachmentConfigNormalizer::class => new \Docker\Api\Normalizer\NetworkAttachmentConfigNormalizer(),
            \Docker\Api\Normalizer\EventActorNormalizer::class => new \Docker\Api\Normalizer\EventActorNormalizer(),
            \Docker\Api\Normalizer\EventMessageNormalizer::class => new \Docker\Api\Normalizer\EventMessageNormalizer(),
            \Docker\Api\Normalizer\OCIDescriptorNormalizer::class => new \Docker\Api\Normalizer\OCIDescriptorNormalizer(),
            \Docker\Api\Normalizer\OCIPlatformNormalizer::class => new \Docker\Api\Normalizer\OCIPlatformNormalizer(),
            \Docker\Api\Normalizer\DistributionInspectNormalizer::class => new \Docker\Api\Normalizer\DistributionInspectNormalizer(),
            \Docker\Api\Normalizer\ContainersCreatePostBodyNormalizer::class => new \Docker\Api\Normalizer\ContainersCreatePostBodyNormalizer(),
            \Docker\Api\Normalizer\ContainersCreatePostResponse201Normalizer::class => new \Docker\Api\Normalizer\ContainersCreatePostResponse201Normalizer(),
            \Docker\Api\Normalizer\ContainersIdJsonGetResponse200Normalizer::class => new \Docker\Api\Normalizer\ContainersIdJsonGetResponse200Normalizer(),
            \Docker\Api\Normalizer\ContainersIdTopGetResponse200Normalizer::class => new \Docker\Api\Normalizer\ContainersIdTopGetResponse200Normalizer(),
            \Docker\Api\Normalizer\ContainersIdChangesGetResponse200ItemNormalizer::class => new \Docker\Api\Normalizer\ContainersIdChangesGetResponse200ItemNormalizer(),
            \Docker\Api\Normalizer\ContainersIdUpdatePostBodyNormalizer::class => new \Docker\Api\Normalizer\ContainersIdUpdatePostBodyNormalizer(),
            \Docker\Api\Normalizer\ContainersIdUpdatePostResponse200Normalizer::class => new \Docker\Api\Normalizer\ContainersIdUpdatePostResponse200Normalizer(),
            \Docker\Api\Normalizer\ContainersIdWaitPostResponse200Normalizer::class => new \Docker\Api\Normalizer\ContainersIdWaitPostResponse200Normalizer(),
            \Docker\Api\Normalizer\ContainersIdWaitPostResponse200ErrorNormalizer::class => new \Docker\Api\Normalizer\ContainersIdWaitPostResponse200ErrorNormalizer(),
            \Docker\Api\Normalizer\ContainersIdArchiveGetResponse400Normalizer::class => new \Docker\Api\Normalizer\ContainersIdArchiveGetResponse400Normalizer(),
            \Docker\Api\Normalizer\ContainersIdArchiveHeadResponse400Normalizer::class => new \Docker\Api\Normalizer\ContainersIdArchiveHeadResponse400Normalizer(),
            \Docker\Api\Normalizer\ContainersPrunePostResponse200Normalizer::class => new \Docker\Api\Normalizer\ContainersPrunePostResponse200Normalizer(),
            \Docker\Api\Normalizer\BuildPrunePostResponse200Normalizer::class => new \Docker\Api\Normalizer\BuildPrunePostResponse200Normalizer(),
            \Docker\Api\Normalizer\ImagesNameHistoryGetResponse200ItemNormalizer::class => new \Docker\Api\Normalizer\ImagesNameHistoryGetResponse200ItemNormalizer(),
            \Docker\Api\Normalizer\ImagesSearchGetResponse200ItemNormalizer::class => new \Docker\Api\Normalizer\ImagesSearchGetResponse200ItemNormalizer(),
            \Docker\Api\Normalizer\ImagesPrunePostResponse200Normalizer::class => new \Docker\Api\Normalizer\ImagesPrunePostResponse200Normalizer(),
            \Docker\Api\Normalizer\AuthPostResponse200Normalizer::class => new \Docker\Api\Normalizer\AuthPostResponse200Normalizer(),
            \Docker\Api\Normalizer\SystemDfGetResponse200Normalizer::class => new \Docker\Api\Normalizer\SystemDfGetResponse200Normalizer(),
            \Docker\Api\Normalizer\ContainersIdExecPostBodyNormalizer::class => new \Docker\Api\Normalizer\ContainersIdExecPostBodyNormalizer(),
            \Docker\Api\Normalizer\ExecIdStartPostBodyNormalizer::class => new \Docker\Api\Normalizer\ExecIdStartPostBodyNormalizer(),
            \Docker\Api\Normalizer\ExecIdJsonGetResponse200Normalizer::class => new \Docker\Api\Normalizer\ExecIdJsonGetResponse200Normalizer(),
            \Docker\Api\Normalizer\VolumesGetResponse200Normalizer::class => new \Docker\Api\Normalizer\VolumesGetResponse200Normalizer(),
            \Docker\Api\Normalizer\VolumesCreatePostBodyNormalizer::class => new \Docker\Api\Normalizer\VolumesCreatePostBodyNormalizer(),
            \Docker\Api\Normalizer\VolumesPrunePostResponse200Normalizer::class => new \Docker\Api\Normalizer\VolumesPrunePostResponse200Normalizer(),
            \Docker\Api\Normalizer\NetworksCreatePostBodyNormalizer::class => new \Docker\Api\Normalizer\NetworksCreatePostBodyNormalizer(),
            \Docker\Api\Normalizer\NetworksCreatePostResponse201Normalizer::class => new \Docker\Api\Normalizer\NetworksCreatePostResponse201Normalizer(),
            \Docker\Api\Normalizer\NetworksIdConnectPostBodyNormalizer::class => new \Docker\Api\Normalizer\NetworksIdConnectPostBodyNormalizer(),
            \Docker\Api\Normalizer\NetworksIdDisconnectPostBodyNormalizer::class => new \Docker\Api\Normalizer\NetworksIdDisconnectPostBodyNormalizer(),
            \Docker\Api\Normalizer\NetworksPrunePostResponse200Normalizer::class => new \Docker\Api\Normalizer\NetworksPrunePostResponse200Normalizer(),
            \Docker\Api\Normalizer\SwarmInitPostBodyNormalizer::class => new \Docker\Api\Normalizer\SwarmInitPostBodyNormalizer(),
            \Docker\Api\Normalizer\SwarmJoinPostBodyNormalizer::class => new \Docker\Api\Normalizer\SwarmJoinPostBodyNormalizer(),
            \Docker\Api\Normalizer\SwarmUnlockkeyGetResponse200Normalizer::class => new \Docker\Api\Normalizer\SwarmUnlockkeyGetResponse200Normalizer(),
            \Docker\Api\Normalizer\SwarmUnlockPostBodyNormalizer::class => new \Docker\Api\Normalizer\SwarmUnlockPostBodyNormalizer(),
            \Docker\Api\Normalizer\ServicesCreatePostBodyNormalizer::class => new \Docker\Api\Normalizer\ServicesCreatePostBodyNormalizer(),
            \Docker\Api\Normalizer\ServicesCreatePostResponse201Normalizer::class => new \Docker\Api\Normalizer\ServicesCreatePostResponse201Normalizer(),
            \Docker\Api\Normalizer\ServicesIdUpdatePostBodyNormalizer::class => new \Docker\Api\Normalizer\ServicesIdUpdatePostBodyNormalizer(),
            \Docker\Api\Normalizer\SecretsCreatePostBodyNormalizer::class => new \Docker\Api\Normalizer\SecretsCreatePostBodyNormalizer(),
            \Docker\Api\Normalizer\ConfigsCreatePostBodyNormalizer::class => new \Docker\Api\Normalizer\ConfigsCreatePostBodyNormalizer(),
            \Docker\Api\Runtime\Normalizer\ReferenceNormalizer::class => new \Docker\Api\Runtime\Normalizer\ReferenceNormalizer(),
            default => throw new \InvalidArgumentException('Unknown normalizer class: ' . $normalizerClass),
        };
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface) {
            $normalizer->setNormalizer($this->normalizer);
        }
        if ($normalizer instanceof \Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface) {
            $normalizer->setDenormalizer($this->denormalizer);
        }
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}