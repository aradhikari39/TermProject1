document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('animalSearch');
    const searchResults = document.getElementById('searchResults');
    const searchButton = document.getElementById('searchButton');
    const allResults = Array.from(document.querySelectorAll('.search-result-item'));
    
    // Show search results when input is focused
    searchInput.addEventListener('focus', function() {
        searchResults.style.display = 'block';
        filterResults();
    });
    
    // Hide search results when clicking outside
    document.addEventListener('click', function(e) {
        if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
            searchResults.style.display = 'none';
        }
    });
    
    // Filter results as user types
    searchInput.addEventListener('input', filterResults);
    
    // Handle click on search results
    searchResults.addEventListener('mousedown', function(e) {
        const item = e.target.closest('.search-result-item');
        if (item) {
            e.preventDefault();
            window.location.href = item.getAttribute('data-url');
        }
    });
    
    // Handle search button click
    searchButton.addEventListener('click', function() {
        const searchTerm = searchInput.value.trim().toLowerCase();
        if (searchTerm) {
            const matchedItem = allResults.find(item => 
                item.textContent.toLowerCase().includes(searchTerm)
            );
            
            if (matchedItem) {
                window.location.href = matchedItem.getAttribute('data-url');
            } else {
                alert('No matching animal found. Please try another search.');
            }
        }
    });
    
    // Handle Enter key
    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            searchButton.click();
        }
    });
    
    function filterResults() {
        const searchTerm = searchInput.value.toLowerCase();
        let hasVisibleResults = false;
        
        allResults.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(searchTerm)) {
                item.style.display = 'block';
                hasVisibleResults = true;
            } else {
                item.style.display = 'none';
            }
        });
        
        // Show "No results" message if needed
        if (!hasVisibleResults && searchTerm) {
            searchResults.innerHTML = '<div class="search-result-item">No matching animals found</div>';
            searchResults.style.display = 'block';
        } else if (hasVisibleResults) {
            searchResults.style.display = 'block';
        }
    }
});