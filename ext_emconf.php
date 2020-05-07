<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "upgrader".
 *
 * Auto generated 07-05-2020 14:32
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Upgrader',
  'description' => 'Run upgrade wizards for multiple TYPO3 versions at once',
  'category' => 'cli',
  'author' => 'Franz Kugelmann',
  'author_email' => 'franz.kugelmann@elementare-teilchen.de',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearcacheonload' => 0,
  'version' => '0.1.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '10.4.0-10.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:4:{s:9:"README.md";s:4:"45a9";s:13:"composer.json";s:4:"8679";s:12:"ext_icon.png";s:4:"f40b";s:36:"Resources/Public/Icons/Extension.png";s:4:"f40b";}',
);

