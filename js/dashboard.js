const navBar = document.querySelector("nav"),
  menuBtns = document.querySelectorAll(".menu-icon"),
  overlay = document.querySelector(".overlay"),


  
  addBox = document.querySelector(".add-box"),
  popupBox = document.querySelector(".popup-box"),
  popupTitle = popupBox.querySelector("header p"),
  closeIcon = popupBox.querySelector("header i"),
  titleTag = popupBox.querySelector("input"),
  descTag = popupBox.querySelector("textarea"),
  addBtn = popupBox.querySelector("button");

const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];
let notes = JSON.parse(localStorage.getItem("notes")) || [];
let isUpdate = false,
  updateId,
  selectedRating;

// Function to save notes to localStorage
function saveNotes() {
  localStorage.setItem("notes", JSON.stringify(notes));
}

// Function to toggle completion of a note
function toggleCompletion(id) {
  notes[id].completed = !notes[id].completed;
  saveNotes();
}

// Function to update the ratings
function updateRating(id, rating) {
  notes[id].rating = rating;
  saveNotes();
}

// Function to show notes
function showNotes() {
  document.querySelectorAll(".note").forEach((li) => li.remove());
  notes.forEach((note, id) => {
    let filterDesc = note.description.replaceAll("\n", "<br/>");
    let liTag = `<li class="note">
                        <div class="details">
                            <p>${note.title}</p>
                            <span>${filterDesc}</span>
                        </div>
                        <div class="bottom-content">
                            <span>${note.date}</span>
                            <span>${getCompletedCount()} completed</span>
                            <div class="settings">
                                <i onclick="showMenu(this)" class="uil uil-ellipsis-h"></i>
                                <ul class="menu">
                                    <li onclick="updateNote(${id}, '${note.title}', '${filterDesc}')"><i class="uil uil-pen"></i>Edit</li>
                                    <li onclick="deleteNote(${id})"><i class="uil uil-trash"></i>Delete</li>
                                </ul>
                            </div>
                        </div>
                        <div class="checkbox-container">
                            <input type="checkbox" id="noteCheckbox-${id}" name="noteCheckbox-${id}" onchange="toggleCompletion(${id})" ${note.completed ? 'checked' : ''}>
                            <label for="noteCheckbox-${id}">Completed</label>
                        </div>
                        <div id="starRating">
                            <input type="radio" id="star5-${id}" name="rating-${id}" value="5" onclick="updateRating(${id}, 5)" ${note.rating === 5 ? 'checked' : ''}><label for="star5-${id}"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star4-${id}" name="rating-${id}" value="4" onclick="updateRating(${id}, 4)" ${note.rating === 4 ? 'checked' : ''}><label for="star4-${id}"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star3-${id}" name="rating-${id}" value="3" onclick="updateRating(${id}, 3)" ${note.rating === 3 ? 'checked' : ''}><label for="star3-${id}"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star2-${id}" name="rating-${id}" value="2" onclick="updateRating(${id}, 2)" ${note.rating === 2 ? 'checked' : ''}><label for="star2-${id}"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star1-${id}" name="rating-${id}" value="1" onclick="updateRating(${id}, 1)" ${note.rating === 1 ? 'checked' : ''}><label for="star1-${id}"><i class="fas fa-star"></i></label>
                        </div>
                    </li>`;
    addBox.insertAdjacentHTML("afterend", liTag);
  });
}

// Function to get completed tasks count
function getCompletedCount() {
  let completedCount = notes.filter((note) => note.completed).length;
  return completedCount;
}

showNotes();

// Event listeners
menuBtns.forEach((menuBtn) => {
  menuBtn.addEventListener("click", () => {
    navBar.classList.toggle("open");
  });
});

overlay.addEventListener("click", () => {
  navBar.classList.remove("open");
});

addBox.addEventListener("click", () => {
  popupTitle.innerText = "Add a new Note";
  addBtn.innerText = "Add Note";
  popupBox.classList.add("show");
  document.querySelector("body").style.overflow = "hidden";
  if (window.innerWidth > 660) titleTag.focus();
});

closeIcon.addEventListener("click", () => {
  isUpdate = false;
  titleTag.value = descTag.value = "";
  popupBox.classList.remove("show");
  document.querySelector("body").style.overflow = "auto";
});

function showMenu(elem) {
  elem.parentElement.classList.add("show");
  document.addEventListener("click", (e) => {
    if (e.target.tagName != "I" || e.target != elem) {
      elem.parentElement.classList.remove("show");
    }
  });
}

function deleteNote(noteId) {
  let confirmDel = confirm("Are you sure you want to delete this note?");
  if (!confirmDel) return;
  notes.splice(noteId, 1);
  saveNotes();
  showNotes();
}

function updateNote(noteId, title, filterDesc) {
  let description = filterDesc.replaceAll("<br/>", "\r\n");
  updateId = noteId;
  isUpdate = true;
  addBox.click();
  titleTag.value = title;
  descTag.value = description;
  popupTitle.innerText = "Update a Note";
  addBtn.innerText = "Update Note";
}

addBtn.addEventListener("click", (e) => {
  e.preventDefault();
  let title = titleTag.value.trim(),
    description = descTag.value.trim();

  if (title || description) {
    let currentDate = new Date(),
      month = months[currentDate.getMonth()],
      day = currentDate.getDate(),
      year = currentDate.getFullYear();

    let noteInfo = { title, description, date: `${month} ${day}, ${year}`, rating: selectedRating, completed: false };
    if (!isUpdate) {
      notes.push(noteInfo);
    } else {
      isUpdate = false;
      notes[updateId] = noteInfo;
    }
    saveNotes();
    showNotes();
    closeIcon.click();
  }
});
