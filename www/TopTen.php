<!DOCTYPE html>
<!--
Generated by
version: 1.1.5
on Sun Sep 12 18:33:43 AWST 2021
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

        <style>
            article {
                max-width: 80em;
            }

            div.theader {
                margin-right: 1.1%;
            }

            div.tbody {
                height: 500px;
                overflow-y: scroll;
            }

            col.id {
                width: 40px;
            }

            col.Title {
                width: 390px;
            }

            col.Studio {
                width: 75px;
            }

            col.Versions {
                width: 70px;
            }

            col.Rating {
                width: 60px;
            }

            col.Year {
                width: 50px;
            }

            col.Genre {
                width: 110px;
            }

            col.Status {
                width: 85px;
            }

            col.Sound {
                width: 57px;
            }

            col.Price {
                width: 50px;
            }

            col.Aspect {
                width: 55px;
            }

            col.SearchResult {
                width: 100px;
            }

            td.nopadding {
                padding-bottom: 0px;
                padding-top: 0px;
            }
        </style>

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
                "SELECT * FROM `Movies` ORDER BY `SearchResult` DESC, "
                    . "`DateLastReturned` DESC, `Title` ASC LIMIT 10;"
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

            <p class="centre">
                <img src="GetBarChart.php?width=500&amp;height=400&amp;data=
                     <?php echo $data ?>" alt="">
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
                        echo "        <td " . ($alt ? ' class="alt" ' : '')
                        . " style = \"text-align: left\">\n";
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

            <?php
            require_once 'footer.php';
            ?>
        </article>
    </body>
</html>
