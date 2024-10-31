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
 * Renderers to align Moodle's HTML with that expected by Bootstrap
 *
 * @package    theme_formi_dsfr
 * @copyright  2023 Bas Brands <bas@sonsbeekmedia.nl>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_formi_dsfr\output;

defined('MOODLE_INTERNAL') || die;

use moodle_url;
/**
 * Theme renderer
 *
 * @package    theme_formi_dsfr
 * @copyright  2023 Bas Brands <bas@sonsbeekmedia.nl>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class core_renderer extends \theme_boost\output\core_renderer {

    /**
     * Get the logo URL
     * @return string
     */
    public function root_url() {
        return new moodle_url('/');
    }

    /**
     * Get the entity contact page link
     *
     * @return string
     * @throws dml_exception
     * @throws moodle_exception
     */
    public function contact_page() {
        return get_config('theme_formi_dsfr', 'contact');
    }

    /**
     * Get text information footer.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function textinfofooter_page() {
        return get_config('theme_formi_dsfr', 'textinfofooter');
    }

    /**
     * Get about page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function about_page() {
        return get_config('theme_formi_dsfr', 'about');
    }

    /**
     * Get legal notice page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function legalnotice_page() {
        return get_config('theme_formi_dsfr', 'legalnotice');
    }

    /**
     * Get FAQ page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function faq_page() {
        return get_config('theme_formi_dsfr', 'faq');
    }

    /**
     * Get Formi Dsfr version number, if set.
     *
     * @return false|string|null
     * @throws coding_exception
     * @throws dml_exception
     * @throws moodle_exception
     */
    public function versionnumber_page() {

        return get_config('theme_formi_dsfr', 'versionnumber');
    }

    /**
     * Get Formi Dsfr licence, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function formi_dsfrlicence_page() {
        return get_config('theme_formi_dsfr', 'formi_dsfrlicence');
    }

    /**
     * Get external links.
     *
     * @return string[]
     * @throws dml_exception
     */
    public function externallink_page() {
        return explode("|", get_config('theme_formi_dsfr', 'externallinks'));
    }

    /**
     * Get Site Map page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function sitemap_page() {
        return get_config('theme_formi_dsfr', 'sitemap');
    }

    /**
     * Get Accessibility page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function accessibility_page() {
        return get_config('theme_formi_dsfr', 'accessibility');
    }

    /**
     * Get Personal Data page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function personaldata_page() {
        return get_config('theme_formi_dsfr', 'personaldata');
    }

    /**
     * Get url logo.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function urllogo_page() {
        return $this->get_logo_url();
    }

    /**
     * Get if user is logged
     */
    public function islogged_page() {
        return isloggedin();
    }

    /**
     * Get the first navbar collection label
     */
    public function firstcollectionlabel() {
        if ($this->page->pagelayout == 'course') {
            return get_string('course');
        }
        return $this->page->flatnav->get_collectionlabel();
    }

    /**
     * Get the active navbar section
     */
    public function adminsectionactive() {
        if ($this->page->pagelayout == 'admin') {
            return true;
        }
        return false;
    }

    /**
     * Get the footer logo class
     * @return string classname for the footer logo.
     */
    public function footerlogoclass() {
        $theme = \theme_config::load('formi_dsfr');
        if ($image = $theme->setting_file_url('footerlogo', 'footerlogo')) {
            return 'footer-logo';
        } else {
            return 'footer-logo-default';
        }
    }

    /**
     * Get the footer logo
     *
     * @return string url containing the footer logo.
     */
    public function footerlogo() {
        $theme = \theme_config::load('formi_dsfr');
        if ($image = $theme->setting_file_url('footerlogo', 'footerlogo')) {
            return $image;
        } else {
            return $this->image_url('logo-footer', 'theme_formi_dsfr');
        }
    }

    /**
     * Get the footer logo2
     *
     * @return string url containing the footer logo.
     */
    public function footerlogo2() {
        $theme = \theme_config::load('formi_dsfr');
        if ($image = $theme->setting_file_url('footerlogo2', 'footerlogo2')) {
            return $image;
        } else {
            return $this->image_url('logo-footer2', 'theme_formi_dsfr');
        }
    }
}
