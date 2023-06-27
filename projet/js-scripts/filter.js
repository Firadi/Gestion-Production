// FILTER BY MATRICULE AND ROLE
function applyFilters() {
    let matriculeTarget = document.getElementById('matriculeInput').value.trim();
    let roleTarget = document.getElementById('selectRole').value;

    let table = document.getElementsByClassName('matricule');

    for (let i = 0; i < table.length; i++) {
        const td = table[i];
        const row = td.parentNode;
        const role = row.querySelector('.role').getAttribute('data-role');

        if ( !td.innerHTML.trim().includes(matriculeTarget) || (role !== roleTarget && roleTarget !== '0') ){
            row.classList.add('hidden');
        }
        else {
            row.classList.remove('hidden');
        }
    }
}

document.addEventListener('DOMContentLoaded', function () {
    let inputMatricule = document.getElementById('matriculeInput');
    let selectRole = document.getElementById('selectRole');

    // events listeners
    selectRole.addEventListener('change', function () {
    applyFilters();
    });

    inputMatricule.addEventListener('input', function () {
    applyFilters();
    });
});
