<?php 
include('comman/connect.php');
include('include/main.php');
include('include/header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thesis</title>
<style type="text/css">

.backbox{margin-bottom: 30px;}

.tr{font-weight: bold; background: #eee;}
.menu{
    width: 100%;
    height: 50px;
    color: blue;
    background: black;

}
.menu li{
    float: left;
    padding: 10px 20px 10px 20px;
    list-style: none;
}
</style>
</head>
<body>
    <div class="menu">
            <ul class="ep_tm_menu"> 
                <li>
                    <a href="thesis.php">All</a>
                </li>
                <li>
                    <a href="thesis_year.php">Year</a>
                </li>
                <li>
                    <a href="thesis_subject.php">Subject</a>
                </li>
                <li>
                    <a href="thesis_supervisors.php">Supervisors</a>
                </li>
                <li> 
                    <a href="thesis_type.php">Thesis Type</a>
                </li>
            </ul>
        </div>
    <div class="container-fluid">
        
        
        <div class="container">
            <div class="row">
                <table class="table table2" border="1">
                    <tr class="tr" align='center'>
                        <td>Publication Id</td>
                        <td>Publication name</td>
                        <td>Subject</td>
                        <td>Superviser</td>
                        <td>Type</td>
                        <td>Year</td>
                        <td>Date</td>
                        <td>Date Of Modify</td>
                        <td>Action</td>
                    </tr>
                    <?php 
                    $year=$_REQUEST['year'];

                    $res=$con->query("select publication_id,thesis_title,subject,thesis_types,date_upload,supervisors,year,date_modify from publication where year='$year'");
                        $i=1;
                        while($row=mysqli_fetch_array($res))
                        {
                            $id=$row['publication_id'];
                            echo "<tr>";
                                echo "<td align='center'>".$row['publication_id']."</td>";
                                echo "<td align='center'>".$row['thesis_title']."</td>";
                                echo "<td align='center'>".$row['subject']."</td>";
                                echo "<td align='center'>".$row['supervisors']."</td>";
                                echo "<td align='center'>".$row['thesis_types']."</td>";
                                echo "<td align='center'>".$row['date_upload']."</td>";
                                echo "<td align='center'>".$row['year']."</td>";
                                echo "<td align='center'>".$row['date_modify']."</td>";
                                echo "<td align='center'><a href='show_publication.php?id=".$id."'>view</a></td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>

        </div>

    </div>
<?php
 include("include/footerstrip.php");
 ?>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>