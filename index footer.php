<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/India-Unbound-logo.png">
    <link href="https://fonts.cdnfonts.com/css/samsung-sans-4" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
     <style>
        .page-logo{
    height: 60px;
    /* position: relative;
    left: 30px;
    top: 5px; */
}
        #back-to-top-div{
    height: 28px;
    padding-top: 4px;
    text-align: center;
    background-color: #363636;
}
#back-to-top-div:hover{
    background-color: #3a3a3a;
    cursor: pointer;
}

.upper-footer-div{
    display: flex;

}
.footer-categories, .footer-contactus{
    width: 50%;
    justify-content: center;
    text-align: left;
    padding-left: 15%;
}
#footer-div{
    /* text-align: center; */
    /* height: 90px; */
    padding: 2% 10% 3% 10% ;
    background-color: #2e2e2e;
    color: white;
}
.footer-categories ul{
    margin:0px;
    padding-left: 0px;
    list-style-type: none;
}
.Categories-item, .Categories-contact, .back-to-top{
    text-decoration: none;
    color: white;
    cursor: pointer;
}
.Categories-item:hover{
    background-color: rgba(14, 14, 14, 0.281);
}
.Categories-contact:hover{
    background-color: rgba(14, 14, 14, 0.281);
}
.logo-bg-link{
    width: min-content;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 5px;
}
.footer-logo-div{
    display: flex;
    justify-content: center;
    align-items: center;
}
.india-unbound-text-footer{
    font-weight: 900;
    font-size: 20px;
    color: white;
    display: flex;
    flex-direction: column;
    text-align: center;
}

h4{
    margin: 0 0 15px 0;
}
.contact-logo{
    position: relative;
    top: 4px;
    margin-right: 4px;
    height: 20px;
    cursor: pointer;    
}
.footer-hr{
    text-align: center;
}
.lower-footer-div{
    text-align: center;
    justify-content: center;
}
.followus-elements{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin-bottom: 10px;

}
.followus-elements-icons{
    height: 30px;
}
.india-text{
    text-decoration: none;
}
     </style>
    <title>India Unbound</title>
</head>
<body >
    <br><br><br>
    <footer>
    <a href="#" class="back-to-top">
        <div id="back-to-top-div">
            Back to top
        </div>
    </a>
    <div id="footer-div">
    <div class="upper-footer-div">
        <div class="footer-categories">
            <span>
            <h4>Explore More Categories :</h4>
            <ul>
            <li>
                        <a href="../beachdestination/" class="Categories-item">Beach Destinations</a>
                    </li>
                    <li>
                        <a href="../hillstation/" class="Categories-item">Hill Station</a>
                    </li>
                    <li>
                        <a href="../weekendgateway/" class="Categories-item">Weekend Gateway</a>
                    </li>
                    <li>
                        <a href="../heritagedestinations/" class="Categories-item">Heritage Destinations</a>
                    </li>
                    <li>
                        <a href="../pilgrimagedestination/" class="Categories-item">Pilgrimage Destinations</a>
                    </li>
                    <li>
                        <a href="../ relaxationdestination/" class="Categories-item">Relaxation Destinations</a>
                    </li>
            </ul>
            </span>
        </div>
        <div class="footer-contactus">
            <h4>Contact Us :</h4>
            
            <a onclick="window.open('https://mail.google.com/mail/u/0/#inbox?compose=DmwnWtDsVFkWvZGbrrZLCqvgPqNWBsDKPPqMvdsZBkBgnCqvkRXCCQFxxrnMKSzKWHdTBzspRLnv','newwindow','width=1000,height=450');return false;" target="_blank" class="Categories-contact">
                    <!-- Report a Problem</a>
                <a href="mailto:your.email@example.com" class="Categories-contact"> -->
                    <img src="../images/emaillogo.png" alt="emaillogo" class="contact-logo">
                    msharma7744@gmail.com
            </a><br>
            
            <a href="tel:+1918010382879" class="Categories-contact">
                <img src="../images/phonelogo.png" alt="phonelogo" class="contact-logo">
                8010382879
            </a>
        </div>
    </div>
    <div class="lower-footer-div">
        <div class="footer-logo-div">
                <a href="../" class="logo-bg-link">
                <img src="../images/India-Unbound-logo.png" alt="logo" class="page-logo">
                <span class="india-unbound-text-footer">
                    <span class="india-text">
                        INDIA
                    </span>
                    <span class="unbound-text">
                        UNBOUND
                    </span>
                </span>
                </a>
        </div>
        
        <!-- </div> -->
        <br>
        <div class="footer-hr">
            <hr>
        </div>
        <p id="footer-paragraph">Tourism is a global industry that involves the movement of people to destinations for leisure, business, or other purposes. It contributes significantly to economies by generating revenue, creating jobs, and promoting cultural exchange. However, it's essential to manage tourism responsibly to protect the environment and preserve local communities.</p>
        <br>
        <h4 class="some-heading">Stay Updated With Us On :</h4>
        <div class="followus-elements">
            <a href="">
                <img src="../images/iglogo.png" alt="iglogo" class="followus-elements-icons">
            </a>
            <a href="">
                <img src="../images/phonelogo.png" alt="iglogo" class="followus-elements-icons">
            </a>
            <a href="">
                <img src="../images/fblogo.png" alt="iglogo" class="followus-elements-icons">
            </a>
        </div>
        Ⓒ 2024 INDIAUNBOUND. All rights reserved
    </div>
    </div>
</footer>
    </body>
    </html>