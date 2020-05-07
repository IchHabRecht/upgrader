# TYPO3 Extension upgrader

Run upgrade wizards for multiple TYPO3 versions at once

## Installation

Simply install the extension with Composer.

`composer require elementareteilchen/upgrader`

This extension depends on [TYPO3 Console](https://github.com/TYPO3-Console/TYPO3-Console).
The typo3cms binary will be installed in the specified bin-dir (by default `vendor/bin`).

## Usage

You only need to run the upgrade command:

`typo3cms upgrader:upgrade`
