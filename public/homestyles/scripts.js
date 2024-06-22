function toggleForm() {
    const loginForm = document.getElementById('loginForm');
    const registrationForm = document.getElementById('registrationForm');
    if (loginForm.style.display === 'none') {
        loginForm.style.display = 'block';
        registrationForm.style.display = 'none';
    } else {
        loginForm.style.display = 'none';
        registrationForm.style.display = 'block';
    }
}

function toggleRole(role) {
    document.body.className = role;

    const teacherButton = document.querySelector('.form-header button[data-role="teacher"]');
    const studentButton = document.querySelector('.form-header button[data-role="student"]');

    if (role === 'teacher') {
        teacherButton.classList.add('active');
        studentButton.classList.remove('active');
    } else if (role === 'student') {
        studentButton.classList.add('active');
        teacherButton.classList.remove('active');
    }
}
