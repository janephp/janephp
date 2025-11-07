<?php

namespace Jane\Generated\DigitalOcean\Model;

class RsyslogLogsink extends \ArrayObject
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
     * DNS name or IPv4 address of the rsyslog server
     *
     * @var string
     */
    protected $server;
    /**
     * The internal port on which the rsyslog server is listening
     *
     * @var int
     */
    protected $port;
    /**
     * Use TLS (as the messages are not filtered and may contain sensitive information, it is highly recommended to set this to true if the remote server supports it)
     *
     * @var bool
     */
    protected $tls;
    /**
     * Message format used by the server, this can be either rfc3164 (the old BSD style message format), `rfc5424` (current syslog message format) or custom
     *
     * @var string
     */
    protected $format;
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
    protected $logline;
    /**
     * content of the structured data block of rfc5424 message
     *
     * @var string
     */
    protected $sd;
    /**
     * PEM encoded CA certificate
     *
     * @var string
     */
    protected $ca;
    /**
     * (PEM format) client key if the server requires client authentication
     *
     * @var string
     */
    protected $key;
    /**
     * (PEM format) client cert to use
     *
     * @var string
     */
    protected $cert;
    /**
     * DNS name or IPv4 address of the rsyslog server
     *
     * @return string
     */
    public function getServer(): string
    {
        return $this->server;
    }
    /**
     * DNS name or IPv4 address of the rsyslog server
     *
     * @param string $server
     *
     * @return self
     */
    public function setServer(string $server): self
    {
        $this->initialized['server'] = true;
        $this->server = $server;
        return $this;
    }
    /**
     * The internal port on which the rsyslog server is listening
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * The internal port on which the rsyslog server is listening
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port): self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
    /**
     * Use TLS (as the messages are not filtered and may contain sensitive information, it is highly recommended to set this to true if the remote server supports it)
     *
     * @return bool
     */
    public function getTls(): bool
    {
        return $this->tls;
    }
    /**
     * Use TLS (as the messages are not filtered and may contain sensitive information, it is highly recommended to set this to true if the remote server supports it)
     *
     * @param bool $tls
     *
     * @return self
     */
    public function setTls(bool $tls): self
    {
        $this->initialized['tls'] = true;
        $this->tls = $tls;
        return $this;
    }
    /**
     * Message format used by the server, this can be either rfc3164 (the old BSD style message format), `rfc5424` (current syslog message format) or custom
     *
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }
    /**
     * Message format used by the server, this can be either rfc3164 (the old BSD style message format), `rfc5424` (current syslog message format) or custom
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
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
     * @return string
     */
    public function getLogline(): string
    {
        return $this->logline;
    }
    /**
    * Conditional (required if `format` == `custom`).
    
    Syslog log line template for a custom format, supporting limited rsyslog style templating (using `%tag%`). Supported tags are: `HOSTNAME`, `app-name`, `msg`, `msgid`, `pri`, `procid`, `structured-data`, `timestamp` and `timestamp:::date-rfc3339`.
    
    ---
    **Datadog Integration Example for Non-Mongo clusters**:
    ```
    DD_KEY <%pri%>1 %timestamp:::date-rfc3339% %HOSTNAME%.DB_NAME %app-name% - - - %msg%
    ```
    - Replace `DD_KEY` with your actual Datadog API key.
    - Replace `DB_NAME` with the actual name of your database cluster.
    - Configure the Server:
     - US Region: Use `intake.logs.datadoghq.com`
     - EU Region: Use `tcp-intake.logs.datadoghq.eu`
    - Configure the Port:
     - US Region: Use port `10516`
     - EU Region: Use port `443`
    - Enable TLS:
     - Ensure the TLS checkbox is enabled.
    - Note: This configuration applies to **non-Mongo clusters only**. For **Mongo clusters**, use the `datadog_logsink` integration instead.
    
    *
    * @param string $logline
    *
    * @return self
    */
    public function setLogline(string $logline): self
    {
        $this->initialized['logline'] = true;
        $this->logline = $logline;
        return $this;
    }
    /**
     * content of the structured data block of rfc5424 message
     *
     * @return string
     */
    public function getSd(): string
    {
        return $this->sd;
    }
    /**
     * content of the structured data block of rfc5424 message
     *
     * @param string $sd
     *
     * @return self
     */
    public function setSd(string $sd): self
    {
        $this->initialized['sd'] = true;
        $this->sd = $sd;
        return $this;
    }
    /**
     * PEM encoded CA certificate
     *
     * @return string
     */
    public function getCa(): string
    {
        return $this->ca;
    }
    /**
     * PEM encoded CA certificate
     *
     * @param string $ca
     *
     * @return self
     */
    public function setCa(string $ca): self
    {
        $this->initialized['ca'] = true;
        $this->ca = $ca;
        return $this;
    }
    /**
     * (PEM format) client key if the server requires client authentication
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * (PEM format) client key if the server requires client authentication
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * (PEM format) client cert to use
     *
     * @return string
     */
    public function getCert(): string
    {
        return $this->cert;
    }
    /**
     * (PEM format) client cert to use
     *
     * @param string $cert
     *
     * @return self
     */
    public function setCert(string $cert): self
    {
        $this->initialized['cert'] = true;
        $this->cert = $cert;
        return $this;
    }
}