@@@
use : articles2.1
title: Movie Search | ${document.name}
@@@


## Movie Search


```
            <?php
            /**
             * Retrieve records from database.
             *
             * PHP version 8
             *
             * @category  WebSite
             * @package   Layout
             * @author    Bradley Willcott <bw.opensource@yahoo.com>
             * @copyright 2021 Bradley Willcott
             * @license   https://www.gnu.org/licenses/gpl-3.0.txt GNU General
             * Public License Version 3
             * @version   GIT: v1.0
             * @link      Search.php This file
             */
            // Process data

            $sql_select = "SELECT * FROM `Movies` ";
            $sql_update = "UPDATE `Movies` SET `SearchResult`=`SearchResult` + 1 ";
            $sql_where = "WHERE";

            if (!empty($_POST)) {
                $vars_arr = filter_input_array(INPUT_POST);
                $title = $vars_arr["title"];
                $genre = $vars_arr["genre"];
                $rating = $vars_arr["rating"];
                $year = $vars_arr["year"];

                $first = true;

                if (!empty($year)) {
                    $first = false;
                    $sql_where .= " `Year`=\"$year\"";
                }

                if (!empty($rating)) {
                    if (!$first) {
                        $sql_where .= " AND";
                    }

                    $first = false;
                    $sql_where .= " `Rating`=\"$rating\"";
                }

                if (!empty($genre)) {
                    if (!$first) {
                        $sql_where .= " AND";
                    }

                    $first = false;
                    $sql_where .= " `Genre`=\"$genre\"";
                }

                if (!empty($title)) {
                    if (!$first) {
                        $sql_where .= " AND";
                    }

                    $first = false;
                    $regex_front = '/^\*/';
                    $regex_end = '/\*$/';
                    $found = false;
                    $temp = $title;

                    if (preg_match($regex_front, $temp)) {
                        $temp = preg_replace($regex_front, '%', $temp);
                        $found = true;
                    }

                    if (preg_match($regex_end, $temp)) {
                        $temp = preg_replace($regex_end, '%', $temp);
                        $found = true;
                    }

                    if ($found) {
                        $sql_where .= " `Title` LIKE \"$temp\"";
                    } else {
                        $sql_where .= " `Title`=\"$temp\"";
                    }
                }

                if ($first) {
                    $sql_where .= " 1";
                }
            } else {
                $sql_where .= " 1";
            }

            $sql_update .= $sql_where . ";";
            $sql_where .= " ORDER BY `Title`;";
            $sql_select .= $sql_where;

            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            $mysqli = new mysqli('localhost', 'root', '', 'WebProgPHP_Project');

            /* Set the desired charset after establishing a connection */
            $mysqli->set_charset('utf8mb4');

            $mysqli->query($sql_update);
            $result = $mysqli->query($sql_select);
            $num_rows = $mysqli->affected_rows;
            $genre_list = $mysqli->query("SELECT DISTINCT `Genre` FROM `Movies`;");
            $ratings_list = $mysqli->query("SELECT DISTINCT `Rating` FROM `Movies`;");
            $years_list = $mysqli->query("SELECT DISTINCT `Year` FROM `Movies`;");
            $alt = false;
            ?>
```

<table class="centre" >
    <tr>
        <td class="alt">
            <form action="Search.php" method="post">
                <table class="hidden">
                    <colgroup class="border">
                        <col span="6">
                    </colgroup>
                    <tr>
                        <td class="right">
                            <label for="title">Movie Title *:</label>
                        </td>
                        <td colspan="5" >
                            <input type="text" id="title" name="title" size="60" value="<?php echo $title ?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="5" >
                            <table class="hidden">
                                <colgroup class="border">
                                    <col span="3">
                                </colgroup>
                                <tr>
                                    <td class="right nopadding">
                                        <label>* Search for Title:</label>
                                    </td>
                                    <td class="left nopadding">
                                        <label>- beginning with "night":</label>
                                    </td>
                                    <td class="left nopadding">
                                        <label>night*</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="nopadding"></td>
                                    <td class="left nopadding">
                                        <label>- containing "night":</label>
                                    </td>
                                    <td class="left nopadding">
                                        <label>*night*</label>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="nopadding"></td>
                                    <td class="left nopadding">
                                        <label>- ending with "night":</label>
                                    </td>
                                    <td class="left nopadding">
                                        <label>*night</label>
                                    </td>

                                </tr>

                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="right">
                            <label for="genre">Genre:</label>
                        </td>
                        <td>
                            <select name="genre" id="genre">
                                <option value="" >= Select =</option>
                                <?php
                                while ($row = $genre_list->fetch_assoc()) {
                                    echo "<option value=\"{$row['Genre']}\""
                                    . ($row['Genre'] == $genre ? " selected" : "")
                                    . ">{$row['Genre']}</option>";
                                }
                                echo "\n";
                                ?>
                            </select>
                        </td>
                        <td class="right">
                            <label for="ratings">Rating:</label>
                        </td>
                        <td>
                            <select name="rating" id="ratings">
                                <option value="">= Select =</option>
                                <?php
                                while ($row = $ratings_list->fetch_assoc()) {
                                    echo "<option value=\"{$row['Rating']}\""
                                    . ($row['Rating'] == $rating ? " selected" : "")
                                    . ">{$row['Rating']}</option>";
                                }
                                echo "\n";
                                ?>
                            </select>
                        </td>
                        <td class="right">
                            <label for="years">Year:</label>
                        </td>
                        <td>
                            <select name="year" id="years">
                                <option value="">= Select =</option>
                                <?php
                                while ($row = $years_list->fetch_assoc()) {
                                    echo "<option value=\"{$row['Year']}\""
                                    . ($row['Year'] == $year ? " selected" : "")
                                    . ">{$row['Year']}</option>";
                                }
                                echo "\n";
