<?php

return [
    'upgrader:upgrade' => [
        'class' => \ElementareTeilchen\Upgrader\Command\UpgradeCommand::class,
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
];
