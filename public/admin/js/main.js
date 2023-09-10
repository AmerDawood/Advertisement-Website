
    const toggleMenuButton = document.getElementById('toggle-menu');
    const allDiv = document.querySelector('.drop-down');

    toggleMenuButton.addEventListener('click', () => {
        allDiv.classList.toggle('active');
    });

      
    document.addEventListener("DOMContentLoaded", function() {
        // Add click event listener to the bar icon
        const barIcon = document.querySelector('.navbar-toggle');
        const xsDropdown = document.querySelector('#xs-dropdown');
      
        barIcon.addEventListener('click', function() {
          // Show the xs-dropdown when the bar icon is clicked
          xsDropdown.classList.add('open');
        });
      });