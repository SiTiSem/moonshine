<?php

declare(strict_types=1);

namespace Leeto\MoonShine\Traits;

use Illuminate\Contracts\View\View;

trait WithIcon
{
    protected string|null $icon = null;

    public function icon(string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function iconValue(): string
    {
        return $this->icon ?? 'app';
    }

    public function getIcon(
        string $size = '8',
        string $color = '',
        string $class = ''
    ): View {
        return view("moonshine::shared.icons.{$this->iconValue()}", compact('size', 'color', 'class'));
    }
}
