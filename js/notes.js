const navBar = document.querySelector("nav"),
       menuBtns = document.querySelectorAll(".menu-icon"),
       overlay = document.querySelector(".overlay");

     menuBtns.forEach((menuBtn) => {
       menuBtn.addEventListener("click", () => {
         navBar.classList.toggle("open");
       });
     });

     overlay.addEventListener("click", () => {
       navBar.classList.remove("open");
     });


// Function to create a new text area
function createNewNote() {
    // Clear the notes container
    document.getElementById('notesContainer').innerHTML = '';

    // Create a new text area element
    var newNote = document.createElement('textarea');
    
    // Add any necessary attributes or classes to the new text area
    newNote.setAttribute('class', 'noteTextarea');
    newNote.setAttribute('placeholder', 'Write your note here...');
    
    // Append the new text area to the notes container
    document.getElementById('notesContainer').appendChild(newNote);
}

// Event listener for the "Create a New Note" button
document.getElementById('createNoteBtn').addEventListener('click', function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();
    
    // Call the function to create a new note
    createNewNote();
});


function validateForm() {
    var text = document.getElementById("text").value;
    if (text.trim() === "") {
      alert("Please enter some text before saving.");
      return false;
    }
    return true;
  }