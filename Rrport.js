$(document).ready(function () {
    $('#submitButton').on('click', function(e) {
    e.preventDefault();
    submitForm();
});


    $('#Form2').find('input, textarea, select').on('change', function () {
        saveDataToLocal(); // Save data to local storage on any change
    });

    $(document).on('change', '.actNum2', function () {
        adjustRows($(this), $(this).data('act-type'));
    });

    function adjustRows($actNum2, actType) {
        var desiredRowCount = parseInt($actNum2.val(), 10); // Desired number of rows based on the input
        var $allRowsOfActType = $(`tr`).has(`input[data-act-type='${actType}']`); // Get all rows of the specific actType
        var currentRowCount = $allRowsOfActType.length; // Current number of rows for this actType

    // If the desired row count is 0, set all entities to null
    if (desiredRowCount === 0) {
        // Prompt the user for confirmation
        var isConfirmed = confirm("هل أنت متأكد أنه لا توجد أنشطة في هذا المحور؟ علما أنه لن يمكنك اضافة أي نشاط");

        if(isConfirmed) {
            // User confirmed; proceed with setting the row count to zero
            var $allRowsOfActType = $(`tr`).has(`input[data-act-type='${actType}']`);
            $allRowsOfActType.find('input, textarea').val('0'); // Set input values within these rows to '0'
            
        } else {
            // User canceled; revert the input value to its previous state or handle accordingly
            $actNum2.val(''); // Clear the input or set it to its previous value
            return; // Exit the function to avoid further processing
        }
    }

        // Add rows if the desired count is greater than the current count
        if (desiredRowCount > currentRowCount) {
            for (let i = currentRowCount; i < desiredRowCount; i++) {
                addRow(actType, $allRowsOfActType.last()); // Add a new row after the last row of the same actType
            }
        } 
        // Remove rows if the desired count is less than the current count
        else if (desiredRowCount < currentRowCount) {
            for (let i = currentRowCount; i > desiredRowCount; i--) {
                $allRowsOfActType.last().remove(); // Remove the last row of the specific actType
                $allRowsOfActType = $allRowsOfActType.not($allRowsOfActType.last()); // Update the jQuery object after removal
            }
        }
    }

    function addRow(actType, $afterRow) {
        var newRowHtml = '';
        if (actType == '5') {
            newRowHtml = `<tr>
                <td></td>
                <td><input type="number" name="actNum2[]" class="actNum2" data-act-type="5" style="text-align:center; padding-right: 15px;" min="0"></td>
                <td><textarea name="actName[]" class="actName" style="text-align: center; border: 0px solid;" rows="2" cols="20"></textarea></td>
                <td><input type="text" name="actDate[]" class="actDate" style="text-align: center; padding: auto; margin:auto;" onfocus="this.type='date'" onblur="this.type='text'"></td>
                <td><input type="text" name="actParti[]" class="actParti" style="text-align: center; padding-right: 20px;"></td>
                
            </tr>`;
        }//<td><input type="text" name="actParti[]" class="actParti" style="text-align: center;"></td>
        else{
        // Create a new row. Customize this HTML to fit your table's structure.
        var newRowHtml = `<tr>
                        <td></td>
                        <td><input type="hidden" name="actNum2[]" class="actNum2" data-act-type="${actType}" style="text-align:center; padding-right: 15px;" min="1"></td>
                        <td><textarea name="actName[]" class="actName" style="text-align: center; border: 0px solid;" rows="2" cols="20"></textarea></td>
                        <td><input type="text" name="actDate[]" class="actDate" style="text-align: center; padding: auto; margin:auto;" onfocus="this.type='date'" onblur="this.type='text'"></td>
                        <td><input type="number" name="UsersCount[]" class="UsersCount" style="text-align: center; padding-right: 20px;" min="1"></td>
                        <td><input type="text" name="actParti[]" class="actParti" style="text-align: center;"></td>
                     }             </tr>`;
                    }
        $afterRow.after(newRowHtml); // Insert the new row after the last row of the same actType
    }

});

function collectDataFromTable(tableSelector) {
    var data = [];
    $(tableSelector + ' tr').each(function() {
        var row = {
            actType: $(this).find('.actType').val(),
            actName: $(this).find('.actName').val(),
            actDate: $(this).find('.actDate').val(),
            actParti: $(this).find('.actParti').val()
        };

        if (row.actType && row.actName && row.actDate && row.actParti) {
            data.push(row);
        } else {
            console.log("Incomplete data in one of the rows", row);
        }
    });
    return data;
}

function collectData() {
    var data = [];
    data = data.concat(collectDataFromTable('#tableBody'));
    data = data.concat(collectDataFromTable('#tableBody1'));
    return data;
}

function saveDataToLocal() {
    var data = collectData();
    localStorage.setItem('formData', JSON.stringify(data));
}

// Submit form data asynchronously.
async function submitForm() { 
    const actNum2Inputs = document.querySelectorAll('.actNum2');
    const actNameInputs = document.querySelectorAll('.actName');
    const actDateInputs = document.querySelectorAll('.actDate');
    const UsersCountInputs = document.querySelectorAll('.UsersCount');
    for (let input of actNum2Inputs && actNameInputs && actDateInputs && UsersCountInputs) {
        if (input.value === '') {
            document.getElementById('wrongMessage1').style.display = 'block'; 
            return; // Stop the form submission
        }
    }

    
    try { 
        // Serialize form data 
        const formData = new FormData(document.getElementById('Form2')); 
 
        // Send form data to server 
        const response = await fetch('submit.php', { 
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
            $('#editButton').prop('disabled', false);  
            var form = document.forms['Form2']; 
for (var i = 0; i < form.elements.length; i++) { 
    form.elements[i].disabled = true; 
} 
        } else { 
            document.getElementById('wrongMessage1').style.display = 'block'; 
        } 
    } catch (error) { 
        document.getElementById('wrongMessage1').style.display = 'block'; 
    } 

}
 
function clearMessages1() {
    document.getElementById('submitMessage1').style.display = 'none';
    document.getElementById('wrongMessage1').style.display = 'none';
}

const formElements = document.getElementById('Form2').elements;
for (let element of formElements) {
    element.addEventListener('change', clearMessages1);
}

/* Fetch data and display it.
function fetchData() {
    $.ajax({
        url: 'fetch.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Functions to display fetched data should be defined elsewhere.
            displayActivitesData(data.activites);
            displayReportTableData(data.reportable1);
        },
        error: function() {
            console.log('Error fetching data.');
        }
    });
}*/
