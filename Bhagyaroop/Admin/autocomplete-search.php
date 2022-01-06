<style>
    .serh{
      width: 100%;
    }
    .serh td:hover{
        color: white;
        background: #A73922;
    }
    .serh td{
        padding:20px 15px 20px 15px;
        background: #d64c31;
        color: white;
        cursor: pointer;
        text-align: center;
        padding-left:15px;
        font-weight: 24px;
    }
    table.not-found{
      width: 100%;
    }
    table.not-found tr td{
      padding:20px 15px 20px 15px;
      font-weight: 24px;
      background: #d64c31;
      color: white;
    }
</style>

<?php
include './../dbconnection.php';
error_reporting(0);

if(!empty($_POST['keyword']))
{
    
    $aKeyword = explode(" ", $_POST['keyword']);
    $query ="SELECT * FROM `users` WHERE `full_name` like '%$aKeyword[0]%' OR `PID` like '%$aKeyword[0]%' ";
  
    for($i = 1; $i < count($aKeyword); $i++) 
    {
        if(!empty($aKeyword[$i])) 
        {
          $query .= " OR field1 like '%" . $aKeyword[$i] . "%'";
        }
    }

    $result = $con->query($query);
    
    ?>
    
    <?php
    if(mysqli_num_rows($result) > 0) 
    {

      $alert="<table class='serh'>";

      
      While($row = $result-> fetch_assoc()) 
      {   						  
        $name = $row['full_name'];
        $id = $row['email'];

        $view = mysqli_query($con,"SELECT * FROM `upload` WHERE `semail` = '$id' ");
        $row1 = mysqli_num_rows($view);
        for($x=1; $x<=$row1; $x++){
          $data1 = mysqli_fetch_assoc($view);
          $educational_qualification=$data1['file1'];
          $payment=$data1['file11'];
        }
        if($payment == ''){
        }else{
          $alert.="<tbody>
                  <tr>
                    <td style='text-align:left' onClick='selectState(\"$id\")'>$name<span>&nbsp;($id)</span></td>
                  </tr>
                </tbody>";
        }
      }

      //$alert.="</ul>";

      $alert.="</table><br>";
      echo $alert;
    }
    else 
    {
      echo "<table class='not-found'><tr><td>Not Found !</td></tr></table>";
    }
}
else
{
    echo "";
}

?>

