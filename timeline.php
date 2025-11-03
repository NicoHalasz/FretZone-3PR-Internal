<!DOCTYPE html>
<html>
<?php
$page_title= "Timeline";
include 'includes/header.php';
include 'includes/nav.php';
?>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
  box-sizing: border-box;
}

body {
  background-color: black;
  font-family: ;
  color: pink;
}
h2{
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  color: pink;
}
h4{
  color:gray;
}
/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
  text-decoration: none;
  text-underline-offset: none;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: pink;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: grey;
  border: 4px solid red;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
   
}

/* Place the container to the left */
.left {
  right: 25.5%;
  
}

/* Place the container to the right */
.right {
  left: 50%;
  margin-left: 3px;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
 
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 10px 20px;
  background-color: #1D1D1D;
  position: relative;
  border-radius: 6px;
  border-color: red;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
/* Style the links inside the sidenav */
#mySidenav a {
  position: absolute; /* Position them relative to the browser window */
  left: -80px; /* Position them outside of the screen */
  transition: 0.3s; /* Add transition on hover */
  padding: 15px; /* 15px padding */
  width: 170px; /* Set a specific width */
  text-decoration: none; /* Remove underline */
  font-size: 20px; /* Increase font size */
  color: white; /* White text color */
  border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
}

#mySidenav a:hover {
  left: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#EarlyL {
  top: 20px;
  background-color: black;
  
}

#second{
  top: 80px;
  background-color: #555; 
}

#third {
  top: 140px;
  background-color: black; 
  color: pink;
}

