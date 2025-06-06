<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Interfaces;

interface EmailInterface
{
    public function getEmail(): ?string;
}
