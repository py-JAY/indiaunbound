<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/India-Unbound-logo.png">
    <link href="https://fonts.cdnfonts.com/css/samsung-sans-4" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_collection.css">
    <title>Exploring South</title>
</head>
<body>
<header>
        <?php
            require_once('../index header.php');
        ?>
   </header>
    <main>
    <P class="collection-heading">Exploring SOUTH For You</P> <br>
    <div class="information_div">
        <ol class="details_ol details_ol_left">
            <li>
                <h3>
                    Kerala
                </h3>
               <ul>
                   <li>Famous for: Backwaters, lush greenery, and Ayurvedic treatments. Experience the beauty of houseboats, explore hill stations like Munnar, or relax on the beaches of Kovalam.</li>
                   <li>Best time to visit: October to March</li>
                   <li>Kerala, India's tropical paradise, boasts palm-fringed beaches, serene backwaters, and lush Western Ghats. Explore tea and spice plantations, encounter wildlife in national parks, or relax in houseboats. This state offers a unique blend of natural beauty, rich culture, and warm hospitality.</li>
               </ul>
           </li>
        </ol>
        <div class="image_container image_container_right">
           <img src="../images/Kerala south.cms" alt="" class="beachs_image">
        </div>
    </div>
    <br>
    <div class="information_div">
        <div class="image_container image_container_left">
            <img src="../images/Tamil Nadu south.jpg" alt="" class="beachs_image">
         </div>
        <ol class="details_ol details_ol_right" start="2">
            <li>
                <h3>
                    Tamil Nadu
                </h3>
               <ul>
                <li>Famous for: Cultural heritage with ancient temples, historical monuments, and beautiful beaches. Visit the iconic temples of Madurai and Thanjavur, explore the hill stations of Ooty and Kodaikanal, or enjoy the bustling city life of Chennai.</li>
                <li>Best time to visit: October to March</li>
                <li>Tamil Nadu, located in southern India, is known for its rich cultural heritage and history. The capital, Chennai, is a major cultural, economic, and educational center. Tamil Nadu is renowned for its Dravidian-style Hindu temples, such as the Meenakshi Amman Temple in Madurai and the Brihadeeswarar Temple in Thanjavur. The state has a diverse landscape, including coastal regions, hills, and fertile plains. It boasts a vibrant tradition of classical dance, music, and literature, with Tamil being one of the oldest living languages. Tamil Nadu's economy is driven by agriculture, textiles, automotive, and IT industries.</li>
               </ul>
           </li>
        </ol>
    </div>
    <br>
    <div class="information_div">
        <ol class="details_ol details_ol_left" start="3">
            <li>
                <h3>
                    Karnataka
                </h3>
               
            <ul>
                <li>Famous for: Diverse landscape with hill stations, wildlife sanctuaries, and historical sites. Explore the enchanting city of Mysore, visit the majestic Hampi ruins, or experience the thrill of wildlife safaris in Bandipur National Park.   </li>
                <li>Best time to visit: October to March</li>
                <li>Karnataka, a state in southwestern India, is known for its diverse culture and rich heritage. Its capital, Bengaluru, is a major tech hub, often called the "Silicon Valley of India." Karnataka boasts historic sites like Hampi and Mysore Palace, scenic hill stations like Coorg and Chikmagalur, and wildlife sanctuaries like Bandipur. The state has a vibrant tradition of music, dance, and art, including Carnatic music and Yakshagana. It is also famous for its cuisine, featuring dishes like Bisi Bele Bath and Mysore Pak. Kannada is the primary language spoken here.</li>
            </ul>
           </li>
        </ol>
        <div class="image_container image_container_right">
           <img src="../images/Karnataka south.jpeg" alt="" class="beachs_image">
        </div>
    </div>
    </main>
    <footer>
        <?php
             require_once('../index footer.php');
         ?>
    </footer>
    <script>
        function moveBorder() {
        var border = document.querySelector('.beachs_image');
        var left = parseInt(getComputedStyle(beachs_image).left);
        left += 1; // Adjust the movement speed as needed
        border.style.left = left + 'px';
        }

        setInterval(moveBorder, 10); // Update the border position every 10 milliseconds
    </script>
</body>
</html>