//--------------------------- This related to orgNew.php  ---------------------------
// Update the visibility based on user choices 
document.addEventListener('DOMContentLoaded', function () {
    var corCheckbox = document.getElementById("cor");
    var sessionCheckbox = document.getElementById("session");
    var lectCheckbox = document.getElementById("lect");
    var courseNumDiv = document.getElementById("courseNum");
    var sessionNumDiv = document.getElementById("sessionNum");
    var lecNumDiv = document.getElementById("lecNum");
    var otherCheckbox = document.getElementById("other");
    var otherr = document.getElementById("otherr");
    var submit2 = document.getElementById("submit2");
    var bothConDiv = document.getElementById("bothCon");
    var regularDiv = document.getElementById("regular");
    var consultationTypeRadios = document.querySelectorAll('input[name="consultationType"]'); // Ensure this selector matches your radio button names

    function updateVisibility() {
        // Reset visibility
        bothConDiv.style.display = "none";
        regularDiv.style.display = "none";
        courseNumDiv.style.display = "none";
        sessionNumDiv.style.display = "none";
        lecNumDiv.style.display = "none";
        otherr.style.display = "none";
        submit2.style.display = "none";

        // Update based on checkbox states
        if (corCheckbox.checked) {
            courseNumDiv.style.display = "block";
            submit2.style.display = "block";
        }
        
        if (sessionCheckbox.checked) {
            let selectedRadioValue = Array.from(consultationTypeRadios).find(radio => radio.checked)?.value;
            sessionNumDiv.style.display = "block";
            submit2.style.display = "block";
            if (selectedRadioValue === "هاتفية وحضورية") {
                bothConDiv.style.display = "block";
                regularDiv.style.display = "none";
            } else {
                regularDiv.style.display = "block";
                bothConDiv.style.display = "none";
            }
        }

        if (lectCheckbox.checked) {
            lecNumDiv.style.display = "block";
            submit2.style.display = "block";
        }

        if (otherCheckbox.checked) {
            otherr.style.display = "block";
            submit2.style.display = "block";
        }
    }

    // Initialize updateVisibility function for checkboxes
    corCheckbox.addEventListener('change', updateVisibility);
    sessionCheckbox.addEventListener('change', updateVisibility);
    lectCheckbox.addEventListener('change', updateVisibility);
    otherCheckbox.addEventListener('change', updateVisibility);

    // Initialize event listeners for radio buttons
    consultationTypeRadios.forEach(radio => {
        radio.addEventListener('change', updateVisibility);
    });

    // Call updateVisibility at start to apply initial visibility states
    updateVisibility();
});


// This for the first form in the page
async function submitForm() {
    try {
        // Serialize form data
        const formData = new FormData(document.getElementById('Form1'));

        // Send form data to server
        const response = await fetch('Newsubmit.php', {
            method: 'POST',
            body: formData,
        });

        // Check if the response is successful
        if (!response.ok) {
            throw new Error('Network response was not ok.');
        }

        // Parse JSON response
        const data = await response.json();

        // Check status in the response
        if (data.status === 'success') {
            document.getElementById('submitMessage1').style.display = 'block';
            var form = document.forms['Form1'];
            for (var i = 0; i < form.elements.length; i++) {
                form.elements[i].disabled = true;
            }
        } else {
            // If not successful, show error message
            document.getElementById('wrongMessage1').style.display = 'block';
        }
    } catch (error) {
        console.error('Error:', error);
        document.getElementById('wrongMessage1').style.display = 'block';
    }
}

function clearMessages1() {
    document.getElementById('submitMessage1').style.display = 'none';
    document.getElementById('wrongMessage1').style.display = 'none';
}

const formElements = document.getElementById('Form1').elements;
for (let element of formElements) {
    element.addEventListener('change', clearMessages1);
}

document.getElementById('submitButton').addEventListener('click', function (e) {
    e.preventDefault();
    submitForm();
});



// This for the second form
async function submitForm2() {
    try {
        // Prepare the FormData object from the form with id 'Form2'
        const formData = new FormData(document.getElementById('Form2'));

        // Make an asynchronous POST request to 'monthly.php'
        const response = await fetch('monthly.php', {
            method: 'POST',
            body: formData,
        });

        // Check if the fetch request was successful
        if (!response.ok) {
            throw new Error('Network response was not ok.');
        }

        // Parse the JSON response
        const data = await response.json();

        // Handle response based on the status value
        if (data.status === 'success') {
            // Display the success message
            document.getElementById('submitMessage2').style.display = 'block';
            var form = document.forms['Form2'];
            for (var i = 0; i < form.elements.length; i++) {
                form.elements[i].disabled = true;
            }
        } else {
            // Display the error message
            document.getElementById('wrongMessage2').style.display = 'block';
            document.getElementById('submitMessage2').style.display = 'none';
        }
    } catch (error) {
        console.error('Error:', error);
        // Display the error message
        document.getElementById('wrongMessage2').style.display = 'block';
    }
}

function clearMessages() {
    document.getElementById('submitMessage2').style.display = 'none';
    document.getElementById('wrongMessage2').style.display = 'none';
}

const formElements2 = document.getElementById('Form2').elements;
for (let element of formElements2) {
    element.addEventListener('change', clearMessages);
}

// Add a click event listener to the submit button with id 'submitButton2'
document.getElementById('submitButton2').addEventListener('click', function (e) {
    e.preventDefault(); // Prevent the default form submission
    submitForm2(); // Call the async form submission function
});