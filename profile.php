<!--
***********************************************************
* This template was created from scratch by iheb ben salem
*Contact:ihebbensalem.isetcom@gmail.com
*under the TDC project 21/07/2015
**********************************************************
!-->
<?php
mysql_connect("127.0.0.1","root","root");
mysql_select_db("test");
$ch=show();
$count=mysql_num_rows(mysql_query("select * from feed"));

if (!empty($_POST['p'])) {
$userpost=$_POST['p'];
insert($userpost);
$ch=show();
}
function insert($value)
{
  # code...
mysql_query("INSERT INTO  `test`.`feed` (`id` ,`text`)VALUES (NULL ,  '$value'); ");}


function show()
{
  # code...
return mysql_query(" select * from feed order by id desc limit 3 ;");
}






?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/AdminLTE.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/AdminLTE.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body >

<div class="navbar navbar-static-top navip">
 
 <div class="container-fluid">
    <div class="navbar-header pull-right">
<ul class="nav navbar-nav">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o" id="txt"></i>
                  <span class="label label-warning" id="txt" ><?php echo $count; ?></span>
                </a>
              </ul>



<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
</ul>
</div>
</div>
<div class="control-sidebar-bg"></div></div>
<ASIDE class="main-sidebar">
<section class="sidebar">


</section>

</ASIDE>



<div class="container">
<div class="row">


<div class="col-md-12">
<div class="col-md-12">
<ol class="breadcrumb" id="bro2">
<li class="fa fa-home"><a href="#">Home</a></li>
<li class="fa fa-home"><a href="#">Profile</a></li>
</ol>
</div>

<div class="col-md-1"></div>
<div class="box col-md-3">
<div class="box-body">

<center>
<img src="iheb.jpg" class="img-circle" id="myimage">
<p id="name"><b>Iheb ben salem</b></p>
<p id="position">DEVELPER</p>
<p>
<button class="btn btn-success btn-sm">Follow</button>
<button class="btn btn-danger btn-sm">Message</button>
</p>
</center>
</div>
<div class="col-md-2">

<table>
<tr>
<td class="text-muted" id="number3">51</td>
<td class="text-muted" id="number3">31</td>
<td class="text-muted" id="number3">82</td>
</tr>
<tr>
<td class="text-muted" id="number4">Project</td>
<td class="text-muted" id="number4">Tasks</td>
<td class="text-muted" id="number4">Upload </td>
</tr>
</table>

</div>
</div>
<div class="col-md-2"></div>

<div class="col-md-7">

<div class="callout callout-info">
<h4>Wellcome to TDC</h4>
<p>Our plat-forme is now yours</p>
</div>

<div class="box box-solid" >
  <div  class="box-title">
<h4 id="post">Feeds</h4>
  </div>
<div class="box-body">
  <form method="POST">
<input type="text" class="form-control" placeholder="what's in your mind" name="p">

<p><button type="submit" class="btn btn-success pull-right" id="btn_post">Post</button></p>
</form>
</div>
</div>


              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">#Public</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                                <div class="box-body">

<?php 
while ($row=mysql_fetch_row($ch)) {
  # code...
  $data=$row[1];
echo 
                 ' <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="iheb.jpg" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="#" class="product-title">Iheb ben salem <span class="label label-default pull-right">2 min</span></a>
                        <span class="product-description">
                        '.$data.'
                        </span>
                      </div>
                    </li><!-- /.item -->
                    
                    
                  </ul>
                  ';
                }
                ?>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::;" class="uppercase">More post</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->








</div>
</div>



</div>

</div>























</body>
</html>
