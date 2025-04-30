<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardBookingPerevent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $address,
        public string $image,
        public int $capacity,
        public string $price,
        public string $type,
        public string $description,
        public string $rankingCategory,
        public int $guestsAmount,
        public int $rating,
        public int $eventDuration,
        public int $guestCapacity,
        public array $tags
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('components.card-booking-perevent');
    }
}
