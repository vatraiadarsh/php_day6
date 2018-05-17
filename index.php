<?php


#           --------------------------------------------------------------------------------
               # Deployment in github 

                # 1) git init ---> to ini the folder
                # 2) git add . ---> current folder ko sabai vanako ho
                # 3) git commit -m "kai message lakhna"
                # 4) git remote add origine https://github.com/vatraiadarsh/php_day6.git(kaha push garna tasko url vayo)
                # 5) git push -u origin master (main branch ma push garnu vano)
                    # then it will ask the user name and password of github 

                # => to add some more file in github the just do
                    #=> git add .
                    #=> git commit -m "any message"
                    #=> git push -u origin master 
#           --------------------------------------------------------------------------------

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>php_day6</title>
  </head>
  <body>

    <div class="jumbotron">
      <h1 class="display-4">Hello, Adarsh!</h1>
      <?php
      # NOTE: Mysql ra pg ma connect garna tarika farak hunxa

      $host            = 'host    =   ec2-54-225-200-15.compute-1.amazonaws.com';
      $port            = 'port    =    5432';
      $db              = 'dbname  =    d3rqa0nubl1hrl';
      $credentials     = 'user    =    kfoewugrtmxlwj password = de3fd4a35896ed6e50a87af3d4981e94d13100df831a5963a54173b950f7c20c';
     
      $db=pg_connect('$host $port $dbname $credentials');
      if (!$db){
        echo"Error : Unable to open database\n";
      }else {
        echo "opened database successfully\n";
      }
       ?>
    </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



