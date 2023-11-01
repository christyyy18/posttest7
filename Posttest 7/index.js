function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}

document.getElementById("inputForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Menghentikan pengiriman formulir
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const outputDiv = document.getElementById("output");

    outputDiv.innerHTML = `
        <p>Nama: ${name}</p>
        <p>Email: ${email}</p>
        <p>Password: ******** (Tidak disimpan untuk alasan keamanan)</p>
    `;
});

function displayOutput() {
    var inputElement = document.getElementById("userInput");
    var outputElement = document.getElementById("output");
    outputElement.textContent = inputElement.value;
}