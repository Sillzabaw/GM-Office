<link rel="stylesheet" href="https://lhs-pro.net/public/global.css">
<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=u725857340_kmLwY;charset=utf8', 'u725857340_CosU2', 'Rjj8sm4njv',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$config_info=$bdd->query('SELECT * FROM config_league');
$config=$config_info->fetch();
try {
    $user_name = Auth::user()->name;
    $is_admin = Auth::user()->admin;
} catch (\Throwable $th) {
    $user_name = 'Connexion';
    $is_admin = 0;
}
?>

        <!-- Development -->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

<!-- Production -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<!-- datatable -->
<link href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.min.js"></script>



<div class="card bg-secondary-subtle" style="margin: 15px;">
    <div class="card-body shadow" style="">
        <div class="row">

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="https://lhs-pro.net/">
                        <img src="https://lhs-pro.net/public/image/logo_lhs.png" width="150" class="gmofficelogo">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item"><a class="nav-link" style="padding-left: 50px"></a></li>
                            <li class="nav-item"><a class="nav-link" style="padding-left: 50px"></a></li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-square-question"></i> Information
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/gm_list"><i class="fa-solid fa-user-group"></i> Directeur Généraux</a></li>
                                    <li><a class="dropdown-item" href="#">GM Office</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-scale-balanced"></i> Réglements
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-turn-down-right"></i> Point de presse</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-turn-down-right"></i> </a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-turn-down-right"></i> </a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-turn-down-right"></i> </a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-newspaper"></i> Média
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Point de presse</a></li>
                                    <li><a class="dropdown-item" href="#">Journaux</a></li>
                                    <li><a class="dropdown-item" href="/twitter"><i class="fa-brands fa-x-twitter"></i> Media</a></li>
                                    <li><a class="dropdown-item" href="#">Trophée</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-users"></i> Équipes
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=1"><img src="https://lhs-pro.net/public/image/SM/ANA.png" width="35"> Anaheim Ducks</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=2"><img src="https://lhs-pro.net/public/image/SM/ATL.png" width="35"> Atlanta Thrashers</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=3"><img src="https://lhs-pro.net/public/image/SM/BOS.png" width="35"> Boston Bruins</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=4"><img src="https://lhs-pro.net/public/image/SM/BUF.png" width="35"> Buffalo Sabres</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=5"><img src="https://lhs-pro.net/public/image/SM/CGY.png" width="35"> Calgary Flames</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=6"><img src="https://lhs-pro.net/public/image/SM/CAR.png" width="35"> Carolina Hurricanes</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=7"><img src="https://lhs-pro.net/public/image/SM/CHI.png" width="35"> Chicago Blackhawks</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=8"><img src="https://lhs-pro.net/public/image/SM/COL.png" width="35"> Colorado Avalanche</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=9"><img src="https://lhs-pro.net/public/image/SM/CBJ.png" width="35"> Columbus Blue Jackets</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=10"><img src="https://lhs-pro.net/public/image/SM/DAL.png" width="35"> Dallas Stars</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=11"><img src="https://lhs-pro.net/public/image/SM/DET.png" width="35"> Detroit Red Wings</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=12"><img src="https://lhs-pro.net/public/image/SM/EDM.png" width="35"> Edmonton Oilers</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=13"><img src="https://lhs-pro.net/public/image/SM/FLO.png" width="35"> Florida Panthers</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=14"><img src="https://lhs-pro.net/public/image/SM/LAK.png" width="35"> Los Angeles Kings</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=15"><img src="https://lhs-pro.net/public/image/SM/MIN.png" width="35"> Minnesota Wild</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=16"><img src="https://lhs-pro.net/public/image/SM/MTL.png" width="35"> Montreal Canadiens</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=19"><img src="https://lhs-pro.net/public/image/SM/NSH.png" width="35"> Nashville Predators</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=20"><img src="https://lhs-pro.net/public/image/SM/NJD.png" width="35"> New Jersey Devils</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=17"><img src="https://lhs-pro.net/public/image/SM/NYI.png" width="35"> New York Islanders</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=18"><img src="https://lhs-pro.net/public/image/SM/NYR.png" width="35"> New York Rangers</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=21"><img src="https://lhs-pro.net/public/image/SM/OTT.png" width="35"> Ottawa Senators</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=22"><img src="https://lhs-pro.net/public/image/SM/PHI.png" width="35"> Philadelphia Flyers</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=23"><img src="https://lhs-pro.net/public/image/SM/PHO.png" width="35"> Phoenix Coyotes</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=24"><img src="https://lhs-pro.net/public/image/SM/PIT.png" width="35"> Pittsburgh Penguins</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=25"><img src="https://lhs-pro.net/public/image/SM/SJS.png" width="35"> San Jose Sharks</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=26"><img src="https://lhs-pro.net/public/image/SM/STL.png" width="35"> St. Louis Blues</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=27"><img src="https://lhs-pro.net/public/image/SM/TBL.png" width="35"> Tampa Bay Lightning</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=28"><img src="https://lhs-pro.net/public/image/SM/TOR.png" width="35"> Toronto Maple Leafs</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=29"><img src="https://lhs-pro.net/public/image/SM/VAN.png" width="35"> Vancouver Canucks</a></li>
                                    <li><a class="dropdown-item" style="padding: 0.0rem 1rem;"href="https://lhs-pro.net/rosters?team=30"><img src="https://lhs-pro.net/public/image/SM/WSH.png" width="35"> Washington Capitals</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-hockey-sticks"></i> Ligue
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/free_agent_fw"><i class="fa-solid fa-user-tie"></i> Agent Libre : Attaquant</a></li>
                                    <li><a class="dropdown-item" href="/free_agent_df"><i class="fa-solid fa-user-tie"></i> Agent Libre : Défenseur</a></li>
                                    <li><a class="dropdown-item" href="/free_agent_go"><i class="fa-solid fa-user-tie"></i> Agent Libre : Gardien</a></li>
                                    <li><a class="dropdown-item" href="/restricted_free_agent"><i class="fa-solid fa-user-tie"></i> Agent Libre Restriction</a></li>
                                    <li><a class="dropdown-item" href="/future_free_agent"><i class="fa-solid fa-user-tie"></i> Futur Agent libre</a></li>
                                    <li><a class="dropdown-item" href="/waivers"><i class="fa-solid fa-user-tag"></i> Ballotage</a></li>
                                    <li><a class="dropdown-item" href="/injury"><i class="fa-solid fa-user-injured"></i> Blessés</a></li>
                                    <li><a class="dropdown-item" href="/suspension"><i class="fa-solid fa-user-police-tie"></i> Suspensions</a></li>
                                    <li><a class="dropdown-item" href="/retirement"><i class="fa-solid fa-user-clock"></i> Retraites</a></li>
                                    <li><a class="dropdown-item" href="/captaincy"><i class="fa-solid fa-user-shield"></i> Capitanats</a></li>
                                    <li><a class="dropdown-item" href="/trade_history"><i class="fa-solid fa-people-arrows"></i> Transaction</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-calendar-days"></i> Résultats
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/calendar_nhl"><i class="fa-solid fa-calendar-days"></i> Calendrier NHL</a></li>
                                    <li><a class="dropdown-item" href="/calendar_ahl"><i class="fa-solid fa-calendar-days"></i> Calendrier AHL</a></li>
                                    <li><a class="dropdown-item" href="#">Championnat junior</a></li>
                                    <li><a class="dropdown-item" href="#">Championnat du monde</a></li>
                                    <li><a class="dropdown-item" href="#">Match des étoiles</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-chart-bar"></i> Statistiques
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/standing_nhl"><i class="fa-solid fa-list-ol"></i> Classement NHL</a></li>
                                    <li><a class="dropdown-item" href="/stats_nhl"><i class="fa-solid fa-chart-bar"></i> Statistiques NHL</a></li>
                                    <li><a class="dropdown-item" href="/leaders_nhl"><i class="fa-sharp fa-solid fa-chart-pie"></i> Meneurs NHL</a></li>
                                    <li><a class="dropdown-item" href="/view_lineup_nhl"><i class="fa-solid fa-bars"></i> Alignements NHL</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/standing_ahl"><i class="fa-solid fa-list-ol"></i> Classement AHL</a></li>
                                    <li><a class="dropdown-item" href="/stats_ahl"><i class="fa-solid fa-chart-bar"></i> Statistiques AHL</a></li>
                                    <li><a class="dropdown-item" href="/leaders_ahl"><i class="fa-sharp fa-solid fa-chart-pie"></i> Meneurs AHL</a></li>
                                    <li><a class="dropdown-item" href="/view_lineup_ahl"><i class="fa-solid fa-bars"></i> Alignements AHL</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-money-check-dollar"></i> Finances
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/payroll"><i class="fa-solid fa-dollar-sign"></i> Masse Salariale</a></li>
                                    <li><a class="dropdown-item" href="/buyout"><i class="fa-solid fa-file-invoice-dollar"></i> Rachats</a></li>
                                    <li><a class="dropdown-item" href="/retained"><i class="fa-solid fa-filter-circle-dollar"></i> Retenue Salariale</a></li>
                                    <li><a class="dropdown-item" href="#">Sanctions</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-graduation-cap"></i> Repêchage
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/draft_pick"><i class="fa-solid fa-arrow-down-1-9"></i> Choix Disponible</a></li>
                                    <li><a class="dropdown-item" href="/draft"><i class="fa-solid fa-chalkboard-user"></i> Repêchage <?=$config['draft_years']?></a></li>
                                    <li><a class="dropdown-item" href="/draft_central"><i class="fa-solid fa-user-graduate"></i> Centrale de repêchage</a></li>
                                    <li><a class="dropdown-item" href="#">Future jeunes</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-timeline-arrow"></i> Historiques
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Historiques équipes</a></li>
                                    <li><a class="dropdown-item" href="#">Historiques éffectifs</a></li>
                                    <li><a class="dropdown-item" href="#">Historiques statistiques saison</a></li>
                                    <li><a class="dropdown-item" href="#">Historiques statistiques série</a></li>
                                    <li><a class="dropdown-item" href="#">Historique repêchages</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>

        </div>
    </div>
</div>

