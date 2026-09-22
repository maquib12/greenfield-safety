@extends('layouts.admin')

@section('title', 'Message Details | Greenfield Admin')

@section('page-title', 'Message Details')

@section('content')

<div class="admin-page-wrapper">

    {{-- Page Header --}}
    <div class="admin-page-header">

        <div>
            <span class="section-eyebrow">
                Contact Enquiry
            </span>

            <h1>Message Details</h1>

            <p>
                View the complete details of this contact enquiry.
            </p>
        </div>

        <a
            href="{{ route('admin.contact-messages') }}"
            class="admin-back-btn"
        >
            <i class="bi bi-arrow-left"></i>
            Back to Messages
        </a>

    </div>


    {{-- Message Details --}}
    <div class="admin-message-detail-card">

        <div class="admin-message-detail-header">

            <div class="admin-message-avatar">
                <i class="bi bi-person"></i>
            </div>

            <div>
                <h2>{{ $message->name }}</h2>

                <span>
                    Received
                    {{ $message->created_at->format('d M Y, h:i A') }}
                </span>
            </div>

        </div>


        <div class="admin-message-info-grid">

            <div class="admin-message-info-item">

                <span>
                    <i class="bi bi-envelope"></i>
                    Email
                </span>

                <a href="mailto:{{ $message->email }}">
                    {{ $message->email }}
                </a>

            </div>


            <div class="admin-message-info-item">

                <span>
                    <i class="bi bi-telephone"></i>
                    Phone
                </span>

                @if($message->phone)

                    <a href="tel:{{ $message->phone }}">
                        {{ $message->phone }}
                    </a>

                @else

                    <strong>—</strong>

                @endif

            </div>


            <div class="admin-message-info-item">

                <span>
                    <i class="bi bi-chat-left-text"></i>
                    Subject
                </span>

                <strong>
                    {{ $message->subject ?: 'No subject' }}
                </strong>

            </div>

        </div>


        <div class="admin-full-message">

            <div class="admin-full-message-label">
                <i class="bi bi-envelope-open"></i>
                Message
            </div>

            <div class="admin-full-message-content">
                {{ $message->message }}
            </div>

        </div>


        <div class="admin-message-detail-actions">

            <a
                href="mailto:{{ $message->email }}"
                class="admin-reply-btn"
            >
                <i class="bi bi-reply"></i>
                Reply by Email
            </a>


            <form
                action="{{ route('admin.contact-messages.destroy', $message) }}"
                method="POST"
                onsubmit="return confirm('Are you sure you want to delete this message?');"
            >

                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="admin-detail-delete-btn"
                >
                    <i class="bi bi-trash"></i>
                    Delete Message
                </button>

            </form>

        </div>

    </div>

</div>

@endsection