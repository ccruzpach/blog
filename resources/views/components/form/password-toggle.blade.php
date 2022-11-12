<input type="checkbox" onclick="togglePassword()" class="mt-4"> Show Password

<script>
    function togglePassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>