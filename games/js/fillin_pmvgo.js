var timeLimit = 300; // Time limit in seconds

function checkUniversityAnswers() {
  var blanks = [
    "philosophy-blank1",
    "philosophy-blank2",
    "vision-blank1",
    "vision-blank2",
    "mission-blank1",
    "mission-blank2",
    "mission-blank3",
    "goal-blank1",
    "goal-blank2",
    "goal-blank3",
    "goal-blank4",
    "goal-blank5"
  ];

  var correctAnswers = [
    // Fill in the correct answers here
    "human development",
    "appropriate competencies",
    "globally",
    "competitive",
    "instruction",
    "research",
    "extension",
    "transforming",
    "resources",
    "productive",
    "self-reliant",
    "leaders"
  ];

  var correctCount = 0;

  for (var i = 0; i < blanks.length; i++) {
    var userInput = document.getElementById(blanks[i]).value.trim();

    if (userInput.toLowerCase() === correctAnswers[i].toLowerCase()) {
      document.getElementById(blanks[i]).style.border = "2px solid green";
      correctCount++;
    } else {
      document.getElementById(blanks[i]).style.border = "2px solid red";
    }
  }

  var resultMessage = "You got " + correctCount + " out of " + correctAnswers.length + " answers correct.";
  document.getElementById("result").innerHTML = resultMessage;

  // Show the "View Answers" button
  document.getElementById("view-answers-btn").style.display = "block";
}

// Function to go back to the previous page
function goBack() {
  window.history.back();
}

function onViewAnswersClick() {
  // Retrieve the current URL
  var currentURL = window.location.href;

  // Append the answer key HTML filename to the URL
  var answerKeyURL = currentURL.substring(0, currentURL.lastIndexOf("/") + 1) + "fillin_pmvgo_key.html";

  // Fetch the answer key HTML content
  fetch(answerKeyURL)
  .then(response => response.text())
  .then(data => {
    // Replace the current page's content with the answer key content
    document.open();
    document.write(data);
    document.close();
  })
  .catch(error => {
    console.error('Error fetching answer key:', error);
  });
 }
function goBackToForm() {
  window.location.href = 'fillin.html';
}
