<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;1,300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="title-container">
      <h1 class="title">Welcome <br />to Our <br />Platform!</h1>
      <h2 class="subtitle">
        Join our community<br />
        and enjoy exclusive<br />
        features
      </h2>
      <h2 class="ready">
        Ready to get<br />
        started? Join now!
      </h2>
    </div>

    <div class="container">
      <button class="lang-button">
        <img
          src="/assets/images/worldicon.png"
          alt="world icon"
          class="lang-icon"
        />
        English
        <img
        src="/assets/images/arrow.png"
        alt="world icon"
        class="lang-icon-arrow"
      />
      </button>
      <div class="form-container">
        <h1 class="form-title">Get Started</h1>
        <form method="POST" action="/scripts/process_form.php">
          <input
            type="text"
            id="username"
            name="username"
            required
            placeholder="Username"
          />
          <input
            type="email"
            id="email"
            name="email"
            required
            placeholder="Email"
          />
          <input
            type="password"
            id="password"
            name="password"
            required
            placeholder="Password"
          />
          <div class="password-container">
    <input
      type="password"
      id="confirm_password"
      name="confirm_password"
      required
      placeholder="Confirm Password"
      oninput="this.setCustomValidity(this.value !== document.getElementById('password').value ? 'La contraseña no coincide o ingrese una de 6 caracteres' : '')"
    />
    <img
      src="/assets/images/seepasswordicon.png"
      alt="see password icon"
      class="password-icon"
    />
  </div>
          <div class="checkbox-container">
            <input type="checkbox" id="agree" name="agree" required />
            <label for="agree"
              >I have read and agree to the Terms and Conditions.</label
            >
          </div>
          <button type="submit">Sign Up</button>
        </form>
      </div>
    </div>
  </body>
</html>
