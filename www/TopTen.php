<!DOCTYPE html>
<!--
/**
 *  File Name:    footer.php
 *  Project Name: WebProgPHP-Project
 *
 *  Copyright (c) 2021 Bradley Willcott
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * ****************************************************************
 * Name: Bradley Willcott
 * ID:   M198449
 * Date: 11 Sept 2021
 * ****************************************************************
 *
 * PHP version 8
 *
 * @category  Website
 * @package   Layout
 * @author    Bradley Willcott <bw.opensource@yahoo.com>
 * @copyright 2021 Bradley Willcott
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt GNU General
 *            Public License Version 3
 * @version   GIT: v1.0
 * @link      TopTen.php This file
 */
-->
<html lang="en-us" id="top">
    <head>
        <title>Top Ten | SMT Movie Rental</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="">
        <link rel="stylesheet" type="text/css" href="css/darkstyle.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="icon" type="image/png" href="etc/markdown16.png">
    </head>
    <body>
        <article>
            <header>
                <p>Web Programming PHP - Project</p>
                
<div id="navbar">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="Search.php">Movie Search</a></li>
<li class="active"><a href="#">Top Ten</a></li>
<li class="right"><a href="About.html">About</a>
<ul>
<li><a href="LICENSE.html">License</a></li></ul></li>
</ul>

</div>

            </header>
            <h1>SMT Movie Rental</h1>

<p class="centre">
<img src="etc/TopTenBarChart.png" alt=""></p>

<table class="centre">
  <caption>
Movie List
  </caption>
  <thead>
    <tr>
      <th style="text-align: center">
#
      </th>
      <th style="text-align: left">
Title
      </th>
      <th>
Studio
      </th>
      <th>
Versions
      </th>
      <th>
Rating
      </th>
      <th>
Year
      </th>
      <th>
Genre
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="text-align: center">
1
      </td>
      <td style="text-align: left">
2001: A Space Odyssey (original Release)
      </td>
      <td>
MGM/UA
      </td>
      <td>
LBX
      </td>
      <td>
NR
      </td>
      <td>
1968
      </td>
      <td>
SciFi
      </td>
    </tr>
    <tr>
      <td class="alt" style="text-align: center">
2
      </td>
      <td class="alt" style="text-align: left">
Mars Needs Women
      </td>
      <td class="alt">
MGM/UA
      </td>
      <td class="alt">
4:3
      </td>
      <td class="alt">
NR
      </td>
      <td class="alt">
1968
      </td>
      <td class="alt">
SciFi
      </td>
    </tr>
    <tr>
      <td class="reset" style="text-align: center">
3
      </td>
      <td class="reset" style="text-align: left">
Star Trek TV #23: A Private Little War/ The Gamesters Of Triskelion
      </td>
      <td class="reset">
Paramount
      </td>
      <td class="reset">
4:3
      </td>
      <td class="reset">
NR
      </td>
      <td class="reset">
1968
      </td>
      <td class="reset">
SciFi
      </td>
    </tr>
  </tbody>
</table>


<?php
require_once 'footer.php';
?>
        </article>
    </body>
</html>
