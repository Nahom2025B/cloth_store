Document.getElementById("loginButton").addEventListener("click", function() {
     var username = document.getElementById("usernameInput").value;
     var password = document.getElementById("passwordInput").value;
     if (username === "" || password === "") {
         alert("Please fill in both username and password.");
     }
});