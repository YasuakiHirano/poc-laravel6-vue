<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * Class Gender
 * @package App\Enums
 */
final class Gender extends Enum implements LocalizedEnum
{
    /** @var int 男性 */
    const male = 1;
    /** @var int 女性 */
    const female = 2;
    /** @var int その他 */
    const other = 9;
}
