var timeLimit = 300; // Time limit in seconds

// Function to check the answers
function checkAlmaMaterAnswers() {
  var blanks = [
    "blank1",
    "blank2",
    "blank3",
    "blank4",
    "blank5",
    "blank6",
    "blank7",
    "blank8",
    "blank9",
    "blank10",
    "blank11",
    "blank12",
    "blank13",
    "blank14",
    "blank15",
    "blank16"
  ];

  var correctAnswers = [
    "Hail",
    "honored",
    "heads",
    "hands",
    "institution",
    "life",
    "inspiration",
    "knowledge",
    "wisdom",
    "instruction",
    "research",
    "extension",
    "transforming",
    "great nation",
    "love",
    "Beloved"
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

  var resultMessage = "You got " + correctCount + " out of " + blanks.length + " answers correct.";
  document.getElementById("result").innerHTML = resultMessage;

  // Show the "View Answers" button
  document.getElementById("view-answers-btn").style.display = "block";

  // Disable form inputs after submitting
  disableFormInputs();
}

// Function to go back to the previous page
function goBack() {
  window.history.back();
}

// Function to disable form inputs
function disableFormInputs() {
  var form = document.getElementById("almamater-form");
  var inputs = form.getElementsByTagName("input");

  for (var i = 0; i < inputs.length; i++) {
    inputs[i].disabled = true;
  }
}

// Function to display the correct answers
function onViewAnswersClick() {
  // Retrieve the current URL
  var currentURL = window.location.href;

  // Append the answer key HTML filename to the URL
  var answerKeyURL = currentURL.substring(0, currentURL.lastIndexOf("/") + 1) + "fillin_hymn_key.html";

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
