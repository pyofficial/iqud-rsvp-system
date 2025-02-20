<div wire:poll class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Attendees</th>
                        @auth
                        <th>RSVP</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                    {{--dd(auth()->user()->events)--}}
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->date->format('Y-m-d H:i') }}</td>
                        <td>{{ $event->users_count ?? 0 }}</td>
                        @auth
                            <td>
                                @if(auth()->user()->events->contains('id', $event->id))
                                <a class="btn btn-outline-danger" href="{{ route('detach', ['id' => $event->id]) }}" role="button">Leave</a>
                                @else
                                <a class="btn btn-outline-primary" href="{{ route('attach', ['id' => $event->id]) }}" role="button">Participate</a>
                                @endif
                            </td>
                            @endauth
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $events->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>