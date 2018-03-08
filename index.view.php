 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
        <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link rel="stylesheet" href="/css/app.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        
        <nav>
          <div class="nav-wrapper">
            <a href="https://github.com/josephmtinangi" class="brand-logo">JM</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="https://github.com/josephmtinangi/josephmtinangi.atwebpages.com">Github</a></li>
            </ul>
          </div>
        </nav>

        <div class="container">
          
          <h1>Your information</h1>

          <table class="bordered highlight">
            <tbody>
             <tr>
               <th>Operating System</th>
               <td><?=$data['os']['name']?></td>
             </tr>
             <tr>
               <th>Web browser</th>
               <td><?=$data['browser']['name']?></td>
             </tr>
             <tr>
               <th>IP address</th>
               <td><?=$data['network']['ipAddress']?></td>
             </tr>
             <tr>
               <th>Device</th>
               <td><?=$data['device']['name']?></td>
             </tr>
             <tr>
               <th>Language</th>
               <td><?=$data['language']['language']?></td>
             </tr>
            </tbody>
          </table>

        </div> 

        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Joseph Mtinangi</h5>
                <p class="grey-text text-lighten-4">Life is a struggle</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Github</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            &copy; <?=date('Y')?> All Rights Reserved
            <a class="grey-text text-lighten-4 right" href="https//github.com/josephmtinangi">Github</a>
            </div>
          </div>
        </footer>             
      
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
  </html>