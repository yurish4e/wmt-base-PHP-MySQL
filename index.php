<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; ">
    <meta charset="utf-8">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="jquery-1.11.2.min.js"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <title>Problems</title>
</head>

<body>
<script type="text/javascript">
$(document).ready(function(){
    $("p").click(function () {
      $(this).siblings("article").slideToggle("fast");
    });   
    
});
</script>

<script type="text/javascript">
$(document).ready(function() {
  $('article').draggable();

  
});
</script>

<script type="text/javascript">

    $( init );
        function init() {
        $('#redaction').draggable();
}
 
    

</script>

<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="index.php">Home</a></li>
  <li role="presentation"><a href="info_form.html">Add answer</a></li>
</ul>
<div class="row-fluid">
   <div class="col-md-8 problem-block">
       <h1>General questions</h1>
        <?php require 'scripts/connect.php'; ?>
        <?php $query="SELECT * FROM `general_problems`" ;
        $res=mysql_query($query); 
        while($query=mysql_fetch_array($res))// выводим данные из БД 
        { 
            echo "<div>"; 
            echo "<p>".$query[ 'short_problem']. "</p>"; 
            echo "<article>".$query[ 'full_problem']. "</article>";
            echo "<article>".$query[ 'info']. "</article>";
            echo "<article class=\"notice\">".$query[ 'notice']. "</article>"; 
            echo "</div>"; } 
            mysql_free_result($res); // очищаем 
       ?>       
   </div>
  
   <div class="col-md-4">
       <textarea  id="" cols="80" rows="10"></textarea>     
   </div>
   

</div>
</body>

</html>