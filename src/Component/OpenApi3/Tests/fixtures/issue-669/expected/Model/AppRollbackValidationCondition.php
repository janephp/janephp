<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppRollbackValidationCondition extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A code identifier that represents the failing condition.
     * 
     * Failing conditions:
     *   - `incompatible_phase` - indicates that the deployment's phase is not suitable for rollback.
     *   - `incompatible_result` - indicates that the deployment's result is not suitable for rollback.
     *   - `exceeded_revision_limit` - indicates that the app has exceeded the rollback revision limits for its tier.
     *   - `app_pinned` - indicates that there is already a rollback in progress and the app is pinned.
     *   - `database_config_conflict` - indicates that the deployment's database config is different than the current config.
     *   - `region_conflict` - indicates that the deployment's region differs from the current app region.
     * 
     * Warning conditions:
     *   - `static_site_requires_rebuild` - indicates that the deployment contains at least one static site that will require a rebuild.
     *   - `image_source_missing_digest` - indicates that the deployment contains at least one component with an image source that is missing a digest.
     * 
     *
     * @var string
     */
    protected $code;
    /**
     * A human-readable message describing the failing condition.
     *
     * @var string
     */
    protected $message;
    /**
     * @var list<string>
     */
    protected $components;
    /**
     * A code identifier that represents the failing condition.
     * 
     * Failing conditions:
     *   - `incompatible_phase` - indicates that the deployment's phase is not suitable for rollback.
     *   - `incompatible_result` - indicates that the deployment's result is not suitable for rollback.
     *   - `exceeded_revision_limit` - indicates that the app has exceeded the rollback revision limits for its tier.
     *   - `app_pinned` - indicates that there is already a rollback in progress and the app is pinned.
     *   - `database_config_conflict` - indicates that the deployment's database config is different than the current config.
     *   - `region_conflict` - indicates that the deployment's region differs from the current app region.
     * 
     * Warning conditions:
     *   - `static_site_requires_rebuild` - indicates that the deployment contains at least one static site that will require a rebuild.
     *   - `image_source_missing_digest` - indicates that the deployment contains at least one component with an image source that is missing a digest.
     * 
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
    * A code identifier that represents the failing condition.
    
    Failing conditions:
     - `incompatible_phase` - indicates that the deployment's phase is not suitable for rollback.
     - `incompatible_result` - indicates that the deployment's result is not suitable for rollback.
     - `exceeded_revision_limit` - indicates that the app has exceeded the rollback revision limits for its tier.
     - `app_pinned` - indicates that there is already a rollback in progress and the app is pinned.
     - `database_config_conflict` - indicates that the deployment's database config is different than the current config.
     - `region_conflict` - indicates that the deployment's region differs from the current app region.
    
    Warning conditions:
     - `static_site_requires_rebuild` - indicates that the deployment contains at least one static site that will require a rebuild.
     - `image_source_missing_digest` - indicates that the deployment contains at least one component with an image source that is missing a digest.
    
    *
    * @param string $code
    *
    * @return self
    */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * A human-readable message describing the failing condition.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * A human-readable message describing the failing condition.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getComponents(): array
    {
        return $this->components;
    }
    /**
     * @param list<string> $components
     *
     * @return self
     */
    public function setComponents(array $components): self
    {
        $this->initialized['components'] = true;
        $this->components = $components;
        return $this;
    }
}