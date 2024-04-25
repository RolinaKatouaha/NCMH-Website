// Function to preview the selected file
function previewFile() {
    var fileInput = document.getElementById('fileUpload');
    var filePreview = document.getElementById('filePreview');

    // Clear previous content
    filePreview.innerHTML = '';

    if (fileInput.files.length > 0) {
        var file = fileInput.files[0];

        // Check if the file is a PDF
        if (file.type === 'application/pdf') {
            var iframe = document.createElement('iframe');
            iframe.src = URL.createObjectURL(file);
            iframe.style.width = "100%";
            iframe.style.height = "678px";
            filePreview.appendChild(iframe);
            document.getElementById("submitButton").style.display = "block";
        } else {
            var p = document.createElement('p');
            p.textContent = file.name;
            filePreview.appendChild(p);
        }
    } else {
        var p = document.createElement('p');
        p.textContent = 'لم يتم اختيار ملف.';
        filePreview.appendChild(p);
    }
}

// Function to submit the form data
async function submitForm() {
    try {
        const formData = new FormData(document.getElementById('Form1'));

        const response = await fetch('upload2.php', {
            method: 'POST',
            body: formData,
        });

        if (!response.ok) {
            throw new Error('Network response was not ok.');
        }

        const data = await response.json();

        if (data.status === 'success') {
            document.getElementById('submitMessage1').style.display = 'block';
            document.getElementById('wrongMessage1').style.display = 'none';
        } else {
            throw new Error(data.message || 'Error from server.');
        }
    } catch (error) {
        console.error(error);
        document.getElementById('submitMessage1').style.display = 'none';
        document.getElementById('wrongMessage1').style.display = 'block';
    }
}

// Function to clear messages
function clearMessages1() {
    document.getElementById('submitMessage1').style.display = 'none';
    document.getElementById('wrongMessage1').style.display = 'none';
}

// Function to fetch the latest file and display it
function fetchLatestFile() {
    $.ajax({
        url: 'display.php', // Ensure this URL is correct
        type: 'GET',
        dataType: 'json', // Expecting JSON response
        success: function (data) {
            console.log(data); // For debugging
            if (data.fileUrls && data.fileUrls.length > 0) {
                var displayContent = '';
                data.fileUrls.forEach(function (fileUrl) {
                    displayContent += "<object data='" + fileUrl + "' type='application/pdf' style='width:100%; height:678px;'></object>";
                });
                $('#content').html(displayContent);
            } else {
                $('#content').html("<p></p>");
            }
        },
        error: function (xhr, status, error) {
            $('#content').html("<p></p>");
        }
    });
}

// Document ready function to initialize everything
$(document).ready(function () {
    fetchLatestFile();

    $('#submitButton').off('click').on('click', function (e) {
        e.preventDefault();
        $(this).prop('disabled', true);
        submitForm();
    });

    const formElements = document.getElementById('Form1').elements;
    for (let element of formElements) {
        element.addEventListener('change', clearMessages1);
    }
});
