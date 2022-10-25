<html>
    <head>

    <style>

#nameError {
  display: none;
  font-size: 0.8em;
}

#nameError.visible {
  display: block;
}

input.invalid {
  border-color: red;
}

    </style>
</head>
<body>
<form id="form">
  <label for="firstname"> First Name* </label>
  <input type="text" name="firstname" id="firstname" />
  <button id="submit">Submit</button>

  <span role="alert" id="nameError" aria-hidden="true">
    Please enter First Name
  </span>
</form>
<script>
    const submit = document.getElementById("submit");

    submit.addEventListener("click", validate);

    function validate(e) {
    e.preventDefault();

    const firstNameField = document.getElementById("firstname");
    let valid = true;

    if (!firstNameField.value) {
        const nameError = document.getElementById("nameError");
        nameError.classList.add("visible");
        firstNameField.classList.add("invalid");
        nameError.setAttribute("aria-hidden", false);
        nameError.setAttribute("aria-invalid", true);
    }
    return valid;
    }

</script>

</body>
</html>