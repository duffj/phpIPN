<?php
/************************************************************************
 * This file is part of phpIPN.                                         *
 *                                                                      *
 * phpIPN is free software: you can redistribute it and/or modify       *
 * it under the terms of the GNU General Public License as published by *
 * the Free Software Foundation, either version 3 of the License, or    *
 * (at your option) any later version.                                  *
 *                                                                      *
 * phpIPN is distributed in the hope that it will be useful,            *
 * but WITHOUT ANY WARRANTY; without even the implied warranty of       *
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        *
 * GNU General Public License for more details.                         *
 *                                                                      *
 * You should have received a copy of the GNU General Public License    *
 * along with phpIPN.  If not, see <http://www.gnu.org/licenses/>.      *
 ************************************************************************/

// include all necessary files
require_once("include/includes.php");

define('DB_MANAGER_CLASS_NAME', 'DBManager');

$controller = new NotifyController();
$controller->run($_POST);
?>
<html>
<head>
<title>phpIPN notification endpoint</title>
</head>
<body>
<h1>phpIPN Notification Endpoint</h1>
<p>This is the phpIPN notification endpoint, which should be called by PayPal rather than loaded directly in a browser.</p>
<p>See <a href="https://github.com/duffj/phpIPN">GitHub</a> for more details about phpIPN.</p>
<h2>POST variables:</h2>
<pre>
<?php print_r($_POST); ?>
</body>
</html>
