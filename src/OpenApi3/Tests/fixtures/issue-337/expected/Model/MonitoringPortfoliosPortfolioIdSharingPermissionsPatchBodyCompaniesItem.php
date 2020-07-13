<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdSharingPermissionsPatchBodyCompaniesItem
{
    /**
     * A creditsafe user id.
     *
     * @var string
     */
    protected $csUserId;
    /**
     * Comma separated permissions. "View" permission gets automatically added to the user if "Add", "Edit", "Remove" permissions are set.
     *
     * @var string
     */
    protected $permissions;
    /**
     * A creditsafe user id.
     *
     * @return string
     */
    public function getCsUserId() : string
    {
        return $this->csUserId;
    }
    /**
     * A creditsafe user id.
     *
     * @param string $csUserId
     *
     * @return self
     */
    public function setCsUserId(string $csUserId) : self
    {
        $this->csUserId = $csUserId;
        return $this;
    }
    /**
     * Comma separated permissions. "View" permission gets automatically added to the user if "Add", "Edit", "Remove" permissions are set.
     *
     * @return string
     */
    public function getPermissions() : string
    {
        return $this->permissions;
    }
    /**
     * Comma separated permissions. "View" permission gets automatically added to the user if "Add", "Edit", "Remove" permissions are set.
     *
     * @param string $permissions
     *
     * @return self
     */
    public function setPermissions(string $permissions) : self
    {
        $this->permissions = $permissions;
        return $this;
    }
}