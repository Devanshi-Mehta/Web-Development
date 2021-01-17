<!DOCTYPE html>
<html>
<head>
    <title>WP Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/homepage.css">
</head>

<body style = "background-color:#161625">
    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-body">
            <span class="close">&times;</span>
            <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
            <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
            <p>The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>
            <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette</p>
        </div>
      </div>
    </div>



    <div id = "side" class="sidenav">
        <p id = "p1">COVID19</p>
        <p id = "p2">INDIA</p>
        <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" target="_blank"><i class="fas fa-viruses"></i></a>
        <a href="#"></a>
        <a href="Login.html"><i class="fa fa-user-plus" style="margin-left: 5px;"></i></a>
        <a href="#" id="about" style="margin: 20px; margin-left: 44px; font-size: x-large;"><i class="far fa-question-circle"></i></a>
        <a href="index.php" style="font-size: x-large;"><i class="far fa-hospital"></i></a>
        <a href="donate.php"><i class="fas fa-hand-holding-usd"></i></a>
    </div>

    <button style="color: #FDB813; margin-left: 97%;" onclick="sun()" id = "sun">&#9728;</button>
    <button style="color: gray; margin-left: 97%;" onclick="moon()" id = "moon"><i class="far fa-moon fa-xs"></i></button>

    <div class="main" id="up">
        <p id = "top_p" style="font-size: small;">Search your district or state</p>
        <br>
        <input style="color: #808080;" id = "searchbar" type="text" name="search" placeholder="Mumbai">
        <br>
        <br>
        <div class = "text">
            <p class = "inline" id="time" style="font-size: small;"></p>
            <i style="font-size: 15px;" id = "icon" class="far fa-bell fa-xs" onclick="change_icon()"></i>
            <div id = "notifications"></div>
        </div>
    </div> 

    <div id = "hide">
        <div class = "border">
            <p class = "small_p">About 5 hours ago</p>
            <p class = "large_p">1633 new cases & 16 deaths in Odisha</p>
        </div>
        <div class = "border">
            <p class = "small_p">About 7 hours ago</p>
            <p class = "large_p">2 new cases in Meghalaya</p>
        </div>
        <div class = "border">
            <p class = "small_p">About 8 hours ago</p>
            <p class = "large_p">1446 recoveries & 4 deaths in Telangana</p>
        </div>
        <div class = "border">
            <p class = "small_p">About 12 hours ago</p>
            <p class = "large_p">73 new cases, 68 recoveries and 3 deaths in Ladakh</p>
            <p class = "large_p">18 new cases and 23 recoveries in Andaman and Nicobar Islands</p>
        </div>
        
    </div>

    <div class="row">
        <div id = "red" class="column" style="color: #FF073A;">
            <h2>Confirmed</h2>
            <p id = "smaller" style="color: #FF073A99;">+28,988</p>
            <p id = "larger">80,10,222</p>
        </div>
        <div id = "blue" class="column" style="color: #007BFF">
            <h2>Active</h2>
            <p id = "smaller" style="color: #007BFF99;">+1,430</p>
            <p id = "larger">6,27,426</p>
        </div>
        <div id = "green" class="column" style="color: #28A745">
            <h2>Recovered</h2>
            <p id = "smaller" style="color:#28A74599;">+35,453</p>
            <p id = "larger">71,98,877</p>
        </div>
        <div id = "gray" class="column" style="color: #6C757D">
            <h2>Deceased</h2>
            <p id = "smaller" style="color:#6C757D99;">+345</p>
            <p id = "larger">1,19,551</p>
    </div>
    </div>
    <br>
    <div>
        <table style="width:52%" id="myTable">
            <thead>
                <tr>
                    <th onclick="sortTable(0)">State/UT <i class="fas fa-sort" style="margin-left: 10px;"></i></th>
                    <th onclick="sortTable(1)">Confirmed</th>
                    <th onclick="sortTable(2)">Active</th>
                    <th onclick="sortTable(3)">Recovered</th>
                    <th onclick="sortTable(4)">Deceased</th>
                    <th onclick="sortTable(5)">Tested</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class = "col1" id="maha">Maharashtra</td>
                    <td>16,48,665</td>
                    <td>1,34,137</td>
                    <td>14,70,660</td>
                    <td>43,348</td>
                    <td>86.5L</td>
                </tr>
                <tr>
                    <td class = "col1" id = "ap">Andhra Pradesh</td>
                    <td>8,08,924</td>
                    <td>28,770</td>
                    <td>7,73,549</td>
                    <td>6,606</td>
                    <td>76.2L</td>
                </tr>
                <tr>
                    <td class = "col1" id = "karna">Karnataka</td>
                    <td>8,05,947</td>
                    <td>75,423</td>
                    <td>7,19,558</td>
                    <td>10,947</td>
                    <td>74.5L</td>
                </tr>
                <tr>
                    <td class = "col1" id = "tn">Tamil Nadu</td>
                    <td>7,11,713</td>
                    <td>29,268</td>
                    <td>6,71,489</td>
                    <td>10,956</td>
                    <td>95.9L</td>
                </tr>
                <tr>
                    <td id = "uttar" class = "col1">Uttar Pradesh</td>
                    <td>4,72,068</td>
                    <td>26,654</td>
                    <td>4,38,512</td>
                    <td>6,902</td>
                    <td>140L</td>
                </tr>
                <tr>
                    <td class = "col1" id = "kerala">Kerala</td>
                    <td>3,97,218</td>
                    <td>93,745</td>
                    <td>3,02,017</td>
                    <td>1,353</td>
                    <td>43.6L</td>
                </tr>
                <tr>
                    <td id="delhi" class = "col1">Delhi</td>
                    <td>3,59,488</td>
                    <td>25,786</td>
                    <td>3,27,390</td>
                    <td>6,312</td>
                    <td>44L</td>
                </tr>
                <tr>
                    <td class = "col1" id = "wb">West Bengal</td>
                    <td>3,53,822</td>
                    <td>37,190</td>
                    <td>3,10,086</td>
                    <td>6,546</td>
                    <td>43.4L</td>
                </tr>
                <tr>
                    <td class = "col1" id = "odisha">Odisha</td>
                    <td>2,83,942</td>
                    <td>16,512</td>
                    <td>2,66,105</td>
                    <td>1325</td>
                    <td>43.9L</td>
                </tr>
                <tr>
                    <td class = "col1" id = "tel">Telangana</td>
                    <td>2,31,834</td>
                    <td>18,611</td>
                    <td>2,11,912</td>
                    <td>1,311</td>
                    <td>41.2L</td>
                </tr>              
            </tbody>
        </table>

        <br>
        <div style="margin-left: 31%; float: left;">
            <h3 id = "india" >India</h3>
            <p id = "india_p" ></p>
        </div>
        <br>
        <div style="margin-left : 73%;">
            <p style="margin-left : 20%;" class = "india_r">Tested</p>
            <p id = "india_rb">10,44,20,894</p>
            <p style="margin-left : 7%;" class = "india_r" >As of yesterday</p>
            <p style="margin-left : 15%;" class = "india_r">per source</p>
        </div>
    </div>

    <br>
    
    
 
    <footer style="margin-left: 140px;">
        <br>
        <div style="text-align: center;">
        <p style="color: #4c75f2; letter-spacing: 0.8px; font-size: 15px; margin-bottom: 0px;"><strong>COVID19INDIA</strong></p>
        <p style="font-size: 12px; letter-spacing: 0.4px; word-spacing: 0.8px;">We stand with everyone fighting on the frontlines</p>
        <br>
        <a href="https://github.com/" target="__blank"><i class="fab fa-github fa-lg" style="color: gray;"></i></a>
        <a href="https://www.instagram.com/" target="__blank"><i class="fab fa-instagram fa-lg" style="color: rgb(131,58,180)"></i></a>
        <a href="https://www.facebook.com/" target="__blank"><i class="fab fa-facebook-square fa-lg" style="color: #3b5998"></i></a>
        <a href="https://twitter.com/" target="__blank"><i class="fab fa-twitter fa-lg" style="color:rgba(29,161,242,1.00)"></i></a>
        <a href="mailto:poojamangal15@.com" target="__blank"><i class="fas fa-paper-plane fa-lg" style="color:rgba(50, 41, 180, 0.918)"></i></a>
        </div>
    </footer>

</body>
<script src="css/homepage.js"></script>

</html>

