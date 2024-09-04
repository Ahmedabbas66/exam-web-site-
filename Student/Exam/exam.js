var question1Input = document.getElementById('question');
var answer1Textarea = document.getElementById('answer');

var question2Input = document.getElementById('question2');
var answer2Textarea = document.getElementById('answer2');

var question3Input = document.getElementById('question3');
var answer3Textarea = document.getElementById('answer3');

var question4Input = document.getElementById('question4');
var answer4Textarea = document.getElementById('answer4');

var question5Input = document.getElementById('question5');
var answer5Textarea = document.getElementById('answer5');

var question6Input = document.getElementById('question6');
var answer6Textarea = document.getElementById('answer6');

var question7Input = document.getElementById('question7');
var answer7Textarea = document.getElementById('answer7');

var question8Input = document.getElementById('question8');
var answer8Textarea = document.getElementById('answer8');

var question9Input = document.getElementById('question9');
var answer9Textarea = document.getElementById('answer9');

var question10Input = document.getElementById('question10');
var answer10Textarea = document.getElementById('answer10');

// Define a function to fetch the value asynchronously
function fetchAnswerFromGET1() {
    // Make an AJAX request to a PHP script that returns the value of $_GET['answer']
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'get_answer.php', true); // Adjust the URL accordingly
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // If the request is successful, set the value of the JavaScript variable
                answerFromGET1 = xhr.responseText;
            } else {
                // Handle any errors here
                console.error('Error fetching answer:', xhr.status);
            }
        }
    };
    xhr.send();
}

// Call the function to fetch the value

function validateForm() {
    fetchAnswerFromGET1();
    alert(answerFromGET1);
}