#fourth{
  top: 200px;
  background-color: #555 /* Light Black */
}
.white{
color: black;
padding-left: 200px;
}
.card_padding{
  padding-left: 475px;
}
.top-button{
  text-align: center;
  font-size: 25px;
  text-decoration:none;
}
.card{
  background-color: black;
  color:white;
}
.white{
  color:white;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 25px;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 30px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<!--Timeline code-->
<body>
  <!--Side navigation bar to redirect to certain parts of the page -->
<div id="mySidenav" class="sidenav" style="position:fixed">
  <a href="#Early" id="EarlyL">Early Life</a>
  <a href="#2000" id="second">2000s</a>
  <a href="#2010" id="third">2010s</a>
  <a href="#2020" id="fourth">2020s</a>
</div>
<!-- The video -->
<div style="position: absolute; z-index: -99; width: 100%; height: 760px">
  <iframe
    frameborder="0"
    height="100%"
    width="100%"
    src="https://www.youtube.com/embed/X3d5rT7FGLE?controls=0&amp;start=1&autoplay=1&mute=1&loop=1;"
  >
  </iframe>
</div>

<div class="video-content">
  <h1 class="white">Kanye West: The perfect Egoist</h1>
  <p class="white">Kanye West's life is marked by a compelling mix of artistic brilliance, controversy, and personal struggles. Rising to fame as a successful rapper and producer, he has constantly pushed boundaries and challenged traditional norms within the music industry. Beyond his creative pursuits, Kanye has been open about his mental health battles and has made headlines for his outspoken nature and political endeavors. </p>
  
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>
<!--Back to top-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


<h2>Kanye West Timeline</h2>

<div class="timeline">
  <div class="container left">
    <div class="content" id="Early">
      <h4>8th June 1977 <br> Atlanta, Georgia USA </h4>
      <p>Kanye Omari West is born in Atlanta, Georgia in 1977 his parents are the late Donda Williams and Ray West.</p>
      <img src="Image/bby.jpg" style="width:25%">
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h4>1980</h4>
      <p>Kanye's parents get divorced. Kanye and his mother Donda moved to Chicago after this.</p>
      <img src="Image/3yrs.jpg" style="width:35%">
    </div>
  </div>
  <div class="container left">
    <div class="content">
    <h4>1990 <br> Humble Beginnings</h4>
      <p>When Kanye was 13 years old, his mother payed for the studio.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h4>1996 <br>The Journey Begins</h4>
      <p>Kanye went viral for the first time in 1996, his freestyle outside a Fat Beats store in Chicago became famous.</p>
      <img src="Image/freestyle.jpg" style="width:50%">
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h4>1998 <br> The Big Break</h4>
      <p>In 1998, Kanye sold his first few beats to local Chicago artists to Gravity and Dupri. He dropped out of College to pursue music full-time. </p>
    </div>
  </div>
  <div class="container right">
    <div class="content" id="2000">
      <h4>2000 <br> Jay-Z</h4>
      <p>In 2000 Kanye produced for Roc-a-Fella Records one of the biggest record companies in the world. He would produce for Jay-Z who at the time was the biggest hip hop star in the world.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h4>2001</h4>
      <p>In 2001 Kanye would produce 5 songs for Jay-Z's 'Blueprint' making him the hottest producer on the planet as the 'Blueprint' would go on to be double platinium.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h4>2002 <br> Solo</h4>
      <p> After a late studio session, Kanye would drive home where he would get into a car crash which resulted in his mouth being wired shut but this wouldn't stop him from recording his debut single <br> "Through The Wire"</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">

    <h4> <a href="TCD.php">
      <div class="image">
  <img src="Image/TCDcover2.jpg" >
  </div>
  </a><b>The College Dropout</b></h4>  
    <p>"The College Dropout" is Kanye West's debut album released in 2004. It features a unique blend of soulful samples and introspective lyrics, showcasing West's talent as both a rapper and producer. With hit singles like "Jesus Walks" and "Through the Wire," the album quickly became a critical and commercial success, earning widespread praise for its innovation and fresh take on hip-hop, cementing West's place as one of the most important and influential artists of his generation.</p>
      
    </div>
  </div>
  <div class="container right">
    <div class="content" >
    <h4> <a href="LR.php">
      <div class="image">
  <img src="Image/LRcover2.jpg" >
  </div>
  </a><b>Late Registration</b></h4>  
      <p>"Late Registration" is Kanye West's second studio album released in 2005. It features collaborations with a diverse array of artists and showcases West's evolution as a producer, incorporating live instrumentation and orchestration into his sound. The album received widespread critical acclaim for its musicality and lyrical depth, cementing West's position as one of the most innovative and boundary-pushing artists of his time.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">

    <h4> <a href="Graduation.php">
      <div class="image">
  <img src="Image/GraduationCover2.jpg" >
  </div>
  </a><b>Graduation</b></h4>  
    <p>"Graduation" is the third studio album by American rapper and producer Kanye West, released in 2007. The album features a more electro-pop and futuristic sound compared to his previous works, influenced by Daft Punk and other electronic music producers. With hit singles such as "Stronger" and "Good Life," the album became a commercial and critical success, praised for its innovative production and West's lyrical themes of personal growth and success. "Graduation" further established West as a major force in the music industry and solidified his reputation as a boundary-pushing artist.</p>
      
    </div>
  </div>
  <div class="container right">
    <div class="content" >
    <h4><br>   <img src="Image/Gallery8.jpg" style="width:35%"><b>Donda West Death</b></h4>  
      <p>Donda West was the mother of Kanye West and a former English professor. She passed away in November 2007, a day after receiving cosmetic surgery. Her death was a devastating loss for Kanye, who was very close to his mother and often referenced her in his music. Donda's passing also had a significant impact on Kanye's life and career, leading him to take a hiatus from music and focus on his personal well-being. Despite the tragedy, Donda's memory and legacy live on through her son's music and philanthropic efforts.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">

    <h4> <a href="heartbreak.php">
      <div class="image">
  <img src="Image/808sCover2.png" >
  </div>
  </a><b>808s and Heartbreaks</b></h4>  
    <p> "808s & Heartbreak" is Kanye West's fourth studio album released in 2008. The album features a more experimental sound, heavy use of autotune, and themes of heartbreak, loss, and loneliness. Despite mixed reviews, the album has since been recognized for its influence on popular music and cemented Kanye's reputation as a visionary artist willing to take risks. The albums dark themes are based off the personal tragedies Kanye was facing at the time which were his mother passing away and dealing a break up with his girlfriend.</p>   
    </div>
  </div>
  <div class="container right">
    <div class="content" >
    <h4><b>Kanye interupts Taylor Swift</b><br> 2009</h4>  
      <p>The Taylor Swift incident happened during the 2009 MTV Video Music Awards when Kanye West interrupted Swift's acceptance speech for Best Female Video, causing a stir in the audience and backlash against West. The incident remains a significant moment in both their careers and in the history of the MTV Video Music Awards, The two have since reconciled.</p>
    </div>
</div>
<div class="container left">
    <div class="content"id="2010">

    <h4> <a href="MBDTF.php">
      <div class="image">
  <img src="Image/MBDTFcover2.jpg" >
  </div>
  </a> <b>My Beautiful Dark Twisted Fantasy</b></h4>  
    <p> 
"My Beautiful Dark Twisted Fantasy" is the fifth studio album by American rapper and producer Kanye West, released in 2010. The album is a sonic masterpiece, featuring lush and layered production, grandiose arrangements, and introspective lyrics exploring themes of fame, love, and self-doubt. The album was met with widespread critical acclaim and commercial success, cementing West's position as one of the most innovative and influential artists of his generation. "My Beautiful Dark Twisted Fantasy" is often regarded as one of the greatest albums of all time, and its impact can still be heard in today's music.</p>   
    </div>
  </div>
  <div class="container right">
    <div class="content" >
     <a href="KWPGMCS.php">
      <div class="image">
  <img src="Image/KWPGMCScover2.jpg" >
  </div>
  </a><h4><b>Kanye West Presents: Good Music Cruel Summer,</b><br> 2012</h4>  
      <p>"Cruel Summer" is a collaborative album by artists signed to Kanye West's GOOD Music label, released in 2012. The album features contributions from artists such as Kid Cudi, Pusha T, and Big Sean, and showcases a diverse range of musical styles. Despite mixed reviews, it remains an important piece of West's discography and a testament to his ability to curate talented artists.</p>
    </div>
</div>
<div class="container left">
    <div class="content">

    <h4> <a href="yeezus.php">
      <div class="image">
  <img src="Image/yeezusCover2.png" >
  </div>
  </a> <b>        YEEZUS</b></h4>  
    <p> 
    "Yeezus" is the sixth studio album by Kanye West, released in 2013. The album showcases a bold and experimental sound, characterized by abrasive electronic beats, industrial influences, and aggressive lyrics. With its raw and confrontational approach, "Yeezus" challenged conventional notions of hip-hop and pushed the boundaries of artistic expression. While initially divisive among fans and critics, the album has since been recognized as a daring and influential work that solidified West's reputation as an innovative and boundary-pushing artist.</p>   
    </div>
  </div>
  <div class="container right">
    <div class="content" >
    <h4><b> <img src="Image/Wedding.webp" style="width:35%"></b><b>KimYe </b> (2014)</h4>  
      <p>Kim Kardashian and Kanye West tied the knot in a highly publicized and extravagant wedding ceremony in 2014. The couple's nuptials took place in Florence, Italy, and were attended by numerous celebrities and close friends. The wedding was characterized by its opulence and attention to detail, with Kim donning a stunning Givenchy gown. The union between Kim and Kanye drew significant media attention and fascination, as they were two prominent figures in the entertainment industry. Their marriage marked the beginning of a high-profile and at times controversial relationship that garnered both admiration and scrutiny from the public.</p>
    </div>
</div>
<div class="container left">
    <div class="content">

      <h4><br>   <img src="Image/yeezy1.jpg" style="width:35%">
      <b>YEEZY</b></h4>  
    <p> The launch of Yeezus marked a significant moment in Kanye West's career and the fashion industry as a whole. Introduced in 2013, Yeezus was Kanye's first solo fashion collection, showcasing his unique and bold aesthetic. The collection was unveiled during New York Fashion Week and garnered widespread attention for its avant-garde designs, minimalist color palette, and unconventional silhouettes. The launch of Yeezus demonstrated Kanye's ambition to make his mark in the fashion world, solidifying his status as a multidisciplinary artist. Despite initial mixed reviews, Yeezus laid the foundation for Kanye's subsequent successful ventures in the fashion industry.</p>   
    </div>
  </div>
  <div class="container right">
    <div class="content" >
    <h4> <a href="TLOP.php">
      <div class="image">
  <img src="Image/TLOPcover2.jpg" >
  </div>
</a></b> The Life of Pablo</b></h4>  
      <p>The release of "The Life of Pablo" was a highly anticipated and unique moment in Kanye West's discography. In 2016, West took an unconventional approach, debuting the album through a series of live events and constant updates. The album underwent several revisions and changes even after its initial release, showcasing West's perfectionist and ever-evolving creative process. "The Life of Pablo" received critical acclaim for its genre-blending sound, introspective lyrics, and collaborations with a diverse range of artists. This release strategy sparked conversations around the evolving nature of music distribution and solidified Kanye's reputation as a boundary-pushing artist unafraid to challenge industry norms.</p>
    </div>
</div>
<div class="container left">
    <div class="content">

      <h4><br><b>After The Life of Pablo</b></h4>  
    <p> After his 7th studio album Kanye had battles with his mental health furthermore Kanye West's public persona went through significant transformations. He made headlines for his controversial statements and political affiliations, including vocal support for Donald Trump. Additionally, he released his eighth studio album, which delved into his personal struggles and mental health challenges. Despite the controversies, Kanye continued to leave an indelible impact on the music industry, showcasing his artistic range and fearless approach to self-expression.</p>   
    </div>
  </div>
  <div class="container right">
    <div class="content" >
    <h4> <a href="Ye.php">
      <div class="image">
  <img src="Image/YeCover2.jpg" >
  </div>

  </a><b> Ye</b></h4>  
      <p>"Ye" is the eighth studio album by Kanye West, released in 2018. The album serves as a deeply personal exploration of Kanye's mental health struggles, relationship challenges, and introspection. With its raw and vulnerable lyrics set against a minimalist production style, "Ye" received mixed reviews but resonated with many listeners who appreciated its candid and introspective nature. The album showcases Kanye's willingness to confront his inner demons and invites listeners into his emotional journey.</p>
    </div>
</div>
<div class="container left">
    <div class="content">

    <h4> <a href="KSG.php">
      <div class="image">
  <img src="Image/KSGcover2.png" >
  </div>
  </a> <b> Kids See Ghosts</b></h4> 
    <p> "Kids See Ghosts" (KSG) is a collaborative album by Kanye West and Kid Cudi, released in 2018. The album emerged as a culmination of their artistic partnership and exploration of shared mental health experiences. "KSG" features a unique blend of genres, including rap, rock, and psychedelic elements, creating a cohesive and introspective sonic landscape. The album received widespread acclaim for its raw and honest lyrics, captivating production, and the seamless synergy between Kanye and Kid Cudi's artistic visions. "Kids See Ghosts" stands as a testament to the power of collaboration and the healing potential of music.</p>   
    </div>
  </div>
  <div class="container right">
    <div class="content" >
    <h4><b> Religious Awakening</b></h4>  
      <p>
Kanye West's religious awakening became a prominent aspect of his public persona in recent years. Embracing Christianity, he started hosting Sunday Service gatherings and released gospel-inspired albums like "Jesus is King," reflecting a profound shift in his spiritual beliefs and artistic expression.</p>
    </div>
</div>
<div class="container left">
    <div class="content">
    <h4> <a href="JIK.php">
      <div class="image">
  <img src="Image/JIKcover2.png" >
  </div>
  </a> <b> Jesus is King</b></h4> 
    <p> The release of "Jesus is King" in 2019 marked a significant moment in Kanye West's career and personal journey. The album arrived after a series of delays and transformations, reflecting West's newfound dedication to his Christian faith. With its gospel-inspired sound and deeply religious themes, "Jesus is King" received a mix of praise and critique, provoking discussions about the intersection of music, spirituality, and artistic expression. The release of "Jesus is King" showcased Kanye's ongoing evolution as an artist and his willingness to explore new creative territories.</p>   
    </div>
  </div>
  <div class="container right">
  <div class="content" id="2020">
    <div class="content" >
    <h4>Ye2020</h4>  
      <p>In 2020, Kanye West made headlines by announcing his unexpected bid for the presidency of the United States. His decision to run for president sparked widespread attention and controversy, with opinions divided on his qualifications and intentions. Although his campaign faced various challenges and did not gain significant traction, Kanye's presidential run highlighted his desire to engage in political discourse and bring attention to certain social issues. His candidacy added a unique and unconventional element to the 2020 election cycle, leaving a lasting impact on the intersection of celebrity and politics.</p>
    </div>
</div>
</div>
<div class="container left">


    <div class="content">
    <h4> <a href="Donda.php">
      <div class="image">
  <img src="Image/Dondacover2.jpeg" >
  </div>
  </a> <b>Donda</b></h4> 
    <p> The release of "Donda" in 2021 marked a significant moment in Kanye West's career and generated widespread anticipation among fans. The album experienced multiple delays and garnered attention for its unconventional listening events, where Kanye previewed the music in stadiums. The release of "Donda" showcased Kanye's artistic vision and ability to create buzz around his projects, resulting in a highly successful debut on the charts and further solidifying his status as a boundary-pushing artist.</p>   
    </div>
  </div>

  <div class="container right">
    <div class="content" >
    <h4> <a href="Donda2.php">
      <div class="image">
  <img src="Image/Donda2cover2.jpg" >
  </div>
  </a> <b> Donda 2</b></h4>  
      <p>Donda 2 is a demo album by American rapper Kanye West. Although unfinished, it was exclusively released on the Stem Player, with four songs made available on February 23, 2022, and additional songs later included in updates, the first of which were added the following day.</p>
    </div>
</div>

<div class="container left">


    <div class="content">
 <h4> <b>Family</b></h4> 
    <p> In early 2021, it was reported that Kanye West and Kim Kardashian were going through a divorce, marking the end of their high-profile marriage. The couple, who share four children together, has remained committed to co-parenting and providing a stable and loving environment for their kids amid the changes in their relationship.</p>   
    </div>
  </div>


  <div class="container right">
    <div class="content" >
    <h4>Controversy</b></h4>  
      <p>Kanye West has faced accusations of anti-Semitism throughout his career, particularly related to comments he made during interviews and performances. These statements have led to significant backlash and condemnation from the public and the Jewish community. As a result, he has faced consequences such as losing brand deals and partnerships with companies who denounce anti-Semitism. The controversy surrounding Kanye's alleged anti-Semitic remarks highlights the importance of promoting inclusivity and understanding, while also reminding us of the impact that public figures can have on social issues.
</p>
    </div>
</div>

</div>
<div class="card_padding">
<div class="card" style="width: 25rem;">
  <img class="card-img-top" src="Image/ye_drip.webp" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Kanye West is a multi-faceted artist known for his artistic innovation, boundary-pushing music, and unapologetic self-expression. He has captivated audiences with his thought-provoking lyrics, intricate production, and penchant for reinvention, solidifying his status as one of the most influential and polarizing figures in contemporary music.</p>
  </div>
  <div class="top-button">
  <a href="#Early" id="EarlyL">Back to top</a>
  </div>
</div>
</div>
</div>
<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>

</html>

