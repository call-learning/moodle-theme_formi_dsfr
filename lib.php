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
 * Callbacks
 *
 * @package     theme_formi_dsfr
 * @copyright   2023 Bas Brands <bas@sonsbeekmedia.nl>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Implementation of $THEME->scss
 *
 * @param theme_config $theme
 * @return string
 */
function theme_formi_dsfr_get_main_scss_content($theme) {
    global $CFG;
    $scss = '';
    $scss .= file_get_contents($CFG->dirroot . '/theme/formi_dsfr/scss/default.scss');
    return $scss;
}

/**
 * Inject additional SCSS.
 *
 * @param theme_config $theme The theme config object.
 * @return string
 */
function theme_formi_dsfr_get_extra_scss($theme) {
    $content = '';
    $imageurl = $theme->setting_file_url('loginbackground', 'loginbackground');
    // Sets the login background image.
    if (!empty($imageurl)) {
        $content .= 'body.path-login #page { ';
        $content .= "background-image: url('$imageurl')";
        $content .= '}';
        $content .= 'body.path-login #page #region-main::before { ';
        $content .= "background-image: none";
        $content .= '}';
    }

    return !empty($theme->settings->scss) ? $theme->settings->scss . ' ' . $content : $content;
}

/**
 * Get compiled css.
 *
 * @return string compiled css
 */
function theme_formi_dsfr_get_precompiled_css() {
    global $CFG;
    return file_get_contents($CFG->dirroot . '/theme/formi_dsfr/style/moodle.css');
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_formi_dsfr_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    $fileareas = [
        'footerlogo',
        'footerlogo2',
        'loginbackground',
    ];
    if ($context->contextlevel == CONTEXT_SYSTEM && (in_array($filearea, $fileareas))) {
        $theme = theme_config::load('formi_dsfr');
        // By default, theme files must be cache-able by both browsers and proxies.
        if (!array_key_exists('cacheability', $options)) {
            $options['cacheability'] = 'public';
        }
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}