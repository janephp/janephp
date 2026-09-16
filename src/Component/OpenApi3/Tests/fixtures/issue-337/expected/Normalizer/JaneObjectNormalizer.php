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
        
        \CreditSafe\API\Model\CompletedFreshInvestigationSectionsItemAnyOf::class => \CreditSafe\API\Normalizer\CompletedFreshInvestigationSectionsItemAnyOfNormalizer::class,
        
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
        $normalizer = match ($normalizerClass) {
            \CreditSafe\API\Normalizer\AuthenticationRequestNormalizer::class => new \CreditSafe\API\Normalizer\AuthenticationRequestNormalizer(),
            \CreditSafe\API\Normalizer\AuthenticationSuccessResponseNormalizer::class => new \CreditSafe\API\Normalizer\AuthenticationSuccessResponseNormalizer(),
            \CreditSafe\API\Normalizer\CompanySearchSuccessResultNormalizer::class => new \CreditSafe\API\Normalizer\CompanySearchSuccessResultNormalizer(),
            \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemNormalizer::class => new \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemNormalizer(),
            \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemVatNoNormalizer::class => new \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemVatNoNormalizer(),
            \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemTradingNamesNormalizer::class => new \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemTradingNamesNormalizer(),
            \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemAddressNormalizer::class => new \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemAddressNormalizer(),
            \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemDateOfLatestChangeNormalizer::class => new \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemDateOfLatestChangeNormalizer(),
            \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemDateOfLatestCAccountsNormalizer::class => new \CreditSafe\API\Normalizer\CompanySearchSuccessResultCompaniesItemDateOfLatestCAccountsNormalizer(),
            \CreditSafe\API\Normalizer\SearchNoResultsErrorNormalizer::class => new \CreditSafe\API\Normalizer\SearchNoResultsErrorNormalizer(),
            \CreditSafe\API\Normalizer\SearchNoResultsErrorMessagesNormalizer::class => new \CreditSafe\API\Normalizer\SearchNoResultsErrorMessagesNormalizer(),
            \CreditSafe\API\Normalizer\BadRequestErrorNormalizer::class => new \CreditSafe\API\Normalizer\BadRequestErrorNormalizer(),
            \CreditSafe\API\Normalizer\InvalidTokenErrorNormalizer::class => new \CreditSafe\API\Normalizer\InvalidTokenErrorNormalizer(),
            \CreditSafe\API\Normalizer\PeopleSearchSuccessResultNormalizer::class => new \CreditSafe\API\Normalizer\PeopleSearchSuccessResultNormalizer(),
            \CreditSafe\API\Normalizer\PeopleSearchSuccessResultDirectorsItemNormalizer::class => new \CreditSafe\API\Normalizer\PeopleSearchSuccessResultDirectorsItemNormalizer(),
            \CreditSafe\API\Normalizer\PeopleSearchSuccessResultDirectorsItemCompanyNormalizer::class => new \CreditSafe\API\Normalizer\PeopleSearchSuccessResultDirectorsItemCompanyNormalizer(),
            \CreditSafe\API\Normalizer\PeopleSearchSuccessResultDirectorsItemAddressNormalizer::class => new \CreditSafe\API\Normalizer\PeopleSearchSuccessResultDirectorsItemAddressNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorSummaryNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorSummaryNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsAddressNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsAddressNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsPositionsItemNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsPositionsItemNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsAdditionalDataNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorDetailsAdditionalDataNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportOtherAddressesItemNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportOtherAddressesItemNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemPositionNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemPositionNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingCreditLimitNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingCreditLimitNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingProviderValueNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScoreCurrentCreditRatingProviderValueNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalDataNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalDataNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigureNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigureNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorthNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorthNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmountNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmountNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemPositionNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemPositionNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorthNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorthNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimitNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingCreditLimitNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValueNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScoreCurrentCreditRatingProviderValueNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalDataNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalDataNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemPositionNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemPositionNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigureNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigureNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemNetWorthNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemNetWorthNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimitNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingCreditLimitNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValueNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScoreCurrentCreditRatingProviderValueNormalizer(),
            \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemAdditionalDataNormalizer::class => new \CreditSafe\API\Normalizer\GbPeopleReportReponseReportDirectorshipsPreviousItemAdditionalDataNormalizer(),
            \CreditSafe\API\Normalizer\GbImageTypesResponseNormalizer::class => new \CreditSafe\API\Normalizer\GbImageTypesResponseNormalizer(),
            \CreditSafe\API\Normalizer\GbImageTypesResponseAvailableTypesItemNormalizer::class => new \CreditSafe\API\Normalizer\GbImageTypesResponseAvailableTypesItemNormalizer(),
            \CreditSafe\API\Normalizer\ListCompanyImagesNormalizer::class => new \CreditSafe\API\Normalizer\ListCompanyImagesNormalizer(),
            \CreditSafe\API\Normalizer\ListCompanyImagesDataItemNormalizer::class => new \CreditSafe\API\Normalizer\ListCompanyImagesDataItemNormalizer(),
            \CreditSafe\API\Normalizer\ListCompanyImagesDataItemCompanyNormalizer::class => new \CreditSafe\API\Normalizer\ListCompanyImagesDataItemCompanyNormalizer(),
            \CreditSafe\API\Normalizer\ListCompanyImagesDataItemDocumentNormalizer::class => new \CreditSafe\API\Normalizer\ListCompanyImagesDataItemDocumentNormalizer(),
            \CreditSafe\API\Normalizer\ListCompanyImagesDataItemLocalPropertiesNormalizer::class => new \CreditSafe\API\Normalizer\ListCompanyImagesDataItemLocalPropertiesNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryMainActivityNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryMainActivityNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCompanyStatusNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCompanyStatusNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigureNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigureNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigureNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigureNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimitNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingCreditLimitNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValueNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanySummaryCreditRatingProviderValueNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalFormNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalFormNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatusNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatusNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivityNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivityNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddressNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddressNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimitNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimitNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValueNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValueNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimitNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimitNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimitNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimitNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValueNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValueNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportContactInformationNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportContactInformationNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportContactInformationMainAddressNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportContactInformationMainAddressNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportContactInformationOtherAddressesItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportContactInformationOtherAddressesItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportShareCapitalStructureNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportShareCapitalStructureNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapitalNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapitalNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddressNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddressNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemPositionsItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemPositionsItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportOtherInformationNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportOtherInformationNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportOtherInformationAdvisorsItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportOtherInformationAdvisorsItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportGroupStructureNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportGroupStructureNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportExtendedGroupStructureItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportExtendedGroupStructureItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLossNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLossNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheetNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheetNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancialsNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancialsNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemRatiosNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportFinancialStatementsItemRatiosNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLossNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLossNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheetNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheetNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlowNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlowNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancialsNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancialsNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatiosNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatiosNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportPaymentDataNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportPaymentDataNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCcjSummaryNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCcjSummaryNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummaryNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummaryNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValueNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItemCompanyValueNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemNormalizer(),
            \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmountNormalizer::class => new \CreditSafe\API\Normalizer\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmountNormalizer(),
            \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestNormalizer::class => new \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestNormalizer(),
            \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestContactInfoNormalizer::class => new \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestContactInfoNormalizer(),
            \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestContactInfoCompanyNormalizer::class => new \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestContactInfoCompanyNormalizer(),
            \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestSearchCriteriaNormalizer::class => new \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestSearchCriteriaNormalizer(),
            \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestSearchCriteriaAddressNormalizer::class => new \CreditSafe\API\Normalizer\CreateFreshInvestigationRequestSearchCriteriaAddressNormalizer(),
            \CreditSafe\API\Normalizer\ListFreshInvestigationResponseNormalizer::class => new \CreditSafe\API\Normalizer\ListFreshInvestigationResponseNormalizer(),
            \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemNormalizer::class => new \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemNormalizer(),
            \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemContactDetailsNormalizer::class => new \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemContactDetailsNormalizer(),
            \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemStatusNormalizer::class => new \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemStatusNormalizer(),
            \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemSearchCriteriaNormalizer::class => new \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemSearchCriteriaNormalizer(),
            \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemSearchCriteriaAddressNormalizer::class => new \CreditSafe\API\Normalizer\ListFreshInvestigationResponseOrdersItemSearchCriteriaAddressNormalizer(),
            \CreditSafe\API\Normalizer\CompletedFreshInvestigationNormalizer::class => new \CreditSafe\API\Normalizer\CompletedFreshInvestigationNormalizer(),
            \CreditSafe\API\Normalizer\CompletedFreshInvestigationContactDetailsNormalizer::class => new \CreditSafe\API\Normalizer\CompletedFreshInvestigationContactDetailsNormalizer(),
            \CreditSafe\API\Normalizer\CompletedFreshInvestigationSearchCriteriaNormalizer::class => new \CreditSafe\API\Normalizer\CompletedFreshInvestigationSearchCriteriaNormalizer(),
            \CreditSafe\API\Normalizer\CompletedFreshInvestigationSearchCriteriaAddressNormalizer::class => new \CreditSafe\API\Normalizer\CompletedFreshInvestigationSearchCriteriaAddressNormalizer(),
            \CreditSafe\API\Normalizer\CompletedFreshInvestigationSectionsItemAnyOfNormalizer::class => new \CreditSafe\API\Normalizer\CompletedFreshInvestigationSectionsItemAnyOfNormalizer(),
            \CreditSafe\API\Normalizer\CompletedFreshInvestigationStatusNormalizer::class => new \CreditSafe\API\Normalizer\CompletedFreshInvestigationStatusNormalizer(),
            \CreditSafe\API\Normalizer\SubmittedFreshInvestigationRepsonseNormalizer::class => new \CreditSafe\API\Normalizer\SubmittedFreshInvestigationRepsonseNormalizer(),
            \CreditSafe\API\Normalizer\AccessCountriesResponseNormalizer::class => new \CreditSafe\API\Normalizer\AccessCountriesResponseNormalizer(),
            \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemNormalizer::class => new \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemNormalizer(),
            \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItemNormalizer::class => new \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItemNormalizer(),
            \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItemNormalizer::class => new \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItemNormalizer(),
            \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItemNormalizer::class => new \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItemNormalizer(),
            \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItemNormalizer::class => new \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItemNormalizer(),
            \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItemNormalizer::class => new \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItemNormalizer(),
            \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItemNormalizer::class => new \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItemNormalizer(),
            \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItemNormalizer::class => new \CreditSafe\API\Normalizer\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItemNormalizer(),
            \CreditSafe\API\Normalizer\PagingNormalizer::class => new \CreditSafe\API\Normalizer\PagingNormalizer(),
            \CreditSafe\API\Normalizer\UserDetailsNormalizer::class => new \CreditSafe\API\Normalizer\UserDetailsNormalizer(),
            \CreditSafe\API\Normalizer\CompanyNormalizer::class => new \CreditSafe\API\Normalizer\CompanyNormalizer(),
            \CreditSafe\API\Normalizer\EventNormalizer::class => new \CreditSafe\API\Normalizer\EventNormalizer(),
            \CreditSafe\API\Normalizer\NotificationEventNormalizer::class => new \CreditSafe\API\Normalizer\NotificationEventNormalizer(),
            \CreditSafe\API\Normalizer\CompanyEventsResponseNormalizer::class => new \CreditSafe\API\Normalizer\CompanyEventsResponseNormalizer(),
            \CreditSafe\API\Normalizer\NotificationEventsResponseNormalizer::class => new \CreditSafe\API\Normalizer\NotificationEventsResponseNormalizer(),
            \CreditSafe\API\Normalizer\PortfolioRequestNormalizer::class => new \CreditSafe\API\Normalizer\PortfolioRequestNormalizer(),
            \CreditSafe\API\Normalizer\PortfolioRequestEmailsNormalizer::class => new \CreditSafe\API\Normalizer\PortfolioRequestEmailsNormalizer(),
            \CreditSafe\API\Normalizer\EventRulesResponseNormalizer::class => new \CreditSafe\API\Normalizer\EventRulesResponseNormalizer(),
            \CreditSafe\API\Normalizer\GuidSuccessResponseNormalizer::class => new \CreditSafe\API\Normalizer\GuidSuccessResponseNormalizer(),
            \CreditSafe\API\Normalizer\GuidSuccessResponseGUIDListItemNormalizer::class => new \CreditSafe\API\Normalizer\GuidSuccessResponseGUIDListItemNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodyNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodyNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItemNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItemNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsNameNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsNameNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItemNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItemNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItemNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItemNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflictsNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflictsNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItemNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItemNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItemNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItemNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemNameNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemNameNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItemNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItemNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsNameNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsNameNormalizer(),
            \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFileNormalizer::class => new \CreditSafe\API\Normalizer\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFileNormalizer(),
            \CreditSafe\API\Normalizer\CompliancePreDefinedSearchesNormalizer::class => new \CreditSafe\API\Normalizer\CompliancePreDefinedSearchesNormalizer(),
            \CreditSafe\API\Normalizer\CompliancePreDefinedSearchesPredefinedSearchesItemNormalizer::class => new \CreditSafe\API\Normalizer\CompliancePreDefinedSearchesPredefinedSearchesItemNormalizer(),
            \CreditSafe\API\Normalizer\BankMatchVerifyNormalizer::class => new \CreditSafe\API\Normalizer\BankMatchVerifyNormalizer(),
            \CreditSafe\API\Normalizer\BankMatchValidateNormalizer::class => new \CreditSafe\API\Normalizer\BankMatchValidateNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPostBodyNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPostBodyNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPostBodyEmailsNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPostBodyEmailsNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdPatchBodyNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdPatchBodyNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdPatchBodyEmailsItemNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdPatchBodyEmailsItemNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItemNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdEventRulesCountryCodePutBodyItemNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdImportPostBodyNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdImportPostBodyNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdSyncPostBodyNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdSyncPostBodyNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBodyNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBodyNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesPostBodyNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesPostBodyNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItemNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesCopyPostBodyCompaniesItemNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItemNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItemNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItemNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItemNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBodyNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdCompaniesIdPatchBodyNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyNormalizer(),
            \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItemNormalizer::class => new \CreditSafe\API\Normalizer\MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItemNormalizer(),
            \CreditSafe\API\Runtime\Normalizer\ReferenceNormalizer::class => new \CreditSafe\API\Runtime\Normalizer\ReferenceNormalizer(),
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