@@@
use : articles2.1
title: Top Ten | ${document.name}
@@@


# ${document.name}

```
            <?php
            /**
             * Retrieve records from database.
             *
             * PHP version 8
             *
             * @category  Administration
             * @package   Admin
             * @author    Bradley Willcott <bw.opensource@yahoo.com>
             * @copyright 2021 Bradley Willcott
             * @license   https://www.gnu.org/licenses/gpl-3.0.txt GNU General
             *            Public License Version 3
             * @version   GIT: v1.0
             * @link      TopTen.php This file
             */
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            $mysqli = new mysqli('localhost', 'root', '', 'WebProgPHP_Project');

            /* Set the desired charset after establishing a connection */
            $mysqli->set_charset('utf8mb4');

            $result = $mysqli->query(
                    "SELECT * FROM `Movies` ORDER BY `SearchResult` DESC, `DateLastReturned` DESC, `Title` ASC LIMIT 10;"
            );
            $alt = false;

            $arr = array();
            $rows = array();

            for ($index = 0; $index < 10; $index++) {
                $rows[$index] = $result->fetch_assoc();
                $arr[$index] = $rows[$index]['SearchResult'];
            }

            unset($index);
            $data = implode(',', $arr);
            ?>
```

<p class="centre">
    <img src="GetBarChart.php?width=500&amp;height=400&amp;data=<?php echo $data ?>" alt="">
</p>

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
            <th>
                Search Result
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        const TD_S = "        <td>\n";
        const TD_SA = "        <td class=\"alt\">\n";
        const TD_E = "        </td>\n";

        for ($index = 0; $index < count($rows); $index++) {
            $row = $rows[$index];
            $num = $index + 1;
            echo "    <tr>\n";
            echo $alt ? TD_SA : TD_S;
            echo "$num\n";
            echo TD_E;
            echo "        <td " . ($alt ? ' class="alt" ' : '') . " style = \"text-align: left\">\n";
            echo "{$row['Title']}\n";
            echo TD_E;
            echo $alt ? TD_SA : TD_S;
            echo "{$row['Studio']}\n";
            echo TD_E;
            echo $alt ? TD_SA : TD_S;
            echo "{$row['Versions']}\n";
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
            echo "{$row['SearchResult']}\n";
            echo TD_E;
            echo "    </tr>\n";

            $alt = !$alt;
        }
        ?>
    </tbody>
</table>



@@@[#navbar]
- [Home]
- [Movie Search]
- [@active] [Top Ten](#)
- [@right] [About]
    - [License]

[About]:About.html
[Home]:index.html
[License]:LICENSE.html
[Movie Search]:Search.php
[Top Ten]:TopTen.php
@@@
