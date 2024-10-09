document.addEventListener("DOMContentLoaded", function () {
    const utilityTable = document.getElementById("utility-table");
    const addUtilityButton = document.getElementById("add-utility");
    const totalExpenseElement = document.getElementById("total-expense");

    // Update total expense when the page loads
    updateTotalExpense();

    // Add a new row for utility when the "Plus" button is clicked
    addUtilityButton.addEventListener("click", function () {
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
            <td><input type="text" class="form-control utility-input" placeholder="Enter utility"></td>
            <td><input type="number" class="form-control expense-input" placeholder="Enter expense"></td>
        `;
        utilityTable.appendChild(newRow);

        // Attach input event listeners for newly added rows
        newRow.querySelectorAll(".expense-input").forEach(function (input) {
            input.addEventListener("input", updateTotalExpense);
        });
    });

    function updateTotalExpense() {
        let totalExpense = 0;
        document.querySelectorAll(".expense-input").forEach(function (input) {
            totalExpense += parseFloat(input.value) || 0;
        });
        totalExpenseElement.textContent = totalExpense;
    }
});