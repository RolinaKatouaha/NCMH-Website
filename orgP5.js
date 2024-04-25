function fetchLatestFile() {
    $.ajax({
        url: 'display.php', // Make sure this URL is correct
        type: 'GET',
        dataType: 'json', // Expecting JSON response
        success: function (data) {
            console.log(data); // Debugging line to see what the response is
            if (data.fileUrls && data.fileUrls.length > 0) {
                // Files exist, display them
                var displayContent = '';
                data.fileUrls.forEach(function (fileUrl) {
                    displayContent += "<object data='" + fileUrl + "' type='application/pdf' style='width:100%; height:678px;'>" +
                        "<iframe src='" + fileUrl + "' style='border: none; width:100%; height:678px;'></iframe>" +
                        "</object>";
                });
                $('#content').html(displayContent);
            } else {
                // No file or empty response, display a message
                $('#content').html(
                    "<div style='width:100%; height:678px; display:flex; justify-content:center; align-items:center;'>" +
                    "<p>No files to display.</p>" +
                    "</div>");
            }
        },
        error: function (xhr, status, error) {
            // Handle any communication errors here
            console.error("Error: " + status + " " + error);
            $('#content').html("<div> </div>");
        }
    });
}


$(document).ready(function () {
    fetchLatestFile();
});

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