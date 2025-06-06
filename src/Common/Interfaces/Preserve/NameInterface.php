<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Interfaces\Preserve;

interface NameInterface
{
    /**
     * @return static
     */
    public function setName(?string $name);
}
