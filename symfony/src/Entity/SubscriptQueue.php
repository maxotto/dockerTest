<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubscriptQueue
 *
 * @ORM\Table(name="subscript_queue", indexes={@ORM\Index(name="history_details_id", columns={"history_details_id"}), @ORM\Index(name="subscription_id", columns={"subscription_id"})})
 * @ORM\Entity
 */
class SubscriptQueue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="subscription_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $subscriptionId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="history_details_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $historyDetailsId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sent_time", type="datetime", nullable=false)
     */
    private $sentTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    public function setSubscriptionId(int $subscriptionId): self
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    public function getHistoryDetailsId(): ?int
    {
        return $this->historyDetailsId;
    }

    public function setHistoryDetailsId(int $historyDetailsId): self
    {
        $this->historyDetailsId = $historyDetailsId;

        return $this;
    }

    public function getSentTime(): ?\DateTimeInterface
    {
        return $this->sentTime;
    }

    public function setSentTime(\DateTimeInterface $sentTime): self
    {
        $this->sentTime = $sentTime;

        return $this;
    }


}
