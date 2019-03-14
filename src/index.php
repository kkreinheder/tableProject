<!DOCTYPE html>
<html lang="en">
<head>
<title>Table</title>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="main.css" />
</head>
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="/"><span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li>
                <a href="https://devcenter.heroku.com/articles/how-heroku-works"><span class="glyphicon glyphicon-user"></span> How Heroku Works</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-info-sign"></span> Getting Started Guides <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-ruby">Getting Started with Ruby on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-nodejs">Getting Started with Node on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-php">Getting Started with PHP on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-python">Getting Started with Python on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-java">Getting Started with Java on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-go">Getting Started with Go on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-clojure">Getting Started with Clojure on Heroku</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-scala">Getting Started with Scala on Heroku</a></li>
                    <li class="divider"></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-heroku-and-connect-without-local-dev">Getting Started on Heroku with Heroku Connect</a></li>
                    <li><a href="https://devcenter.heroku.com/articles/getting-started-with-jruby">Getting Started with Ruby on Heroku (Microsoft Windows)</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="navbar-right">
                <a href="https://devcenter.heroku.com"><span class="glyphicon glyphicon-book"></span> Heroku Dev Center</a>
            </li>
        </ul>
    </div>
</nav>
    <body>
<div class="jumbotron text-center">
    <div class="container">
        <h1>Table</h1>
        <table class="table table-striped">
            <?php
            include "csv.php";
            include "html.php";
            include "main.php";
            include "record.php";
            include "recordFactory.php";
            main::start("../data/data.csv");
            //$records = File::readCSVtoArray("../data/data.csv", 'record');
            ?>
        </table>
    </div>
</div>
<div>

</div>
</body>
</html>
