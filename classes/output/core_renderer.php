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
 * @package    theme_mentor
 * @copyright  2023 Bas Brands <bas@sonsbeekmedia.nl>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_mentor\output;

defined('MOODLE_INTERNAL') || die;

use moodle_url;
/**
 * Theme renderer
 *
 * @package    theme_mentor
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
     * Adds the refreshcss link to the page
     * @return string
     */
    public function standard_top_of_body_html() {
        $html = parent::standard_top_of_body_html();
        $html .= '<div class="devcss">
                    <a href="#" data-action="refreshcss">refreshcss</a>
                </div>';
        return $html;
    }


    /**
     * Get the entity contact page link
     *
     * @return string
     * @throws dml_exception
     * @throws moodle_exception
     */
    public function contact_page() {
        return 'TODO';
    }

    /**
     * Get text information footer.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function textinfofooter_page() {
        return get_config('theme_mentor', 'textinfofooter');
    }

    /**
     * Get about page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function about_page() {
        return get_config('theme_mentor', 'about');
    }

    /**
     * Get legal notice page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function legalnotice_page() {
        return get_config('theme_mentor', 'legalnotice');
    }

    /**
     * Get FAQ page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function faq_page() {
        return get_config('theme_mentor', 'faq');
    }

    /**
     * Get Mentor version number, if set.
     *
     * @return false|string|null
     * @throws coding_exception
     * @throws dml_exception
     * @throws moodle_exception
     */
    public function versionnumber_page() {

        return get_config('theme_mentor', 'versionnumber');
    }

    /**
     * Get Mentor licence, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function mentorlicence_page() {
        return get_config('theme_mentor', 'mentorlicence');
    }

    /**
     * Get external links.
     *
     * @return string[]
     * @throws dml_exception
     */
    public function externallink_page() {
        return explode("|", get_config('theme_mentor', 'externallinks'));
    }

    /**
     * Get Site Map page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function sitemap_page() {
        return get_config('theme_mentor', 'sitemap');
    }

    /**
     * Get Accessibility page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function accessibility_page() {
        return get_config('theme_mentor', 'accessibility');
    }

    /**
     * Get Personal Data page link, if set.
     *
     * @return false|string|null
     * @throws dml_exception
     */
    public function personaldata_page() {
        return get_config('theme_mentor', 'personaldata');
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

}
