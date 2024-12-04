<?php

/*
 * This file is part of huseyinfiliz/flarum-member.
 *
 * Copyright (c) 2024 Hüseyin Filiz.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace huseyinfiliz\Member;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),
    
    new Extend\Locales(__DIR__ . '/resources/locale'),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[members]{ANYTHING}[/members]',
                '<span class="members-only">{ANYTHING}</span>'
            );
            $config->BBCodes->addCustom(
                '[guests]{ANYTHING1}[/guests]',
                '<span class="guests-only">{ANYTHING1}</span>'
            );
        })
];
