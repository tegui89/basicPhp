<?php

// Motrar todos los errores de PHP
ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL);
// *************************************

require_once('jobs.php');
require('./app/models/Job.php');// Puedo incluir archivos con include o require, la diferencia es que si no lo encuentra al archivo include arroja un warning, en cambio require corta la ejecucion del programa.
require './app/models/Project.php';

    $name = [
        'lastName' => 'Gallastegui',
        'firstName' => 'Matias',
        'secondName' => 'Adrian'
    ];

    $jobs = [];

    $i = 0;
    foreach($trabajos as $value) {
        $jobs[$i] = new Job($value['lenguage'], $value['description'], $value['duration']);
        $i+=1;
    }

    $proj = new Project('Vidroop', 'Desarrollo de una platforma de educacion.' , 12, [ 0 => 'Vue js', 1 => 'PHP', 3 => 'HTML', 4 => 'CSS']);
    // var_dump($trabajos);
    // var_dump($jobs);

    function printJobs($job) {
        echo '<li class="work-position">';
        echo '<h5> ' . $job->getTitle() . '</h5>';
        echo '<p>' . $job->getDescription() . '</p>';
        echo '<p> Duration: ' . $job->getDuration() . ' </p>';
        echo '<strong>Achievements:</strong>'; 
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo ' </ul>';
        echo '</li>';     
    }

    // $profession = [
    //     'PHP Developer',
    //     'js Developer'
    // ];
    // var_dump($jobs); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class=" row">
            <div class="avatar">
                <img src="./assets/imagenmia.png" class="rounded float-left" alt="...">        
            </div>
            <div class="col-6">
                <ul class="datos">
                    <li><h1><?php echo "$name[lastName] $name[firstName] $name[secondName]"; ?></h1></li>
                    <li><h3><?php  echo $jobs[0]->getTitle() ?></h3></li>
                    <li><span>email: matiasgallastegui89gmail.com</span></li>
                    <li><span>github: github/tegui89</span></li>
                </ul> 
            </div>
        </div>
        <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray" >Carrer Summary</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Work Experience</h3>
          <ul>
            <?php 
                foreach ($jobs as $value) {
                   printJobs($value);
                }        
            ?>
          </ul>
        </div>
        <div>
            <h3 class="border-bottom-gray">Projects</h3>
            <div class="project">
                <h5><?php echo $proj->getTitle() ?></h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p><?php echo $proj->getDescription() ?></p>
                        <strong>Technologies used:</strong>
                        <?php 
                            foreach($proj->getTecnologies() as $value) {
                                echo '<span class="badge badge-secondary"> ' . $value . '</span>';
                            }
                        ?>
                      </div>
                </div>
            </div>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                    </div>
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus accusantium, mollitia a repellat perferendis dolores. Illo, eum soluta labore nisi architecto cupiditate, necessitatibus repellendus temporibus maxime expedita, maiores assumenda illum.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                    </div>
                </div>
            </div>
          </div>
      </div>
      <div class="col-3">
        <h3 class="border-bottom-gray" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class="border-bottom-gray" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
          Designed by @hectorbenitez
      </div>
    </div>
  </div>

    </div>
  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>