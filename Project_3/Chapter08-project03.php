<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Google fonts used in this theme  -->
   <link href='../http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
   <link href='../http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,800,600,700,300' rel='stylesheet' type='text/css'>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="shortcut icon" href="../../../assets/ico/favicon.png">

   <title>Travel Template</title>
   <!-- Bootstrap core CSS -->
   <link href="../bootstrap3_travelTheme/dist/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="../bootstrap3_travelTheme/theme.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
      <script src="bootstrap3_travelTheme/assets/js/html5shiv.js"></script>
      <script src="bootstrap3_travelTheme/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
   <?php
      function generateLink($url, $label, $class)
      {
         return '<a href="' . $url . '" class="' . $class . '">' . $label . '</a>';
      }

      function outputPostRow($number)
      {
         include('travel-data.php');
         if ($number == 1) 
         {
            $thumb = '<img src="../images/travel/' . $thumb1 . '" alt="' . $title1 . '" class="img-thumbnail" />';
            $title = $title1;
            $userID = "user.php?id=" . $userId1;
            $postID = "post.php?id=" . $postId1;
            $userName = utf8_encode($userName1);
            $date = $date1;
            $excerpt = $excerpt1;
         } 
         else if ($number == 2) 
         {
            $thumb = '<img src="../images/travel/' . $thumb2 . '" alt="' . $title2 . '" class="img-thumbnail" />';
            $title = $title2;
            $userID = "user.php?id=" . $userId2;
            $postID = "post.php?id=" . $postId2;
            $userName = utf8_encode($userName2);
            $date = $date2;
            $excerpt = $excerpt2;
         } 
         else if ($number == 3)
          {
            $thumb = '<img src="../images/travel/' . $thumb3 . '" alt="' . $title3 . '" class="img-thumbnail" />';
            $title = $title3;
            $userID = "user.php?id=" . $userId3;
            $postID = "post.php?id=" . $postId3;
            $userName = utf8_encode($userName3);
            $date = $date3;
            $excerpt = $excerpt3;
         }

         echo 
         '<div class="row">
            <div class="col-md-2">'
            . generateLink($postID, $thumb, "") .
            '</div>

            <div class="col-md-10">
               <h2>' . $title . '</h2>
               <div class="details">
                  Posted by ' . generateLink($userID, $userName, "") .
                  '<span class="pull-right">' . $date . '</span>
               </div>
               <p class="excerpt">'
                  . $excerpt .
               '</p>
               <p>' . generateLink($postID, "Read more", "btn btn-primary btn-sm") . '</p>
            </div>
         </div>';
      }

      function outputPagination($startNum, $currentNum)
      {
         echo '<ul class="pagination">';
         if ($startNum <= 10) 
         {
            echo '<li class="disabled"><a href="#">&laquo;</a></li>';
         } 
         else 
         {
            echo '<li><a href="#">&laquo;</a></li>';
         }

         for ($i = $startNum; $i <= $startNum + 10; $i++) 
         {
            if ($i == $currentNum) 
            {
               echo '<li class="active"><a href="#">' . $i . '</a></li>';
            } else 
            {
               echo '<li><a href="#">' . $i . '</a></li>';
            }
         }

         echo '<li><a href="#">&raquo;</a></li></ul>';
      }
   ?>

   <?php include('header.php'); ?>

   <div class="container">
      <div class="row">
         <?php include('left_navigation.php'); ?>
         <div class="col-md-9">
            <ol class="breadcrumb">
               <li><a href="#">Home</a></li>
               <li><a href="#">Browse</a></li>
               <li class="active">Posts</li>
            </ol>

            <div class="jumbotron" id="postJumbo">
               <h1>Posts</h1>
               <p>Read other travellers' posts ... or create your own.</p>
               <p>
                  <a class="btn btn-warning btn-lg">Learn more &raquo;</a>
               </p>
            </div>

            <div class="postlist">
               <?php outputPostRow(1) ?>
               <hr />

               <?php outputPostRow(2) ?>
               <hr />

               <?php outputPostRow(3) ?>
            </div>

            <?php outputPagination(11, 19) ?>

         </div> <!-- end main content column -->
      </div> <!-- end main content row -->
   </div> <!-- end main content container -->

   <?php include('footer.php'); ?>

   <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="../bootstrap3_travelTheme/assets/js/jquery.js"></script>
   <script src="../bootstrap3_travelTheme/dist/js/bootstrap.min.js"></script>
   <script src="../bootstrap3_travelTheme/assets/js/holder.js"></script>
</body>
</html>