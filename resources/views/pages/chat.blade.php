@extends('layouts.app')

@section('title', 'Чат')
@include('layouts.THeader')
@include('layouts.TFooter')

@section('content')
    <div class="container">
        <div class="chat-container">
            <div class="chat-messages" id="chat-messages">
                @if(isset($messages))
                    @foreach($messages as $message)
                        <div class="message">
                            <strong>{{ $message->sender->name }}</strong>
                            <p>{{ $message->body }}</p>
                            <small>{{ $message->created_at->diffForHumans() }}</small>
                        </div>
                    @endforeach
                @else
                    <p>Сообщений нет</p>
                @endif
            </div>
            <div class="chat-input">
                <input type="text" id="message-input" placeholder="Введите сообщение...">
                <button id="send-button">send</button>
            </div>
        </div>
    </div>

    <style>
        .chat-container {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-top: 20px;
        }

        .chat-messages {
            height: 300px;
            overflow-y: auto;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        #message-input {
            width: calc(100% - 80px);
            padding: 5px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #send-button {
            width: 70px;
            margin-top: 10px;
            padding: 5px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const messageInput = document.getElementById('message-input');
            const sendButton = document.getElementById('send-button');
            const chatMessages = document.getElementById('chat-messages');

            // Принимаем сообщение из канала "store_message" и выводим его в консоль
            window.Echo.channel('store_message')
                .listen('.store_message', res => {
                    try {
                        console.log('Получено SMS:', res.message.body);
                    } catch (error) {
                        console.error('Ошибка при обработке события:', error);
                    }
                });


            sendButton.addEventListener('click', function () {
                const body = messageInput.value.trim();
                if (body === '') return;

                axios.post('{{ route("sendMessage") }}', {
                    body: body,
                    sms_type: 1
                })
                    .then(response => {
                        messageInput.value = ''; // Очищаем поле ввода после отправки сообщения
                    })
                    .catch(error => {
                        console.error('Ошибка отправки сообщения:', error);
                    });
            });
        });

    </script>
@endsection
