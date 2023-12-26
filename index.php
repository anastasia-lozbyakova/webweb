<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PALFINDER</title>
    <script defer src="./main.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> <!--bin icon-->
</head> 
<body>

    <header class="header">
        <div class="wrapper">
            <div class="header_wrapper">
                <div class="header_logo">
                    <a href="#" class="header_logo-link">
                        <img src="./img/svg/logo-palfinder.svg" alt="PALFINDER_logo" class="header_logo-pic">
                    </a>
                </div>
                <nav class="header_nav">
                    <ul class="header_list">
                        <li class="header_item">
                            <a href="#!" class="header_link">Menu</a>
                        </li>
                        <li class="header_item">
                            <a href="#!" class="header_link">About</a>
                        </li>
                        <li class="header_item">
                            <a href="#!" class="header_link">Rules</a>
                        </li>
                        <li class="header_item">
                            <a href="#!" class="header_link">Profile</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="main">
        <section class="intro">
            <div class="wrapper">
                <div class="intro_wrapper">
                    <h1 class="intro_title">IT’S TIME TO HAVE FUN TOGETHER!</h1>
                    <p class="intro_subtitle">Make a profile, fill out the questionnaire and find someone to play with!
                        You can find just an ally for a few matches or even a pal that likes the same
                        game as you. It’s more interesting to play with someone than play alone.</p>
 
                    <a href="#" class="sign_up_click">First time? Click here to sign up for free</a> <!--<br>
                    <a href="https://www.artstation.com/artwork/ZGnl80" class="background_author">Author of the background on ArtStation</a>-->


                    <div class="form_wrapper">
                        <form id="form" action="form.php" method="post">
                            <h1>Sign in</h1>

                            <div class="input_box">
                                <label for="name_field"></label>
                                <input id="name_field" name="username" type="text" placeholder="Username" required>
                            </div>
                            <div class="input_control">
                                <div class="input_box">
                                    <label for="email_field"></label>
                                    <input id="email_field" name="email" type="email" placeholder="Email" required>
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="input_control">
                                <div class="input_box">
                                    <label for="password_field"></label>
                                    <input id="password_field" name="password" type="password" placeholder="Password" required>
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="submit">
                                <button type="submit" name="submit" class="btn">Sign in</button>
                                <a href="#" class="frgt">Forgot password?</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <section class="second_page">
            <div class="sec_page_wrap">
                <h2>FOR TOURNAMENTS AND FOR CHILL</h2>
                <p class="sec_subtitle">The main idea of PALFINDER is to help  gamers find a company to play with. Don’t want to play alone tonight? You need help in game?
                    Want to play ranked games with good players? Or just want to find friends? Try PALFINDER!</p>

                    <button id="theme_toggle" class="theme_toggle" aria-label="theme_toggle">Switch</button>

                <div class="games">
                    <h3 class="select">Select a game:</h3>
                    <div class="game_chooser">
                        <ul class="chooser" id="game-chooser">

                            <li class="game valorant">
                                <a href="#" class="valorant_link">
                                    <img class="valorant_pic" src="./img/svg/Valorant_logo_-_pink_color_version_(cropped) 1.svg" alt="valorant">
                                    <p class="valorant_name">Valorant</p>
                                </a>
                                <p class="valorant_info">A character-based 5v5 tactical shooter
                                    <br> by Riot Games. <br>
                                    More: <a class="official_site" href="https://playvalorant.com/en-gb/">Valorant official site</a>
                                </p>
                                <button onclick="deleteGame()" id="remove-li">
                                    <span class="material-symbols-outlined" id="delete-lol">delete</span>
                                </button>                            </li>
                            
                            <li class="game apex_legends" data-post-id="apex2">
                                <a href="#" class="apex_link">
                                    <img class="apex_pic" src="./img/svg/logo-Apex-Legends 1.svg" alt="apex_legends">
                                    <p class="apex_legends_name">Apex Legends</p>
                                </a>
                                <p class="apex_info">Cross-platform free-to-play Hero shooter <br>
                                    by EA Games. <br>
                                    More: <a class="official_site" href="https://www.ea.com/games/apex-legends">Apex Legends official site</a>
                                </p>
                                <button onclick="deleteGame()" id="remove-li">
                                    <span class="material-symbols-outlined" id="delete-lol">delete</span>
                                </button>                            </li>

                            <li class="game lol" data-post-id="lol3">
                                <a href="#" class="lol_link">
                                    <img class="lol_pic" src="./img/svg/League_of_Legends_2019_vector 1.svg" alt="league_of_legends">
                                    <p class="lol_name">LoL</p>
                                </a>
                                <p class="lol_info">A team-based game with over 140 champions <br>
                                    by Riot Games. <br>
                                    More: <a class="official_site" href="https://www.leagueoflegends.com/en-gb/">League of Legends official site</a>
                                </p>
                                <button onclick="deleteGame()" id="remove-li">
                                    <span class="material-symbols-outlined" id="delete-lol">delete</span>
                                </button>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="ai_img">
                    <img src="./img/png/image 1.png" alt="cyberpunk_game_club">
                </div>

                <div class="feedback_text">
                    <h3 class="feedback_title">Feedback</h3>
                    <p class="feedback_subtitle">You can write us if you have some suggestions or questions about PALFINDER.</p>
                    <ul class="feedback_links_list">
                        <li class="feedback_item">
                            <a href="#" class="feedback_icon">
                                <img src="./img/svg/icons8-instagram-256 1.svg" alt="instagram">
                            </a>
                        </li>
                        <li class="feedback_item">
                            <a href="#" class="feedback_icon">
                                <img src="./img/svg/icons8-телеграмма-app-200 1.svg" alt="telegram">
                            </a>
                        </li>
                        <li class="feedback_item">
                            <a href="#" class="feedback_icon">
                                <img src="./img/svg/icons8-discord-240 1.svg" alt="discord">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

</body>
</html>