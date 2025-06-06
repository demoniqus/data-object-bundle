<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Interfaces\Preserve;

interface IdInterface
{
    /**
     * @return static
     */
    public function setId(int $id);
}
