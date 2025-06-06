<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Interfaces\Preserve;

interface EmailInterface
{
    /**
     * @return static
     */
    public function setEmail(?string $email);
}
