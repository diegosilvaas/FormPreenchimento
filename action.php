
Oi <?php echo htmlspecialchars($_POST['name']); ?>.<br>
Você ganhou o teste gratuito de 7 dias!

(function () {
'use strict'
const forms = document.querySelectorAll('.requires-validation')
Array.from(forms)
.forEach(function (form) {
form.addEventListener('submit', function (event) {
if (!form.checkValidity()) {
event.preventDefault()
event.stopPropagation()
}

form.classList.add('was-validated')
}, false)
})
})()

