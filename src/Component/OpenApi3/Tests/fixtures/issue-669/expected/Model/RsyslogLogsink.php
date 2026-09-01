<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class RsyslogLogsink implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * DNS name or IPv4 address of the rsyslog server
     *
     * @var string
     */
    public string $server;
    /**
     * The internal port on which the rsyslog server is listening
     *
     * @var int
     */
    public int $port;
    /**
     * Use TLS (as the messages are not filtered and may contain sensitive information, it is highly recommended to set this to true if the remote server supports it)
     *
     * @var bool
     */
    public bool $tls;
    /**
     * Message format used by the server, this can be either rfc3164 (the old BSD style message format), `rfc5424` (current syslog message format) or custom
     *
     * @var string
     */
    public string $format;
    /**
     * Conditional (required if `format` == `custom`).
     * 
     * Syslog log line template for a custom format, supporting limited rsyslog style templating (using `%tag%`). Supported tags are: `HOSTNAME`, `app-name`, `msg`, `msgid`, `pri`, `procid`, `structured-data`, `timestamp` and `timestamp:::date-rfc3339`.
     * 
     * ---
     * **Datadog Integration Example for Non-Mongo clusters**:
     * ```
     * DD_KEY <%pri%>1 %timestamp:::date-rfc3339% %HOSTNAME%.DB_NAME %app-name% - - - %msg%
     * ```
     * - Replace `DD_KEY` with your actual Datadog API key.
     * - Replace `DB_NAME` with the actual name of your database cluster.
     * - Configure the Server:
     *   - US Region: Use `intake.logs.datadoghq.com`
     *   - EU Region: Use `tcp-intake.logs.datadoghq.eu`
     * - Configure the Port:
     *   - US Region: Use port `10516`
     *   - EU Region: Use port `443`
     * - Enable TLS:
     *   - Ensure the TLS checkbox is enabled.
     * - Note: This configuration applies to **non-Mongo clusters only**. For **Mongo clusters**, use the `datadog_logsink` integration instead.
     * 
     *
     * @var string
     */
    public string $logline;
    /**
     * content of the structured data block of rfc5424 message
     *
     * @var string
     */
    public string $sd;
    /**
     * PEM encoded CA certificate
     *
     * @var string
     */
    public string $ca;
    /**
     * (PEM format) client key if the server requires client authentication
     *
     * @var string
     */
    public string $key;
    /**
     * (PEM format) client cert to use
     *
     * @var string
     */
    public string $cert;
    public function definedProperties(): array
    {
        return ['server' => 'server', 'port' => 'port', 'tls' => 'tls', 'format' => 'format', 'logline' => 'logline', 'sd' => 'sd', 'ca' => 'ca', 'key' => 'key', 'cert' => 'cert'];
    }
}