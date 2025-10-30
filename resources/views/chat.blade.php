@extends('layouts.app')

<blade
    section|(%26%2339%3Btitle%26%2339%3B%2C%20%26%2339%3BAI%20Chat%20Assistant%20%7C%20Study%20Abroad%26%2339%3B)%0D />

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50 py-8">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-8">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full mb-4 shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                        </path>
                    </svg>
                </div>
                <h1
                    class="text-4xl font-extrabold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">
                    AI Study Abroad Assistant
                </h1>
                <p class="text-gray-600 text-lg">Ask me anything about universities, scholarships, visas, and more! 🎓
                </p>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-2xl shadow-xl mb-6 p-4">
                <p class="text-sm font-semibold text-gray-700 mb-3">💡 Quick Questions:</p>
                <div class="flex flex-wrap gap-2">
                    <button
                        class="quick-question px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-full text-sm font-medium transition">
                        Tell me about Harvard
                    </button>
                    <button
                        class="quick-question px-4 py-2 bg-green-100 hover:bg-green-200 text-green-700 rounded-full text-sm font-medium transition">
                        MBA programs
                    </button>
                    <button
                        class="quick-question px-4 py-2 bg-purple-100 hover:bg-purple-200 text-purple-700 rounded-full text-sm font-medium transition">
                        Full scholarships
                    </button>
                    <button
                        class="quick-question px-4 py-2 bg-orange-100 hover:bg-orange-200 text-orange-700 rounded-full text-sm font-medium transition">
                        Study in Canada
                    </button>
                    <button
                        class="quick-question px-4 py-2 bg-pink-100 hover:bg-pink-200 text-pink-700 rounded-full text-sm font-medium transition">
                        Work opportunities
                    </button>
                    <button
                        class="quick-question px-4 py-2 bg-teal-100 hover:bg-teal-200 text-teal-700 rounded-full text-sm font-medium transition">
                        PGWP visa
                    </button>
                </div>
            </div>

            <!-- Chat Container -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                <!-- Chat Messages -->
                <div id="chat-messages" class="h-[500px] overflow-y-auto p-6 bg-gradient-to-b from-gray-50 to-white">
                    <div class="flex items-start mb-6">
                        <div
                            class="flex-shrink-0 w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                            AI
                        </div>
                        <div class="flex-1 bg-white rounded-2xl rounded-tl-none shadow-md p-4 border border-gray-100">
                            <p class="text-gray-800 whitespace-pre-line">👋 Hello! I'm your AI Study Abroad Assistant
                                with comprehensive knowledge about:

                                🎓 <strong>Universities</strong> - Rankings, programs, admission requirements
                                🌍 <strong>Countries</strong> - USA, UK, Canada, Australia, Germany & more
                                💰 <strong>Scholarships</strong> - Full funding, merit-based, need-based
                                📚 <strong>Degrees</strong> - Bachelor's, Master's, MBA, PhD
                                💼 <strong>Work</strong> - OPT, PGWP, job opportunities, PR pathways
                                🛂 <strong>Visas</strong> - Student visas, work permits, requirements

                                Try asking: "Tell me about Harvard", "MBA programs", "Full scholarships", "Study in
                                Canada", or anything else!</p>
                        </div>
                    </div>
                </div>

                <!-- Input Area -->
                <div class="border-t border-gray-200 bg-white p-4">
                    <div class="flex gap-2">
                        <input type="text" id="message-input" placeholder="Ask me anything about studying abroad..."
                            class="flex-1 px-5 py-3 border-2 border-gray-300 rounded-full focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition">
                        <button id="send-button"
                            class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full hover:from-blue-700 hover:to-purple-700 transition shadow-lg hover:shadow-xl font-semibold flex items-center gap-2">
                            <span>Send</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </div>
                    <p class="text-xs text-gray-500 mt-2 text-center">💡 Ask about universities, courses, scholarships,
                        visas, work opportunities, and more!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const messageInput = document.getElementById('message-input');
        const sendButton = document.getElementById('send-button');
        const chatMessages = document.getElementById('chat-messages');
        const quickQuestions = document.querySelectorAll('.quick-question');

        function addMessage(message, isUser = false) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `flex items-start mb-6 ${isUser ? 'flex-row-reverse' : ''}`;

            // Format message for better display
            const formattedMessage = message
                .replace(/\n/g, '<br>')
                .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                .replace(/•/g, '<span class="text-blue-600">•</span>')
                .replace(/✓/g, '<span class="text-green-600">✓</span>')
                .replace(
                    /🎓|🌍|💰|📚|💼|🛂|🏆|📋|⏱️|💡|✅|⚠️|🔬|💻|⚙️|🧮|🧪|🧬|🏢|📊|🔵|🟢|🟡|🟠|🔴|🟣|🏠|🇺🇸|🇬🇧|🇨🇦|🇦🇺|🇩🇪|🇳🇱/g,
                    '<span class="text-2xl">$&</span>');

            messageDiv.innerHTML = `
                <div class="flex-shrink-0 w-10 h-10 ${isUser ? 'ml-3 bg-gradient-to-r from-purple-600 to-pink-600' : 'mr-3 bg-gradient-to-r from-blue-600 to-purple-600'} rounded-full flex items-center justify-center text-white font-bold">
                    ${isUser ? 'You' : 'AI'}
                </div>
                <div class="flex-1 ${isUser ? 'bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-2xl rounded-tr-none' : 'bg-white border border-gray-100 text-gray-800 rounded-2xl rounded-tl-none'} shadow-md p-4 max-w-3xl">
                    <p class="whitespace-pre-line leading-relaxed">${formattedMessage}</p>
                </div>
            `;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function sendMessage(messageText = null) {
            const message = messageText || messageInput.value.trim();
            if (message) {
                addMessage(message, true);
                if (!messageText) {
                    messageInput.value = '';
                }

                // Show typing indicator
                const typingDiv = document.createElement('div');
                typingDiv.id = 'typing-indicator';
                typingDiv.className = 'flex items-start mb-6';
                typingDiv.innerHTML = `
                    <div class="flex-shrink-0 w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                        AI
                    </div>
                    <div class="bg-white border border-gray-100 rounded-2xl rounded-tl-none shadow-md p-4">
                        <div class="flex items-center gap-2">
                            <div class="flex space-x-1">
                                <div class="w-2 h-2 bg-blue-500 rounded-full animate-bounce"></div>
                                <div class="w-2 h-2 bg-purple-500 rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
                                <div class="w-2 h-2 bg-pink-500 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                            </div>
                            <span class="text-gray-600 font-medium">AI is thinking...</span>
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
                        // Add bot response with slight delay for natural feel
                        setTimeout(() => {
                            addMessage(data.response, false);
                        }, 300);
                    })
                    .catch(error => {
                        // Remove typing indicator
                        const typingIndicator = document.getElementById('typing-indicator');
                        if (typingIndicator) {
                            typingIndicator.remove();
                        }
                        addMessage(
                            'Sorry, there was an error processing your request. Please try again. 😕',
                            false);
                        console.error('Chat error:', error);
                    });
            }
        }

        // Send button click
        sendButton.addEventListener('click', () => sendMessage());

        // Enter key press
        messageInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // Quick question buttons
        quickQuestions.forEach(button => {
            button.addEventListener('click', function () {
                const question = this.textContent.trim();
                messageInput.value = question;
                sendMessage(question);
            });
        });

        // Auto-scroll to bottom on load
        chatMessages.scrollTop = chatMessages.scrollHeight;

        // Focus on input
        messageInput.focus();
    });

</script>

<style>
    /* Custom scrollbar for chat */
    #chat-messages::-webkit-scrollbar {
        width: 8px;
    }

    #chat-messages::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    #chat-messages::-webkit-scrollbar-thumb {
        background: linear-gradient(180deg, #3b82f6, #9333ea);
        border-radius: 10px;
    }

    #chat-messages::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(180deg, #2563eb, #7e22ce);
    }

</style>
@endsection
