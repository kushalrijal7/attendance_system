
<?php 
include_once('connection.php');
include_once('register.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Kathmandu BernHardt College</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="icon" type="image/x-icon" href="images/fav.jpg">
</head>
<body>

    <section class="header">
        <nav>
            <a href="index.php"><img src="images/logo.jpg" alt="logo"></a>

            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="#about-section">ABOUT</a></li>
                    <li><a href="#course1">COURSE</a></li>
                    <li><a href="#blogid">BLOG</a></li>
                    <li><a href="#contactid">CONTACT</a></li>
                    <li><a href="login.php">Login/Signup</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()" ></i>
        </nav>

        <div class="text-box">

            <h1>BernHardt College</h1>

            <p>We don’t just give students an education and experiences that set them up for success in a career.   
            We help them succeed in their career<br>—to discover a field they’re passionate about and dare to lead it.</p>
            <a href=""class="submit-btn">Apply For Admission</a>

        </div>

    </section>


    <!-- --------course------- -->
    
    <section class="course" id="course1">

        <h1>Course We Offer</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit harum aperiam, molestiae 
                 asperiores totam aspernatur provident, earum assumenda iusto excepturi nulla consequuntur fuga nisi suscipit,
                 accusamus eligendi consequatur. Alias, ipsum?</p>
            </div>
            <div class="course-col">
                <h3>Degree</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit harum aperiam, molestiae 
                 asperiores totam aspernatur provident, earum assumenda iusto excepturi nulla consequuntur fuga nisi suscipit,
                 accusamus eligendi consequatur. Alias, ipsum?</p>
            </div>
            <div class="course-col">
                <h3>Post Graduation</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit harum aperiam, molestiae 
                 asperiores totam aspernatur provident, earum assumenda iusto excepturi nulla consequuntur fuga nisi suscipit,
                 accusamus eligendi consequatur. Alias, ipsum?</p>
            </div>
        </div>

    </section>

      <!-- ----------------- About Our College ------------------ -->

    <section class="college">

        <h1>Our Kathmandu BernHardt College</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

        <div class="row">

            <div class="college-col">

                <img src="images/bafal_college.jpg" alt="image">
                <div class="layer">
                    <h4>Bernhardt Bafal</h4>
                </div>

            </div>
            
            <div class="college-col">

                <img src="images/bg.jpg" alt="image">
                <div class="layer">
                    <h4>Bernhardt Balkhu</h4>
                </div>

            </div>

            <div class="college-col">

                <img src="images/colle.jpg" alt="image">
                <div class="layer">
                    <h4>Bernhardt</h4>
                </div>

            </div>

        </div>

    </section>

    <section class="facilities">


        <h1>Our facilities</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
         
         <div class="row">

            <div class="facilities-col">
                <img src="images/library.png" alt="image">
                <h4>Well managed Library</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur facere at ratione iure
                 inventore autem mollitia, sapiente nobis ut atque dicta quidem tempore soluta labore dolore consectetur nesciunt quis quaerat.</p>
            </div>

            <div class="facilities-col">
                <img src="images/winners.jpg" alt="image">
                <h4>Sporting events</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur facere at ratione iure
                 inventore autem mollitia, sapiente nobis ut atque dicta quidem tempore soluta labore dolore consectetur nesciunt quis quaerat.</p>
            </div>

            <div class="facilities-col">
                <img src="images/cafeteria.png" alt="image">
                <h4>Healthy, tasty and hygenic food</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur facere at ratione iure
                 inventore autem mollitia, sapiente nobis ut atque dicta quidem tempore soluta labore dolore consectetur nesciunt quis quaerat.</p>
            </div>

         </div>

    </section>

    <section class="blog" id="blogid">

        <h1>What Our Students Say</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem labore aut facilis earum,
           perspiciatis aperiam ad qui sunt ullam error nulla esse? Est assumenda cumque nisi quisquam tempore officiis eveniet.
        </p>

        <div class="row">

            <div class="blog-col">
                <img src="images/student1.jpg" alt="image">
                <div>
                    <p>Bernhardt was more than a college…
                        Bernhardt was more than a college, it was a family.In my years here 
                        I had the greatest time ever and made some of the best friends a person could have.
                        All of the teachers were AMAZING!!!!
                    </p>
                    <h4>Kushal Rijal</h4>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>

            <div class="blog-col">
                <img src="images/student2.jpg" alt="image">
                <div>
                    <p>True Meaning of learning........
                        True Meaning of learning for life since its beginning BernHardt College has been in the choice of many
                         brilliant students and mine too. It was my first choice during the time of my admission and I feel proud to share 
                         with others. It has bridged my school life to my adulthood in such a way that none others would possibly have done. 
                         The well experienced and professional teaching faculty have the full credit for what I stand at present. 
                         The well-rounded education in this college helped me to stand out as a responsible citizen in the society.
                    </p>
                    <h4>Ujwal Thapa</h4>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>

        </div>


    </section>

    <section class="contact" id="contactid">

        <h1>Enroll for Our Various Course</h1>
        <a href="" class="submit-btn">CONTACT US</a>
    
    </section>

     <!-- --------Footer------- -->
     
        <section class="footer">
         
            <div class="footer-image">
                <img src="images/logo-footer.png" alt="img">
                <p>Bafal, kathmandu</p>
                <a href="tel:+015237330 ">+015237330</a> /<a href="tel:+015237361"> +015237361</a>
               
                <a href="mailto:ktmbernhardt@kbc.edu.np">ktmbernhardt@kbc.edu.np</a>
                
            </div>
            <div class="footer-text">
                <h3 id="about-section">About Us</h3>
                <p>Kathmandu BernHardt College has been proved as the milestone of quality education in the Western part of Kathmandu valley 
                    since 2060 B.S. No any obstacles have detained it marching steps toward quality education up to now. It is possible with 
                    the proper coordination of all its stakeholders. As a result, the Ministry of Education Nepal has rewarded it with the 
                    prize of The First Private College of Nepal on the occasion> of 40th National Education Day 2076 and The International 
                    Literacy Day 2019. Moreover, New Business Age, has granted it the position of 2nd Best MBS College of Nepal in June 21, 2019.
                    The most important and recent example of its accomplishment is: being selected at the national level by the University Grants 
                    Commission with the grant of the international accreditation. KBC, now, is able to achieve the position of the first QAA 
                    accredited private college among the Tribhuwan University affiliates.
                </p>
                           
          
         </section>
         <div class="icons">
            <a href="https://www.facebook.com/profile.php?id=100044386269936"><i class="fa fa-facebook"></i> </a>
            <a href="https://twitter.com/Bishal_thapa007"><i class="fa fa-twitter"></i></a> 
            <a href="https://www.linkedin.com/in/bishal-thapa-8734991a7/"><i class="fa fa-linkedin"></i></a>  
            <a href="https://www.instagram.com/bishal_thapa007/"><i class="fa fa-instagram"></i></a> 
        </div>
       
       </div>



    <script>
  
       var navlinks = document.getElementById("navlinks");
       function showmenu(){
           navlinks.style.right = "0";
       }
       function hidemenu(){
           navlinks.style.right = "-200px";
       }

    </script>
</body>
</html>