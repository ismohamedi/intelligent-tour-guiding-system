
<style type="text/css">
  #btn{
    width: 200px;
    color: white;
    font-weight: bold;
  }

</style>
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="background-color:#15677A; margin-bottom: 0; position: fixed; width: 100%;z-index: 1000">
            <div class="navbar-header" style="background:#15677A; " >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="background: #15677A">TourTz-Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 20px;">

<!-- SHOW WHO LOG IN ON THAT  TIME INTO SYSTEM -->


 &nbsp;

 <!-- SHOW WHO LOG IN ON THAT  TIME INTO SYSTEM END HERE -->
  <a class="btn btn-danger square-btn-adjust" onclick="back()">Logout</a> </div>
       
<script>
    function back(){
      var change = confirm('Are you sure want Logout');
      if(change){
        window.location.assign("../logout.php" );
      }
      else{
        alert('Be free,Continue With Your Activities.');
      }
    }
    </script>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="background: #15677A;position: fixed;z-index: 1000;margin-top: 5%">
            <div class="sidebar-collapse" style="background: #15677A">
                <ul class="nav" id="main-menu" style="background: #15677A">
                <li class="text-center" style="background: #15677A">
                   <!--  <img src="assets/img/find_user.png" /> -->


<!-- display image on profile leftpanell -->
                    </li>
                
                    
                    <li style="background: #15677A">
                        <a  href="index1.php" style="background: #15677A"><i class="fa fa-dashboard fa-3x"></i> Home</a>
                    </li>
               <!--     <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li> -->
                     <li  >
                        <a   href="attractions/attractions.php" style="background: #15677A"><i class="fa fa-table fa-3x"></i>Attractions</a>
                    </li>

                      <li  >
                        <a  href="accommodations/accommodations.php" style="background: #15677A"><i class="fa fa-table fa-3x"></i>Accommodations</a>
                    </li>
    
                    <li style="background: #15677A" >
                        <a   href="upload_attractions.php" style="background: #15677A"><i class="fa fa-edit fa-3x"></i> ADD</a>
                    </li>               
                                                    
                    
                                       
                    <li>
                        <a href="#" style="background: #15677A"><i class="fa fa-sitemap fa-3x"></i> UPDATE<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" style="background: #15677A">
                            <li>

                              <form method="post" action="attractions/update_attractions.php" style="margin-left: 10%;" style="background: #15677A">
                                 <button class="btn btn-info" id="btn"><a style="color: black; text-decoration: none;">Attractions</a></button>
                               </form>
                            </li>
                            <br>
                            <li>

                              <form method="post" action="location/update_location.php" style="margin-left: 10%;" style="background: #15677A">
                                 <button class="btn btn-info" id="btn"><a style="color: black; text-decoration: none;">location</a></button>
                               </form>
                            </li>
                            <br>
                            <li>

                              <form method="post" action="accommodations/update_accommodations.php" style="margin-left: 10%;">
                                 <button class="btn btn-info" id="btn"><a style="color: black; text-decoration: none;" style="background: #15677A">Accommodation</a></button>
                               </form>
                            </li>
                        </ul>
                      </li>  
                  
                </ul>
               
            </div>