<?php

namespace CreditSafe\API\Normalizer;

use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
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
        
        \CreditSafe\API\Model\AuthenticationRequest::class => \CreditSafe\API\Normalizer\AuthenticationRequestNormalizer::class,
        
        \CreditSafe\API\Model\AuthenticationSuccessResponse::class => \CreditSafe\API\Normalizer\AuthenticationSuccessResponseNormalizer::class,
        
        \CreditSafe\API\Model\CompanySearchSuccessResult::class => \CreditSafe\API\Normalizer\CompanySearchSuccessResultNormalizer::class,
        
        \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItem::class => \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemNormalizer::class,
        
        \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemVatNo::class => \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemVatNoNormalizer::class,
        
        \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemTradingNames::class => \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemTradingNamesNormalizer::class,
        
        \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemAddress::class => \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemAddressNormalizer::class,
        
        \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemDateOfLatestChange::class => \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemDateOfLatestChangeNormalizer::class,
        
        \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts::class => \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemDateOfLatestCAccountsNormalizer::class,
        
        \CreditSafe\API\Model\SearchNoResultsError::class => \CreditSafe\API\Normalizer\SearchNoResultsErrorNormalizer::class,
        
        \CreditSafe\API\Model\SearchNoResultsErrorMessages::class => \CreditSafe\API\Normalizer\SearchNoResultsErrorMessagesNormalizer::class,
        
        \CreditSafe\API\Model\BadRequestError::class => \CreditSafe\API\Normalizer\BadRequestErrorNormalizer::class,
        
        \CreditSafe\API\Model\InvalidTokenError::class => \CreditSafe\API\Normalizer\InvalidTokenErrorNormalizer::class,
        
        \CreditSafe\API\Model\PeopleSearchSuccessResult::class => \CreditSafe\API\Normalizer\PeopleSearchSuccessResultNormalizer::class,
        
        \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem::class => \CreditSafe\API\Normalizer\PeopleSearchSuccessResultDirectorsItemNormalizer::class,
        
        \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemCompany::class => \CreditSafe\API\Normalizer\PeopleSearchSuccessResultDirectorsItemCompanyNormalizer::class,
        
        \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemAddress::class => \CreditSafe\API\Normalizer\PeopleSearchSuccessResultDirectorsItemAddressNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponse::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReport::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorSummary::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorSummaryNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetails::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetailsAddress::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsAddressNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetailsPositionsItem::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsPositionsItemNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetailsAdditionalData::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsAdditionalDataNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportOtherAddressesItem::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportOtherAddressesItemNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorships::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItem::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemPosition::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemPositionNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingCreditLimit::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingCreditLimitNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingProviderValue::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingProviderValueNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalData::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalDataNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigure::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigureNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorth::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorthNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmount::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmountNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItem::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemPosition::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemPositionNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorth::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorthNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimit::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimitNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValue::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValueNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalDataNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItem::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemPosition::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemPositionNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigureNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemNetWorth::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemNetWorthNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScore::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimit::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimitNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValue::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValueNormalizer::class,
        
        \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemAdditionalData::class => \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemAdditionalDataNormalizer::class,
        
        \CreditSafe\API\Model\GbImageTypesResponse::class => \CreditSafe\API\Normalizer\GbImageTypesResponseNormalizer::class,
        
        \CreditSafe\API\Model\GbImageTypesResponseAvailableTypesItem::class => \CreditSafe\API\Normalizer\GbImageTypesResponseAvailableTypesItemNormalizer::class,
        
        \CreditSafe\API\Model\ListCompanyImages::class => \CreditSafe\API\Normalizer\ListCompanyImagesNormalizer::class,
        
        \CreditSafe\API\Model\ListCompanyImagesDataItem::class => \CreditSafe\API\Normalizer\ListCompanyImagesDataItemNormalizer::class,
        
        \CreditSafe\API\Model\ListCompanyImagesDataItemCompany::class => \CreditSafe\API\Normalizer\ListCompanyImagesDataItemCompanyNormalizer::class,
        
        \CreditSafe\API\Model\ListCompanyImagesDataItemDocument::class => \CreditSafe\API\Normalizer\ListCompanyImagesDataItemDocumentNormalizer::class,
        
        \CreditSafe\API\Model\ListCompanyImagesDataItemLocalProperties::class => \CreditSafe\API\Normalizer\ListCompanyImagesDataItemLocalPropertiesNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponse::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReport::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummary::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryMainActivity::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryMainActivityNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCompanyStatusNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigureNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigureNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCreditRating::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimit::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimitNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValue::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValueNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalFormNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatusNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivityNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddressNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimit::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimitNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValueNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimitNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimit::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimitNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValue::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValueNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformation::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportContactInformationNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformationMainAddress::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportContactInformationMainAddressNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformationOtherAddressesItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportContactInformationOtherAddressesItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportShareCapitalStructureNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapitalNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectors::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddress::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddressNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemPositionsItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemPositionsItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportOtherInformation::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportOtherInformationNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportOtherInformationAdvisorsItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportGroupStructure::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportGroupStructureNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportExtendedGroupStructureItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportExtendedGroupStructureItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLossNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheetNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancialsNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemRatios::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemRatiosNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLossNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheetNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlowNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancialsNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatiosNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportPaymentDataNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformation::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCcjSummaryNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformation::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummaryNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValueNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemNormalizer::class,
        
        \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount::class => \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmountNormalizer::class,
        
        \CreditSafe\API\Model\CreateFreshInvestigationRequest::class => \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestNormalizer::class,
        
        \CreditSafe\API\Model\CreateFreshInvestigationRequestContactInfo::class => \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestContactInfoNormalizer::class,
        
        \CreditSafe\API\Model\CreateFreshInvestigationRequestContactInfoCompany::class => \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestContactInfoCompanyNormalizer::class,
        
        \CreditSafe\API\Model\CreateFreshInvestigationRequestSearchCriteria::class => \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestSearchCriteriaNormalizer::class,
        
        \CreditSafe\API\Model\CreateFreshInvestigationRequestSearchCriteriaAddress::class => \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestSearchCriteriaAddressNormalizer::class,
        
        \CreditSafe\API\Model\ListFreshInvestigationResponse::class => \CreditSafe\API\Normalizer\ListFreshInvestigationResponseNormalizer::class,
        
        \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItem::class => \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemNormalizer::class,
        
        \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemContactDetails::class => \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemContactDetailsNormalizer::class,
        
        \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemStatus::class => \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemStatusNormalizer::class,
        
        \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemSearchCriteria::class => \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemSearchCriteriaNormalizer::class,
        
        \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemSearchCriteriaAddress::class => \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemSearchCriteriaAddressNormalizer::class,
        
        \CreditSafe\API\Model\CompletedFreshInvestigation::class => \CreditSafe\API\Normalizer\CompletedFreshInvestigationNormalizer::class,
        
        \CreditSafe\API\Model\CompletedFreshInvestigationContactDetails::class => \CreditSafe\API\Normalizer\CompletedFreshInvestigationContactDetailsNormalizer::class,
        
        \CreditSafe\API\Model\CompletedFreshInvestigationSearchCriteria::class => \CreditSafe\API\Normalizer\CompletedFreshInvestigationSearchCriteriaNormalizer::class,
        
        \CreditSafe\API\Model\CompletedFreshInvestigationSearchCriteriaAddress::class => \CreditSafe\API\Normalizer\CompletedFreshInvestigationSearchCriteriaAddressNormalizer::class,
        
        \CreditSafe\API\Model\CompletedFreshInvestigationStatus::class => \CreditSafe\API\Normalizer\CompletedFreshInvestigationStatusNormalizer::class,
        
        \CreditSafe\API\Model\SubmittedFreshInvestigationRepsonse::class => \CreditSafe\API\Normalizer\SubmittedFreshInvestigationRepsonseNormalizer::class,
        
        \CreditSafe\API\Model\AccessCountriesResponse::class => \CreditSafe\API\Normalizer\AccessCountriesResponseNormalizer::class,
        
        \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItem::class => \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemNormalizer::class,
        
        \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem::class => \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItemNormalizer::class,
        
        \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem::class => \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItemNormalizer::class,
        
        \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem::class => \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItemNormalizer::class,
        
        \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem::class => \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItemNormalizer::class,
        
        \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem::class => \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItemNormalizer::class,
        
        \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem::class => \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItemNormalizer::class,
        
        \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem::class => \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItemNormalizer::class,
        
        \CreditSafe\API\Model\Paging::class => \CreditSafe\API\Normalizer\PagingNormalizer::class,
        
        \CreditSafe\API\Model\UserDetails::class => \CreditSafe\API\Normalizer\UserDetailsNormalizer::class,
        
        \CreditSafe\API\Model\Company::class => \CreditSafe\API\Normalizer\CompanyNormalizer::class,
        
        \CreditSafe\API\Model\Event::class => \CreditSafe\API\Normalizer\EventNormalizer::class,
        
        \CreditSafe\API\Model\NotificationEvent::class => \CreditSafe\API\Normalizer\NotificationEventNormalizer::class,
        
        \CreditSafe\API\Model\CompanyEventsResponse::class => \CreditSafe\API\Normalizer\CompanyEventsResponseNormalizer::class,
        
        \CreditSafe\API\Model\NotificationEventsResponse::class => \CreditSafe\API\Normalizer\NotificationEventsResponseNormalizer::class,
        
        \CreditSafe\API\Model\PortfolioRequest::class => \CreditSafe\API\Normalizer\PortfolioRequestNormalizer::class,
        
        \CreditSafe\API\Model\PortfolioRequestEmails::class => \CreditSafe\API\Normalizer\PortfolioRequestEmailsNormalizer::class,
        
        \CreditSafe\API\Model\EventRulesResponse::class => \CreditSafe\API\Normalizer\EventRulesResponseNormalizer::class,
        
        \CreditSafe\API\Model\GuidSuccessResponse::class => \CreditSafe\API\Normalizer\GuidSuccessResponseNormalizer::class,
        
        \CreditSafe\API\Model\GuidSuccessResponseGUIDListItem::class => \CreditSafe\API\Normalizer\GuidSuccessResponseGUIDListItemNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResult::class => \CreditSafe\API\Normalizer\ComplianceSearchResultNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultData::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBody::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodyNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResult::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItem::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItem::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItemNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsNameNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItemNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItemNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflictsNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItem::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItemNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItemNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemName::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemNameNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItem::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItemNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsNameNormalizer::class,
        
        \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile::class => \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFileNormalizer::class,
        
        \CreditSafe\API\Model\CompliancePreDefinedSearches::class => \CreditSafe\API\Normalizer\CompliancePreDefinedSearchesNormalizer::class,
        
        \CreditSafe\API\Model\CompliancePreDefinedSearchesPredefinedSearchesItem::class => \CreditSafe\API\Normalizer\CompliancePreDefinedSearchesPredefinedSearchesItemNormalizer::class,
        
        \CreditSafe\API\Model\BankMatchVerify::class => \CreditSafe\API\Normalizer\BankMatchVerifyNormalizer::class,
        
        \CreditSafe\API\Model\BankMatchValidate::class => \CreditSafe\API\Normalizer\BankMatchValidateNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPostBody::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPostBodyNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPostBodyEmails::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPostBodyEmailsNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdPatchBody::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdPatchBodyNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdPatchBodyEmailsItem::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdPatchBodyEmailsItemNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItemNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdImportPostBody::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdImportPostBodyNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdSyncPostBody::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdSyncPostBodyNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBody::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBodyNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesPostBody::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesPostBodyNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItemNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItemNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBody::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItem::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItemNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBodyNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBody::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyNormalizer::class,
        
        \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItem::class => \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItemNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \CreditSafe\API\Runtime\Normalizer\ReferenceNormalizer::class,
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
            
            \CreditSafe\API\Model\AuthenticationRequest::class => false,
            \CreditSafe\API\Model\AuthenticationSuccessResponse::class => false,
            \CreditSafe\API\Model\CompanySearchSuccessResult::class => false,
            \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItem::class => false,
            \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemVatNo::class => false,
            \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemTradingNames::class => false,
            \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemAddress::class => false,
            \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemDateOfLatestChange::class => false,
            \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts::class => false,
            \CreditSafe\API\Model\SearchNoResultsError::class => false,
            \CreditSafe\API\Model\SearchNoResultsErrorMessages::class => false,
            \CreditSafe\API\Model\BadRequestError::class => false,
            \CreditSafe\API\Model\InvalidTokenError::class => false,
            \CreditSafe\API\Model\PeopleSearchSuccessResult::class => false,
            \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItem::class => false,
            \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemCompany::class => false,
            \CreditSafe\API\Model\PeopleSearchSuccessResultDirectorsItemAddress::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponse::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReport::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorSummary::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetails::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetailsAddress::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetailsPositionsItem::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorDetailsAdditionalData::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportOtherAddressesItem::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorships::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItem::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemPosition::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRating::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingCreditLimit::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingProviderValue::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalData::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigure::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorth::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmount::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItem::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemPosition::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorth::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRating::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimit::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValue::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItem::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemPosition::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemNetWorth::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScore::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRating::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimit::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValue::class => false,
            \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemAdditionalData::class => false,
            \CreditSafe\API\Model\GbImageTypesResponse::class => false,
            \CreditSafe\API\Model\GbImageTypesResponseAvailableTypesItem::class => false,
            \CreditSafe\API\Model\ListCompanyImages::class => false,
            \CreditSafe\API\Model\ListCompanyImagesDataItem::class => false,
            \CreditSafe\API\Model\ListCompanyImagesDataItemCompany::class => false,
            \CreditSafe\API\Model\ListCompanyImagesDataItemDocument::class => false,
            \CreditSafe\API\Model\ListCompanyImagesDataItemLocalProperties::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponse::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReport::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummary::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryMainActivity::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCreditRating::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimit::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValue::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimit::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimit::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValue::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformation::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformationMainAddress::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformationOtherAddressesItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectors::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddress::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemPositionsItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportOtherInformation::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportGroupStructure::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportExtendedGroupStructureItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemRatios::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformation::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegistered::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformation::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValue::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem::class => false,
            \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount::class => false,
            \CreditSafe\API\Model\CreateFreshInvestigationRequest::class => false,
            \CreditSafe\API\Model\CreateFreshInvestigationRequestContactInfo::class => false,
            \CreditSafe\API\Model\CreateFreshInvestigationRequestContactInfoCompany::class => false,
            \CreditSafe\API\Model\CreateFreshInvestigationRequestSearchCriteria::class => false,
            \CreditSafe\API\Model\CreateFreshInvestigationRequestSearchCriteriaAddress::class => false,
            \CreditSafe\API\Model\ListFreshInvestigationResponse::class => false,
            \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItem::class => false,
            \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemContactDetails::class => false,
            \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemStatus::class => false,
            \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemSearchCriteria::class => false,
            \CreditSafe\API\Model\ListFreshInvestigationResponseOrdersItemSearchCriteriaAddress::class => false,
            \CreditSafe\API\Model\CompletedFreshInvestigation::class => false,
            \CreditSafe\API\Model\CompletedFreshInvestigationContactDetails::class => false,
            \CreditSafe\API\Model\CompletedFreshInvestigationSearchCriteria::class => false,
            \CreditSafe\API\Model\CompletedFreshInvestigationSearchCriteriaAddress::class => false,
            \CreditSafe\API\Model\CompletedFreshInvestigationStatus::class => false,
            \CreditSafe\API\Model\SubmittedFreshInvestigationRepsonse::class => false,
            \CreditSafe\API\Model\AccessCountriesResponse::class => false,
            \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItem::class => false,
            \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem::class => false,
            \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem::class => false,
            \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem::class => false,
            \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem::class => false,
            \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem::class => false,
            \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem::class => false,
            \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem::class => false,
            \CreditSafe\API\Model\Paging::class => false,
            \CreditSafe\API\Model\UserDetails::class => false,
            \CreditSafe\API\Model\Company::class => false,
            \CreditSafe\API\Model\Event::class => false,
            \CreditSafe\API\Model\NotificationEvent::class => false,
            \CreditSafe\API\Model\CompanyEventsResponse::class => false,
            \CreditSafe\API\Model\NotificationEventsResponse::class => false,
            \CreditSafe\API\Model\PortfolioRequest::class => false,
            \CreditSafe\API\Model\PortfolioRequestEmails::class => false,
            \CreditSafe\API\Model\EventRulesResponse::class => false,
            \CreditSafe\API\Model\GuidSuccessResponse::class => false,
            \CreditSafe\API\Model\GuidSuccessResponseGUIDListItem::class => false,
            \CreditSafe\API\Model\ComplianceSearchResult::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultData::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBody::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResult::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItem::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItem::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItem::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemName::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItem::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName::class => false,
            \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile::class => false,
            \CreditSafe\API\Model\CompliancePreDefinedSearches::class => false,
            \CreditSafe\API\Model\CompliancePreDefinedSearchesPredefinedSearchesItem::class => false,
            \CreditSafe\API\Model\BankMatchVerify::class => false,
            \CreditSafe\API\Model\BankMatchValidate::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPostBody::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPostBodyEmails::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdPatchBody::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdPatchBodyEmailsItem::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItem::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdImportPostBody::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdSyncPostBody::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBody::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesPostBody::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBody::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItem::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBody::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBody::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItem::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBody::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBody::class => false,
            \CreditSafe\API\Model\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItem::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}