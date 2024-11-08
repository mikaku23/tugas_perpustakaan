window.addEventListener("load", function () {
  const loader = document.querySelector(".loader");
  loader.className += " hidden";
});
function login(event) {
  event.preventDefault();

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Periksa username dan password
  if (username === "haliq" && password === "1234") {
    document.getElementById("loginMessage").textContent = "Login berhasil!";
    window.open("YZ gaming.html");
    // Di sini Anda dapat menambahkan aksi setelah login berhasil
  } else {
    document.getElementById("loginMessage").textContent =
      "Login gagal. Periksa kembali username dan password.";
  }
}

window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader-hidden");

  loader.addEventListener("Transitionend", () => {
    document.body.removeChild("loader");
  });
});
