@extends('layouts.admin')

@section('title', 'Contact Messages | Greenfield Admin')

@section('page-title', 'Contact Messages')

@section('content')

<div class="admin-page-wrapper">

    {{-- Top Header --}}
    <div class="admin-page-header">

        <div>
            <span class="section-eyebrow">
                Greenfield Administration
            </span>

            <h1>Contact Messages</h1>

            <p>
                View enquiries and messages submitted through the website.
            </p>
        </div>

        <a
            href="{{ route('admin.dashboard') }}"
            class="admin-back-btn"
        >
            <i class="bi bi-arrow-left"></i>
            Dashboard
        </a>

    </div>


    {{-- Messages --}}
    <div class="admin-table-card">
        @if(session('success'))

            <div class="admin-success-message">

                <i class="bi bi-check-circle-fill"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif

        <div class="admin-table-header">

            <div>
                <h2>All Messages</h2>

                <span>
                    {{ $messages->count() }} message(s)
                </span>
            </div>

        </div>


        @if($messages->count())

            <div class="admin-table-wrapper">

                <table class="admin-data-table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($messages as $message)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    <strong>
                                        {{ $message->name }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $message->email }}
                                </td>

                                <td>
                                    {{ $message->phone ?: '—' }}
                                </td>

                                <td>
                                    {{ $message->subject ?: '—' }}
                                </td>

                                <td>
                                    <div class="admin-message-preview">
                                        {{ $message->message }}
                                    </div>
                                </td>

                                <td>
                                    {{ $message->created_at->format('d M Y') }}
                                </td>
                                <td>

                                    <div class="admin-table-actions">

                                        {{-- View --}}
                                        <a
                                            href="{{ route('admin.contact-messages.show', $message) }}"
                                            class="admin-view-btn"
                                            title="View Message"
                                        >
                                            <i class="bi bi-eye"></i>
                                        </a>


                                        {{-- Delete --}}
                                        <form
                                            action="{{ route('admin.contact-messages.destroy', $message) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this message?');"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="admin-delete-btn"
                                                title="Delete Message"
                                            >
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            <div class="admin-empty-state">

                <div class="admin-empty-icon">
                    <i class="bi bi-envelope-open"></i>
                </div>

                <h3>No Messages Yet</h3>

                <p>
                    Contact enquiries submitted from the website
                    will appear here.
                </p>

            </div>

        @endif

    </div>

</div>

@endsection