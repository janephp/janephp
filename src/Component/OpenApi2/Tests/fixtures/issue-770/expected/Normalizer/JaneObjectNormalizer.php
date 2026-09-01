<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserAuditId::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserAuditIdNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserGetScgUser::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserGetScgUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserModifyScgUser::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserModifyScgUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserCreateScgUser::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserCreateScgUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserQueryCriteriaFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserQueryCriteriaFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringPolicyList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UrlFilteringUrlFilteringPolicyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UrlFilteringUrlFilteringPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringPolicyBlockByThreatLevelConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UrlFilteringUrlFilteringPolicyBlockByThreatLevelConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UrlFilteringDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringCreateUrlFilteringPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UrlFilteringCreateUrlFilteringPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringCreateUrlFilteringPolicyBlockByThreatLevelConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UrlFilteringCreateUrlFilteringPolicyBlockByThreatLevelConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringModifyUrlFilteringPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UrlFilteringModifyUrlFilteringPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringModifyUrlFilteringPolicyBlockByThreatLevelConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UrlFilteringModifyUrlFilteringPolicyBlockByThreatLevelConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringBlockCategoriesList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UrlFilteringUrlFilteringBlockCategoriesListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureRes::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApPacketCaptureApPacketCaptureResNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApPacketCaptureApPacketCaptureReq::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApPacketCaptureApPacketCaptureReqNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplicationPolicyProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcApplicationPolicyProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RogueInfoRogueInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RogueInfoRogueInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClientHistoricalClientList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClientHistoricalClientListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaServerQueryAaaServerQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaServerQueryAaaServerQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcUserDefinedProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcUserDefinedProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDhcpProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskDpskQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskQueryListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskDpskQueryListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileTrafficClassProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileTrafficClassProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WiredClientQueryClientQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WiredClientQueryClientQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapIndoorMapSummaryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IndoorMapIndoorMapSummaryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileClientIsolationWhitelistArray::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileClientIsolationWhitelistArrayNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingPolicyList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBonjourFencingPolicyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanQueryWlanQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanQueryWlanQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApQueryQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryQueryCriteriaFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApQueryQueryCriteriaFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryQueryCriteriaExtraFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApQueryQueryCriteriaExtraFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryQueryCriteriaExtraNotFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApQueryQueryCriteriaExtraNotFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryQueryCriteriaOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApQueryQueryCriteriaOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryApQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApQueryApQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanQueryApWlanBssidQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanQueryApWlanBssidQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RacStatsRadiusProxyList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RacStatsRadiusProxyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClientQueryClientQueryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClientQueryClientQueryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApModifyRogueType::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApModifyRogueTypeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemFtpGlobalSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemFtpGlobalSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemNtpServerValidation::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemNtpServerValidationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemNtpServerValidationMessage::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemNtpServerValidationMessageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemFriendlyNameLangList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemFriendlyNameLangListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortalLangList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemPortalLangListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlangroupCreateWlanGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlangroupCreateWlanGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlangroupModifyWlanGroupMember::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlangroupModifyWlanGroupMemberNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateStandardOpenWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanCreateStandardOpenWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateStandard80211Wlan::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanCreateStandard80211WlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateHotspotWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanCreateHotspotWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateWechatWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanCreateWechatWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateGuestAccessWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanCreateGuestAccessWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateWebAuthWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanCreateWebAuthWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateHotspot20Wlan::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanCreateHotspot20WlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateHotspot20OpenWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanCreateHotspot20OpenWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanModifyWlan::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanModifyWlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlangroupWlanGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlangroupWlanGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlangroupWlanMember::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlangroupWlanMemberNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlangroupModifyWlanGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlangroupModifyWlanGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlangroupWlanGroupList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlangroupWlanGroupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDeleteBulkFtp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemDeleteBulkFtpNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemFtpTestResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemFtpTestResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemFtp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemFtpNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemFtpList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemFtpListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateTrafficClassProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateTrafficClassProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBlockClient::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBlockClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyBlockClient::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyBlockClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBlockClientList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBlockClientListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBlockClientListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBlockClientListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBulkBlockClient::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBulkBlockClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBulkBlockClientBlockClientListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBulkBlockClientBlockClientListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupRoleLabelValueList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserGroupRoleLabelValueListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermissionList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserGroupPermissionListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermissionListExtra::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserGroupPermissionListExtraNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserPatchScgUserGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserPatchScgUserGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupAuditId::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserGroupAuditIdNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserGroupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileApSyslogServerProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSyslogServerProfileApSyslogServerProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileApSyslogServerProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSyslogServerProfileApSyslogServerProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonBulkDeleteRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonBulkDeleteRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileApSyslogServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSyslogServerProfileApSyslogServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileUpdateApSyslogServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSyslogServerProfileUpdateApSyslogServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonEmptyResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonEmptyResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslogServerProfileCreateApSyslogServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSyslogServerProfileCreateApSyslogServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonCreateResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonCreateResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCommonAuthenticationServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceCommonAuthenticationServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceDeleteBulkAuthenticationService::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceDeleteBulkAuthenticationServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceModifyLocalDbAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceModifyLocalDbAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceRadiusAuthenticationServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceRadiusAuthenticationServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCreateRadiusAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceCreateRadiusAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceModifyRadiusAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceModifyRadiusAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceActiveDirectoryServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceActiveDirectoryServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCreateActiveDirectoryAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceCreateActiveDirectoryAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceModifyActiveDirectoryAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceModifyActiveDirectoryAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceLDAPServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceLDAPServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceLDAPService::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceLDAPServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceTestingConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceTestingConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceTestingConfigLoginRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceTestingConfigLoginRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceRadiusAccountingServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceRadiusAccountingServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceRadiusAccountingService::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceRadiusAccountingServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCreateRadiusAccounting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceCreateRadiusAccountingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceModifyRadiusAccounting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceModifyRadiusAccountingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceModifyEntireRadiusAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceModifyEntireRadiusAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceActiveDirectoryService::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceActiveDirectoryServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCreateLDAPAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceCreateLDAPAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceModifyLDAPAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceModifyLDAPAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCommonAccountingServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceCommonAccountingServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceDeleteBulkAccountingService::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceDeleteBulkAccountingServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceModifyEntireRadiusAccounting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceModifyEntireRadiusAccountingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCommonAuthenticationService::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceCommonAuthenticationServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceRadiusAuthenticationService::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceRadiusAuthenticationServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaSuperSet::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonQueryCriteriaSuperSetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\BondPortBondPortProfileQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\BondPortBondPortProfileQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\BondPortBondPortProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\BondPortBondPortProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\BondPortBondPortProfileWithEditInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\BondPortBondPortProfileWithEditInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\BondPortCreateBondPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\BondPortCreateBondPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\BondPortModifyBondPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\BondPortModifyBondPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApApOperationalSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApApOperationalSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApApLinemanSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApApLinemanSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApApLinemanSummaryListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApApLinemanSummaryListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSwitchoverAP::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSwitchoverAPNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelApModel::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApmodelApModelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApApConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApApConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingStatistic::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBonjourFencingStatisticNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApNeighborAPList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApNeighborAPListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApNeighborAPListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApNeighborAPListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApModifyAP::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApModifyAPNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApApListEntry::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApApListEntryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApApListEntryListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApApListEntryListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApCreateAP::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApCreateAPNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApMultipleMoveApMultipleMoveRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApMultipleMoveApMultipleMoveRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApMultipleMoveApMultipleMoveResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApMultipleMoveApMultipleMoveResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApMultipleMoveApMultipleMoveResponseFailAps::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApMultipleMoveApMultipleMoveResponseFailApsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApMultipleMoveApMultipleMoveResponseFailApsApsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApMultipleMoveApMultipleMoveResponseFailApsApsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfilePoolBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpNatProfilePoolBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfileBasicBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpNatProfileBasicBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfileBasicBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpNatProfileBasicBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileBulkDelete::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileBulkDeleteNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfilePoolBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpNatProfilePoolBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MulticastForwardingSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MulticastForwardingSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EventManagementEventEmailSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EventManagementEventEmailSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EventManagementEventDataResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EventManagementEventDataResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\GdprReport::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\GdprReportNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSmsList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemSmsListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSms::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemSmsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20OperatorList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileHs20OperatorListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20Operator::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileHs20OperatorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyHS20Operator::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyHS20OperatorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20ProviderList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileHs20ProviderListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20Provider::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileHs20ProviderNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpsecProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileIpsecProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateIpsecProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateIpsecProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyIpsecProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyIpsecProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProfileClone::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProfileCloneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileVdpProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileVdpProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDnsServerProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDnsServerProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateDnsServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateDnsServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyDnsServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyDnsServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUserTrafficProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileUserTrafficProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDeleteBulkUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDeleteBulkUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileAuthenticationProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileAuthenticationProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateAuthenticationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateAuthenticationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyAuthenticationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyAuthenticationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDeleteBulkAuthenticationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDeleteBulkAuthenticationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileQueryCriteriaWithProfileId::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileQueryCriteriaWithProfileIdNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileQueryCriteriaWithProfileIdExtraFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileQueryCriteriaWithProfileIdExtraFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileAccountingProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileAccountingProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDeleteBulkAccountingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDeleteBulkAccountingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUpdateL3RoamingConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileUpdateL3RoamingConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBridgeProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBridgeProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyBridgeProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyBridgeProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileLbsProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileLbsProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileLbsProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileLbsProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyDPGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyDPGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDpGroupList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDpGroupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileReturnDPGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileReturnDPGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileReturnDPGroupDpGroupListWithPriorityItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileReturnDPGroupDpGroupListWithPriorityItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateAccountingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateAccountingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyAccountingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyAccountingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileL2oGREProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileL2oGREProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileL2oGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileL2oGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateL2oGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateL2oGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyL2oGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyL2oGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRuckusGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateRuckusGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyRuckusGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyRuckusGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRuckusGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileRuckusGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRuckusGREProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileRuckusGREProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateSoftGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateSoftGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifySoftGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifySoftGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileSoftGREProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileSoftGREProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileSoftGREProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileSoftGREProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileGetL3RoamingConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileGetL3RoamingConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBaseServiceInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBaseServiceInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBridgeProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBridgeProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateDPGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateDPGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileAuthenticationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileAuthenticationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileAccountingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileAccountingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDnsServerProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDnsServerProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpsecProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileIpsecProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateBridgeProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateBridgeProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VendorSpecificAttributeProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VendorSpecificAttributeProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileGet::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VendorSpecificAttributeProfileGetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfilePersist::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VendorSpecificAttributeProfilePersistNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileCreateResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VendorSpecificAttributeProfileCreateResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileEmptyResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VendorSpecificAttributeProfileEmptyResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VendorSpecificAttributeProfileDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileQueryCriteriaResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VendorSpecificAttributeProfileQueryCriteriaResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingCreateNorthboundDataStreamingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\NorthboundDataStreamingCreateNorthboundDataStreamingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingModifyNorthboundDataStreamingEventCodes::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\NorthboundDataStreamingModifyNorthboundDataStreamingEventCodesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\NorthboundDataStreamingNorthboundDataStreamingSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingEventCodes::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\NorthboundDataStreamingNorthboundDataStreamingEventCodesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingEventCodesListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\NorthboundDataStreamingNorthboundDataStreamingEventCodesListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingModifyNorthboundDataStreamingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\NorthboundDataStreamingModifyNorthboundDataStreamingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingProfileListExtra::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\NorthboundDataStreamingNorthboundDataStreamingProfileListExtraNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WifiCallingDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WifiCallingDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WifiCallingWifiCallingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WifiCallingWifiCallingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WifiCallingCreateWifiCallingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WifiCallingCreateWifiCallingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WifiCallingModifyWifiCallingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WifiCallingModifyWifiCallingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WifiCallingWifiCallingPolicyList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WifiCallingWifiCallingPolicyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpPools::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DhcppoolsDhcpPoolsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpPoolInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DhcppoolsDhcpPoolInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpPoolInfoClientInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DhcppoolsDhcpPoolInfoClientInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStats::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DhcpMsgStatsDhcpMsgStatsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStats::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DhcpMsgStatsDhcpMsgStatsDhcpMsgRecvdStatsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStats::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DhcpMsgStatsDhcpMsgStatsDhcpMsgSentStatsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApmodelApModel::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneApmodelApModelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupModifyAPGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApgroupModifyAPGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupAddMembers::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApgroupAddMembersNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupApGroupConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApgroupApGroupConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupApGroupList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApgroupApGroupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupCreateAPGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApgroupCreateAPGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityCreateIdentityUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityCreateIdentityUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityModifyIdentityUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityModifyIdentityUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityIdentityListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityIdentityListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityUserListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityModifyUser::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityModifyUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityImportIdentityGuestPass::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityImportIdentityGuestPassNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityGuestPassList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityIdentityGuestPassListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityModifyGuestPass::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityModifyGuestPassNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityQueryCriteriaFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityQueryCriteriaOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaOptionsLocalUserAuditTime::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityQueryCriteriaOptionsLocalUserAuditTimeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityQueryCriteriaOptionsGuestPassExpiration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityQueryCriteriaOptionsGuestPassExpirationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentitySubscriptionPackageList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentitySubscriptionPackageListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentitySubscriptionPackageListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentitySubscriptionPackageListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityCreateSubscriptionPackage::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityCreateSubscriptionPackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityModifySubscriptionPackage::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityModifySubscriptionPackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentitySubscriptionPackage::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentitySubscriptionPackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityAaaServerList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityAaaServerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityIdentityUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityCreateIdentityGuestPass::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityCreateIdentityGuestPassNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityPackageList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityPackageListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityCountryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityCountryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityCreateUser::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityCreateUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityUserConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUserConfigurationCredentialsGuestPassDto::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityUserConfigurationCredentialsGuestPassDtoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClientDisconnectClientList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClientDisconnectClientListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClientDeAuthClientList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClientDeAuthClientListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClientDeAuthClient::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClientDeAuthClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClientDisconnectClient::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClientDisconnectClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileL3AccessControlPolicyArray::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileL3AccessControlPolicyArrayNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileL3AccessControlPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileL3AccessControlPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProfileIdList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProfileIdListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateL3AccessControlPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateL3AccessControlPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyL3AccessControlPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyL3AccessControlPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VlanpoolingCreateVlanPooling::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VlanpoolingCreateVlanPoolingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VlanpoolingModifyVlanPooling::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VlanpoolingModifyVlanPoolingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VlanpoolingDeleteBulkVlanPooling::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VlanpoolingDeleteBulkVlanPoolingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VlanpoolingVlanPooling::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VlanpoolingVlanPoolingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VlanpoolingVlanPoolingList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VlanpoolingVlanPoolingListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VlanpoolingVlanPoolingListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VlanpoolingVlanPoolingListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceTicketLoginRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceTicketLoginRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceTicketLoginResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceTicketLoginResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfilePoolBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfilePoolBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileBasicBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfileBasicBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfilePoolBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfilePoolBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileHostBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfileHostBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileOptionSpaceBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfileOptionSpaceBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileOptionSpaceApplyToBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfileOptionSpaceApplyToBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileOptionSpaceApplyToBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfileOptionSpaceApplyToBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileHostBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfileHostBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileBasicBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfileBasicBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDevicePolicyProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DomainDevicePolicyProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDevicePolicyProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DomainDevicePolicyProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDevicePolicyCreateDomainDevicePolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DomainDevicePolicyCreateDomainDevicePolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDevicePolicyDomainDevicePolicyProfileByQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DomainDevicePolicyDomainDevicePolicyProfileByQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDevicePolicyDomainDevicePolicyProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DomainDevicePolicyDomainDevicePolicyProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDevicePolicyModifyDomainDevicePolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DomainDevicePolicyModifyDomainDevicePolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterState::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterbladeClusterStateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterStateNodeStateListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterbladeClusterStateNodeStateListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterStateManagementServiceStateListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterbladeClusterStateManagementServiceStateListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRtlsProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateRtlsProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUpdateRtlsProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileUpdateRtlsProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRtlsProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileRtlsProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\GeofenceProfileGetGeofenceProfileProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\GeofenceProfileGetGeofenceProfileProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\GeofenceProfileGeofenceProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\GeofenceProfileGeofenceProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\GeofenceProfileGetGeofenceProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\GeofenceProfileGetGeofenceProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AlertAckBulkAlarms::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AlertAckBulkAlarmsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AlertClearBulkAlarms::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AlertClearBulkAlarmsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AlertSummaryEventSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AlertSummaryEventSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AlertSummaryAlarmSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AlertSummaryAlarmSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AlarmListAlarmQueryResultList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AlarmListAlarmQueryResultListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EventListEventQueryResultList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EventListEventQueryResultListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileUpdateApSnmpAgentProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSnmpAgentProfileUpdateApSnmpAgentProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileApSnmpAgentProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileApSnmpAgentProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileCreateApSnmpAgentProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSnmpAgentProfileCreateApSnmpAgentProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileApSnmpAgentProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSnmpAgentProfileApSnmpAgentProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateDhcpProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateDhcpProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\L2AccessControlL2AccessControlList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\L2AccessControlL2AccessControlListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\L2AccessControlL2AccessControl::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\L2AccessControlL2AccessControlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\L2AccessControlCreateL2AccessControl::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\L2AccessControlCreateL2AccessControlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\L2AccessControlModifyL2AccessControl::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\L2AccessControlModifyL2AccessControlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileUpdate::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AccountSecurityProfileUpdateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileDeleteList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AccountSecurityProfileDeleteListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileGetById::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AccountSecurityProfileGetByIdNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileGetByIdResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AccountSecurityProfileGetByIdResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileProfileListResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AccountSecurityProfileProfileListResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileDelete::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AccountSecurityProfileDeleteNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileCreate::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AccountSecurityProfileCreateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpProfileSettingBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpProfileSettingBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpProfileSettingBOList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpProfileSettingBOListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WhiteLabelCustomizationWhiteLabelCustomization::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WhiteLabelCustomizationWhiteLabelCustomizationList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WhiteLabelCustomizationCreateWhiteLabelCustomization::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WhiteLabelCustomizationCreateWhiteLabelCustomizationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WhiteLabelCustomizationUpdateWhiteLabelCustomization::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WhiteLabelCustomizationUpdateWhiteLabelCustomizationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaAuthenticationServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaAuthenticationServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateAuthenticationServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaCreateAuthenticationServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaModifyAuthenticationServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaModifyAuthenticationServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateActiveDirectoryServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaCreateActiveDirectoryServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaModifyActiveDirectoryServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaModifyActiveDirectoryServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaActiveDirectoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaActiveDirectoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaLDAPServerList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaLDAPServerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaLDAPServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaLDAPServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateLDAPServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaCreateLDAPServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaModifyLDAPServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaModifyLDAPServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaHttp2ServerList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaHttp2ServerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaHttp2Server::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaHttp2ServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaCreateHttp2Server::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaCreateHttp2ServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaModifyHttp2Server::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaModifyHttp2ServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaAuthenticationServerList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaAuthenticationServerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaActiveDirectory::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaActiveDirectoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneSwitchGroupBindingBindingRecord::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneSwitchGroupBindingBindingRecordNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneSwitchGroupBindingDataList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneSwitchGroupBindingDataListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneSwitchGroupBindingCreateRecord::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneSwitchGroupBindingCreateRecordNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyCPUserDefinedInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemModifyCPUserDefinedInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyControlPlane::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemModifyControlPlaneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyCPStaticRoute::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemModifyCPStaticRouteNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControlPlaneInterfaceList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemControlPlaneInterfaceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStaticRouteList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemStaticRouteListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyIpSupportType::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemModifyIpSupportTypeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControlPlaneConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemControlPlaneConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemUserDefinedInterfaceList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemUserDefinedInterfaceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControlPlaneList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemControlPlaneListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControlPlaneListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemControlPlaneListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VlanNameProfileVlanNameProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VlanNameProfileVlanNameProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VlanNameProfileVlanNameProfileWithEditInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VlanNameProfileVlanNameProfileWithEditInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VlanNameProfileVlanNameProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VlanNameProfileVlanNameProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeCreateTaskConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneScheduleUpgradeCreateTaskConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeCreateTaskConfigZoneListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneScheduleUpgradeCreateTaskConfigZoneListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeTaskConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneScheduleUpgradeTaskConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeTaskList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneScheduleUpgradeTaskListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeHistoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneScheduleUpgradeHistoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DeviceCapacityDevicesSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DeviceCapacityDevicesSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesApRuleConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AprulesApRuleConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesCreateApRule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AprulesCreateApRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesModifyApRule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AprulesModifyApRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesApRuleList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AprulesApRuleListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesApRuleListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AprulesApRuleListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemDataPlaneListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemDataPlaneListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemDataPlaneConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemDataPlaneConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyDataPlane::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemModifyDataPlaneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyDataPlaneState::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemModifyDataPlaneStateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemUpdateDpMeshTunnelSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemUpdateDpMeshTunnelSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemGetDataPlaneMeshTunnelSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemGetDataPlaneMeshTunnelSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpSwitchoverDp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpSwitchoverDpNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFlexiVpnProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileFlexiVpnProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalDetectionProfilePortalDetectionProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalDetectionProfilePortalDetectionProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalDetectionProfileCreatePortalDetectionProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalDetectionProfileCreatePortalDetectionProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalDetectionProfilePortalDetectionProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalDetectionProfilePortalDetectionProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileSocialMediaLoginProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileSocialMediaLoginProfileWithEditInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileWithEditInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileSocialMediaLoginProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApCloudOnBoardingSyncResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApCloudOnBoardingSyncResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApCloudOnBoardingSyncResultFailAps::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApCloudOnBoardingSyncResultFailApsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApCloudOnBoardingSyncResultFailApsApsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApCloudOnBoardingSyncResultFailApsApsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneQueryCriteriaFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneQueryCriteriaFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneQueryCriteriaExtraFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneQueryCriteriaExtraFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneQueryCriteriaOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneQueryCriteriaOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneDhcpSiteConfigList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneDhcpSiteConfigListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateBonjourFencingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateBonjourFencingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCreateZone::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneCreateZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCommonAttribute::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApmodelCommonAttributeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneModifyZone::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneModifyZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerCreateWlanScheduler::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanschedulerCreateWlanSchedulerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerWlanSchedule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanschedulerWlanScheduleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateWebAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceCreateWebAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceWebAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceWebAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalservicePortalServiceList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalservicePortalServiceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalservicePortalServiceListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalservicePortalServiceListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspotInternal::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceCreateHotspotInternalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspotExternal::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceCreateHotspotExternalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspotSmartClientOnly::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceCreateHotspotSmartClientOnlyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspot20WlanProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceCreateHotspot20WlanProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyHotspot20WlanProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceModifyHotspot20WlanProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspot20VenueProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceCreateHotspot20VenueProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyHotspot20VenueProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceModifyHotspot20VenueProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EthernetPortModifyEthernetPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EthernetPortModifyEthernetPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyBonjourFencingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyBonjourFencingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCreateBonjourGatewayPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneCreateBonjourGatewayPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneModifyBonjourGatewayPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneModifyBonjourGatewayPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneBonjourGatewayPolicyConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneBonjourGatewayPolicyConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneBonjourGatewayPolicyList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneBonjourGatewayPolicyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyClientIsolationWhitelist::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyClientIsolationWhitelistNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateGuestAccess::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceCreateGuestAccessNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceGuestAccess::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceGuestAccessNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyGuestAccess::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceModifyGuestAccessNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceHotspot20WlanProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceHotspot20WlanProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceHotspot20VeuneProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceHotspot20VeuneProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateL2ACL::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceCreateL2ACLNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyL2ACL::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceModifyL2ACLNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceWechatConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceWechatConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateWechat::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceCreateWechatNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyWechat::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceModifyWechatNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneModfiyApFirmware::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneModfiyApFirmwareNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DevicePolicyPorfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DevicePolicyPorfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DevicePolicyPorfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DevicePolicyPorfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DevicePolicyCreateDevicePolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DevicePolicyCreateDevicePolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCreateDiffServProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneCreateDiffServProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneModifyDiffServProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneModifyDiffServProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneDiffServConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneDiffServConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateClientIsolationWhitelist::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateClientIsolationWhitelistNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneAvailableTunnelProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneAvailableTunnelProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EthernetPortCreateEthernetPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EthernetPortCreateEthernetPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceL2ACL::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceL2ACLNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneDiffServList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneDiffServListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApFirmwareList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneApFirmwareListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EthernetPortEthernetPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EthernetPortEthernetPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DevicePolicyDevicePolicyPorfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DevicePolicyDevicePolicyPorfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBonjourFencingPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneMeshConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneMeshConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceHotspot::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceHotspotNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerWlanScheduleList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanschedulerWlanScheduleListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EthernetPortProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EthernetPortProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EthernetPortProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EthernetPortProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneModifyBonjourGatewayEnable::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneModifyBonjourGatewayEnableNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyHotspot::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceModifyHotspotNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerModifyWlanScheduler::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanschedulerModifyWlanSchedulerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyWebAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceModifyWebAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DevicePolicyModifyDevicePolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DevicePolicyModifyDevicePolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneZoneList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneZoneListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileClientIsolationWhitelist::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileClientIsolationWhitelistNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneZoneConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneZoneConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterRedundancyClusterRedundancySettings::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterRedundancyClusterRedundancySettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterRedundancyUpdateClusterRedundancy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterRedundancyUpdateClusterRedundancyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapIndoorMapList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IndoorMapIndoorMapListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapIndooMapAuditId::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IndoorMapIndooMapAuditIdNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapIndoorMap::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IndoorMapIndoorMapNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SessionManagementRuckusSessions::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SessionManagementRuckusSessionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfilePrecedenceList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfilePrecedenceListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfilePrecedenceListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfilePrecedenceListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreatePrecedenceProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreatePrecedenceProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUpdatePrecedenceProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileUpdatePrecedenceProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDeleteBulkPrecedenceProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDeleteBulkPrecedenceProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNodeInfoMeshNodeInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MeshNodeInfoMeshNodeInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNodeInfoUpdateAPZeroTouch::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MeshNodeInfoUpdateAPZeroTouchNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNeighborInfoMeshNeighborInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MeshNeighborInfoMeshNeighborInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SplitTunnelCreateSplitTunnelProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SplitTunnelCreateSplitTunnelProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SplitTunnelModifySplitTunnelProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SplitTunnelModifySplitTunnelProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SplitTunnelSplitTunnelProfileQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SplitTunnelSplitTunnelProfileQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SplitTunnelSplitTunnelProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SplitTunnelSplitTunnelProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SplitTunnelSplitTunnelProfileListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SplitTunnelSplitTunnelProfileListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SplitTunnelSplitTunnelProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SplitTunnelSplitTunnelProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRogueApPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileRogueApPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRogueApPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateRogueApPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRogueApPolicyList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileRogueApPolicyListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUpdateRogueApPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileUpdateRogueApPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RogueclientRogueInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RogueclientRogueInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRestrictedApAccessProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateRestrictedApAccessProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRestrictedApAccessProfileArray::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileRestrictedApAccessProfileArrayNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyRestrictedApAccessProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyRestrictedApAccessProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRestrictedApAccessProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileRestrictedApAccessProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileCreateMduSegmentationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileCreateMduSegmentationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileUpdateMduSegmentationProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileUpdateMduSegmentationProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileSummaryReviewData::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileMduSegmentationProfileSummaryReviewDataNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduSegmentationProfileQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileMduSegmentationProfileQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileProfileContentList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileProfileContentListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileEthernetPortProfileConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileEthernetPortProfileConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileEthernetPortProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileEthernetPortProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationCreateAdminAAAServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationCreateAdminAAAServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationRetrieveAdminAAAServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationRetrieveAdminAAAServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationRetrieveAdminAAAServerList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationRetrieveAdminAAAServerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationRetrieveAdminAAAServerListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationRetrieveAdminAAAServerListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAdminAAAServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationModifyAdminAAAServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyAutoExportBackup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationModifyAutoExportBackupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationAutoExportBackup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationAutoExportBackupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyScheduleBackup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationModifyScheduleBackupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationScheduleBackup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationScheduleBackupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationApplicationLogAndStatusList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationApplicationLogAndStatusListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModifyLogLevel::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationModifyLogLevelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationUpgradeStatus::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationUpgradeStatusNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationApPatchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationApPatchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationApPatchStatus::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationApPatchStatusNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationApPatchHistoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationApPatchHistoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationModfiyLicenseServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationModfiyLicenseServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationUpgradePatchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationUpgradePatchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationClusterBackupList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationClusterBackupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicensesSummaryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationLicensesSummaryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicensesSyncLogsList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationLicensesSyncLogsListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicenseServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationLicenseServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationConfigurationBackupList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationConfigurationBackupListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationUpgradeHistoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationUpgradeHistoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationRestoreConfigurationBackup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationRestoreConfigurationBackupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicensesList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationLicensesListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcUserDefinedProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcUserDefinedProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcCreateApplicationPolicyProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcCreateApplicationPolicyProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplicationPolicyProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcApplicationPolicyProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcModifyApplicationPolicyProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcModifyApplicationPolicyProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcSignaturePackage::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcSignaturePackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcLatestInstallableSignaturePackage::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcLatestInstallableSignaturePackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcCreateUserDefinedProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcCreateUserDefinedProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcModifyUserDefinedProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcModifyUserDefinedProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplicationList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcApplicationListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcAppCategoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcAppCategoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcAppCategory::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcAppCategoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcApplicationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcDownloadLatestInstallableSignaturePackage::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcDownloadLatestInstallableSignaturePackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcPatchSignaturePackage::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcPatchSignaturePackageNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SciModifyEventCode::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SciModifyEventCodeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SciModifySciProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SciModifySciProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SciSciEventCode::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SciSciEventCodeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SciSciEventCodeListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SciSciEventCodeListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SciSciProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SciSciProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SciDeleteSciProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SciDeleteSciProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SciCreateSciProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SciCreateSciProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SciModifySciEnabled::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SciModifySciEnabledNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SciSciProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SciSciProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SciSciProfileListExtra::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SciSciProfileListExtraNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DomainCreateDomain::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DomainCreateDomainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DomainModifyDomain::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DomainModifyDomainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDomainList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DomainDomainListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDomainConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DomainDomainConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDeleteDPSKs::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskDeleteDPSKsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDeleteDpskResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskDeleteDpskResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskGetDpskEnabledWlans::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskGetDpskEnabledWlansNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskGetDpskEnabledWlansListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskGetDpskEnabledWlansListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskModifyDeleteExpiredDpsk::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskModifyDeleteExpiredDpskNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskGetDpskResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskGetDpskResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskBatchGenUnbound::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskBatchGenUnboundNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskUpdateDpsk::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskUpdateDpskNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskGetDpskInfoList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskGetDpskInfoListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDeleteExpiredDpskConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskDeleteExpiredDpskConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFirewallProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileFirewallProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFirewallProfileQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileFirewallProfileQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFirewallProfileQueryCriteriaOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileFirewallProfileQueryCriteriaOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFirewallProfileArray::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileFirewallProfileArrayNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateFirewallProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCreateFirewallProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyFirewallProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyFirewallProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DnsSpoofingProfileGetDnsSpoofingProfileList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DnsSpoofingProfileGetDnsSpoofingProfileListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DnsSpoofingProfileDnsSpoofingProfileDetail::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DnsSpoofingProfileDnsSpoofingProfileDetailNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DnsSpoofingProfileDnsSpoofingProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DnsSpoofingProfileDnsSpoofingProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ToolSpeedFlex::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ToolSpeedFlexNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ToolTestResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ToolTestResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationZdAPList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationZdAPListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationZdImportStatus::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationZdImportStatusNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationConnectZD::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationConnectZDNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationZdImport::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationZdImportNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSwapApConfigure::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSwapApConfigureNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemApMacOUIList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemApMacOUIListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCsrList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateCsrListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCsrListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateCsrListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificatesSigningRequest::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateCertificatesSigningRequestNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogPrimaryServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SyslogPrimaryServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogSecondaryServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SyslogSecondaryServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateTrustedCAChainCertList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateTrustedCAChainCertListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateTrustedCAChainCertListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateTrustedCAChainCertListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCreateTrustedCAChain::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateCreateTrustedCAChainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateTrustedCAChain::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateTrustedCAChainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateDeleteBulk::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateDeleteBulkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateModifyTrustedCAChain::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateModifyTrustedCAChainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSystemTimeSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemSystemTimeSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogSyslogServerSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SyslogSyslogServerSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogModifySyslogSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SyslogModifySyslogSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SyslogPriority::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SyslogPriorityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCreateCert::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateCreateCertNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateCertSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCreateCSR::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateCreateCSRNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifySnmpAgent::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemModifySnmpAgentNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemNorthboundInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemNorthboundInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CaleaCaleaMacListRsp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CaleaCaleaMacListRspNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CaleaCaleaMacListRq::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CaleaCaleaMacListRqNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CaleaCaleaCommonSettingRq::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CaleaCaleaCommonSettingRqNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemGatewayAdvanced::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemGatewayAdvancedNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControllerList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemControllerListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControllerListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemControllerListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemInventoryList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemInventoryListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemInventoryListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemInventoryListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSecuritySetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemSecuritySettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCloudOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemCloudOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSystemSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemSystemSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCreateApMacOUI::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemCreateApMacOUINormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemUpdateApMacOUI::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemUpdateApMacOUINormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemStatisticListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemCpu::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemStatisticListItemCpuNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemDisk::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemStatisticListItemDiskNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemMemory::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemStatisticListItemMemoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSnmpAgentConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemSnmpAgentConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCreateClientCert::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateCreateClientCertNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaTestAuthenticationServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaTestAuthenticationServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaTestAAAServerSingleResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaTestAAAServerSingleResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApRoutineConfigIntervalApRoutineConfigIntervalReq::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApRoutineConfigIntervalApRoutineConfigIntervalReqNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CaleaCaleaCommonSettingRsp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CaleaCaleaCommonSettingRspNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateClientCertList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateClientCertListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateClientCertListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateClientCertListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateClientCert::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateClientCertNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyGatewayAdvanced::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemModifyGatewayAdvancedNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemLwapp2scgConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemLwapp2scgConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyLwapp2scg::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemModifyLwapp2scgNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifySystemTimeSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemModifySystemTimeSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApRoutineStatusIntervalApRoutineStatusIntervalRsp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApRoutineStatusIntervalApRoutineStatusIntervalRspNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApRoutineConfigIntervalApRoutineConfigIntervalRsp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApRoutineConfigIntervalApRoutineConfigIntervalRspNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCommonAccessCardSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemCommonAccessCardSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificate::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateCertificateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificateList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateCertificateListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificateListListItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateCertificateListListItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecGetResult::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIPsecGetResultNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecUpdate::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIPsecUpdateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileVlanPrecedenceItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileVlanPrecedenceItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapScale::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IndoorMapScaleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAccounting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanAccountingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfilePublicSubnetIdBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpNatProfilePublicSubnetIdBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRealmAuthServiceMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileRealmAuthServiceMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcLatestInstallableSignaturePackageBinary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcLatestInstallableSignaturePackageBinaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingRuleDeviceMac::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBonjourFencingRuleDeviceMacNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanQueryCreateWlanQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanQueryCreateWlanQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileSiteSecondary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileSiteSecondaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gZone::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio5gZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VendorSpecificAttributeProfileVendorSpecificAttribute::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VendorSpecificAttributeProfileVendorSpecificAttributeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanQueryWlanBssid::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanQueryWlanBssidNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApMesh::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApMeshNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\FlexiVpnFlexiVpnSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\FlexiVpnFlexiVpnSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationSecondaryRadiusServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationSecondaryRadiusServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanQueryApWlanBssid::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanQueryApWlanBssidNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileApSnmpCommunity::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSnmpAgentProfileApSnmpCommunityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIPsecProposal::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIPsecProposalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupRoleLabelValue::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserGroupRoleLabelValueNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationApplicationLogAndStatus::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationApplicationLogAndStatusNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeBladeProgress::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterbladeBladeProgressNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProviderAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemApNumberLimitSettingOfDomain::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemApNumberLimitSettingOfDomainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RogueInfoRogueInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RogueInfoRogueInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gApGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio5gApGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingService::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBonjourFencingServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigResponseAp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadioConfigResponseApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDownlinkRateLimiting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDownlinkRateLimitingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapIndoorMapSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IndoorMapIndoorMapSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLldpSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApmodelLldpSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\GeofenceProfileGeofenceProfileLocationData::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\GeofenceProfileGeofenceProfileLocationDataNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterRedundancyManagementEntry::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterRedundancyManagementEntryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapIndoorMapAp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IndoorMapIndoorMapApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderEAPAuthSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProviderEAPAuthSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileEspSecurityAssociationContent::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileEspSecurityAssociationContentNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityUsernamePasswordCredentialsImplDto::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityUsernamePasswordCredentialsImplDtoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SciDeleteSciProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SciDeleteSciProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationUpgradeHistorySummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationUpgradeHistorySummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceUserSession::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceUserSessionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileEspProposal::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileEspProposalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceConnectionCapability::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceConnectionCapabilityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanEncryption::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanEncryptionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigZone::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadioConfigZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gResponseAp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio5gResponseApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPortSupplicant::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApmodelLanPortSupplicantNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderAccounting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProviderAccountingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRbacMetadata::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonRbacMetadataNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRbacMetadataRbacMetadataItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonRbacMetadataRbacMetadataItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentitySessionDuration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentitySessionDurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileL3AclRuleList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileL3AclRuleListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClientHistoricalClient::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClientHistoricalClientNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortalLang::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemPortalLangNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDoAssignIp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonDoAssignIpNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDoAssignIpSiteApsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonDoAssignIpSiteApsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileClientIsolationEntry::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileClientIsolationEntryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SplitTunnelSplitTunnelIpMaskRule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SplitTunnelSplitTunnelIpMaskRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonTrafficClassProfileRef::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonTrafficClassProfileRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalDetectionProfilePortalDetectionPattern::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalDetectionProfilePortalDetectionPatternNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemApNumberLimitSettingOfZone::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemApNumberLimitSettingOfZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneTimezoneSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneTimezoneSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationActiveDirectoryServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationActiveDirectoryServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemAuthenticationKey::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemAuthenticationKeyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAuthentication::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanAuthenticationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDataPlaneL3RoamingData::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDataPlaneL3RoamingDataNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityAaaServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityAaaServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStaticRoute::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemStaticRouteNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4ControlInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIpv4ControlInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VlanNameProfileVlanNameProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VlanNameProfileVlanNameProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20AdviceOfCharge::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileHs20AdviceOfChargeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20AdviceOfChargeNaiRealm::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileHs20AdviceOfChargeNaiRealmNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20AdviceOfChargePlanInformationsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileHs20AdviceOfChargePlanInformationsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio24gApGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio24gApGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gAp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio5gApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonMyRuckusConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonMyRuckusConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanDSCPSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanDSCPSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneBandBalancing::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneBandBalancingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaModifyGroupAttrIdentityUserRoleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaModifyGroupAttrIdentityUserRoleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaModifyGroupAttrIdentityUserRoleMappingUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaModifyGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicensesSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationLicensesSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicensesSummaryCapacityControlLicenseCount::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationLicensesSummaryCapacityControlLicenseCountNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SessionManagementRuckusSession::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SessionManagementRuckusSessionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationDefaultRoleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationDefaultRoleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationApPatchHistory::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationApPatchHistoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAdvanced::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanAdvancedNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAdvancedUserRoleAccess::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanAdvancedUserRoleAccessNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcApplicationRule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcApplicationRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRadiusServerWhenTlsEnabled::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonRadiusServerWhenTlsEnabledNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileDistributionSwitchObj::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileDistributionSwitchObjNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6AccessAndCoreSeparation::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIpv6AccessAndCoreSeparationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileOptionInstance::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfileOptionInstanceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanSchedule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanScheduleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLacpSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApmodelLacpSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelExternalAntenna::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApmodelExternalAntennaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideSmartMonitor::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonOverrideSmartMonitorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityMaxDevices::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityMaxDevicesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationBackupFile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationBackupFileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemReservedPort::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemReservedPortNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanMACAuth::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanMACAuthNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityAuthenticationServerConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityAuthenticationServerConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileOptionBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfileOptionBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapBasicIndoorMap::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IndoorMapBasicIndoorMapNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApFirmware::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneApFirmwareNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigApGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadioConfigApGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaExtraNotFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonQueryCriteriaExtraNotFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBlockedPort::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBlockedPortNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryCreateApQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApQueryCreateApQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryCreateApQueryIndoorMapXy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApQueryCreateApQueryIndoorMapXyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApQueryCreateApQueryCellularGpsHistoryItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApQueryCreateApQueryCellularGpsHistoryItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemFriendlyNameLang::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemFriendlyNameLangNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIkeSecurityAssociationContent::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileIkeSecurityAssociationContentNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderEAPMethod::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProviderEAPMethodNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicenses::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationLicensesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyIpAclRules::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileModifyIpAclRulesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20OperatorIcon::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileHs20OperatorIconNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideClientAdmissionControl::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonOverrideClientAdmissionControlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityCountrySummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityCountrySummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneBonjourPolicyRule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneBonjourPolicyRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DnsSpoofingProfileDnsSpoofingProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DnsSpoofingProfileDnsSpoofingProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonQueryCriteriaOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AlarmListSingleAlarm::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AlarmListSingleAlarmNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControlPlaneInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemControlPlaneInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityPackageConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityPackageConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCpStaticRoute::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemCpStaticRouteNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPort8021X::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApmodelLanPort8021XNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApAlarmSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApAlarmSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RogueclientRogueInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RogueclientRogueInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonAltitude::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonAltitudeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20TermsConditions::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileHs20TermsConditionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadioConfigResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNodeInfoMeshNodeInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MeshNodeInfoMeshNodeInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonTrafficClassRef::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonTrafficClassRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCmProtocolOptionContent::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCmProtocolOptionContentNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingRule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBonjourFencingRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio6gApGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio6gApGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileApGroupInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileMduProfileApGroupInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRadiusServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonRadiusServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalservicePortalRedirect::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalservicePortalRedirectNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderSubscriptionDescription::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProviderSubscriptionDescriptionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileAcctServiceRealmMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileAcctServiceRealmMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneSoftGreRef::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneSoftGreRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonTimeRange::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonTimeRangeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6SecondaryInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIpv6SecondaryInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\L2AccessControlRuleObject::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\L2AccessControlRuleObjectNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQinq::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonQinqNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPortSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApmodelLanPortSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRateLimitingPrecedenceItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileRateLimitingPrecedenceItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpSiteConfigRef::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonDhcpSiteConfigRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpSiteConfigRefSiteApsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonDhcpSiteConfigRefSiteApsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPrimaryInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemPrimaryInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermissionWithoutDetailItems::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserGroupPermissionWithoutDetailItemsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DnsSpoofingProfileDnsSpoofingRule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DnsSpoofingProfileDnsSpoofingRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApInfoApInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApInfoApInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceSecondaryRadiusServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceSecondaryRadiusServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneLoadBalancing::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneLoadBalancingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanCoreTunnel::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanCoreTunnelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelCellularSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApmodelCellularSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonBaseServiceInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonBaseServiceInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceDnatPortMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceDnatPortMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4ManagementInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIpv4ManagementInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceCommonAccountingService::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceCommonAccountingServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileUpLinkObj::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileUpLinkObjNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCoreNetworkGateway::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileCoreNetworkGatewayNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4AccessAndCoreSeparation::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIpv4AccessAndCoreSeparationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringBlockCategory::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\UrlFilteringUrlFilteringBlockCategoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileDpInfoSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileMduProfileDpInfoSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityGuestPassConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityIdentityGuestPassConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneDiffServSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneDiffServSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderPLMN::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProviderPLMNNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApmodelLanPortSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneApmodelLanPortSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonCreateResultIdName::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonCreateResultIdNameNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneSyslog::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneSyslogNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCpUserDefinedInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemCpUserDefinedInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRateLimiting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonRateLimitingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneUplinkDiffServ::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneUplinkDiffServNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeUploadPatchInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterbladeUploadPatchInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanDpskSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskWlanDpskSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClientQueryTcWithQuota::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClientQueryTcWithQuotaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideGenericRef::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonOverrideGenericRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonSmartMonitor::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonSmartMonitorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityTimeScheduleList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityTimeScheduleListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigAp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadioConfigApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApSnmpOptions::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneApSnmpOptionsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNodeInfoHelperZoneInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MeshNodeInfoHelperZoneInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneZoneSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneZoneSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EventManagementEventDataList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EventManagementEventDataListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpRelayNoRelayTunnel::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDhcpRelayNoRelayTunnelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6PrimaryInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIpv6PrimaryInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClientQueryCreateClientQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClientQueryCreateClientQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonGenericRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DevicePolicyDevicePolicyRule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DevicePolicyDevicePolicyRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcSignaturePackageBinary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcSignaturePackageBinaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioBackgroundScanning::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioBackgroundScanningNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EventListSingleEvent::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EventListSingleEventNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonApRebootTimeout::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonApRebootTimeoutNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio24gAp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio24gApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApNetworkIpv6::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApNetworkIpv6Normalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPortAuthenticator::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApmodelLanPortAuthenticatorNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanFastInitialLinkSetup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanFastInitialLinkSetupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateServiceCertificate::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CertificateServiceCertificateNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio24gZone::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio24gZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\L2AccessControlEtherTypeObject::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\L2AccessControlEtherTypeObjectNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingRuleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileBonjourFencingRuleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeHistory::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneScheduleUpgradeHistoryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RacStatsRadiusProxy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RacStatsRadiusProxyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderHomeOIs::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProviderHomeOIsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationRadiusServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationRadiusServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemApMacOUI::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemApMacOUINormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonSnmpUser::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonSnmpUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupApGroupMember::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApgroupApGroupMemberNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesSubnet::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AprulesSubnetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonFullTextSearch::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonFullTextSearchNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileHs20FriendlyName::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileHs20FriendlyNameNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioAutoChannelSelection::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioAutoChannelSelectionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApLogin::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneApLoginNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneBonjourGatewayPolicySummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneBonjourGatewayPolicySummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelAuthenticatorAAAServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApmodelAuthenticatorAAAServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNeighborInfoMeshNeighborInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MeshNeighborInfoMeshNeighborInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationClusterBackupSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationClusterBackupSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneBonjourPolicyRuleConfiguration::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneBonjourPolicyRuleConfigurationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityIdentityUserSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityIdentityUserSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneRogue::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneRogueNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileAdvancedOptionContent::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileAdvancedOptionContentNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonLteBandLockChannel::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonLteBandLockChannelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\L2AccessControlUserDefinedEtherTypeObject::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\L2AccessControlUserDefinedEtherTypeObjectNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileDpInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileMduProfileDpInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceGroupAttrIdentityUserRoleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceGroupAttrIdentityUserRoleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceGroupAttrIdentityUserRoleMappingUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileUplinkRateLimiting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileUplinkRateLimitingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileRogueApRuleList::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileRogueApRuleListNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderExternalOSU::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProviderExternalOSUNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileAccessSwitchObj::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileAccessSwitchObjNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileFlexiVpnProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileFlexiVpnProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalservicePortalLocation::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalservicePortalLocationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceModifyGroupAttrIdentityUserRoleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceModifyGroupAttrIdentityUserRoleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceModifyGroupAttrIdentityUserRoleMappingUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ServiceModifyGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanExternalDpsk::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskWlanExternalDpskNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanExternalDpskEncryption::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskWlanExternalDpskEncryptionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanExternalDpskAuthService::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskWlanExternalDpskAuthServiceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileSwitchGroups::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileSwitchGroupsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WifiCallingEpdg::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WifiCallingEpdgNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneDownlinkDiffServ::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneDownlinkDiffServNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio5gResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio5gResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationTacacsServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationTacacsServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IdentityPassValidFor::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IdentityPassValidForNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\BondPortBondPortProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\BondPortBondPortProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonApLatencyInterval::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonApLatencyIntervalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6ControlInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIpv6ControlInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpskDpskInfoItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpskDpskInfoItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6ManagementInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIpv6ManagementInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApLogin::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApLoginNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterOperationProgress::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterbladeClusterOperationProgressNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneRecoverySsidSet::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneRecoverySsidSetNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonSshPublicKeyRef::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonSshPublicKeyRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileWhitelistedDomain::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SocialMediaLoginProfileWhitelistedDomainNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApNetwork::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApNetworkNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4ClusterInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemIpv4ClusterInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceVenueName::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceVenueNameNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileTargetConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSnmpAgentProfileTargetConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfilePrivateQinqVlanRangeBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpNatProfilePrivateQinqVlanRangeBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationZdAP::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationZdAPNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceDefaultConnectionCapability::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\PortalserviceDefaultConnectionCapabilityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonSnmpCommunity::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonSnmpCommunityNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonHealthCheckPolicy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonHealthCheckPolicyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemPortStatisticNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio6gAp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio6gApNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpSiteConfigListRef::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonDhcpSiteConfigListRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpSiteConfigListRefSiteApsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonDhcpSiteConfigListRefSiteApsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterRedundancyActiveCluster::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterRedundancyActiveClusterNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonPortalCustomization::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonPortalCustomizationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesGpsCoordinates::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AprulesGpsCoordinatesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanRadius::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanRadiusNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSecondaryInterface::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SystemSecondaryInterfaceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderRealm::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProviderRealmNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLicensesSyncLogs::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationLicensesSyncLogsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonWebAuthenticationPortalCustomization::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonWebAuthenticationPortalCustomizationNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneDaylightSavingTime::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneDaylightSavingTimeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio24gResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio24gResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpProfileRef::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonDhcpProfileRefNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteria::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonQueryCriteriaNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaSortInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonQueryCriteriaSortInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCustomizedTimeZone::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneCustomizedTimeZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupResourceGroup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserGroupResourceGroupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DomainDevicePolicyDomainDevicePolicyRule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DomainDevicePolicyDomainDevicePolicyRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\SocialMediaLoginProfileSocialMediaLoginProfileSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\SocialMediaLoginProfileSocialMediaLoginProfileSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladePreviousOperationRecord::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterbladePreviousOperationRecordNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterUpgradeProgress::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ClusterbladeClusterUpgradeProgressNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupApGroupSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApgroupApGroupSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AvcCheckLatestInstallableSignaturePackageSettings::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AvcCheckLatestInstallableSignaturePackageSettingsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaGroupAttrIdentityUserRoleMapping::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaGroupAttrIdentityUserRoleMappingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaGroupAttrIdentityUserRoleMappingUserRole::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaGroupAttrIdentityUserRoleMappingUserRoleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaGroupAttrIdentityUserRoleMappingUserRoleUserTrafficProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermission::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserGroupPermissionNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermissionItemsItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ScguserScgUserGroupPermissionItemsItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AprulesIpAddressRange::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AprulesIpAddressRangeNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio6gZone::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio6gZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationLdapServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AdministrationLdapServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaExtraFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonQueryCriteriaExtraFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneAvailableTunnelProfile::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneAvailableTunnelProfileNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileTtgCommonSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileTtgCommonSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\EventManagementSingleEventSetting::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\EventManagementSingleEventSettingNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIkeProposal::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileIkeProposalNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\VlanNameProfileVlanNameRule::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\VlanNameProfileVlanNameRuleNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadio6gResponse::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\RadioRadio6gResponseNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileQinqVlanRangeBO::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfileQinqVlanRangeBONormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRecoverySsid::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonRecoverySsidNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\AaaServerQueryCreateAaaServer::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\AaaServerQueryCreateAaaServerNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileIpAclRules::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileIpAclRulesNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaFiltersItem::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonQueryCriteriaFiltersItemNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileOptionSpaceInstance::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DpProfileDpDhcpProfileOptionSpaceInstanceNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WiredClientQueryCreateClientQuery::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WiredClientQueryCreateClientQueryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslog::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSyslogNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeZone::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneScheduleUpgradeZoneNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WhiteLabelCustomizationWhiteLabelCustomizationSummary::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WhiteLabelCustomizationWhiteLabelCustomizationSummaryNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileProviderOnlineSignup::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileProviderOnlineSignupNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonApManagementVlan::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonApManagementVlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\IndoorMapIndoorMapXy::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\IndoorMapIndoorMapXyNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileRateLimitPorts::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\MduSegmentationProfileRateLimitPortsNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpClientInfo::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\DhcppoolsDhcpClientInfoNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonTargetConfig::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonTargetConfigNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\GdprFtp::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\GdprFtpNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileApSnmpUser::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ApSnmpAgentProfileApSnmpUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\CommonClientAdmissionControl::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\CommonClientAdmissionControlNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanVlan::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\WlanWlanVlanNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneSnmpUser::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneSnmpUserNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneUnsupportedApModel::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ZoneUnsupportedApModelNormalizer::class,
        
        \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDhcpOption82::class => \Jane\Component\OpenApi3\Tests\Expected\Normalizer\ProfileDhcpOption82Normalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ReferenceNormalizer::class,
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
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}