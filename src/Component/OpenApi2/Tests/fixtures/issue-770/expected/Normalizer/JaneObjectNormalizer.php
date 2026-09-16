<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
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
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserAuditId::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserAuditIdNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserGetScgUser::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserGetScgUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserModifyScgUser::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserModifyScgUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserCreateScgUser::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserCreateScgUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserQueryCriteriaFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserQueryCriteriaFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\UrlFilteringUrlFilteringPolicyList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringPolicyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\UrlFilteringUrlFilteringPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\UrlFilteringUrlFilteringPolicyBlockByThreatLevelConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringPolicyBlockByThreatLevelConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\UrlFilteringDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\UrlFilteringCreateUrlFilteringPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringCreateUrlFilteringPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\UrlFilteringCreateUrlFilteringPolicyBlockByThreatLevelConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringCreateUrlFilteringPolicyBlockByThreatLevelConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\UrlFilteringModifyUrlFilteringPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringModifyUrlFilteringPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\UrlFilteringModifyUrlFilteringPolicyBlockByThreatLevelConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringModifyUrlFilteringPolicyBlockByThreatLevelConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\UrlFilteringUrlFilteringBlockCategoriesList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringBlockCategoriesListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApPacketCaptureApPacketCaptureRes::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApPacketCaptureApPacketCaptureResNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApPacketCaptureApPacketCaptureReq::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApPacketCaptureApPacketCaptureReqNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcApplicationPolicyProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationPolicyProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RogueInfoRogueInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueInfoRogueInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClientHistoricalClientList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientHistoricalClientListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaServerQueryAaaServerQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaServerQueryAaaServerQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcUserDefinedProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcUserDefinedProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDhcpProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDhcpProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskDpskQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDpskQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskDpskQueryListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDpskQueryListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileTrafficClassProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileTrafficClassProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WiredClientQueryClientQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WiredClientQueryClientQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapIndoorMapSummaryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapSummaryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileClientIsolationWhitelistArray::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileClientIsolationWhitelistArrayNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBonjourFencingPolicyList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingPolicyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanQueryWlanQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryWlanQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteriaFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteriaExtraFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaExtraFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteriaExtraNotFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaExtraNotFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryQueryCriteriaOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryApQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryApQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanQueryApWlanBssidQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryApWlanBssidQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RacStatsRadiusProxyList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RacStatsRadiusProxyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClientQueryClientQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientQueryClientQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApModifyRogueType::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApModifyRogueTypeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemFtpGlobalSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpGlobalSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemNtpServerValidation::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemNtpServerValidationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemNtpServerValidationMessage::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemNtpServerValidationMessageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemFriendlyNameLangList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFriendlyNameLangListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortalLangList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPortalLangListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlangroupCreateWlanGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupCreateWlanGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlangroupModifyWlanGroupMember::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupModifyWlanGroupMemberNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateStandardOpenWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateStandardOpenWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateStandard80211Wlan::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateStandard80211WlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateHotspotWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateHotspotWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateWechatWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateWechatWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateGuestAccessWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateGuestAccessWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateWebAuthWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateWebAuthWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateHotspot20Wlan::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateHotspot20WlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateHotspot20OpenWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateHotspot20OpenWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanModifyWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanModifyWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlangroupWlanGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupWlanGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlangroupWlanMember::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupWlanMemberNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlangroupModifyWlanGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupModifyWlanGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlangroupWlanGroupList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupWlanGroupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemDeleteBulkFtp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDeleteBulkFtpNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemFtpTestResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpTestResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemFtp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemFtpList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateTrafficClassProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateTrafficClassProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBlockClient::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyBlockClient::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyBlockClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBlockClientList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockClientListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBlockClientListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockClientListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBulkBlockClient::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBulkBlockClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBulkBlockClientBlockClientListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBulkBlockClientBlockClientListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupRoleLabelValueList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupRoleLabelValueListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupPermissionList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupPermissionListExtra::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionListExtraNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserPatchScgUserGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserPatchScgUserGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupAuditId::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupAuditIdNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslogServerProfileApSyslogServerProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileApSyslogServerProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslogServerProfileApSyslogServerProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileApSyslogServerProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonBulkDeleteRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonBulkDeleteRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslogServerProfileApSyslogServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileApSyslogServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslogServerProfileUpdateApSyslogServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileUpdateApSyslogServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonEmptyResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonEmptyResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslogServerProfileCreateApSyslogServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileCreateApSyslogServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonCreateResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonCreateResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceCommonAuthenticationServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAuthenticationServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceDeleteBulkAuthenticationService::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceDeleteBulkAuthenticationServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceModifyLocalDbAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyLocalDbAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceRadiusAuthenticationServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAuthenticationServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceCreateRadiusAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateRadiusAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceModifyRadiusAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyRadiusAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceActiveDirectoryServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceActiveDirectoryServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceCreateActiveDirectoryAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateActiveDirectoryAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceModifyActiveDirectoryAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyActiveDirectoryAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceLDAPServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceLDAPServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceLDAPService::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceLDAPServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceTestingConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTestingConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceTestingConfigLoginRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTestingConfigLoginRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceRadiusAccountingServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAccountingServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceRadiusAccountingService::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAccountingServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceCreateRadiusAccounting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateRadiusAccountingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceModifyRadiusAccounting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyRadiusAccountingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceModifyEntireRadiusAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyEntireRadiusAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceActiveDirectoryService::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceActiveDirectoryServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceCreateLDAPAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateLDAPAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceModifyLDAPAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyLDAPAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceCommonAccountingServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAccountingServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceDeleteBulkAccountingService::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceDeleteBulkAccountingServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceModifyEntireRadiusAccounting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyEntireRadiusAccountingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceCommonAuthenticationService::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAuthenticationServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceRadiusAuthenticationService::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAuthenticationServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonQueryCriteriaSuperSet::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaSuperSetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\BondPortBondPortProfileQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\BondPortBondPortProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\BondPortBondPortProfileWithEditInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileWithEditInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\BondPortCreateBondPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortCreateBondPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\BondPortModifyBondPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortModifyBondPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApOperationalSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApOperationalSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApLinemanSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApLinemanSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApLinemanSummaryListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApLinemanSummaryListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSwitchoverAP::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSwitchoverAPNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelApModel::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelApModelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBonjourFencingStatistic::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingStatisticNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApNeighborAPList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNeighborAPListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApNeighborAPListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNeighborAPListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApModifyAP::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApModifyAPNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApListEntry::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApListEntryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApListEntryListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApListEntryListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApCreateAP::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCreateAPNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApMultipleMoveApMultipleMoveRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApMultipleMoveApMultipleMoveResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApMultipleMoveApMultipleMoveResponseFailAps::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveResponseFailApsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApMultipleMoveApMultipleMoveResponseFailApsApsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveResponseFailApsApsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfilePoolBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePoolBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfileBasicBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfileBasicBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfileBasicBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfileBasicBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileBulkDelete::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileBulkDeleteNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfilePoolBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePoolBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MulticastForwardingSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MulticastForwardingSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementEventEmailSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementEventEmailSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementEventDataResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementEventDataResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\GdprReport::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GdprReportNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSmsList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSmsListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSms::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSmsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileHs20OperatorList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20OperatorListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileHs20Operator::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20OperatorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyHS20Operator::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyHS20OperatorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileHs20ProviderList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20ProviderListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileHs20Provider::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20ProviderNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileIpsecProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIpsecProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateIpsecProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateIpsecProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyIpsecProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyIpsecProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProfileClone::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileCloneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileVdpProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileVdpProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDnsServerProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDnsServerProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateDnsServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateDnsServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyDnsServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyDnsServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileUserTrafficProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUserTrafficProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDeleteBulkUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileAuthenticationProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAuthenticationProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateAuthenticationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateAuthenticationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyAuthenticationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyAuthenticationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDeleteBulkAuthenticationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkAuthenticationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileQueryCriteriaWithProfileId::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileQueryCriteriaWithProfileIdNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileQueryCriteriaWithProfileIdExtraFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileQueryCriteriaWithProfileIdExtraFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileAccountingProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAccountingProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDeleteBulkAccountingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkAccountingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileUpdateL3RoamingConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdateL3RoamingConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBridgeProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBridgeProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyBridgeProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyBridgeProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileLbsProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileLbsProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileLbsProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileLbsProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyDPGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyDPGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDpGroupList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDpGroupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileReturnDPGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileReturnDPGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileReturnDPGroupDpGroupListWithPriorityItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileReturnDPGroupDpGroupListWithPriorityItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateAccountingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateAccountingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyAccountingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyAccountingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileL2oGREProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL2oGREProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileL2oGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL2oGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateL2oGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateL2oGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyL2oGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyL2oGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateRuckusGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRuckusGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyRuckusGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyRuckusGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileRuckusGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRuckusGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileRuckusGREProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRuckusGREProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateSoftGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateSoftGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifySoftGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifySoftGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileSoftGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileSoftGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileSoftGREProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileSoftGREProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileGetL3RoamingConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileGetL3RoamingConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBaseServiceInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBaseServiceInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBridgeProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBridgeProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateDPGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateDPGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileAuthenticationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAuthenticationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileAccountingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAccountingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDnsServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDnsServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileIpsecProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIpsecProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateBridgeProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateBridgeProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VendorSpecificAttributeProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VendorSpecificAttributeProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VendorSpecificAttributeProfileGet::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileGetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VendorSpecificAttributeProfilePersist::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfilePersistNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VendorSpecificAttributeProfileCreateResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileCreateResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VendorSpecificAttributeProfileEmptyResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileEmptyResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VendorSpecificAttributeProfileDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VendorSpecificAttributeProfileQueryCriteriaResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileQueryCriteriaResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\NorthboundDataStreamingCreateNorthboundDataStreamingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingCreateNorthboundDataStreamingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\NorthboundDataStreamingModifyNorthboundDataStreamingEventCodes::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingModifyNorthboundDataStreamingEventCodesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\NorthboundDataStreamingNorthboundDataStreamingSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\NorthboundDataStreamingNorthboundDataStreamingEventCodes::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingEventCodesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\NorthboundDataStreamingNorthboundDataStreamingEventCodesListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingEventCodesListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\NorthboundDataStreamingNorthboundDataStreamingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\NorthboundDataStreamingModifyNorthboundDataStreamingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingModifyNorthboundDataStreamingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\NorthboundDataStreamingNorthboundDataStreamingProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\NorthboundDataStreamingNorthboundDataStreamingProfileListExtra::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileListExtraNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WifiCallingDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WifiCallingWifiCallingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingWifiCallingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WifiCallingCreateWifiCallingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingCreateWifiCallingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WifiCallingModifyWifiCallingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingModifyWifiCallingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WifiCallingWifiCallingPolicyList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingWifiCallingPolicyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpPools::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpPoolsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpPoolInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpPoolInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpPoolInfoClientInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpPoolInfoClientInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcpMsgStatsDhcpMsgStats::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcpMsgStatsDhcpMsgStatsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStatsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStatsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApmodelApModel::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApmodelApModelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupModifyAPGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupModifyAPGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupAddMembers::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupAddMembersNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupApGroupConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupApGroupList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupCreateAPGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupCreateAPGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityCreateIdentityUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateIdentityUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityModifyIdentityUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifyIdentityUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityIdentityList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityIdentityListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUserListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityModifyUser::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifyUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityImportIdentityGuestPass::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityImportIdentityGuestPassNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityIdentityGuestPassList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityGuestPassListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityModifyGuestPass::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifyGuestPassNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityQueryCriteriaFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityQueryCriteriaOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityQueryCriteriaOptionsLocalUserAuditTime::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaOptionsLocalUserAuditTimeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityQueryCriteriaOptionsGuestPassExpiration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaOptionsGuestPassExpirationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentitySubscriptionPackageList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySubscriptionPackageListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentitySubscriptionPackageListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySubscriptionPackageListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityCreateSubscriptionPackage::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateSubscriptionPackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityModifySubscriptionPackage::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifySubscriptionPackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentitySubscriptionPackage::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySubscriptionPackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityAaaServerList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityAaaServerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityIdentityUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityCreateIdentityGuestPass::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateIdentityGuestPassNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityPackageList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityPackageListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityCountryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCountryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityCreateUser::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUserConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUserConfigurationCredentialsGuestPassDto::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUserConfigurationCredentialsGuestPassDtoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClientDisconnectClientList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDisconnectClientListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClientDeAuthClientList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDeAuthClientListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClientDeAuthClient::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDeAuthClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClientDisconnectClient::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDisconnectClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileL3AccessControlPolicyArray::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL3AccessControlPolicyArrayNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileL3AccessControlPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL3AccessControlPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProfileIdList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileIdListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateL3AccessControlPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateL3AccessControlPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyL3AccessControlPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyL3AccessControlPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VlanpoolingCreateVlanPooling::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingCreateVlanPoolingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VlanpoolingModifyVlanPooling::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingModifyVlanPoolingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VlanpoolingDeleteBulkVlanPooling::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingDeleteBulkVlanPoolingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VlanpoolingVlanPooling::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingVlanPoolingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VlanpoolingVlanPoolingList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingVlanPoolingListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VlanpoolingVlanPoolingListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingVlanPoolingListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceTicketLoginRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTicketLoginRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceTicketLoginResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTicketLoginResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfilePoolBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfilePoolBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileBasicBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileBasicBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfilePoolBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfilePoolBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileHostBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileHostBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileOptionSpaceBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileOptionSpaceApplyToBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceApplyToBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileOptionSpaceApplyToBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceApplyToBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileHostBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileHostBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileBasicBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileBasicBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DomainDevicePolicyProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DomainDevicePolicyProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DomainDevicePolicyCreateDomainDevicePolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyCreateDomainDevicePolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DomainDevicePolicyDomainDevicePolicyProfileByQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyDomainDevicePolicyProfileByQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DomainDevicePolicyDomainDevicePolicyProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyDomainDevicePolicyProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DomainDevicePolicyModifyDomainDevicePolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyModifyDomainDevicePolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterState::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterStateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterStateNodeStateListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterStateNodeStateListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterStateManagementServiceStateListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterStateManagementServiceStateListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateRtlsProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRtlsProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileUpdateRtlsProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdateRtlsProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileRtlsProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRtlsProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\GeofenceProfileGetGeofenceProfileProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGetGeofenceProfileProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\GeofenceProfileGeofenceProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGeofenceProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\GeofenceProfileGetGeofenceProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGetGeofenceProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AlertAckBulkAlarms::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertAckBulkAlarmsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AlertClearBulkAlarms::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertClearBulkAlarmsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AlertSummaryEventSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertSummaryEventSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AlertSummaryAlarmSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertSummaryAlarmSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AlarmListAlarmQueryResultList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlarmListAlarmQueryResultListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventListEventQueryResultList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventListEventQueryResultListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSnmpAgentProfileUpdateApSnmpAgentProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileUpdateApSnmpAgentProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSnmpAgentProfileApSnmpAgentProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSnmpAgentProfileApSnmpAgentProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSnmpAgentProfileCreateApSnmpAgentProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileCreateApSnmpAgentProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSnmpAgentProfileApSnmpAgentProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateDhcpProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateDhcpProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlL2AccessControlList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlL2AccessControlListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlL2AccessControl::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlL2AccessControlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlCreateL2AccessControl::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlCreateL2AccessControlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlModifyL2AccessControl::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlModifyL2AccessControlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AccountSecurityProfileUpdate::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileUpdateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AccountSecurityProfileDeleteList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileDeleteListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AccountSecurityProfileGetById::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileGetByIdNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AccountSecurityProfileGetByIdResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileGetByIdResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AccountSecurityProfileProfileListResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileProfileListResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AccountSecurityProfileDelete::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileDeleteNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AccountSecurityProfileCreate::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileCreateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpProfileSettingBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpProfileSettingBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpProfileSettingBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpProfileSettingBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WhiteLabelCustomizationWhiteLabelCustomization::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WhiteLabelCustomizationWhiteLabelCustomizationList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WhiteLabelCustomizationCreateWhiteLabelCustomization::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationCreateWhiteLabelCustomizationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WhiteLabelCustomizationUpdateWhiteLabelCustomization::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationUpdateWhiteLabelCustomizationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaAuthenticationServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaAuthenticationServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateAuthenticationServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateAuthenticationServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyAuthenticationServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyAuthenticationServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateActiveDirectoryServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateActiveDirectoryServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyActiveDirectoryServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyActiveDirectoryServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaActiveDirectoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaActiveDirectoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaLDAPServerList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaLDAPServerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaLDAPServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaLDAPServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateLDAPServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateLDAPServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyLDAPServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyLDAPServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaHttp2ServerList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaHttp2ServerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaHttp2Server::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaHttp2ServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaCreateHttp2Server::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateHttp2ServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyHttp2Server::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyHttp2ServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaAuthenticationServerList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaAuthenticationServerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaActiveDirectory::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaActiveDirectoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneSwitchGroupBindingBindingRecord::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSwitchGroupBindingBindingRecordNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneSwitchGroupBindingDataList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSwitchGroupBindingDataListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneSwitchGroupBindingCreateRecord::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSwitchGroupBindingCreateRecordNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifyCPUserDefinedInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyCPUserDefinedInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifyControlPlane::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyControlPlaneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifyCPStaticRoute::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyCPStaticRouteNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneInterfaceList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneInterfaceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStaticRouteList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStaticRouteListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifyIpSupportType::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyIpSupportTypeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemUserDefinedInterfaceList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemUserDefinedInterfaceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VlanNameProfileVlanNameProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VlanNameProfileVlanNameProfileWithEditInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileWithEditInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VlanNameProfileVlanNameProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeCreateTaskConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeCreateTaskConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeCreateTaskConfigZoneListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeCreateTaskConfigZoneListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeTaskConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeTaskConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeTaskList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeTaskListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeHistoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeHistoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DeviceCapacityDevicesSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DeviceCapacityDevicesSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AprulesApRuleConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesApRuleConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AprulesCreateApRule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesCreateApRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AprulesModifyApRule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesModifyApRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AprulesApRuleList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesApRuleListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AprulesApRuleListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesApRuleListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemDataPlaneList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDataPlaneListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemDataPlaneListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDataPlaneListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemDataPlaneConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDataPlaneConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifyDataPlane::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyDataPlaneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifyDataPlaneState::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyDataPlaneStateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemUpdateDpMeshTunnelSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemUpdateDpMeshTunnelSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemGetDataPlaneMeshTunnelSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemGetDataPlaneMeshTunnelSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpSwitchoverDp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpSwitchoverDpNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFlexiVpnProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFlexiVpnProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalDetectionProfilePortalDetectionProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfilePortalDetectionProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalDetectionProfileCreatePortalDetectionProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfileCreatePortalDetectionProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalDetectionProfilePortalDetectionProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfilePortalDetectionProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SocialMediaLoginProfileSocialMediaLoginProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SocialMediaLoginProfileSocialMediaLoginProfileWithEditInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileWithEditInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SocialMediaLoginProfileSocialMediaLoginProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApCloudOnBoardingSyncResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCloudOnBoardingSyncResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApCloudOnBoardingSyncResultFailAps::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCloudOnBoardingSyncResultFailApsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApCloudOnBoardingSyncResultFailApsApsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCloudOnBoardingSyncResultFailApsApsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneQueryCriteriaFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneQueryCriteriaExtraFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaExtraFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneQueryCriteriaOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneDhcpSiteConfigList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDhcpSiteConfigListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateBonjourFencingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateBonjourFencingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneCreateZone::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCreateZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelCommonAttribute::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelCommonAttributeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneModifyZone::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanschedulerCreateWlanScheduler::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerCreateWlanSchedulerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanschedulerWlanSchedule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerWlanScheduleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceCreateWebAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateWebAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceWebAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceWebAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalservicePortalServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalservicePortalServiceListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalServiceListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceCreateHotspotInternal::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspotInternalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceCreateHotspotExternal::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspotExternalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceCreateHotspotSmartClientOnly::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspotSmartClientOnlyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceCreateHotspot20WlanProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspot20WlanProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyHotspot20WlanProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyHotspot20WlanProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceCreateHotspot20VenueProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspot20VenueProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyHotspot20VenueProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyHotspot20VenueProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EthernetPortModifyEthernetPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortModifyEthernetPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyBonjourFencingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyBonjourFencingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneCreateBonjourGatewayPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCreateBonjourGatewayPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneModifyBonjourGatewayPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyBonjourGatewayPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneBonjourGatewayPolicyConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourGatewayPolicyConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneBonjourGatewayPolicyList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourGatewayPolicyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyClientIsolationWhitelist::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyClientIsolationWhitelistNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceCreateGuestAccess::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateGuestAccessNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceGuestAccess::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceGuestAccessNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyGuestAccess::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyGuestAccessNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceHotspot20WlanProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceHotspot20WlanProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceHotspot20VeuneProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceHotspot20VeuneProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceCreateL2ACL::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateL2ACLNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyL2ACL::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyL2ACLNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceWechatConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceWechatConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceCreateWechat::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateWechatNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyWechat::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyWechatNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneModfiyApFirmware::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModfiyApFirmwareNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DevicePolicyPorfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyPorfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DevicePolicyPorfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyPorfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DevicePolicyCreateDevicePolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyCreateDevicePolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneCreateDiffServProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCreateDiffServProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneModifyDiffServProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyDiffServProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneDiffServConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDiffServConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateClientIsolationWhitelist::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateClientIsolationWhitelistNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneAvailableTunnelProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneAvailableTunnelProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EthernetPortCreateEthernetPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortCreateEthernetPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceL2ACL::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceL2ACLNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneDiffServList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDiffServListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApFirmwareList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApFirmwareListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EthernetPortEthernetPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortEthernetPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DevicePolicyDevicePolicyPorfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyDevicePolicyPorfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBonjourFencingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneMeshConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneMeshConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceHotspot::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceHotspotNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanschedulerWlanScheduleList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerWlanScheduleListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EthernetPortProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EthernetPortProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneModifyBonjourGatewayEnable::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyBonjourGatewayEnableNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyHotspot::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyHotspotNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanschedulerModifyWlanScheduler::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerModifyWlanSchedulerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyWebAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyWebAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DevicePolicyModifyDevicePolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyModifyDevicePolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneZoneList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneZoneListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileClientIsolationWhitelist::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileClientIsolationWhitelistNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneZoneConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneZoneConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterRedundancyClusterRedundancySettings::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyClusterRedundancySettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterRedundancyUpdateClusterRedundancy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyUpdateClusterRedundancyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapIndoorMapList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapIndooMapAuditId::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndooMapAuditIdNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapIndoorMap::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SessionManagementRuckusSessions::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SessionManagementRuckusSessionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfilePrecedenceList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfilePrecedenceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfilePrecedenceListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfilePrecedenceListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreatePrecedenceProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreatePrecedenceProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileUpdatePrecedenceProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdatePrecedenceProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDeleteBulkPrecedenceProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkPrecedenceProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MeshNodeInfoMeshNodeInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoMeshNodeInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MeshNodeInfoUpdateAPZeroTouch::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoUpdateAPZeroTouchNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MeshNeighborInfoMeshNeighborInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNeighborInfoMeshNeighborInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SplitTunnelCreateSplitTunnelProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelCreateSplitTunnelProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SplitTunnelModifySplitTunnelProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelModifySplitTunnelProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SplitTunnelSplitTunnelProfileQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SplitTunnelSplitTunnelProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SplitTunnelSplitTunnelProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SplitTunnelSplitTunnelProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileRogueApPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRogueApPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateRogueApPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRogueApPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileRogueApPolicyList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRogueApPolicyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileUpdateRogueApPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdateRogueApPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RogueclientRogueInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueclientRogueInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateRestrictedApAccessProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRestrictedApAccessProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileRestrictedApAccessProfileArray::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRestrictedApAccessProfileArrayNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyRestrictedApAccessProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyRestrictedApAccessProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileRestrictedApAccessProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRestrictedApAccessProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileCreateMduSegmentationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileCreateMduSegmentationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileUpdateMduSegmentationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileUpdateMduSegmentationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileSummaryReviewData::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryReviewDataNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduSegmentationProfileQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileProfileContentList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileProfileContentListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileEthernetPortProfileConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileEthernetPortProfileConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileEthernetPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileEthernetPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationCreateAdminAAAServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationCreateAdminAAAServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationRetrieveAdminAAAServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRetrieveAdminAAAServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationRetrieveAdminAAAServerList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRetrieveAdminAAAServerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationRetrieveAdminAAAServerListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRetrieveAdminAAAServerListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationModifyAdminAAAServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyAdminAAAServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationModifyAutoExportBackup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyAutoExportBackupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationAutoExportBackup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationAutoExportBackupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationModifyScheduleBackup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyScheduleBackupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationScheduleBackup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationScheduleBackupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationApplicationLogAndStatusList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApplicationLogAndStatusListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationModifyLogLevel::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyLogLevelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationUpgradeStatus::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradeStatusNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationApPatchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationApPatchStatus::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchStatusNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationApPatchHistoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchHistoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationModfiyLicenseServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModfiyLicenseServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationUpgradePatchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradePatchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationClusterBackupList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationClusterBackupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLicensesSummaryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSummaryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLicensesSyncLogsList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSyncLogsListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLicenseServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicenseServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationConfigurationBackupList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationConfigurationBackupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationUpgradeHistoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradeHistoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationRestoreConfigurationBackup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRestoreConfigurationBackupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLicensesList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcUserDefinedProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcUserDefinedProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcCreateApplicationPolicyProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcCreateApplicationPolicyProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcApplicationPolicyProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationPolicyProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcModifyApplicationPolicyProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcModifyApplicationPolicyProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcSignaturePackage::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcSignaturePackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcLatestInstallableSignaturePackage::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcLatestInstallableSignaturePackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcCreateUserDefinedProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcCreateUserDefinedProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcModifyUserDefinedProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcModifyUserDefinedProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcApplicationList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcAppCategoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcAppCategoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcAppCategory::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcAppCategoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcApplication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcDownloadLatestInstallableSignaturePackage::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcDownloadLatestInstallableSignaturePackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcPatchSignaturePackage::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcPatchSignaturePackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SciModifyEventCode::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciModifyEventCodeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SciModifySciProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciModifySciProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SciSciEventCode::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciEventCodeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SciSciEventCodeListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciEventCodeListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SciSciProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SciDeleteSciProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciDeleteSciProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SciCreateSciProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciCreateSciProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SciModifySciEnabled::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciModifySciEnabledNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SciSciProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SciSciProfileListExtra::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciProfileListExtraNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DomainCreateDomain::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainCreateDomainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DomainModifyDomain::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainModifyDomainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DomainDomainList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDomainListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DomainDomainConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDomainConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskDeleteDPSKs::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDeleteDPSKsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskDeleteDpskResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDeleteDpskResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskGetDpskEnabledWlans::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskEnabledWlansNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskGetDpskEnabledWlansListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskEnabledWlansListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskModifyDeleteExpiredDpsk::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskModifyDeleteExpiredDpskNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskGetDpskResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskBatchGenUnbound::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskBatchGenUnboundNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskUpdateDpsk::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskUpdateDpskNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskGetDpskInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskDeleteExpiredDpskConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDeleteExpiredDpskConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFirewallProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFirewallProfileQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFirewallProfileQueryCriteriaOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileQueryCriteriaOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFirewallProfileArray::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileArrayNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateFirewallProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateFirewallProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyFirewallProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyFirewallProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DnsSpoofingProfileGetDnsSpoofingProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileGetDnsSpoofingProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DnsSpoofingProfileDnsSpoofingProfileDetail::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingProfileDetailNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DnsSpoofingProfileDnsSpoofingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ToolSpeedFlex::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ToolSpeedFlexNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ToolTestResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ToolTestResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationZdAPList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdAPListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationZdImportStatus::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdImportStatusNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationConnectZD::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationConnectZDNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationZdImport::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdImportNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSwapApConfigure::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSwapApConfigureNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemApMacOUIList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApMacOUIListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCsrList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCsrListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCsrListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCsrListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCertificatesSigningRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificatesSigningRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogPrimaryServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogPrimaryServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogSecondaryServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogSecondaryServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateTrustedCAChainCertList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateTrustedCAChainCertListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateTrustedCAChainCertListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateTrustedCAChainCertListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCreateTrustedCAChain::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateTrustedCAChainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateTrustedCAChain::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateTrustedCAChainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateModifyTrustedCAChain::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateModifyTrustedCAChainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSystemTimeSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSystemTimeSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogSyslogServerSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogSyslogServerSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogModifySyslogSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogModifySyslogSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SyslogPriority::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogPriorityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCreateCert::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateCertNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCertSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCreateCSR::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateCSRNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifySnmpAgent::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifySnmpAgentNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemNorthboundInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemNorthboundInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CaleaCaleaMacListRsp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaMacListRspNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CaleaCaleaMacListRq::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaMacListRqNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CaleaCaleaCommonSettingRq::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaCommonSettingRqNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemGatewayAdvanced::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemGatewayAdvancedNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControllerList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControllerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControllerListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControllerListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemInventoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemInventoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemInventoryListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemInventoryListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSecuritySetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSecuritySettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemCloudOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCloudOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSystemSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSystemSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemCreateApMacOUI::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCreateApMacOUINormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemUpdateApMacOUI::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemUpdateApMacOUINormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItemCpu::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemCpuNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItemDisk::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemDiskNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItemMemory::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemMemoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSnmpAgentConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSnmpAgentConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCreateClientCert::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateClientCertNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaTestAuthenticationServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaTestAuthenticationServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaTestAAAServerSingleResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaTestAAAServerSingleResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApRoutineConfigIntervalApRoutineConfigIntervalReq::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApRoutineConfigIntervalApRoutineConfigIntervalReqNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CaleaCaleaCommonSettingRsp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaCommonSettingRspNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateClientCertList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateClientCertListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateClientCertListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateClientCertListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateClientCert::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateClientCertNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifyGatewayAdvanced::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyGatewayAdvancedNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemLwapp2scgConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemLwapp2scgConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifyLwapp2scg::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyLwapp2scgNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemModifySystemTimeSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifySystemTimeSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApRoutineStatusIntervalApRoutineStatusIntervalRsp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApRoutineStatusIntervalApRoutineStatusIntervalRspNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApRoutineConfigIntervalApRoutineConfigIntervalRsp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApRoutineConfigIntervalApRoutineConfigIntervalRspNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemCommonAccessCardSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCommonAccessCardSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCertificate::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCertificateList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificateListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateCertificateListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificateListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIPsecGetResult::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIPsecGetResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIPsecUpdate::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIPsecUpdateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileVlanPrecedenceItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileVlanPrecedenceItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapScale::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapScaleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAccounting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAccountingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfilePublicSubnetIdBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePublicSubnetIdBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileRealmAuthServiceMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRealmAuthServiceMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcLatestInstallableSignaturePackageBinary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcLatestInstallableSignaturePackageBinaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBonjourFencingRuleDeviceMac::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingRuleDeviceMacNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanQueryCreateWlanQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryCreateWlanQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileSiteSecondary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileSiteSecondaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio5gZone::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VendorSpecificAttributeProfileVendorSpecificAttribute::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileVendorSpecificAttributeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanQueryWlanBssid::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryWlanBssidNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApMesh::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMeshNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\FlexiVpnFlexiVpnSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\FlexiVpnFlexiVpnSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationSecondaryRadiusServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationSecondaryRadiusServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanQueryApWlanBssid::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryApWlanBssidNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSnmpAgentProfileApSnmpCommunity::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpCommunityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIPsecProposal::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIPsecProposalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupRoleLabelValue::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupRoleLabelValueNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationApplicationLogAndStatus::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApplicationLogAndStatusNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeBladeProgress::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeBladeProgressNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemApNumberLimitSettingOfDomain::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApNumberLimitSettingOfDomainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RogueInfoRogueInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueInfoRogueInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio5gApGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gApGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBonjourFencingService::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigResponseAp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigResponseApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDownlinkRateLimiting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDownlinkRateLimitingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapIndoorMapSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelLldpSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLldpSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\GeofenceProfileGeofenceProfileLocationData::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGeofenceProfileLocationDataNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterRedundancyManagementEntry::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyManagementEntryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapIndoorMapAp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderEAPAuthSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderEAPAuthSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileEspSecurityAssociationContent::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileEspSecurityAssociationContentNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityUsernamePasswordCredentialsImplDto::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUsernamePasswordCredentialsImplDtoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SciDeleteSciProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciDeleteSciProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationUpgradeHistorySummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradeHistorySummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceUserSession::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceUserSessionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileEspProposal::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileEspProposalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceConnectionCapability::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceConnectionCapabilityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanEncryption::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanEncryptionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigZone::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio5gResponseAp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gResponseApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelLanPortSupplicant::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPortSupplicantNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderAccounting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderAccountingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonRbacMetadata::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRbacMetadataNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonRbacMetadataRbacMetadataItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRbacMetadataRbacMetadataItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentitySessionDuration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySessionDurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileL3AclRuleList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL3AclRuleListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClientHistoricalClient::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientHistoricalClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortalLang::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPortalLangNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDoAssignIp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDoAssignIpNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDoAssignIpSiteApsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDoAssignIpSiteApsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileClientIsolationEntry::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileClientIsolationEntryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SplitTunnelSplitTunnelIpMaskRule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelIpMaskRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonTrafficClassProfileRef::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTrafficClassProfileRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalDetectionProfilePortalDetectionPattern::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfilePortalDetectionPatternNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemApNumberLimitSettingOfZone::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApNumberLimitSettingOfZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneTimezoneSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneTimezoneSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationActiveDirectoryServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationActiveDirectoryServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemAuthenticationKey::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemAuthenticationKeyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDataPlaneL3RoamingData::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDataPlaneL3RoamingDataNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityAaaServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityAaaServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStaticRoute::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStaticRouteNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv4ControlInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4ControlInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VlanNameProfileVlanNameProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileHs20AdviceOfCharge::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20AdviceOfChargeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileHs20AdviceOfChargeNaiRealm::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20AdviceOfChargeNaiRealmNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileHs20AdviceOfChargePlanInformationsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20AdviceOfChargePlanInformationsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio24gApGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gApGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio5gAp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonMyRuckusConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonMyRuckusConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanDSCPSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanDSCPSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneBandBalancing::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBandBalancingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyGroupAttrIdentityUserRoleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyGroupAttrIdentityUserRoleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaModifyGroupAttrIdentityUserRoleMappingUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLicensesSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLicensesSummaryCapacityControlLicenseCount::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSummaryCapacityControlLicenseCountNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SessionManagementRuckusSession::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SessionManagementRuckusSessionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationDefaultRoleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationDefaultRoleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationApPatchHistory::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchHistoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAdvanced::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAdvancedNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAdvancedUserRoleAccess::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAdvancedUserRoleAccessNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcApplicationRule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonRadiusServerWhenTlsEnabled::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRadiusServerWhenTlsEnabledNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileDistributionSwitchObj::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileDistributionSwitchObjNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv6AccessAndCoreSeparation::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6AccessAndCoreSeparationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileOptionInstance::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionInstanceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanSchedule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanScheduleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelLacpSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLacpSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelExternalAntenna::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelExternalAntennaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonOverrideSmartMonitor::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonOverrideSmartMonitorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityMaxDevices::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityMaxDevicesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationBackupFile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationBackupFileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemReservedPort::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemReservedPortNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanMACAuth::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanMACAuthNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityAuthenticationServerConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityAuthenticationServerConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileOptionBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapBasicIndoorMap::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapBasicIndoorMapNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApFirmware::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApFirmwareNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigApGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigApGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonQueryCriteriaExtraNotFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaExtraNotFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBlockedPort::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockedPortNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryCreateApQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryCreateApQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryCreateApQueryIndoorMapXy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryCreateApQueryIndoorMapXyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApQueryCreateApQueryCellularGpsHistoryItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryCreateApQueryCellularGpsHistoryItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemFriendlyNameLang::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFriendlyNameLangNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileIkeSecurityAssociationContent::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIkeSecurityAssociationContentNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderEAPMethod::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderEAPMethodNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLicenses::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileModifyIpAclRules::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyIpAclRulesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileHs20OperatorIcon::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20OperatorIconNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonOverrideClientAdmissionControl::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonOverrideClientAdmissionControlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityCountrySummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCountrySummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneBonjourPolicyRule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourPolicyRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DnsSpoofingProfileDnsSpoofingProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonQueryCriteriaOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AlarmListSingleAlarm::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlarmListSingleAlarmNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityPackageConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityPackageConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemCpStaticRoute::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCpStaticRouteNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelLanPort8021X::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPort8021XNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApAlarmSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApAlarmSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RogueclientRogueInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueclientRogueInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonAltitude::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonAltitudeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileHs20TermsConditions::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20TermsConditionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MeshNodeInfoMeshNodeInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoMeshNodeInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonTrafficClassRef::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTrafficClassRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCmProtocolOptionContent::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCmProtocolOptionContentNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBonjourFencingRule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio6gApGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gApGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduProfileApGroupInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduProfileApGroupInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonRadiusServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRadiusServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalservicePortalRedirect::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalRedirectNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderSubscriptionDescription::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderSubscriptionDescriptionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileAcctServiceRealmMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAcctServiceRealmMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneSoftGreRef::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSoftGreRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonTimeRange::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTimeRangeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv6SecondaryInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6SecondaryInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlRuleObject::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlRuleObjectNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonQinq::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQinqNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelLanPortSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPortSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileRateLimitingPrecedenceItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRateLimitingPrecedenceItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigRef::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigRefSiteApsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigRefSiteApsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPrimaryInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPrimaryInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupPermissionWithoutDetailItems::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionWithoutDetailItemsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DnsSpoofingProfileDnsSpoofingRule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApInfoApInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApInfoApInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceSecondaryRadiusServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceSecondaryRadiusServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneLoadBalancing::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneLoadBalancingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanCoreTunnel::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanCoreTunnelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelCellularSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelCellularSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonBaseServiceInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonBaseServiceInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceDnatPortMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceDnatPortMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv4ManagementInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4ManagementInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceCommonAccountingService::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAccountingServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileUpLinkObj::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileUpLinkObjNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCoreNetworkGateway::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCoreNetworkGatewayNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv4AccessAndCoreSeparation::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4AccessAndCoreSeparationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\UrlFilteringUrlFilteringBlockCategory::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringBlockCategoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduProfileDpInfoSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduProfileDpInfoSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityIdentityGuestPassConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityGuestPassConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneDiffServSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDiffServSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderPLMN::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderPLMNNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApmodelLanPortSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApmodelLanPortSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonCreateResultIdName::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonCreateResultIdNameNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneSyslog::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSyslogNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemCpUserDefinedInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCpUserDefinedInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonRateLimiting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRateLimitingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneUplinkDiffServ::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneUplinkDiffServNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeUploadPatchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeUploadPatchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskWlanDpskSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanDpskSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClientQueryTcWithQuota::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientQueryTcWithQuotaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonOverrideGenericRef::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonOverrideGenericRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonSmartMonitor::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSmartMonitorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityTimeScheduleList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityTimeScheduleListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigAp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApSnmpOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApSnmpOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MeshNodeInfoHelperZoneInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoHelperZoneInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneZoneSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneZoneSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementEventDataList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementEventDataListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDhcpRelayNoRelayTunnel::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDhcpRelayNoRelayTunnelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv6PrimaryInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6PrimaryInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClientQueryCreateClientQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientQueryCreateClientQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonGenericRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DevicePolicyDevicePolicyRule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyDevicePolicyRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcSignaturePackageBinary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcSignaturePackageBinaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioBackgroundScanning::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioBackgroundScanningNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventListSingleEvent::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventListSingleEventNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonApRebootTimeout::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonApRebootTimeoutNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio24gAp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApNetworkIpv6::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNetworkIpv6Normalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelLanPortAuthenticator::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPortAuthenticatorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanFastInitialLinkSetup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanFastInitialLinkSetupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CertificateServiceCertificate::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateServiceCertificateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio24gZone::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlEtherTypeObject::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlEtherTypeObjectNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBonjourFencingRuleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingRuleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeHistory::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeHistoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RacStatsRadiusProxy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RacStatsRadiusProxyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderHomeOIs::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderHomeOIsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationRadiusServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRadiusServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemApMacOUI::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApMacOUINormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonSnmpUser::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSnmpUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupApGroupMember::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupMemberNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AprulesSubnet::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesSubnetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonFullTextSearch::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonFullTextSearchNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileHs20FriendlyName::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20FriendlyNameNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioAutoChannelSelection::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioAutoChannelSelectionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApLogin::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApLoginNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneBonjourGatewayPolicySummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourGatewayPolicySummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelAuthenticatorAAAServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelAuthenticatorAAAServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MeshNeighborInfoMeshNeighborInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNeighborInfoMeshNeighborInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationClusterBackupSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationClusterBackupSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneBonjourPolicyRuleConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourPolicyRuleConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityIdentityUserSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityUserSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneRogue::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneRogueNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileAdvancedOptionContent::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAdvancedOptionContentNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonLteBandLockChannel::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonLteBandLockChannelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\L2AccessControlUserDefinedEtherTypeObject::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlUserDefinedEtherTypeObjectNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileMduProfileDpInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduProfileDpInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceGroupAttrIdentityUserRoleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceGroupAttrIdentityUserRoleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceGroupAttrIdentityUserRoleMappingUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileUplinkRateLimiting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUplinkRateLimitingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileRogueApRuleList::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRogueApRuleListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderExternalOSU::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderExternalOSUNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileAccessSwitchObj::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileAccessSwitchObjNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileFlexiVpnProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFlexiVpnProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalservicePortalLocation::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalLocationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceModifyGroupAttrIdentityUserRoleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyGroupAttrIdentityUserRoleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceModifyGroupAttrIdentityUserRoleMappingUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskWlanExternalDpsk::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanExternalDpskNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskWlanExternalDpskEncryption::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanExternalDpskEncryptionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskWlanExternalDpskAuthService::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanExternalDpskAuthServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileSwitchGroups::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileSwitchGroupsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WifiCallingEpdg::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingEpdgNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneDownlinkDiffServ::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDownlinkDiffServNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio5gResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationTacacsServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationTacacsServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IdentityPassValidFor::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityPassValidForNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\BondPortBondPortProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonApLatencyInterval::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonApLatencyIntervalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv6ControlInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6ControlInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskDpskInfoItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDpskInfoItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv6ManagementInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6ManagementInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApLogin::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApLoginNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterOperationProgress::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterOperationProgressNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneRecoverySsidSet::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneRecoverySsidSetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonSshPublicKeyRef::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSshPublicKeyRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SocialMediaLoginProfileWhitelistedDomain::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileWhitelistedDomainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApNetwork::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNetworkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv4ClusterInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4ClusterInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceVenueName::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceVenueNameNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSnmpAgentProfileTargetConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileTargetConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfilePrivateQinqVlanRangeBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePrivateQinqVlanRangeBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationZdAP::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdAPNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceDefaultConnectionCapability::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceDefaultConnectionCapabilityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonSnmpCommunity::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSnmpCommunityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonHealthCheckPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonHealthCheckPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPortStatisticNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio6gAp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigListRef::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigListRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigListRefSiteApsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigListRefSiteApsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterRedundancyActiveCluster::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyActiveClusterNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonPortalCustomization::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonPortalCustomizationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AprulesGpsCoordinates::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesGpsCoordinatesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanRadius::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanRadiusNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSecondaryInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSecondaryInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderRealm::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderRealmNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLicensesSyncLogs::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSyncLogsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonWebAuthenticationPortalCustomization::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonWebAuthenticationPortalCustomizationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneDaylightSavingTime::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDaylightSavingTimeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio24gResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpProfileRef::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpProfileRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonQueryCriteriaSortInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaSortInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneCustomizedTimeZone::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCustomizedTimeZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupResourceGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupResourceGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DomainDevicePolicyDomainDevicePolicyRule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyDomainDevicePolicyRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SocialMediaLoginProfileSocialMediaLoginProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladePreviousOperationRecord::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladePreviousOperationRecordNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterUpgradeProgress::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterUpgradeProgressNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupApGroupSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AvcCheckLatestInstallableSignaturePackageSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcCheckLatestInstallableSignaturePackageSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaGroupAttrIdentityUserRoleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaGroupAttrIdentityUserRoleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaGroupAttrIdentityUserRoleMappingUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupPermission::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserScgUserGroupPermissionItemsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionItemsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AprulesIpAddressRange::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesIpAddressRangeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio6gZone::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AdministrationLdapServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLdapServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonQueryCriteriaExtraFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaExtraFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneAvailableTunnelProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneAvailableTunnelProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileTtgCommonSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileTtgCommonSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\EventManagementSingleEventSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementSingleEventSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileIkeProposal::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIkeProposalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\VlanNameProfileVlanNameRule::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadio6gResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileQinqVlanRangeBO::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileQinqVlanRangeBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonRecoverySsid::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRecoverySsidNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\AaaServerQueryCreateAaaServer::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaServerQueryCreateAaaServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileIpAclRules::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIpAclRulesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonQueryCriteriaFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileOptionSpaceInstance::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceInstanceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WiredClientQueryCreateClientQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WiredClientQueryCreateClientQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslog::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeZone::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WhiteLabelCustomizationWhiteLabelCustomizationSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileProviderOnlineSignup::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderOnlineSignupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonApManagementVlan::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonApManagementVlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\IndoorMapIndoorMapXy::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapXyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileRateLimitPorts::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileRateLimitPortsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpClientInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpClientInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonTargetConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTargetConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\GdprFtp::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GdprFtpNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSnmpAgentProfileApSnmpUser::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonClientAdmissionControl::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonClientAdmissionControlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanVlan::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanVlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneSnmpUser::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSnmpUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneUnsupportedApModel::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneUnsupportedApModelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileDhcpOption82::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDhcpOption82Normalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ReferenceNormalizer::class,
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
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserAuditIdNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserAuditIdNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserGetScgUserNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserGetScgUserNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserModifyScgUserNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserModifyScgUserNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserCreateScgUserNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserCreateScgUserNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserQueryCriteriaNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserQueryCriteriaNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserQueryCriteriaFiltersItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserQueryCriteriaFiltersItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringPolicyListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringPolicyListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringPolicyBlockByThreatLevelConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringPolicyBlockByThreatLevelConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringDeleteBulkNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringDeleteBulkNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringCreateUrlFilteringPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringCreateUrlFilteringPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringCreateUrlFilteringPolicyBlockByThreatLevelConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringCreateUrlFilteringPolicyBlockByThreatLevelConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringModifyUrlFilteringPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringModifyUrlFilteringPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringModifyUrlFilteringPolicyBlockByThreatLevelConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringModifyUrlFilteringPolicyBlockByThreatLevelConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringBlockCategoriesListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringBlockCategoriesListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApPacketCaptureApPacketCaptureResNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApPacketCaptureApPacketCaptureResNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApPacketCaptureApPacketCaptureReqNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApPacketCaptureApPacketCaptureReqNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationPolicyProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationPolicyProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueInfoRogueInfoListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueInfoRogueInfoListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientHistoricalClientListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientHistoricalClientListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaServerQueryAaaServerQueryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaServerQueryAaaServerQueryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcUserDefinedProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcUserDefinedProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDhcpProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDhcpProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDpskQueryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDpskQueryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDpskQueryListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDpskQueryListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileTrafficClassProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileTrafficClassProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WiredClientQueryClientQueryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WiredClientQueryClientQueryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapSummaryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapSummaryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileClientIsolationWhitelistArrayNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileClientIsolationWhitelistArrayNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingPolicyListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingPolicyListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryWlanQueryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryWlanQueryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaFiltersItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaFiltersItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaExtraFiltersItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaExtraFiltersItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaExtraNotFiltersItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaExtraNotFiltersItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaOptionsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryQueryCriteriaOptionsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryApQueryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryApQueryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryApWlanBssidQueryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryApWlanBssidQueryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RacStatsRadiusProxyListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RacStatsRadiusProxyListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientQueryClientQueryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientQueryClientQueryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApModifyRogueTypeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApModifyRogueTypeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpGlobalSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpGlobalSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemNtpServerValidationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemNtpServerValidationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemNtpServerValidationMessageNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemNtpServerValidationMessageNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFriendlyNameLangListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFriendlyNameLangListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPortalLangListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPortalLangListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupCreateWlanGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupCreateWlanGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupModifyWlanGroupMemberNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupModifyWlanGroupMemberNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateStandardOpenWlanNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateStandardOpenWlanNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateStandard80211WlanNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateStandard80211WlanNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateHotspotWlanNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateHotspotWlanNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateWechatWlanNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateWechatWlanNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateGuestAccessWlanNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateGuestAccessWlanNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateWebAuthWlanNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateWebAuthWlanNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateHotspot20WlanNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateHotspot20WlanNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateHotspot20OpenWlanNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanCreateHotspot20OpenWlanNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanModifyWlanNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanModifyWlanNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupWlanGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupWlanGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupWlanMemberNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupWlanMemberNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupModifyWlanGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupModifyWlanGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupWlanGroupListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlangroupWlanGroupListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDeleteBulkFtpNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDeleteBulkFtpNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpTestResponseNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpTestResponseNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFtpListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateTrafficClassProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateTrafficClassProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockClientNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockClientNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyBlockClientNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyBlockClientNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockClientListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockClientListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockClientListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockClientListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBulkBlockClientNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBulkBlockClientNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBulkBlockClientBlockClientListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBulkBlockClientBlockClientListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupRoleLabelValueListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupRoleLabelValueListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionListExtraNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionListExtraNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserPatchScgUserGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserPatchScgUserGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupAuditIdNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupAuditIdNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileApSyslogServerProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileApSyslogServerProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileApSyslogServerProfileListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileApSyslogServerProfileListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonBulkDeleteRequestNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonBulkDeleteRequestNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileApSyslogServerProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileApSyslogServerProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileUpdateApSyslogServerProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileUpdateApSyslogServerProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonEmptyResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonEmptyResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileCreateApSyslogServerProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogServerProfileCreateApSyslogServerProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonCreateResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonCreateResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAuthenticationServiceListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAuthenticationServiceListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceDeleteBulkAuthenticationServiceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceDeleteBulkAuthenticationServiceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyLocalDbAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyLocalDbAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAuthenticationServiceListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAuthenticationServiceListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateRadiusAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateRadiusAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyRadiusAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyRadiusAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceActiveDirectoryServiceListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceActiveDirectoryServiceListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateActiveDirectoryAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateActiveDirectoryAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyActiveDirectoryAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyActiveDirectoryAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceLDAPServiceListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceLDAPServiceListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceLDAPServiceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceLDAPServiceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTestingConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTestingConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTestingConfigLoginRequestNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTestingConfigLoginRequestNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAccountingServiceListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAccountingServiceListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAccountingServiceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAccountingServiceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateRadiusAccountingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateRadiusAccountingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyRadiusAccountingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyRadiusAccountingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyEntireRadiusAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyEntireRadiusAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceActiveDirectoryServiceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceActiveDirectoryServiceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateLDAPAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCreateLDAPAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyLDAPAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyLDAPAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAccountingServiceListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAccountingServiceListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceDeleteBulkAccountingServiceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceDeleteBulkAccountingServiceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyEntireRadiusAccountingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyEntireRadiusAccountingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAuthenticationServiceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAuthenticationServiceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAuthenticationServiceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceRadiusAuthenticationServiceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaSuperSetNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaSuperSetNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileQueryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileQueryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileWithEditInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileWithEditInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortCreateBondPortProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortCreateBondPortProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortModifyBondPortProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortModifyBondPortProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApOperationalSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApOperationalSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApLinemanSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApLinemanSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApLinemanSummaryListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApLinemanSummaryListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSwitchoverAPNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSwitchoverAPNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelApModelNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelApModelNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingStatisticNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingStatisticNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNeighborAPListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNeighborAPListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNeighborAPListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNeighborAPListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApModifyAPNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApModifyAPNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApListEntryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApListEntryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApListEntryListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApApListEntryListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCreateAPNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCreateAPNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveRequestNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveRequestNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveResponseNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveResponseNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveResponseFailApsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveResponseFailApsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveResponseFailApsApsItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMultipleMoveApMultipleMoveResponseFailApsApsItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePoolBOListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePoolBOListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfileBasicBOListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfileBasicBOListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfileBasicBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfileBasicBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileBulkDeleteNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileBulkDeleteNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePoolBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePoolBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MulticastForwardingSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MulticastForwardingSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementEventEmailSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementEventEmailSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementEventDataResponseNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementEventDataResponseNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GdprReportNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GdprReportNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSmsListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSmsListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSmsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSmsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20OperatorListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20OperatorListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20OperatorNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20OperatorNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyHS20OperatorNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyHS20OperatorNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20ProviderListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20ProviderListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20ProviderNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20ProviderNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIpsecProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIpsecProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateIpsecProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateIpsecProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyIpsecProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyIpsecProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateUserTrafficProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateUserTrafficProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyUserTrafficProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyUserTrafficProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileCloneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileCloneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileVdpProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileVdpProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDnsServerProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDnsServerProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateDnsServerProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateDnsServerProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyDnsServerProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyDnsServerProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUserTrafficProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUserTrafficProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkUserTrafficProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkUserTrafficProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAuthenticationProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAuthenticationProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateAuthenticationProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateAuthenticationProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyAuthenticationProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyAuthenticationProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkAuthenticationProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkAuthenticationProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileQueryCriteriaWithProfileIdNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileQueryCriteriaWithProfileIdNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileQueryCriteriaWithProfileIdExtraFiltersItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileQueryCriteriaWithProfileIdExtraFiltersItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAccountingProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAccountingProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkAccountingProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkAccountingProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdateL3RoamingConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdateL3RoamingConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBridgeProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBridgeProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyBridgeProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyBridgeProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileLbsProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileLbsProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileLbsProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileLbsProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyDPGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyDPGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDpGroupListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDpGroupListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileReturnDPGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileReturnDPGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileReturnDPGroupDpGroupListWithPriorityItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileReturnDPGroupDpGroupListWithPriorityItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateAccountingProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateAccountingProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyAccountingProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyAccountingProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL2oGREProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL2oGREProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL2oGREProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL2oGREProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateL2oGREProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateL2oGREProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyL2oGREProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyL2oGREProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRuckusGREProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRuckusGREProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyRuckusGREProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyRuckusGREProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRuckusGREProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRuckusGREProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRuckusGREProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRuckusGREProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateSoftGREProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateSoftGREProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifySoftGREProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifySoftGREProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileSoftGREProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileSoftGREProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileSoftGREProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileSoftGREProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileGetL3RoamingConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileGetL3RoamingConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBaseServiceInfoListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBaseServiceInfoListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBridgeProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBridgeProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateDPGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateDPGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAuthenticationProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAuthenticationProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAccountingProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAccountingProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDnsServerProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDnsServerProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIpsecProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIpsecProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUserTrafficProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUserTrafficProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateBridgeProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateBridgeProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileGetNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileGetNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfilePersistNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfilePersistNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileCreateResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileCreateResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileEmptyResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileEmptyResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileDeleteBulkNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileDeleteBulkNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileQueryCriteriaResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileQueryCriteriaResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingCreateNorthboundDataStreamingProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingCreateNorthboundDataStreamingProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingModifyNorthboundDataStreamingEventCodesNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingModifyNorthboundDataStreamingEventCodesNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingSettingsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingSettingsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingEventCodesNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingEventCodesNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingEventCodesListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingEventCodesListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingModifyNorthboundDataStreamingProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingModifyNorthboundDataStreamingProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileListExtraNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileListExtraNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingDeleteBulkNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingDeleteBulkNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingWifiCallingPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingWifiCallingPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingCreateWifiCallingPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingCreateWifiCallingPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingModifyWifiCallingPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingModifyWifiCallingPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingWifiCallingPolicyListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingWifiCallingPolicyListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpPoolsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpPoolsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpPoolInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpPoolInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpPoolInfoClientInfoListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpPoolInfoClientInfoListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcpMsgStatsDhcpMsgStatsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcpMsgStatsDhcpMsgStatsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStatsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStatsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStatsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStatsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApmodelApModelNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApmodelApModelNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupModifyAPGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupModifyAPGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupAddMembersNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupAddMembersNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupCreateAPGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupCreateAPGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateIdentityUserRoleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateIdentityUserRoleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifyIdentityUserRoleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifyIdentityUserRoleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityDeleteBulkNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityDeleteBulkNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUserListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUserListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifyUserNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifyUserNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityImportIdentityGuestPassNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityImportIdentityGuestPassNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityGuestPassListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityGuestPassListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifyGuestPassNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifyGuestPassNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaFiltersItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaFiltersItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaOptionsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaOptionsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaOptionsLocalUserAuditTimeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaOptionsLocalUserAuditTimeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaOptionsGuestPassExpirationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityQueryCriteriaOptionsGuestPassExpirationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySubscriptionPackageListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySubscriptionPackageListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySubscriptionPackageListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySubscriptionPackageListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateSubscriptionPackageNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateSubscriptionPackageNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifySubscriptionPackageNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityModifySubscriptionPackageNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySubscriptionPackageNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySubscriptionPackageNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityAaaServerListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityAaaServerListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityUserRoleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityUserRoleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateIdentityGuestPassNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateIdentityGuestPassNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityPackageListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityPackageListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCountryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCountryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateUserNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCreateUserNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUserConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUserConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUserConfigurationCredentialsGuestPassDtoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUserConfigurationCredentialsGuestPassDtoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDisconnectClientListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDisconnectClientListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDeAuthClientListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDeAuthClientListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDeAuthClientNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDeAuthClientNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDisconnectClientNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientDisconnectClientNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL3AccessControlPolicyArrayNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL3AccessControlPolicyArrayNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL3AccessControlPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL3AccessControlPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileIdListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProfileIdListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateL3AccessControlPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateL3AccessControlPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyL3AccessControlPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyL3AccessControlPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingCreateVlanPoolingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingCreateVlanPoolingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingModifyVlanPoolingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingModifyVlanPoolingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingDeleteBulkVlanPoolingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingDeleteBulkVlanPoolingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingVlanPoolingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingVlanPoolingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingVlanPoolingListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingVlanPoolingListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingVlanPoolingListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanpoolingVlanPoolingListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTicketLoginRequestNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTicketLoginRequestNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTicketLoginResponseNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceTicketLoginResponseNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfilePoolBOListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfilePoolBOListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileBasicBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileBasicBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfilePoolBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfilePoolBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileHostBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileHostBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceApplyToBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceApplyToBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceApplyToBOListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceApplyToBOListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileHostBOListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileHostBOListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileBasicBOListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileBasicBOListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyProfileListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyProfileListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyCreateDomainDevicePolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyCreateDomainDevicePolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyDomainDevicePolicyProfileByQueryCriteriaNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyDomainDevicePolicyProfileByQueryCriteriaNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyDomainDevicePolicyProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyDomainDevicePolicyProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyModifyDomainDevicePolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyModifyDomainDevicePolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterStateNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterStateNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterStateNodeStateListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterStateNodeStateListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterStateManagementServiceStateListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterStateManagementServiceStateListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRtlsProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRtlsProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdateRtlsProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdateRtlsProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRtlsProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRtlsProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGetGeofenceProfileProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGetGeofenceProfileProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGeofenceProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGeofenceProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGetGeofenceProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGetGeofenceProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertAckBulkAlarmsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertAckBulkAlarmsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertClearBulkAlarmsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertClearBulkAlarmsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertSummaryEventSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertSummaryEventSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertSummaryAlarmSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlertSummaryAlarmSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlarmListAlarmQueryResultListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlarmListAlarmQueryResultListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventListEventQueryResultListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventListEventQueryResultListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileUpdateApSnmpAgentProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileUpdateApSnmpAgentProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileCreateApSnmpAgentProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileCreateApSnmpAgentProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateDhcpProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateDhcpProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlL2AccessControlListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlL2AccessControlListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlL2AccessControlNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlL2AccessControlNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlCreateL2AccessControlNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlCreateL2AccessControlNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlModifyL2AccessControlNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlModifyL2AccessControlNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileUpdateNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileUpdateNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileDeleteListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileDeleteListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileGetByIdNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileGetByIdNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileGetByIdResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileGetByIdResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileProfileListResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileProfileListResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileDeleteNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileDeleteNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileCreateNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AccountSecurityProfileCreateNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpProfileSettingBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpProfileSettingBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpProfileSettingBOListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpProfileSettingBOListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationCreateWhiteLabelCustomizationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationCreateWhiteLabelCustomizationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationUpdateWhiteLabelCustomizationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationUpdateWhiteLabelCustomizationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaAuthenticationServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaAuthenticationServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateAuthenticationServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateAuthenticationServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyAuthenticationServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyAuthenticationServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateActiveDirectoryServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateActiveDirectoryServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyActiveDirectoryServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyActiveDirectoryServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaActiveDirectoryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaActiveDirectoryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaLDAPServerListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaLDAPServerListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaLDAPServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaLDAPServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateLDAPServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateLDAPServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyLDAPServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyLDAPServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaHttp2ServerListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaHttp2ServerListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaHttp2ServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaHttp2ServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateHttp2ServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaCreateHttp2ServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyHttp2ServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyHttp2ServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaAuthenticationServerListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaAuthenticationServerListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaActiveDirectoryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaActiveDirectoryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSwitchGroupBindingBindingRecordNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSwitchGroupBindingBindingRecordNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSwitchGroupBindingDataListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSwitchGroupBindingDataListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSwitchGroupBindingCreateRecordNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSwitchGroupBindingCreateRecordNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyCPUserDefinedInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyCPUserDefinedInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyControlPlaneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyControlPlaneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyCPStaticRouteNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyCPStaticRouteNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneInterfaceListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneInterfaceListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStaticRouteListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStaticRouteListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyIpSupportTypeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyIpSupportTypeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemUserDefinedInterfaceListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemUserDefinedInterfaceListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileWithEditInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileWithEditInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeCreateTaskConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeCreateTaskConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeCreateTaskConfigZoneListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeCreateTaskConfigZoneListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeTaskConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeTaskConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeTaskListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeTaskListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeHistoryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeHistoryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DeviceCapacityDevicesSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DeviceCapacityDevicesSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesApRuleConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesApRuleConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesCreateApRuleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesCreateApRuleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesModifyApRuleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesModifyApRuleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesApRuleListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesApRuleListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesApRuleListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesApRuleListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDataPlaneListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDataPlaneListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDataPlaneListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDataPlaneListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDataPlaneConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemDataPlaneConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyDataPlaneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyDataPlaneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyDataPlaneStateNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyDataPlaneStateNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemUpdateDpMeshTunnelSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemUpdateDpMeshTunnelSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemGetDataPlaneMeshTunnelSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemGetDataPlaneMeshTunnelSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpSwitchoverDpNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpSwitchoverDpNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFlexiVpnProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFlexiVpnProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfilePortalDetectionProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfilePortalDetectionProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfileCreatePortalDetectionProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfileCreatePortalDetectionProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfilePortalDetectionProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfilePortalDetectionProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileWithEditInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileWithEditInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCloudOnBoardingSyncResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCloudOnBoardingSyncResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCloudOnBoardingSyncResultFailApsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCloudOnBoardingSyncResultFailApsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCloudOnBoardingSyncResultFailApsApsItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApCloudOnBoardingSyncResultFailApsApsItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaFiltersItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaFiltersItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaExtraFiltersItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaExtraFiltersItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaOptionsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneQueryCriteriaOptionsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDhcpSiteConfigListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDhcpSiteConfigListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateBonjourFencingPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateBonjourFencingPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCreateZoneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCreateZoneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelCommonAttributeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelCommonAttributeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyZoneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyZoneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerCreateWlanSchedulerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerCreateWlanSchedulerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerWlanScheduleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerWlanScheduleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateWebAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateWebAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceWebAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceWebAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalServiceListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalServiceListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalServiceListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalServiceListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspotInternalNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspotInternalNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspotExternalNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspotExternalNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspotSmartClientOnlyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspotSmartClientOnlyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspot20WlanProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspot20WlanProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyHotspot20WlanProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyHotspot20WlanProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspot20VenueProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateHotspot20VenueProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyHotspot20VenueProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyHotspot20VenueProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortModifyEthernetPortProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortModifyEthernetPortProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyBonjourFencingPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyBonjourFencingPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCreateBonjourGatewayPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCreateBonjourGatewayPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyBonjourGatewayPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyBonjourGatewayPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourGatewayPolicyConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourGatewayPolicyConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourGatewayPolicyListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourGatewayPolicyListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyClientIsolationWhitelistNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyClientIsolationWhitelistNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateGuestAccessNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateGuestAccessNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceGuestAccessNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceGuestAccessNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyGuestAccessNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyGuestAccessNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceHotspot20WlanProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceHotspot20WlanProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceHotspot20VeuneProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceHotspot20VeuneProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateL2ACLNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateL2ACLNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyL2ACLNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyL2ACLNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceWechatConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceWechatConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateWechatNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceCreateWechatNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyWechatNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyWechatNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModfiyApFirmwareNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModfiyApFirmwareNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyPorfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyPorfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyPorfileListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyPorfileListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyCreateDevicePolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyCreateDevicePolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCreateDiffServProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCreateDiffServProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyDiffServProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyDiffServProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDiffServConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDiffServConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateClientIsolationWhitelistNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateClientIsolationWhitelistNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneAvailableTunnelProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneAvailableTunnelProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortCreateEthernetPortProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortCreateEthernetPortProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceL2ACLNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceL2ACLNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDiffServListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDiffServListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApFirmwareListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApFirmwareListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortEthernetPortProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortEthernetPortProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyDevicePolicyPorfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyDevicePolicyPorfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneMeshConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneMeshConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceHotspotNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceHotspotNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerWlanScheduleListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerWlanScheduleListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortProfileListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EthernetPortProfileListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyBonjourGatewayEnableNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneModifyBonjourGatewayEnableNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyHotspotNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyHotspotNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerModifyWlanSchedulerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanschedulerModifyWlanSchedulerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyWebAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceModifyWebAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyModifyDevicePolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyModifyDevicePolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneZoneListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneZoneListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileClientIsolationWhitelistNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileClientIsolationWhitelistNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneZoneConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneZoneConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyClusterRedundancySettingsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyClusterRedundancySettingsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyUpdateClusterRedundancyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyUpdateClusterRedundancyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndooMapAuditIdNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndooMapAuditIdNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SessionManagementRuckusSessionsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SessionManagementRuckusSessionsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfilePrecedenceListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfilePrecedenceListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfilePrecedenceListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfilePrecedenceListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreatePrecedenceProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreatePrecedenceProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdatePrecedenceProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdatePrecedenceProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkPrecedenceProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDeleteBulkPrecedenceProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoMeshNodeInfoListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoMeshNodeInfoListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoUpdateAPZeroTouchNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoUpdateAPZeroTouchNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNeighborInfoMeshNeighborInfoListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNeighborInfoMeshNeighborInfoListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelCreateSplitTunnelProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelCreateSplitTunnelProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelModifySplitTunnelProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelModifySplitTunnelProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileQueryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileQueryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRogueApPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRogueApPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRogueApPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRogueApPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRogueApPolicyListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRogueApPolicyListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdateRogueApPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUpdateRogueApPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueclientRogueInfoListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueclientRogueInfoListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRestrictedApAccessProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateRestrictedApAccessProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRestrictedApAccessProfileArrayNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRestrictedApAccessProfileArrayNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyRestrictedApAccessProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyRestrictedApAccessProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRestrictedApAccessProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRestrictedApAccessProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileCreateMduSegmentationProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileCreateMduSegmentationProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileUpdateMduSegmentationProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileUpdateMduSegmentationProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryReviewDataNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryReviewDataNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileQueryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduSegmentationProfileQueryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileProfileContentListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileProfileContentListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileEthernetPortProfileConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileEthernetPortProfileConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileEthernetPortProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileEthernetPortProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationCreateAdminAAAServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationCreateAdminAAAServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRetrieveAdminAAAServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRetrieveAdminAAAServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRetrieveAdminAAAServerListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRetrieveAdminAAAServerListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRetrieveAdminAAAServerListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRetrieveAdminAAAServerListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyAdminAAAServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyAdminAAAServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyAutoExportBackupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyAutoExportBackupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationAutoExportBackupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationAutoExportBackupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyScheduleBackupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyScheduleBackupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationScheduleBackupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationScheduleBackupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApplicationLogAndStatusListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApplicationLogAndStatusListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyLogLevelNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModifyLogLevelNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradeStatusNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradeStatusNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchStatusNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchStatusNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchHistoryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchHistoryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModfiyLicenseServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationModfiyLicenseServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradePatchInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradePatchInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationClusterBackupListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationClusterBackupListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSummaryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSummaryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSyncLogsListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSyncLogsListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicenseServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicenseServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationConfigurationBackupListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationConfigurationBackupListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradeHistoryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradeHistoryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRestoreConfigurationBackupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRestoreConfigurationBackupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcUserDefinedProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcUserDefinedProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcDeleteBulkNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcDeleteBulkNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcCreateApplicationPolicyProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcCreateApplicationPolicyProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationPolicyProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationPolicyProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcModifyApplicationPolicyProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcModifyApplicationPolicyProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcSignaturePackageNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcSignaturePackageNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcLatestInstallableSignaturePackageNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcLatestInstallableSignaturePackageNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcCreateUserDefinedProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcCreateUserDefinedProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcModifyUserDefinedProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcModifyUserDefinedProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcAppCategoryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcAppCategoryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcAppCategoryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcAppCategoryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcDownloadLatestInstallableSignaturePackageNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcDownloadLatestInstallableSignaturePackageNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcPatchSignaturePackageNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcPatchSignaturePackageNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciModifyEventCodeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciModifyEventCodeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciModifySciProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciModifySciProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciEventCodeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciEventCodeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciEventCodeListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciEventCodeListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciDeleteSciProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciDeleteSciProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciCreateSciProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciCreateSciProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciModifySciEnabledNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciModifySciEnabledNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciProfileListExtraNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciSciProfileListExtraNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainCreateDomainNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainCreateDomainNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainModifyDomainNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainModifyDomainNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDomainListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDomainListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDomainConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDomainConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDeleteDPSKsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDeleteDPSKsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDeleteDpskResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDeleteDpskResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskEnabledWlansNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskEnabledWlansNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskEnabledWlansListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskEnabledWlansListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskModifyDeleteExpiredDpskNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskModifyDeleteExpiredDpskNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskBatchGenUnboundNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskBatchGenUnboundNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskUpdateDpskNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskUpdateDpskNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskInfoListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskGetDpskInfoListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDeleteExpiredDpskConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDeleteExpiredDpskConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileQueryCriteriaNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileQueryCriteriaNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileQueryCriteriaOptionsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileQueryCriteriaOptionsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileArrayNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFirewallProfileArrayNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateFirewallProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCreateFirewallProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyFirewallProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyFirewallProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileGetDnsSpoofingProfileListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileGetDnsSpoofingProfileListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingProfileDetailNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingProfileDetailNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ToolSpeedFlexNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ToolSpeedFlexNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ToolTestResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ToolTestResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdAPListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdAPListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdImportStatusNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdImportStatusNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationConnectZDNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationConnectZDNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdImportNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdImportNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSwapApConfigureNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSwapApConfigureNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApMacOUIListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApMacOUIListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCsrListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCsrListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCsrListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCsrListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificatesSigningRequestNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificatesSigningRequestNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogPrimaryServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogPrimaryServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogSecondaryServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogSecondaryServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateTrustedCAChainCertListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateTrustedCAChainCertListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateTrustedCAChainCertListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateTrustedCAChainCertListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateTrustedCAChainNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateTrustedCAChainNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateTrustedCAChainNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateTrustedCAChainNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateDeleteBulkNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateDeleteBulkNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateModifyTrustedCAChainNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateModifyTrustedCAChainNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSystemTimeSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSystemTimeSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogSyslogServerSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogSyslogServerSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogModifySyslogSettingsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogModifySyslogSettingsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogPriorityNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SyslogPriorityNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateCertNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateCertNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateCSRNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateCSRNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifySnmpAgentNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifySnmpAgentNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemNorthboundInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemNorthboundInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaMacListRspNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaMacListRspNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaMacListRqNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaMacListRqNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaCommonSettingRqNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaCommonSettingRqNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemGatewayAdvancedNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemGatewayAdvancedNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControllerListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControllerListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControllerListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControllerListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemInventoryListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemInventoryListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemInventoryListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemInventoryListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSecuritySettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSecuritySettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCloudOptionsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCloudOptionsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSystemSettingsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSystemSettingsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCreateApMacOUINormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCreateApMacOUINormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemUpdateApMacOUINormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemUpdateApMacOUINormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemCpuNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemCpuNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemDiskNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemDiskNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemMemoryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStatisticListItemMemoryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSnmpAgentConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSnmpAgentConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateClientCertNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCreateClientCertNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaTestAuthenticationServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaTestAuthenticationServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaTestAAAServerSingleResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaTestAAAServerSingleResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApRoutineConfigIntervalApRoutineConfigIntervalReqNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApRoutineConfigIntervalApRoutineConfigIntervalReqNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaCommonSettingRspNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CaleaCaleaCommonSettingRspNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateClientCertListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateClientCertListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateClientCertListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateClientCertListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateClientCertNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateClientCertNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyGatewayAdvancedNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyGatewayAdvancedNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemLwapp2scgConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemLwapp2scgConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyLwapp2scgNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifyLwapp2scgNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifySystemTimeSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemModifySystemTimeSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApRoutineStatusIntervalApRoutineStatusIntervalRspNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApRoutineStatusIntervalApRoutineStatusIntervalRspNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApRoutineConfigIntervalApRoutineConfigIntervalRspNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApRoutineConfigIntervalApRoutineConfigIntervalRspNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCommonAccessCardSettingsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCommonAccessCardSettingsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificateNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificateNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificateListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificateListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificateListListItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateCertificateListListItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIPsecGetResultNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIPsecGetResultNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIPsecUpdateNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIPsecUpdateNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileVlanPrecedenceItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileVlanPrecedenceItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapScaleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapScaleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAccountingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAccountingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePublicSubnetIdBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePublicSubnetIdBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRealmAuthServiceMappingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRealmAuthServiceMappingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcLatestInstallableSignaturePackageBinaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcLatestInstallableSignaturePackageBinaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingRuleDeviceMacNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingRuleDeviceMacNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryCreateWlanQueryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryCreateWlanQueryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileSiteSecondaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileSiteSecondaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gZoneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gZoneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileVendorSpecificAttributeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VendorSpecificAttributeProfileVendorSpecificAttributeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryWlanBssidNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryWlanBssidNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMeshNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApMeshNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\FlexiVpnFlexiVpnSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\FlexiVpnFlexiVpnSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationSecondaryRadiusServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationSecondaryRadiusServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryApWlanBssidNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanQueryApWlanBssidNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpCommunityNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpCommunityNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIPsecProposalNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIPsecProposalNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupRoleLabelValueNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupRoleLabelValueNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApplicationLogAndStatusNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApplicationLogAndStatusNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeBladeProgressNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeBladeProgressNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApNumberLimitSettingOfDomainNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApNumberLimitSettingOfDomainNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueInfoRogueInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueInfoRogueInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gApGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gApGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingServiceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingServiceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigResponseApNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigResponseApNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDownlinkRateLimitingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDownlinkRateLimitingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLldpSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLldpSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGeofenceProfileLocationDataNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GeofenceProfileGeofenceProfileLocationDataNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyManagementEntryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyManagementEntryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapApNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapApNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderEAPAuthSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderEAPAuthSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileEspSecurityAssociationContentNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileEspSecurityAssociationContentNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUsernamePasswordCredentialsImplDtoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityUsernamePasswordCredentialsImplDtoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciDeleteSciProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SciDeleteSciProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradeHistorySummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationUpgradeHistorySummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceUserSessionNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceUserSessionNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileEspProposalNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileEspProposalNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceConnectionCapabilityNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceConnectionCapabilityNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanEncryptionNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanEncryptionNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigZoneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigZoneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gResponseApNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gResponseApNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPortSupplicantNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPortSupplicantNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderAccountingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderAccountingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRbacMetadataNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRbacMetadataNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRbacMetadataRbacMetadataItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRbacMetadataRbacMetadataItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySessionDurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentitySessionDurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL3AclRuleListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileL3AclRuleListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientHistoricalClientNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientHistoricalClientNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPortalLangNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPortalLangNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDoAssignIpNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDoAssignIpNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDoAssignIpSiteApsItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDoAssignIpSiteApsItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileClientIsolationEntryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileClientIsolationEntryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelIpMaskRuleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SplitTunnelSplitTunnelIpMaskRuleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTrafficClassProfileRefNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTrafficClassProfileRefNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfilePortalDetectionPatternNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalDetectionProfilePortalDetectionPatternNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApNumberLimitSettingOfZoneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApNumberLimitSettingOfZoneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneTimezoneSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneTimezoneSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationActiveDirectoryServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationActiveDirectoryServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemAuthenticationKeyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemAuthenticationKeyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAuthenticationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAuthenticationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDataPlaneL3RoamingDataNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDataPlaneL3RoamingDataNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityAaaServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityAaaServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStaticRouteNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemStaticRouteNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4ControlInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4ControlInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameProfileSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20AdviceOfChargeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20AdviceOfChargeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20AdviceOfChargeNaiRealmNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20AdviceOfChargeNaiRealmNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20AdviceOfChargePlanInformationsItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20AdviceOfChargePlanInformationsItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gApGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gApGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gApNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gApNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonMyRuckusConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonMyRuckusConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanDSCPSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanDSCPSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBandBalancingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBandBalancingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyGroupAttrIdentityUserRoleMappingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyGroupAttrIdentityUserRoleMappingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaModifyGroupAttrIdentityUserRoleMappingUserRoleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSummaryCapacityControlLicenseCountNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSummaryCapacityControlLicenseCountNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SessionManagementRuckusSessionNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SessionManagementRuckusSessionNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationDefaultRoleMappingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationDefaultRoleMappingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchHistoryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationApPatchHistoryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAdvancedNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAdvancedNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAdvancedUserRoleAccessNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanAdvancedUserRoleAccessNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationRuleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcApplicationRuleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRadiusServerWhenTlsEnabledNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRadiusServerWhenTlsEnabledNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileDistributionSwitchObjNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileDistributionSwitchObjNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6AccessAndCoreSeparationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6AccessAndCoreSeparationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionInstanceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionInstanceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanScheduleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanScheduleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLacpSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLacpSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelExternalAntennaNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelExternalAntennaNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonOverrideSmartMonitorNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonOverrideSmartMonitorNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityMaxDevicesNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityMaxDevicesNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationBackupFileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationBackupFileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemReservedPortNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemReservedPortNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanMACAuthNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanMACAuthNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityAuthenticationServerConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityAuthenticationServerConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapBasicIndoorMapNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapBasicIndoorMapNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApFirmwareNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApFirmwareNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigApGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigApGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaExtraNotFiltersItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaExtraNotFiltersItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockedPortNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBlockedPortNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryCreateApQueryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryCreateApQueryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryCreateApQueryIndoorMapXyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryCreateApQueryIndoorMapXyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryCreateApQueryCellularGpsHistoryItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApQueryCreateApQueryCellularGpsHistoryItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFriendlyNameLangNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemFriendlyNameLangNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIkeSecurityAssociationContentNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIkeSecurityAssociationContentNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderEAPMethodNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderEAPMethodNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyIpAclRulesNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileModifyIpAclRulesNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20OperatorIconNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20OperatorIconNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonOverrideClientAdmissionControlNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonOverrideClientAdmissionControlNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCountrySummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityCountrySummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourPolicyRuleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourPolicyRuleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingProfileSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingProfileSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaOptionsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaOptionsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlarmListSingleAlarmNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AlarmListSingleAlarmNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemControlPlaneInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityPackageConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityPackageConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCpStaticRouteNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCpStaticRouteNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPort8021XNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPort8021XNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApAlarmSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApAlarmSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueclientRogueInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RogueclientRogueInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonAltitudeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonAltitudeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20TermsConditionsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20TermsConditionsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigResponseNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigResponseNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoMeshNodeInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoMeshNodeInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTrafficClassRefNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTrafficClassRefNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCmProtocolOptionContentNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCmProtocolOptionContentNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingRuleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingRuleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gApGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gApGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduProfileApGroupInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduProfileApGroupInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRadiusServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRadiusServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalRedirectNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalRedirectNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderSubscriptionDescriptionNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderSubscriptionDescriptionNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAcctServiceRealmMappingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAcctServiceRealmMappingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSoftGreRefNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSoftGreRefNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTimeRangeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTimeRangeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6SecondaryInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6SecondaryInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlRuleObjectNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlRuleObjectNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQinqNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQinqNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPortSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPortSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRateLimitingPrecedenceItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRateLimitingPrecedenceItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigRefNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigRefNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigRefSiteApsItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigRefSiteApsItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPrimaryInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPrimaryInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionWithoutDetailItemsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionWithoutDetailItemsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingRuleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DnsSpoofingProfileDnsSpoofingRuleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApInfoApInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApInfoApInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceSecondaryRadiusServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceSecondaryRadiusServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneLoadBalancingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneLoadBalancingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanCoreTunnelNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanCoreTunnelNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelCellularSettingsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelCellularSettingsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonBaseServiceInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonBaseServiceInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceDnatPortMappingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceDnatPortMappingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4ManagementInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4ManagementInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAccountingServiceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceCommonAccountingServiceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileUpLinkObjNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileUpLinkObjNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCoreNetworkGatewayNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileCoreNetworkGatewayNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4AccessAndCoreSeparationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4AccessAndCoreSeparationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringBlockCategoryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\UrlFilteringUrlFilteringBlockCategoryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduProfileDpInfoSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduProfileDpInfoSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityGuestPassConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityGuestPassConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDiffServSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDiffServSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderPLMNNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderPLMNNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApmodelLanPortSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApmodelLanPortSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonCreateResultIdNameNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonCreateResultIdNameNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSyslogNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSyslogNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCpUserDefinedInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemCpUserDefinedInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRateLimitingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRateLimitingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneUplinkDiffServNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneUplinkDiffServNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeUploadPatchInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeUploadPatchInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanDpskSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanDpskSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientQueryTcWithQuotaNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientQueryTcWithQuotaNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonOverrideGenericRefNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonOverrideGenericRefNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSmartMonitorNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSmartMonitorNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityTimeScheduleListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityTimeScheduleListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigApNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadioConfigApNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApSnmpOptionsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApSnmpOptionsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoHelperZoneInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNodeInfoHelperZoneInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneZoneSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneZoneSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementEventDataListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementEventDataListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDhcpRelayNoRelayTunnelNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDhcpRelayNoRelayTunnelNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6PrimaryInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6PrimaryInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientQueryCreateClientQueryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClientQueryCreateClientQueryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonGenericRefNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonGenericRefNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyDevicePolicyRuleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DevicePolicyDevicePolicyRuleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcSignaturePackageBinaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcSignaturePackageBinaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioBackgroundScanningNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioBackgroundScanningNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventListSingleEventNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventListSingleEventNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonApRebootTimeoutNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonApRebootTimeoutNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gApNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gApNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNetworkIpv6Normalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNetworkIpv6Normalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPortAuthenticatorNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelLanPortAuthenticatorNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanFastInitialLinkSetupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanFastInitialLinkSetupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateServiceCertificateNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CertificateServiceCertificateNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gZoneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gZoneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlEtherTypeObjectNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlEtherTypeObjectNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingRuleMappingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileBonjourFencingRuleMappingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeHistoryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeHistoryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RacStatsRadiusProxyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RacStatsRadiusProxyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderHomeOIsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderHomeOIsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRadiusServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationRadiusServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApMacOUINormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemApMacOUINormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSnmpUserNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSnmpUserNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupMemberNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupMemberNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesSubnetNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesSubnetNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonFullTextSearchNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonFullTextSearchNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20FriendlyNameNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileHs20FriendlyNameNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioAutoChannelSelectionNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioAutoChannelSelectionNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApLoginNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneApLoginNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourGatewayPolicySummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourGatewayPolicySummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelAuthenticatorAAAServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApmodelAuthenticatorAAAServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNeighborInfoMeshNeighborInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MeshNeighborInfoMeshNeighborInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationClusterBackupSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationClusterBackupSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourPolicyRuleConfigurationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneBonjourPolicyRuleConfigurationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityUserSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityIdentityUserSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneRogueNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneRogueNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAdvancedOptionContentNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileAdvancedOptionContentNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonLteBandLockChannelNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonLteBandLockChannelNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlUserDefinedEtherTypeObjectNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\L2AccessControlUserDefinedEtherTypeObjectNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduProfileDpInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileMduProfileDpInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceGroupAttrIdentityUserRoleMappingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceGroupAttrIdentityUserRoleMappingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceGroupAttrIdentityUserRoleMappingUserRoleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUplinkRateLimitingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileUplinkRateLimitingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRogueApRuleListNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileRogueApRuleListNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderExternalOSUNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderExternalOSUNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileAccessSwitchObjNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileAccessSwitchObjNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFlexiVpnProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileFlexiVpnProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalLocationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalservicePortalLocationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyGroupAttrIdentityUserRoleMappingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyGroupAttrIdentityUserRoleMappingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ServiceModifyGroupAttrIdentityUserRoleMappingUserRoleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanExternalDpskNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanExternalDpskNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanExternalDpskEncryptionNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanExternalDpskEncryptionNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanExternalDpskAuthServiceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskWlanExternalDpskAuthServiceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileSwitchGroupsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileSwitchGroupsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingEpdgNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WifiCallingEpdgNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDownlinkDiffServNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDownlinkDiffServNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gResponseNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio5gResponseNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationTacacsServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationTacacsServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityPassValidForNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IdentityPassValidForNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\BondPortBondPortProfileSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonApLatencyIntervalNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonApLatencyIntervalNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6ControlInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6ControlInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDpskInfoItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpskDpskInfoItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6ManagementInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv6ManagementInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApLoginNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApLoginNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterOperationProgressNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterOperationProgressNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneRecoverySsidSetNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneRecoverySsidSetNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSshPublicKeyRefNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSshPublicKeyRefNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileWhitelistedDomainNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileWhitelistedDomainNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNetworkNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApNetworkNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4ClusterInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemIpv4ClusterInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceVenueNameNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceVenueNameNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileTargetConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileTargetConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePrivateQinqVlanRangeBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpNatProfilePrivateQinqVlanRangeBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdAPNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationZdAPNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceDefaultConnectionCapabilityNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\PortalserviceDefaultConnectionCapabilityNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSnmpCommunityNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonSnmpCommunityNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonHealthCheckPolicyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonHealthCheckPolicyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPortStatisticNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemPortStatisticNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gApNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gApNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigListRefNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigListRefNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigListRefSiteApsItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpSiteConfigListRefSiteApsItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyActiveClusterNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterRedundancyActiveClusterNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonPortalCustomizationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonPortalCustomizationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesGpsCoordinatesNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesGpsCoordinatesNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanRadiusNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanRadiusNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSecondaryInterfaceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SystemSecondaryInterfaceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderRealmNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderRealmNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSyncLogsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLicensesSyncLogsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonWebAuthenticationPortalCustomizationNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonWebAuthenticationPortalCustomizationNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDaylightSavingTimeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneDaylightSavingTimeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gResponseNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio24gResponseNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpProfileRefNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonDhcpProfileRefNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaSortInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaSortInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCustomizedTimeZoneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneCustomizedTimeZoneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupResourceGroupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupResourceGroupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyDomainDevicePolicyRuleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DomainDevicePolicyDomainDevicePolicyRuleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladePreviousOperationRecordNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladePreviousOperationRecordNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterUpgradeProgressNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ClusterbladeClusterUpgradeProgressNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApgroupApGroupSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcCheckLatestInstallableSignaturePackageSettingsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AvcCheckLatestInstallableSignaturePackageSettingsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaGroupAttrIdentityUserRoleMappingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaGroupAttrIdentityUserRoleMappingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaGroupAttrIdentityUserRoleMappingUserRoleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionItemsItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ScguserScgUserGroupPermissionItemsItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesIpAddressRangeNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AprulesIpAddressRangeNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gZoneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gZoneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLdapServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AdministrationLdapServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaExtraFiltersItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaExtraFiltersItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneAvailableTunnelProfileNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneAvailableTunnelProfileNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileTtgCommonSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileTtgCommonSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementSingleEventSettingNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\EventManagementSingleEventSettingNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIkeProposalNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIkeProposalNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameRuleNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\VlanNameProfileVlanNameRuleNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gResponseNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\RadioRadio6gResponseNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileQinqVlanRangeBONormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileQinqVlanRangeBONormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRecoverySsidNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonRecoverySsidNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaServerQueryCreateAaaServerNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\AaaServerQueryCreateAaaServerNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIpAclRulesNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileIpAclRulesNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaFiltersItemNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonQueryCriteriaFiltersItemNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceInstanceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DpProfileDpDhcpProfileOptionSpaceInstanceNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WiredClientQueryCreateClientQueryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WiredClientQueryCreateClientQueryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSyslogNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeZoneNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneScheduleUpgradeZoneNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationSummaryNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationSummaryNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderOnlineSignupNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileProviderOnlineSignupNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonApManagementVlanNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonApManagementVlanNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapXyNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\IndoorMapIndoorMapXyNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileRateLimitPortsNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\MduSegmentationProfileRateLimitPortsNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpClientInfoNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\DhcppoolsDhcpClientInfoNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTargetConfigNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonTargetConfigNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GdprFtpNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\GdprFtpNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpUserNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ApSnmpAgentProfileApSnmpUserNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonClientAdmissionControlNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\CommonClientAdmissionControlNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanVlanNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\WlanWlanVlanNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSnmpUserNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneSnmpUserNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneUnsupportedApModelNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ZoneUnsupportedApModelNormalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDhcpOption82Normalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer\ProfileDhcpOption82Normalizer(),
            \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ReferenceNormalizer::class => new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ReferenceNormalizer(),
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