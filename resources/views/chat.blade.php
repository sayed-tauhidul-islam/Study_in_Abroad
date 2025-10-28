@extends('layouts.app')

@section('title', 'Chat Support | Study Abroad')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Chat Support</h1>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <div id="chat-messages" class="h-96 overflow-y-auto mb-4 p-4 border rounded-lg bg-gray-50">
                <div class="text-center text-gray-500">
                    Welcome to StudyAbroad Chat Support! How can I help you today?
                </div>
            </div>

            <div class="flex">
                <input type="text" id="message-input" placeholder="Type your message..."
                    class="flex-1 px-4 py-2 border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button id="send-button"
                    class="bg-blue-600 text-white px-6 py-2 rounded-r-lg hover:bg-blue-700 transition">
                    Send
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const messageInput = document.getElementById('message-input');
        const sendButton = document.getElementById('send-button');
        const chatMessages = document.getElementById('chat-messages');

        function addMessage(message, isUser = false) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `mb-4 ${isUser ? 'text-right' : 'text-left'}`;
            messageDiv.innerHTML = `
            <div class="inline-block px-4 py-2 rounded-lg ${isUser ? 'bg-blue-600 text-white' : 'bg-white text-gray-800 border'}">
                ${message}
            </div>
        `;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function sendMessage() {
            const message = messageInput.value.trim();
            if (message) {
                addMessage(message, true);
                messageInput.value = '';

                // Show typing indicator
                const typingDiv = document.createElement('div');
                typingDiv.id = 'typing-indicator';
                typingDiv.className = 'mb-4 text-left';
                typingDiv.innerHTML = `
                    <div class="inline-block px-4 py-2 rounded-lg bg-gray-200 text-gray-600">
                        <div class="flex items-center">
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-gray-500 rounded-full animate-bounce"></div>
                                <div class="w-2 h-2 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
                                <div class="w-2 h-2 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                            </div>
                            <span class="ml-2">Typing...</span>
                        </div>
                    </div>
                `;
                chatMessages.appendChild(typingDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;

                // Send to server
                fetch('/chat/send', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]') ?
                                document.querySelector('meta[name="csrf-token"]').getAttribute('content') :
                                ''
                        },
                        body: JSON.stringify({
                            message: message
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Remove typing indicator
                        const typingIndicator = document.getElementById('typing-indicator');
                        if (typingIndicator) {
                            typingIndicator.remove();
                        }
                        // Add bot response
                        addMessage(data.response, false);
                    })
                    .catch(error => {
                        // Remove typing indicator
                        const typingIndicator = document.getElementById('typing-indicator');
                        if (typingIndicator) {
                            typingIndicator.remove();
                        }
                        addMessage('Sorry, there was an error. Please try again.');
                        console.error('Chat error:', error);
                    });
            }
        }

        sendButton.addEventListener('click', sendMessage);
        messageInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // Auto-scroll to bottom on load
        chatMessages.scrollTop = chatMessages.scrollHeight;
    });

</script>
@endsection
