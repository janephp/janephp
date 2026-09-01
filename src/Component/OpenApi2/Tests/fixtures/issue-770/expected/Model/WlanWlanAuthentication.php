<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanAuthentication
{
    /**
     * Indicates whether authentication messages were sent through the controller or not
     *
     * @var bool
     */
    public bool $throughController;
    /**
     * @var bool
     */
    public bool $realmBasedAuth;
    /**
     * Identifier of the authentication service or profile. At least one ID or name or authenticationOption is required in the request.
     *
     * @var string
     */
    public string $id;
    /**
     * Name of the authentication service or profile. At least one ID or name or authenticationOption is required in the request. Or could input the 'Always Accept' or 'Local DB'.
     *
     * @var string
     */
    public string $name;
    /**
     * Option of the authentication service or profile, At least one ID or name or authenticationOption is required in the request. This only applies to hotspot and guest WLANs.
     *
     * @var string
     */
    public string $authenticationOption;
    /**
     * RFC5580 location delivery support
     *
     * @var bool
     */
    public bool $locationDeliveryEnabled;
    /**
     * Identifier of the backup authentication service or profile. At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service.
     *
     * @var string
     */
    public string $backupAuthenticationId;
    /**
     * Name of the backup authentication service or profile. At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service. Or could input the 'Always Accept'.
     *
     * @var string
     */
    public string $backupAuthenticationName;
    /**
     * Option of the backup authentication service or profile, At least one backupAuthenticationId or backupAuthenticationName or backupAuthenticationOption is required in the request when setting backup authentication service. This only applies to hotspot WLANs.
     *
     * @var string
     */
    public string $backupAuthenticationOption;
}