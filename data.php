<?php

return [
    [
        'title' => 'Personal data',
        'destination' => 'personal',
        'data' => [
            [
                'type' => 'name',
                'label' => 'Name',
                'data' => 'Stukalo Anton'
            ]
        ]
    ],
    [
        'title' => 'Contacts',
        'destination' => 'contacts',
        'data' => [
            [
                'type' => 'phone',
                'label' => 'Phone',
                'data' => '+380637445776'
            ],
            [
                'type' => 'email',
                'label' => 'E-mail',
                'data' => 'wrugleys@yandex.ru'
            ],
            [
                'type' => 'Telegram',
                'label' => 'telegram',
                'data' => '@wrugleys'
            ],
            [
                'type' => 'address',
                'label' => 'Address',
                'data' => 'Kiev, borshagivska str., 144'
            ]
        ]
    ],
    [
        'title' => 'Objective',
        'destination' => 'objective',
        'data' => [
            [
                'type' => 'text',
                'data' => 'Start a junior PHP developer career in Company X '

            ]
        ]
    ],
    [
        'title' => 'Summary',
        'destination' => 'summary',
        'data' => [
            [
                'type' => 'text',
                'data' => 'Starting learn PHP, JS, CSS, HTML, AJAX, Jquvery'
            ]
        ]
    ],
    [
        'title' => 'Skills',
        'destination' => 'skills',
        'data' => [
            [
                'type' => 'item',
                'label' => 'Programming languages',
                'data' => [
                    'PHP',
                    'JavaScript'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'Databases',
                'data' => [
                    'MySQL'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'Frontend',
                'data' => [
                    'HTML',
                    'CSS'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'Servers',
                'data' => [
                    'Apache'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'Frameworks',
                'data' => [
                    'Yii 2'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'OS',
                'data' => [
                    'Ubuntu',
                    'Windows'
                ]
            ],
        ],
    ],
    [
        'title' => 'Experience',
        'destination' => 'experience',
        'data' => [
            [
                'type' => 'list',
                'period' => 'August 2016 - December 2016',
                'company' => 'Kyivstar',
                'position' => 'CallCentre',
                'role' => 'Consultant',
            ]
        ]

    ],
    [
        'title' => 'Education',
        'destination' => 'education',
        'data' => [
            [
                'type' => 'list',
                'period' => '2014 - 2018',
                'institution' => 'NTUU KPI',
                'specialty' => 'Integriren technologis machinenbaum'
            ],
            [
                'type' => 'list',
                'period' => 'February 2018 - May 2018',
                'institution' => 'Brain Academy',
                'specialty' => 'PHP developer'
            ]
        ]
    ],
    [
        'title' => 'Additional information',
        'destination' => 'additional',
        'data' => [
            [
                'type' => 'skill',
                'label' => 'Languages',
                'data' =>
                    'English, Germany'


            ]
        ]
    ]

];
