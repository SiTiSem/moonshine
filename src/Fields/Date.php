<?php

declare(strict_types=1);

namespace Leeto\MoonShine\Fields;

use Leeto\MoonShine\Traits\Fields\DateTrait;
use Leeto\MoonShine\Traits\Fields\WithMask;

class Date extends Field
{
    use DateTrait;
    use WithMask;

    protected static string $component = 'DateField';

    protected string $format = 'Y-m-d H:i:s';
}
