<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Traits\Preserve;

/**
 * @property string|null $email
 */
trait EmailTrait
{
    public function setEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

}
