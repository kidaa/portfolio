<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/mary-ann.zykin/Documents/--Personal Portfolio Website/portfolio/wp-content/plugins/gantry5/engines/nucleus/particles/assets.yaml',
    'modified' => 1451064129,
    'data' => [
        'name' => 'Custom CSS / JS',
        'description' => 'Configure custom CSS and Javascript.',
        'type' => 'atom',
        'icon' => 'fa-file-code-o',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable CSS/JS particles.',
                    'default' => true
                ],
                'css' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'CSS',
                    'description' => 'Add remove or modify custom CSS assets.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.name' => [
                            'type' => 'input.text',
                            'label' => 'Name',
                            'skip' => true
                        ],
                        '.location' => [
                            'type' => 'input.filepicker',
                            'label' => 'File Location',
                            'icon' => 'fa-file-code-o',
                            'placeholder' => 'http://cdn1.remote/file.css',
                            'filter' => '\\.(css|less|scss|sass)$',
                            'root' => 'gantry-assets://'
                        ],
                        '.inline' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Inline CSS',
                            'description' => 'Adds inline CSS for quick snippets.'
                        ],
                        '_info' => [
                            'type' => 'separator.note',
                            'class' => 'alert alert-info',
                            'content' => 'Please note that inline CSS code should be stripped out of &lt;style&gt;&lt;/style&gt; tags as Atom is automatically adding them.'
                        ],
                        '.extra' => [
                            'type' => 'collection.keyvalue',
                            'label' => 'Tag attributes',
                            'key_placeholder' => 'Key (data-*, style, ...)',
                            'value_placeholder' => 'Value',
                            'exclude' => [
                                0 => 'rel',
                                1 => 'href',
                                2 => 'type'
                            ]
                        ]
                    ]
                ],
                'javascript' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Javascript',
                    'description' => 'Add remove or modify custom Javascript assets.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.name' => [
                            'type' => 'input.text',
                            'label' => 'Name',
                            'skip' => true
                        ],
                        '.location' => [
                            'type' => 'input.filepicker',
                            'label' => 'File Location',
                            'icon' => 'fa-file-code-o',
                            'placeholder' => 'http://cdn1.remote/file.js',
                            'filter' => '\\.(jsx?|coffee)$',
                            'root' => 'gantry-assets://'
                        ],
                        '.inline' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Inline JavaScript',
                            'description' => 'Adds inline JavaScript for quick snippets.'
                        ],
                        '_info' => [
                            'type' => 'separator.note',
                            'class' => 'alert alert-info',
                            'content' => 'Please note that inline JavaScript code should be stripped out of &lt;script&gt;&lt;/script&gt; tags as Atom is automatically adding them.'
                        ],
                        '.in_footer' => [
                            'type' => 'input.checkbox',
                            'label' => 'Before </body>',
                            'description' => 'Whether you want the script to load at the end of the body tag or inside head',
                            'default' => false
                        ],
                        '.extra' => [
                            'type' => 'collection.keyvalue',
                            'label' => 'Tag attributes',
                            'exclude' => [
                                0 => 'src',
                                1 => 'type'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
