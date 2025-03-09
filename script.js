function toggleMenu() {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open");
    icon.classList.toggle("open");
  }

  function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    if (name === "" || email === "" || message === "") {
        alert("Please fill in all fields before submitting.");
        return false; 
    }

    alert("BOOM! Your message has launched into my inbox., " + name + "..Prepare for a reply soon!");
    
    document.querySelector("form").reset();

    return false; 
}


  