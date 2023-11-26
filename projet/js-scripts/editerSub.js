// Wait for the document to be ready
document.addEventListener("DOMContentLoaded", function () {
    // Get all the edit buttons
    const editButtons = document.querySelectorAll(".edit-button");

    // Add click event listeners to each edit button
    editButtons.forEach((button) => {
    button.addEventListener("click", handleEdit);
    });

    // Function to handle the edit button click event
    function handleEdit(event) {
    // Get the parent row (tr) of the clicked button
    const row = event.target.closest("tr");

    // Get the data from the row that you want to edit
    const matricule = row.querySelector(".matricule").textContent;
    const nom = row.querySelector("td:nth-child(2)").textContent;
    const prenom = row.querySelector("td:nth-child(3)").textContent;
    const role = row.querySelector(".role").dataset.role;

    // Create a new row for editing
    const newRow = document.createElement("tr");

    // Add input fields and a submit button to the new row
    newRow.innerHTML = `
        <form action="" method="">
            <td>${matricule}</td>
            <td><input type="text" class="form-control" value="${nom}"></td>
            <td><input type="text" class="form-control" value="${prenom}"></td>
            <td>
            <select class="form-control">
                <option value="1" ${role === '1' ? 'selected' : ''}>Opérateur</option>
                <option value="2" ${role === '2' ? 'selected' : ''}>Chef d'équipe</option>
            </select>
            </td>
            <td class="text-center">
            <button class="btn btn-success save-button" type="submit"><i class="fas fa-save"></i></button>
            <button class="btn btn-danger cancel-button"><i class="fas fa-window-close"></i></button>
            </td>
            <td></td>
        </form>
    `;

    // Insert the new row below the current row
    row.parentNode.insertBefore(newRow, row.nextSibling);

    // Hide the original row
    row.style.display = "none";

    // Change bg color of the new row
    newRow.style.backgroundColor = "#ecfa7345"

    // Add event listener to the save button
    const saveButton = newRow.querySelector(".save-button");
    saveButton.addEventListener("click", handleSave.bind(null, newRow, row));

    // Add event listener to the cancel button
    const cancelButton = newRow.querySelector(".cancel-button");
    cancelButton.addEventListener("click", handleCancel.bind(null, newRow, row));
    }

    // Function to handle the save button click event
    function handleSave(newRow, originalRow) {
    // Get the values from the input fields
    const matricule = newRow.querySelector("input:nth-child(1)").value;
    const nom = newRow.querySelector("input:nth-child(2)").value;
    const prenom = newRow.querySelector("input:nth-child(3)").value;
    const role = newRow.querySelector("select").value;

    // Update the original row with the new data
    originalRow.querySelector(".matricule").textContent = matricule;
    originalRow.querySelector("td:nth-child(2)").textContent = nom;
    originalRow.querySelector("td:nth-child(3)").textContent = prenom;
    originalRow.querySelector(".role").dataset.role = role;
    originalRow.querySelector(".role").textContent = getRoleString(role);

    // Show the original row and remove the new row
    newRow.style.display = "none";
    originalRow.style.display = "table-row";
    }

    // Function to handle the cancel button click event
    function handleCancel(newRow, originalRow) {
    // Show the original row and remove the new row
    newRow.style.display = "none";
    originalRow.style.display = "table-row";
    }
});