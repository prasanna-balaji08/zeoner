<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                    <ul class="nav child_menu">
					<?php 
					include 'dbcon.php';
						$query1=mysqli_query($con,"select * from branch ORDER BY branch_name")or die(mysqli_error($con));
						while ($row=mysqli_fetch_array($query1)){
						$id=$row['branch_id'];?>
                      <li><a href="inventory.php?id=<?php echo $row['branch_id'];?>"><?php echo $row ['branch_name'];?></a></li>  
					<?php }?>
                    </ul>
                  </li>                  
                  <li><a href = "user.php"><i class="fa fa-users"></i> User <span class="fa fa-chevron-right"></span></a></li>
                  <li><a href = "branch.php"><i class="fa fa-building"></i> Branch <span class="fa fa-chevron-right"></span></a>
                   
                   </li>
                </ul>
              </div>
            
            </div>