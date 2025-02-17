$(document).ready(function() {
    // Trigger AJAX search on keyup
    $('#search_sentTo').on('keyup', function() {
        let query = $(this).val();
        
        if (query.length > 0) {
            $.ajax({
                url: 'backend/end-points/fetch_data.php', // Replace with the correct endpoint
                method: 'GET',
                data: { query: query },
                success: function(data) {
                    console.log("Data received:", data);  // Debugging: log the response
                    let results = JSON.parse(data); // Parse the JSON response
                    
                    // Empty the results container before appending new results
                    $('#searchResults').html('');

                    if (results.length > 0) {
                        // Loop through the results and append them as list items
                        results.forEach(function(item) {
                            let listItem = $('<li>')
                                .text(item.email)
                                .addClass('suggestion-item p-2 cursor-pointer hover:bg-blue-100') // Added hover effect
                                .data('id', item.id);
                            $('#searchResults').append(listItem);
                        });

                        // Make sure the results are visible
                        $('#searchResults').removeClass('hidden').show(); // Remove hidden class and ensure it's visible
                    } else {
                        // No results found, display message
                        $('#searchResults').html('<li class="p-2">No results found</li>').removeClass('hidden').show();
                    }
                },
                error: function(xhr, status, error) {
                    console.log("AJAX request failed:", error);  // Debugging: log the error
                }
            });
        } else {
            $('#searchResults').hide(); // Hide the suggestions if search field is empty
        }
    });

    // Set the value of #search_sentTo when a suggestion is clicked
    $(document).on('click', '.suggestion-item', function() {
        let selectedEmail = $(this).text();
        let selectedId = $(this).data('id');
        
        // Set the value of the search input field to the clicked suggestion
        $('#search_sentTo').val(selectedEmail);
        
        // Optionally, you can store the ID elsewhere for later use
        $('#selectedAdminId').val(selectedId);  // Make sure you have a hidden input with id="selectedAdminId"

        // Clear the suggestions list and hide it
        $('#searchResults').html('').hide();
    });

    // Hide the suggestion list if clicked outside the search input
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#search_sentTo').length) {
            $('#searchResults').hide();
        }
    });
});
