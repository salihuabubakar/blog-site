
<?php 
    include_once('Includes/connection.php');
   

    //Prepare sql statement
    $sql_statement = "SELECT * FROM myblog_table";

    //Run sql statement
    $run_query = mysqli_query($connection, $sql_statement);

    //get the number of rows in table (step2)
    $number_rows = mysqli_num_rows($run_query);
    //echo $number_rows;

    //Check if the contact information is empty
    if ($number_rows > 0) {
        while ($get = mysqli_fetch_array($run_query)) {
            //get names from table
            $myblog_id = $get['mblog_id'];
            $myblog_title = $get['myblog_title'];
            $myblog_paragraph = $get['myblog_paragraph'];

            $blog_id = md5($myblog_id);

            echo ' 
                          <div class="news-div">
   
                             <div class="news-feed title">
                                 <p>'.$myblog_title.'</p>
                                 <div>
                                     <a href="pages/myblog_paragraph.php?token='.$blog_id.'">Read More</a>
                                 </div>
                             </div> <br>

                          </div>      
                 '; 
        }
    }

?>  