<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

/**
 * Enum representing the status of a series.
 *
 * @package App\Enums
 */
enum StatusSeries: string implements HasLabel
{
    case Ongoing = 'ongoing';
    case Completed = 'completed';
    case Hiatus = 'hiatus';
    case Unknown = 'unknown';
    case Upcoming = 'upcoming';
    case Announced = 'announced';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Ongoing => 'Ongoing',
            self::Completed => 'Completed',
            self::Hiatus => 'Hiatus',
            self::Unknown => 'Unknown',
            self::Upcoming => 'Upcoming',
            self::Announced => 'Announced',
        };
    }

    public function findLabel(string $label): ?self
    {
        return match ($label) {
            'Ongoing' => self::Ongoing,
            'Completed' => self::Completed,
            'Hiatus' => self::Hiatus,
            'Unknown' => self::Unknown,
            'Upcoming' => self::Upcoming,
            'Announced' => self::Announced,
            default => null,
        };
    }
}
