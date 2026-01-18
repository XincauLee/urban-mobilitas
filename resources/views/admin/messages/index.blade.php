@extends('layouts.admin')

@section('header', 'Pesan Masuk')

@section('content')
<div class="grid gap-6">
    @foreach($messages as $msg)
    <div class="bg-white rounded-sm shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow">
        <div class="flex justify-between items-start mb-4">
            <div>
                <h3 class="font-bold text-oxford text-lg">{{ $msg->subject }}</h3>
                <div class="text-sm text-gray-500 mt-1">
                    Dari: <span class="font-medium text-gray-800">{{ $msg->name }}</span> ({{ $msg->email }})
                </div>
            </div>
            <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded-sm border border-gray-100">
                {{ $msg->created_at->format('d M Y, H:i') }}
            </span>
        </div>
        <div class="text-gray-600 text-sm leading-relaxed border-t border-gray-100 pt-4 mb-4">
            {{ $msg->message }}
        </div>
        <div class="flex justify-end">
            <form action="{{ route('admin.messages.destroy', $msg) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 text-xs font-bold uppercase tracking-wider hover:text-red-700">Hapus Pesan</button>
            </form>
        </div>
    </div>
    @endforeach

    {{ $messages->links() }}
</div>
@endsection