<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class InvoiceMessage
{
    /**
     * Unique ID for the message.
     *
     * @var int
     */
    protected $id;
    /**
     * Name of the user that created the message.
     *
     * @var string
     */
    protected $sentBy;
    /**
     * Email of the user that created the message.
     *
     * @var string
     */
    protected $sentByEmail;
    /**
     * Name of the user that the message was sent from.
     *
     * @var string
     */
    protected $sentFrom;
    /**
     * Email of the user that message was sent from.
     *
     * @var string
     */
    protected $sentFromEmail;
    /**
     * Array of invoice message recipients.
     *
     * @var InvoiceMessageRecipient[]
     */
    protected $recipients;
    /**
     * The message subject.
     *
     * @var string
     */
    protected $subject;
    /**
     * The message body.
     *
     * @var string
     */
    protected $body;
    /**
     * Whether to include a link to the client invoice in the message body. Not used when thank_you is true.
     *
     * @var bool
     */
    protected $includeLinkToClientInvoice;
    /**
     * Whether to attach the invoice PDF to the message email.
     *
     * @var bool
     */
    protected $attachPdf;
    /**
     * Whether to email a copy of the message to the current user.
     *
     * @var bool
     */
    protected $sendMeACopy;
    /**
     * Whether this is a thank you message.
     *
     * @var bool
     */
    protected $thankYou;
    /**
     * The type of invoice event that occurred with the message: send, close, draft, re-open, or view.
     *
     * @var string
     */
    protected $eventType;
    /**
     * Whether this is a reminder message.
     *
     * @var bool
     */
    protected $reminder;
    /**
     * The date the reminder email will be sent.
     *
     * @var \DateTime
     */
    protected $sendReminderOn;
    /**
     * Date and time the message was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Date and time the message was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique ID for the message.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique ID for the message.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Name of the user that created the message.
     *
     * @return string
     */
    public function getSentBy() : string
    {
        return $this->sentBy;
    }
    /**
     * Name of the user that created the message.
     *
     * @param string $sentBy
     *
     * @return self
     */
    public function setSentBy(string $sentBy) : self
    {
        $this->sentBy = $sentBy;
        return $this;
    }
    /**
     * Email of the user that created the message.
     *
     * @return string
     */
    public function getSentByEmail() : string
    {
        return $this->sentByEmail;
    }
    /**
     * Email of the user that created the message.
     *
     * @param string $sentByEmail
     *
     * @return self
     */
    public function setSentByEmail(string $sentByEmail) : self
    {
        $this->sentByEmail = $sentByEmail;
        return $this;
    }
    /**
     * Name of the user that the message was sent from.
     *
     * @return string
     */
    public function getSentFrom() : string
    {
        return $this->sentFrom;
    }
    /**
     * Name of the user that the message was sent from.
     *
     * @param string $sentFrom
     *
     * @return self
     */
    public function setSentFrom(string $sentFrom) : self
    {
        $this->sentFrom = $sentFrom;
        return $this;
    }
    /**
     * Email of the user that message was sent from.
     *
     * @return string
     */
    public function getSentFromEmail() : string
    {
        return $this->sentFromEmail;
    }
    /**
     * Email of the user that message was sent from.
     *
     * @param string $sentFromEmail
     *
     * @return self
     */
    public function setSentFromEmail(string $sentFromEmail) : self
    {
        $this->sentFromEmail = $sentFromEmail;
        return $this;
    }
    /**
     * Array of invoice message recipients.
     *
     * @return InvoiceMessageRecipient[]
     */
    public function getRecipients() : array
    {
        return $this->recipients;
    }
    /**
     * Array of invoice message recipients.
     *
     * @param InvoiceMessageRecipient[] $recipients
     *
     * @return self
     */
    public function setRecipients(array $recipients) : self
    {
        $this->recipients = $recipients;
        return $this;
    }
    /**
     * The message subject.
     *
     * @return string
     */
    public function getSubject() : string
    {
        return $this->subject;
    }
    /**
     * The message subject.
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject) : self
    {
        $this->subject = $subject;
        return $this;
    }
    /**
     * The message body.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * The message body.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * Whether to include a link to the client invoice in the message body. Not used when thank_you is true.
     *
     * @return bool
     */
    public function getIncludeLinkToClientInvoice() : bool
    {
        return $this->includeLinkToClientInvoice;
    }
    /**
     * Whether to include a link to the client invoice in the message body. Not used when thank_you is true.
     *
     * @param bool $includeLinkToClientInvoice
     *
     * @return self
     */
    public function setIncludeLinkToClientInvoice(bool $includeLinkToClientInvoice) : self
    {
        $this->includeLinkToClientInvoice = $includeLinkToClientInvoice;
        return $this;
    }
    /**
     * Whether to attach the invoice PDF to the message email.
     *
     * @return bool
     */
    public function getAttachPdf() : bool
    {
        return $this->attachPdf;
    }
    /**
     * Whether to attach the invoice PDF to the message email.
     *
     * @param bool $attachPdf
     *
     * @return self
     */
    public function setAttachPdf(bool $attachPdf) : self
    {
        $this->attachPdf = $attachPdf;
        return $this;
    }
    /**
     * Whether to email a copy of the message to the current user.
     *
     * @return bool
     */
    public function getSendMeACopy() : bool
    {
        return $this->sendMeACopy;
    }
    /**
     * Whether to email a copy of the message to the current user.
     *
     * @param bool $sendMeACopy
     *
     * @return self
     */
    public function setSendMeACopy(bool $sendMeACopy) : self
    {
        $this->sendMeACopy = $sendMeACopy;
        return $this;
    }
    /**
     * Whether this is a thank you message.
     *
     * @return bool
     */
    public function getThankYou() : bool
    {
        return $this->thankYou;
    }
    /**
     * Whether this is a thank you message.
     *
     * @param bool $thankYou
     *
     * @return self
     */
    public function setThankYou(bool $thankYou) : self
    {
        $this->thankYou = $thankYou;
        return $this;
    }
    /**
     * The type of invoice event that occurred with the message: send, close, draft, re-open, or view.
     *
     * @return string
     */
    public function getEventType() : string
    {
        return $this->eventType;
    }
    /**
     * The type of invoice event that occurred with the message: send, close, draft, re-open, or view.
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType) : self
    {
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * Whether this is a reminder message.
     *
     * @return bool
     */
    public function getReminder() : bool
    {
        return $this->reminder;
    }
    /**
     * Whether this is a reminder message.
     *
     * @param bool $reminder
     *
     * @return self
     */
    public function setReminder(bool $reminder) : self
    {
        $this->reminder = $reminder;
        return $this;
    }
    /**
     * The date the reminder email will be sent.
     *
     * @return \DateTime
     */
    public function getSendReminderOn() : \DateTime
    {
        return $this->sendReminderOn;
    }
    /**
     * The date the reminder email will be sent.
     *
     * @param \DateTime $sendReminderOn
     *
     * @return self
     */
    public function setSendReminderOn(\DateTime $sendReminderOn) : self
    {
        $this->sendReminderOn = $sendReminderOn;
        return $this;
    }
    /**
     * Date and time the message was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Date and time the message was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Date and time the message was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Date and time the message was last updated.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}