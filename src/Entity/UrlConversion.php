<?php

namespace App\Entity;

use App\Repository\UrlConversionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UrlConversionRepository::class)
 */
class UrlConversion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LongUrl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ShortUrl;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreationTime;

    /**
     * @ORM\Column(type="integer")
     */
    private $Redirections;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CreatorIP;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $LastRedirectIP;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $BackHalf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLongUrl(): ?string
    {
        return $this->LongUrl;
    }

    public function setLongUrl(string $LongUrl): self
    {
        $this->LongUrl = $LongUrl;

        return $this;
    }

    public function getShortUrl(): ?string
    {
        return $this->ShortUrl;
    }

    public function setShortUrl(string $ShortUrl): self
    {
        $this->ShortUrl = $ShortUrl;

        return $this;
    }

    public function getCreationTime(): ?\DateTimeInterface
    {
        return $this->CreationTime;
    }

    public function setCreationTime(\DateTimeInterface $CreationTime): self
    {
        $this->CreationTime = $CreationTime;

        return $this;
    }

    public function getRedirections(): ?int
    {
        return $this->Redirections;
    }

    public function setRedirections(int $Redirections): self
    {
        $this->Redirections = $Redirections;

        return $this;
    }

    public function getCreatorIP(): ?string
    {
        return $this->CreatorIP;
    }

    public function setCreatorIP(?string $CreatorIP): self
    {
        $this->CreatorIP = $CreatorIP;

        return $this;
    }

    public function getLastRedirectIP(): ?string
    {
        return $this->LastRedirectIP;
    }

    public function setLastRedirectIP(?string $LastRedirectIP): self
    {
        $this->LastRedirectIP = $LastRedirectIP;

        return $this;
    }

    public function getBackHalf(): ?string
    {
        return $this->BackHalf;
    }

    public function setBackHalf(?string $BackHalf): self
    {
        $this->BackHalf = $BackHalf;

        return $this;
    }
}
