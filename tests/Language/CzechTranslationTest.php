<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter Shield.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Language;

/**
 * @internal
 */
final class CzechTranslationTest extends AbstractTranslationTestCase
{
    protected array $excludedLocaleKeyTranslations = [
        'Auth.token',
    ];
}
