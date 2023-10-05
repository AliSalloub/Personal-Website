const blogForm = document.getElementById("blog-form");

blogForm.addEventListener("submit", function (event) {
  const title = document.getElementById("title");
  const content = document.getElementById("content");

  let missingFields = false;

  if (title.value.trim() === "") {
    title.classList.add("missing-field");
    missingFields = true;
  } else {
    title.classList.remove("missing-field");
  }

  if (content.value.trim() === "") {
    content.classList.add("missing-field");
    missingFields = true;
  } else {
    content.classList.remove("missing-field");
  }

  if (missingFields) {
    event.preventDefault();
  }
});

// Existing code for the Clear button
document.getElementById("clearButton").addEventListener("click", function () {
  if (confirm("Are you sure you want to clear the content?")) {
    document.getElementById("title").value = "";
    document.getElementById("content").value = "";
  }
});



document.getElementById("clearButton").addEventListener("click", function() {
    if (confirm("Are you sure you want to clear the content?")) {
        document.getElementById("title").value = "";
        document.getElementById("content").value = "";
    }
});

