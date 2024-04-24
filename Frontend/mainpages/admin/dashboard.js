// Wait for the DOM content to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Select all dashboard option elements
    const dashboardOptions = document.querySelectorAll('.dashboard_option');
    // Select all dashboard table elements
    const dashboardTables = document.querySelectorAll('.dashboard_table');

    // Initially hide all tables except the resident table
    dashboardTables.forEach(table => {
        // Check if the current table is not the resident table
        if (table.id !== 'display_residents') {
            // Hide the table by setting its display style to 'none'
            table.style.display = 'none';
        }
    });

    // Add click event listeners to each dashboard option
    dashboardOptions.forEach(option => {
        option.addEventListener('click', function () {
            // Get the ID of the table associated with the clicked option
            const selectedTableId = this.dataset.table;
            // Show or hide each table based on the clicked option
            dashboardTables.forEach(table => {
                // Check if the current table matches the selected table ID using the html "data-table" attribute
                if (table.id === selectedTableId) {
                    // Show the table by setting its display style to 'table'
                    table.style.display = 'table';
                } else {
                    // Hide the table by setting its display style to 'none'
                    table.style.display = 'none';
                }
            });
        });
    });
});

