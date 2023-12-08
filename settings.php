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
 * @package   theme_formi_dsfr
 * @copyright 2021 Edunao SAS (contact@edunao.com)
 * @author    mounir <mounir.ganem@edunao.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    // Texte d'information en début de footer.
    $textinfofootersetting = new admin_setting_configtext(
            'theme_formi_dsfr/textinfofooter',
            get_string('textinfofooter', 'theme_formi_dsfr'),
            get_string('textinfofooter_desc', 'theme_formi_dsfr'),
            get_string('textinfofooterdefault', 'theme_formi_dsfr'),
            PARAM_TEXT
    );

    // About link.
    $aboutsetting = new admin_setting_configtext(
            'theme_formi_dsfr/about',
            get_string('about', 'theme_formi_dsfr'),
            get_string('about_desc', 'theme_formi_dsfr'),
            $CFG->wwwroot . '/local/staticpage/view.php?page=ensavoirplus',
            PARAM_URL
    );

    // Legal notice link.
    $legalnoticesetting = new admin_setting_configtext(
            'theme_formi_dsfr/legalnotice',
            get_string('legalnotice', 'theme_formi_dsfr'),
            get_string('legalnotice_desc', 'theme_formi_dsfr'),
            $CFG->wwwroot . '/local/staticpage/view.php?page=mentionslegales',
            PARAM_URL
    );

    // FAQ.
    $faqsetting = new admin_setting_configtext(
            'theme_formi_dsfr/faq',
            get_string('faq', 'theme_formi_dsfr'),
            get_string('faq_desc', 'theme_formi_dsfr'),
            $CFG->wwwroot . '/local/staticpage/view.php?page=faq',
            PARAM_URL
    );

    // Liens extérieur à Formi Dsfr.
    $externallinkssetting = new admin_setting_configtext(
            'theme_formi_dsfr/externallinks',
            get_string('externallinks', 'theme_formi_dsfr'),
            get_string('externallinks_desc', 'theme_formi_dsfr'),
            'legifrance.gouv.fr|gouvernement.fr|service-public.fr|data.gouv.fr',
            PARAM_TEXT
    );

    // Formi Dsfr version number.
    $versionnumbersetting = new admin_setting_configtext(
            'theme_formi_dsfr/versionnumber',
            get_string('versionnumber', 'theme_formi_dsfr'),
            get_string('versionnumber_desc', 'theme_formi_dsfr'),
            '',
            PARAM_TEXT
    );

    // Formi Dsfr copyright.
    $formi_dsfrlicencesetting = new admin_setting_configtext(
            'theme_formi_dsfr/formi_dsfrlicence',
            get_string('formi_dsfrlicence', 'theme_formi_dsfr'),
            get_string('formi_dsfrlicence_desc', 'theme_formi_dsfr'),
            get_string('formi_dsfrlicencedefault', 'theme_formi_dsfr'),
            PARAM_RAW
    );

    // Site map link.
    $sitemapsetting = new admin_setting_configtext(
            'theme_formi_dsfr/sitemap',
            get_string('sitemap', 'theme_formi_dsfr'),
            get_string('sitemap_desc', 'theme_formi_dsfr'),
            $CFG->wwwroot . '/local/staticpage/view.php?page=plandusite',
            PARAM_URL
    );

    // Accessibility link.
    $accessibilitysetting = new admin_setting_configtext(
            'theme_formi_dsfr/accessibility',
            get_string('accessibility', 'theme_formi_dsfr'),
            get_string('accessibility_desc', 'theme_formi_dsfr'),
            '',
            PARAM_URL
    );


    $settings->add($textinfofootersetting);
    $settings->add($aboutsetting);
    $settings->add($legalnoticesetting);
    $settings->add($faqsetting);
    $settings->add($externallinkssetting);
    $settings->add($versionnumbersetting);
    $settings->add($formi_dsfrlicencesetting);
    $settings->add($sitemapsetting);
    $settings->add($accessibilitysetting);
}
