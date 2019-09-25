<?php
include_once './conection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a blog page with a list of posts."><title>StillFrag-Store/RPG</title>    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel="stylesheet" href="css/layouts/blog.css">
    <title>Stillfrag Store RPG</title>
</head>
<body>

<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">Jogos de RPG</h1>
            <h2 class="brand-tagline">Melhores Jogos de RPG</h2>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="simulacao.php">RPG</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">

                <!-- A single blog post -->
                <section class="post">
                    <header class="post-header">
                        
                        <h2 class="post-title" >The Witcher 3: Wild Hunt <a href="tw3.php" >Compre</a></h2> 

                        <p class="post-meta">
                            By <a class="post-author">CD Project Red</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            Yesterday at CSSConf, we launched Pure – a new CSS library. Phew! Here are the <a href="https://speakerdeck.com/tilomitra/pure-bliss">slides from the presentation</a>. Although it looks pretty minimalist, we’ve been working on Pure for several months. After many iterations, we have released Pure as a set of small, responsive, CSS modules that you can use in every web project.
                        </p>
                    </div>
                </section>
            </div>

            <div class="posts">


                    <div class="post-description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </section>
            </div>

            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                        <a>Todos os Direitos Reservados | Stillfrag-Team Grim</a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>