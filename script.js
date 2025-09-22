document.getElementById("registerForm").addEventListener("submit", function(event) {
    let policyCheckbox = document.getElementById("policy");
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm-password").value;

    // Privacy Policy Validation
    if (!policyCheckbox.checked) {
        alert("You must agree to the Terms & Privacy Policy before registering.");
        event.preventDefault();
        return;
    }

    // Password Match Validation
    if (password !== confirmPassword) {
        alert("Passwords do not match. Please re-enter correctly.");
        event.preventDefault();
        return;
    }
});



    // Function to show the edit form when the button is clicked
    function editProfile() {
        document.getElementById("edit-form").style.display = "block"; // Show the form
    }

    // Event listener to handle form submission
    document.getElementById("profile-edit-form").addEventListener("submit", function(e) {
        e.preventDefault(); // Prevent form submission
        
        // Update the user info based on form input
        document.getElementById("full-name").textContent = document.getElementById("edit-name").value;
        document.getElementById("email").textContent = document.getElementById("edit-email").value;
        document.getElementById("phone").textContent = document.getElementById("edit-phone").value;
        document.getElementById("address").textContent = document.getElementById("edit-address").value;
        document.getElementById("gender").textContent = document.getElementById("edit-gender").value;
        
        // Hide the edit form after updating
        document.getElementById("edit-form").style.display = "none"; // Hide the form
    });

    // responsive-menu

    let menuList = document.getElementById("menulist")
    menuList.style.maxHeight = "0px";

    function toggleMenu(){
        if(menuList.style.maxHeight == "0px")
        {
            menuList.style.maxHeight = "300px";
        }
        else{
            menuList.style.maxHeight = "0px";
        }
    }
