
//As a user, I want to add a revenue 
//or expense by entering its name, its amount (positive or negative) 
//and its date, in order to keep my accounts up to date.

window.addEventListener('DOMContentLoaded', function() {
    let transactionForm = document.getElementById('transactionForm');
    let transactionsList = document.getElementById('transactionsList');

    transactionForm.addEventListener('submit', function(event) {
        event.preventDefault();

        let name = document.getElementById('name').value;
        let amount = document.getElementById('amount').value;
        let date = document.getElementById('date').value;

        // Send data to server using AJAX or fetch API
        // we display the transaction information in the list
        let transactionItem = document.createElement('div');
        transactionItem.textContent = name + ' (' + amount + ' €) - ' + date;
        transactionsList.appendChild(transactionItem);

        // Reset form
        transactionForm.reset();
    });
});