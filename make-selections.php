<?php
date_default_timezone_set('Africa/Johannesburg');
@session_start();
if (!isset($_SESSION['userID'])) {
    //user not logged in
    header('location:../login.php');
    exit();
}
require_once 'head.php';
?>
<script>
    $(document).ready(function () {

        //Monitor change of team/draw
        $(':radio').change(function (e) {
            var selectBox = $(this).siblings("select");
            if ($(this).val() == "Draw" && selectBox.val() !== '0') {
                selectBox.val('');
            }
            updateDiv();
        });

        //Monitor change of select
        $('select').change(function (e) {

            var theRadios = $(this).siblings(":radio");

            //Check for draw condition
            if ($(this).val() == '') {
                //Change team/draw radios to draw
                theRadios.filter(':input[value="Draw"]').prop('checked', true);

                //Select indicates it is not a draw, clear draw status
            } else if (theRadios.filter(':checked').val() == "Draw") {
                theRadios.prop('checked', false);
            }
            updateDiv();
        });
    });

    /*
    * (re)draw the div HTML
    */
    function updateDiv() {
        //clear the div
        $('#dispPicks').html('');
        //update the div
        $(':radio:checked').each(function (ind, ele) {
            var selectBoxVal = $(this).closest('div.team').find('select').val();
            selectBoxVal = selectBoxVal != '' ? "By " + selectBoxVal : selectBoxVal;
            $('#dispPicks').append($(ele).val() + "  " + selectBoxVal + '<br/>');
        });
    }
</script>
<style>
    body {
        font: 125% "Roboto", Helvetica, Arial, san-serif;
        color: #0f161c;
        padding: 0;
        background: #ECF0F1;
    }


