function validateForm() {
  let isValid = true;

  // Name validation
  const name = document.getElementById("name").value.trim();
  const namemsg = document.getElementById("namemsg");
  if (!name || name.length > 100) {
    namemsg.innerHTML = "Name is not valid. Must be 1 to 100 characters.";
    namemsg.classList.add("text-danger");
    namemsg.classList.remove("text-success");
    isValid = false;
  } else {
    namemsg.innerHTML = "Valid name.";
    namemsg.classList.remove("text-danger");
    namemsg.classList.add("text-success");
  }

  // Email validation
  const email = document.getElementById("email").value.trim();
  const emailmsg = document.getElementById("emailmsg");
  if (!email.endsWith("@deakin.edu.au")) {
    emailmsg.innerHTML = "Email is not valid. Must end with '@deakin.edu.au'.";
    emailmsg.classList.add("text-danger");
    isValid = false;
  } else {
    emailmsg.innerHTML = "Valid email.";
    emailmsg.classList.remove("text-danger");
    emailmsg.classList.add("text-success");
  }

   // subject validation
   const subject = document.getElementById("subject").value.trim();
   const subjectmsg = document.getElementById("subjectmsg");
   if (!subject || subject.length > 100) {
     subjectmsg.innerHTML = "subject is not valid. Must be 1 to 100 characters.";
     subjectmsg.classList.add("text-danger");
     subjectmsg.classList.remove("text-success");
     isValid = false;
   } else {
     subjectmsg.innerHTML = "Valid subject.";
     subjectmsg.classList.remove("text-danger");
     subjectmsg.classList.add("text-success");
   }

    // message validation
  const message = document.getElementById("message").value.trim();
  const messagemsg = document.getElementById("messagemsg");
  if (!message || message.length > 100) {
    messagemsg.innerHTML = "message is not valid. Must be 1 to 100 characters.";
    messagemsg.classList.add("text-danger");
    messagemsg.classList.remove("text-success");
    isValid = false;
  } else {
    messagemsg.innerHTML = "Valid message.";
    messagemsg.classList.remove("text-danger");
    messagemsg.classList.add("text-success");
  }

  if (isValid) {
    alert("Form successfully validated!");
  }
}

function resetForm() {
  // Clear all validation messages
  document.querySelectorAll(".form-text").forEach((msg) => {
    msg.innerHTML = "";
    msg.classList.remove("text-danger", "text-success");
  });
}


  

