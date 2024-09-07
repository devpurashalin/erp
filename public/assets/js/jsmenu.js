//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

function updateMinority() {
    const Religion = document.getElementById('religion');
    const Minority = document.getElementById('minority'); 

    const rValue = Religion.value;
  // Map selectedOption1 to correspondingOption2
  switch (rValue) {
    case 'Hindu':
        Minority.value = 'No';
      break;
    default:
        Minority.value = 'Yes';
  }
}



// function toggleVisibility()
// {
//     var div = getElementsById("mydiv");
//     if(div.style.display === 'none')
//     {
//         div.style.display = 'block';
//     }
//     else {
//         div.style.display = 'none';
//     }
// }

// function toggleDiv() {
//     var div = document.getElementById("myDiv");
    
//     // Toggle the visibility of the div
//     if (div.style.display === "none" || div.style.display === "") {
//       div.style.display = "block";

//       // Add a click event listener to the document to hide the div when clicking elsewhere
//       document.addEventListener("click", hideDivOnClick);
//     } else {
//       div.style.display = "none";

//       // Remove the click event listener when hiding the div
//       document.removeEventListener("click", hideDivOnClick);
//     }
//   }

//   function hideDivOnClick(event) {
//     var div = document.getElementById("myDiv");

//     // Check if the click is outside the div
//     if (!div.contains(event.target)) {
//       div.style.display = "none";

//       // Remove the click event listener when hiding the div
//       document.removeEventListener("click", hideDivOnClick);
//     }
// }
