<script>
  document.querySelector("form").addEventListener("submit", function(e) {
    e.preventDefault(); // prevent form from refreshing
    const email = document.querySelector("input[type='text']").value;
    const password = document.querySelector("input[type='password']").value;
    
    // Simulate login
    if(email === "test@example.com" && password === "1234"){
      alert("Login successful!");
    } else {
      alert("Invalid credentials.");
    }
  });
</script>