<?php

return [


    // Enable Optional Roles Gui
    'Show'               => env('COMINGSOON_SHOW', true),

    // Enable `auth` middleware
    'Edit'           => env('COMINGSOON_EDIT', false),
    
    'bladeExtended'                 => env('COMINGSOON_GUI_BLADE_EXTENDED', 'layouts.app'),
];
