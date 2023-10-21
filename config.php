<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The configuration for theme_mentor is defined here.
 *
 * @package     theme_mentor
 * @copyright   2023 Bas Brands <bas@sonsbeekmedia.nl>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$THEME->name = 'mentor';

$THEME->doctype = 'html5';

$THEME->parents = array(
    'boost',
);

$THEME->sheets = [];
$THEME->scss = function($theme) {
    return theme_mentor_get_main_scss_content($theme);
};
$THEME->editor_sheets = [];
$THEME->usefallback = true;

$THEME->enable_dock = false;
$THEME->extrascsscallback = 'theme_mentor_get_extra_scss';
$THEME->precompiledcsscallback = 'theme_mentor_get_precompiled_css';
$THEME->yuicssmodules = array();
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
