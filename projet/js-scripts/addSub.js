
// SELECT ROLE -> SELECT RESPONSABLE

// Get the select elements
var inputRole = document.getElementById('inputRole');
var inputManager = document.getElementById('inputManager');

// Function to show/hide relevant options based on selected role
function updateResponsables() {
    // Get the selected role value
    var selectedRole = inputRole.value;

     // Clear the currently selected value
    inputManager.value = '';
    

    // Loop through each option in inputManager select field
    var options = inputManager.options;
    for (var i = 0; i < options.length; i++) {
        var option = options[i];

        // Check the data-role attribute of the option and show/hide accordingly
        if (option.getAttribute('data-role') === selectedRole) {
            option.style.display = 'block';
        } else {
            option.style.display = 'none';
        }
    }
}

// Add an event listener to the inputRole select field
inputRole.addEventListener('change', updateResponsables);

// Call the updateResponsables function initially to set the initial state
updateResponsables();