<?php
/**
 * Model for MARC records in Solr.
 *
 * PHP version 7
 *
 * Copyright (C) Villanova University 2010.
 * Copyright (C) The National Library of Finland 2015.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 2,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category VuFind
 * @package  RecordDrivers
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @author   Ere Maijala <ere.maijala@helsinki.fi>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development:plugins:record_drivers Wiki
 */
 /* VUFINDLOCALONLY comments indicate lines modified for Wesleyan's Prison Education program VuFind instance which runs standalone on a Windows laptop with no network access
Modified by Lori Stethers, Wesleyan University, 2023.05.26 */
namespace VuFind\RecordDriver;

/**
 * Model for MARC records in Solr.
 *
 * @category VuFind
 * @package  RecordDrivers
 * @author   Demian Katz <demian.katz@villanova.edu>
 * @author   Ere Maijala <ere.maijala@helsinki.fi>
 * @license  http://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development:plugins:record_drivers Wiki
 */
class SolrMarc extends SolrDefault
{
    use IlsAwareTrait;
    use MarcReaderTrait;
    use MarcAdvancedTrait;
/* VUFINDLOCALONLY - BEGIN - Get the library and location of the current record and return string */
     public function getLocation()
     {
         return $this->fields['static_location'] ?? '';
     }
	 public function getLibrary()
     {
         return $this->fields['library'] ?? '';
     }
/* VUFINDLOCALONLY - END - Get the library and location of the current record and return string */
}
