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
 * Settings that allow configuring various bfhfontcolor features.
 *
 * @package     tiny_bfhfontcolor
 * @copyright   2023 Luca Bösch <luca.boesch@bfh.ch>
 * @copyright   2023 Stephan Robotta <stephan.robotta@bfh.ch>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

use \tiny_bfhfontcolor\admin_setting_colorlist;

$ADMIN->add('editortiny', new admin_category('tiny_bfhfontcolor', new lang_string('pluginname', 'tiny_bfhfontcolor')));

$settings = new admin_settingpage('tiny_bfhfontcolor_settings', new lang_string('settings', 'tiny_bfhfontcolor'));
if ($ADMIN->fulltree) {
    $setting = new admin_setting_colorlist(
        'tiny_bfhfontcolor/textcolors',
        new lang_string('textcolors', 'tiny_bfhfontcolor'),
        new lang_string('textcolors_desc', 'tiny_bfhfontcolor'),
        ''
    );
    $settings->add($setting);

    $setting = new admin_setting_colorlist(
        'tiny_bfhfontcolor/backgroundcolors',
        new lang_string('backgroundcolors', 'tiny_bfhfontcolor'),
        new lang_string('backgroundcolors_desc', 'tiny_bfhfontcolor'),
        ''
    );
    $settings->add($setting);

    $offon = [
        0 => get_string('disabled', 'tiny_bfhfontcolor'),
        1 => get_string('enabled', 'tiny_bfhfontcolor'),
    ];
    $setting = new admin_setting_configselect(
        'tiny_bfhfontcolor/textcolorpicker',
        new lang_string('textcolorpicker', 'tiny_bfhfontcolor'),
        new lang_string('textcolorpicker_desc', 'tiny_bfhfontcolor'),
        0,
        $offon
    );
    $settings->add($setting);

    $setting = new admin_setting_configselect(
        'tiny_bfhfontcolor/backgroundcolorpicker',
        new lang_string('backgroundcolorpicker', 'tiny_bfhfontcolor'),
        new lang_string('backgroundcolorpicker_desc', 'tiny_bfhfontcolor'),
        0,
        $offon
    );
    $settings->add($setting);
}

