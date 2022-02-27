const fname = document.getElementById('firstname')
const lname = document.getElementById('lastname')
const form = document.getElementById('idform')

const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if (name.value === '' || name.value == null) {
        messages.push("name is required")
    }
    if (messages.length > 0) {
        e.preventDefault()
    }

    if (password.value.length <= 6) {
        messages.push('Password must be longer')
    }
})