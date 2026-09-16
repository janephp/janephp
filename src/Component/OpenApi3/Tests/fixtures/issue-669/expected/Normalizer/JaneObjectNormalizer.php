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
        
        \Jane\Generated\DigitalOcean\Model\PartnerAttachmentUpdatableAnyOf::class => \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentUpdatableAnyOfNormalizer::class,
        
        \Jane\Generated\DigitalOcean\Model\PartnerAttachmentUpdatableAnyOfBgp::class => \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentUpdatableAnyOfBgpNormalizer::class,
        
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
        $normalizer = match ($normalizerClass) {
            \Jane\Generated\DigitalOcean\Normalizer\ErrorNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ErrorNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OneClicksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OneClicksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OneClicksCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OneClicksCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AccountNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AccountNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AccountTeamNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AccountTeamNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SshKeysNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SshKeysNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LinkToLastPageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LinkToLastPageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LinkToNextPageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LinkToNextPageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ForwardLinksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ForwardLinksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LinkToFirstPageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LinkToFirstPageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LinkToPrevPageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LinkToPrevPageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\BackwardLinksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\BackwardLinksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PageLinksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PageLinksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PaginationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PaginationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MetaPropertiesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MetaPropertiesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MetaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MetaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MetaMetaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MetaMetaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RegionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RegionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AddonsFeatureNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AddonsFeatureNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AddonsDimensionVolumeWithPriceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AddonsDimensionVolumeWithPriceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AddonsDimensionWithPriceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AddonsDimensionWithPriceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AddonsPlanNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AddonsPlanNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AddonsAppInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AddonsAppInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AddonsAppMetadataNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AddonsAppMetadataNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AddonsResourceMetadataNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AddonsResourceMetadataNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AddonsResourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AddonsResourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AddonsResourceNewNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AddonsResourceNewNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentJobNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentJobNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentFunctionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentFunctionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentProgressStepReasonNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentProgressStepReasonNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentProgressStepNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentProgressStepNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentProgressNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentProgressNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentServiceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentServiceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppDomainSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppDomainSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsGitSourceSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsGitSourceSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsGithubSourceSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsGithubSourceSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsGitlabSourceSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsGitlabSourceSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsBitbucketSourceSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsBitbucketSourceSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsImageSourceSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsImageSourceSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsImageSourceSpecDeployOnPushNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsImageSourceSpecDeployOnPushNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppVariableDefinitionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppVariableDefinitionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationPapertrailSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationPapertrailSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationDatadogSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationDatadogSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationLogtailSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationLogtailSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationOpenSearchSpecBasicAuthNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationOpenSearchSpecBasicAuthNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationOpenSearchSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationOpenSearchSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationDefinitionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppLogDestinationDefinitionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppComponentBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppComponentBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseAutoscalingNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseAutoscalingNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseAutoscalingMetricsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseAutoscalingMetricsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseAutoscalingMetricsCpuNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppComponentInstanceBaseAutoscalingMetricsCpuNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsStringMatchNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsStringMatchNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsCorsPolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsCorsPolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecHealthCheckNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecHealthCheckNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppHealthCheckSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppHealthCheckSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppRouteSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppRouteSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecTerminationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecTerminationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecCorsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppServiceSpecCorsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppStaticSiteSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppStaticSiteSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppStaticSiteSpecCorsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppStaticSiteSpecCorsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppJobSpecTerminationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppJobSpecTerminationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppJobSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppJobSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppWorkerSpecTerminationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppWorkerSpecTerminationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppWorkerSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppWorkerSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppAlertSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppAlertSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsSpecCorsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsSpecCorsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppDatabaseSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppDatabaseSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleStringMatchPrefixNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleStringMatchPrefixNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleStringMatchExactNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleStringMatchExactNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleMatchNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleMatchNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleRoutingComponentNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleRoutingComponentNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleRoutingRedirectNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleRoutingRedirectNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecRuleNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppIngressSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppEgressSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppEgressSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppMaintenanceSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppMaintenanceSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsVpcEgressIpNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsVpcEgressIpNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsVpcNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsVpcNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppSpecNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppSpecNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentStaticSiteNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentStaticSiteNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentWorkerNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentWorkerNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDomainProgressNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDomainProgressNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppDomainValidationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppDomainValidationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDomainNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDomainNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsRegionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsRegionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDedicatedEgressIpNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDedicatedEgressIpNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppPendingDeploymentNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppPendingDeploymentNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppPinnedDeploymentNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppPinnedDeploymentNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsCreateAppRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsCreateAppRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsUpdateAppRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsUpdateAppRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeleteAppResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeleteAppResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsRestartRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsRestartRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsGetLogsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsGetLogsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsGetExecResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsGetExecResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppInstanceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppInstanceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppInstancesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppInstancesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsDeploymentsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsCreateDeploymentRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsCreateDeploymentRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerScheduledNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerScheduledNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerScheduledScheduleNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerScheduledScheduleNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerManualNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerManualNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerManualUserNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationTriggerManualUserNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppJobInvocationsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsInstanceSizeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsInstanceSizeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsListInstanceSizesResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsListInstanceSizesResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsGetInstanceSizeResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsGetInstanceSizeResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsListRegionsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsListRegionsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppProposeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppProposeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppProposeResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppProposeResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppAlertSlackWebhookNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppAlertSlackWebhookNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppAlertProgressStepReasonNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppAlertProgressStepReasonNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppAlertProgressStepNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppAlertProgressStepNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppAlertProgressNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppAlertProgressNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppAlertNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppAlertNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsListAlertsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsListAlertsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsAssignAppAlertDestinationsRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsAssignAppAlertDestinationsRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsAlertResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsAlertResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppsRollbackAppRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppsRollbackAppRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppRollbackValidationConditionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppRollbackValidationConditionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppMetricsBandwidthUsageDetailsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppMetricsBandwidthUsageDetailsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppMetricsBandwidthUsageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppMetricsBandwidthUsageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppMetricsBandwidthUsageRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppMetricsBandwidthUsageRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppComponentHealthNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppComponentHealthNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsComponentHealthNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsComponentHealthNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsComponentHealthFunctionsComponentHealthMetricsItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppFunctionsComponentHealthFunctionsComponentHealthMetricsItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppHealthNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppHealthNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AppHealthResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AppHealthResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CdnEndpointNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CdnEndpointNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\UpdateEndpointNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\UpdateEndpointNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PurgeCacheNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PurgeCacheNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CertificateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CertificateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CertificateCreateBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CertificateCreateBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CertificateRequestLetsEncryptNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CertificateRequestLetsEncryptNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CertificateRequestCustomNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CertificateRequestCustomNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\BalanceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\BalanceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\BillingHistoryNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\BillingHistoryNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MetaOptionalTotalNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MetaOptionalTotalNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\InvoicePreviewNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\InvoicePreviewNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\InvoiceItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\InvoiceItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\BillingAddressNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\BillingAddressNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ProductChargeItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ProductChargeItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ProductUsageChargesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ProductUsageChargesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SimpleChargeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SimpleChargeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryUserBillingAddressNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryUserBillingAddressNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryProductChargesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryProductChargesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryOveragesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryOveragesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryTaxesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryTaxesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryCreditsAndAdjustmentsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\InvoiceSummaryCreditsAndAdjustmentsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\BillingDataPointNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\BillingDataPointNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseRegionOptionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseRegionOptionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseVersionOptionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseVersionOptionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseLayoutOptionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseLayoutOptionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseLayoutOptionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseLayoutOptionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseVersionAvailabilityNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseVersionAvailabilityNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OptionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OptionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsKafkaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsKafkaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsMongodbNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsMongodbNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsPgNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsPgNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsMysqlNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsMysqlNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsRedisNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsRedisNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsValkeyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsValkeyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsOpensearchNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OptionsOptionsOpensearchNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OptionsVersionAvailabilityNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OptionsVersionAvailabilityNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OpensearchConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OpensearchConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SchemaRegistryConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SchemaRegistryConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MysqlSettingsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MysqlSettingsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\UserSettingsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\UserSettingsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\UserSettingsOpensearchAclItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\UserSettingsOpensearchAclItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\UserSettingsAclItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\UserSettingsAclItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\UserSettingsMongoUserSettingsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\UserSettingsMongoUserSettingsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseUserNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseUserNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseMaintenanceWindowNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseMaintenanceWindowNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FirewallRuleNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FirewallRuleNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseServiceEndpointNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseServiceEndpointNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadUiConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadUiConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadSchemaRegistryConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadSchemaRegistryConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadPrivateConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadPrivateConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadStandbyConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadStandbyConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadStandbyPrivateConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadStandbyPrivateConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadMaintenanceWindowNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterReadMaintenanceWindowNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseStorageAutoscaleParamsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseStorageAutoscaleParamsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseAutoscaleParamsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseAutoscaleParamsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseAutoscaleParamsStorageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseAutoscaleParamsStorageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterUiConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterUiConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterSchemaRegistryConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterSchemaRegistryConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterPrivateConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterPrivateConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterStandbyConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterStandbyConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterStandbyPrivateConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterStandbyPrivateConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterMaintenanceWindowNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterMaintenanceWindowNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterAutoscaleNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterAutoscaleNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseBackupNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseBackupNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MysqlIncrementalBackupNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MysqlIncrementalBackupNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MysqlAdvancedConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MysqlAdvancedConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PgbouncerAdvancedConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PgbouncerAdvancedConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TimescaledbAdvancedConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TimescaledbAdvancedConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PostgresAdvancedConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PostgresAdvancedConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RedisAdvancedConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RedisAdvancedConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ValkeyAdvancedConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ValkeyAdvancedConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KafkaAdvancedConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KafkaAdvancedConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OpensearchAdvancedConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OpensearchAdvancedConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MongoAdvancedConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MongoAdvancedConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OnlineMigrationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OnlineMigrationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SourceDatabaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SourceDatabaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SourceDatabaseSourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SourceDatabaseSourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterResizeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseClusterResizeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\BackupNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\BackupNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaReadNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaReadNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaReadConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaReadConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaReadPrivateConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaReadPrivateConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaPrivateConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseReplicaPrivateConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\EventsLogsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\EventsLogsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolPrivateConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolPrivateConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolStandbyConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolStandbyConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolStandbyPrivateConnectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolStandbyPrivateConnectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ConnectionPoolUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SqlModeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SqlModeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\Version2Normalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\Version2Normalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicPartitionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicPartitionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicPartitionConsumerGroupsItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicPartitionConsumerGroupsItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicVerboseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicVerboseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KafkaTopicUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LogsinkBaseVerboseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LogsinkBaseVerboseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RsyslogLogsinkNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RsyslogLogsinkNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ElasticsearchLogsinkNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ElasticsearchLogsinkNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OpensearchLogsinkNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OpensearchLogsinkNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatadogLogsinkNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatadogLogsinkNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LogsinkVerboseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LogsinkVerboseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LogsinkSchemaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LogsinkSchemaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LogsinkBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LogsinkBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LogsinkCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LogsinkCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LogsinkUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LogsinkUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KafkaSchemaVerboseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KafkaSchemaVerboseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseKafkaSchemaCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseKafkaSchemaCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KafkaSchemaVersionVerboseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KafkaSchemaVersionVerboseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabasesBasicAuthCredentialsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabasesBasicAuthCredentialsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DatabaseMetricsCredentialsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DatabaseMetricsCredentialsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OpensearchIndexBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OpensearchIndexBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OpensearchIndexNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OpensearchIndexNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainRecordNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainRecordNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainRecordANormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainRecordANormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainRecordAaaaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainRecordAaaaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainRecordCaaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainRecordCaaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainRecordCnameNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainRecordCnameNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainRecordMxNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainRecordMxNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainRecordNsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainRecordNsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainRecordSoaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainRecordSoaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainRecordSrvNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainRecordSrvNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainRecordTxtNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainRecordTxtNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DiskInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DiskInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DiskInfoSizeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DiskInfoSizeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KernelNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KernelNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletNextBackupWindowNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletNextBackupWindowNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ImageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ImageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\GpuInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\GpuInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\GpuInfoVramNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\GpuInfoVramNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SizeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SizeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NetworkV4Normalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NetworkV4Normalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NetworkV6Normalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NetworkV6Normalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletImageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletImageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletNetworksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletNetworksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletCreateBackupPolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletCreateBackupPolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletSingleCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletSingleCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletMultiCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletMultiCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ActionLinkNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ActionLinkNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SnapshotsBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SnapshotsBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletSnapshotNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletSnapshotNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyRecordNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyRecordNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyRecordBackupPolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyRecordBackupPolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyRecordNextBackupWindowNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletBackupPolicyRecordNextBackupWindowNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SupportedDropletBackupPolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SupportedDropletBackupPolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletActionEnableBackupsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletActionEnableBackupsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletActionEnableBackupsBackupPolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletActionEnableBackupsBackupPolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletActionChangeBackupPolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletActionChangeBackupPolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletActionChangeBackupPolicyBackupPolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletActionChangeBackupPolicyBackupPolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletActionRestoreNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletActionRestoreNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletActionResizeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletActionResizeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletActionRebuildNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletActionRebuildNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletActionRenameNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletActionRenameNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletActionChangeKernelNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletActionChangeKernelNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DropletActionSnapshotNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DropletActionSnapshotNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FirewallRuleBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FirewallRuleBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FirewallRuleTargetNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FirewallRuleTargetNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesInboundRulesItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesInboundRulesItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesInboundRulesItemSourcesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesInboundRulesItemSourcesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesOutboundRulesItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesOutboundRulesItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesOutboundRulesItemDestinationsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FirewallRulesOutboundRulesItemDestinationsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FirewallNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FirewallNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FirewallPendingChangesItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FirewallPendingChangesItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AssociatedResourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AssociatedResourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SelectiveDestroyAssociatedResourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SelectiveDestroyAssociatedResourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DestroyedAssociatedResourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DestroyedAssociatedResourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AssociatedResourceStatusNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AssociatedResourceStatusNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AssociatedResourceStatusResourcesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AssociatedResourceStatusResourcesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolStaticConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolStaticConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolDynamicConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolDynamicConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolDropletTemplateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolDropletTemplateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CurrentUtilizationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CurrentUtilizationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AutoscalePoolCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MemberCurrentUtilizationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MemberCurrentUtilizationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MemberNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MemberNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\HistoryNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\HistoryNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FloatingIpNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FloatingIpNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FloatingIpRegionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FloatingIpRegionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FloatingIPsActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FloatingIPsActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FloatingIpActionAssignNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FloatingIpActionAssignNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\FloatingIpActionUnassignNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\FloatingIpActionUnassignNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NamespaceInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NamespaceInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CreateNamespaceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CreateNamespaceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ScheduledDetailsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ScheduledDetailsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ScheduledDetailsBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ScheduledDetailsBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TriggerInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TriggerInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TriggerInfoScheduledRunsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TriggerInfoScheduledRunsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CreateTriggerNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CreateTriggerNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\UpdateTriggerNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\UpdateTriggerNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ImageUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ImageUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ImageNewCustomNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ImageNewCustomNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ImageActionBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ImageActionBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ImageActionTransferNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ImageActionTransferNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolSizeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolSizeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolTaintNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolTaintNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NodeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NodeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NodeStatusNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NodeStatusNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MaintenancePolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MaintenancePolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ControlPlaneFirewallNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ControlPlaneFirewallNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterAutoscalerConfigurationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterAutoscalerConfigurationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RoutingAgentNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RoutingAgentNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AmdGpuDevicePluginNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AmdGpuDevicePluginNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AmdGpuDeviceMetricsExporterPluginNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AmdGpuDeviceMetricsExporterPluginNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NvidiaGpuDevicePluginNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NvidiaGpuDevicePluginNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RdmaSharedDevPluginNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RdmaSharedDevPluginNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterReadNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterReadNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterReadStatusNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterReadStatusNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterStatusNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterStatusNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AssociatedKubernetesResourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AssociatedKubernetesResourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AssociatedKubernetesResourcesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AssociatedKubernetesResourcesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DestroyAssociatedKubernetesResourcesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DestroyAssociatedKubernetesResourcesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CredentialsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CredentialsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KubernetesVersionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KubernetesVersionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KubernetesNodePoolUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\UserNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\UserNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\UserKubernetesClusterUserNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\UserKubernetesClusterUserNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KubernetesRegionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KubernetesRegionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KubernetesSizeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KubernetesSizeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KubernetesOptionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KubernetesOptionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KubernetesOptionsOptionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KubernetesOptionsOptionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterlintResultsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterlintResultsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterlintResultsDiagnosticsItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterlintResultsDiagnosticsItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterlintResultsDiagnosticsItemObjectNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterlintResultsDiagnosticsItemObjectNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterlintRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterlintRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterRegistryNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterRegistryNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ClusterRegistriesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ClusterRegistriesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\StatusMessagesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\StatusMessagesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ForwardingRuleNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ForwardingRuleNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\HealthCheckNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\HealthCheckNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\StickySessionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\StickySessionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LbFirewallNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LbFirewallNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DomainsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DomainsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\GlbSettingsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\GlbSettingsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\GlbSettingsCdnNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\GlbSettingsCdnNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LoadBalancerBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LoadBalancerBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LoadBalancerNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LoadBalancerNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\LoadBalancerRegionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\LoadBalancerRegionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SlackDetailsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SlackDetailsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AlertsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AlertsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AlertPolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AlertPolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ListAlertPolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ListAlertPolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AlertPolicyRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AlertPolicyRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MetricsResultNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MetricsResultNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MetricsDataNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MetricsDataNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MetricsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MetricsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigOmitCredentialsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigOmitCredentialsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DestinationOmitCredentialsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DestinationOmitCredentialsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigRequestCredentialsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigRequestCredentialsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DestinationRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DestinationRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigCredentialsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\OpensearchConfigCredentialsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DestinationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DestinationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SinkResourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SinkResourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SinksResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SinksResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsListResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsListResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsRequestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsRequestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsCreateResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsCreateResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsGetResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsGetResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsActionResizeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsActionResizeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsActionResizeParamsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsActionResizeParamsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsActionSnapshotNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsActionSnapshotNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsActionSnapshotParamsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsActionSnapshotParamsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsActionAttachNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsActionAttachNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsActionAttachParamsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsActionAttachParamsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsActionDetachNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsActionDetachNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsActionDetachParamsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsActionDetachParamsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsActionsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsActionsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsActionsResponseActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsActionsResponseActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsSnapshotResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsSnapshotResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsSnapshotListResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsSnapshotListResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NfsSnapshotGetResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NfsSnapshotGetResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentBgpNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentBgpNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentWritableNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentWritableNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentWritableBgpNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentWritableBgpNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentUpdatableAnyOfNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentUpdatableAnyOfNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentUpdatableAnyOfBgpNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentUpdatableAnyOfBgpNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentServiceKeyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentServiceKeyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentRemoteRouteNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PartnerAttachmentRemoteRouteNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ProjectBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ProjectBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ProjectNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ProjectNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResourceLinksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResourceLinksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ProjectAssignmentNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ProjectAssignmentNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RegistryBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RegistryBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SubscriptionTierBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SubscriptionTierBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SubscriptionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SubscriptionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RegistryNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RegistryNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RegistrySubscriptionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RegistrySubscriptionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MultiregistryCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MultiregistryCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\MultiregistryNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\MultiregistryNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DockerCredentialsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DockerCredentialsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DockerCredentialsAuthsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DockerCredentialsAuthsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\DockerCredentialsAuthsRegistryDigitaloceanComNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\DockerCredentialsAuthsRegistryDigitaloceanComNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SubscriptionTierExtendedNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SubscriptionTierExtendedNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\GarbageCollectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\GarbageCollectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\UpdateRegistryNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\UpdateRegistryNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RepositoryBlobNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RepositoryBlobNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RepositoryManifestNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RepositoryManifestNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RepositoryV2Normalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RepositoryV2Normalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RepositoryTagNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RepositoryTagNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ValidateRegistryNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ValidateRegistryNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RegistryCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RegistryCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RepositoryNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RepositoryNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RegistryRunGcNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RegistryRunGcNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NeighborIdsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NeighborIdsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpRegionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpRegionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpActionTypeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpActionTypeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpActionAssignNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpActionAssignNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpActionUnassignNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpActionUnassignNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ListReservedIpv6sItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ListReservedIpv6sItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6CreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6CreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6Normalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6Normalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ActionTypeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ActionTypeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ActionAssignNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ActionAssignNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ActionUnassignNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ReservedIpv6ActionUnassignNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixValidationsItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixValidationsItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixResourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ByoipPrefixResourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\SnapshotsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\SnapshotsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\GrantNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\GrantNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KeyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KeyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\KeyCreateResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\KeyCreateResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TagsMetadataNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TagsMetadataNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TagsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TagsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesDropletsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesDropletsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesImgagesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesImgagesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesVolumesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesVolumesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesVolumeSnapshotsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesVolumeSnapshotsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesDatabasesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TagsResourcesDatabasesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ErrorWithRootCausesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ErrorWithRootCausesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TagsResourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TagsResourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\TagsResourceResourcesItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\TagsResourceResourcesItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumeBaseReadNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumeBaseReadNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumeFullNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumeFullNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumeFullRegionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumeFullRegionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumeBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumeBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumeSnapshotIdNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumeSnapshotIdNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumeWriteFileSystemTypeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumeWriteFileSystemTypeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumesExt4Normalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumesExt4Normalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumesXfsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumesXfsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostAttachNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostAttachNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostDetachNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostDetachNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumeActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumeActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostResizeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VolumeActionPostResizeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcUpdatableNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcUpdatableNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcDefaultNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcDefaultNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcMemberNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcMemberNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringUpdatableNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringUpdatableNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcPeeringNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetVpcsItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetVpcsItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetEgressesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetEgressesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetEgressesPublicGatewaysItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayGetEgressesPublicGatewaysItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayCreateVpcsItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayCreateVpcsItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayUpdateVpcsItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\VpcNatGatewayUpdateVpcsItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CheckBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CheckBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CheckUpdatableNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CheckUpdatableNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\CheckNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\CheckNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RegionStateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RegionStateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\RegionalStateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\RegionalStateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\PreviousOutageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\PreviousOutageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\StateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\StateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AlertBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AlertBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NotificationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NotificationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\NotificationSlackItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\NotificationSlackItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AlertUpdatableNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AlertUpdatableNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\AlertNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\AlertNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiChatbotNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiChatbotNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentChatbotIdentifierNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentChatbotIdentifierNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDeploymentNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDeploymentNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgreementNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgreementNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiModelVersionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiModelVersionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiModelNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiModelNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentTemplateGuardrailNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentTemplateGuardrailNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiIndexedDataSourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiIndexedDataSourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiIndexingJobNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiIndexingJobNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiKnowledgeBaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiKnowledgeBaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentTemplateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentTemplateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiPagesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiPagesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiLinksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiLinksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiMetaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiMetaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsOutputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsOutputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAnthropicAPIKeyInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAnthropicAPIKeyInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentAPIKeyInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentAPIKeyInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentAPIKeyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentAPIKeyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentFunctionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentFunctionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentGuardrailNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentGuardrailNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentLoggingConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentLoggingConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiModelProviderKeyInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiModelProviderKeyInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiOpenAIAPIKeyInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiOpenAIAPIKeyInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationDatasetNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationDatasetNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationMetricNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationMetricNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiStarMetricNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiStarMetricNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationTestCaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationTestCaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiWorkspaceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiWorkspaceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentAPIKeysOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentAPIKeysOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentAPIKeyInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentAPIKeyInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAgentAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentAPIKeyInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentAPIKeyInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteAgentAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteAgentAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiRegenerateAgentAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiRegenerateAgentAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentFunctionInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentFunctionInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentFunctionOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentFunctionOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentFunctionInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentFunctionInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentFunctionOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentFunctionOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUnlinkAgentFunctionOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUnlinkAgentFunctionOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiLinkKnowledgeBaseOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiLinkKnowledgeBaseOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUnlinkKnowledgeBaseOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUnlinkKnowledgeBaseOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateLinkedAgentInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateLinkedAgentInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateLinkedAgentOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateLinkedAgentOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiLinkAgentOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUnlinkAgentOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUnlinkAgentOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetAgentOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetAgentOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteAgentOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteAgentOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetChildrenOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetChildrenOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentDeploymentVisibilityInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentDeploymentVisibilityInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentDeploymentVisbilityOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAgentDeploymentVisbilityOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUsageMeasurementNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUsageMeasurementNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiResourceUsageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiResourceUsageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetAgentUsageOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetAgentUsageOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentChildRelationshipVerionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentChildRelationshipVerionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentFunctionVersionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentFunctionVersionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentGuardrailVersionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentGuardrailVersionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentKnowledgeBaseVersionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentKnowledgeBaseVersionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAgentVersionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAgentVersionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentVersionsOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentVersionsOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiRollbackToAgentVersionInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiRollbackToAgentVersionInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAuditHeaderNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAuditHeaderNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiRollbackToAgentVersionOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiRollbackToAgentVersionOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListAnthropicAPIKeysOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListAnthropicAPIKeysOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAnthropicAPIKeyInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAnthropicAPIKeyInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAnthropicAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateAnthropicAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetAnthropicAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetAnthropicAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAnthropicAPIKeyInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAnthropicAPIKeyInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAnthropicAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateAnthropicAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteAnthropicAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteAnthropicAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsByAnthropicKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsByAnthropicKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiFileUploadDataSourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiFileUploadDataSourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationDatasetInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationDatasetInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationDatasetOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationDatasetOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiPresignedUrlFileNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiPresignedUrlFileNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateDataSourceFileUploadPresignedUrlsInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateDataSourceFileUploadPresignedUrlsInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiFilePresignedUrlResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiFilePresignedUrlResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateDataSourceFileUploadPresignedUrlsOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateDataSourceFileUploadPresignedUrlsOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationMetricsOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationMetricsOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiRunEvaluationTestCaseInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiRunEvaluationTestCaseInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiRunEvaluationTestCaseOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiRunEvaluationTestCaseOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationMetricResultNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationMetricResultNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationRunNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationRunNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationRunOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationRunOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiPromptChunkNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiPromptChunkNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationTraceSpanNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationTraceSpanNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiPromptNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiPromptNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationRunResultsOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationRunResultsOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationRunPromptResultsOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationRunPromptResultsOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationTestCasesOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationTestCasesOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationTestCaseInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationTestCaseInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationTestCaseOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateEvaluationTestCaseOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationRunsByTestCaseOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationRunsByTestCaseOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationTestCaseOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetEvaluationTestCaseOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationTestCaseMetricListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiEvaluationTestCaseMetricListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateEvaluationTestCaseInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateEvaluationTestCaseInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateEvaluationTestCaseOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateEvaluationTestCaseOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListKnowledgeBaseIndexingJobsOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListKnowledgeBaseIndexingJobsOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiStartKnowledgeBaseIndexingJobInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiStartKnowledgeBaseIndexingJobInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiStartKnowledgeBaseIndexingJobOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiStartKnowledgeBaseIndexingJobOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListIndexingJobDataSourcesOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListIndexingJobDataSourcesOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetIndexingJobDetailsSignedURLOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetIndexingJobDetailsSignedURLOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetKnowledgeBaseIndexingJobOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetKnowledgeBaseIndexingJobOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCancelKnowledgeBaseIndexingJobInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCancelKnowledgeBaseIndexingJobInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCancelKnowledgeBaseIndexingJobOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCancelKnowledgeBaseIndexingJobOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListKnowledgeBasesOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListKnowledgeBasesOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAWSDataSourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAWSDataSourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiChunkingOptionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiChunkingOptionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxDataSourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxDataSourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGoogleDriveDataSourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGoogleDriveDataSourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiSpacesDataSourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiSpacesDataSourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiWebCrawlerDataSourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiWebCrawlerDataSourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiKBDataSourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiKBDataSourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiAWSDataSourceDisplayNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiAWSDataSourceDisplayNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxDataSourceDisplayNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxDataSourceDisplayNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGoogleDriveDataSourceDisplayNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGoogleDriveDataSourceDisplayNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiKnowledgeBaseDataSourceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiKnowledgeBaseDataSourceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListKnowledgeBaseDataSourcesOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListKnowledgeBaseDataSourcesOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseDataSourceInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseDataSourceInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseDataSourceOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateKnowledgeBaseDataSourceOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteKnowledgeBaseDataSourceOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteKnowledgeBaseDataSourceOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetKnowledgeBaseOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetKnowledgeBaseOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateKnowledgeBaseInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateKnowledgeBaseInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateKnowledgeBaseOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateKnowledgeBaseOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteKnowledgeBaseOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteKnowledgeBaseOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiModelPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiModelPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListModelsOutputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListModelsOutputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiModelAPIKeyInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiModelAPIKeyInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListModelAPIKeysOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListModelAPIKeysOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateModelAPIKeyInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateModelAPIKeyInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateModelAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateModelAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateModelAPIKeyInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateModelAPIKeyInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateModelAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateModelAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteModelAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteModelAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiRegenerateModelAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiRegenerateModelAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxOauth2GetTokensInputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxOauth2GetTokensInputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxOauth2GetTokensOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDropboxOauth2GetTokensOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGenerateOauth2URLOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGenerateOauth2URLOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListOpenAIAPIKeysOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListOpenAIAPIKeysOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateOpenAIAPIKeyInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateOpenAIAPIKeyInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateOpenAIAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateOpenAIAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetOpenAIAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetOpenAIAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateOpenAIAPIKeyInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateOpenAIAPIKeyInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateOpenAIAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateOpenAIAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteOpenAIAPIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteOpenAIAPIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsByOpenAIKeyOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsByOpenAIKeyOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\GenaiapiRegionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\GenaiapiRegionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListRegionsOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListRegionsOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateScheduledIndexingInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateScheduledIndexingInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiScheduledIndexingInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiScheduledIndexingInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateScheduledIndexingOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateScheduledIndexingOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetScheduledIndexingOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetScheduledIndexingOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteScheduledIndexingOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteScheduledIndexingOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListWorkspacesOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListWorkspacesOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateWorkspaceInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateWorkspaceInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiCreateWorkspaceOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiCreateWorkspaceOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiGetWorkspaceOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiGetWorkspaceOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateWorkspaceInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateWorkspaceInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateWorkspaceOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiUpdateWorkspaceOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteWorkspaceOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiDeleteWorkspaceOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsByWorkspaceOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListAgentsByWorkspaceOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiMoveAgentsToWorkspaceInputPublicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiMoveAgentsToWorkspaceInputPublicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiMoveAgentsToWorkspaceOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiMoveAgentsToWorkspaceOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationTestCasesByWorkspaceOutputNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ApiListEvaluationTestCasesByWorkspaceOutputNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseOneClicksAllNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseOneClicksAllNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseOneClicksCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseOneClicksCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAccountNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAccountNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseSshKeysAllNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseSshKeysAllNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseSshKeysNewNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseSshKeysNewNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseSshKeysExistingNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseSshKeysExistingNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseActionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseActionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsGetAppNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsGetAppNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsGetAppMetadataNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsGetAppMetadataNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsGetNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsGetNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAddonsUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAppsValidateRollbackNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAppsValidateRollbackNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAppsValidateRollbackErrorNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAppsValidateRollbackErrorNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllCdnEndpointsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllCdnEndpointsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingEndpointNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingEndpointNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllCertificatesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllCertificatesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseNewCertificateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseNewCertificateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingCertificateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingCertificateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseBillingHistoryNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseBillingHistoryNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseInvoicesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseInvoicesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseInvoiceNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseInvoiceNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseBillingInsightsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseBillingInsightsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseClustersNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseClustersNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseClusterNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseClusterNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseCaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseCaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseFirewallRulesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseFirewallRulesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseBackupsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseBackupsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseBackupsScheduledBackupTimeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseBackupsScheduledBackupTimeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseReplicasNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseReplicasNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseReplicaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseReplicaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseEventsLogsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseEventsLogsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseUsersNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseUsersNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseUserNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseUserNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabasesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabasesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseConnectionPoolNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseConnectionPoolNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseEvictionPolicyResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseEvictionPolicyResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAutoscaleNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAutoscaleNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaTopicsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaTopicsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaTopicNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaTopicNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseLogsinksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseLogsinksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseLogsinkNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseLogsinkNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaSchemasNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaSchemasNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaSchemaNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaSchemaNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaSchemaVersionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseKafkaSchemaVersionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseSchemaRegistryConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseSchemaRegistryConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseSchemaRegistrySubjectConfigNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseSchemaRegistrySubjectConfigNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseMetricsAuthNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDatabaseMetricsAuthNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseOpensearchIndexesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseOpensearchIndexesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDomainsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDomainsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseCreateDomainResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseCreateDomainResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingDomainNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingDomainNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDomainRecordsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDomainRecordsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseCreatedDomainRecordNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseCreatedDomainRecordNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDomainRecordNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDomainRecordNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingDropletNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingDropletNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletBackupsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletBackupsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletBackupPolicyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletBackupPolicyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletBackupPoliciesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletBackupPoliciesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletsSupportedBackupPoliciesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletsSupportedBackupPoliciesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletSnapshotsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletSnapshotsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletActionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllDropletActionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletActionsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDropletActionsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllKernelsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllKernelsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllFirewallsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllFirewallsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseNeighborDropletsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseNeighborDropletsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAssociatedResourcesListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAssociatedResourcesListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllAutoscalePoolsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllAutoscalePoolsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAutoscalePoolCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAutoscalePoolCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingAutoscalePoolNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingAutoscalePoolNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllMembersNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllMembersNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseHistoryEventsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseHistoryEventsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseListFirewallsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseListFirewallsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseCreateFirewallResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseCreateFirewallResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseGetFirewallResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseGetFirewallResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponsePutFirewallResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponsePutFirewallResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpCreatedNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpCreatedNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpCreatedLinksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpCreatedLinksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpActionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpActionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpActionActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseFloatingIpActionActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseListNamespacesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseListNamespacesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseNamespaceCreatedNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseNamespaceCreatedNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseListTriggersNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseListTriggersNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseTriggerResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseTriggerResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllImagesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllImagesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseNewCustomImageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseNewCustomImageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingImageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingImageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseUpdatedImageNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseUpdatedImageNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseGetImageActionsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseGetImageActionsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllClustersNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllClustersNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseClusterCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseClusterCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingClusterNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingClusterNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseUpdatedClusterNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseUpdatedClusterNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAvailableUpgradesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAvailableUpgradesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllNodePoolsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllNodePoolsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseNodePoolCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseNodePoolCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingNodePoolNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingNodePoolNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseNodePoolUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseNodePoolUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseClusterlintRunNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseClusterlintRunNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseStatusMessagesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseStatusMessagesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllLoadBalancersNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllLoadBalancersNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseLoadBalancerCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseLoadBalancerCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingLoadBalancerNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingLoadBalancerNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseUpdatedLoadBalancerNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseUpdatedLoadBalancerNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseListAlertPolicyResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseListAlertPolicyResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAlertPolicyResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAlertPolicyResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseMonitoringListDestinationsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseMonitoringListDestinationsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDestinationNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDestinationNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseListSinksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseListSinksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseSinksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseSinksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllPartnerAttachmentsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllPartnerAttachmentsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentDeletingNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentDeletingNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentBgpAuthKeyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentBgpAuthKeyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllPartnerAttachmentRemoteRoutesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllPartnerAttachmentRemoteRoutesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentServiceKeyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseSinglePartnerAttachmentServiceKeyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseEmptyJsonObjectNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseEmptyJsonObjectNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseProjectsListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseProjectsListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingProjectNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingProjectNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDefaultProjectNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDefaultProjectNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseResourcesListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseResourcesListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAssignedResourcesListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAssignedResourcesListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRegionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRegionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRegistriesInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRegistriesInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseMultiregistryInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseMultiregistryInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseSubscriptionResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseSubscriptionResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryOptionsResponseNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryOptionsResponseNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryOptionsResponseOptionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryOptionsResponseOptionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryOptionsResponseOptionsSubscriptionTiersItemNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryOptionsResponseOptionsSubscriptionTiersItemNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseGarbageCollectionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseGarbageCollectionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseGarbageCollectionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseGarbageCollectionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRepositoriesV2Normalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRepositoriesV2Normalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseRepositoryTagsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseRepositoryTagsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseRepositoryManifestsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseRepositoryManifestsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryInfoNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseRegistryInfoNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRepositoriesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllRepositoriesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpCreatedNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpCreatedNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpCreatedLinksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpCreatedLinksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpActionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpActionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpActionActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpActionActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6ListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6ListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6CreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6CreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6CreateReservedIpv6Normalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6CreateReservedIpv6Normalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6Normalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6Normalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6ActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6ActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6ActionActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseReservedIpv6ActionActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixGetNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixGetNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixListResourcesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseByoipPrefixListResourcesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllSizesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllSizesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseSnapshotsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseSnapshotsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseSnapshotsExistingNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseSnapshotsExistingNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyListNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyListNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyGetNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyGetNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseKeyUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseTagsAllNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseTagsAllNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseTagsNewNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseTagsNewNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseTagsExistingNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseTagsExistingNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumesNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumesNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeActionNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeActionNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeSnapshotNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeSnapshotNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeActionsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeActionsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeSnapshotsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVolumeSnapshotsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllVpcsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllVpcsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingVpcNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingVpcNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcMembersNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcMembersNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcPeeringsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcPeeringsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcPeeringNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcPeeringNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllVpcPeeringsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllVpcPeeringsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseProvisioningVpcPeeringNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseProvisioningVpcPeeringNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseActiveVpcPeeringNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseActiveVpcPeeringNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseDeletingVpcPeeringNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseDeletingVpcPeeringNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewaysNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewaysNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewayCreateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewayCreateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewayNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewayNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewayUpdateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseVpcNatGatewayUpdateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllChecksNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllChecksNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingCheckNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingCheckNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingCheckStateNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingCheckStateNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseAllAlertsNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseAllAlertsNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingAlertNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\ResponseExistingAlertNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2AccountKeysSshKeyIdentifierPutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2AccountKeysSshKeyIdentifierPutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2AddOnsSaasPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2AddOnsSaasPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2AddOnsSaasResourceUuidPatchBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2AddOnsSaasResourceUuidPatchBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2AddOnsSaasResourceUuidPlanPatchBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2AddOnsSaasResourceUuidPlanPatchBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidMigratePutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidMigratePutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidFirewallPutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidFirewallPutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidReplicasPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidReplicasPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidUsersPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidUsersPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidUsersUsernamePutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidUsersUsernamePutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidEvictionPolicyPutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidEvictionPolicyPutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidTopicsPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidTopicsPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidTopicsTopicNamePutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidTopicsTopicNamePutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidLogsinkPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidLogsinkPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidSchemaRegistryPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidSchemaRegistryPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigPutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigPutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigSubjectNamePutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesDatabaseClusterUuidSchemaRegistryConfigSubjectNamePutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesMetricsCredentialsPutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2DatabasesMetricsCredentialsPutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdPutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdPutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdDropletsDeleteBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdDropletsDeleteBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdDropletsPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdDropletsPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdTagsDeleteBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdTagsDeleteBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdTagsPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdTagsPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdRulesDeleteBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdRulesDeleteBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdRulesPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2FirewallsFirewallIdRulesPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2KubernetesClustersClusterIdUpgradePostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2KubernetesClustersClusterIdUpgradePostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2KubernetesClustersClusterIdNodePoolsNodePoolIdRecyclePostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdDropletsDeleteBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdDropletsDeleteBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdDropletsPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdDropletsPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdForwardingRulesDeleteBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdForwardingRulesDeleteBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdForwardingRulesPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2LoadBalancersLbIdForwardingRulesPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2MonitoringSinksPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2MonitoringSinksPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2ProjectsPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2ProjectsPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2RegistriesSubscriptionPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2RegistriesSubscriptionPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2RegistrySubscriptionPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2RegistrySubscriptionPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2VolumesVolumeIdSnapshotsPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2VolumesVolumeIdSnapshotsPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2VpcsPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2VpcsPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPatchBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPatchBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPeeringsPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPeeringsPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPeeringsVpcPeeringIdPatchBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2VpcsVpcIdPeeringsVpcPeeringIdPatchBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2VpcPeeringsPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2VpcPeeringsPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2VpcPeeringsVpcPeeringIdPatchBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2VpcPeeringsVpcPeeringIdPatchBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksCheckIdPutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksCheckIdPutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksCheckIdAlertsPostBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksCheckIdAlertsPostBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksCheckIdAlertsAlertIdPutBodyNormalizer::class => new \Jane\Generated\DigitalOcean\Normalizer\V2UptimeChecksCheckIdAlertsAlertIdPutBodyNormalizer(),
            \Jane\Generated\DigitalOcean\Runtime\Normalizer\ReferenceNormalizer::class => new \Jane\Generated\DigitalOcean\Runtime\Normalizer\ReferenceNormalizer(),
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