{{-- @extends('layout.custom-layout')
@section('content')
<div class="container mt-5">
    <h2 class="text-left font-bold mb-4">ALL YOUR NOTIFICATIONS</h2>

    @if ($notifications->isEmpty())
        <div class="alert alert-info text-center">
            No notifications available.
        </div>
    @else
        <div class="list-group">
            @foreach ($notifications as $notification)
                <div class="list-group-item mb-3 shadow-lg">
                    <h5 class="mb-1">{{ $notification->data['message'] ?? 'No message' }}</h5>
                    <p class="mb-1 text-muted">{{ $notification->data['comment'] ?? '' }}</p>
                    <p>  View Your Post: {{ $notification->data['action'] ?? ''}}</p>
                    <small class="text-secondary">{{ $notification->created_at->diffForHumans() }}</small>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection


   
 --}}
 @extends('layout.custom-layout')

 @section('content')
 <div class="container mt-5">
     <h2 class="text-left font-bold mb-4">ALL YOUR NOTIFICATIONS</h2>
 
     @if ($notifications->isEmpty())
         <div class="alert alert-info text-center">
             No notifications available.
         </div>
     @else
         <div class="list-group">
             @foreach ($notifications as $notification)
                 <div class="list-group-item mb-3 shadow-lg">
                     <h5 class="mb-1">{{ $notification->data['message'] ?? 'No message' }}</h5>
                     <p class="mb-1 text-muted">{{ $notification->data['comment'] ?? '' }}</p>
                     <!-- Make the action URL clickable -->
                     <p>View Your Post: <a href="{{ $notification->data['action'] ?? '#' }}" target="_blank" class="text-blue-500 hover:underline">Click here</a></p>
                     <small class="text-secondary">{{ $notification->created_at->diffForHumans() }}</small>
                 </div>
             @endforeach
         </div>
     @endif
 </div>
 @endsection
 