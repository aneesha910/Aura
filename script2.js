
    document.getElementById("processForm").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default behavior

        // Perform front-end validation
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let subject = document.getElementById("subject").value;
        let message = document.getElementById("message").value;

        if (name === "" || email === "" || subject === ""|| message === "") {
            alert("All fields are required!");
            return;
        }

        // Submit the form
        document.getElementById("Form").submit();
    });