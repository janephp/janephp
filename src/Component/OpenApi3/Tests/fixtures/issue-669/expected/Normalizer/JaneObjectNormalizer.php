<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
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
        
        \Jane\Generated\DigitalOcean\Model\Error::class => \Jane\Generated\DigitalOcean\Normalizer\ErrorNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OneClicks::class => \Jane\Generated\DigitalOcean\Normalizer\OneClicksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OneClicksCreate::class => \Jane\Generated\DigitalOcean\Normalizer\OneClicksCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Account::class => \Jane\Generated\DigitalOcean\Normalizer\AccountNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AccountTeam::class => \Jane\Generated\DigitalOcean\Normalizer\AccountTeamNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SshKeys::class => \Jane\Generated\DigitalOcean\Normalizer\SshKeysNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LinkToLastPage::class => \Jane\Generated\DigitalOcean\Normalizer\LinkToLastPageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LinkToNextPage::class => \Jane\Generated\DigitalOcean\Normalizer\LinkToNextPageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ForwardLinks::class => \Jane\Generated\DigitalOcean\Normalizer\ForwardLinksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LinkToFirstPage::class => \Jane\Generated\DigitalOcean\Normalizer\LinkToFirstPageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LinkToPrevPage::class => \Jane\Generated\DigitalOcean\Normalizer\LinkToPrevPageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\BackwardLinks::class => \Jane\Generated\DigitalOcean\Normalizer\BackwardLinksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PageLinks::class => \Jane\Generated\DigitalOcean\Normalizer\PageLinksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Pagination::class => \Jane\Generated\DigitalOcean\Normalizer\PaginationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MetaProperties::class => \Jane\Generated\DigitalOcean\Normalizer\MetaPropertiesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Meta::class => \Jane\Generated\DigitalOcean\Normalizer\MetaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MetaMeta::class => \Jane\Generated\DigitalOcean\Normalizer\MetaMetaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Region::class => \Jane\Generated\DigitalOcean\Normalizer\RegionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Action::class => \Jane\Generated\DigitalOcean\Normalizer\ActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AddonsFeature::class => \Jane\Generated\DigitalOcean\Normalizer\AddonsFeatureNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AddonsDimensionVolumeWithPrice::class => \Jane\Generated\DigitalOcean\Normalizer\AddonsDimensionVolumeWithPriceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AddonsDimensionWithPrice::class => \Jane\Generated\DigitalOcean\Normalizer\AddonsDimensionWithPriceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AddonsPlan::class => \Jane\Generated\DigitalOcean\Normalizer\AddonsPlanNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AddonsAppInfo::class => \Jane\Generated\DigitalOcean\Normalizer\AddonsAppInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AddonsAppMetadata::class => \Jane\Generated\DigitalOcean\Normalizer\AddonsAppMetadataNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AddonsResourceMetadata::class => \Jane\Generated\DigitalOcean\Normalizer\AddonsResourceMetadataNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AddonsResource::class => \Jane\Generated\DigitalOcean\Normalizer\AddonsResourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AddonsResourceNew::class => \Jane\Generated\DigitalOcean\Normalizer\AddonsResourceNewNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeploymentJob::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentJobNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeploymentFunctions::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentFunctionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStepReason::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentProgressStepReasonNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStep::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentProgressStepNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgress::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentProgressNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeploymentService::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentServiceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppDomainSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppDomainSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsGitSourceSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppsGitSourceSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsGithubSourceSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppsGithubSourceSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsGitlabSourceSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppsGitlabSourceSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsBitbucketSourceSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppsBitbucketSourceSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsImageSourceSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppsImageSourceSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsImageSourceSpecDeployOnPush::class => \Jane\Generated\DigitalOcean\Normalizer\AppsImageSourceSpecDeployOnPushNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppVariableDefinition::class => \Jane\Generated\DigitalOcean\Normalizer\AppVariableDefinitionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppLogDestinationPapertrailSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationPapertrailSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppLogDestinationDatadogSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationDatadogSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppLogDestinationLogtailSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationLogtailSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppLogDestinationOpenSearchSpecBasicAuth::class => \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationOpenSearchSpecBasicAuthNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppLogDestinationOpenSearchSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationOpenSearchSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppLogDestinationDefinition::class => \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationDefinitionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppComponentBase::class => \Jane\Generated\DigitalOcean\Normalizer\AppComponentBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBase::class => \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscaling::class => \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseAutoscalingNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscalingMetrics::class => \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseAutoscalingMetricsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscalingMetricsCpu::class => \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseAutoscalingMetricsCpuNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsStringMatch::class => \Jane\Generated\DigitalOcean\Normalizer\AppsStringMatchNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsCorsPolicy::class => \Jane\Generated\DigitalOcean\Normalizer\AppsCorsPolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppServiceSpecHealthCheck::class => \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecHealthCheckNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppHealthCheckSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppHealthCheckSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppRouteSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppRouteSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppServiceSpecTermination::class => \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecTerminationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppServiceSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppServiceSpecCors::class => \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecCorsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppStaticSiteSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppStaticSiteSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppStaticSiteSpecCors::class => \Jane\Generated\DigitalOcean\Normalizer\AppStaticSiteSpecCorsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppJobSpecTermination::class => \Jane\Generated\DigitalOcean\Normalizer\AppJobSpecTerminationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppJobSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppJobSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppWorkerSpecTermination::class => \Jane\Generated\DigitalOcean\Normalizer\AppWorkerSpecTerminationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppWorkerSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppWorkerSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppAlertSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppAlertSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppFunctionsSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppFunctionsSpecCors::class => \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsSpecCorsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppDatabaseSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppDatabaseSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleStringMatchPrefix::class => \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleStringMatchPrefixNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleStringMatchExact::class => \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleStringMatchExactNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleMatch::class => \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleMatchNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleRoutingComponent::class => \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleRoutingComponentNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleRoutingRedirect::class => \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleRoutingRedirectNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppIngressSpecRule::class => \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppIngressSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppEgressSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppEgressSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppMaintenanceSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppMaintenanceSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsVpcEgressIp::class => \Jane\Generated\DigitalOcean\Normalizer\AppsVpcEgressIpNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsVpc::class => \Jane\Generated\DigitalOcean\Normalizer\AppsVpcNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppSpec::class => \Jane\Generated\DigitalOcean\Normalizer\AppSpecNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeploymentStaticSite::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentStaticSiteNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeploymentWorker::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentWorkerNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeployment::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDomainProgress::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDomainProgressNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppDomainValidation::class => \Jane\Generated\DigitalOcean\Normalizer\AppDomainValidationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDomain::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDomainNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsRegion::class => \Jane\Generated\DigitalOcean\Normalizer\AppsRegionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDedicatedEgressIp::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDedicatedEgressIpNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\App::class => \Jane\Generated\DigitalOcean\Normalizer\AppNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppPendingDeployment::class => \Jane\Generated\DigitalOcean\Normalizer\AppPendingDeploymentNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppPinnedDeployment::class => \Jane\Generated\DigitalOcean\Normalizer\AppPinnedDeploymentNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsCreateAppRequest::class => \Jane\Generated\DigitalOcean\Normalizer\AppsCreateAppRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsUpdateAppRequest::class => \Jane\Generated\DigitalOcean\Normalizer\AppsUpdateAppRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeleteAppResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeleteAppResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsRestartRequest::class => \Jane\Generated\DigitalOcean\Normalizer\AppsRestartRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeploymentResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsGetLogsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppsGetLogsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsGetExecResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppsGetExecResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppInstance::class => \Jane\Generated\DigitalOcean\Normalizer\AppInstanceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppInstances::class => \Jane\Generated\DigitalOcean\Normalizer\AppInstancesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsDeploymentsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsCreateDeploymentRequest::class => \Jane\Generated\DigitalOcean\Normalizer\AppsCreateDeploymentRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppJobInvocation::class => \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppJobInvocationTrigger::class => \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppJobInvocationTriggerScheduled::class => \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerScheduledNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppJobInvocationTriggerScheduledSchedule::class => \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerScheduledScheduleNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppJobInvocationTriggerManual::class => \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerManualNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppJobInvocationTriggerManualUser::class => \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerManualUserNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppJobInvocations::class => \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsInstanceSize::class => \Jane\Generated\DigitalOcean\Normalizer\AppsInstanceSizeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsListInstanceSizesResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppsListInstanceSizesResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsGetInstanceSizeResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppsGetInstanceSizeResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsListRegionsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppsListRegionsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppPropose::class => \Jane\Generated\DigitalOcean\Normalizer\AppProposeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppProposeResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppProposeResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppAlertSlackWebhook::class => \Jane\Generated\DigitalOcean\Normalizer\AppAlertSlackWebhookNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppAlertProgressStepReason::class => \Jane\Generated\DigitalOcean\Normalizer\AppAlertProgressStepReasonNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppAlertProgressStep::class => \Jane\Generated\DigitalOcean\Normalizer\AppAlertProgressStepNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppAlertProgress::class => \Jane\Generated\DigitalOcean\Normalizer\AppAlertProgressNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppAlert::class => \Jane\Generated\DigitalOcean\Normalizer\AppAlertNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsListAlertsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppsListAlertsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsAssignAppAlertDestinationsRequest::class => \Jane\Generated\DigitalOcean\Normalizer\AppsAssignAppAlertDestinationsRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsAlertResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppsAlertResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppsRollbackAppRequest::class => \Jane\Generated\DigitalOcean\Normalizer\AppsRollbackAppRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppRollbackValidationCondition::class => \Jane\Generated\DigitalOcean\Normalizer\AppRollbackValidationConditionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppMetricsBandwidthUsageDetails::class => \Jane\Generated\DigitalOcean\Normalizer\AppMetricsBandwidthUsageDetailsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppMetricsBandwidthUsage::class => \Jane\Generated\DigitalOcean\Normalizer\AppMetricsBandwidthUsageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppMetricsBandwidthUsageRequest::class => \Jane\Generated\DigitalOcean\Normalizer\AppMetricsBandwidthUsageRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppComponentHealth::class => \Jane\Generated\DigitalOcean\Normalizer\AppComponentHealthNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppFunctionsComponentHealth::class => \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsComponentHealthNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem::class => \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsComponentHealthFunctionsComponentHealthMetricsItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppHealth::class => \Jane\Generated\DigitalOcean\Normalizer\AppHealthNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AppHealthResponse::class => \Jane\Generated\DigitalOcean\Normalizer\AppHealthResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\CdnEndpoint::class => \Jane\Generated\DigitalOcean\Normalizer\CdnEndpointNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\UpdateEndpoint::class => \Jane\Generated\DigitalOcean\Normalizer\UpdateEndpointNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PurgeCache::class => \Jane\Generated\DigitalOcean\Normalizer\PurgeCacheNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Certificate::class => \Jane\Generated\DigitalOcean\Normalizer\CertificateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\CertificateCreateBase::class => \Jane\Generated\DigitalOcean\Normalizer\CertificateCreateBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\CertificateRequestLetsEncrypt::class => \Jane\Generated\DigitalOcean\Normalizer\CertificateRequestLetsEncryptNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\CertificateRequestCustom::class => \Jane\Generated\DigitalOcean\Normalizer\CertificateRequestCustomNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Balance::class => \Jane\Generated\DigitalOcean\Normalizer\BalanceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\BillingHistory::class => \Jane\Generated\DigitalOcean\Normalizer\BillingHistoryNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MetaOptionalTotal::class => \Jane\Generated\DigitalOcean\Normalizer\MetaOptionalTotalNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\InvoicePreview::class => \Jane\Generated\DigitalOcean\Normalizer\InvoicePreviewNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\InvoiceItem::class => \Jane\Generated\DigitalOcean\Normalizer\InvoiceItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\BillingAddress::class => \Jane\Generated\DigitalOcean\Normalizer\BillingAddressNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ProductChargeItem::class => \Jane\Generated\DigitalOcean\Normalizer\ProductChargeItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ProductUsageCharges::class => \Jane\Generated\DigitalOcean\Normalizer\ProductUsageChargesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SimpleCharge::class => \Jane\Generated\DigitalOcean\Normalizer\SimpleChargeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\InvoiceSummary::class => \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\InvoiceSummaryUserBillingAddress::class => \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryUserBillingAddressNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\InvoiceSummaryProductCharges::class => \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryProductChargesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\InvoiceSummaryOverages::class => \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryOveragesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\InvoiceSummaryTaxes::class => \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryTaxesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\InvoiceSummaryCreditsAndAdjustments::class => \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryCreditsAndAdjustmentsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\BillingDataPoint::class => \Jane\Generated\DigitalOcean\Normalizer\BillingDataPointNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseRegionOptions::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseRegionOptionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseVersionOptions::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseVersionOptionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseLayoutOption::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseLayoutOptionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseLayoutOptions::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseLayoutOptionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseVersionAvailability::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseVersionAvailabilityNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Options::class => \Jane\Generated\DigitalOcean\Normalizer\OptionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OptionsOptions::class => \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OptionsOptionsKafka::class => \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsKafkaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OptionsOptionsMongodb::class => \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsMongodbNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OptionsOptionsPg::class => \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsPgNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OptionsOptionsMysql::class => \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsMysqlNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OptionsOptionsRedis::class => \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsRedisNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OptionsOptionsValkey::class => \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsValkeyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OptionsOptionsOpensearch::class => \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsOpensearchNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OptionsVersionAvailability::class => \Jane\Generated\DigitalOcean\Normalizer\OptionsVersionAvailabilityNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OpensearchConnection::class => \Jane\Generated\DigitalOcean\Normalizer\OpensearchConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SchemaRegistryConnection::class => \Jane\Generated\DigitalOcean\Normalizer\SchemaRegistryConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MysqlSettings::class => \Jane\Generated\DigitalOcean\Normalizer\MysqlSettingsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\UserSettings::class => \Jane\Generated\DigitalOcean\Normalizer\UserSettingsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\UserSettingsOpensearchAclItem::class => \Jane\Generated\DigitalOcean\Normalizer\UserSettingsOpensearchAclItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\UserSettingsAclItem::class => \Jane\Generated\DigitalOcean\Normalizer\UserSettingsAclItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\UserSettingsMongoUserSettings::class => \Jane\Generated\DigitalOcean\Normalizer\UserSettingsMongoUserSettingsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseUser::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseUserNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseMaintenanceWindow::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseMaintenanceWindowNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FirewallRule::class => \Jane\Generated\DigitalOcean\Normalizer\FirewallRuleNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseServiceEndpoint::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseServiceEndpointNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterRead::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadUiConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadUiConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadSchemaRegistryConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadSchemaRegistryConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadPrivateConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadPrivateConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadStandbyConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadStandbyConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadStandbyPrivateConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadStandbyPrivateConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadMaintenanceWindow::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadMaintenanceWindowNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseStorageAutoscaleParams::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseStorageAutoscaleParamsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseAutoscaleParams::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseAutoscaleParamsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseAutoscaleParamsStorage::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseAutoscaleParamsStorageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseCluster::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterUiConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterUiConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterSchemaRegistryConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterSchemaRegistryConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterPrivateConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterPrivateConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterStandbyConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterStandbyConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterStandbyPrivateConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterStandbyPrivateConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterMaintenanceWindow::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterMaintenanceWindowNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterAutoscale::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterAutoscaleNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseBackup::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseBackupNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MysqlIncrementalBackup::class => \Jane\Generated\DigitalOcean\Normalizer\MysqlIncrementalBackupNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MysqlAdvancedConfig::class => \Jane\Generated\DigitalOcean\Normalizer\MysqlAdvancedConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PgbouncerAdvancedConfig::class => \Jane\Generated\DigitalOcean\Normalizer\PgbouncerAdvancedConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TimescaledbAdvancedConfig::class => \Jane\Generated\DigitalOcean\Normalizer\TimescaledbAdvancedConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PostgresAdvancedConfig::class => \Jane\Generated\DigitalOcean\Normalizer\PostgresAdvancedConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RedisAdvancedConfig::class => \Jane\Generated\DigitalOcean\Normalizer\RedisAdvancedConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ValkeyAdvancedConfig::class => \Jane\Generated\DigitalOcean\Normalizer\ValkeyAdvancedConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KafkaAdvancedConfig::class => \Jane\Generated\DigitalOcean\Normalizer\KafkaAdvancedConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OpensearchAdvancedConfig::class => \Jane\Generated\DigitalOcean\Normalizer\OpensearchAdvancedConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MongoAdvancedConfig::class => \Jane\Generated\DigitalOcean\Normalizer\MongoAdvancedConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseConfig::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Ca::class => \Jane\Generated\DigitalOcean\Normalizer\CaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OnlineMigration::class => \Jane\Generated\DigitalOcean\Normalizer\OnlineMigrationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SourceDatabase::class => \Jane\Generated\DigitalOcean\Normalizer\SourceDatabaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SourceDatabaseSource::class => \Jane\Generated\DigitalOcean\Normalizer\SourceDatabaseSourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseClusterResize::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterResizeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Backup::class => \Jane\Generated\DigitalOcean\Normalizer\BackupNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseReplicaRead::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaReadNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseReplicaReadConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaReadConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseReplicaReadPrivateConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaReadPrivateConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseReplica::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseReplicaConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseReplicaPrivateConnection::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaPrivateConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\EventsLogs::class => \Jane\Generated\DigitalOcean\Normalizer\EventsLogsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Database::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ConnectionPool::class => \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ConnectionPoolConnection::class => \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ConnectionPoolPrivateConnection::class => \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolPrivateConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ConnectionPoolStandbyConnection::class => \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolStandbyConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ConnectionPoolStandbyPrivateConnection::class => \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolStandbyPrivateConnectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ConnectionPools::class => \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ConnectionPoolUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SqlMode::class => \Jane\Generated\DigitalOcean\Normalizer\SqlModeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Version2::class => \Jane\Generated\DigitalOcean\Normalizer\Version2Normalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KafkaTopicBase::class => \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KafkaTopic::class => \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KafkaTopicConfig::class => \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KafkaTopicCreate::class => \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KafkaTopicPartition::class => \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicPartitionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KafkaTopicPartitionConsumerGroupsItem::class => \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicPartitionConsumerGroupsItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KafkaTopicVerbose::class => \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicVerboseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KafkaTopicUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LogsinkBaseVerbose::class => \Jane\Generated\DigitalOcean\Normalizer\LogsinkBaseVerboseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RsyslogLogsink::class => \Jane\Generated\DigitalOcean\Normalizer\RsyslogLogsinkNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ElasticsearchLogsink::class => \Jane\Generated\DigitalOcean\Normalizer\ElasticsearchLogsinkNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OpensearchLogsink::class => \Jane\Generated\DigitalOcean\Normalizer\OpensearchLogsinkNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatadogLogsink::class => \Jane\Generated\DigitalOcean\Normalizer\DatadogLogsinkNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LogsinkVerbose::class => \Jane\Generated\DigitalOcean\Normalizer\LogsinkVerboseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LogsinkSchema::class => \Jane\Generated\DigitalOcean\Normalizer\LogsinkSchemaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LogsinkBase::class => \Jane\Generated\DigitalOcean\Normalizer\LogsinkBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LogsinkCreate::class => \Jane\Generated\DigitalOcean\Normalizer\LogsinkCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LogsinkUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\LogsinkUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KafkaSchemaVerbose::class => \Jane\Generated\DigitalOcean\Normalizer\KafkaSchemaVerboseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseKafkaSchemaCreate::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseKafkaSchemaCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KafkaSchemaVersionVerbose::class => \Jane\Generated\DigitalOcean\Normalizer\KafkaSchemaVersionVerboseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabasesBasicAuthCredentials::class => \Jane\Generated\DigitalOcean\Normalizer\DatabasesBasicAuthCredentialsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DatabaseMetricsCredentials::class => \Jane\Generated\DigitalOcean\Normalizer\DatabaseMetricsCredentialsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OpensearchIndexBase::class => \Jane\Generated\DigitalOcean\Normalizer\OpensearchIndexBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OpensearchIndex::class => \Jane\Generated\DigitalOcean\Normalizer\OpensearchIndexNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Domain::class => \Jane\Generated\DigitalOcean\Normalizer\DomainNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DomainRecord::class => \Jane\Generated\DigitalOcean\Normalizer\DomainRecordNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DomainRecordA::class => \Jane\Generated\DigitalOcean\Normalizer\DomainRecordANormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DomainRecordAaaa::class => \Jane\Generated\DigitalOcean\Normalizer\DomainRecordAaaaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DomainRecordCaa::class => \Jane\Generated\DigitalOcean\Normalizer\DomainRecordCaaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DomainRecordCname::class => \Jane\Generated\DigitalOcean\Normalizer\DomainRecordCnameNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DomainRecordMx::class => \Jane\Generated\DigitalOcean\Normalizer\DomainRecordMxNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DomainRecordNs::class => \Jane\Generated\DigitalOcean\Normalizer\DomainRecordNsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DomainRecordSoa::class => \Jane\Generated\DigitalOcean\Normalizer\DomainRecordSoaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DomainRecordSrv::class => \Jane\Generated\DigitalOcean\Normalizer\DomainRecordSrvNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DomainRecordTxt::class => \Jane\Generated\DigitalOcean\Normalizer\DomainRecordTxtNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DiskInfo::class => \Jane\Generated\DigitalOcean\Normalizer\DiskInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DiskInfoSize::class => \Jane\Generated\DigitalOcean\Normalizer\DiskInfoSizeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Kernel::class => \Jane\Generated\DigitalOcean\Normalizer\KernelNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletNextBackupWindow::class => \Jane\Generated\DigitalOcean\Normalizer\DropletNextBackupWindowNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Image::class => \Jane\Generated\DigitalOcean\Normalizer\ImageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\GpuInfo::class => \Jane\Generated\DigitalOcean\Normalizer\GpuInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\GpuInfoVram::class => \Jane\Generated\DigitalOcean\Normalizer\GpuInfoVramNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Size::class => \Jane\Generated\DigitalOcean\Normalizer\SizeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NetworkV4::class => \Jane\Generated\DigitalOcean\Normalizer\NetworkV4Normalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NetworkV6::class => \Jane\Generated\DigitalOcean\Normalizer\NetworkV6Normalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Droplet::class => \Jane\Generated\DigitalOcean\Normalizer\DropletNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletImage::class => \Jane\Generated\DigitalOcean\Normalizer\DropletImageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletNetworks::class => \Jane\Generated\DigitalOcean\Normalizer\DropletNetworksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletBackupPolicy::class => \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletCreate::class => \Jane\Generated\DigitalOcean\Normalizer\DropletCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletCreateBackupPolicy::class => \Jane\Generated\DigitalOcean\Normalizer\DropletCreateBackupPolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletSingleCreate::class => \Jane\Generated\DigitalOcean\Normalizer\DropletSingleCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletMultiCreate::class => \Jane\Generated\DigitalOcean\Normalizer\DropletMultiCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ActionLink::class => \Jane\Generated\DigitalOcean\Normalizer\ActionLinkNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SnapshotsBase::class => \Jane\Generated\DigitalOcean\Normalizer\SnapshotsBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletSnapshot::class => \Jane\Generated\DigitalOcean\Normalizer\DropletSnapshotNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecord::class => \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyRecordNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecordBackupPolicy::class => \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyRecordBackupPolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecordNextBackupWindow::class => \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyRecordNextBackupWindowNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SupportedDropletBackupPolicy::class => \Jane\Generated\DigitalOcean\Normalizer\SupportedDropletBackupPolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletAction::class => \Jane\Generated\DigitalOcean\Normalizer\DropletActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletActionEnableBackups::class => \Jane\Generated\DigitalOcean\Normalizer\DropletActionEnableBackupsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletActionEnableBackupsBackupPolicy::class => \Jane\Generated\DigitalOcean\Normalizer\DropletActionEnableBackupsBackupPolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletActionChangeBackupPolicy::class => \Jane\Generated\DigitalOcean\Normalizer\DropletActionChangeBackupPolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletActionChangeBackupPolicyBackupPolicy::class => \Jane\Generated\DigitalOcean\Normalizer\DropletActionChangeBackupPolicyBackupPolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletActionRestore::class => \Jane\Generated\DigitalOcean\Normalizer\DropletActionRestoreNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletActionResize::class => \Jane\Generated\DigitalOcean\Normalizer\DropletActionResizeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletActionRebuild::class => \Jane\Generated\DigitalOcean\Normalizer\DropletActionRebuildNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletActionRename::class => \Jane\Generated\DigitalOcean\Normalizer\DropletActionRenameNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletActionChangeKernel::class => \Jane\Generated\DigitalOcean\Normalizer\DropletActionChangeKernelNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DropletActionSnapshot::class => \Jane\Generated\DigitalOcean\Normalizer\DropletActionSnapshotNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FirewallRuleBase::class => \Jane\Generated\DigitalOcean\Normalizer\FirewallRuleBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FirewallRuleTarget::class => \Jane\Generated\DigitalOcean\Normalizer\FirewallRuleTargetNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FirewallRules::class => \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FirewallRulesInboundRulesItem::class => \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesInboundRulesItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FirewallRulesInboundRulesItemSources::class => \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesInboundRulesItemSourcesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FirewallRulesOutboundRulesItem::class => \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesOutboundRulesItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FirewallRulesOutboundRulesItemDestinations::class => \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesOutboundRulesItemDestinationsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Firewall::class => \Jane\Generated\DigitalOcean\Normalizer\FirewallNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FirewallPendingChangesItem::class => \Jane\Generated\DigitalOcean\Normalizer\FirewallPendingChangesItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AssociatedResource::class => \Jane\Generated\DigitalOcean\Normalizer\AssociatedResourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SelectiveDestroyAssociatedResource::class => \Jane\Generated\DigitalOcean\Normalizer\SelectiveDestroyAssociatedResourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DestroyedAssociatedResource::class => \Jane\Generated\DigitalOcean\Normalizer\DestroyedAssociatedResourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AssociatedResourceStatus::class => \Jane\Generated\DigitalOcean\Normalizer\AssociatedResourceStatusNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AssociatedResourceStatusResources::class => \Jane\Generated\DigitalOcean\Normalizer\AssociatedResourceStatusResourcesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AutoscalePoolStaticConfig::class => \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolStaticConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AutoscalePoolDynamicConfig::class => \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolDynamicConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AutoscalePoolDropletTemplate::class => \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolDropletTemplateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\CurrentUtilization::class => \Jane\Generated\DigitalOcean\Normalizer\CurrentUtilizationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AutoscalePool::class => \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate::class => \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MemberCurrentUtilization::class => \Jane\Generated\DigitalOcean\Normalizer\MemberCurrentUtilizationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Member::class => \Jane\Generated\DigitalOcean\Normalizer\MemberNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\History::class => \Jane\Generated\DigitalOcean\Normalizer\HistoryNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FloatingIp::class => \Jane\Generated\DigitalOcean\Normalizer\FloatingIpNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FloatingIpRegion::class => \Jane\Generated\DigitalOcean\Normalizer\FloatingIpRegionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FloatingIPsAction::class => \Jane\Generated\DigitalOcean\Normalizer\FloatingIPsActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FloatingIpActionAssign::class => \Jane\Generated\DigitalOcean\Normalizer\FloatingIpActionAssignNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\FloatingIpActionUnassign::class => \Jane\Generated\DigitalOcean\Normalizer\FloatingIpActionUnassignNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NamespaceInfo::class => \Jane\Generated\DigitalOcean\Normalizer\NamespaceInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\CreateNamespace::class => \Jane\Generated\DigitalOcean\Normalizer\CreateNamespaceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ScheduledDetails::class => \Jane\Generated\DigitalOcean\Normalizer\ScheduledDetailsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ScheduledDetailsBody::class => \Jane\Generated\DigitalOcean\Normalizer\ScheduledDetailsBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TriggerInfo::class => \Jane\Generated\DigitalOcean\Normalizer\TriggerInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TriggerInfoScheduledRuns::class => \Jane\Generated\DigitalOcean\Normalizer\TriggerInfoScheduledRunsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\CreateTrigger::class => \Jane\Generated\DigitalOcean\Normalizer\CreateTriggerNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\UpdateTrigger::class => \Jane\Generated\DigitalOcean\Normalizer\UpdateTriggerNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ImageUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\ImageUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ImageNewCustom::class => \Jane\Generated\DigitalOcean\Normalizer\ImageNewCustomNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ImageActionBase::class => \Jane\Generated\DigitalOcean\Normalizer\ImageActionBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ImageActionTransfer::class => \Jane\Generated\DigitalOcean\Normalizer\ImageActionTransferNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolSize::class => \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolSizeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolTaint::class => \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolTaintNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Node::class => \Jane\Generated\DigitalOcean\Normalizer\NodeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NodeStatus::class => \Jane\Generated\DigitalOcean\Normalizer\NodeStatusNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolBase::class => \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KubernetesNodePool::class => \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MaintenancePolicy::class => \Jane\Generated\DigitalOcean\Normalizer\MaintenancePolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ControlPlaneFirewall::class => \Jane\Generated\DigitalOcean\Normalizer\ControlPlaneFirewallNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ClusterAutoscalerConfiguration::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterAutoscalerConfigurationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RoutingAgent::class => \Jane\Generated\DigitalOcean\Normalizer\RoutingAgentNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AmdGpuDevicePlugin::class => \Jane\Generated\DigitalOcean\Normalizer\AmdGpuDevicePluginNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AmdGpuDeviceMetricsExporterPlugin::class => \Jane\Generated\DigitalOcean\Normalizer\AmdGpuDeviceMetricsExporterPluginNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NvidiaGpuDevicePlugin::class => \Jane\Generated\DigitalOcean\Normalizer\NvidiaGpuDevicePluginNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RdmaSharedDevPlugin::class => \Jane\Generated\DigitalOcean\Normalizer\RdmaSharedDevPluginNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ClusterRead::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterReadNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ClusterReadStatus::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterReadStatusNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Cluster::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ClusterStatus::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterStatusNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ClusterUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResource::class => \Jane\Generated\DigitalOcean\Normalizer\AssociatedKubernetesResourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResources::class => \Jane\Generated\DigitalOcean\Normalizer\AssociatedKubernetesResourcesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DestroyAssociatedKubernetesResources::class => \Jane\Generated\DigitalOcean\Normalizer\DestroyAssociatedKubernetesResourcesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Credentials::class => \Jane\Generated\DigitalOcean\Normalizer\CredentialsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KubernetesVersion::class => \Jane\Generated\DigitalOcean\Normalizer\KubernetesVersionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\User::class => \Jane\Generated\DigitalOcean\Normalizer\UserNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\UserKubernetesClusterUser::class => \Jane\Generated\DigitalOcean\Normalizer\UserKubernetesClusterUserNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KubernetesRegion::class => \Jane\Generated\DigitalOcean\Normalizer\KubernetesRegionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KubernetesSize::class => \Jane\Generated\DigitalOcean\Normalizer\KubernetesSizeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KubernetesOptions::class => \Jane\Generated\DigitalOcean\Normalizer\KubernetesOptionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KubernetesOptionsOptions::class => \Jane\Generated\DigitalOcean\Normalizer\KubernetesOptionsOptionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ClusterlintResults::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterlintResultsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ClusterlintResultsDiagnosticsItem::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterlintResultsDiagnosticsItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ClusterlintResultsDiagnosticsItemObject::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterlintResultsDiagnosticsItemObjectNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ClusterlintRequest::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterlintRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ClusterRegistry::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterRegistryNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ClusterRegistries::class => \Jane\Generated\DigitalOcean\Normalizer\ClusterRegistriesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\StatusMessages::class => \Jane\Generated\DigitalOcean\Normalizer\StatusMessagesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ForwardingRule::class => \Jane\Generated\DigitalOcean\Normalizer\ForwardingRuleNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\HealthCheck::class => \Jane\Generated\DigitalOcean\Normalizer\HealthCheckNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\StickySessions::class => \Jane\Generated\DigitalOcean\Normalizer\StickySessionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LbFirewall::class => \Jane\Generated\DigitalOcean\Normalizer\LbFirewallNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Domains::class => \Jane\Generated\DigitalOcean\Normalizer\DomainsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\GlbSettings::class => \Jane\Generated\DigitalOcean\Normalizer\GlbSettingsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\GlbSettingsCdn::class => \Jane\Generated\DigitalOcean\Normalizer\GlbSettingsCdnNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LoadBalancerBase::class => \Jane\Generated\DigitalOcean\Normalizer\LoadBalancerBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LoadBalancer::class => \Jane\Generated\DigitalOcean\Normalizer\LoadBalancerNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\LoadBalancerRegion::class => \Jane\Generated\DigitalOcean\Normalizer\LoadBalancerRegionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SlackDetails::class => \Jane\Generated\DigitalOcean\Normalizer\SlackDetailsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Alerts::class => \Jane\Generated\DigitalOcean\Normalizer\AlertsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AlertPolicy::class => \Jane\Generated\DigitalOcean\Normalizer\AlertPolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ListAlertPolicy::class => \Jane\Generated\DigitalOcean\Normalizer\ListAlertPolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AlertPolicyRequest::class => \Jane\Generated\DigitalOcean\Normalizer\AlertPolicyRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MetricsResult::class => \Jane\Generated\DigitalOcean\Normalizer\MetricsResultNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MetricsData::class => \Jane\Generated\DigitalOcean\Normalizer\MetricsDataNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Metrics::class => \Jane\Generated\DigitalOcean\Normalizer\MetricsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OpensearchConfigOmitCredentials::class => \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigOmitCredentialsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DestinationOmitCredentials::class => \Jane\Generated\DigitalOcean\Normalizer\DestinationOmitCredentialsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OpensearchConfigRequest::class => \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OpensearchConfigRequestCredentials::class => \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigRequestCredentialsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DestinationRequest::class => \Jane\Generated\DigitalOcean\Normalizer\DestinationRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OpensearchConfig::class => \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\OpensearchConfigCredentials::class => \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigCredentialsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Destination::class => \Jane\Generated\DigitalOcean\Normalizer\DestinationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SinkResource::class => \Jane\Generated\DigitalOcean\Normalizer\SinkResourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SinksResponse::class => \Jane\Generated\DigitalOcean\Normalizer\SinksResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\NfsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsListResponse::class => \Jane\Generated\DigitalOcean\Normalizer\NfsListResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsRequest::class => \Jane\Generated\DigitalOcean\Normalizer\NfsRequestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsCreateResponse::class => \Jane\Generated\DigitalOcean\Normalizer\NfsCreateResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsGetResponse::class => \Jane\Generated\DigitalOcean\Normalizer\NfsGetResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsAction::class => \Jane\Generated\DigitalOcean\Normalizer\NfsActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsActionResize::class => \Jane\Generated\DigitalOcean\Normalizer\NfsActionResizeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsActionResizeParams::class => \Jane\Generated\DigitalOcean\Normalizer\NfsActionResizeParamsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsActionSnapshot::class => \Jane\Generated\DigitalOcean\Normalizer\NfsActionSnapshotNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsActionSnapshotParams::class => \Jane\Generated\DigitalOcean\Normalizer\NfsActionSnapshotParamsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsActionAttach::class => \Jane\Generated\DigitalOcean\Normalizer\NfsActionAttachNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsActionAttachParams::class => \Jane\Generated\DigitalOcean\Normalizer\NfsActionAttachParamsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsActionDetach::class => \Jane\Generated\DigitalOcean\Normalizer\NfsActionDetachNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsActionDetachParams::class => \Jane\Generated\DigitalOcean\Normalizer\NfsActionDetachParamsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsActionsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\NfsActionsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsActionsResponseAction::class => \Jane\Generated\DigitalOcean\Normalizer\NfsActionsResponseActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsSnapshotResponse::class => \Jane\Generated\DigitalOcean\Normalizer\NfsSnapshotResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsSnapshotListResponse::class => \Jane\Generated\DigitalOcean\Normalizer\NfsSnapshotListResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NfsSnapshotGetResponse::class => \Jane\Generated\DigitalOcean\Normalizer\NfsSnapshotGetResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PartnerAttachment::class => \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PartnerAttachmentBgp::class => \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentBgpNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PartnerAttachmentWritable::class => \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentWritableNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PartnerAttachmentWritableBgp::class => \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentWritableBgpNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PartnerAttachmentServiceKey::class => \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentServiceKeyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PartnerAttachmentRemoteRoute::class => \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentRemoteRouteNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ProjectBase::class => \Jane\Generated\DigitalOcean\Normalizer\ProjectBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Project::class => \Jane\Generated\DigitalOcean\Normalizer\ProjectNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Resource::class => \Jane\Generated\DigitalOcean\Normalizer\ResourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResourceLinks::class => \Jane\Generated\DigitalOcean\Normalizer\ResourceLinksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ProjectAssignment::class => \Jane\Generated\DigitalOcean\Normalizer\ProjectAssignmentNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RegistryBase::class => \Jane\Generated\DigitalOcean\Normalizer\RegistryBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SubscriptionTierBase::class => \Jane\Generated\DigitalOcean\Normalizer\SubscriptionTierBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Subscription::class => \Jane\Generated\DigitalOcean\Normalizer\SubscriptionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Registry::class => \Jane\Generated\DigitalOcean\Normalizer\RegistryNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RegistrySubscription::class => \Jane\Generated\DigitalOcean\Normalizer\RegistrySubscriptionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\MultiregistryCreate::class => \Jane\Generated\DigitalOcean\Normalizer\MultiregistryCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Multiregistry::class => \Jane\Generated\DigitalOcean\Normalizer\MultiregistryNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DockerCredentials::class => \Jane\Generated\DigitalOcean\Normalizer\DockerCredentialsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DockerCredentialsAuths::class => \Jane\Generated\DigitalOcean\Normalizer\DockerCredentialsAuthsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\DockerCredentialsAuthsRegistryDigitaloceanCom::class => \Jane\Generated\DigitalOcean\Normalizer\DockerCredentialsAuthsRegistryDigitaloceanComNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\SubscriptionTierExtended::class => \Jane\Generated\DigitalOcean\Normalizer\SubscriptionTierExtendedNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\GarbageCollection::class => \Jane\Generated\DigitalOcean\Normalizer\GarbageCollectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\UpdateRegistry::class => \Jane\Generated\DigitalOcean\Normalizer\UpdateRegistryNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RepositoryBlob::class => \Jane\Generated\DigitalOcean\Normalizer\RepositoryBlobNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RepositoryManifest::class => \Jane\Generated\DigitalOcean\Normalizer\RepositoryManifestNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RepositoryV2::class => \Jane\Generated\DigitalOcean\Normalizer\RepositoryV2Normalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RepositoryTag::class => \Jane\Generated\DigitalOcean\Normalizer\RepositoryTagNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ValidateRegistry::class => \Jane\Generated\DigitalOcean\Normalizer\ValidateRegistryNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RegistryCreate::class => \Jane\Generated\DigitalOcean\Normalizer\RegistryCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Repository::class => \Jane\Generated\DigitalOcean\Normalizer\RepositoryNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RegistryRunGc::class => \Jane\Generated\DigitalOcean\Normalizer\RegistryRunGcNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NeighborIds::class => \Jane\Generated\DigitalOcean\Normalizer\NeighborIdsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIp::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIpRegion::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpRegionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIpActionType::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpActionTypeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIpActionAssign::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpActionAssignNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIpActionUnassign::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpActionUnassignNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIpv6List::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIpv6ListReservedIpv6sItem::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ListReservedIpv6sItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIpv6Create::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6CreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIpv6::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6Normalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIpv6ActionType::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ActionTypeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIpv6ActionAssign::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ActionAssignNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ReservedIpv6ActionUnassign::class => \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ActionUnassignNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ByoipPrefix::class => \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ByoipPrefixValidationsItem::class => \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixValidationsItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ByoipPrefixCreate::class => \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ByoipPrefixUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ByoipPrefixResource::class => \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixResourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Snapshots::class => \Jane\Generated\DigitalOcean\Normalizer\SnapshotsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Grant::class => \Jane\Generated\DigitalOcean\Normalizer\GrantNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Key::class => \Jane\Generated\DigitalOcean\Normalizer\KeyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\KeyCreateResponse::class => \Jane\Generated\DigitalOcean\Normalizer\KeyCreateResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TagsMetadata::class => \Jane\Generated\DigitalOcean\Normalizer\TagsMetadataNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Tags::class => \Jane\Generated\DigitalOcean\Normalizer\TagsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TagsResources::class => \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TagsResourcesDroplets::class => \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesDropletsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TagsResourcesImgages::class => \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesImgagesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TagsResourcesVolumes::class => \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesVolumesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TagsResourcesVolumeSnapshots::class => \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesVolumeSnapshotsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TagsResourcesDatabases::class => \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesDatabasesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ErrorWithRootCauses::class => \Jane\Generated\DigitalOcean\Normalizer\ErrorWithRootCausesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TagsResource::class => \Jane\Generated\DigitalOcean\Normalizer\TagsResourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\TagsResourceResourcesItem::class => \Jane\Generated\DigitalOcean\Normalizer\TagsResourceResourcesItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumeBaseRead::class => \Jane\Generated\DigitalOcean\Normalizer\VolumeBaseReadNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumeFull::class => \Jane\Generated\DigitalOcean\Normalizer\VolumeFullNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumeFullRegion::class => \Jane\Generated\DigitalOcean\Normalizer\VolumeFullRegionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumeBase::class => \Jane\Generated\DigitalOcean\Normalizer\VolumeBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumeSnapshotId::class => \Jane\Generated\DigitalOcean\Normalizer\VolumeSnapshotIdNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumeWriteFileSystemType::class => \Jane\Generated\DigitalOcean\Normalizer\VolumeWriteFileSystemTypeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumesExt4::class => \Jane\Generated\DigitalOcean\Normalizer\VolumesExt4Normalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumesXfs::class => \Jane\Generated\DigitalOcean\Normalizer\VolumesXfsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumeActionPostBase::class => \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumeActionPostAttach::class => \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostAttachNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumeActionPostDetach::class => \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostDetachNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumeAction::class => \Jane\Generated\DigitalOcean\Normalizer\VolumeActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VolumeActionPostResize::class => \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostResizeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcUpdatable::class => \Jane\Generated\DigitalOcean\Normalizer\VpcUpdatableNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcCreate::class => \Jane\Generated\DigitalOcean\Normalizer\VpcCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcDefault::class => \Jane\Generated\DigitalOcean\Normalizer\VpcDefaultNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcBase::class => \Jane\Generated\DigitalOcean\Normalizer\VpcBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Vpc::class => \Jane\Generated\DigitalOcean\Normalizer\VpcNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcMember::class => \Jane\Generated\DigitalOcean\Normalizer\VpcMemberNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcPeeringBase::class => \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcPeeringCreate::class => \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcPeeringUpdatable::class => \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringUpdatableNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcPeering::class => \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcNatGatewayGet::class => \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcNatGatewayGetVpcsItem::class => \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetVpcsItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcNatGatewayGetEgresses::class => \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetEgressesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcNatGatewayGetEgressesPublicGatewaysItem::class => \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetEgressesPublicGatewaysItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcNatGatewayCreate::class => \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcNatGatewayCreateVpcsItem::class => \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayCreateVpcsItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdateVpcsItem::class => \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayUpdateVpcsItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\CheckBase::class => \Jane\Generated\DigitalOcean\Normalizer\CheckBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\CheckUpdatable::class => \Jane\Generated\DigitalOcean\Normalizer\CheckUpdatableNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Check::class => \Jane\Generated\DigitalOcean\Normalizer\CheckNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RegionState::class => \Jane\Generated\DigitalOcean\Normalizer\RegionStateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\RegionalState::class => \Jane\Generated\DigitalOcean\Normalizer\RegionalStateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PreviousOutage::class => \Jane\Generated\DigitalOcean\Normalizer\PreviousOutageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\State::class => \Jane\Generated\DigitalOcean\Normalizer\StateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AlertBase::class => \Jane\Generated\DigitalOcean\Normalizer\AlertBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Notification::class => \Jane\Generated\DigitalOcean\Normalizer\NotificationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\NotificationSlackItem::class => \Jane\Generated\DigitalOcean\Normalizer\NotificationSlackItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\AlertUpdatable::class => \Jane\Generated\DigitalOcean\Normalizer\AlertUpdatableNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\Alert::class => \Jane\Generated\DigitalOcean\Normalizer\AlertNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiChatbot::class => \Jane\Generated\DigitalOcean\Normalizer\ApiChatbotNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentChatbotIdentifier::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentChatbotIdentifierNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDeployment::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDeploymentNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgreement::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgreementNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiModelVersion::class => \Jane\Generated\DigitalOcean\Normalizer\ApiModelVersionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiModel::class => \Jane\Generated\DigitalOcean\Normalizer\ApiModelNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentTemplateGuardrail::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentTemplateGuardrailNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiIndexedDataSource::class => \Jane\Generated\DigitalOcean\Normalizer\ApiIndexedDataSourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiIndexingJob::class => \Jane\Generated\DigitalOcean\Normalizer\ApiIndexingJobNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBase::class => \Jane\Generated\DigitalOcean\Normalizer\ApiKnowledgeBaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentTemplate::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentTemplateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiPages::class => \Jane\Generated\DigitalOcean\Normalizer\ApiPagesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiLinks::class => \Jane\Generated\DigitalOcean\Normalizer\ApiLinksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiMeta::class => \Jane\Generated\DigitalOcean\Normalizer\ApiMetaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListAgentsOutputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsOutputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateAgentInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAnthropicAPIKeyInfo::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAnthropicAPIKeyInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentAPIKeyInfo::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentAPIKeyInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentAPIKey::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentAPIKeyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgent::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentFunction::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentFunctionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentGuardrail::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentGuardrailNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentLoggingConfig::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentLoggingConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiModelProviderKeyInfo::class => \Jane\Generated\DigitalOcean\Normalizer\ApiModelProviderKeyInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiOpenAIAPIKeyInfo::class => \Jane\Generated\DigitalOcean\Normalizer\ApiOpenAIAPIKeyInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiEvaluationDataset::class => \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationDatasetNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetric::class => \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationMetricNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiStarMetric::class => \Jane\Generated\DigitalOcean\Normalizer\ApiStarMetricNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiEvaluationTestCase::class => \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationTestCaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiWorkspace::class => \Jane\Generated\DigitalOcean\Normalizer\ApiWorkspaceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateAgentOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListAgentAPIKeysOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentAPIKeysOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateAgentAPIKeyInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentAPIKeyInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateAgentAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentAPIKeyInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentAPIKeyInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDeleteAgentAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteAgentAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiRegenerateAgentAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiRegenerateAgentAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentFunctionInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentFunctionOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentFunctionInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentFunctionOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUnlinkAgentFunctionOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUnlinkAgentFunctionOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiLinkKnowledgeBaseOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiLinkKnowledgeBaseOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUnlinkKnowledgeBaseOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUnlinkKnowledgeBaseOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateLinkedAgentInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateLinkedAgentOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiLinkAgentInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiLinkAgentOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUnlinkAgentOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUnlinkAgentOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetAgentOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetAgentOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDeleteAgentOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteAgentOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetChildrenOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetChildrenOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentDeploymentVisibilityInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentDeploymentVisibilityInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentDeploymentVisbilityOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentDeploymentVisbilityOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUsageMeasurement::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUsageMeasurementNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiResourceUsage::class => \Jane\Generated\DigitalOcean\Normalizer\ApiResourceUsageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetAgentUsageOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetAgentUsageOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentChildRelationshipVerion::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentChildRelationshipVerionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentFunctionVersion::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentFunctionVersionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentGuardrailVersion::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentGuardrailVersionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentKnowledgeBaseVersion::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentKnowledgeBaseVersionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAgentVersion::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAgentVersionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListAgentVersionsOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentVersionsOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiRollbackToAgentVersionInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiRollbackToAgentVersionInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAuditHeader::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAuditHeaderNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiRollbackToAgentVersionOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiRollbackToAgentVersionOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListAnthropicAPIKeysOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListAnthropicAPIKeysOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateAnthropicAPIKeyInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAnthropicAPIKeyInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateAnthropicAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAnthropicAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetAnthropicAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetAnthropicAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAnthropicAPIKeyInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAnthropicAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDeleteAnthropicAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteAnthropicAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListAgentsByAnthropicKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsByAnthropicKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiFileUploadDataSource::class => \Jane\Generated\DigitalOcean\Normalizer\ApiFileUploadDataSourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationDatasetInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationDatasetInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationDatasetOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationDatasetOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiPresignedUrlFile::class => \Jane\Generated\DigitalOcean\Normalizer\ApiPresignedUrlFileNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateDataSourceFileUploadPresignedUrlsInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiFilePresignedUrlResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ApiFilePresignedUrlResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateDataSourceFileUploadPresignedUrlsOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListEvaluationMetricsOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationMetricsOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiRunEvaluationTestCaseInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiRunEvaluationTestCaseInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiRunEvaluationTestCaseOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiRunEvaluationTestCaseOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class => \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationMetricResultNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiEvaluationRun::class => \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationRunNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetEvaluationRunOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationRunOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiPromptChunk::class => \Jane\Generated\DigitalOcean\Normalizer\ApiPromptChunkNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiEvaluationTraceSpan::class => \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationTraceSpanNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiPrompt::class => \Jane\Generated\DigitalOcean\Normalizer\ApiPromptNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetEvaluationRunResultsOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationRunResultsOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetEvaluationRunPromptResultsOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationRunPromptResultsOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListEvaluationTestCasesOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationTestCasesOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationTestCaseInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationTestCaseInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationTestCaseOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationTestCaseOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListEvaluationRunsByTestCaseOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationRunsByTestCaseOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetEvaluationTestCaseOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationTestCaseOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiEvaluationTestCaseMetricList::class => \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationTestCaseMetricListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateEvaluationTestCaseInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateEvaluationTestCaseOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseIndexingJobsOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListKnowledgeBaseIndexingJobsOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiStartKnowledgeBaseIndexingJobInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiStartKnowledgeBaseIndexingJobInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiStartKnowledgeBaseIndexingJobOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiStartKnowledgeBaseIndexingJobOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListIndexingJobDataSourcesOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListIndexingJobDataSourcesOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetIndexingJobDetailsSignedURLOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetIndexingJobDetailsSignedURLOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetKnowledgeBaseIndexingJobOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetKnowledgeBaseIndexingJobOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCancelKnowledgeBaseIndexingJobInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCancelKnowledgeBaseIndexingJobInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCancelKnowledgeBaseIndexingJobOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCancelKnowledgeBaseIndexingJobOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBasesOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListKnowledgeBasesOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAWSDataSource::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAWSDataSourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiChunkingOptions::class => \Jane\Generated\DigitalOcean\Normalizer\ApiChunkingOptionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDropboxDataSource::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxDataSourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGoogleDriveDataSource::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGoogleDriveDataSourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiSpacesDataSource::class => \Jane\Generated\DigitalOcean\Normalizer\ApiSpacesDataSourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiWebCrawlerDataSource::class => \Jane\Generated\DigitalOcean\Normalizer\ApiWebCrawlerDataSourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiKBDataSource::class => \Jane\Generated\DigitalOcean\Normalizer\ApiKBDataSourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiAWSDataSourceDisplay::class => \Jane\Generated\DigitalOcean\Normalizer\ApiAWSDataSourceDisplayNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDropboxDataSourceDisplay::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxDataSourceDisplayNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGoogleDriveDataSourceDisplay::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGoogleDriveDataSourceDisplayNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBaseDataSource::class => \Jane\Generated\DigitalOcean\Normalizer\ApiKnowledgeBaseDataSourceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseDataSourcesOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListKnowledgeBaseDataSourcesOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseDataSourceInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseDataSourceOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDeleteKnowledgeBaseDataSourceOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteKnowledgeBaseDataSourceOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetKnowledgeBaseOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetKnowledgeBaseOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateKnowledgeBaseInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateKnowledgeBaseInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateKnowledgeBaseOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateKnowledgeBaseOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDeleteKnowledgeBaseOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteKnowledgeBaseOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiModelPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiModelPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListModelsOutputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListModelsOutputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiModelAPIKeyInfo::class => \Jane\Generated\DigitalOcean\Normalizer\ApiModelAPIKeyInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListModelAPIKeysOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListModelAPIKeysOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateModelAPIKeyInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateModelAPIKeyInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateModelAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateModelAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateModelAPIKeyInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateModelAPIKeyInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateModelAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateModelAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDeleteModelAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteModelAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiRegenerateModelAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiRegenerateModelAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensInput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxOauth2GetTokensInputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxOauth2GetTokensOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGenerateOauth2URLOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGenerateOauth2URLOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListOpenAIAPIKeysOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListOpenAIAPIKeysOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateOpenAIAPIKeyInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateOpenAIAPIKeyInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateOpenAIAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateOpenAIAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetOpenAIAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetOpenAIAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateOpenAIAPIKeyInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateOpenAIAPIKeyInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateOpenAIAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateOpenAIAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDeleteOpenAIAPIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteOpenAIAPIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListAgentsByOpenAIKeyOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsByOpenAIKeyOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\GenaiapiRegion::class => \Jane\Generated\DigitalOcean\Normalizer\GenaiapiRegionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListRegionsOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListRegionsOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateScheduledIndexingInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateScheduledIndexingInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiScheduledIndexingInfo::class => \Jane\Generated\DigitalOcean\Normalizer\ApiScheduledIndexingInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateScheduledIndexingOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateScheduledIndexingOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetScheduledIndexingOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetScheduledIndexingOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDeleteScheduledIndexingOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteScheduledIndexingOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListWorkspacesOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListWorkspacesOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateWorkspaceInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateWorkspaceInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiCreateWorkspaceOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiCreateWorkspaceOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiGetWorkspaceOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiGetWorkspaceOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateWorkspaceInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateWorkspaceInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiUpdateWorkspaceOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateWorkspaceOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiDeleteWorkspaceOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteWorkspaceOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListAgentsByWorkspaceOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsByWorkspaceOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiMoveAgentsToWorkspaceInputPublic::class => \Jane\Generated\DigitalOcean\Normalizer\ApiMoveAgentsToWorkspaceInputPublicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiMoveAgentsToWorkspaceOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiMoveAgentsToWorkspaceOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ApiListEvaluationTestCasesByWorkspaceOutput::class => \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationTestCasesByWorkspaceOutputNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseOneClicksAll::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseOneClicksAllNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseOneClicksCreate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseOneClicksCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAccount::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAccountNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseSshKeysAll::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseSshKeysAllNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseSshKeysNew::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseSshKeysNewNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseSshKeysExisting::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseSshKeysExistingNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseActions::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseActionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAction::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAddonsGetApp::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsGetAppNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAddonsGetAppMetadata::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsGetAppMetadataNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAddonsList::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAddonsCreate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAddonsGet::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsGetNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAddonsUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAppsValidateRollback::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAppsValidateRollbackNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAppsValidateRollbackError::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAppsValidateRollbackErrorNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllCdnEndpoints::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllCdnEndpointsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingEndpoint::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingEndpointNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllCertificates::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllCertificatesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseNewCertificate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseNewCertificateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingCertificate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingCertificateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseBillingHistory::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseBillingHistoryNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseInvoices::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseInvoicesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseInvoice::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseInvoiceNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseBillingInsights::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseBillingInsightsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabaseClusters::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseClustersNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabaseCluster::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseClusterNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabaseConfig::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseCa::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseCaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseFirewallRules::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseFirewallRulesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabaseBackups::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseBackupsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabaseBackupsScheduledBackupTime::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseBackupsScheduledBackupTimeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabaseReplicas::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseReplicasNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabaseReplica::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseReplicaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseEventsLogs::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseEventsLogsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseUsers::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseUsersNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseUser::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseUserNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabases::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabasesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabase::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseConnectionPool::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseConnectionPoolNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseEvictionPolicyResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseEvictionPolicyResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAutoscale::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAutoscaleNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseKafkaTopics::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaTopicsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseKafkaTopic::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaTopicNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseLogsinks::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseLogsinksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseLogsink::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseLogsinkNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseKafkaSchemas::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaSchemasNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseKafkaSchema::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaSchemaNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseKafkaSchemaVersion::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaSchemaVersionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabaseSchemaRegistryConfig::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseSchemaRegistryConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabaseSchemaRegistrySubjectConfig::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseSchemaRegistrySubjectConfigNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDatabaseMetricsAuth::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseMetricsAuthNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseOpensearchIndexes::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseOpensearchIndexesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllDomainsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDomainsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseCreateDomainResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseCreateDomainResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingDomain::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingDomainNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllDomainRecordsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDomainRecordsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseCreatedDomainRecord::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseCreatedDomainRecordNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDomainRecord::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDomainRecordNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllDroplets::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingDroplet::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingDropletNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllDropletBackups::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletBackupsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDropletBackupPolicy::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletBackupPolicyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllDropletBackupPolicies::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletBackupPoliciesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDropletsSupportedBackupPolicies::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletsSupportedBackupPoliciesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllDropletSnapshots::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletSnapshotsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllDropletActions::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletActionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDropletAction::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDropletActionsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletActionsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllKernels::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllKernelsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllFirewalls::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllFirewallsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseNeighborDroplets::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseNeighborDropletsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAssociatedResourcesList::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAssociatedResourcesListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllAutoscalePools::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllAutoscalePoolsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAutoscalePoolCreate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAutoscalePoolCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingAutoscalePool::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingAutoscalePoolNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllMembers::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllMembersNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseHistoryEvents::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseHistoryEventsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseListFirewallsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseListFirewallsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseCreateFirewallResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseCreateFirewallResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseGetFirewallResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseGetFirewallResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponsePutFirewallResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponsePutFirewallResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpList::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpCreated::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpCreatedNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpCreatedLinks::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpCreatedLinksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseFloatingIp::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpActions::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpActionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpAction::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpActionAction::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpActionActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseListNamespaces::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseListNamespacesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseNamespaceCreated::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseNamespaceCreatedNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseListTriggers::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseListTriggersNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseTriggerResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseTriggerResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllImages::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllImagesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseNewCustomImage::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseNewCustomImageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingImage::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingImageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseUpdatedImage::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseUpdatedImageNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseGetImageActionsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseGetImageActionsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllClusters::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllClustersNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseClusterCreate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseClusterCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingCluster::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingClusterNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseUpdatedCluster::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseUpdatedClusterNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAvailableUpgrades::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAvailableUpgradesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllNodePools::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllNodePoolsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseNodePoolCreate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseNodePoolCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingNodePool::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingNodePoolNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseNodePoolUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseNodePoolUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseClusterlintRun::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseClusterlintRunNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseStatusMessages::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseStatusMessagesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllLoadBalancers::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllLoadBalancersNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseLoadBalancerCreate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseLoadBalancerCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingLoadBalancer::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingLoadBalancerNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseUpdatedLoadBalancer::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseUpdatedLoadBalancerNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseListAlertPolicyResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseListAlertPolicyResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAlertPolicyResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAlertPolicyResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseMonitoringListDestinations::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseMonitoringListDestinationsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDestination::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDestinationNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseListSinks::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseListSinksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseSinks::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseSinksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllPartnerAttachments::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllPartnerAttachmentsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachment::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentDeleting::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentDeletingNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentBgpAuthKey::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentBgpAuthKeyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllPartnerAttachmentRemoteRoutes::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllPartnerAttachmentRemoteRoutesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentServiceKey::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentServiceKeyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseEmptyJsonObject::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseEmptyJsonObjectNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseProjectsList::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseProjectsListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingProject::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingProjectNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDefaultProject::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDefaultProjectNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseResourcesList::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseResourcesListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAssignedResourcesList::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAssignedResourcesListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllRegions::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRegionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllRegistriesInfo::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRegistriesInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseMultiregistryInfo::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseMultiregistryInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseSubscriptionResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseSubscriptionResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseRegistryOptionsResponse::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryOptionsResponseNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseRegistryOptionsResponseOptions::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryOptionsResponseOptionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseRegistryOptionsResponseOptionsSubscriptionTiersItem::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryOptionsResponseOptionsSubscriptionTiersItemNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseGarbageCollectionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseGarbageCollections::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseGarbageCollectionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllRepositoriesV2::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRepositoriesV2Normalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseRepositoryTags::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseRepositoryTagsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseRepositoryManifests::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseRepositoryManifestsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseRegistryInfo::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryInfoNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllRepositories::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRepositoriesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpList::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpCreated::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpCreatedNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpCreatedLinks::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpCreatedLinksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIp::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpActions::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpActionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpAction::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpActionAction::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpActionActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6List::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6ListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6Create::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6CreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6CreateReservedIpv6::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6CreateReservedIpv6Normalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6Normalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6Action::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6ActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6ActionAction::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6ActionActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixList::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixCreate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixGet::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixGetNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixListResources::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixListResourcesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllSizes::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllSizesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseSnapshots::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseSnapshotsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseSnapshotsExisting::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseSnapshotsExistingNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseKeyList::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyListNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseKeyCreate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseKeyGet::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyGetNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseKeyUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseTagsAll::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseTagsAllNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseTagsNew::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseTagsNewNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseTagsExisting::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseTagsExistingNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVolumes::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumesNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVolume::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVolumeAction::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeActionNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVolumeSnapshot::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeSnapshotNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVolumeActions::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeActionsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVolumeSnapshots::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeSnapshotsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllVpcs::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllVpcsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingVpc::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingVpcNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVpcMembers::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcMembersNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVpcPeerings::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcPeeringsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVpcPeering::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcPeeringNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllVpcPeerings::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllVpcPeeringsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseProvisioningVpcPeering::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseProvisioningVpcPeeringNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseActiveVpcPeering::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseActiveVpcPeeringNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseDeletingVpcPeering::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseDeletingVpcPeeringNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVpcNatGateways::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewaysNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVpcNatGatewayCreate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewayCreateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVpcNatGateway::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewayNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseVpcNatGatewayUpdate::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewayUpdateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllChecks::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllChecksNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingCheck::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingCheckNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingCheckState::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingCheckStateNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseAllAlerts::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseAllAlertsNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\ResponseExistingAlert::class => \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingAlertNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2AccountKeysSshKeyIdentifierPutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2AccountKeysSshKeyIdentifierPutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2AddOnsSaasPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasResourceUuidPatchBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2AddOnsSaasResourceUuidPatchBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasResourceUuidPlanPatchBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2AddOnsSaasResourceUuidPlanPatchBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidMigratePutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidMigratePutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidFirewallPutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidFirewallPutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidReplicasPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidReplicasPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidUsersPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernamePutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidUsersUsernamePutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidEvictionPolicyPutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidEvictionPolicyPutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidTopicsPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidTopicsPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidTopicsTopicNamePutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidTopicsTopicNamePutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidLogsinkPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidLogsinkPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidSchemaRegistryPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigPutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigPutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigSubjectNamePutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigSubjectNamePutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2DatabasesMetricsCredentialsPutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesMetricsCredentialsPutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2FirewallsPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdPutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdPutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdDropletsDeleteBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdDropletsDeleteBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdDropletsPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdDropletsPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdTagsDeleteBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdTagsDeleteBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdTagsPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdTagsPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdRulesDeleteBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdRulesDeleteBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdRulesPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdRulesPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2KubernetesClustersClusterIdUpgradePostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2KubernetesClustersClusterIdUpgradePostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdDropletsDeleteBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdDropletsDeleteBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdDropletsPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdDropletsPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesDeleteBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdForwardingRulesDeleteBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdForwardingRulesPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2MonitoringSinksPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2MonitoringSinksPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2ProjectsPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2ProjectsPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2RegistriesSubscriptionPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2RegistriesSubscriptionPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2RegistrySubscriptionPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2RegistrySubscriptionPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2VolumesVolumeIdSnapshotsPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2VolumesVolumeIdSnapshotsPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2VpcsPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2VpcsPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPatchBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPatchBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPeeringsPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPeeringsPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPeeringsVpcPeeringIdPatchBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPeeringsVpcPeeringIdPatchBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2VpcPeeringsPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2VpcPeeringsPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2VpcPeeringsVpcPeeringIdPatchBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2VpcPeeringsVpcPeeringIdPatchBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2UptimeChecksPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdPutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksCheckIdPutBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdAlertsPostBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksCheckIdAlertsPostBodyNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdAlertsAlertIdPutBody::class => \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksCheckIdAlertsAlertIdPutBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\Generated\DigitalOcean\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \Jane\Generated\DigitalOcean\Model\Error::class => false,
            \Jane\Generated\DigitalOcean\Model\OneClicks::class => false,
            \Jane\Generated\DigitalOcean\Model\OneClicksCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\Account::class => false,
            \Jane\Generated\DigitalOcean\Model\AccountTeam::class => false,
            \Jane\Generated\DigitalOcean\Model\SshKeys::class => false,
            \Jane\Generated\DigitalOcean\Model\LinkToLastPage::class => false,
            \Jane\Generated\DigitalOcean\Model\LinkToNextPage::class => false,
            \Jane\Generated\DigitalOcean\Model\ForwardLinks::class => false,
            \Jane\Generated\DigitalOcean\Model\LinkToFirstPage::class => false,
            \Jane\Generated\DigitalOcean\Model\LinkToPrevPage::class => false,
            \Jane\Generated\DigitalOcean\Model\BackwardLinks::class => false,
            \Jane\Generated\DigitalOcean\Model\PageLinks::class => false,
            \Jane\Generated\DigitalOcean\Model\Pagination::class => false,
            \Jane\Generated\DigitalOcean\Model\MetaProperties::class => false,
            \Jane\Generated\DigitalOcean\Model\Meta::class => false,
            \Jane\Generated\DigitalOcean\Model\MetaMeta::class => false,
            \Jane\Generated\DigitalOcean\Model\Region::class => false,
            \Jane\Generated\DigitalOcean\Model\Action::class => false,
            \Jane\Generated\DigitalOcean\Model\AddonsFeature::class => false,
            \Jane\Generated\DigitalOcean\Model\AddonsDimensionVolumeWithPrice::class => false,
            \Jane\Generated\DigitalOcean\Model\AddonsDimensionWithPrice::class => false,
            \Jane\Generated\DigitalOcean\Model\AddonsPlan::class => false,
            \Jane\Generated\DigitalOcean\Model\AddonsAppInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\AddonsAppMetadata::class => false,
            \Jane\Generated\DigitalOcean\Model\AddonsResourceMetadata::class => false,
            \Jane\Generated\DigitalOcean\Model\AddonsResource::class => false,
            \Jane\Generated\DigitalOcean\Model\AddonsResourceNew::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeploymentJob::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeploymentFunctions::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStepReason::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgressStep::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeploymentProgress::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeploymentService::class => false,
            \Jane\Generated\DigitalOcean\Model\AppDomainSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsGitSourceSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsGithubSourceSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsGitlabSourceSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsBitbucketSourceSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsImageSourceSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsImageSourceSpecDeployOnPush::class => false,
            \Jane\Generated\DigitalOcean\Model\AppVariableDefinition::class => false,
            \Jane\Generated\DigitalOcean\Model\AppLogDestinationPapertrailSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppLogDestinationDatadogSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppLogDestinationLogtailSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppLogDestinationOpenSearchSpecBasicAuth::class => false,
            \Jane\Generated\DigitalOcean\Model\AppLogDestinationOpenSearchSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppLogDestinationDefinition::class => false,
            \Jane\Generated\DigitalOcean\Model\AppComponentBase::class => false,
            \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBase::class => false,
            \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscaling::class => false,
            \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscalingMetrics::class => false,
            \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscalingMetricsCpu::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsStringMatch::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsCorsPolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\AppServiceSpecHealthCheck::class => false,
            \Jane\Generated\DigitalOcean\Model\AppHealthCheckSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppRouteSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppServiceSpecTermination::class => false,
            \Jane\Generated\DigitalOcean\Model\AppServiceSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppServiceSpecCors::class => false,
            \Jane\Generated\DigitalOcean\Model\AppStaticSiteSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppStaticSiteSpecCors::class => false,
            \Jane\Generated\DigitalOcean\Model\AppJobSpecTermination::class => false,
            \Jane\Generated\DigitalOcean\Model\AppJobSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppWorkerSpecTermination::class => false,
            \Jane\Generated\DigitalOcean\Model\AppWorkerSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppAlertSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppFunctionsSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppFunctionsSpecCors::class => false,
            \Jane\Generated\DigitalOcean\Model\AppDatabaseSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleStringMatchPrefix::class => false,
            \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleStringMatchExact::class => false,
            \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleMatch::class => false,
            \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleRoutingComponent::class => false,
            \Jane\Generated\DigitalOcean\Model\AppIngressSpecRuleRoutingRedirect::class => false,
            \Jane\Generated\DigitalOcean\Model\AppIngressSpecRule::class => false,
            \Jane\Generated\DigitalOcean\Model\AppIngressSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppEgressSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppMaintenanceSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsVpcEgressIp::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsVpc::class => false,
            \Jane\Generated\DigitalOcean\Model\AppSpec::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeploymentStaticSite::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeploymentWorker::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeployment::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDomainProgress::class => false,
            \Jane\Generated\DigitalOcean\Model\AppDomainValidation::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDomain::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsRegion::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDedicatedEgressIp::class => false,
            \Jane\Generated\DigitalOcean\Model\App::class => false,
            \Jane\Generated\DigitalOcean\Model\AppPendingDeployment::class => false,
            \Jane\Generated\DigitalOcean\Model\AppPinnedDeployment::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsCreateAppRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\AppResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsUpdateAppRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeleteAppResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsRestartRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeploymentResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsGetLogsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsGetExecResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppInstance::class => false,
            \Jane\Generated\DigitalOcean\Model\AppInstances::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsDeploymentsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsCreateDeploymentRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\AppJobInvocation::class => false,
            \Jane\Generated\DigitalOcean\Model\AppJobInvocationTrigger::class => false,
            \Jane\Generated\DigitalOcean\Model\AppJobInvocationTriggerScheduled::class => false,
            \Jane\Generated\DigitalOcean\Model\AppJobInvocationTriggerScheduledSchedule::class => false,
            \Jane\Generated\DigitalOcean\Model\AppJobInvocationTriggerManual::class => false,
            \Jane\Generated\DigitalOcean\Model\AppJobInvocationTriggerManualUser::class => false,
            \Jane\Generated\DigitalOcean\Model\AppJobInvocations::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsInstanceSize::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsListInstanceSizesResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsGetInstanceSizeResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsListRegionsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppPropose::class => false,
            \Jane\Generated\DigitalOcean\Model\AppProposeResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppAlertSlackWebhook::class => false,
            \Jane\Generated\DigitalOcean\Model\AppAlertProgressStepReason::class => false,
            \Jane\Generated\DigitalOcean\Model\AppAlertProgressStep::class => false,
            \Jane\Generated\DigitalOcean\Model\AppAlertProgress::class => false,
            \Jane\Generated\DigitalOcean\Model\AppAlert::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsListAlertsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsAssignAppAlertDestinationsRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsAlertResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\AppsRollbackAppRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\AppRollbackValidationCondition::class => false,
            \Jane\Generated\DigitalOcean\Model\AppMetricsBandwidthUsageDetails::class => false,
            \Jane\Generated\DigitalOcean\Model\AppMetricsBandwidthUsage::class => false,
            \Jane\Generated\DigitalOcean\Model\AppMetricsBandwidthUsageRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\AppComponentHealth::class => false,
            \Jane\Generated\DigitalOcean\Model\AppFunctionsComponentHealth::class => false,
            \Jane\Generated\DigitalOcean\Model\AppFunctionsComponentHealthFunctionsComponentHealthMetricsItem::class => false,
            \Jane\Generated\DigitalOcean\Model\AppHealth::class => false,
            \Jane\Generated\DigitalOcean\Model\AppHealthResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\CdnEndpoint::class => false,
            \Jane\Generated\DigitalOcean\Model\UpdateEndpoint::class => false,
            \Jane\Generated\DigitalOcean\Model\PurgeCache::class => false,
            \Jane\Generated\DigitalOcean\Model\Certificate::class => false,
            \Jane\Generated\DigitalOcean\Model\CertificateCreateBase::class => false,
            \Jane\Generated\DigitalOcean\Model\CertificateRequestLetsEncrypt::class => false,
            \Jane\Generated\DigitalOcean\Model\CertificateRequestCustom::class => false,
            \Jane\Generated\DigitalOcean\Model\Balance::class => false,
            \Jane\Generated\DigitalOcean\Model\BillingHistory::class => false,
            \Jane\Generated\DigitalOcean\Model\MetaOptionalTotal::class => false,
            \Jane\Generated\DigitalOcean\Model\InvoicePreview::class => false,
            \Jane\Generated\DigitalOcean\Model\InvoiceItem::class => false,
            \Jane\Generated\DigitalOcean\Model\BillingAddress::class => false,
            \Jane\Generated\DigitalOcean\Model\ProductChargeItem::class => false,
            \Jane\Generated\DigitalOcean\Model\ProductUsageCharges::class => false,
            \Jane\Generated\DigitalOcean\Model\SimpleCharge::class => false,
            \Jane\Generated\DigitalOcean\Model\InvoiceSummary::class => false,
            \Jane\Generated\DigitalOcean\Model\InvoiceSummaryUserBillingAddress::class => false,
            \Jane\Generated\DigitalOcean\Model\InvoiceSummaryProductCharges::class => false,
            \Jane\Generated\DigitalOcean\Model\InvoiceSummaryOverages::class => false,
            \Jane\Generated\DigitalOcean\Model\InvoiceSummaryTaxes::class => false,
            \Jane\Generated\DigitalOcean\Model\InvoiceSummaryCreditsAndAdjustments::class => false,
            \Jane\Generated\DigitalOcean\Model\BillingDataPoint::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseRegionOptions::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseVersionOptions::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseLayoutOption::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseLayoutOptions::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseVersionAvailability::class => false,
            \Jane\Generated\DigitalOcean\Model\Options::class => false,
            \Jane\Generated\DigitalOcean\Model\OptionsOptions::class => false,
            \Jane\Generated\DigitalOcean\Model\OptionsOptionsKafka::class => false,
            \Jane\Generated\DigitalOcean\Model\OptionsOptionsMongodb::class => false,
            \Jane\Generated\DigitalOcean\Model\OptionsOptionsPg::class => false,
            \Jane\Generated\DigitalOcean\Model\OptionsOptionsMysql::class => false,
            \Jane\Generated\DigitalOcean\Model\OptionsOptionsRedis::class => false,
            \Jane\Generated\DigitalOcean\Model\OptionsOptionsValkey::class => false,
            \Jane\Generated\DigitalOcean\Model\OptionsOptionsOpensearch::class => false,
            \Jane\Generated\DigitalOcean\Model\OptionsVersionAvailability::class => false,
            \Jane\Generated\DigitalOcean\Model\OpensearchConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\SchemaRegistryConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\MysqlSettings::class => false,
            \Jane\Generated\DigitalOcean\Model\UserSettings::class => false,
            \Jane\Generated\DigitalOcean\Model\UserSettingsOpensearchAclItem::class => false,
            \Jane\Generated\DigitalOcean\Model\UserSettingsAclItem::class => false,
            \Jane\Generated\DigitalOcean\Model\UserSettingsMongoUserSettings::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseUser::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseMaintenanceWindow::class => false,
            \Jane\Generated\DigitalOcean\Model\FirewallRule::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseServiceEndpoint::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterRead::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadUiConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadSchemaRegistryConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadPrivateConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadStandbyConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadStandbyPrivateConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterReadMaintenanceWindow::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseStorageAutoscaleParams::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseAutoscaleParams::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseAutoscaleParamsStorage::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseCluster::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterUiConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterSchemaRegistryConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterPrivateConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterStandbyConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterStandbyPrivateConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterMaintenanceWindow::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterAutoscale::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseBackup::class => false,
            \Jane\Generated\DigitalOcean\Model\MysqlIncrementalBackup::class => false,
            \Jane\Generated\DigitalOcean\Model\MysqlAdvancedConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\PgbouncerAdvancedConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\TimescaledbAdvancedConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\PostgresAdvancedConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\RedisAdvancedConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\ValkeyAdvancedConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\KafkaAdvancedConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\OpensearchAdvancedConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\MongoAdvancedConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\Ca::class => false,
            \Jane\Generated\DigitalOcean\Model\OnlineMigration::class => false,
            \Jane\Generated\DigitalOcean\Model\SourceDatabase::class => false,
            \Jane\Generated\DigitalOcean\Model\SourceDatabaseSource::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseClusterResize::class => false,
            \Jane\Generated\DigitalOcean\Model\Backup::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseReplicaRead::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseReplicaReadConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseReplicaReadPrivateConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseReplica::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseReplicaConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseReplicaPrivateConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\EventsLogs::class => false,
            \Jane\Generated\DigitalOcean\Model\Database::class => false,
            \Jane\Generated\DigitalOcean\Model\ConnectionPool::class => false,
            \Jane\Generated\DigitalOcean\Model\ConnectionPoolConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\ConnectionPoolPrivateConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\ConnectionPoolStandbyConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\ConnectionPoolStandbyPrivateConnection::class => false,
            \Jane\Generated\DigitalOcean\Model\ConnectionPools::class => false,
            \Jane\Generated\DigitalOcean\Model\ConnectionPoolUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\SqlMode::class => false,
            \Jane\Generated\DigitalOcean\Model\Version2::class => false,
            \Jane\Generated\DigitalOcean\Model\KafkaTopicBase::class => false,
            \Jane\Generated\DigitalOcean\Model\KafkaTopic::class => false,
            \Jane\Generated\DigitalOcean\Model\KafkaTopicConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\KafkaTopicCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\KafkaTopicPartition::class => false,
            \Jane\Generated\DigitalOcean\Model\KafkaTopicPartitionConsumerGroupsItem::class => false,
            \Jane\Generated\DigitalOcean\Model\KafkaTopicVerbose::class => false,
            \Jane\Generated\DigitalOcean\Model\KafkaTopicUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\LogsinkBaseVerbose::class => false,
            \Jane\Generated\DigitalOcean\Model\RsyslogLogsink::class => false,
            \Jane\Generated\DigitalOcean\Model\ElasticsearchLogsink::class => false,
            \Jane\Generated\DigitalOcean\Model\OpensearchLogsink::class => false,
            \Jane\Generated\DigitalOcean\Model\DatadogLogsink::class => false,
            \Jane\Generated\DigitalOcean\Model\LogsinkVerbose::class => false,
            \Jane\Generated\DigitalOcean\Model\LogsinkSchema::class => false,
            \Jane\Generated\DigitalOcean\Model\LogsinkBase::class => false,
            \Jane\Generated\DigitalOcean\Model\LogsinkCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\LogsinkUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\KafkaSchemaVerbose::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseKafkaSchemaCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\KafkaSchemaVersionVerbose::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabasesBasicAuthCredentials::class => false,
            \Jane\Generated\DigitalOcean\Model\DatabaseMetricsCredentials::class => false,
            \Jane\Generated\DigitalOcean\Model\OpensearchIndexBase::class => false,
            \Jane\Generated\DigitalOcean\Model\OpensearchIndex::class => false,
            \Jane\Generated\DigitalOcean\Model\Domain::class => false,
            \Jane\Generated\DigitalOcean\Model\DomainRecord::class => false,
            \Jane\Generated\DigitalOcean\Model\DomainRecordA::class => false,
            \Jane\Generated\DigitalOcean\Model\DomainRecordAaaa::class => false,
            \Jane\Generated\DigitalOcean\Model\DomainRecordCaa::class => false,
            \Jane\Generated\DigitalOcean\Model\DomainRecordCname::class => false,
            \Jane\Generated\DigitalOcean\Model\DomainRecordMx::class => false,
            \Jane\Generated\DigitalOcean\Model\DomainRecordNs::class => false,
            \Jane\Generated\DigitalOcean\Model\DomainRecordSoa::class => false,
            \Jane\Generated\DigitalOcean\Model\DomainRecordSrv::class => false,
            \Jane\Generated\DigitalOcean\Model\DomainRecordTxt::class => false,
            \Jane\Generated\DigitalOcean\Model\DiskInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\DiskInfoSize::class => false,
            \Jane\Generated\DigitalOcean\Model\Kernel::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletNextBackupWindow::class => false,
            \Jane\Generated\DigitalOcean\Model\Image::class => false,
            \Jane\Generated\DigitalOcean\Model\GpuInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\GpuInfoVram::class => false,
            \Jane\Generated\DigitalOcean\Model\Size::class => false,
            \Jane\Generated\DigitalOcean\Model\NetworkV4::class => false,
            \Jane\Generated\DigitalOcean\Model\NetworkV6::class => false,
            \Jane\Generated\DigitalOcean\Model\Droplet::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletImage::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletNetworks::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletBackupPolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletCreateBackupPolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletSingleCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletMultiCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\ActionLink::class => false,
            \Jane\Generated\DigitalOcean\Model\SnapshotsBase::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletSnapshot::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecord::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecordBackupPolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecordNextBackupWindow::class => false,
            \Jane\Generated\DigitalOcean\Model\SupportedDropletBackupPolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletAction::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletActionEnableBackups::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletActionEnableBackupsBackupPolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletActionChangeBackupPolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletActionChangeBackupPolicyBackupPolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletActionRestore::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletActionResize::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletActionRebuild::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletActionRename::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletActionChangeKernel::class => false,
            \Jane\Generated\DigitalOcean\Model\DropletActionSnapshot::class => false,
            \Jane\Generated\DigitalOcean\Model\FirewallRuleBase::class => false,
            \Jane\Generated\DigitalOcean\Model\FirewallRuleTarget::class => false,
            \Jane\Generated\DigitalOcean\Model\FirewallRules::class => false,
            \Jane\Generated\DigitalOcean\Model\FirewallRulesInboundRulesItem::class => false,
            \Jane\Generated\DigitalOcean\Model\FirewallRulesInboundRulesItemSources::class => false,
            \Jane\Generated\DigitalOcean\Model\FirewallRulesOutboundRulesItem::class => false,
            \Jane\Generated\DigitalOcean\Model\FirewallRulesOutboundRulesItemDestinations::class => false,
            \Jane\Generated\DigitalOcean\Model\Firewall::class => false,
            \Jane\Generated\DigitalOcean\Model\FirewallPendingChangesItem::class => false,
            \Jane\Generated\DigitalOcean\Model\AssociatedResource::class => false,
            \Jane\Generated\DigitalOcean\Model\SelectiveDestroyAssociatedResource::class => false,
            \Jane\Generated\DigitalOcean\Model\DestroyedAssociatedResource::class => false,
            \Jane\Generated\DigitalOcean\Model\AssociatedResourceStatus::class => false,
            \Jane\Generated\DigitalOcean\Model\AssociatedResourceStatusResources::class => false,
            \Jane\Generated\DigitalOcean\Model\AutoscalePoolStaticConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\AutoscalePoolDynamicConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\AutoscalePoolDropletTemplate::class => false,
            \Jane\Generated\DigitalOcean\Model\CurrentUtilization::class => false,
            \Jane\Generated\DigitalOcean\Model\AutoscalePool::class => false,
            \Jane\Generated\DigitalOcean\Model\AutoscalePoolCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\MemberCurrentUtilization::class => false,
            \Jane\Generated\DigitalOcean\Model\Member::class => false,
            \Jane\Generated\DigitalOcean\Model\History::class => false,
            \Jane\Generated\DigitalOcean\Model\FloatingIp::class => false,
            \Jane\Generated\DigitalOcean\Model\FloatingIpRegion::class => false,
            \Jane\Generated\DigitalOcean\Model\FloatingIPsAction::class => false,
            \Jane\Generated\DigitalOcean\Model\FloatingIpActionAssign::class => false,
            \Jane\Generated\DigitalOcean\Model\FloatingIpActionUnassign::class => false,
            \Jane\Generated\DigitalOcean\Model\NamespaceInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\CreateNamespace::class => false,
            \Jane\Generated\DigitalOcean\Model\ScheduledDetails::class => false,
            \Jane\Generated\DigitalOcean\Model\ScheduledDetailsBody::class => false,
            \Jane\Generated\DigitalOcean\Model\TriggerInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\TriggerInfoScheduledRuns::class => false,
            \Jane\Generated\DigitalOcean\Model\CreateTrigger::class => false,
            \Jane\Generated\DigitalOcean\Model\UpdateTrigger::class => false,
            \Jane\Generated\DigitalOcean\Model\ImageUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\ImageNewCustom::class => false,
            \Jane\Generated\DigitalOcean\Model\ImageActionBase::class => false,
            \Jane\Generated\DigitalOcean\Model\ImageActionTransfer::class => false,
            \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolSize::class => false,
            \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolTaint::class => false,
            \Jane\Generated\DigitalOcean\Model\Node::class => false,
            \Jane\Generated\DigitalOcean\Model\NodeStatus::class => false,
            \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolBase::class => false,
            \Jane\Generated\DigitalOcean\Model\KubernetesNodePool::class => false,
            \Jane\Generated\DigitalOcean\Model\MaintenancePolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\ControlPlaneFirewall::class => false,
            \Jane\Generated\DigitalOcean\Model\ClusterAutoscalerConfiguration::class => false,
            \Jane\Generated\DigitalOcean\Model\RoutingAgent::class => false,
            \Jane\Generated\DigitalOcean\Model\AmdGpuDevicePlugin::class => false,
            \Jane\Generated\DigitalOcean\Model\AmdGpuDeviceMetricsExporterPlugin::class => false,
            \Jane\Generated\DigitalOcean\Model\NvidiaGpuDevicePlugin::class => false,
            \Jane\Generated\DigitalOcean\Model\RdmaSharedDevPlugin::class => false,
            \Jane\Generated\DigitalOcean\Model\ClusterRead::class => false,
            \Jane\Generated\DigitalOcean\Model\ClusterReadStatus::class => false,
            \Jane\Generated\DigitalOcean\Model\Cluster::class => false,
            \Jane\Generated\DigitalOcean\Model\ClusterStatus::class => false,
            \Jane\Generated\DigitalOcean\Model\ClusterUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResource::class => false,
            \Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResources::class => false,
            \Jane\Generated\DigitalOcean\Model\DestroyAssociatedKubernetesResources::class => false,
            \Jane\Generated\DigitalOcean\Model\Credentials::class => false,
            \Jane\Generated\DigitalOcean\Model\KubernetesVersion::class => false,
            \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\User::class => false,
            \Jane\Generated\DigitalOcean\Model\UserKubernetesClusterUser::class => false,
            \Jane\Generated\DigitalOcean\Model\KubernetesRegion::class => false,
            \Jane\Generated\DigitalOcean\Model\KubernetesSize::class => false,
            \Jane\Generated\DigitalOcean\Model\KubernetesOptions::class => false,
            \Jane\Generated\DigitalOcean\Model\KubernetesOptionsOptions::class => false,
            \Jane\Generated\DigitalOcean\Model\ClusterlintResults::class => false,
            \Jane\Generated\DigitalOcean\Model\ClusterlintResultsDiagnosticsItem::class => false,
            \Jane\Generated\DigitalOcean\Model\ClusterlintResultsDiagnosticsItemObject::class => false,
            \Jane\Generated\DigitalOcean\Model\ClusterlintRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\ClusterRegistry::class => false,
            \Jane\Generated\DigitalOcean\Model\ClusterRegistries::class => false,
            \Jane\Generated\DigitalOcean\Model\StatusMessages::class => false,
            \Jane\Generated\DigitalOcean\Model\ForwardingRule::class => false,
            \Jane\Generated\DigitalOcean\Model\HealthCheck::class => false,
            \Jane\Generated\DigitalOcean\Model\StickySessions::class => false,
            \Jane\Generated\DigitalOcean\Model\LbFirewall::class => false,
            \Jane\Generated\DigitalOcean\Model\Domains::class => false,
            \Jane\Generated\DigitalOcean\Model\GlbSettings::class => false,
            \Jane\Generated\DigitalOcean\Model\GlbSettingsCdn::class => false,
            \Jane\Generated\DigitalOcean\Model\LoadBalancerBase::class => false,
            \Jane\Generated\DigitalOcean\Model\LoadBalancer::class => false,
            \Jane\Generated\DigitalOcean\Model\LoadBalancerRegion::class => false,
            \Jane\Generated\DigitalOcean\Model\SlackDetails::class => false,
            \Jane\Generated\DigitalOcean\Model\Alerts::class => false,
            \Jane\Generated\DigitalOcean\Model\AlertPolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\ListAlertPolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\AlertPolicyRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\MetricsResult::class => false,
            \Jane\Generated\DigitalOcean\Model\MetricsData::class => false,
            \Jane\Generated\DigitalOcean\Model\Metrics::class => false,
            \Jane\Generated\DigitalOcean\Model\OpensearchConfigOmitCredentials::class => false,
            \Jane\Generated\DigitalOcean\Model\DestinationOmitCredentials::class => false,
            \Jane\Generated\DigitalOcean\Model\OpensearchConfigRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\OpensearchConfigRequestCredentials::class => false,
            \Jane\Generated\DigitalOcean\Model\DestinationRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\OpensearchConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\OpensearchConfigCredentials::class => false,
            \Jane\Generated\DigitalOcean\Model\Destination::class => false,
            \Jane\Generated\DigitalOcean\Model\SinkResource::class => false,
            \Jane\Generated\DigitalOcean\Model\SinksResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsListResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsRequest::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsCreateResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsGetResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsAction::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsActionResize::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsActionResizeParams::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsActionSnapshot::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsActionSnapshotParams::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsActionAttach::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsActionAttachParams::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsActionDetach::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsActionDetachParams::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsActionsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsActionsResponseAction::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsSnapshotResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsSnapshotListResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\NfsSnapshotGetResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\PartnerAttachment::class => false,
            \Jane\Generated\DigitalOcean\Model\PartnerAttachmentBgp::class => false,
            \Jane\Generated\DigitalOcean\Model\PartnerAttachmentWritable::class => false,
            \Jane\Generated\DigitalOcean\Model\PartnerAttachmentWritableBgp::class => false,
            \Jane\Generated\DigitalOcean\Model\PartnerAttachmentServiceKey::class => false,
            \Jane\Generated\DigitalOcean\Model\PartnerAttachmentRemoteRoute::class => false,
            \Jane\Generated\DigitalOcean\Model\ProjectBase::class => false,
            \Jane\Generated\DigitalOcean\Model\Project::class => false,
            \Jane\Generated\DigitalOcean\Model\Resource::class => false,
            \Jane\Generated\DigitalOcean\Model\ResourceLinks::class => false,
            \Jane\Generated\DigitalOcean\Model\ProjectAssignment::class => false,
            \Jane\Generated\DigitalOcean\Model\RegistryBase::class => false,
            \Jane\Generated\DigitalOcean\Model\SubscriptionTierBase::class => false,
            \Jane\Generated\DigitalOcean\Model\Subscription::class => false,
            \Jane\Generated\DigitalOcean\Model\Registry::class => false,
            \Jane\Generated\DigitalOcean\Model\RegistrySubscription::class => false,
            \Jane\Generated\DigitalOcean\Model\MultiregistryCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\Multiregistry::class => false,
            \Jane\Generated\DigitalOcean\Model\DockerCredentials::class => false,
            \Jane\Generated\DigitalOcean\Model\DockerCredentialsAuths::class => false,
            \Jane\Generated\DigitalOcean\Model\DockerCredentialsAuthsRegistryDigitaloceanCom::class => false,
            \Jane\Generated\DigitalOcean\Model\SubscriptionTierExtended::class => false,
            \Jane\Generated\DigitalOcean\Model\GarbageCollection::class => false,
            \Jane\Generated\DigitalOcean\Model\UpdateRegistry::class => false,
            \Jane\Generated\DigitalOcean\Model\RepositoryBlob::class => false,
            \Jane\Generated\DigitalOcean\Model\RepositoryManifest::class => false,
            \Jane\Generated\DigitalOcean\Model\RepositoryV2::class => false,
            \Jane\Generated\DigitalOcean\Model\RepositoryTag::class => false,
            \Jane\Generated\DigitalOcean\Model\ValidateRegistry::class => false,
            \Jane\Generated\DigitalOcean\Model\RegistryCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\Repository::class => false,
            \Jane\Generated\DigitalOcean\Model\RegistryRunGc::class => false,
            \Jane\Generated\DigitalOcean\Model\NeighborIds::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIp::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIpRegion::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIpActionType::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIpActionAssign::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIpActionUnassign::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIpv6List::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIpv6ListReservedIpv6sItem::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIpv6Create::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIpv6::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIpv6ActionType::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIpv6ActionAssign::class => false,
            \Jane\Generated\DigitalOcean\Model\ReservedIpv6ActionUnassign::class => false,
            \Jane\Generated\DigitalOcean\Model\ByoipPrefix::class => false,
            \Jane\Generated\DigitalOcean\Model\ByoipPrefixValidationsItem::class => false,
            \Jane\Generated\DigitalOcean\Model\ByoipPrefixCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\ByoipPrefixUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\ByoipPrefixResource::class => false,
            \Jane\Generated\DigitalOcean\Model\Snapshots::class => false,
            \Jane\Generated\DigitalOcean\Model\Grant::class => false,
            \Jane\Generated\DigitalOcean\Model\Key::class => false,
            \Jane\Generated\DigitalOcean\Model\KeyCreateResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\TagsMetadata::class => false,
            \Jane\Generated\DigitalOcean\Model\Tags::class => false,
            \Jane\Generated\DigitalOcean\Model\TagsResources::class => false,
            \Jane\Generated\DigitalOcean\Model\TagsResourcesDroplets::class => false,
            \Jane\Generated\DigitalOcean\Model\TagsResourcesImgages::class => false,
            \Jane\Generated\DigitalOcean\Model\TagsResourcesVolumes::class => false,
            \Jane\Generated\DigitalOcean\Model\TagsResourcesVolumeSnapshots::class => false,
            \Jane\Generated\DigitalOcean\Model\TagsResourcesDatabases::class => false,
            \Jane\Generated\DigitalOcean\Model\ErrorWithRootCauses::class => false,
            \Jane\Generated\DigitalOcean\Model\TagsResource::class => false,
            \Jane\Generated\DigitalOcean\Model\TagsResourceResourcesItem::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumeBaseRead::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumeFull::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumeFullRegion::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumeBase::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumeSnapshotId::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumeWriteFileSystemType::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumesExt4::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumesXfs::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumeActionPostBase::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumeActionPostAttach::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumeActionPostDetach::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumeAction::class => false,
            \Jane\Generated\DigitalOcean\Model\VolumeActionPostResize::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcUpdatable::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcDefault::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcBase::class => false,
            \Jane\Generated\DigitalOcean\Model\Vpc::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcMember::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcPeeringBase::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcPeeringCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcPeeringUpdatable::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcPeering::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcNatGatewayGet::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcNatGatewayGetVpcsItem::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcNatGatewayGetEgresses::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcNatGatewayGetEgressesPublicGatewaysItem::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcNatGatewayCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcNatGatewayCreateVpcsItem::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\VpcNatGatewayUpdateVpcsItem::class => false,
            \Jane\Generated\DigitalOcean\Model\CheckBase::class => false,
            \Jane\Generated\DigitalOcean\Model\CheckUpdatable::class => false,
            \Jane\Generated\DigitalOcean\Model\Check::class => false,
            \Jane\Generated\DigitalOcean\Model\RegionState::class => false,
            \Jane\Generated\DigitalOcean\Model\RegionalState::class => false,
            \Jane\Generated\DigitalOcean\Model\PreviousOutage::class => false,
            \Jane\Generated\DigitalOcean\Model\State::class => false,
            \Jane\Generated\DigitalOcean\Model\AlertBase::class => false,
            \Jane\Generated\DigitalOcean\Model\Notification::class => false,
            \Jane\Generated\DigitalOcean\Model\NotificationSlackItem::class => false,
            \Jane\Generated\DigitalOcean\Model\AlertUpdatable::class => false,
            \Jane\Generated\DigitalOcean\Model\Alert::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiChatbot::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentChatbotIdentifier::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDeployment::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgreement::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiModelVersion::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiModel::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentTemplateGuardrail::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiIndexedDataSource::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiIndexingJob::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBase::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentTemplate::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiPages::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiLinks::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiMeta::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListAgentsOutputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateAgentInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAnthropicAPIKeyInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentAPIKeyInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentAPIKey::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgent::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentFunction::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentGuardrail::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentLoggingConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiModelProviderKeyInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiOpenAIAPIKeyInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiEvaluationDataset::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetric::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiStarMetric::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiEvaluationTestCase::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiWorkspace::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateAgentOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListAgentAPIKeysOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateAgentAPIKeyInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateAgentAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentAPIKeyInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDeleteAgentAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiRegenerateAgentAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentFunctionOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUnlinkAgentFunctionOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiLinkKnowledgeBaseOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUnlinkKnowledgeBaseOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateLinkedAgentOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiLinkAgentInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiLinkAgentOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUnlinkAgentOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetAgentOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDeleteAgentOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetChildrenOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentDeploymentVisibilityInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateAgentDeploymentVisbilityOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUsageMeasurement::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiResourceUsage::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetAgentUsageOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentChildRelationshipVerion::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentFunctionVersion::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentGuardrailVersion::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentKnowledgeBaseVersion::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAgentVersion::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListAgentVersionsOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiRollbackToAgentVersionInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAuditHeader::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiRollbackToAgentVersionOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListAnthropicAPIKeysOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateAnthropicAPIKeyInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateAnthropicAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetAnthropicAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateAnthropicAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDeleteAnthropicAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListAgentsByAnthropicKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiFileUploadDataSource::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationDatasetInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationDatasetOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiPresignedUrlFile::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiFilePresignedUrlResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateDataSourceFileUploadPresignedUrlsOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListEvaluationMetricsOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiRunEvaluationTestCaseInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiRunEvaluationTestCaseOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiEvaluationMetricResult::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiEvaluationRun::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetEvaluationRunOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiPromptChunk::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiEvaluationTraceSpan::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiPrompt::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetEvaluationRunResultsOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetEvaluationRunPromptResultsOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListEvaluationTestCasesOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationTestCaseInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateEvaluationTestCaseOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListEvaluationRunsByTestCaseOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetEvaluationTestCaseOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiEvaluationTestCaseMetricList::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseIndexingJobsOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiStartKnowledgeBaseIndexingJobInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiStartKnowledgeBaseIndexingJobOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListIndexingJobDataSourcesOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetIndexingJobDetailsSignedURLOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetKnowledgeBaseIndexingJobOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCancelKnowledgeBaseIndexingJobInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCancelKnowledgeBaseIndexingJobOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBasesOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAWSDataSource::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiChunkingOptions::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDropboxDataSource::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGoogleDriveDataSource::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiSpacesDataSource::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiWebCrawlerDataSource::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiKBDataSource::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiAWSDataSourceDisplay::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDropboxDataSourceDisplay::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGoogleDriveDataSourceDisplay::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBaseDataSource::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseDataSourcesOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDeleteKnowledgeBaseDataSourceOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetKnowledgeBaseOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateKnowledgeBaseInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateKnowledgeBaseOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDeleteKnowledgeBaseOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiModelPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListModelsOutputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiModelAPIKeyInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListModelAPIKeysOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateModelAPIKeyInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateModelAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateModelAPIKeyInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateModelAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDeleteModelAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiRegenerateModelAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensInput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDropboxOauth2GetTokensOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGenerateOauth2URLOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListOpenAIAPIKeysOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateOpenAIAPIKeyInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateOpenAIAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetOpenAIAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateOpenAIAPIKeyInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateOpenAIAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDeleteOpenAIAPIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListAgentsByOpenAIKeyOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\GenaiapiRegion::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListRegionsOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateScheduledIndexingInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiScheduledIndexingInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateScheduledIndexingOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetScheduledIndexingOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDeleteScheduledIndexingOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListWorkspacesOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateWorkspaceInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiCreateWorkspaceOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiGetWorkspaceOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateWorkspaceInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiUpdateWorkspaceOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiDeleteWorkspaceOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListAgentsByWorkspaceOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiMoveAgentsToWorkspaceInputPublic::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiMoveAgentsToWorkspaceOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ApiListEvaluationTestCasesByWorkspaceOutput::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseOneClicksAll::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseOneClicksCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAccount::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseSshKeysAll::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseSshKeysNew::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseSshKeysExisting::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseActions::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAction::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAddonsGetApp::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAddonsGetAppMetadata::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAddonsList::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAddonsCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAddonsGet::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAddonsUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAppsValidateRollback::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAppsValidateRollbackError::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllCdnEndpoints::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingEndpoint::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllCertificates::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseNewCertificate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingCertificate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseBillingHistory::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseInvoices::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseInvoice::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseBillingInsights::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabaseClusters::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabaseCluster::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabaseConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseCa::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseFirewallRules::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabaseBackups::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabaseBackupsScheduledBackupTime::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabaseReplicas::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabaseReplica::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseEventsLogs::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseUsers::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseUser::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabases::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabase::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseConnectionPool::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseEvictionPolicyResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAutoscale::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseKafkaTopics::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseKafkaTopic::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseLogsinks::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseLogsink::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseKafkaSchemas::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseKafkaSchema::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseKafkaSchemaVersion::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabaseSchemaRegistryConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabaseSchemaRegistrySubjectConfig::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDatabaseMetricsAuth::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseOpensearchIndexes::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllDomainsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseCreateDomainResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingDomain::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllDomainRecordsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseCreatedDomainRecord::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDomainRecord::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllDroplets::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingDroplet::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllDropletBackups::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDropletBackupPolicy::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllDropletBackupPolicies::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDropletsSupportedBackupPolicies::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllDropletSnapshots::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllDropletActions::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDropletAction::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDropletActionsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllKernels::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllFirewalls::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseNeighborDroplets::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAssociatedResourcesList::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllAutoscalePools::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAutoscalePoolCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingAutoscalePool::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllMembers::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseHistoryEvents::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseListFirewallsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseCreateFirewallResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseGetFirewallResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponsePutFirewallResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpList::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpCreated::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpCreatedLinks::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseFloatingIp::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpActions::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpAction::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseFloatingIpActionAction::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseListNamespaces::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseNamespaceCreated::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseListTriggers::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseTriggerResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllImages::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseNewCustomImage::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingImage::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseUpdatedImage::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseGetImageActionsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllClusters::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseClusterCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingCluster::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseUpdatedCluster::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAvailableUpgrades::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllNodePools::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseNodePoolCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingNodePool::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseNodePoolUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseClusterlintRun::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseStatusMessages::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllLoadBalancers::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseLoadBalancerCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingLoadBalancer::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseUpdatedLoadBalancer::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseListAlertPolicyResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAlertPolicyResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseMonitoringListDestinations::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDestination::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseListSinks::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseSinks::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllPartnerAttachments::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachment::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentDeleting::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentBgpAuthKey::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllPartnerAttachmentRemoteRoutes::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseSinglePartnerAttachmentServiceKey::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseEmptyJsonObject::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseProjectsList::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingProject::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDefaultProject::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseResourcesList::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAssignedResourcesList::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllRegions::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllRegistriesInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseMultiregistryInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseSubscriptionResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseRegistryOptionsResponse::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseRegistryOptionsResponseOptions::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseRegistryOptionsResponseOptionsSubscriptionTiersItem::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseGarbageCollection::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseGarbageCollections::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllRepositoriesV2::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseRepositoryTags::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseRepositoryManifests::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseRegistryInfo::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllRepositories::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpList::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpCreated::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpCreatedLinks::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIp::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpActions::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpAction::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpActionAction::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6List::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6Create::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6CreateReservedIpv6::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6Action::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseReservedIpv6ActionAction::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixList::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixGet::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseByoipPrefixListResources::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllSizes::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseSnapshots::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseSnapshotsExisting::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseKeyList::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseKeyCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseKeyGet::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseKeyUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseTagsAll::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseTagsNew::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseTagsExisting::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVolumes::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVolume::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVolumeAction::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVolumeSnapshot::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVolumeActions::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVolumeSnapshots::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllVpcs::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingVpc::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVpcMembers::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVpcPeerings::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVpcPeering::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllVpcPeerings::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseProvisioningVpcPeering::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseActiveVpcPeering::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseDeletingVpcPeering::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVpcNatGateways::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVpcNatGatewayCreate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVpcNatGateway::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseVpcNatGatewayUpdate::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllChecks::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingCheck::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingCheckState::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseAllAlerts::class => false,
            \Jane\Generated\DigitalOcean\Model\ResponseExistingAlert::class => false,
            \Jane\Generated\DigitalOcean\Model\V2AccountKeysSshKeyIdentifierPutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasResourceUuidPatchBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2AddOnsSaasResourceUuidPlanPatchBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidMigratePutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidFirewallPutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidReplicasPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernamePutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidEvictionPolicyPutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidTopicsPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidTopicsTopicNamePutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidLogsinkPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigPutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigSubjectNamePutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2DatabasesMetricsCredentialsPutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2FirewallsPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdPutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdDropletsDeleteBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdDropletsPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdTagsDeleteBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdTagsPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdRulesDeleteBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2FirewallsFirewallIdRulesPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2KubernetesClustersClusterIdUpgradePostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdDropletsDeleteBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdDropletsPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesDeleteBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2LoadBalancersLbIdForwardingRulesPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2MonitoringSinksPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2ProjectsPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2RegistriesSubscriptionPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2RegistrySubscriptionPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2VolumesVolumeIdSnapshotsPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2VpcsPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPatchBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPeeringsPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2VpcsVpcIdPeeringsVpcPeeringIdPatchBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2VpcPeeringsPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2VpcPeeringsVpcPeeringIdPatchBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2UptimeChecksPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdPutBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdAlertsPostBody::class => false,
            \Jane\Generated\DigitalOcean\Model\V2UptimeChecksCheckIdAlertsAlertIdPutBody::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}