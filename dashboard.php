<?php
//require_once($_SERVER['DOCUMENT_ROOT'] . '/src/head.php');
require_once('head.php');
require_once('class/functions.php');
date_default_timezone_set('Africa/Johannesburg');
?>
    <script>
    $(document).ready(function () {
        $('[data-toggle="offcanvas"]').click(function () {
            $('.row-offcanvas').toggleClass('active')
        });
    });
</script>

<div id="top-wrapper">
    <div class="top-news-feed">
        <!-- start feedwind code -->
        <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="60542/"></script>
        <!-- end feedwind code -->
    </div>
    <div class="top-tournaments">
        <style type="text/css">
            a{
                text-decoration: none !important;
            }
        </style>
        <div class="fw-feed-title">
        <a href="#">Upcoming Games</a>
        </div>
        <div class="fixture-tray">
               <?php
    $games = getUpcomingGames();
    foreach ($games as $game) {
    $start_date = new DateTime(date('Y-m-d G:i:s'));
    $since_start = $start_date->diff(new DateTime($game['gameTimeDate']));
    $eventDate = strtotime($game['gameTimeDate']);
    $newEventDate = date('d M', $eventDate);

    ?>
        <div class="tourn-group">
            <div class="fixure-dates">
                <div class="fixture-calendar">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <?php echo dateDayMonthName($game['gameTimeDate']) ?>
                </div>
            </div>
            <div class='tourn-header'>
               <div style='color:#10438e'><?php echo $game['tournament']?></div>
               </div>
            <a href="make-selections.php?gameID=<?php echo $game['gameID']?>" class="event2  picked">
                <div class="sport">
                    <img src="../imgs/sport/<?php echo $game['sport']?>.png" width="40" height="27">
                </div>
                <div class="time">
                    <div class="abbrev"><?php echo substr($game['tournament'], 0, 2)?></div>
                </div>
                <div class="fixture">
                    <div class="inner">
                        <table class="main" border="0">
                            <tbody>
                            <tr>
                                <td class="flag"><img class="lazy" src=" ../imgs/teams/<?php echo $game['homeTeam'] ?>.gif" /></td>
                                <td class="team"><span><?php echo $game['homeTeam'] ?></span></td>
                                <?php #TODO Format gameTimeDate ?>
                                <td class="vs "><?php echo $game['gameTimeDate']?></td>
                                <td class="team"><span><?php echo $game['awayTeam'] ?></span></td>
                                <td class="flag"><img class="lazy"  src=" ../imgs/teams/<?php echo $game['awayTeam'] ?>.gif" /></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--JOIN-->
                <div class="call">
                    <div class="inner">
                        <div class="user">Enter</div>
                        <div class="action with-buttons"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                    </div>
                </div>
            </a>
        </div>
            <?php
            }//for each upcoming tournaments
            ?>
            </div><!--./Fixtures-->
        </div><!--/.TOP TOURNAMENTS-->
    </div><!--./RIGHT PANEL TOURNAMENTS-->
</div><!-- #/ TOP WRAPPER -->
    <?php require_once 'footer.php'; ?>