night                                ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <table class="hidden">
                    <tr>
                        <td style="text-align: left; width: 81%">
                            <?php echo $num_rows; ?> movies found.
                        </td>
                        <td style="text-align: right">
                            <input type="submit" value="Search">
                            <input type='button' value='Reset' name='reset' onclick="return resetForm(this.form);">
                        </td>
                    </tr>
                </table>

                <script>
                    // Code copied from :
                    // https://stackoverflow.com/questions/6028576/how-to-clear-a-form
                    function resetForm(form) {
                        // clearing inputs
                        var inputs = form.getElementsByTagName('input');
                        for (var i = 0; i<inputs.length; i++) {
                            switch (inputs[i].type) {
                                // case 'hidden':
                                case 'text':
                                    inputs[i].value = '';
                                    break;
                                case 'radio':
                                case 'checkbox':
                                    inputs[i].checked = false;   
                            }
                        }

                        // clearing selects
                        var selects = form.getElementsByTagName('select');
                        for (var i = 0; i<selects.length; i++)
                            selects[i].selectedIndex = 0;

                        // clearing textarea
                        var text= form.getElementsByTagName('textarea');
                        for (var i = 0; i<text.length; i++)
                            text[i].innerHTML= '';

                        return false;
                    }
                </script>
            </form>
        </td>
    </tr>
</table>

<p></p>

<div class="theader">
    <table class="centre" >
        <colgroup>
            <col class="Title">
            <col class="Studio">
            <col class="Status">
            <col class="Sound">
            <col class="Versions">
            <col class="Price">
            <col class="Rating">
            <col class="Year">
            <col class="Genre">
            <col class="Aspect">
        </colgroup>
        <thead>
            <tr>
                <th style="text-align: left">
                    Title
                </th>
                <th>
                    Studio
                </th>
                <th>
                    Status
                </th>
                <th>
                    Sound
                </th>
                <th>
                    Versions
                </th>
                <th style="text-align: right">
                    Price
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
                <th>
                    Aspect
                </th>
            </tr>
        </thead>
    </table>
</div>

<div class="tbody">
    <table class="centre"  style="border-top: none">
        <colgroup>
            <col class="Title">
            <col class="Studio">
            <col class="Status">
            <col class="Sound">
            <col class="Versions">            
            <col class="Price">
            <col class="Rating">
            <col class="Year">
            <col class="Genre">
            <col class="Aspect">
        </colgroup>
        <tbody>
            <?php
            const TD_S = "        <td>\n";
            const TD_SA = "        <td class=\"alt\">\n";
            const TD_E = "        </td>\n";

            while ($row = $result->fetch_assoc()) {
                echo "    <tr>\n";
                echo "        <td " . ($alt ? ' class="alt" ' : '') . " style = \"text-align: left\">\n";
                echo "{$row['Title']}\n";
                echo TD_E;
                echo $alt ? TD_SA : TD_S;
                echo "{$row['Studio']}\n";
                echo TD_E;
                echo $alt ? TD_SA : TD_S;
                echo "{$row['Status']}\n";
                echo TD_E;
                echo $alt ? TD_SA : TD_S;
                echo "{$row['Sound']}\n";
                echo TD_E;
                echo $alt ? TD_SA : TD_S;
                echo "{$row['Versions']}\n";
                echo TD_E;
                echo "        <td " . ($alt ? ' class="alt" ' : '') . " style = \"text-align: right\">";
                echo "{$row['Price']}\n";
                echo TD_E;
                echo $alt ? TD_SA : TD_S;
                echo "{$row['Rating']}\n";
                echo TD_E;
                echo $alt ? TD_SA : TD_S;
                echo "{$row['Year']}\n";
                echo TD_E;
                echo $alt ? TD_SA : TD_S;
                echo "{$row['Genre']}\n";
                echo TD_E;
                echo $alt ? TD_SA : TD_S;
                echo "{$row['Aspect']}\n";
                echo TD_E;
                echo "    </tr>\n";

                $alt = !$alt;
            }
            ?>
        </tbody>
    </table>
</div>



@@@[#navbar]
- [Home]
- [@active] [Movie Search](#)
- [Top Ten]
- [@right] [About]
    - [License]

[About]:About.html
[Home]:index.html
[License]:LICENSE.html
[Movie Search]:Search.php
[Top Ten]:TopTen.php
@@@
