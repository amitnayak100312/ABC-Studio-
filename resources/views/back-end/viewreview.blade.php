
@extends('back-end.maindesign')
@section('viewreview')
<div class="main-content">
    
        <div class="card">
            <h2>Inbox: Client Messages</h2>

            <table>
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($msgreview as $msg)
                    <tr>
                        <td>{{ $msg->created_at->format('M d, Y') }}</td>
                        <td>
                            <span class="client-name">{{ $msg->name }}</span>
                            <span class="client-email">{{ $msg->company_name }}</span>
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
    
@endsection