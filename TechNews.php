
<!DOCTYPE html>

<html>

<head>
  <title>TechNews</title>
  <link rel="stylesheet" type="text/css" href="newStyle.css">

</head>

<body>
  <div id="mainDiv1">
    <div id="mainD">


      <header>

    

        <p id="other">
          <a id="Tn" href="http:\\www.Tnews.com"> <img id="home" src="home.png"> TNews</a> <a id="new" href="http:\\www.New.com">New</a>

          <a class="other" href="http:\\www.Commens.com">Comments</a>
          <a class="other" href="http:\\www.Show.com">Show 
        <a class="other"  href="http:\\www.Ask.com">Ask</a>
          <a class="other" href="http:\\www.Jobs.com">Jobs </a>
          <a class="other" href="./Submit.php">Submit News </a>
        </p>


        <div id="Hline"></div>
        <p id="main"> Main Stories <code id="date">10/02/2017</code></p>

        <select id="Sort-selector">
            <option value="">Select the type</option>
          
            <option value="Comment">Comment</option>
            <option value="Date">Date</option>
        
       
       
           </select>
           
           
           

        <div id="Hline"></div>



        <form id="Main-F">
          <ul id="sortable">

          </ul>
        </form>


        <div class="line"></div>

      </header>

      <footer>
        <div id="Fline"></div>
        <p>&copy;2017 HN Inc. All Right Reserved</p>
        <p id="Footer"> <a class="r" href="http:\\www.P.com">Privact</a> |
          <a class="r" href="http:\\www.TOF.com">Terms of Use</a> |
          <a class="r" href="http:\\www.Contact.com">Contact</a> </p>


      </footer>
    </div>
  </div>
</body>

<script lang="Javascript" type="text/javascript">
 
  

var g = [];

   var doit = function () {
var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "./getNews.php", true)
    xhttp.send();
      
   
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        
       g = JSON.parse(this.response);
      
          console.log(g);
           done(g);
           } 
        }
   }
  console.log("IN")
     doit();





    function done(g){
      

  var main_form = document.querySelector('#Main-F');
  var url1 = document.createElement('li')
  var url2 = document.createElement('ul')
  var line = document.createElement('div');
  var ancor = document.createElement('a')
  ancor.className = "r";
  url1.className="bor";


  var main_ul = document.querySelector('#sortable');


  line = document.getElementById("line")
  var Selector = document.getElementById("Sort-selector");

  Selector.onchange = function () {
    if (Selector.value == "Comment") {
      document.getElementById("sortable").innerHTML = null;
      var len = g.length;
      for (var i = len - 1; i >= 0; i--) {
        for (var j = 1; j <= i; j++) {
          if (g[j - 1].comment > g[j].comment) {

            var temp = g[j - 1];
            g[j - 1] = g[j];
            g[j] = temp
          }
        }
      }


 for (var i = g.length - 1; i >= 0; i--) {
         
        ancor.innerHTML = (g[i].title);
        ancor.setAttribute("href", g[i].url);
        main_ul.appendChild(ancor)
        main_ul.innerHTML += '&nbsp&nbsp&nbsp';
        main_ul.appendChild(url2)
        url1.innerHTML = (g[i].date + " | Comments " + g[i].comment)
        url2.appendChild(url1)
        main_ul.innerHTML += '&nbsp&nbsp&nbsp';
      }
    }  
    
    else if (Selector.value == "Date") {

      document.getElementById("sortable").innerHTML = null;
      var len = g.length;
      for (var i = len - 1; i >= 0; i--) {
        for (var j = 1; j <= i; j++) {
          if (g[j - 1].date > g[j].date) {

            var temp = g[j - 1];
            g[j - 1] = g[j];
            g[j] = temp
          }
        }
      }

      for (var i = g.length - 1; i >= 0; i--) {

        

        ancor.innerHTML = (g[i].title);
        ancor.setAttribute("href", g[i].url);
        main_ul.appendChild(ancor)
        main_ul.innerHTML += '&nbsp&nbsp&nbsp';
        main_ul.appendChild(url2)
         url1.innerHTML = (g[i].date + " | Comments " + g[i].comment)
        url2.appendChild(url1)
        main_ul.innerHTML += '&nbsp&nbsp&nbsp';


      }
    }

  }

        
        
      }
      
      
    


</script>




</html>