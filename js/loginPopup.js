// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Handle Loaded Imports
    function handleLoad(event) {
        console.log('Loaded import: ' + event.target.href);
      }
       // Handle Errors.
      function handleError(event) {
        console.log('Error loading import: ' + event.target.href);
      }