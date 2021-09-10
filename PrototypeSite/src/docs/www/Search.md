@@@
use : articles2.1
title: Movie Search | ${document.name}
@@@


## Movie Search


<table class="centre" >
    <tr>
        <td class="alt">
            <form action="Search.html" method="post">
                <table class="hidden">
                    <colgroup class="border">
                        <col span="6">
                    </colgroup>
                    <tr>
                        <td class="right">
                            <label for="title">Movie Title:</label>
                        </td>
                        <td colspan="5" >
                            <input type="text" id="title" name="title" size="60">
                        </td>
                    </tr>
                    <tr>
                        <td class="right">
                            <label for="genre">Genre:</label>
                        </td>
                        <td>
                            <select name="genre" id="genre">
                                <option value="" >= Select =</option>
                                <option value="Anime">Anime</option>
                                <option value="Comedy">Comedy</option>
                                <option value="SciFi">SciFi</option>
                            </select>
                        </td>
                        <td class="right">
                            <label for="ratings">Rating:</label>
                        </td>
                        <td>
                            <select name="rating" id="ratings">
                                <option value="">= Select =</option>
                                <option value="G">NR</option>
                                <option value="PG">PG</option>
                                <option value="PG-13">PG-13</option>
                            </select>
                        </td>
                        <td class="right">
                            <label for="years">Year:</label>
                        </td>
                        <td>
                            <select name="year" id="years">
                                <option value="">= Select =</option>
                                <option value="1932">1932</option>
                                <option value="1940">1940</option>
                                <option value="1965">1968</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <table class="hidden">
                    <tr>
                        <td style="text-align: left; width: 81%">
                            3 movies found.
                        </td>
                        <td style="text-align: right">
                            <input type="submit" value="Search">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
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
            <tr>
                <td style="text-align: left">
                    2001: A Space Odyssey (original Release)
                </td>
                <td>
                    MGM/UA
                </td>
                <td>
                    Discontinued
                </td>
                <td>
                    5.1
                </td>
                <td>
                    LBX
                </td>
                <td style="text-align: right">
                    24.98
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
                <td>
                    2.20:1
                </td>
            </tr>
            <tr>
                <td class="alt" style="text-align: left">
                    Mars Needs Women
                </td>
                <td class="alt">
                    MGM/UA
                </td>
                <td class="alt">
                    Out
                </td>
                <td class="alt">
                    2.0
                </td>
                <td class="alt">
                    4:3
                </td>
                <td class="alt" style="text-align: right">
                    14.95
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
                <td class="alt">
                    1.33:1
                </td>
            </tr>
            <tr>
                <td class="reset" style="text-align: left">
                    Star Trek TV #23: A Private Little War/ The Gamesters Of Triskelion
                </td>
                <td class="reset">
                    Paramount
                </td>
                <td class="reset">
                    Out
                </td>
                <td class="reset">
                    5.1
                </td>
                <td class="reset">
                    4:3
                </td>
                <td class="reset" style="text-align: right">
                    19.99
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
                <td class="reset">
                    1.33:1
                </td>
            </tr>
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
[Movie Search]:Search.html
[Top Ten]:TopTen.html
@@@