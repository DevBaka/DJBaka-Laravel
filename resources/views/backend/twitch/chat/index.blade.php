@extends('backend.dashboard')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    /* Chat container */
    .chat-container {
        scrollbar-width: thin;
        scrollbar-color: #4f545c #2d3035;
        height: calc(100vh - 200px);
        overflow-y: auto;
        background-color: #2d3035;
        padding: 15px;
    }
    
    /* Webkit scrollbar */
    .chat-container::-webkit-scrollbar {
        width: 8px;
    }
    
    .chat-container::-webkit-scrollbar-track {
        background: #2d3035;
    }
    
    .chat-container::-webkit-scrollbar-thumb {
        background-color: #4f545c;
        border-radius: 4px;
    }
    
    .chat-container::-webkit-scrollbar-thumb:hover {
        background: #5d6269;
    }
    
    /* Message styling */
    .message {
        transition: all 0.2s ease-in-out;
        background-color: #36393f;
        border-left: 3px solid #9147ff;
        margin-bottom: 0.75rem;
        padding: 0.75rem;
        border-radius: 4px;
        color: #fff;
    }
    
    .message:hover {
        transform: translateX(2px);
    }
    
    /* Username styling */
    .username {
        color: #9147ff !important;
        font-weight: 600;
        margin-right: 10px;
    }
    
    /* Timestamp styling */
    .timestamp {
        color: #72767d;
        font-size: 0.75rem;
    }
    
    /* Message text */
    .message-text {
        color: #dcddde;
        margin-top: 4px;
        word-break: break-word;
    }
    
    /* Loading spinner */
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
    
    #loading-spinner {
        color: #9147ff;
        width: 2rem;
        height: 2rem;
        border-width: 0.2em;
        animation: spin 0.75s linear infinite;
    }
    
    /* No messages/error message */
    .alert {
        margin: 0;
        border-radius: 0;
        border: none;
    }
    
    .alert-dark {
        background-color: #2d3035 !important;
        color: #fff !important;
    }
    
    .alert i {
        margin-right: 5px;
    }
    
    /* Card styling */
    .card {
        border: none;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    
    .card-header {
        border-bottom: 1px solid #36393f;
    }
</style>
@endpush

@section('backend')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h4 class="card-title mb-0">Twitch Chat</h4>
                </div>
                <div class="card-body p-0">
                    <div class="chat-container">
                        <div id="chat-messages" class="p-3">
                            <div class="d-flex justify-content-center align-items-center" style="min-height: 100px;">
                                <div class="spinner-border text-primary" role="status" id="loading-spinner">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Function to load messages
    function loadMessages() {
        $.ajax({
            url: '{{ route("twitch.chat.messages") }}',
            method: 'GET',
            dataType: 'json',
            beforeSend: function() {
                // Show loading spinner if it's the initial load
                if ($('#loading-spinner').length > 0) {
                    $('#loading-spinner').show();
                }
            },
            success: function(response) {
                console.log('Chat response:', response);
                
                let html = '';
                
                if (response.status === 'success' && response.data && response.data.length > 0) {
                    response.data.forEach(function(message) {
                        if (!message.username || !message.message) {
                            console.warn('Invalid message format:', message);
                            return;
                        }
                        
                        html += `
                        <div class="message">
                            <div class="d-flex align-items-center">
                                <strong class="username">${message.username}</strong>
                                <span class="timestamp">${message.time || ''}</span>
                            </div>
                            <div class="message-text">${message.message}</div>
                        </div>
                        `;
                    });
                } else {
                    html = `
                        <div class="alert alert-dark text-white">
                            <i class="fas fa-info-circle me-2"></i> No messages found. Start chatting in your Twitch channel!
                        </div>
                    `;
                    
                    if (response.status === 'error') {
                        console.error('Error loading messages:', response.message);
                        html = `
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-triangle me-2"></i> Error: ${response.message || 'Unknown error occurred'}
                            </div>
                        `;
                    }
                }
                
                // Update the chat messages container
                $('#chat-messages').html(html);
                
                // Auto-scroll to bottom
                const container = $('.chat-container')[0];
                container.scrollTop = container.scrollHeight;
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                $('#chat-messages').html(`
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-triangle me-2"></i> Error loading messages. Check console for details.
                        <div class="small mt-1">${error}</div>
                    </div>
                `);
            },
            complete: function() {
                // Hide loading spinner when request is complete
                $('#loading-spinner').hide();
            }
        });
    }

    // Load messages initially
    loadMessages();

    // Refresh messages every 3 seconds
    setInterval(loadMessages, 3000);
});
</script>

@push('scripts')
<script>
$(document).ready(function() {
    // Function to load messages
    function loadMessages() {
        $.ajax({
            url: '{{ route("twitch.chat.messages") }}',
            method: 'GET',
            dataType: 'json',
            beforeSend: function() {
                // Show loading spinner if it's the initial load
                if ($('#loading-spinner').length > 0) {
                    $('#loading-spinner').show();
                }
            },
            success: function(response) {
                console.log('Chat response:', response);
                
                let html = '';
                
                if (response.status === 'success' && response.data && response.data.length > 0) {
                    response.data.forEach(function(message) {
                        if (!message.username || !message.message) {
                            console.warn('Invalid message format:', message);
                            return;
                        }
                        
                        html += `
                        <div class="message">
                            <div class="d-flex align-items-center">
                                <strong class="username">${message.username}</strong>
                                <span class="timestamp">${message.time || ''}</span>
                            </div>
                            <div class="message-text">${message.message}</div>
                        </div>
                        `;
                    });
                } else {
                    html = `
                        <div class="alert alert-dark text-white border-0 rounded-0">
                            <i class="fas fa-info-circle me-2"></i> No messages found. Start chatting in your Twitch channel!
                        </div>
                    `;
                    
                    if (response.status === 'error') {
                        console.error('Error loading messages:', response.message);
                        html = `
                            <div class="alert alert-danger border-0 rounded-0">
                                <i class="fas fa-exclamation-triangle me-2"></i> Error: ${response.message || 'Unknown error occurred'}
                            </div>
                        `;
                    }
                }
                
                // Update the chat messages container
                $('#chat-messages').html(html);
                
                // Auto-scroll to bottom
                const container = $('.chat-container')[0];
                container.scrollTop = container.scrollHeight;
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                $('#chat-messages').html(`
                    <div class="alert alert-danger border-0 rounded-0">
                        <i class="fas fa-exclamation-triangle me-2"></i> Error loading messages. Check console for details.
                        <div class="small mt-1">${error}</div>
                    </div>
                `);
            },
            complete: function() {
                // Hide loading spinner when request is complete
                $('#loading-spinner').hide();
            }
        });
    }

    // Load messages initially
    loadMessages();

    // Refresh messages every 3 seconds
    setInterval(loadMessages, 3000);
});
</script>
@endpush

@endsection
