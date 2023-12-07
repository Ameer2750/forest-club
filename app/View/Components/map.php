<?php

namespace App\View\Components;

use Illuminate\View\Component;

class map extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 17.461220917284052,
                    'lng' => 78.50484608465712
                ],
                 
                'draggable' => true
            ]
        ];
        return view('components.map', compact('initialMarkers'));
    }
}
