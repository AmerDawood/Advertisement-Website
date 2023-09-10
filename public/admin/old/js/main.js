
    const toggleMenuButton = document.getElementById('toggle-menu');
    const allDiv = document.querySelector('.drop-down');

    toggleMenuButton.addEventListener('click', () => {
        allDiv.classList.toggle('active');
    });

