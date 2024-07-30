document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    if (name && email && message) {
        alert(`Thank you for your message, ${name}!`);
    } else {
        alert('Please fill in all fields.');
    }
 });
 
 // Handle chat functionality
 document.getElementById('sendBtn').addEventListener('click', function() {
    const chatInput = document.getElementById('chatInput');
    const messages = document.getElementById('messages');
    if (chatInput.value.trim() !== '') {
        const newMessage = document.createElement('div');
        newMessage.textContent = chatInput.value;
        messages.appendChild(newMessage);
        chatInput.value = '';
    }
 });