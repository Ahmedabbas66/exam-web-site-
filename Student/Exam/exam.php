<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>exam</title>
        <link rel="stylesheet" href="exam.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="header.css">
        <script>
            <?php
                    // Retrieve the value of $_GET['answer'] from PHP
                    $answer1 =isset($_GET['answer']) ? htmlspecialchars($_GET['answer']) : '';
                    $answer2 =isset($_GET['answer2']) ? htmlspecialchars($_GET['answer2']) : '';
                    $answer3 =isset($_GET['answer3']) ? htmlspecialchars($_GET['answer3']) : '';
                    $answer4 =isset($_GET['answer4']) ? htmlspecialchars($_GET['answer4']) : '';
                    $answer5 =isset($_GET['answer5']) ? htmlspecialchars($_GET['answer5']) : '';
                    $answer6 =isset($_GET['answer6']) ? htmlspecialchars($_GET['answer6']) : '';
                    $answer7 =isset($_GET['answer7']) ? htmlspecialchars($_GET['answer7']) : '';
                    $answer8 =isset($_GET['answer8']) ? htmlspecialchars($_GET['answer8']) : '';
                    $answer9 =isset($_GET['answer9']) ? htmlspecialchars($_GET['answer9']) : '';
                    $answer10 =isset($_GET['answer10']) ? htmlspecialchars($_GET['answer10']) : '';

                    // Return the value as a response
            ?>
           var answerFromGET1 = '<?php echo $answer1; ?>';
           var answerFromGET2 = '<?php echo $answer2; ?>';
           var answerFromGET3 = '<?php echo $answer3; ?>';
           var answerFromGET4 = '<?php echo $answer4; ?>';
           var answerFromGET5 = '<?php echo $answer5; ?>';
           var answerFromGET6 = '<?php echo $answer6; ?>';
           var answerFromGET7 = '<?php echo $answer7; ?>';
           var answerFromGET8 = '<?php echo $answer8; ?>';
           var answerFromGET9 = '<?php echo $answer9; ?>';
           var answerFromGET10 = '<?php echo $answer10; ?>';
           function validateForm(){

                var points = 0;
                var answer1Textarea = document.getElementById('A1');
                var answer2Textarea = document.getElementById('A2');
                var answer3Textarea = document.getElementById('A3');
                var answer4Textarea = document.getElementById('A4');
                var answer5Textarea = document.getElementById('A5');
                var answer6Textarea = document.getElementById('A6');
                var answer7Textarea = document.getElementById('A7');
                var answer8Textarea = document.getElementById('A8');
                var answer9Textarea = document.getElementById('A9');
                var answer10Textarea = document.getElementById('A10');
                var userAnswer1 = answer1Textarea.value;
                var userAnswer2 = answer2Textarea.value;
                var userAnswer3 = answer3Textarea.value;
                var userAnswer4 = answer4Textarea.value;
                var userAnswer5 = answer5Textarea.value;
                var userAnswer6 = answer6Textarea.value;
                var userAnswer7 = answer7Textarea.value;
                var userAnswer8 = answer8Textarea.value;
                var userAnswer9 = answer9Textarea.value;
                var userAnswer10 = answer10Textarea.value;
                // Compare each answer with its corresponding textarea value
                // Compare each answer with its corresponding textarea value
                if (answerFromGET1 == userAnswer1) {
                    points++;
                }
                if (answerFromGET2 == userAnswer2) {
                    points++;
                }
                if (answerFromGET3 == userAnswer3) {
                    points++;
                }
                if (answerFromGET4 == userAnswer4) {
                    points++;
                }
                if (answerFromGET5 == userAnswer5) {
                    points++;
                }
                if (answerFromGET6 == userAnswer6) {
                    points++;
                }
                if (answerFromGET7 == userAnswer7) {
                    points++;
                }
                if (answerFromGET8 == userAnswer8) {
                    points++;
                }
                if (answerFromGET9 == userAnswer9) {
                    points++;
                }
                if (answerFromGET10 == userAnswer10) {
                    points++;
                }
                    alert("Points: " + points + " out of 10");
            }


        </script>
    </head>

    <header class="HEADER">

        <div class="left-header">

        <a href="" class="MENU"><img src="" alt="" class="menu-img"></a>
        <a href="../../Org/Home/Home.html"><input class="home" id="abut us" type="button" value="Home"></a>
        <a href="../../Org/Create Exam/Create.html"><input class="NEWS" id="news" type="button" value="Create Exam"></a>
        <a href="../../Org/Get in Touch/get_in_touch.html"><input class="WORK" id="work" type="button" value="Get In Touch"></a>

        </div>

        <div class="right-header">
            <a href="../../sing_up/sign_up.html"><input class="signup" id="signup" type="button" value="Sign Up"></a>
            <a href="../../login/login.html"><input class="login" id="login" type="button" value="Login"></a>
            <a href="../../Org/Profile/profile.html"><i class='fas fa-user-circle' style='font-size:48px;color:white;display:inline-block; position: absolute;right: 175px;top: 17px; cursor: pointer;'></i></a>
            <a href="../../login/login.html"><input class="logout" id="logout" type="button" value="Logout"></a>
        </div>

    </header>

    <body>
        <main>
            <div class="createexam">

                <h1 class="Create"><?php echo isset($_GET['subject']) ? htmlspecialchars($_GET['subject']) : ''; ?></h1>
                <form action="" method="post" onsubmit="return validateForm()">
                    <div>
                        
                        <label class="ExTitle" for="inExTitle">Exam Title : </label>
                        <input id="inExTitle" disabled class="inText" type="text" placeholder="Exame Name" value="<?php echo isset($_GET['exam_title']) ? htmlspecialchars($_GET['exam_title']) : ''; ?>">
                        
                        <label class="ExTime" for="inExTime">Exam Time : </label>
                        <!-- <input id="inextime" class="intime" type="text"> -->
                        <input id="inextime" disabled class="intime" type="number" placeholder="Time In Minutes" value="<?php echo isset($_GET['exam_time']) ? htmlspecialchars($_GET['exam_time']) : ''; ?>">

                        <br>

                        
                    </div>

                        <div id="createwritten" class="Create-Written">
                            <div>
                                <label class="Q" for="Q-Written">Enter Question :</label>
                                <input type="text" class="inQ" name="question" id="question" placeholder="Enter Question" disabled value="<?php echo isset($_GET['question']) ? htmlspecialchars($_GET['question']) : ''; ?>">
                                <br>
                                <textarea class="T-area" name="answer" id="A1" placeholder="Enter the answer ..."></textarea>
                                <br>
                                <b>(1 point)</b>
                            </div>
                        </div>

                        <div id="createwritten" class="Create-Written">
                            <div>
                                <label class="Q" for="Q-Written">Enter Question :</label>
                                <input type="text" class="inQ" name="question2" id="question2" placeholder="Enter Question" required disabled value="<?php echo isset($_GET['question2']) ? htmlspecialchars($_GET['question2']) : ''; ?>">
                                <br>
                                <textarea class="T-area" name="answer2" id="A2" placeholder="Enter the answer ..." required></textarea>
                                <br>
                                <b>(1 point)</b>
                            </div>
                        </div>

                        <div id="createwritten" class="Create-Written">
                            <div>
                                <label class="Q" for="Q-Written">Enter Question :</label>
                                <input type="text" class="inQ" name="question3" id="question3" placeholder="Enter Question" required disabled value="<?php echo isset($_GET['question3']) ? htmlspecialchars($_GET['question3']) : ''; ?>">
                                <br>
                                <textarea class="T-area" name="answer3" id="A3" placeholder="Enter the answer ..." required></textarea>
                                <br>
                                <b>(1 point)</b>
                            </div>
                        </div>

                        <div id="createwritten" class="Create-Written">
                            <div>
                                <label class="Q" for="Q-Written">Enter Question :</label>
                                <input type="text" class="inQ" name="question4" id="question4" placeholder="Enter Question" required disabled value="<?php echo isset($_GET['question4']) ? htmlspecialchars($_GET['question4']) : ''; ?>">
                                <br>
                                <textarea class="T-area" name="answer4" id="A4" placeholder="Enter the answer ..." required></textarea>
                                <br>
                                <b>(1 point)</b>
                            </div>
                        </div>

                        <!-- Repeat the same pattern for the remaining divs -->
                        <div id="createwritten" class="Create-Written">
                            <div>
                                <label class="Q" for="Q-Written">Enter Question :</label>
                                <input type="text" class="inQ" name="question5" id="question5" placeholder="Enter Question" required disabled value="<?php echo isset($_GET['question5']) ? htmlspecialchars($_GET['question5']) : ''; ?>">
                                <br>
                                <textarea class="T-area" name="answer5" id="A5" placeholder="Enter the answer ..." required></textarea>
                                <br>
                                <b>(1 point)</b>
                            </div>
                        </div>

                        <div id="createwritten" class="Create-Written">
                            <div>
                                <label class="Q" for="Q-Written">Enter Question :</label>
                                <input type="text" class="inQ" name="question6" id="question6" placeholder="Enter Question" required disabled value="<?php echo isset($_GET['question6']) ? htmlspecialchars($_GET['question6']) : ''; ?>">
                                <br>
                                <textarea class="T-area" name="answer6" id="A6" placeholder="Enter the answer ..." required></textarea>
                                <br>
                                <b>(1 point)</b>
                            </div>
                        </div>

                        <div id="createwritten" class="Create-Written">
                            <div>
                                <label class="Q" for="Q-Written">Enter Question :</label>
                                <input type="text" class="inQ" name="question7" id="question7" placeholder="Enter Question" required disabled value="<?php echo isset($_GET['question7']) ? htmlspecialchars($_GET['question7']) : ''; ?>">
                                <br>
                                <textarea class="T-area" name="answer7" id="A7" placeholder="Enter the answer ..." required></textarea>
                                <br>
                                <b>(1 point)</b>
                            </div>
                        </div>

                        <div id="createwritten" class="Create-Written">
                            <div>
                                <label class="Q" for="Q-Written">Enter Question :</label>
                                <input type="text" class="inQ" name="question8" id="question8" placeholder="Enter Question" required disabled value="<?php echo isset($_GET['question8']) ? htmlspecialchars($_GET['question8']) : ''; ?>">
                                <br>
                                <textarea class="T-area" name="answer8" id="A8" placeholder="Enter the answer ..." required></textarea>
                                <br>
                                <b>(1 point)</b>
                            </div>
                        </div>

                        <div id="createwritten" class="Create-Written">
                            <div>
                                <label class="Q" for="Q-Written">Enter Question :</label>
                                <input type="text" class="inQ" name="question9" id="question9" placeholder="Enter Question" required disabled value="<?php echo isset($_GET['question9']) ? htmlspecialchars($_GET['question9']) : ''; ?>">
                                <br>
                                <textarea class="T-area" name="answer9" id="A9" placeholder="Enter the answer ..." required></textarea>
                                <br>
                                <b>(1 point)</b>
                            </div>
                        </div>

                        <div id="createwritten" class="Create-Written">
                            <div>
                                <label class="Q" for="Q-Written">Enter Question :</label>
                                <input type="text" class="inQ" name="question10" id="question10" placeholder="Enter Question" required disabled value="<?php echo isset($_GET['question10']) ? htmlspecialchars($_GET['question10']) : ''; ?>">
                                <br>
                                <textarea class="T-area" name="answer10" id="A10" placeholder="Enter the answer ..." required></textarea>
                                <br>
                                <b>(1 point)</b>
                            </div>
                        </div>
                    
                    </div>
                    <div>
                        <input id="save" class="save" type="submit" value="Submit" >
                    </div>
          
                </form>
            </div>    
        </main>       
    </body>

    <footer>
        <div class="footer-container-1">
            <div class="footer-container-1-span-1">
                <img id="logo-footre" class="logo-footre" src="" alt="">
                <a href="">Get In Touch</a>
                <a href="">About Us</a>
            </div>
            <div class="social-media">
                <ul>
                    <li class="list-social-media-linkedin"> <a target="_blank" href="https://www.youtube.com/riotgames"><i class="fab fa-linkedin"></i></a></li>
                    <li class="list-social-media-twitter"> <a target="_blank" href="https://twitter.com/riotgames"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-social-media-facebook"> <a target="_blank" href="https://www.facebook.com/RiotGames/"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-social-media-instagram"> <a target="_blank" href="https://www.instagram.com/riotgames/"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <hr>
                <div class="footer-container-2">
                        <a href="http://">
                            Cookie Preferences
                        </a>
                        <a href="http://">
                            2024 Exam Website,Inc.All Rights Reserved.
                        </a>
                </div>
    </footer>

</html>