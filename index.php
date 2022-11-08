<!DOCTYPE html>
<html>

    <head>
    <link href="css/styles.css" rel="stylesheet">

        <title>Become a Scorpion</title>
    </head>
    <body>
        <!--THIS PAGE HAS THE SIGN UP-->
        
        <?php
        //This is a single line comment
        /*This is for multi line comments
        I will be practicing a little PHP for my project*/
            echo("ShaQuaya Wilson");
        ?>
  
  <img src="images/Drake-Certified-Lover-Boy-1.jpeg" alt="Certified Lover Boy Logo" width="175">

<h1>You're OVO bound</h1>
<!-- Below; A Drake visual should be here -->
<video width="450" height="240" autoplay muted>
  <source src="images/Y2Mate.is - DJ Khaled ft. Drake & Lil Baby - STAYING ALIVE (Official Video)-PM2f835zx88-480p-1655501824650.mp4" type="video/mp4" alt="Drake ft Lil Baby - Staying Alive Music Video">
</video>
<!-- This starts the subscribe process -->
<form action="https://giphy.com/gifs/storyful-nba-drake-speech-7WvAUvZZTRpSuudobh/fullscreen" method="get">

    <label for="firstName">First Name:
    <input type="text" id="firstName" placeholder="Drake"><br>
    <label for="lastName">Last name:
    <input type="text" id="lastName" placeholder="Graham"><br>
    <label for="email">Email:
    <input type="email" id="email" placeholder="Drizzy@Toronto.CA" required><br>
    <label>Username:<input type="text" placeholder="Certified Lover"><br>
            
            
            <!--When Is Your Birthday?
            <label for="birthday"><input type="date" id="birthday"></label>-->

        <!--this is practice php would like to add age verification later on
            <?php
                /*define ("LEGAL_AGE", 16);
                $age=17;
                if ($age >= "LEGAL_AGE"){
                    echo("Certified Ready");
                } else {
                     echo("You're not Ready to be Certified");
                }*/
                session_start();
                if(isset($_SESSION["over18"])){
                    header("location:");
                }
                if(isset($_SESSION["under18"])){
                    header("location:");
                }
                if(isset($_POST['submit']))
                {
                    $day = $_POST['day'];
                    $month = $_POST['month'];
                    $year = $_POST['year'];

                    $birthday = mktime(0,0,0,$month,$day,$year);
                    $difference = time() - $birthday;
                    $age = floor ($difference / 31556926);
                    /*1 is true, 0 is false*/
                    if($age >= 17) {
                        $_SESSION["over18"] = 1;
                        header("location: ");
                    }
                    else{
                        $_SESSION["under18"] = 0;
                        header("location:");
                    }
                
                }
            ?>
        
            <form action="index.php" method="POST">
                Day:<select name="day">
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                </select>
                Month:<select name="month">
                    <option value="01">Jan</option>
                    <option value="02">Feb</option>
                    <option value="03">Mar</option>
                    <option value="04">Apr</option>
                    <option value="05">May</option>
                    <option value="06">Jun</option>
                    <option value="07">Jul</option>
                    <option value="08">Aug</option>
                    <option value="09">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                </select>
                Year:<select name="year">
                <option>1989</option> 
                <option>1990</option> 
                <option>1991</option> 
                <option>1992</option> 
                <option>1993</option> 
                <option>1994</option> 
                <option>1995</option> 
                <option>1996</option> 
                <option>1997</option> 
                <option>1998</option> 
                <option>1999</option> 
                <option>2000</option> 
                <option>2001</option> 
                <option>2002</option> 
                <option>2003</option> 
                <option>2004</option> 
                <option>2005</option> 
                <option>2006</option> 
                <option>2007</option> 
                <option>2008</option> 
                <option>2009</option> 
                <option>2010</option> 
                <option>2011</option> 
                <option>2012</option> 
                <option>2013</option> 
                <option>2014</option> 
                <option>2015</option> 
                <option>2016</option> 
                <option>2017</option> 
                <option>2018</option> 
                <option>2019</option> 
                <option>2020</option> 
                <option>2021</option> 
                <option>2022</option> 
                </select> 
            -->
                  
            
                <br><label for="paswword">Password:<input type="password" id="password" placeholder="6SixGod"></label>

                <p><input type="submit" value="ENTER" name="submit"></p>
            </form>





    <a href="home.html"><h2>Go to Papi's Home</h2></a>
     <a href="pollindex.html"><h2>Return to Poll</h2></a>
        <a href="history.html"><h2>Battle Rap</h2></a>
        <a href="Team.html"><h2>OVO Team</h2></a>
        <a href="Artists.html"><h2>OVO Sound</h2></a>


<footer>
    <p>Author: ShaQuaya Wilson</p>
    <p><a href="mailto:Drake@Toronto.com">Drake@Toronto.com</a></p>
</footer>
</body>

</html>