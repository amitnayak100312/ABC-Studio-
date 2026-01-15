@extends('back-end.maindesign')
@section('viewClient')
<div class="main-content">

        @if(session('success'))
        <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 4px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
            <i class="fa-solid fa-check-circle"></i> {{ session('success') }}
        </div>
        @endif

        <div class="card">
            <h2>Inbox: Client Messages</h2>

            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Client Name</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $msg)
                    <tr>
                        <td>{{ $msg->created_at->format('M d, Y') }}</td>
                        <td>
                            <span class="client-name">{{ $msg->name }}</span>
                            <span class="client-email">{{ $msg->email }}</span>
                        </td>
                        <td>{{ $msg->subject }}</td>
                        <td>{{ Str::limit($msg->message, 40) }}</td>
                        <td>
                            <button class="btn-reply" onclick="openReplyModal('{{ $msg->email }}', '{{ $msg->subject }}')">
                                Reply
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    
                    @if($messages->isEmpty())
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 30px; color: #999;">
                            No messages found.
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div id="replyModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h3 style="margin-bottom: 20px;">Reply to Client</h3>
            
            <form action="{{ route('admin.sendReply') }}" method="POST">
                @csrf
                
                <label>To:</label>
                <input type="email" name="email" id="modal-email" readonly style="background: #f9f9f9; color: #777;">
                
                <input type="hidden" name="original_subject" id="modal-subject-hidden">
                
                <label>Subject:</label>
                <input type="text" id="modal-subject-display" disabled style="background: #f9f9f9;">

                <label>Message:</label>
                <textarea name="reply_message" rows="5" placeholder="Type your response..." required></textarea>

                <button type="submit" class="btn-submit">Send Reply</button>
            </form>
        </div>
    </div>

    <script>
        const modal = document.getElementById("replyModal");
        const emailInput = document.getElementById("modal-email");
        const subjectDisplay = document.getElementById("modal-subject-display");
        const subjectHidden = document.getElementById("modal-subject-hidden");

        function openReplyModal(email, subject) {
            modal.style.display = "block";
            emailInput.value = email;
            subjectDisplay.value = "Re: " + subject;
            subjectHidden.value = subject;
        }

        function closeModal() {
            modal.style.display = "none";
        }

        // Close if clicking outside
        window.onclick = function(event) {
            if (event.target == modal) {
                closeModal();
            }
        }
    </script>
@endsection