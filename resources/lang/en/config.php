<?php

return [
    'mode'           => [
        'label'        => 'Mode',
        'instructions' => 'What kind of input would you like to display?',
        'option'       => [
            'switch'   => 'Switch',
            'checkbox' => 'Checkbox'
        ]
    ],
    'checkbox_label' => [
        'label'        => 'Checkbox Label',
        'instructions' => 'Define the checkbox label if using the checkbox mode.'
    ],
    'on_text'        => [
        'label'        => '"On" Text',
        'instructions' => 'This text will be used for the switch\'s "on" state.',
        'placeholder'  => 'On'
    ],
    'on_color'       => [
        'label'        => '"On" Color',
        'instructions' => 'This color will be used for the switch\'s "on" state.',
        'option'       => [
            'green'  => 'Green',
            'blue'   => 'Blue',
            'orange' => 'Orange',
            'red'    => 'Red',
            'gray'   => 'Gray'
        ]
    ],
    'off_text'       => [
        'label'        => '"Off" Text',
        'instructions' => 'This text will be used for the switch\'s "off" state.',
        'placeholder'  => 'Off'
    ],
    'off_color'      => [
        'label'        => '"Off" Color',
        'instructions' => 'This color will be used for the switch\'s "off" state.',
        'option'       => [
            'green'  => 'Green',
            'blue'   => 'Blue',
            'orange' => 'Orange',
            'red'    => 'Red',
            'gray'   => 'Gray'
        ]
    ],
    'default_value'  => [
        'label'        => 'Default State',
        'instructions' => 'What is the default state of the switch?',
        'option'       => [
            'on'  => 'ON',
            'off' => 'OFF'
        ]
    ]
];
