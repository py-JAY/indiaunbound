<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/India-Unbound-logo.png">
    <link href="https://fonts.cdnfonts.com/css/samsung-sans-4" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>India Unbound</title>
    <style>
        
a{
    text-decoration: none;
}
#Navbar{
    z-index: 999;
    width: 100vw;
    position:fixed;
    height:80px;
}
#homeicon,#ticketlogo,#currencylogo,#formicon{
    height: 30px;
    width: 30px;
    margin-right: 4px;
}
.upper-navbar-font{
    margin: 0px;
    font-size: 11px;
    color: white;
}
.lower-navbar-font{
    margin: 0px;
    font-size: 10px;
    color: rgb(231, 231, 231);
}

.navbar{
    display: flex;
    flex-direction: row;
}
#headerelement{
    display: flex;
    flex-direction: row;
}
.headerelement-text{
    display: flex;
    flex-direction: column;
}
.navbar ul{
    margin: 0px;
    width: 100%;
    text-align: left;
    list-style-type: none;
    display: flex;
    flex-direction:row;
    gap: 16px;
    justify-content: end;
    padding: 22px 20px 0 0;
}
.navbar li{
    display: inline-block;
}
.navbar a{
    text-decoration: none;
    display: flex;
}
select{
    height: 30px;
    font-size: 16px;
    color: white;
    background-color: rgba(255, 255, 255, 0);
    /* border-radius: 3px; */
    border: 1px solid rgba(255, 255, 255, 0);
}
option{
    color: black;
}
.page-logo-link{
    /* width: 50%; */
    position: relative;
    left: 40px;
    top: 10px;
}
.india-text:hover{
    color: #F79A13;
}
.unbound-text:hover{
    color: #5AC479;
}
    </style>
</head>
<body>
<header id="header">
    <nav class="navbar" id="Navbar">
        <span class="page-logo-link">
            <a href="../" class="logo-bg-link">
                <img src="../images/India-Unbound-logo.png" alt="logo" class="page-logo">
                <span class="india-unbound-text-footer">
                    <span class="india-text navtext">
                        INDIA
                    </span>
                    <span class="unbound-text navtext">
                        UNBOUND
                    </span>
                </span>
            </a>
        </span>
        <ul>
            <li >
                <a href="../propertylist" id="headerelement">
                <span>
                    <img src="../images/blackhome.png" alt="homeicon" id="homeicon" >
                </span>
                <div class="headerelement-text">
                    <p class="upper-navbar-font navtext">
                        List Your Property
                    </p>
                    <p class="lower-navbar-font navtext">
                        Start earning today!
                    </p>
                </div>
                </a>
            </li>
            <li >
                <a href="../bookticketonline" id="headerelement">
                <span>
                    <img src="../images/blackticket.png" alt="citieslogo" id="ticketlogo" >
                </span>
                <div class="headerelement-text">
                    <p class="upper-navbar-font navtext">
                        Book Tickets Online
                    </p>
                    <p class="lower-navbar-font navtext">
                        Pack Your Luggage.
                    </p>
                </div>
                </a>
            </li>
            <li >
                <a href="../currencyresult/" id="headerelement">
                <span>
                    <img src="../images/blackcurrency.png" alt="currlogo" id="currencylogo" >
                </span>
                <div class="headerelement-text">
                    <p class="upper-navbar-font navtext">
                        Currency Exchange
                    </p>
                    <p class="lower-navbar-font navtext">
                        Know Your Funds.
                    </p>
                </div>
                </a>
            </li>
            <li >
                <a href="../feedbackform" id="headerelement">
                <span>
                    <img src="../images/blackform.png" alt="formicon" id="formicon" >
                </span>
                <div class="headerelement-text">
                    <p class="upper-navbar-font navtext">
                        Feedback
                    </p>
                    <p class="lower-navbar-font navtext">
                        Improve Your Experience!
                    </p>
                </div>
                </a>
            </li>
            <select id="languages" class="navtext">
                <option value="hi" >हिंदी</option>
                <option value="en" >English</option>
            </select>
        </ul>
    </nav>
    <script> 
    function changecolor(color ){
        let navbartext=document.getElementsByClassName('navtext')
        for(let i=0; i<navbartext.length; i++){
            navbartext[i].style.color=color
            }
    }   
    changecolor('#2e2e2e')    
    window.addEventListener("scroll", function(event) {
        var scrollPosition = window.scrollY;

        console.log("Scrolled:", scrollPosition, "pixels vertically.");

        if(scrollPosition>80)
        {
            document.getElementById('Navbar').style.background='#2e2e2e'
        }else{
            document.getElementById('Navbar').style.background='transparent'

        }
        if(scrollPosition>80)
        {
            changecolor('#fff')
        }else{
            changecolor('#2e2e2e')
        }
        
    });   

    function changeImageOnScroll() {
  const imageElement1 = document.getElementById('homeicon');
  const imageElement = document.getElementById('ticketlogo');
  const imageElement2 = document.getElementById('currencylogo');
  const imageElement3 = document.getElementById('formicon');
  const scrollPosition = window.scrollY;

    if (scrollPosition > 80) { // Adjust the threshold as needed
        imageElement1.src = '../images/homeicon.png'; // Replace with the desired image path
        imageElement.src = '../images/ticketlogo.png'; // Replace with the desired image path
        imageElement2.src = '../images/currencylogo.png'; // Replace with the desired image path
        imageElement3.src = '../images/formicon.png'; // Replace with the desired image path

    } else {
        imageElement1.src = '../images/blackhome.png'; // Replace with the initial image path
        imageElement.src = '../images/blackticket.png'; // Replace with the initial image path
        imageElement2.src = '../images/blackcurrency.png'; // Replace with the initial image path
        imageElement3.src = '../images/blackform.png'; // Replace with the initial image path

    } 
}
window.addEventListener('scroll', changeImageOnScroll);
</script>
</body>
</html>