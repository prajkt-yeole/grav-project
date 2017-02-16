<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp-7/htdocs/grav-project/user/themes/cerium/blueprints.yaml',
    'modified' => 1487220707,
    'data' => [
        'name' => 'Cerium',
        'version' => '0.1.0',
        'description' => 'HTML theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Prajkt Yeole',
            'email' => 'prajktyeole@gmail.com'
        ],
        'homepage' => 'https://github.com/prajkt-yeole/grav-theme-cerium',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/prajkt-yeole/grav-theme-cerium/issues',
        'readme' => 'https://github.com/prajkt-yeole/grav-theme-cerium/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
