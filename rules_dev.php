<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CraftNanny</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66224425-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>
  <body>
    
      <div class="row">
        <div class="large-12 columns top_bar">
         <span style="font-weight:bold;font-size:36px;color:#1b9bff">
          
           CraftNanny
         </span>
        </div>
 
      </div>
      
      <div class="row">
        <div class="large-12 columns thin_bar">
         
        </div>
 
      </div>


      <div class="row">  
      <div class="large-3 columns">
        <p>
          <div id='cssmenu'>
            <ul>
               <li><a href='home.php'><span>Home</span></a></li>
             </ul>
          </div>
          <soan id="menu_headers">Monitoring</span>
          <div id='cssmenu'>
               
             <ul>  
               <li><a href='tracking.php'><span>Player Tracking</span></a></li>
               <li><a href='energy.php'><span>Energy Storage</span></a></li>
               <li><a href='fluid.php'><span>Fluid Storage</span></a></li>
               </ul>
          </div>
          <soan id="menu_headers">Controls</span>
          <div id='cssmenu'>
               
             <ul>  
               <li><a href='redstone.php'><span>Redstone Controls</span></a></li>
               <li><a href='rednet.php'><span>Rednet Controls</span></a></li>
               <li><a href='custom.php'><span>Custom Module</span></a></li>
               
               </ul>
          </div>
          <soan id="menu_headers">Admin</span>
          <div id='cssmenu'>
               
             <ul>  
               <li  class='active'><a href='rules.php'><span>Set Rules</span></a></li>
               <li><a href='notifications.php'><span>Set Notifications</span></a></li>
               <li class='last'><a href='logout.php'><span>Log out</span></a></li>
            </ul>
          </div>
   
      </div>
        
      
      <div class="large-9 columns">
        
        <h2 style="color:#1b9bff">Rule Based Actions</h2><p>
        
        <h4 style="color:#1b9bff">Energy Storage Rules</h4>
        
        <div class="rules_container" style="border-style:solid;border-width:1px;width:100%;padding:10px;">
          <div class="no_rules" style="text-align:center;color:#666666;font-weight:bold;width:100%">
            No active energy rules.
          </div>  
          
          <p>
            
          <h5 style="color:#1b9bff">Add Rule:</h5>
          
          <div class="row">
            <div class="large-6 columns">
              Module:
            </div>
            <div class="large-6 columns">
              <select class="rules_select">
                <option value="" disabled selected>Select Energy Module</option>
              </select>
            </div>
          </div>
            
          <div class="row">
            <div class="large-6 columns">
              Triggered when:
            </div>
            <div class="large-6 columns">
              <select class="rules_select">
                <option value="" disabled selected>Is greater than</option>
              </select>
            </div>
          </div>
            
        </div>
        
        
        
          
      </div>
        

     

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js/login_check.js"></script>
	
  </body>
</html>
