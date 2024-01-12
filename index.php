<?php include "header.php";

?>

<?php /*
$courses = $conn->query("SELECT * FROM users");
$courses->execute();
$allcourses=$courses->fetchAll(PDO::FETCH_OBJ);

*/
?>

<link rel="stylesheet" href="css/style.css">
<section class="intro">
        <div class="content">
            <div class="intro-heading">
            
                    
                    
                <h1>Learn Skills With <span class="brand-name2">Real-Skills</span> </h1>
            </div>
            <div class="intro-para">
                <p>Real-skills is a skill-based online platform that helps learners to acquire
                    relevant knowledge and skills. It offers a wide range of courses such as <span
                        class="coding">HTML</span><span class="coding">CSS</span><span
                        class="coding">Javascript</span><span class="coding">Php</span>
                    and more. Real-skills
                    aims to equip individuals with practical skills that are in line with industry standards to enhance
                    their career prospects.</p>
            </div>
            
            <?php // foreach($allcourses as $courses): ?>
                <!--
            <div class="courses">
                <div class="course1" id="html">
                    <div class="course-image">
                        <img width="100%" height="150px" src="">
                    </div>
                    <div class="course-name"><a href="<?php //echo $_POST["username"];?>"></a></div>

                </div>
                   

            </div>
              <?php //endforeach; ?> 
            -->
        </div>
    </section>
    <section class="auth">
        <div class="auth-button">
            <div class="qoute">
                <h2>Register or Login to continue learning.</h2>
            </div>
            <div class="button"><button><a href="register.php">Register</a></button></div>
            <div class="button"><button><a href="login.php">Login</a></button></div>
        </div>
    </section>
    <footer>
        <div class="foot">
            <h3>Developed By- Mahesh Ghongade.</h3>
            <p>All rights are reserved - 2023</p>
          
                   

        </div>
    </footer>
</body>

</html>