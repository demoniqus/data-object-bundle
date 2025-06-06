<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Traits;

/**
 * @property string|null $email
 */
trait EmailTrait
{
    public function getEmail(): ?string
    {
        return $this->email;
    }
}