</style>
<div class="container">
    <?php
    $gameID = $_GET['gameID'];
    echo $gameID;
    echo '<br />';
    echo $gameID;

    #TODO GET TOURNAMENT ID TO MATCH IN RANKINGS TABLE
    #TODO  SET TIMEZONE CORRECTLY
    #TODO GET STADIUMS TABLE
    #TODO FIX JAVASCRIPT UNDIEFINED ERROR
    ?>
    <form name="makePicks" method="post" action="record_selections.php">
        <?php

        if(displayTeamsByGameID($gameID) == false){
            die('DISPLAY ERROR PAGE');
        }
        $games = displayTeamsByGameID($gameID);
        foreach ($games as $key => $game) {
            ?>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12">
                    <div class="card-header">
                        <div class="venue">
                            <img class="venue-img"
                                 src="https://superbru-cdn.scdn3.secure.raxcdn.com/coreimages/venue/35_1286895450.jpg">
                            <div class="venue-name">
                                <?php echo '#TODO add stadiums table' ?>
                            </div>
                            <div class="venue-details">
                                <?php echo '#TODO add stadiums info' ?>
                            </div>
                        </div>
                        <div class="date hide-desktop">
                            <?php
                            $gameDate = strtotime($game['gameTimeEastern']);
                            $gameDateFormat = date('d M H i', $gameDate);
                            echo $gameDateFormat;
                            ?>
                        </div>
                        <div class="date hide-mobile">
                            <?php
                            $gameDate = strtotime($game['gameTimeEastern']);
                            $gameDateFormat = date('D d M H i', $gameDate);
                            echo $gameDateFormat;
                            ?>
                        </div>
                    </div>
                    <?php // STYLE DISPLAY NONE INPUTS
                    ?>
                    <input type="hidden" style="display: none" name="gameID[]" value="<?php echo $game['gameID'] ?>"/>
                    <input type="hidden" style="display: none" name="tournament[]" value="<?php echo $game['tournament'] ?>"/>
                    <input type="hidden" style="display: none" name="round[]" value="<?php echo $game['weekNum'] ?>"/>
                    <input type="hidden" style="display: none" name="event_date[]" value="<?php echo $game['gameTimeEastern'] ?>"/>
                    <input type="hidden" style="display: none" name="awayTeam[]" value="<?php echo $game['homeTeam'] ?>"/>
                    <input type="hidden" style="display: none" name="homeTeam[]" value="<?php echo $game['awayTeam'] ?>"/>


                    <?php //*END STYLE DISPLAY NONE INPUTS
                    ?>
                    <div class="match-card">
                        <div class="content-inner">
                            <div class="home-team">
                                <img src="../imgs/teams/<?php echo $game['homeTeam'] ?>.gif"
                                     alt="<?php echo $game['homeTeam'] ?>"/>
                                <br/>
                                <div class="team-name"><?php echo $game['homeTeam'] ?></div>
                            </div>
                            <div class="selector">
                                <div id="teams">
                                    <label class="homeTeam">
                                        <input type="radio" name="picks[<?php echo $key ?>]"
                                               value="<?php echo $game['homeTeam'] ?>">
                                        <span><?php echo $game['homeTeam'] ?></span>
                                    </label>
                                    <br/>
                                    <br/>
                                    <label class="awayTeam">
                                        <input type="radio" name="picks[<?php echo $key ?>]"
                                               value="<?php echo $game['awayTeam'] ?>"/>
                                        <span><?php echo $game['awayTeam'] ?></span>
                                    </label>
                                    <br/>
                                    <br/>
                                    <label class="draw">
                                        <input type="radio" name="picks[<?php echo $key ?>]" value="Draw">
                                        <span>Draw</span>
                                    </label>
                                    <br/>
                                    <b>BY</b>
                                    <select name="score[<?php echo $key ?>]" style="" class="score-selector">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                    </select>
                                    <b>POINTS</b>
                                </div>
                            </div>
                            <div class="away-team">
                                <img src="../imgs/teams/<?php echo $game['awayTeam'] ?>.gif"/>
                                <br/>
                                <div class="team-name">
                                    <?php echo $game['awayTeam'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <div class="card-gap">
            </div>
            <?php
        }
        ?>


        <!--DISPLAY TABLE-->
        <div class="col-md-3 col-lg-3 col-xs-12 tournament-log">
                    <div class="mini-log-header">
                        <h4>Standings</h4>
                    </div>
                    <div class="">
                        <table class="mini-log">
                            <tbody>
                            <tr>
                                <th colspan="2"></th>
                                <th class="text-center" data-tooltip="Won">W</th>
                                <th class="text-center" data-tooltip="Lost">L</th>
                                <th class="text-center" data-tooltip="Drawn">D</th>
                                <th class="text-center" data-tooltip="Points">Pts</th>
                            </tr>
                            <tr onclick="bru.ui.openStreak(540,15)">
                                <td class="text-center">-</td>
                                <td>
                                    <div class="ellipsis ellipsis100">England</div>
                                </td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr onclick="bru.ui.openStreak(540,16)">
                                <td class="text-center">-</td>
                                <td>
                                    <div class="ellipsis ellipsis100">France</div>
                                </td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr onclick="bru.ui.openStreak(540,17)">
                                <td class="text-center">-</td>
                                <td>
                                    <div class="ellipsis ellipsis100">Ireland</div>
                                </td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr onclick="bru.ui.openStreak(540,18)">
                                <td class="text-center">-</td>
                                <td>
                                    <div class="ellipsis ellipsis100">Italy</div>
                                </td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr onclick="bru.ui.openStreak(540,19)">
                                <td class="text-center">-</td>
                                <td>
                                    <div class="ellipsis ellipsis100">Scotland</div>
                                </td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr onclick="bru.ui.openStreak(540,20)">
                                <td class="text-center">-</td>
                                <td>
                                    <div class="ellipsis ellipsis100">Wales</div>
                                </td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                   </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="dispPicks"></div>
                <button class="btn btn-primary submitBtn" name="submitBtn">Submit Picks</button>
            </div>
            </form>
        </div>
</div>
</body>
</html>
