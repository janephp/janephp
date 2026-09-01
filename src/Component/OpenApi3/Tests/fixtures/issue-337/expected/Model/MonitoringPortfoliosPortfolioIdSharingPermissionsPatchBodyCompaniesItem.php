<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A creditsafe user id.
     *
     * @var string
     */
    public string $csUserId;
    /**
     * Comma separated permissions. "View" permission gets automatically added to the user if "Add", "Edit", "Remove" permissions are set.
     *
     * @var string
     */
    public string $permissions;
    public function definedProperties(): array
    {
        return ['csUserId' => 'csUserId', 'permissions' => 'permissions'];
    }
}