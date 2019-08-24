<?php 
    
    include "lib/connect.php";

    //select query
    $select_sql="SELECT * FROM payment";
    $select_query=$conn->query($select_sql);

    include "header.php";

?>

    
        <!--    banner part starts   -->
    <div class="col-md-12 banner">
    
    <h1 id="info1">See All Booking</h1>
	<div id="info" class="col-md-12">
           
            <!--=====================
          Content
======================-->
        <section id="content">
            <div class="table table-dark">
                <table border="1" width=100%;>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Phone_number</th>
                        <th>Address</th>
                        <th>Order Id</th>
<!--                        <th>Phone Number</th>-->
<!--                        <th>Action</th>-->
                    </tr>
                    <?php   if($select_query->num_rows>0){         ?>
                    <?php while($data=$select_query->fetch_assoc()){ ?>
                    <tr>
                        <th>
                            <?php echo $data['bName'] ?>
                        </th>
                        <th>
                            <?php echo $data['bage'] ?>
                        </th>
                        <th>
                            <?php echo $data['bEmail'] ?>
                        </th>
                        <th>
                            <?php echo $data['bphone'] ?>
                        </th>
                        <th>
                            <?php echo $data['baddress'] ?>
                        </th>
<!--  <th>
                            <?php echo $data['order_id'] ?>
                        </th>
<!--
                        <th>
                         
                        </th>
-->
                        <td>
                            <a href="#">Confirmed</a>
                            <a href="#">Not Confirmed</a>
                        </td>
                    </tr>

                    <?php } ?>
                    <?php } else{  ?>
                    <tr>
                        <td colspan="6">No Records Found!</td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </section>
	</div>
      
       </div>
        
        
        <!--    banner part ends   -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
